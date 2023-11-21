<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

// Blank Page
Route::get('/', function () {
    return view('pages.app.dashboard-general-dashboard', ['type_menu' => '']);
})->name('dashboard');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', function () {
    return view('pages.auth.auth-register', ['type_menu' => '']);
})->name('register');

Route::get('/forgot-password', function () {
    return view('pages.auth.auth-forgot-password', ['type_menu' => '']);
})->name('forgot');

Route::get('/reset', function () {
    return view('pages.auth.auth-reset-password', ['type_menu' => '']);
})->name('reset');

Route::get('/user', [UserController::class, 'index'])->name('user.index');
