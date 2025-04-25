<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YoutubeController;

Route::get('/videos', [YoutubeController::class, 'search']);
Route::get('/videos/{id}', [YoutubeController::class, 'detail']);


Route::get('/', function () {
    return view('welcome');
});
