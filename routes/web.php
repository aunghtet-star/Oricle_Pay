<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::middleware('auth')->namespace('frontEnd')->group(function () {
    Route::get('/', 'PageController@home')->name('home');
    Route::get('/profile','PageController@profile')->name('profile');
    Route::get('/update','PageController@updatePassword')->name('updatePassword');
    Route::post('/update','PageController@updatePasswordStore')->name('updatePassword.store');
    
    Route::get('/wallet','PageController@wallet')->name('wallet');
});

Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login');
Route::post('/admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
