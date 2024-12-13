<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use Illuminate\Support\Facades\Storage;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::all();  // Mengambil semua data skills dari database
        $title = 'Delete Skill!';
        $text = "Are you sure you want to delete?";
        // Menambahkan konfirmasi delete
        confirmDelete($title, $text);
        return view('admin.skills.index', compact('skills'));  // Mengirim data skills ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Menyimpan gambar jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('skills', 'public');
        }
        
        // Membuat skill baru di database
        Skill::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,  // Menyimpan path gambar
        ]);
    
        // Redirect kembali ke daftar skills dengan pesan sukses
        return redirect()->route('admin.skills.index')->with('success', 'Skill baru berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $skill = Skill::findOrFail($id);
        return view('admin.skills.show', compact('skill'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $skill = Skill::findOrFail($id); // Ambil skill berdasarkan ID
        return view('admin.skills.edit', compact('skill')); // Kirim data skill ke view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        $skill = Skill::findOrFail($id); // Ambil skill berdasarkan ID

        // Menangani update gambar jika ada
        if ($request->hasFile('image')) {
            // Hapus gambar lama dari storage jika ada
            if ($skill->image) {
                Storage::delete('public/' . $skill->image);
            }

            // Simpan gambar baru
            $imagePath = $request->file('image')->store('skills', 'public');
            $skill->image = $imagePath; // Perbarui path gambar
        }

        // Update data skill lainnya
        $skill->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.skills.index')->with('success', 'Skill berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);

        // Hapus gambar terkait jika ada
        if ($skill->image) {
            Storage::delete('public/' . $skill->image);
        }

        // Hapus data skill
        $skill->delete();

        return redirect()->route('admin.skills.index')->with('success', 'Skill berhasil dihapus.');
    }
}
