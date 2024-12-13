<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCertificateController extends Controller
{
    public function index()
    {
        return view('admin.certificate'); // Pastikan view ini sudah ada
    }
}
