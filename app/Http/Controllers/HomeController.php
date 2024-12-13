<?php

namespace App\Http\Controllers;

use App\Models\Home; 
use App\Models\About;
use App\Models\Skill;
use App\Models\Certificate;
use App\Models\Project;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua data homes
        $homes = Home::all(); 

        $about = About::all();

        $skill = Skill::all();
       
        $certificate = Certificate::all();

        $project = Project::all();

        $contact = Contact::find(1);


        // Kirim data ke view
        return view('homes', compact('homes','about','skill','certificate','project','contact'));
    }
}
