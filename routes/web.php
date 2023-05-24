<?php


use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('layout.home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    return view('layout.home');
});

// Route dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


// Rute untuk menampilkan halaman login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Rute untuk menangani proses login
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Route resource
Route::resource('/users', UsersController::class);

Route::post('/users/add', [UsersController::class, 'store'])->name('store');

Route::get('/users/add', [UsersController::class, 'create'])->name('users.create');


Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('users.destroy');

