<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::post('/create_product', [App\Http\Controllers\HomeController::class, 'createProduct'])->name('create_product');
Route::post('/update_product', [App\Http\Controllers\HomeController::class, 'updateProduct'])->name('update_product');
Route::get('/product/{code}', [App\Http\Controllers\HomeController::class, 'product'])->name('product');


// Route::group(['middleware' => 'role:web-developer'], function() {
//     Route::get('/dashboard', function() {
//        return 'Добро пожаловать, Веб-разработчик';
//     });
//  });


//Products

// Route::group([ 'prefix'=>'blogs'], function(){
//     Route::get('/{code}', [BlogController::class, 'blog'])->name('blog');    

//     Route::get('/{id}/add_blog',[BlogController::class, 'create'])->name('blog.create');
//         Route::post('/{id}/create_blog',[BlogController::class, 'store'])->name('blog.store');

//         Route::get('/{id}/edit_blog', [BlogController::class, 'edit'])->name('blog.edit');
//         Route::patch('/{id}/update_blog',[BlogController::class, 'update'])->name('blog.update');

//             Route::get('/{id}/delete_blog',[BlogController::class, 'destroy'])->name('blog.delete');
    
// });