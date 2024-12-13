<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certificate;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    /**
     * Menampilkan daftar resource.
     */
    public function index()
    {
        // Mengambil semua data sertifikat dari database
        $certificates = Certificate::all();
        $title = 'Delete Certificate!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.certificates.index', compact('certificates'));
    }

    /**
     * Menampilkan form untuk membuat resource baru.
     */
    public function create()
    {
        // Menampilkan form untuk membuat sertifikat baru
        return view('admin.certificates.create');
    }

    /**
     * Menyimpan resource yang baru dibuat ke dalam storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'issued_by' => 'required',
            'issued_at' => 'required|date',
            'file' => 'required|file',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        $data = $request->all();
    
        // Handle file upload
        if ($request->hasFile('file')) {
            $data['file'] = $request->file('file')->store('certificates', 'public');
        }
    
        // Handle thumbnail upload
        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('certificates/thumbnails', 'public');
        }
    
        Certificate::create($data);
    
        return redirect()->route('admin.certificates.index')->with('success', 'Certificate added successfully.');
    }
    

    /**
     * Menampilkan resource yang ditentukan.
     */
  // Di CertificateController
  public function show($id)
  {
      $certificate = Certificate::findOrFail($id);
      return view('admin.certificates.show', compact('certificate'));
  }
  


    /**
     * Menampilkan form untuk mengedit resource yang ditentukan.
     */
    public function edit($id)
    {
        // Menampilkan form edit untuk sertifikat berdasarkan ID
        $certificate = Certificate::findOrFail($id);
        return view('admin.certificates.edit', compact('certificate'));
    }

    /**
     * Memperbarui resource yang ditentukan di storage.
     */
    public function update(Request $request, Certificate $certificate)
    {
        $request->validate([
            'name' => 'required',
            'issued_by' => 'required',
            'issued_at' => 'required|date',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        $data = $request->all();
    
        // Handle thumbnail upload
        if ($request->hasFile('thumbnail')) {
            // Delete old thumbnail
            if ($certificate->thumbnail) {
                Storage::disk('public')->delete($certificate->thumbnail);
            }
            $data['thumbnail'] = $request->file('thumbnail')->store('certificates/thumbnails', 'public');
        }
    
        $certificate->update($data);
    
        return redirect()->route('admin.certificates.index')->with('success', 'Certificate updated successfully.');
    }
    

    /**
     * Menghapus resource yang ditentukan dari storage.
     */
    public function destroy($id)
    {
        // Mengambil data sertifikat berdasarkan ID
        $certificate = Certificate::findOrFail($id);
    
        // Hapus file sertifikat jika ada
        if ($certificate->file && Storage::exists('public/' . $certificate->file)) {
            Storage::delete('public/' . $certificate->file);
        }
    
        // Hapus thumbnail jika ada
        if ($certificate->thumbnail && Storage::exists('public/' . $certificate->thumbnail)) {
            Storage::delete('public/' . $certificate->thumbnail);
        }
    
        // Hapus data sertifikat dari database
        $certificate->delete();
    
        return redirect()->route('admin.certificates.index')->with('success', 'Certificate deleted successfully.');
    }
    
}
