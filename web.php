<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ebookController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', 'App\Http\Controllers\ebookController@about');
Route::get('/list', 'App\Http\Controllers\ebookController@list');
