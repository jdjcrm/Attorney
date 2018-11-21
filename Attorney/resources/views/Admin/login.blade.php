
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <meta charset="utf-8">
    <title>Fullscreen Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
    <link rel="stylesheet" href="{{URL::asset('/admin/assets/css/reset.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/admin/assets/css/supersized.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/admin/assets/css/style.css')}}">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<div class="page-container">
    <h1>法律后台系统</h1>
    <form action="javascript:;" method="post">

        <input type="text" name="username" class="username" placeholder="Username">
        <input type="password" name="password" class="password" placeholder="Password">
        <button type="button" id="login">登录</button>
        <div class="error"><span>+</span></div>
    </form>
    <div class="connect">
        <p>Or connect with:</p>
        <p>
            <a class="facebook" href=""></a>
            <a class="twitter" href=""></a>
        </p>
    </div>
</div>

<!-- Javascript -->
<script src="{{URL::asset('/admin/assets/js/jquery-1.8.2.min.js')}}"></script>
<script src="{{URL::asset('/admin/assets/js/supersized.3.2.7.min.js')}}"></script>
<script src="{{URL::asset('/admin/assets/js/supersized-init.js')}}"></script>
<script src="{{URL::asset('/admin/assets/js/scripts.js')}}"></script>
<script src="{{URL::asset('/layui/layui.js')}}"></script>
</body>
<script>
    layui.use('layer', function(){
        var layer = layui.layer;
    });
    $('#login').click(function(){
        var username = $("input[name='username']").val();
        var password = $("input[name='password']").val();
        $.ajax({
            url:'{{url('admin/check')}}',
            data:{
                'password':password,
                'username':username,
                _token:'{{csrf_token()}}'
            },
            dataType:'json',
            type:'post',
            async:false,
            success:function(json_msg){

                if(json_msg.code==1000){

                    layui.layer.msg(json_msg.font,{icon:6});
                    setTimeout(function (){
                        window.location.href="{{url('admin/index')}}";
                    },1000)

                }else{
                    layui.layer.msg(json_msg.font,{icon:5});
                }
            }
        })
    })
</script>
</html>

