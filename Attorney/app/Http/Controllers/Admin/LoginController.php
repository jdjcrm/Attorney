<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //登录
    public function login(){
        return view('Admin.login');
    }
    //检测登陆操作
    public function check(Request $request ){
        $password = $request->input('password');
        $username = $request->input('username');
        if(empty($password)){
            return json_encode(['code'=>2,'font'=>'密码不能为空']);
        }
        if(empty($username)){
            return json_encode(['code'=>2,'font'=>'用户名不能为空']);
        }
        $admin_info = DB::table('att_admin')->where(['admin_name'=>$username])->first();

        if(empty($admin_info)){
            return json_encode(['code'=>2,'font'=>'该用户不存在']);
        }
        //判断密码是否正确
        if(md5($password)!=$admin_info->admin_pass){
            return json_encode(['code'=>2,'font'=>'密码输入有误']);
        }
        //登陆成功
        session('admin_info',['admin_id'=>$admin_info->admin_id,'admin_name'=>$admin_info->admin_name]);
        return json_encode(['code'=>1000,'font'=>'登录成功']);

    }
    //退出登陆
    public function quit(Request $request){
        $request->session()->flash('admin_info');
        return redirect('admin/login');
    }
}
