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

Route::post('getsome', 'TestController@getsome');

Route::namespace('Admin')->group(function () {
    // 在 「App\Http\Controllers\Admin」 命名空间下的控制器
	Route::any('admin/getsome', 'AdminController@getsome');
});

Route::namespace('Api')->group(function(){
	Route::get('login', 'NusersController@login');
	Route::post('dologin', 'NusersController@dologin');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
