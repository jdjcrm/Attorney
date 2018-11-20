<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>注册</title>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/imgs/css/loaders.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/imgs/css/loading.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/imgs/css/base.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/imgs/css/style.css')}}"/>
    <script src="{{URL::asset('/imgs/js/jquery.min.js')}}" type="text/javascript" charset="utf-8"></script>
    <script src="{{URL::asset('/layui/layui.js')}}"></script>
    <script type="text/javascript">
        $(window).load(function(){
            $(".loading").addClass("loader-chanage")
            $(".loading").fadeOut(300)
        })
    </script>
</head>
<!--loading页开始-->
<div class="loading">
    <div class="loader">
        <div class="loader-inner pacman">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!--loading页结束-->
<body>
<header class="top-header">
    <h3>注册</h3>
</header>

<div class="login">
    <form action="add_do" method="post" id="fom">
        <ul>
            <li>
                <label>真实姓名</label>
                <input type="text" name="t_name" id="t_name" placeholder="请输入姓名"/>
            </li>
                选择类型:
                <input type="radio" name="type" value="1" checked>普通用户
                <input type="radio" name="type" value="2">律师
            <li>
               个性签名
                <textarea name="signature" id="" cols="30" rows="10"></textarea>
            </li>
            <li>
                <label>账号</label>
                <input type="text" name="name" id="name" placeholder="请输入账号"/>
            </li>
            <li>
                <label>密码</label>
                <input type="password" name="pwd" id="pwd" placeholder="请输入密码"/>
            </li>
            <li>
                <label>确认密码</label>
                <input type="password" name="pwds" id="pwds" placeholder="请输入确认密码"/>
            </li>
            <li>
                <label>手机号</label>
                <input type="text" name="tel" id="tel" placeholder="请输入手机号"/>
            </li>
           <li> <label>验证码</label> <input type="text" name="code" id="code" placeholder="请输入验证码"/> <input type="button" id="one" value="获取验证码"> </li>;
        </ul>
        @csrf
        <input type="submit" id="sub" value="注册">
    </form>
</div>

</body>
</html>
<script>
    $(function(){

        layui.use('layer', function(){
            var layer = layui.layer;
            $('#tel').blur(function(){
                if($('#tel').val() == ''){
                    layer.msg('手机号不能为空',{icon:2});
                }

            })

            $('#one').click(function(){
                var tel = $('#tel').val();
                if(tel == ''){
                    layer.msg('手机号不能为空',{icon:2});
                }else{
                    $.ajax({
                        url:'add',
                        data:{'tel':tel,'_token':'{{csrf_token()}}'},
                        dataType:'json',
                        type:'post',
                        success: function(json_msg){
                            if(json_msg ==1){
                                layer.msg('发送成功',{icon:1});
                            }else{
                                layer.msg('发送失败',{icon:2});
                            }
                        }
                    });
                }
            });

            var fom_submit
            $('#fom').submit(function(){
                if(fom_submit==false){
                    return false;
                }else{
                    return true;
                }
            });
            $('#sub').click(function(){
                var name=$('#name').val();
                if(name == ''){
                    alert('账号不能为空');
                    fom_submit=false
                }
                var pwd =$('#pwd').val();
                if(pwd == ''){
                    alert('密码不能为空');
                    fom_submit=false
                }
                var t_name = $('#t_name').val();

                if(t_name == ''){
                    alert('真实姓名不能为空');
                    fom_submit=false;
                }
                 var code = $('#code').val();
                if(code == ''){
                    alert('验证码不能为空');
                    fom_submit=false;
                }
                var pwds = $('#pwds').val();
                if(pwds == ''){
                    alert('确认密码不能为空');
                    fom_submit=false;
                }
                if(pwd != pwds){
                    alert('密码必须一样');
                    fom_submit=false;
                }
            })

        });

    })
</script>