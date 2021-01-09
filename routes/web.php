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
    Route::get('/', ['as' => 'homepage', 'uses' => 'HomeController@index']);
    Route::get('/message', ['as' => 'read_messages', 'uses' => 'MessageController@list']);
    Route::post('/message', ['as' => 'send_message', 'uses' => 'MessageController@handle'])->withoutMiddleware(['csrf']);

    Route::get('/configuration', ['as' => 'configuration', 'uses' => 'ConfigurationController@index']);
    Route::post('/configuration', 'ConfigurationController@handle');

    Route::get('/chat', ['as' => 'chat', 'uses' => 'ChatController@index']);
    Route::get('/chat/users', ['as' => 'chat_users', 'uses' => 'ChatController@users']);
    Route::get('/chat/messages', ['as' => 'chat_messages', 'uses' => 'ChatController@messages']);
    Route::post('/chat', ['as' => 'post_message', 'uses' => 'ChatController@handle']);
});
