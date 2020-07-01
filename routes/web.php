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

//Route::get('/', 'HomeController@home');



//route blog
//Route::get('/register', 'PegawaiController@home');
//Route::get('/welcome', 'PegawaiController@welcome');

Route::get('/', function () {
    return view('home');
});

Route::get('/data_tables', function () {
    return view('welcome');
});