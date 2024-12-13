<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        $title = 'Delete Contacts?';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('admin.contacts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts,email',
            'phone' => 'nullable|string|max:15',
            'social_media' => 'nullable|string',
        ]);

        Contact::create($request->all());
        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    public function show(Contact $contact)
    {
        return view('admin.contacts.show', compact('contact'));
    }

    public function edit(Contact $contact)
    {
        return view('admin.contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:contacts,email,{$contact->id}",
            'phone' => 'nullable|string|max:20',
            'social_media' => 'nullable|string|max:255',
        ]);

        $contact->update($request->all());

        return redirect()->route('admin.contacts.index')->with('success', 'Contact updated successfully!');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('admin.contacts.index')->with('success', 'Contact deleted successfully!');
    }
}
