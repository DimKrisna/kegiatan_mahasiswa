<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\KemahasiswaanController;
use App\Http\Controllers\UserController;

Route::controller(UserController::class)->group(function () {
    Route::get('/', 'login')->name('login');
    Route::post('/login', 'login_post')->name('login.post');
    Route::post('/logout', 'logout')->name('logout');
    Route::post('/reset/password', 'resetPassword')->name('reset.password');
});

Route::prefix('kemahasiswaan')->name('kemahasiswaan.')->controller(KemahasiswaanController::class)->group(function () {
    Route::get('/home', 'admin')->name('home');
});
