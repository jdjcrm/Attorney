@extends('Admin.layout.layout')

@section('content')
    <table class="layui-table " lay-size="sm" id="test" style="margin: 15px;width:98%; text-align: center;">
        <colgroup>
            <col width="150">
            <col width="200">
            <col>
        </colgroup>
        <thead>
        <tr >
            <th>编号</th>
            <th>投稿人</th>
            <th>投稿时间</th>
            <th>投稿内容</th>
            <th>操作</th>
        </tr>
        @foreach($arr as $k=>$v)
            <tr>
                <td>{{$v->con_id}}</td>
                <td>{{$v->u_id}}</td>
                <td>{{$v->ctime}}</td>
                <td>{{$v->con_content}}</td>
                <td>
                    <input type="button" value="通过" u_id="{{$v->con_id}}" class="box1">
                    <input type="button" value="驳回" u_id="{{$v->con_id}}" class="box2">
                </td>
            </tr>
            @endforeach
        </thead>
        <tbody>
        </tbody>
    </table>
    <script>
        $(function(){
            layui.use('layer', function(){
                var layer = layui.layer;
                $('.box1').click(function(){
                    var id= $(this).attr('u_id');
                    $.ajax({
                        url:"/law/contribute_yes",
                        data:{'id':id,'_token':'{{csrf_token()}}'},
                        type:'post',
                        dataType:'json',
                        success: function(res){
                            if(res.code == 1){
                                layer.msg(res.font,{icon:res.code});
                            }else{
                                layer.msg(res.font,{icon:res.code});
                            }
                        }
                    });
                });
                $('.box2').click(function(){
                    var id= $(this).attr('u_id');
                    $.ajax({
                        url:"/law/contribute_no",
                        data:{'id':id,'_token':'{{csrf_token()}}'},
                        type:'post',
                        dataType:'json',
                        success: function(res){
                            if(res.code == 1){
                                layer.msg(res.font,{icon:res.code});
                            }else{
                                layer.msg(res.font,{icon:res.code});
                            }
                        }
                    });
                });
            });
        })

    </script>

@endsection
