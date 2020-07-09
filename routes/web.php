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

Route::post('/jawaban/{is_selected}', 'AnswerController@store');
Route::get('/jawaban/{is_selected}', 'AnswerController@index');

Route::get('/pertanyaan/{is_selected}', 'QuestionController@show');
Route::get('/pertanyaan/{id_pertanyaan}/edit', 'QuestionController@edit');
Route::put('/pertanyaan/{id_pertanyaan}', 'QuestionController@update');
Route::delete('/pertanyaan/{id_pertanyaan}', 'QuestionController@delete');