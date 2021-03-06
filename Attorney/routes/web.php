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
Route::group(['namespace'=>'Admin'],function(){
    Route::any('admin/index','IndexController@index');
    Route::any('admin/quit','LoginController@quit');
    Route::any('comment/index','CommentController@index');
    Route::any('comment/check','CommentController@check');
    Route::any('comment/del','CommentController@del');
    //法律模块
    Route::any('law/add_class','LawController@add_class');
    Route::any('law/index','LawController@index');//添加法律文章

    Route::any('law/contribute','LawController@updata_contribute');#审批投稿
    Route::any('law/contribute_yes','LawController@contribute_yes');#通过投稿
    Route::any('law/contribute_no','LawController@contribute_no');#驳回投稿

    Route::any('law/upload','LawController@upload');//上传图片


});


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


//法律常识
Route::any('legal_index','LegalController@index');
Route::any('legal_list','LegalController@legal_list');
Route::any('legal_content','LegalController@legal_content');





/**
 * jhy
 */
//找律师 findLawyer
Route::any('findLawyer','LawyerController@findLawyer');

//找律师的详细数据 realLawyer
Route::any('realLawyer','LawyerController@realLawyer');

//查律师的名称 selectLawyer
Route::any('case/add.aspx','LawyerController@selectLawyer');

//请问律师
Route::any('question','LawyerController@case');


//提现  conPay
Route::any('conPay','MeController@conPay');

//充值  goPay
Route::any('goPay','MeController@goPay');

// 提现充值页面  pay
Route::any('pay','MeController@pay');

