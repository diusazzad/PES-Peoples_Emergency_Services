<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [ContentController::class, 'welcome'])->name('home');


Route::get('/register', function () {
    return Inertia::render('RegistrationPage', [
        'user' => Auth::user(), // Provide any data you need for the registration page
    ]);
});

Route::get('/', function () {
    return \Inertia\Inertia::render('Home');
});

Route::get('/register', [RegisterController::class,'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
