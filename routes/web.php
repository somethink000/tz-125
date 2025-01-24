<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

// Route::group(['middleware' => 'role:web-developer'], function() {
//     Route::get('/dashboard', function() {
//        return 'Добро пожаловать, Веб-разработчик';
//     });
//  });