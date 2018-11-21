@extends('Admin.layout.layout')

@section('content')
    <div style="margin: 15px;">
        <div class="layui-form-item">
            <label class="layui-form-label">关键字</label>
            <div class="layui-inline">
                <input type="text" name=""  value="" id="date1" autocomplete="off" class="layui-input">
            </div>
            <div class="layui-inline">
                <button class="layui-btn">搜索</button>
            </div>

        </div>

    </div>
    <table class="layui-table " lay-size="sm" id="test" style="margin: 15px;width:98%; text-align: center;">
        <colgroup>
            <col width="150">
            <col width="200">
            <col>
        </colgroup>
        <thead>
        <tr >
            <th>编号</th>
            <th>评论人</th>
            <th>评论时间</th>
            <th>评论内容</th>
            <th>审核状态</th>
            <th>评论类型</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($comment as $v)
            <tr>
                <td>{{$v->com_id}}</td>
                <td>{{$v->true_name}}</td>
                <td>{{$v->com_time}}</td>
                <td>{{$v->com_content}}</td>
                <td><span class="check" >{{$v->com_is}}</span></td>
                <td>{{$v->com_type}}</td>
                <td><button cid="{{$v->com_id}}" class="del">删除</button></td>
            </tr>

        @endforeach
        </tbody>
    </table>
    <script>
        //审核评论
        $('.check').click(function(){
            var _this = $(this);
            var check_text = _this.text();

            var  cid=_this.parents('tr').find('.del').attr('cid');
            if(check_text=='×'){
                $.ajax({
                    url:'{{url('comment/check')}}',
                    data:{
                        '_token':'{{csrf_token()}}',
                        'cid': cid,
                        'com_is':1
                    },
                    type:'post',
                    dataType:'json',
                    async:false,
                    success:function(json_msg){
                        if(json_msg.code=='1000'){
                            layer.msg(json_msg.font,{icon:6});
                            _this.text('√');
                        }else{
                            layer.msg(json_msg.font,{icon:5});
                        }


                    }
                })
            }else{
                $.ajax({
                    url:'{{url('comment/check')}}',
                    data:{
                        '_token':'{{csrf_token()}}',
                        'cid': cid,
                        'com_is':2
                    },
                    type:'post',
                    dataType:'json',
                    async:false,
                    success:function(json_msg){
                        if(json_msg.code=='1000'){
                            layer.msg(json_msg.font,{icon:6});
                            _this.text('√');
                        }else{
                            layer.msg(json_msg.font,{icon:5});
                        }
                    }
                })
            }

        })

        //删除评论
        $('.del').click(function(){
            var _this = $(this);
            var com_id =  _this.attr('cid');
            $.ajax({
                url:'{{url('comment/del')}}',
                data:{
                    '_token':'{{csrf_token()}}',
                    'com_id':com_id
                },
                dataType:'json',
                'type':'post',
                'async':false,
                success:function(json_msg){
                    if(json_msg=='1000'){
                        layer.msg(json_msg.font,{icon:6});
                        _this.parents('tr').remove();

                    }else{
                        layer.msg(json_msg.font,{icon:5});
                    }
                }

            })
        })

    </script>

@endsection
