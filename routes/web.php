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

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/', 'MainController@index')->name('main');

//1
Route::get('/allocate/{id}', 'AllocateController@index')->name('allocate');

//2
Route::get('/remove/{id}', 'RemoveController@index')->name('remove');

//3
Route::get('/inprogress/{id}', 'InProgressController@index')->name('in_progress');

//4
Route::get('/crossteam', 'CrossTeamController@index')->name('cross_team');

//6
Route::get('/pm/{id}', 'PMController@index')->name('pm');
