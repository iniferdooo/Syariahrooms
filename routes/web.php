<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;



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


Route::get('/test', function () {
    return view('auth.test');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});


//Login
Route::middleware('auth')->group(function(){
Route::get('login', function () {
    return view('auth.login');
});
Route::post('/loginproses', [loginController::class, 'loginproses'])->name('loginproses');

//Register
Route::get('/register', [registerController::class, 'register'])->name('register');
Route::post('/registeruser', [registerController::class, 'registeruser'])->name('registeruser');
});