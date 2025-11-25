<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TanahController;
use App\Http\Controllers\BangunanController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController; 
// use App\Models\Barang; ini dihapus
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('/', [TanahController::class, 'index'])->name('tanah.index');
Route::get('/tanah', [TanahController::class, 'index'])->name('tanah.index');
Route::get('/tanah/create', [TanahController::class, 'create'])->name('tanah.create');
Route::post('/tanah', [TanahController::class, 'store'])->name('tanah.store');
Route::get('/tanah/{id}/edit', [TanahController::class, 'edit'])->name('tanah.edit');
Route::put('/tanah/{id}', [TanahController::class, 'update'])->name('tanah.update');
Route::delete('/tanah/{id}', [TanahController::class, 'destroy'])->name('tanah.destroy');

Route::resource('/bangunan', BangunanController::class)->names('bangunan');  


Route::resource('/ruangan', RuanganController::class)->names('ruangan');




Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
Route::resource('kategori', KategoriController::class);



Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');
Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');
Route::put('/barang/{id}', [BarangController::class, 'update'])->name('barang.update');
Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');























