<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/**
 * 充值提现 模块
 * 编写人  ： jhy
 * Class MeController
 * @package App\Http\Controllers
 */
class MeController extends Controller
{
    /**
    * 支付 充值 页面
    * @param Request $request
    * @return \Illuminate\Contracts\View\Factory|\Ill--uminate\View\View|\think\response\View
    */
    public function pay(Request $request){



        $openid = $request ->session()->get("openid");

        if($openid == '' ){
            $openid = "ooz740cL_u43xvN51aBFD95qUVMg";
        }

        $where = [
            'openid'=>$openid
        ];
        $data = DB::table("att_user")->where($where)->first();

        return view("pay" ,['data'=>$data] );
    }

    /**
     * 微信提现
     * @param Request $request
     */
    public function conPay(Request $request){

        //接收openID
        $openid = $request -> session() ->get('openid');

        $money = $request -> input("money");

        if($money === ''){
            echo 1;exit;
        }

        if($openid == ''){
            $openid = "ooz740cL_u43xvN51aBFD95qUVMg";
        }

        $where = [
            'openid' => $openid
        ];

        $user_data = DB::table("att_user")->where($where)->first();

        $old_money = $user_data->money;

        if($old_money < $money ){
            echo 1;exit;
        }

        //拼接提现使用的参数
        $params =[
            'mch_appid' => "wx3d751ea7a2f7c064",//APPid,
            'mchid'          => "1499304962",//商户号,
            'nonce_str'          => md5(time()), //随机字符串
            'partner_trade_no'          => date('YmdHis'), //商户订单号
            'openid'          => $openid, //用户openid
            'check_name'          => 'NO_CHECK',//校验用户姓名选项 NO_CHECK：不校验真实姓名 FORCE_CHECK：强校验真实姓名
            //'re_user_name'          => '',//收款用户姓名  如果check_name设置为FORCE_CHECK，则必填用户真实姓名
            'amount'          => "$money",//金额 单位分
            'desc'          => '测试付款',//付款描述
            'spbill_create_ip'     => $_SERVER['SERVER_ADDR'],//调用接口机器的ip地址
        ];


        //提现的参数
        $url = "https://api.mch.weixin.qq.com/mmpaymkttransfers/promotion/transfers";

        //排序
        ksort($params);

        //拼接
        $key='sdg634fghgu5654rtghfghgfy4575htg';
        
        $str=urldecode(http_build_query($params)).'&key='.$key;

        $sign = strtoupper(md5($str));

        $params['sign'] = $sign;

        $xml = $this->ArrToXml($params);

        $res = $this->curlRequest($url,$xml);

        $loge =$this-> XmlToArr($res);

        $new_money =  $old_money - $money;

        $new_where = [
            'money' =>$new_money
        ];

        $user_res = DB::table("att_user")->where($where)->update($new_where);


        echo 100;

    }

    /**
     * 微信充值
     * @param Request $request
     */
    public function goPay(Request $request){

        $key='sdg634fghgu5654rtghfghgfy4575htg';
        $url = 'https://api.mch.weixin.qq.com/pay/unifiedorder';
        $params = [
            'appid' => 'wx3d751ea7a2f7c064', //公众账号id
            'mch_id' => '1499304962',  //商户id
            'nonce_str' => uniqid(), //随机号
            'body' => '测试商品jhy',//商品描述
            'out_trade_no' => time(),//商品订单号
            'total_fee'=>11 ,//标价金
            'spbill_create_ip'=>$_SERVER['SERVER_ADDR'], //终端IP
            'notify_url'=>'http://jhyimg.nanyang128.club/dome4/notify.php',//通知地址
            'trade_type'=>'MWEB' //交易类型
        ];

        //排序
        ksort($params);

        //拼接
        $str=urldecode(http_build_query($params)).'&key='.$key;

        $sign = strtoupper(md5($str));

        $params['sign'] = $sign;

        $xml = $this->ArrToXml($params);

        $res = $this->curlRequest($url,$xml);

        $loge = $this->XmlToArr($res);

        header("location:".$loge['mweb_url']);
    }

    /**
     * 通过curl发送数据
     * @param $url  请求的路径
     * @param $data  发送的数据
     * @return mixed  请求的错误
     */
    function curlRequest($url,$data = ''){
        $ch = curl_init();
        $params[CURLOPT_URL] = $url;    //请求url地址
        $params[CURLOPT_HEADER] = false; //是否返回响应头信息
        $params[CURLOPT_RETURNTRANSFER] = true; //是否将结果返回
        $params[CURLOPT_FOLLOWLOCATION] = true; //是否重定向
        $params[CURLOPT_TIMEOUT] = 30; //超时时间
        if(!empty($data)){
            $params[CURLOPT_POST] = true;
            $params[CURLOPT_POSTFIELDS] = $data;
        }
        $params[CURLOPT_SSL_VERIFYPEER] = false;//请求https时设置,还有其他解决方案
        $params[CURLOPT_SSL_VERIFYHOST] = false;//请求https时,其他方案查看其他博文

        //以下是证书相关代码
        $params[CURLOPT_SSLCERTTYPE] = 'PEM';
        $params[CURLOPT_SSLCERT] = public_path('apiclient/apiclient_cert.pem');
        $params[CURLOPT_SSLKEYTYPE] = 'PEM';
        $params[CURLOPT_SSLKEY] = public_path('apiclient/apiclient_key.pem');

        curl_setopt_array($ch, $params); //传入curl参数
        $content = curl_exec($ch); //执行
        curl_close($ch); //关闭连接
        return $content;
    }

    //数组转xml
    private function ArrToXml($arr)
    {
        if (!is_array($arr) || count($arr) == 0) return '';

        $xml = "<xml>";
        foreach ($arr as $key => $val) {
            if (is_numeric($val)) {
                $xml .= "<" . $key . ">" . $val . "</" . $key . ">";
            } else {
                $xml .= "<" . $key . "><![CDATA[" . $val . "]]></" . $key . ">";
            }
        }
        $xml .= "</xml>";
        return $xml;
    }

    //Xml转数组
    function XmlToArr($xml)
    {
        if ($xml == '') return '';
        libxml_disable_entity_loader(true);
        $arr = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
        return $arr;
    }

}