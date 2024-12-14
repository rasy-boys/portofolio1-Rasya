<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\CertificatesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\AboutsController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\HomesController;
use App\Http\Controllers\Admin\ContactsController;

// Route untuk halaman depan
Route::get('/defaultroot', function () {
    return view('welcome');
});

// Route untuk Dashboard Pengguna
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route Admin Dashboard
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
    ->middleware(['auth', 'admin'])  // Middleware admin untuk memastikan hanya admin yang bisa mengakses
    ->name('admin.dashboard');

// Route umum tanpa autentikasi
Route::get('/', [HomeController::class, 'index'])->name('homes.index');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/skills', [SkillsController::class, 'index'])->name('skills');
Route::get('/certificate', [CertificatesController::class, 'index'])->name('certificate');
Route::get('/project', [ProjectController::class, 'index'])->name('project');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Route yang memerlukan otentikasi
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route admin dengan prefix "admin" dan name "admin."
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('skills', SkillController::class);
    Route::resource('certificates', CertificateController::class);
    Route::resource('abouts', AboutsController::class);
    Route::resource('homes', HomesController::class);
    Route::resource('projects', ProjectsController::class);
});

// Route kontak tanpa autentikasi
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('contacts', ContactsController::class);
});

// Route auth
require __DIR__.'/auth.php';
