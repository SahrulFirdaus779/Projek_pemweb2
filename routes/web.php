<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\JenisFaskesController;
use App\Http\Controllers\KabkotaController;
use App\Http\Controllers\FaskesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome3');
});


Route::get('/RSakit', function () {
    return view('RSakit');
});

Route::get('/Puskes', function () {
    return view('Puskes');
});

Route::get('/Klinik', function () {
    return view('Klinik');
});

Route::get('/Labor', function () {
    return view('Labor');
});


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Faskes Routes
Route::prefix('faskes')->group(function () {
    Route::get('/', [FaskesController::class, 'index'])->name('faskes.index');
    Route::get('/{faske}', [FaskesController::class, 'show'])->name('faskes.show');
    Route::post('/store', [FaskesController::class, 'store'])->name('faskes.store');
    Route::middleware('admin')->get('/create', [FaskesController::class, 'create'])->name('faskes.create');
    Route::middleware('admin')->get('/{faske}/edit', [FaskesController::class, 'edit'])->name('faskes.edit');
    Route::put('/{faske}/update', [FaskesController::class, 'update'])->name('faskes.update');
    Route::middleware('admin')->delete('/{faske}/delete', [FaskesController::class, 'destroy'])->name('faskes.destroy');
});

// Profile Routes
Route::prefix('profile')->group(function () {
    Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('admin')->prefix('admin')->group(function () {
    // Kategori Routes
    Route::prefix('kategori')->group(function () {
        Route::get('/', [KategoriController::class, 'index'])->name('kategori.index');
        Route::get('/create', [KategoriController::class, 'create'])->name('kategori.create');
        Route::post('/store', [KategoriController::class, 'store'])->name('kategori.store');
        Route::get('/show/{id}', [KategoriController::class, 'show'])->name('kategori.show');
        Route::get('/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
        Route::put('/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
        Route::delete('/destroy/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
    });

    // Provinsi Routes
    Route::prefix('provinsi')->group(function () {
        Route::get('/', [ProvinsiController::class, 'index'])->name('provinsi.index');
        Route::get('/create', [ProvinsiController::class, 'create'])->name('provinsi.create');
        Route::post('/store', [ProvinsiController::class, 'store'])->name('provinsi.store');
        Route::get('/{provinsi}/edit', [ProvinsiController::class, 'edit'])->name('provinsi.edit');
        Route::put('/{provinsi}/update', [ProvinsiController::class, 'update'])->name('provinsi.update');
        Route::delete('/{provinsi}/delete', [ProvinsiController::class, 'destroy'])->name('provinsi.destroy');
        Route::get('/{provinsi}', [ProvinsiController::class, 'show'])->name('provinsi.show');
    });

    // Jenis Faskes Routes
    Route::prefix('jenis_faskes')->group(function () {
        Route::get('/', [JenisFaskesController::class, 'index'])->name('jenis_faskes.index');
        Route::get('/create', [JenisFaskesController::class, 'create'])->name('jenis_faskes.create');
        Route::post('/store', [JenisFaskesController::class, 'store'])->name('jenis_faskes.store');
        Route::get('/{jenisFaskes}/edit', [JenisFaskesController::class, 'edit'])->name('jenis_faskes.edit');
        Route::put('/{jenisFaskes}/update', [JenisFaskesController::class, 'update'])->name('jenis_faskes.update');
        Route::delete('/{jenisFaskes}/delete', [JenisFaskesController::class, 'destroy'])->name('jenis_faskes.destroy');
        Route::get('/{jenisFaskes}', [JenisFaskesController::class, 'show'])->name('jenis_faskes.show');
    });

    // Kabkota Routes
    Route::prefix('kabkota')->group(function () {
        Route::get('/', [KabkotaController::class, 'index'])->name('kabkota.index');
        Route::get('/create', [KabkotaController::class, 'create'])->name('kabkota.create');
        Route::post('/store', [KabkotaController::class, 'store'])->name('kabkota.store');
        Route::get('/{kabkota}/edit', [KabkotaController::class, 'edit'])->name('kabkota.edit');
        Route::put('/{kabkota}/update', [KabkotaController::class, 'update'])->name('kabkota.update');
        Route::delete('/{kabkota}/delete', [KabkotaController::class, 'destroy'])->name('kabkota.destroy');
        Route::get('/{kabkota}', [KabkotaController::class, 'show'])->name('kabkota.show');
    });
});

require __DIR__.'/auth.php';
