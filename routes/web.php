<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\JamPelajaranController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\RuangController;

// Tak Komenin dulu cik
Route::get('/', function () {
    return view('welcome'); // Tak Ganti Cik, Nanti Sesuain aja
});

// Auth Routes
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticating']);

    Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
    Route::post('/register', [AuthController::class, 'createUser']);
});

// Logout Route
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// User (GURU) Routes
Route::middleware(['auth', 'GuruMiddleware'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
});

// Admin Routes
Route::prefix('admin')->name('admin.')->middleware(['auth', 'AdminMiddleware'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('guru', GuruController::class);
    Route::resource('kelas', KelasController::class);
    Route::resource('jadwal', JadwalController::class);
    Route::resource('jam-pelajaran', JamPelajaranController::class);
    Route::resource('mapel', MapelController::class);
    Route::resource('ruang', RuangController::class);
});


// Tak Komenin dulu cik
// Route::get('/dashboard', function () {
//     return view('Admin.Guru.create'); // Tak Ganti Cik, Nanti Sesuain aja
// });