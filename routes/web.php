<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'arif']);
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {

    return view('contact');
});

// buat rute baru 
//1. blog
//2 buah artikal judul dan isi
//2. /contact   
//email / sosial media