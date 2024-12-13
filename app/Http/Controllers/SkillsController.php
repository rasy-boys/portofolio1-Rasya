<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
class SkillsController extends Controller
{
    public function index()
    {
        $skills = skill::all();
        return view('skills',compact('skills'));
    }
}
