<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

Route::controller(AuthController::class)->group(function () {
    Route::get('/auth/login', 'show')->name('login');
    Route::post('/auth/authenticate', 'authenticate')->name('authenticate');
    Route::post('/auth/logout', 'logout')->name('logout');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/user/create', 'create');
    Route::post('/user/store', 'store');

    Route::get('/user/search', 'search')->middleware('auth:sanctum');
    Route::get('/user/search/{name}', 'find');

    Route::get('/user/{id}', 'show');
});