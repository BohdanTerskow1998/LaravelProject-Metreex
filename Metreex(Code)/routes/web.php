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

Route::get('/welcome', 'App\Http\Controllers\UsersController@welcome')->name('welcome');
Route::post('/welcome', 'App\Http\Controllers\UsersController@users');
Route::get('/about', 'App\Http\Controllers\UsersController@about')->name('about');
Route::get('/about/table', 'App\Http\Controllers\UsersController@team_table');