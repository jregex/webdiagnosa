<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/', [UserController::class, 'login'])->name('login');
Route::post('/', [UserController::class, 'login_check'])->name('login-check');
Route::group(['prefix' => '/admin', 'middleware' => 'user-check'], function () {
    // user & profile
    Route::controller(UserController::class)->group(function(){
        // Route::get('/profile_', 'profile')->name('profile_');
        Route::post('/logout_', 'logout')->name('logout_');
        Route::get('/users', 'index')->name('users.index');
        Route::get('/users/create', 'create')->name('users.create');
        Route::post('/users', 'store')->name('users.store');
        Route::delete('/users/{user}', 'destroy')->name('users.destroy');
        Route::get('/users/{user}/edit', 'edit')->name('users.edit');
        Route::patch('/myprofile_/{user}', 'updateProfile')->name('profile.update');
    });
    // admin
    Route::controller(AdminController::class)->group(function(){
        Route::get('/dashboard','index')->name('dashboard');
    });

});
