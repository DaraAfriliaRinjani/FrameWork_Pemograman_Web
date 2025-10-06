<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;

// 👇 Arahkan root (/) langsung ke halaman login
Route::get('/', function () {
    return redirect()->route('login');
});

// ✅ Dashboard (akses hanya jika login & verified)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ✅ Route untuk user yang sudah login
Route::middleware('auth')->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Posts & Articles
    Route::resource('posts', PostController::class);
    Route::resource('articles', ArticleController::class);
});

Route::middleware(['auth', 'role:admin,owner'])->group(function () {
    // Kirim angka lewat URL misalnya /product/5
    Route::get('/product/{angka}', [ProductController::class, 'index'])->name('product.index');
});

require __DIR__.'/auth.php';
