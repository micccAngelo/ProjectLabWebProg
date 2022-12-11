<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home');
});

Route::get('/home',[productController::class, 'index']);
Route::get('/',[UserController::class, 'login']);
Route::get('register', [UserController::class, 'register']) -> name('register');
Route::post('register', [UserController::class, 'register_action']) -> name('register.action');
Route::get('login', [UserController::class, 'login']) -> name('login');
Route::post('login', [UserController::class, 'login_action']) -> name('login.action');
Route::get('/ProductDetail/{id}',[ProductController::class, 'productDetail']);