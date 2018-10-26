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


Route::get('hello', function () {
    return view('welcome');
});*/


Route::get('dashboard','lessonAnsweringController@dashboard');
Route::get('categoryOption','lessonAnsweringController@categoryOption');
Route::get('categoryOption','lessonAnsweringController@categoryDisplay');

Route::get('answerQuestion','lessonAnsweringController@answerPage');
Route::post('answerQuestion','lessonAnsweringController@lessonRecord');
Route::get('answerQuestion','lessonAnsweringController@lessonRecord');


?>