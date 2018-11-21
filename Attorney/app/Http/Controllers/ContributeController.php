<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Contribute;
use App\Model\Token;
use App\Model\Ewm;
class ContributeController extends Controller
{
    public function contribute(){
        $user_model = new User();
        $openid=session('openid');
        $where = [
            'openid'=>$openid,
            'status'=>1
        ];
        $arr = $user_model ->getGet($where);
        foreach($arr as $k=>$v){
            $add = $v;
        }
        if($add['type'] == 2){
            return view('Contribute.contribute');
        }else{
            return view('Contribute.bute');
        }

    }
    public function bute_add(Request $request){
       $tex = $request -> input('tex');
       $user_model = new User();
        $openid = session('openid');
        $where = [
            'openid'=>$openid,
            'status'=>1
        ];
        $arr = $user_model ->getGet($where);
        foreach($arr as $k=>$v){
            $add = $v;
        }
        $u_id = $add['u_id'];
        $insert['u_id']=$u_id;
        $insert['con_type']=1;
        $insert['con_content']=$tex;
        $insert['ctime']=time();
        $insert['status']=1;

        $bute_model = new Contribute();
        $res = $bute_model ->bute_add($insert);
        if($res){
            return ['font'=>'发表成功','code'=>1,'status'=>1];
        }else{
            return ['font'=>'发表失败','code'=>2,'status'=>2];
        }
    }

    public function computer(){
        $token_model=new Token();
        $arr= $token_model -> token_sel();
        foreach($arr as $k=>$v){
            $add = $v;
        }
        $token = $add['access_token'];
//        $token = "15_I20thnXrpNOqIBmiYi3RDC_E1sACGk0QyX1vM89UuzHAMoDrSNTxvX6xi_unU8hAZnmYSzecRfLNK7L0s5imkbRukG3M6ucaFT_ECP2bdJwLQ861jMSbuBbVuyKbn1iHnYhuCYhspQMQ7V-LSPAhAEAAXI";
        session_start();
        $sid = session_id();
        $code=new \Code();
        $data=$code ->send($sid,$token);
        $arr=json_decode($data,true);
//        print_r($arr);exit;
        $ticket = $arr['ticket'];
        $url = "https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket=".$ticket;

        return view('Contribute.computer',['img'=>$url]);
    }
    public function select(Request $request){
        session_start();
        $sid = session_id();
        $where = [
            'session_id'=>$sid
        ];
        $ewm_model=new Ewm();
        $arr=$ewm_model->ewm_desc($where);
        $openid = $arr['openid'];

        if($arr != ''){
            if(time() - $arr['ctime'] >10){
                return ['font'=>'二维码超时了','code'=>2];
            }else{
                $where = [
                    'openid'=>$openid
                ];
                $user_model = new User();
                $add=$user_model -> getGet($where);
                foreach($add as $k=>$v){
                    $app = $v;
                }
                $request -> session() ->put('user_name',$app['true_name']);
                $request -> session() ->put('openid',$app['openid']);
                return ['font'=>'扫码成功','code'=>1];
            }
        }else{
            return ['font'=>'登录失败','code'=>2];
        }

    }

    public function computer_text(){
        $name=session('user_name');
        if($name != ''){
            return view('Contribute.computer_text');
        }else{
            echo '必须扫码登录';
            header('refresh:2;url="computer"');
        }
    }

    public function computer_add(Request $request){
        $name=session('user_name');
        if($name != ''){
            $tex = $request -> input('tex');
            $user_model = new User();
            $openid = session('openid');
            $where = [
                'openid'=>$openid,
                'status'=>1
            ];
            $arr = $user_model ->getGet($where);
            foreach($arr as $k=>$v){
                $add = $v;
            }
            $u_id = $add['u_id'];
            $insert['u_id']=$u_id;
            $insert['con_type']=2;
            $insert['con_content']=$tex;
            $insert['ctime']=time();
            $insert['status']=1;

            $bute_model = new Contribute();
            $res = $bute_model ->bute_add($insert);
            if($res){
                return ['font'=>'发表成功','code'=>1,'status'=>1];
            }else{
                return ['font'=>'发表失败','code'=>2,'status'=>2];
            }

        }else{
            echo '必须扫码登录';
            header('refresh:2;url="computer"');
        }

    }

    public function quit(Request $request){
        $request->session()->flush();
        header('location:computer');
    }
}