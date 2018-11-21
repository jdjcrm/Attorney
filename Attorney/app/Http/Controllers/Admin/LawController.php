<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LawController extends Controller
{

    //添加法律文章
    public function index(Request $request){
       if($request->isMethod('get')){
           //查询法律分类并展示
           $kind_info = DB::table('att_kind')->where(['status'=>1])->get();

           return view('Admin.law.index',['kind'=>$kind_info]);
       }else{
           $data = $request->input('arr');
           $att_k_title = $data['title'];
           if(empty($att_k_title)){
               return json_encode(['code'=>2,'font'=>'标题不能为空']);
           }
           $k_id =$data['class'];
           if(empty($k_id)){
               return json_encode(['code'=>2,'font'=>'请选择分类']);
           }
           $article_content=$data['desc'];
           if(empty($article_content)){
               return json_encode(['code'=>2,'font'=>'文章内容不能为空']);
           }
           $a_img = $data['a_img'];
           if(empty($a_img)){
               return json_encode(['code'=>2,'font'=>'请先选择上传图片']);
           }
           $insert=[
               'att_k_title'=>$att_k_title,
               'k_id'=>$k_id,
               'article_content'=>$article_content,
               'ctime'=>time(),
               'a_img'=>$a_img
           ];
           $res = DB::table('att_k_article')->insert($insert);
           if($res){
               return json_encode(['code'=>1000,'font'=>'文章添加成功']);
           }else{
               return json_encode(['code'=>2,'font'=>'文章添加失败']);
           }

       }


    }

    //添加法律分类
    public function add_class(Request $request){
        if($request->isMethod('get')){
            return view('Admin.law.add_class');
        }else{
            //分类添加操作

            $k_name = htmlspecialchars($request->input('title'));
            if(empty($k_name)){
                return json_encode(['code'=>2,'font'=>'分类名称不能为空']);
            }
            $kind_data = DB::table('att_kind')->where(['k_name'=>$k_name])->first();
            if(!empty($kind_data)){
                return json_encode(['code'=>2,'font'=>'分类名已存在']);
            }
            if(empty($k_name)){
                return json_encode(['code'=>2,'font'=>'分类名称不能为空']);
            }
            $k_img = $request->input('k_img');
            if(empty($k_img)){
                return json_encode(['code'=>2,'font'=>'请先选择上传图片']);
            }
            $insert = [
                'k_name'=>$k_name,
                'ctime'=>time(),
                'status'=>1,
                'k_img'=>$k_img
            ];
            $res = DB::table('att_kind')->insert($insert);
            if($res){
                return json_encode(['code'=>1000,'font'=>'分类添加成功']);
            }else{
                return json_encode(['code'=>2,'font'=>'分类添加失败']);
            }


        }

    }

    //上传图片
    public function upload(Request $request){
        $file = $request->file('file');

        // 文件是否上传成功
        if ($file->isValid()) {

            //如果括号里面的不加上的话，下面的方法也无法调用的

            //获取文件的扩展名
            $ext = $file->getClientOriginalExtension();

            //获取文件的绝对路径
            $path = $file->getRealPath();

            //定义文件名
            $filename = date('Y-m-d-h-i-s').uniqid().'.'.$ext;

            //存储文件。disk里面的public。总的来说，就是调用disk模块里的public配置
            Storage::disk('public')->put($filename, file_get_contents($path));
            $arr=[

                'code'=>1000,

                'msg'=>'上传成功',
                //使用php artisan storage:link  创建一个软连接指向storage/app/public
                'src'=>'/storage/'.$filename,//保存图片路径

                'title'=>'1111'

            ];
            return json_encode($arr);
        }
    }


}
