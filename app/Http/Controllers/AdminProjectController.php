<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProjectController extends Controller
{
    public function index()
    {
        return view('admin.project'); // Pastikan view ini sudah ada
    }
}
