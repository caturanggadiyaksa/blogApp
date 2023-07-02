<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\RoleMiddleware;

Route::get('/', [IndexController::class, 'index']);

Auth::routes();


Route::get('/blog/{judul}', [BlogController::class, 'index']);



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('role:admin');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('role:user');

    

   

Route::middleware(['role:user'])->group(function () {
    // Rute-rute pengguna di sini
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/edit-profile', [App\Http\Controllers\HomeController::class, 'edit_profil']);
    Route::get('/account-settings', [App\Http\Controllers\HomeController::class, 'account_setting']);
    Route::get('/author-list', [App\Http\Controllers\HomeController::class, 'author_list']);
    Route::get('/author-single', [App\Http\Controllers\HomeController::class, 'author_single']);
    Route::get('/reviews', [App\Http\Controllers\HomeController::class, 'riviews']);
    
    Route::get('/post-list', [App\Http\Controllers\HomeController::class, 'post_list']);
    Route::get('/post-categories', [App\Http\Controllers\HomeController::class, 'post_categories']);
    Route::get('/create-post', [App\Http\Controllers\HomeController::class, 'create_post']);
    // Route::get('/edit-post', [App\Http\Controllers\HomeController::class, 'edit_post']);


    Route::get('/create-post/edit/{id}', [App\Http\Controllers\HomeController::class, 'riviews']);
    Route::get('/create-post/delete/{id}', [App\Http\Controllers\HomeController::class, 'riviews']);
    Route::post('/create-post/store', [App\Http\Controllers\HomeController::class, 'riviews']);
    Route::put('/create-post/update/{id}', [App\Http\Controllers\HomeController::class, 'create_post']);
    Route::get('/create-post/show/{id}', [App\Http\Controllers\HomeController::class, 'create_post']);

    Route::post('/post-categories/store', [App\Http\Controllers\HomeController::class, 'post_categories']);
    Route::get('/post-categories/show/{id}', [App\Http\Controllers\HomeController::class, 'post_categories']);
   



    
});



