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

Route::get('/', function(){return "<h2 style='color: blue;'>Site Under Maintenance</h2>";});

Route::get('show', 'MainController@getIndex');

#Route::post('subscribe', 'MainController@postSubscribe');
#Route::post('contact', 'MainController@postContact');

Route::get('zohoverify/{url}', 'MainController@getZoho');