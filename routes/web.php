<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PendudukController;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/contact-us', [HomeController::class,'contact'])->name('contact');
Route::get('/about-us', [HomeController::class,'about'])->name('about');
Route::get('/article', [HomeController::class,'article'])->name('article');
Route::get('/article/{slug}', [HomeController::class,'article_single'])->name('article.single');
Route::get('/galleries', [HomeController::class,'galleries'])->name('galleries');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'login_check'])->name('login-check');
Route::group(['prefix' => '/admin', 'middleware' => 'user-check'], function () {
    // user & profile
    Route::controller(UserController::class)->group(function(){
        // Route::get('/profile_', 'profile')->name('profile_');
        Route::post('/logout_', 'logout')->name('logout_');
        // Route::get('/users', 'index')->name('users.index');
        // Route::post('/users', 'store')->name('users.store');
        // Route::delete('/users/{user}', 'destroy')->name('users.delete');
        // Route::get('/users/{user}/edit', 'edit')->name('users.edit');
        // Route::patch('/myprofile_/{user}', 'updateProfile')->name('profile.update');
    });
    // admin
    Route::controller(AdminController::class)->group(function(){
        Route::get('/dashboard','index')->name('dashboard');
        Route::get('/galleries','getGallery')->name('galleries.index');
        Route::get('/galleries/create','createGallery')->name('galleries.create');
        Route::post('/galleries','storeGallery')->name('galleries.store');
        Route::delete('/galleries/{gallery}','deleteGallery')->name('galleries.destroy');
    });
    // category post
    Route::controller(ArticleController::class)->group(function(){
        Route::get('/categories',  'categories')->name('categories.index');
        Route::post('/categories',  'save_category')->name('categories.store');
        Route::delete('/categories/{category}',  'delete_category')->name('categories.delete');
    });

    Route::resource('/articles',ArticleController::class)->except(['edit']);  //article
    Route::resource('/penduduk',PendudukController::class)->except(['edit']);
});
