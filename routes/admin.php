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
    Route::put('admin/home', 'ModifyHomeController@editHomeDescription');
    Route::post('admin/home/image', 'ModifyHomeController@addHomeImage');
    Route::delete('admin/home/image/{companyImageId}', 'ModifyHomeController@deleteHomeImage');

    Route::get('admin/about', 'ModifyAboutController@about');
    Route::put('admin/about', 'ModifyAboutController@editAboutDescription');
    Route::post('admin/about/image', 'ModifyAboutController@addAboutImage');
    Route::delete('admin/about/image/{companyImageId}', 'ModifyAboutController@deleteAboutImage');
});
