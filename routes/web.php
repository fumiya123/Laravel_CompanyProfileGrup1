<?php

use App\Models\Artikel;
use App\Models\User;
use App\Models\Category;
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
    return view('artikels', [
        'title' => 'Blog', 
        'artikels' => Artikel::filter(request(['search', 'category','author']))->latest()->paginate(9)->withQueryString()
        ]);
});

Route::get('/artikels/{artikel:slug}', function (Artikel $artikel) {
    return view('artikel', [
        'title' => 'Detail Berita',
        'artikel' => $artikel
    ]);
});

Route::get('/category', function () {
    $categories = Category::latest()->get();
    return view('categories', ['headers'=>'Category Page', 'categories' => $categories]);
});

Route::get('/authors/{user:username}', function (User $user){
    return view('posts',['headers'=> ( count ($user->posts) ) . ' Articles Detected By  ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category){
    return view('posts',['headers'=>'Categories By : ' . $category->name, 'posts' => $category->posts]);
});
