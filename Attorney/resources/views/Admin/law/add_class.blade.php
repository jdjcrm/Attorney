<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加法律分类</title>
    <script src="/admin/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/admin/Layui/css/layui.css">
    <script src="/admin/Layui/layui.js"></script>
    <script>
        //JavaScript代码区域
        layui.use('layer', function(){
            var layer = layui.layer;
        })
    </script>
</head>
<body>
<form class="layui-form" action="javascrip:;" style="margin-top: 50px;">
    <div class="layui-form-item">
        <label class="layui-form-label">分类名称</label>
        <div class="layui-input-block" style="width:300px;">
            <input type="text" name="title" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">分类图片</label>
        <div class="layui-input-block">
            <button type="button" class="layui-btn" id="test1">
                <i class="layui-icon">&#xe67c;</i>上传图片
            </button>
            <input type="hidden" name="k_img" id="k_img" value="">
        </div>


    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" id="sub">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>


</body>
<script>
    layui.use('upload', function(){
        var upload = layui.upload;

        //执行实例
        var uploadInst = upload.render({
            elem: '#test1' //绑定元素
            ,url: "{{url('law/upload')}}" //上传接口
            ,data: {
                '_token':'{{csrf_token()}}'
            }
            ,done: function(res){
                //上传完毕回调
                if(res.code==1000){
                    $('#k_img').val(res.src);
                    layer.msg(res.msg);
                }

            }
            ,error: function(){
                //请求异常回调
            }
        });
    });

    //添加
    $('#sub').click(function(){
       var title = $("[name='title']").val();//标题
        var k_img = $('#k_img').val();
        if(k_img==''){
            layer.msg('请选择上传图片',{icon:2});
            return false;
        }
        if(title==''){
            layer.msg('分类名称不能为空',{icon:2});
            return false;
        }

        $.ajax({
            url:'{{url('law/add_class')}}',
            data:{
                '_token':'{{csrf_token()}}',
                'title':title,
                'k_img':k_img
            },
            dataType:'json',
            'type':'post',
            'async':false,
            success:function(json_msg){
                if(json_msg.code == 1000){
                    layer.msg(json_msg.font,{icon:6});

                }else{
                    layer.msg(json_msg.font,{icon:5});
                }
            }

        })
    })
</script>
</html>
