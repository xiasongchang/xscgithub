<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::any('login/login','LoginController@login');
Route::any('login/login_pro','LoginController@login_pro');

Route::any('index/images','IndexController@images');
Route::any('index/news','IndexController@news');
Route::any('index/newstwo','IndexController@newstwo');
Route::get('index/user_info','IndexController@user_info');
Route::get('index/user_infot','IndexController@user_infot');
Route::get('index/green','IndexController@green');
Route::get('index/delay','IndexController@delay');
Route::any('index/reportcard','IndexController@reportcard');
Route::any('index/arrive','IndexController@arrive');
Route::any('index/tiwen','IndexController@tiwen');
Route::any('index/tiwenurl','IndexController@tiwenurl');
Route::any('index/memcacheselect','IndexController@memcacheselect');


