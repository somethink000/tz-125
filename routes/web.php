<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
Auth::routes();

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/', [HomeController::class, 'index'])->name('index');


Route::resource('product', ProductController::class)
->except([
   'index', 'create', 'edit',
]);

// Route::group(['middleware' => 'role:web-developer'], function() {
//     Route::get('/dashboard', function() {
//        return 'Добро пожаловать, Веб-разработчик';
//     });
//  });