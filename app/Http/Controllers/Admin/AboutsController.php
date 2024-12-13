<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;


class AboutsController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        $title = 'Delete Abouts?';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.abouts.index', compact('abouts'));
    }

    public function create()
    {
        return view('admin.abouts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        About::create($request->all());

        return redirect()->route('admin.abouts.index')->with('success', 'About created successfully.');
    }

    public function show($id)
    {
        $about = About::findOrFail($id);
        return view('admin.abouts.show', compact('about'));
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.abouts.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $about = About::findOrFail($id);
        $about->update($request->all());

        return redirect()->route('admin.abouts.index')->with('success', 'About updated successfully.');
    }

    public function destroy($id)
    {
        $about = About::findOrFail($id);
        $about->delete();

        return redirect()->route('admin.abouts.index')->with('success', 'About deleted successfully.');
    }
}
