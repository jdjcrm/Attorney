<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    //首页
        public function index(){
            $comment_info = DB::table('att_comments')
                ->join('att_user','att_user.u_id','=','att_comments.u_id')
                ->where(['com_status'=>1])
                ->select('att_user.true_name','att_comments.*')
                ->get();
            foreach($comment_info as &$v){

                $v->com_time = date('Y-m-d H:i:s',$v->com_time);

                if($v->com_type==1){
                    $v->com_type = '热点评论';
                }else{
                    $v->com_type = '法律评论';
                }
                if($v->com_is==1){
                    $v->com_is = '√';
                }else{
                    $v->com_is = '×';
                }

            }
//            dd($comment_info);

            return view('Admin.comment.index',['comment'=>$comment_info]);
        }
        //审核评论
       public function check(Request $request){
           $com_id = intval($request->input('cid'));

           $com_is = intval($request->input('com_is'));
           $where=['com_id'=>$com_id];
           $where_save = [
               'com_is'=>$com_is
           ];
           $res = DB::table('att_comments')->where($where)->update($where_save);
           if($res){
               return json_encode(['code'=>1000,'font'=>'修改成功']);
           }else{
               return json_encode(['code'=>2,'font'=>'修改失败']);
           }


       }

       //删除（假删）
        public function del( Request $request ){
            $comid = intval($request->input('com_id'));
            $where = ['com_id'=>$comid];
            $save_data = ['com_status'=>2];//不展示
            $res =DB::table('att_comments')->where($where)->update($save_data);
            if($res){
                return json_encode(['code'=>1000,'font'=>'删除成功']);
            }else{
                return json_encode(['code'=>2,'font'=>'删除失败']);
            }
        }

}
