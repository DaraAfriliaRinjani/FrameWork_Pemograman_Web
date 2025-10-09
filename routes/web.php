<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//  Arahkan root (/) langsung ke halaman login
Route::get('/', function () {
    return redirect()->route('login');
});

//  Dashboard (akses hanya jika login & verified)
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
    // Route::get('/product/{angka}', [ProductController::class, 'index'])->name('product.index');
});

// Tugas Praktikum pertemuan 7 : CRUD (Create, Read, Update, Delete)
Route::get('/products', [ProductController::class, 'showList'])->name('products.list');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

// Praktikum form
Route::get('product/create', [ProductController::class, 'create'])->name('product-create');
Route::post('product/store', [ProductController::class, 'store'])->name('product-store');
Route::get('/product/{msg}', [ProductController::class, 'index'])->name('product.index');

require __DIR__.'/auth.php';
