<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>律师投稿</title>
    <script src="{{URL::asset('/js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('/layui/layui.js')}}"></script>
</head>
<body>
<div style="margin-left: 100px;">
    <h1><span style="background:red">律师投稿:扫码登录</span></h1>
    <img src="{{$img}}" style="width:200px;height:150px;" alt="">
</div>
</body>
</html>
<script>
    $(function(){
        layui.use(['layer'],function(){
            var layer=layui.layer;
            //每秒调用一次
            var s1=setInterval(
                    function()
                    {
                        select();
                    },
                    1000
            );

            //60秒后停止查询，并进行提示
            setTimeout(
                    function()
                    {
                        clearInterval(s1), alert('到时间了老铁儿,你在刷新下二维码吧！');
                    },
                    60000
            );

            //封装查询方法
            function select()
            {
        /*        $.post(
                        "{:U('Login/select')}",
                        {

                        },function (res) {
                            if(res.code == 1){
                                layer.msg(res.font,{icon:res.code})
                                location.href="{:U('Index/index')}";
                            }else{
//                                location.href="{:U('Login/login_add')}";
                            }
                        },
                        'json'
                );*/
                $.ajax({
                    url:"select",
                    success: function (res) {
                        if(res.code == 1){
                            layer.msg(res.font,{icon:res.code});
                            location.href="computer_text";
                        }
                    }
                });

            }

        })
    })
</script>