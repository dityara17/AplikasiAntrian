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

use Illuminate\Support\Facades\Route;


Route::get('/','ClientController@index');
Route::get('berita/{id}','ClientController@showNews');
Route::get('info/{id}','ClientController@showInfo');
Route::get('profile','ClientController@profile');
Route::get('siswa','ClientController@siswa');
Route::get('/login', 'AuthController@index');
Route::post('login','AuthController@check');
Route::group(['middleware' => 'checklog'], function(){
    Route::get('admin/logout','AuthController@logout');
    Route::get('admin','AdminController@index');
    Route::get('admin/post','PostController@index');
    Route::get('admin/post/insert','PostController@insert');
    Route::post('admin/post/insert','PostController@store');
    Route::get('admin/post/delete/{id}','PostController@destroy');
    Route::get('admin/post/edit/{id}','PostController@edit');
    Route::post('admin/post/edit/{id}','PostController@update');
    Route::get('admin/info','InfoController@index');
    Route::get('admin/info/insert','InfoController@insert');
    Route::post('admin/info/insert','InfoController@store');
    Route::get('admin/info/delete/{id}','infoController@delete');
    Route::get('admin/info/edit/{id}','infoController@edit');
    Route::post('admin/info/edit/{id}','infoController@update');
});


