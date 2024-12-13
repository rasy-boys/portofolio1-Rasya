<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $title = 'Delete Projects?';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'nullable|url',
            'date' => 'nullable|date',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validasi thumbnail
        ]);
    
        $project = new Project($request->all());
    
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('thumbnails'), $filename);
            $project->thumbnail = $filename;
        }
    
        $project->save();
    
        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }
    

    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'nullable|url',
            'date' => 'nullable|date',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validasi thumbnail
        ]);
    
        if ($request->hasFile('thumbnail')) {
            // Hapus thumbnail lama
            if ($project->thumbnail && file_exists(public_path('thumbnails/' . $project->thumbnail))) {
                unlink(public_path('thumbnails/' . $project->thumbnail));
            }
    
            // Upload thumbnail baru
            $file = $request->file('thumbnail');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('thumbnails'), $filename);
            $project->thumbnail = $filename;
        }
    
        $project->update($request->except('thumbnail')); // Perbarui data tanpa field 'thumbnail'
    
        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }
    

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }
}
