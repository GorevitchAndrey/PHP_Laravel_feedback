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

Route::get('/', function () { return view('welcome');})->name('index');

Route::get('/login', 'LoginController@index')->name('login-form');

Route::post('/login/submit', 'LoginController@submit')->name('login-submit');

Route::get('/feedback', 'FeedbackController@index')->name('feedback-form');

Route::post('/feedback/submit', 'FeedbackController@submit')->name('feedback-submit');

Route::get('/feedback/all', 'FeedbackController@all')->name('feedback-all');

Route::get('/feedback/{id}', 'FeedbackController@view')->name('feedback-view');

Route::get('/feedback/{id}/update', 'FeedbackController@update')->name('feedback-update');

Route::post('/feedback/{id}/update-submit', 'FeedbackController@updateSubmit')->name('feedback-update-submit');

Route::delete('/feedback/{id}', 'FeedbackController@delete')->name('feedback-delete');

