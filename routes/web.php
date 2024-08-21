<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('kos');
});

Route::get('/detail-kos', function () {
    return view('detail-k');
});

Route::get('/detail-rumahsewa', function () {
    return view('detail-rs');
});

Route::get('/rumahsewa', function () {
    return view('/rumahsewa');
});

// Route::get('/', function () {
//     return view('welcome');
// });