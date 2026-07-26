<?php

use App\Models\Artikel;
use Illuminate\Support\Facades\Route;

// Route untuk halaman Home
Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
});

// About
Route::get('/about', function () {
    return view('about', ['nama' => 'Habib Azizul', 'title' => 'Tentang Kami']);
});

Route::get('/artikels', function() {
    return view('artikels', ['title' => 'Blog', 'artikels' => Artikel::all()]);
});

Route::get('/artikels/{artikel:slug}', function (Artikel $artikel) {
    // dd($artikel); 

return view('artikel', [
        'title' => 'Detail Berita',
        'artikel' => $artikel
    ]);
});

