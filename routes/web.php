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
//
//Route::get('/', function () {
//    return view('form');
//});


Route::get('/','TaskController@index');
Route::post('/create','TaskController@createLecturer');
Route::get('/view','TaskController@viewDetail');
Route::get('/ajax/show/{id}','TaskController@getModule');