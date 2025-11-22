<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Panel\IndexController as PanelIndexController;
use App\Http\Controllers\Panel\CategoryController;
use App\Http\Controllers\Panel\ProductController;
use App\Http\Middleware\SuperUser;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'sendOtp'])->name('send.otp');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Route::get('/otp' , [OtpController::class ,'index'])->name('otp');

Route::get('/terms', function(){return view('terms');})->name('terms');

// Route::middleware('auth')->group(function () {
// });

Route::prefix('admin')->middleware(['auth', SuperUser::class])->group(function () {
    Route::get('/', [PanelIndexController::class, 'index'])->name('admin');
    Route::resource('/categories' , CategoryController::class);
    Route::resource('/products', ProductController::class);
});
