<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\CourseController;
use \App\Http\Controllers\JournalController;
use \App\Http\Controllers\AdminController;

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

Route::prefix('e-learning')->controller(CourseController::class)->group(function (){
    Route::get('', 'index_e_learning')->name('index_e_learning');
});

Route::prefix('journal')->controller(JournalController::class)->group(function (){
    Route::get('', 'index_journal')->name('index_journal');
});

Route::prefix('admin')->controller(AdminController::class)->group(function (){
    Route::get('manage-users', 'index_manage_user')->name('index_manage_user');
    Route::post('resend-email', 'resend_email')->name('resend_email');
    Route::post('bypass-email-verification', 'bypass_email')->name('bypass_email');
    Route::post('delete-user', 'delete_user')->name('delete_user');
    Route::get('search-user', 'search_user')->name('search_user');
});
