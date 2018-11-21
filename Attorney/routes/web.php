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

Route::get('/','HomeController@top');
//Route::get('top', 'HomeController@top');

//项目后台
Route::any('admin/login', 'Admin\LoginController@login');
Route::any('admin/check', 'Admin\LoginController@check');



//Route::any('Login_topdo','LoginController@login_do');
Route::get('home', 'HomeController@home');

Route::any('homes', 'HomeController@homes');
Route::any('add', 'HomeController@add');
Route::any('add_do', 'HomeController@add_do');

#个人中心
Route::any('centre', 'HomeController@centre');

#律师投稿
Route::any('contribute','ContributeController@contribute');
Route::any('buteAdd','ContributeController@bute_add');
Route::any('computer','ContributeController@computer');
Route::any('select','ContributeController@select');
Route::any('computer_text','ContributeController@computer_text');
Route::any('computer_add','ContributeController@computer_add');
Route::any('quit','ContributeController@quit');

