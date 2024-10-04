<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\MasterData\CategoriesController;

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
    return view('welcome');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login/action', [LoginController::class, 'login'])->name('login.action');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register/action', [RegisterController::class, 'register'])->name('register.action');
});

Route::middleware(['auth'])->group(function () {
    #logout
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
    #dashboard
    #master-data
    Route::prefix('admin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::prefix('master-data')->group(function () {
            Route::get('categories', [CategoriesController::class, 'index'])->name('categories.index');
            Route::post('categories/save', [CategoriesController::class, 'saveCategories'])->name('categories.save');
        });
    });
});
