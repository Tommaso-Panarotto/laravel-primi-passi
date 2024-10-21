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
    $links = ["laravel", "games", "boolean"];
    return view('home', compact("links"));
});

Route::get('/laravel', function () {
    $links = ["laravel", "games", "boolean"];
    return view('laravel', compact("links"));
});

Route::get('/games', function () {
    $links = ["laravel", "games", "boolean"];
    return view('games', compact("links"));
});

Route::get('/boolean', function () {
    $links = ["laravel", "games", "boolean"];
    return view('boolean', compact("links"));
});