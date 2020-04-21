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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/deliver', function () {
    return view('frontend.deliver');
})->name('deliver');

Route::get('/test', function () {
    return view('frontend.test');
})->name('test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
