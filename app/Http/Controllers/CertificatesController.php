<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;

class CertificatesController extends Controller
{
    public function index()
    {
        $certificate = Certificate::all();
        return view('certificate',compact('certificate'));
    }
}
