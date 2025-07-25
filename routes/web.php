<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\JokerController;
use App\Http\Controllers\JokiTugasController;
use App\Http\Controllers\Admin\TestimonialController; // Tambahkan ini

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// == RUTE PUBLIK ==
Route::get('/', [LandingPageController::class, 'index'])->name('landing');
Route::get('/joki-tugas', [JokiTugasController::class, 'index'])->name('joki-tugas.index'); // INI ROUTE YANG KITA BUAT

// == RUTE YANG MEMERLUKAN LOGIN ==
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Rute Profil Bawaan
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rute Khusus Joker
    Route::get('/profile/joker', [DashboardController::class, 'editProfile'])->name('joker.profile.edit');
    Route::post('/profile/joker', [DashboardController::class, 'updateProfile'])->name('joker.profile.update');

    // Rute Khusus Admin
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/jokers', [JokerController::class, 'index'])->name('jokers.index');
        Route::patch('/jokers/{user}/approve', [JokerController::class, 'approve'])->name('jokers.approve');
        Route::resource('testimonials', TestimonialController::class);
    });
});

require __DIR__.'/auth.php';