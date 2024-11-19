<?php

use App\Http\Controllers\Map;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [Map::class, 'index']);
