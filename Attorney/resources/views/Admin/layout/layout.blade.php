<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>法律后台系统 - Layui</title>
    <script src="{{URL::asset('/js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{URL::asset('/layui/css/layui.css')}}">
    <script src="{{URL::asset('/layui/layui.js')}}"></script>
    <script>
        //JavaScript代码区域
        layui.use('layer', function(){
            var layer = layui.layer;
        })
    </script>
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    @include('Admin.layout.top')
    @include('Admin.layout.left')
    <div class="layui-body">
        <!-- 内容主体区域 -->
        <div style="padding: 15px;">@yield('content')</div>
    </div>
    @include('Admin.layout.footer')
</div>
<script>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;

    });

</script>

</body>
</html>
