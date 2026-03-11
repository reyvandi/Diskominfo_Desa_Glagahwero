<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('pages.beranda');
})->name('beranda');

Route::get('/profil-desa', function () {
    return view('pages.profil_desa');
})->name('profil');

Route::get('/berita', function () {
    return view('pages.berita');
})->name('berita');

Route::get('/dokumen', function () {
    return view('pages.dokumen');
})->name('dokumen');

Route::get('/produk-desa', function () {
    return view('pages.produk_desa');
})->name('produk');

Route::get('/aparatur-desa', function () {
    return view('pages.aparatur');
})->name('aparatur');

Route::get('/pilihan-design-aparatur', function () {
    return view('pages.pilihan_design_aparatur');
})->name('pilihan-design-aparatur');

Route::get('/ppid', function () {
    return view('pages.ppid'); // buat file ppid.blade.php kalau belum ada
})->name('ppid');

// Route::get('/profil', function () {
//     return view('pages.profil');   // slot diisi profil
// });
