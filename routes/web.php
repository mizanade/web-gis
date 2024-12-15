<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Map;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/map', [Map::class, 'index']);
Route::get('/main', [HomeController::class, 'index']);
