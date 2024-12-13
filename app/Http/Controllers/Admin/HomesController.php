<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class HomesController extends Controller
{
    public function index()
    {
        $homes = Home::all();
        $title = 'Delete Homes?';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.homes.index', compact('homes'));
    }

    public function create()
    {
        return view('admin.homes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $home = new Home();
        $home->title = $request->title;
        $home->description = $request->description;

        if ($request->hasFile('image')) {
            $home->image = $request->file('image')->store('images', 'public');
        }

        $home->save();
        return redirect()->route('admin.homes.index')->with('success', 'Home created successfully');
    }

    public function show($id)
    {
        $home = Home::findOrFail($id);
        return view('admin.homes.show', compact('home'));
    }

    public function edit($id)
    {
        $home = Home::findOrFail($id);
        return view('admin.homes.edit', compact('home'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $home = Home::findOrFail($id);
        $home->title = $request->title;
        $home->description = $request->description;

        if ($request->hasFile('image')) {
            $home->image = $request->file('image')->store('images', 'public');
        }

        $home->save();
        return redirect()->route('admin.homes.index')->with('success', 'Home updated successfully');
    }

    public function destroy($id)
    {
        $home = Home::findOrFail($id);
        $home->delete();
        return redirect()->route('admin.homes.index')->with('success', 'Home deleted successfully');
    }
}
