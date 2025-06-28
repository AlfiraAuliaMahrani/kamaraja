<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\KamarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.registrasi');
});

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('    posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

// Landing page route
Route::get('/', [HomeController::class, 'index'])->name('awal.index');


// buat admin kamar
Route::get('/kamar', [KamarController::class, 'index'])->name('kamar.index');
Route::post('/kamar', [KamarController::class, 'store'])->name('kamar.store');
Route::get('/kamar/create', [KamarController::class, 'create'])->name('kamar.create');
Route::get('/kamar/{kamar}', [KamarController::class, 'show'])->name('kamar.show');
Route::get('/kamar/{kamar}/edit', [KamarController::class, 'edit'])->name('kamar.edit');
Route::put('/kamar/{kamar}', [KamarController::class, 'update'])->name('kamar.update');
Route::delete('/kamar/{kamar}', [KamarController::class, 'destroy'])->name('kamar.destroy');

