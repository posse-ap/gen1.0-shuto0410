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

use App\Http\Controllers\QuizController;
Route::get('/','SelectController@index');

Route::get('/quiz','QuizController@index');
Route::get('/quiz/{id}','QuizController@quiz');
// TODO:ここの設定がわからない
Route::get('/admin', 'AdminController@index');
Route::get('scss', function () {
    return view('for-scss');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/admin/quiz/creation', 'AdminController@send');

