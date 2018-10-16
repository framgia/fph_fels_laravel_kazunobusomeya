<?php

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



Route::get('login','LoginController@loginForm');
Route::get('signUp','LoginController@linkSignUp');
Route::post('login','LoginController@doLogin');
Route::get('mainPage','LoginController@doLogin');
?>
