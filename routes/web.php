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
Route::post('/','MainController@sendMail');

Route::get('/trainers','TrainersController@actionTrainers')->name('trainers');
Route::get('/trainer/{id}','TrainersController@actionTrainer')->name('trainer');
Route::post('/trainer/{id}','TrainersController@sendMailToTrainer');

Route::get('/classes','ClassesController@actionClasses')->name('classes');
Route::get('/class/{id}','ClassesController@actionClass')->name('class');

Route::get('/timetable','TimeTableController@actionTimeTable')->name('timetable');

Route::get('/blog','BlogController@actionBlog')->name('blog');
Route::get('/article/{id}','BlogController@actionArticle')->name('article');
Route::post('/article/{id}','BlogController@addComment');

Route::get('/category/{id}','BlogController@actionArticlesByCat')->name('category');
Route::get('/tags/{name}','BlogController@actionArticlesByTagName')->name('tags');
Route::get('/contact','ContactController@actionContact')->name('contact');


Route::group(['prefix' => 'admin','middleware' => 'auth'],function (){

    Route::get('/','AdminController@action')->name('admin');


});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
