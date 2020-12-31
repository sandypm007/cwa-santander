<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/login', ['as' => 'login', 'uses' => 'LoginController@index']);
Route::post('/login', ['as' => '_login', 'uses' => 'LoginController@login']);
Route::get('/_logout', ['as' => 'logout', 'uses' => 'LoginController@logout']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'DashboardController@index');
});
