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
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index');

Route::view('/', 'index')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/browse', 'browse')->name('browse');
Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');