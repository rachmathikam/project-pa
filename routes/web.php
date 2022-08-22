<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\UserController;







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

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('/', [LayoutController::class, 'index'])->middleware('auth');
Route::get('/home', [LayoutController::class, 'index'])->middleware('auth');


Route::controller(LoginController::class)->group(function (){
    Route::get('login','index')->name('login');
    Route::post('login/proses','proses');
    Route::get('logout','logout');
});

// Route::get('/guru',[GuruController::class, 'index']);
Route::resource('/guru', GuruController::class,);
Route::post('get-genders',       [GuruController::class, 'getGender'])->name('get-genders');

Route::resource('/profile', \App\Http\Controllers\ProfileController::class);
Route::resource('/page', \App\Http\Controllers\PageController::class);







