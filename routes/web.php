<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BeritaController;

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
    return view('pages.home');
});

Route::get('/profil/sejarah',function(){
    return view('pages.profil.sejarah');
});

Route::get('/profil/visi-misi',function(){
    return view('pages.profil.visi-misi');
});

Route::get('/profil/struktur-organisasi',function(){
    return view('pages.profil.struktur-organisasi');
});

Route::get('/profil/prestasi',function(){
    return view('pages.profil.prestasi');
});

Route::get('/profil/guru',function(){
    return view('pages.profil.guru');
});

Route::get('/program',function(){
    return view('pages.program.index');
});

Route::get('/profil/fasilitas', function(){
    return view('pages.profil.fasilitas');
});

Route::get('/berita/{id}', function ($id) {
    return view('pages.berita.show', compact('id'));
});

//admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('berita', BeritaController::class);
});