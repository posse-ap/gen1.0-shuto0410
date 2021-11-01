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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => ['login_check']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', 'Top\TopController@index')->name('top');
    Route::post('/get_data', 'Top\TopController@get_data');
});
