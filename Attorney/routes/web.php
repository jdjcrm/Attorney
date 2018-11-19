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



//项目后台
Route::any('admin/login','Admin\LoginController@login');
Route::any('admin/check','Admin\LoginController@check');

Route::get('/', function () {
    return view('Home.home');
});

//Route::any('Login_do','LoginController@login_do');
Route::any('homes','HomeController@homes');

