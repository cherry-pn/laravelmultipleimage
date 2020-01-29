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

Route::get('multiple_file_upload','MultipleUploadController@index');
Route::get('multiple_file_upload/reserve','MultipleUploadController@reserve')->name('reserve');
Route::post('multiple_file_upload/upload','MultipleUploadController@upload')->name('upload');
