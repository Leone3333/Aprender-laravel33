<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get( '/', [PagesController::class, 'index']);



