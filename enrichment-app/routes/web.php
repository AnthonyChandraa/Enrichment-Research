<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index_home');

Route::prefix('auth')->controller(UserController::class)->group(function (){
    Route::get('register', 'index_register')->name('index_register');
    Route::post('register', 'register')->name('register');
    Route::get('signin', 'index_login')->name('index_login');
    Route::post('login', 'login')->name('login');
    Route::get('forgot-password', 'index_forgot_password')->name('index_forgot_password');
    Route::post('forgot-password', 'forgot_password')->name('forgot_password');
    Route::get('reset-password/{id}', 'index_reset_password')->name('index_reset_password');
    Route::post('reset-password', 'reset_password')->name('reset_password');
    Route::get('verify-email/{id}', 'index_verify_email')->name('index_verify_email');
    Route::post('verify-email', 'verify_email')->name('verify_email');
    Route::post('logout', 'logout')->name('logout');
});
