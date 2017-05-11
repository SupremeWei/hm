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
Route::group(['namespace' => 'Admin'], function() {
    Route::get('admin/home', 'ModifyHomeController@home');
    Route::put('admin/home', 'ModifyHomeController@editDescription');
    Route::post('admin/home/image', 'ModifyHomeController@addHomeImage');
});
