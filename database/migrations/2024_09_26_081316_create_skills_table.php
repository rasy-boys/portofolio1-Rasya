<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();  // Primary Key
            $table->string('title');  // Judul skill
            $table->text('description');  // Deskripsi skill
            $table->string('image')->nullable(); // Menambahkan kolom image
            $table->timestamps();  // Timestamps created_at dan updated_at
            
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
        
    }
};