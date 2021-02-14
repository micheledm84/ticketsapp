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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('store_task_user', 'Api\TaskUserController@store')->name('store_task_user');

Route::delete('remove_task_user', 'Api\TaskUserController@remove')->name('remove_task_user');

Route::delete('get_task_user', 'Api\TaskUserController@index')->name('index_task_user');