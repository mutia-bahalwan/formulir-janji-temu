<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/header', function () {
    return view('header');
});
Route::get('/janjiTemu', function () {
    return view('form_janji_temu');
});
Route::get('/footer', function () {
    return view('footer');
});
Route::get('/rangkuman', function () {
    return view('rangkuman');
});
