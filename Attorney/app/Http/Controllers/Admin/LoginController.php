<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //登录
    public function login(){
        return view('Admin.login');
    }
    //检测登陆操作
    public function check(Request $request ){
        dd($request->all());
    }
}
