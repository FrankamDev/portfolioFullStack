<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, "index"])->name('home-page');
Route::get('/admin', [AdminController::class, "admin"])->name('home-page');

Route::get('/{any}', function () {
    return view('notFound');
})->where('any', '.*');