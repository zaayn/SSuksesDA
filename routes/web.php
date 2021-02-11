<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin',  'middleware' => 'is_admin'], function(){
    Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home.admin');
    Route::get('/user', [App\Http\Controllers\AdminController::class, 'view_user'])->name('admin.user');
    Route::get('/user{id}', [App\Http\Controllers\AdminController::class, 'edit'])->name('edit.user');
    Route::get('/user{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('delete.user');
});

Route::group(['prefix' => 'user',  'middleware' => 'is_user'], function(){
    Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('home.user');
});

