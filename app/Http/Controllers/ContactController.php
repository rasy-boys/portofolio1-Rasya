<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::find(1); // Ambil semua data dari tabel homes
        return view('contact', compact('contact')); // Kirim data ke view
    }
}
