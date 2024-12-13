<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;


    // Kolom yang dapat diisi melalui mass assignment
    protected $fillable = ['title', 'description', 'image'];
}
