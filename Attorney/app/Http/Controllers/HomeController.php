<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Msg;
use App\Model\Integral;
class HomeController extends Controller
{
    public function top(Request $request){
        $arr=$this->isMobileClient();
        if($arr){
            $code = $request -> input('code');
            $appid='wxd418c4f187298a27';
            if($code == ''){
                $code_url = "http://dongjie.zengjie.shop";
                $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid={$appid}&redirect_uri={$code_url}&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect";
                header('location:'.$url);
            }else{
                $secret = "00459069924af19fb24a863c7dbe5e2c";
                $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid={$appid}&secret={$secret}&code={$code}&grant_type=authorization_code";
                $json_token=file_get_contents($url);
                $arr=json_decode($json_token,true);
                $token = $arr['access_token'];
                $get_url = "https://api.weixin.qq.com/sns/userinfo?access_token={$token}&openid={$appid}&lang=zh_CN";
                $get_arr=file_get_contents($get_url);
                $git_token=json_decode($get_arr,true);
//                print_r($git_token);
                $openid = $git_token['openid'];
                $name = $git_token['nickname'];
                $img  = $git_token['headimgurl'];
                $request -> session() ->put('openid',$openid);
                $request -> session() ->put('name',$name);
                $request -> session() ->put('img',$img);
            }
            return redirect('home');
        }else{
            echo'PC 端现在还没有开发';
        }
    }
    #登录首页
    public function home(Request $request){
        $user_obj = new User();
        $openid=session('openid');
        $where = [
            'openid'=>$openid,
            'status'=>1
        ];
        $res=$user_obj -> getGet($where);
        if($res){
            #积分
            $obj = new Integral();
            $time = time();
            $add=[];
            $arr = $obj -> inte_First();
            foreach($arr as $k=>$v){

                if($time - $v['ctime'] >(60 * 60 * 24 * 7)){
                   $add[]= $v['id'];
                }
            }
            $obj ->inte_updata($add);

            return view('Home.home');
        }else{
            return view('Home.add');
        }

    }
    #验证码
    public function add(Request $request){
        $tel=$request->input('tel');
        $code=rand(11111,99999);
        $params = array ();

        // *** 需用户填写部分 ***

        // fixme 必填: 请参阅 https://ak-console.aliyun.com/ 取得您的AK信息
        $accessKeyId = "LTAILqCk4GuMoVuk";
        $accessKeySecret = "KRUFI5BtPALb1InXx3y9apLpg1JoMQ";

        // fixme 必填: 短信接收号码
        $params["PhoneNumbers"] =$tel;

        // fixme 必填: 短信签名，应严格按"签名名称"填写，请参考: https://dysms.console.aliyun.com/dysms.htm#/develop/sign
        $params["SignName"] = "贾东杰";

        // fixme 必填: 短信模板Code，应严格按"模板CODE"填写, 请参考: https://dysms.console.aliyun.com/dysms.htm#/develop/template
        $params["TemplateCode"] = "SMS_142383393";

        // fixme 可选: 设置模板参数, 假如模板中存在变量需要替换则为必填项
        $params['TemplateParam'] = Array (
            "code" =>$code,
//        "product" => "阿里通信"
        );

        // fixme 可选: 设置发送短信流水号
//    $params['OutId'] = "12345";

        // fixme 可选: 上行短信扩展码, 扩展码字段控制在7位或以下，无特殊需求用户请忽略此字段
//    $params['SmsUpExtendCode'] = "1234567";


        // *** 需用户填写部分结束, 以下代码若无必要无需更改 ***
        if(!empty($params["TemplateParam"]) && is_array($params["TemplateParam"])) {
            $params["TemplateParam"] = json_encode($params["TemplateParam"], JSON_UNESCAPED_UNICODE);
        }

        // 初始化SignatureHelper实例用于设置参数，签名以及发送请求
        $helper = new \SignatureHelper();

        // 此处可能会抛出异常，注意catch
        $content = $helper->request(
            $accessKeyId,
            $accessKeySecret,
            "dysmsapi.aliyuncs.com",
            array_merge($params, array(
                "RegionId" => "cn-hangzhou",
                "Action" => "SendSms",
                "Version" => "2017-05-25",
            ))
        // fixme 选填: 启用https
        // ,true

        );
        if($content){
            $insert = [
                'msg_tel'=>$tel,
                'msg_code'=>$code,
                'ctime'=>time(),
            ];
            DB::table('att_msg')->insertGetId(
                $insert
            );

            return 1;
        }else{
            return 2;
        }
    }
    #添加用户
    public function add_do(Request $request){
        $t_name=$request -> input('t_name');
        $name=$request -> input('name');
        $type=$request -> input('type');
        $signature=$request -> input('signature');
        $pwd=$request -> input('pwd');
        $tel=$request -> input('tel');
        $code=$request -> input('code');
        $pwds=$request -> input('pwds');
        if(empty($t_name)){
            echo '真实姓名必须';exit;
        }
        if(empty($pwd)){
            echo '密码必填';exit;
        }
        if(empty($tel)){
            echo '手机号必填';exit;
        }
        if(empty($code)){
            echo '验证码必填';exit;
        }
        if(empty($pwds)){
            echo '确认密码必填';exit;
        }
        if($pwd != $pwds){
            echo '密码必须一样';exit;
        }
        $where = [
            'msg_tel'=>$tel
        ];
        $obj = new Msg();
        $arr=$obj -> getFirst($where);
        $msg_code = $arr['msg_code'];
        if($msg_code != $code){
           echo '验证码不正确';
            header("refresh:2,url='home'");
            exit;
        }

        if(time()-$arr['ctime'] >300){
            echo '验证码已经超时';
            header("refresh:2,url='home'");
            exit;
        }
        $openid=session('openid');
        $insert['openid'] = $openid;
        $insert['true_name'] = $t_name;
        $insert['u_name'] = $name;
        $insert['u_pwd'] = $pwd;
        $insert['ctime'] = time();
        $insert['signature'] = $signature;
        $insert['tel'] = $tel;
        $insert['status'] = 1;
        $insert['type'] = $type;
        $user_model = new User();
        $add= $user_model ->add($insert);
        if($add){
            #添加积分表
            $user_model  =  new User();
            $openid = session('openid');
            $where = [
                'openid'=>$openid,
                'status'=>1
            ];
            $arr = $user_model -> getGet($where);

            foreach($arr as $k=>$v){
                $u_id = $v['u_id'];
            }
            $app['u_id']=$u_id;
            $app['ctime']=time();
            $app['integral']=0;
            $Integ_model = new Integral();
            $Integ_model ->inte_add($app);
            echo '注册成功';
            header("refresh:1,url='/'");
        }else{
            echo '注册失败';
            header("refresh:1,url='home'");
        }
    }
    #个人中心

    public function centre(){
        $name = session('name');
        $img = session('img');
        $openid=session('openid');
        $user_model = new User();
        $where = [
            'openid'=>$openid,
            'status'=>1
        ];
        $arr = $user_model ->getGet($where);
        foreach($arr as $k=>$v){
            $add=$v;
        }
        $u_id = $add['u_id'];
        $where = [
            'u_id'=>$u_id
        ];
        $inte_model = new Integral();
        $data=$inte_model ->getfind($where);
        foreach($data as $k=>$v){
            $app = $v;
        }
        return view('Home.centre',['name'=>$name,'img'=>$img,'sign'=>$add['signature'],'integral'=>$app['integral']]);
    }
    public function homes(){
        return view('Home.homes');
    }

    #导航栏
    public function button(){
        return view('Home.button');
    }



    /**
     * 判断是否微信内置浏览器访问
     * @return bool
     */
    protected function isWxClient()
    {
        return $this->isMobileClient() && strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false;
    }

    /**
     * 是否移动端访问访问
     *
     * @return bool
     */
    protected function isMobileClient()
    {
        // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
        if (isset($_SERVER['HTTP_X_WAP_PROFILE'])) {
            return true;
        }

        //如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
        if (isset($_SERVER['HTTP_VIA'])) {
            //找不到为flase,否则为true
            return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
        }

        //判断手机发送的客户端标志,兼容性有待提高
        if (isset($_SERVER['HTTP_USER_AGENT'])) {
            $clientkeywords = array(
                'nokia', 'sony', 'ericsson', 'mot', 'samsung', 'htc', 'sgh', 'lg', 'sharp',
                'sie-', 'philips', 'panasonic', 'alcatel', 'lenovo', 'iphone', 'ipod', 'blackberry', 'meizu',
                'android', 'netfront', 'symbian', 'ucweb', 'windowsce', 'palm', 'operamini', 'operamobi',
                'openwave', 'nexusone', 'cldc', 'midp', 'wap', 'mobile','alipay'
            );

            // 从HTTP_USER_AGENT中查找手机浏览器的关键字
            if (preg_match("/(".implode('|', $clientkeywords).")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
                return true;
            }
        }

        //协议法，因为有可能不准确，放到最后判断
        if (isset($_SERVER['HTTP_ACCEPT'])) {
            // 如果只支持wml并且不支持html那一定是移动设备
            // 如果支持wml和html但是wml在html之前则是移动设备
            if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
                return true;
            }
        }

        return false;
    }


}