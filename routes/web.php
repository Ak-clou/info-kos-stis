<?php

use App\Models\Kost;
use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Homepage"]);
});

Route::get('/info-kos', function () {
    return view('info-kos', ["nama" => "Antonius Bagas", "title" => "Info Kos", 'kosts' => Kost::all()]);
});

Route::get('/create', function () {
    return view('create', ["nama" => "Antonius Bagas", "title" => "Tambahkan Data"]);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/info-kontrakan', function () {
    return view('info-kontrakan', ["nama" => "Antonius Bagas", "title" => "Info Kontrakan"]);
});

Route::get('/sekitar', function () {
    return view('sekitar', ["nama" => "Antonius Bagas", "title" => "Sekitar Kampus"]);
});

Route::get('/about', function () {
    return view('about', ["nama" => "Antonius Bagas", "email" => "222212509@stis.ac.id"]);
});

Route::get('/detail-kos', function () {
    return view('detail-k', ["title" => "Detail Kos"]);
});

Route::get('/blog/{post:slug}', function (Post $post) {

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/login', function () {
    return view('login', ['title' => 'Halaman Login']);
});

