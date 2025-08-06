<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\JokerController;
use App\Http\Controllers\JokiTugasController;
use App\Http\Controllers\Admin\TestimonialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini kita mendaftarkan semua route untuk aplikasi web Anda.
|
*/

// == RUTE PUBLIK (Bisa diakses siapa saja) ==
Route::get('/', [LandingPageController::class, 'index'])->name('landing');
Route::get('/joki-tugas', [JokiTugasController::class, 'index'])->name('joki-tugas.index');


// == RUTE YANG MEMERLUKAN LOGIN ==
Route::middleware('auth')->group(function () {
    
    // Route Dashboard Utama (Akan diatur oleh DashboardController)
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Route Profil Bawaan Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Route khusus untuk JOKER
    Route::get('/profile/joker', [DashboardController::class, 'editProfile'])->name('joker.profile.edit');
    Route::post('/profile/joker', [DashboardController::class, 'updateProfile'])->name('joker.profile.update');

    // == RUTE KHUSUS ADMIN (Dilindungi middleware 'admin') ==
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        
        // Route untuk Manajemen Joker (Approve, Edit, Update, Hapus, Toggle Sibuk)
        Route::patch('/jokers/{user}/approve', [JokerController::class, 'approve'])->name('jokers.approve');
        Route::patch('/jokers/{user}/toggle-busy', [JokerController::class, 'toggleBusy'])->name('jokers.toggleBusy');
        Route::resource('jokers', JokerController::class)->except(['create', 'store', 'show']);
        Route::resource('testimonials', TestimonialController::class);
        Route::post('testimonials/upload', [TestimonialController::class, 'upload'])->name('testimonials.upload');
        Route::delete('testimonials/{testimonial}/image', [TestimonialController::class, 'destroyImage'])->name('testimonials.image.destroy');
    });

});
Route::middleware(['auth', 'role:joker'])->prefix('joker')->name('joker.')->group(function () {
    Route::get('profile/edit', [\App\Http\Controllers\Joker\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [\App\Http\Controllers\Joker\ProfileController::class, 'update'])->name('profile.update');
});

// Route Otentikasi dari Breeze
require __DIR__.'/auth.php';