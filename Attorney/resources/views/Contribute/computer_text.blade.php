<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>投稿页面</title>
    <script src="{{URL::asset('/js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('/layui/layui.js')}}"></script>
</head>
<body>
    <h1><span style="color:red">请输入要发表的内容</span></h1>
    <textarea name="" id="tex" cols="100" rows="20"></textarea>
    <br>
    @csrf
    <input type="button" value="提交" id="but" style="width:180px; height:80px; background:green">
    <a href="quit"><input type="button" value="退出" style="width:180px; height:80px; background:red;margin-left:355px;"></a>
</body>
</html>
<script>
    $(function(){
        layui.use('layer', function() {
            var layer = layui.layer;
            $('#but').click(function(){
                var tex = $('#tex').val();
               if(tex == ''){
                   layer.msg('请输入你要提交的内容',{icon:2});
                   return false;
               }else{
                   $.ajax({
                       url:'computer_add',
                       data:{'tex':tex,'_token':'{{csrf_token()}}'},
                       type:'post',
                       dataType:'json',
                       success: function(res){
                           if(res.status == 1){
                               layer.msg(res.font,{icon:res.code});
                           }else{
                               layer.msg(res.font,{icon:res.code});
                           }
                       }
                   });
               }
            });
        })
    })
</script>