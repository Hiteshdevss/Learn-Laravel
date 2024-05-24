<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\RegisterationController;

Route::get('/', function () {
    return view('home');
});

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/', [DemoController::class, 'index']);
// Route::get('/about', [DemoController::class, 'about']);

Route::get('/register', [RegisterationController::class, 'index']);
Route::post('/register', [RegisterationController::class, 'register']);