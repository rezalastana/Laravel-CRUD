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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pertanyaan', 'QuestionController@index')->name('question.index');
Route::get('/pertanyaan/create', 'QuestionController@create');
Route::post('/pertanyaan', 'QuestionController@store');

Route::post('/jawaban/{pertanyaan_id}', 'AnswerController@store')->name('jawaban.store');
//Route::get('/jawaban/{pertanyaan_id}', 'AnswerController@index')->name('jawaban.index');