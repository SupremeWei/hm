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
Route::group(['namespace' => 'HmLed'], function() {
    Route::get('/', 'HomeController@home');
    Route::get('home', 'HomeController@home');
    Route::get('about', 'HomeController@about');
    Route::get('contact', 'HomeController@contact');
    Route::post('send', 'MailController@sendMail');
    Route::get('product/show/{categoryItemId}', 'ProductController@showItemDetail');
    Route::get('product/showDC/{categoryItemId}', 'ProductController@showDCItemDetail');
});
