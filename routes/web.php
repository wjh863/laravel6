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

Route::any('students', 'StudentController@students');
Route::namespace('Admin')->group(function () {
    // 在 「App\Http\Controllers\Admin」 命名空间下的控制器
	Route::any('userlist', 'UserController@userlist');
});

