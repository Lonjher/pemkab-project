<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
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

Route::get('/login', function(){
    return view('login');
});

// Route::get('/about', function(){
//     return view('about', [
//         'name' => 'Abdul Walid',
//         'email' => 'walid.lonjer@gmail.com',
//         'image' => 'image.jpg'
//     ]);
// });

Route::get('/login', [LoginController::class, 'login']);


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');

Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');
