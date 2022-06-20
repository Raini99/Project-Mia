<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/post', function () {
    return view('blog', ['title' => 'Blog']);
});


Route::get('/boking', function () {
    return view('boking', ['title' => 'boking']);
});


Route::get('/paket-makanan', function () {
    return view('paket-makanan', ['title' => 'paket-makanan']);
});

Route::get('/galeri-wisata', function () {
    return view('galeri-wisata', ['title' => 'galeri-wisata']);
});
