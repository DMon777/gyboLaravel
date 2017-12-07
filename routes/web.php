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

Route::get('/','MainController@actionMain')->name('home');

Route::get('/trainers','TrainersController@actionTrainers')->name('trainers');
Route::get('/trainer/{id}','TrainersController@actionTrainer')->name('trainer');

Route::get('/classes','ClassesController@actionClasses')->name('classes');
Route::get('/class/{id}','ClassesController@actionClass')->name('class');
