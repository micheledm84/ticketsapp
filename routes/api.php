<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//5
Route::post('store_dev', 'Api\UserController@store_dev')->name('store_dev');

Route::post('store_task_user', 'Api\TaskUserController@store')->name('store_task_user');

Route::delete('remove_task_user', 'Api\TaskUserController@remove')->name('remove_task_user');

Route::delete('get_task_user', 'Api\TaskUserController@index')->name('index_task_user');

//7
Route::get('get_delayed_tasks', 'Api\TaskController@get_delayed_tasks')->name('get_delayed_tasks');