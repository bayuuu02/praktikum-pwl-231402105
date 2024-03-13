<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

    Route::get('/beranda', function () {
        return view('index');
});
Route::get('/tampil', function () {
    $judul = "Blade Template Laravel";
    $penulis = "bayu jhon die";
    return view('website.tampil', compact('judul','penulis'));
});