<?php

use App\Http\Controllers\Admin\BeritaController;
use App\Models\Berita;
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

Route::get('/kontak',function(){
    return view('pages.kontak');
});

Route::get('/mitra',function(){
    return view('pages.mitra.index');
});

Route::get('/berita/{slug}', function ($slug) {

    $berita = App\Models\Berita::where('slug', $slug)
        ->where('is_publish', true)
        ->firstOrFail();

    return view('pages.berita.detail', compact('berita'));

});

//admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('berita', BeritaController::class);
});

Route::get('/berita/{slug}', function ($slug) {

    $berita = App\Models\Berita::where('slug', $slug)
        ->where('is_publish', true)
        ->firstOrFail();

    return view('pages.berita.detail', compact('berita'));

})->name('berita.detail');

Route::get('/semua-berita', function () {

    $beritas = Berita::where('is_publish', true)
        ->latest()
        ->get();

    return view('pages.berita.show', compact('beritas'));

});

Route::get('/', function () {

    $beritas = App\Models\Berita::where('is_publish', true)
        ->latest()
        ->take(5)
        ->get();

    return view('pages.home', compact('beritas'));

});

