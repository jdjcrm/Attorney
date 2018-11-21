<?php
class Code
{
    //请求模板消息的地址
    const TEMP_URL = 'https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token=';
    /**
     * 微信模板消息发送
     * @param $openid 接收用户的openid
     * return 发送结果
     */
    public function send($sid,$tokens){
        $url = self::TEMP_URL . $tokens;

        $arr = [
            'action_name'=>'QR_STR_SCENE',
            'action_info'=>[
                'scene'=>[
                    'scene_str'=>$sid
                ]
            ]
        ];
        $json=json_encode($arr);
        return $this->curlPost($url, $json);
    }
    /**
     * 通过CURL发送数据
     * @param $url 请求的URL地址
     * @param $data 发送的数据
     * return 请求结果
     */
    protected function curlPost($url,$data)
    {
        $ch = curl_init();
        $params[CURLOPT_URL] = $url;    //请求url地址
        $params[CURLOPT_HEADER] = FALSE; //是否返回响应头信息
        $params[CURLOPT_SSL_VERIFYPEER] = false;
        $params[CURLOPT_SSL_VERIFYHOST] = false;
        $params[CURLOPT_RETURNTRANSFER] = true; //是否将结果返回
        $params[CURLOPT_POST] = true;
        $params[CURLOPT_POSTFIELDS] = $data;
        curl_setopt_array($ch, $params); //传入curl参数
        $content = curl_exec($ch); //执行
        curl_close($ch); //关闭连接
        return $content;
    }
}
?>