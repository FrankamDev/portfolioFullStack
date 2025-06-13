<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, "index"])->name('home-page');
Route::get('/admin', [AdminController::class, "admin"])->name('home-page');
Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');
Route::get('/{any}', function () {
    return view('notFound');
})->where('any', '.*');
Route::get('/admin/abouts', [AboutController::class,'edit'])->name('edit-about');