<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/**
 * 律师模块
 * 编写人  ： jhy
 * Class LawyerController
 * @package App\Http\Controllers
 */
class LawyerController extends Controller
{
    /**
     * 找律师
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function findLawyer(Request $request)
    {
        //查找律师的条件
        $user_where = [
            'type'=>2,
            'status'=>1
        ];

        //查询律师的数据
        $user_data = DB::table('att_user')->where($user_where)->select()->get()->toArray();

        return view("Lawyer.findLawyer",['user_data'=>$user_data]);
    }

    public function selectLawyer(Request $request){

        $openid = $request -> input("guid");

        //查找律师的条件
        $user_where = [
          'openid'=>$openid
        ];

        //查询律师的数据
        $pro_data = DB::table('att_problem')->where($user_where)->select()->get();

       if(!empty($pro_data)){
           $pro_data = $pro_data->toArray();
          $openid_arr = [];
           foreach($pro_data as $k=>$v){
               $openid_arr[] .= $v->openid_pro;
           }


           $user_data = DB::table('att_user')->whereIn('openid',$openid_arr)->select()->get()->toArray();

           foreach($pro_data as $k=>$v){
               foreach($user_data as $key => $value){
                    if($v->openid_pro == $value->openid){
                        $pro_data[$k]->openid_pro= $value;
                    }
               }
           }
       }




       return view("Lawyer.realLawyer",['pro_data'=>$pro_data,'openid'=>$openid]);
    }


    /**
     * 查询律师的详情
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function realLawyer(Request $request){

        //接收 openID
        $openid = $request -> input('openid');

        //判断是否接受
        if($openid == ''){
            echo "请使用正确的方式进行查看";
            exit;
        }

        $user_where = [
            'openid'=>$openid
        ];

        //查询律师的详细数据
        $user_data = DB::table('att_user')->where($user_where)->first();

        return view("Lawyer.realLawyer",['user_data'=>$user_data]);
    }

    public function case(Request $request){
        $data['problem'] = $request -> input('content');
        $data['openid'] = $request -> input("openid");
        $data['openid_pro'] = "ooz740cL_u43xvN51aBFD95qUVMg";
        $guid = $data['openid'];
        $res = DB::table("att_problem")->insert($data);

        if($res){
            echo "添加成功";
            header("refresh:2;url='case/add.aspx?guid={$guid}'");
        }else{
            echo "添加失败";
            header("refresh:2;url='case/add.aspx'");
        }

    }

}

?>