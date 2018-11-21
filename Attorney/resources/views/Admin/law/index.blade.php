@extends('Admin.layout.layout')

@section('content')

    <form class="layui-form" action="javascript:;">
        <div class="layui-form-item" style="text-align: center;">
            <h2>添加法律常识</h2>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">法律标题</label>
            <div class="layui-input-inline">
                <input type="text" name="title" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">法律logn</label>
            <button type="button" class="layui-btn" id="test1">
                <i class="layui-icon">&#xe67c;</i>上传图片
            </button>
            <input type="hidden" name="a_img" id="a_img" value="">
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">法律分类</label>
            <div class="layui-input-inline">
                <select name="class" lay-verify="required">
                    <option value=""></option>
                    @foreach($kind as $v)
                    <option value="{{$v->k_id}}">{{$v->k_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="layui-input-inline">
                <button type="button"style="margin-top: 8px;" id="add_class" >添加分类</button>
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">法律文章</label>
            <div class="layui-input-block" style="width:800px;">
                <textarea name="desc" placeholder="请输入内容" class="layui-textarea"></textarea>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit="" lay-filter="demo2" id="sub">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>

    </form>

    <script>
        //Demo



        layui.use('upload', function(){
            var upload = layui.upload;

            //执行实例
            var uploadInst = upload.render({
                elem: '#test1' //绑定元素
                ,url: '{{url('law/upload')}}' //上传接口
                ,data:{
                    '_token':'{{csrf_token()}}'
                }
                ,done: function(res){
                    //上传完毕回调
                    if(res.code==1000){
                        $('#a_img').val(res.src);
                        layer.msg(res.msg);
                    }
                }
                ,error: function(){
                    //请求异常回调
                }
            });
        });

        //添加分类
        $('#add_class').click(function(){
            layer.open({
                type: 2,
                title: '添加法律分类', //不显示标题
                skin: 'layui-layer-rim', //加上边框
                area: ['500px', '300px'], //宽高
                content: '{{url('law/add_class')}}'
            });
        })

        //添加
        layui.use('form', function(){
            var form = layui.form;

            //监听提交
            form.on('submit(demo2)', function(data){

                $.ajax({
                    url:'{{url('law/index')}}',
                    data:{
                        arr:data.field,
                        '_token':'{{csrf_token()}}'
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
                return false;
            });
        });


    </script>
@endsection
