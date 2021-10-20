<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();


Route::get('/','SelectController@index');
Route::get('/quiz','QuizController@index');
Route::get('/quiz/{id}','QuizController@quiz');

Route::group(['middleware' => 'login_check'],function () {
    Route::get('/admin', 'Admin\AdminController@index')->name('admin');
    // quiz
    Route::resource('/admin/quiz', 'Admin\Quiz\QuizController');
});