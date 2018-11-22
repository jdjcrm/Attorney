<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="author" content="FamousThemes"/>
    <meta name="description" content="My Mobile Page Version 3 Template"/>
    <meta name="keywords"
          content="mobile templates, mobile wordpress themes, mobile themes, my mobile page, premium css templates, premium wordpress themes"/>
    <title>贾东杰、贾海洋、冯艳云、刘增杰项目开发小组</title>
    <!-- Main CSS file -->
    <link rel="stylesheet" href="{{URL::asset('./imgs/style.css')}}" type="text/css"
          media="screen"/>
    <script src="{{URL::asset('./layui/layui.js')}}"></script>
    <script src="./js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="{{URL::asset('./layui/css/layui.css')}}" media="all">

</head>
<body id="page">


<div id="pagecontainer">

    <div id="header" class="black_gradient">
        <a href="/"  class="back_button black_button">首页</a>
        <div class="page_title">个人账户</div>
        <a href="#" id="menu_open" class="black_button">导航</a>
        <a href="#" id="menu_close" class="black_button">关闭</a>
        <div class="clear"></div>
    </div>

</div>
<input type="hidden" id="openid" value="{{ $data->openid }}">

<h3 style = "margin-left:30%;padding:10px;color:white">您的账户余额 {{ $data->money }} 元  </h3>
<form class="layui-form" action="">


<img src="./imgs/images/pages_bg.jpg" style="width:100%;height:80%;margin-top:10%;;" alt="">

    <input type="text"  id="money" required  lay-verify="required" placeholder="请输入钱数" autocomplete="off" class="layui-input">


    <a  style="background: white;margin-left:20px;"  >充值</a>
    <a  style="background: white;margin-left:20px;" id="conpay">提现</a>

</div>
</form>
</body>
</html>
<script>

    layui.use(['form', 'layedit', 'laydate', 'layer'], function () {
        var form = layui.form
                , layer = layui.layer
                , layedit = layui.layedit
                , laydate = layui.laydate;
        var layer = layui.layer;

        $("#conpay").click(function(){
            var openid = $("#openid").val();
            var money = $("#money").val();
            $.ajax({
                url: 'conPay',
                data: {'openid': openid,'money':money, '_token': '{{csrf_token()}}'},
                type: 'get',
                dataType: 'json',
                success: function (json_msg) {
                   if(json_msg == 1){
                       layer.msg("请填写需要的钱数");
                   }else if(json_msg == 2){
                       layer.msg("请填写有效数字");
                   }else if(json_msg == 100){
                       layer.msg("成功");

                   }
                    //parent.location.reload('pay');
                }
            })
        })

    })
</script>