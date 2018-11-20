<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Msg;
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
}