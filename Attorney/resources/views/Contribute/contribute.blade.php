<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="author" content="FamousThemes" />
    <meta name="description" content="My Mobile Page Version 3 Template" />
    <meta name="keywords" content="mobile templates, mobile wordpress themes, mobile themes, my mobile page, premium css templates, premium wordpress themes" />
    <title>贾东杰，贾海洋，冯艳云，刘增杰</title>

    <!-- Main CSS file -->
    <link rel="stylesheet" href="{{URL::asset('/imgs/style.css')}}"  type="text/css" media="screen" />
    <!-- Google web font -->
    <link href="../../../fonts.googleapis.com/css-family=Open+Sans-300.css"  rel='stylesheet' type='text/css'>
    <!-- jQuery file -->
    <script src="{{URL::asset('/imgs/js/jquery.min.js')}}" ></script>
    <!-- FlexSlider -->
    <script src="{{URL::asset('/imgs/js/jquery.flexslider.js')}}" ></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.images_slider').flexslider({
                animation: "slide",
                directionNav: false,
                controlNav: true,
                animationLoop: true,
                animationDuration: 300,
                slideshow: false
            });
        });
    </script>
    <!-- Main effects files -->
    <script src="{{URL::asset('/imgs/js/effects.js')}}" ></script>
    <!-- PrettyPhoto -->
    <script src="{{URL::asset('/imgs/js/jquery.prettyPhoto.js')}}"  type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="{{URL::asset('/imgs/prettyphoto/prettyPhoto.css')}}"  type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
    <!-- Hide Mobiles Browser Navigation Bar -->
    <script src="{{URL::asset('/layui/layui.js')}}"></script>
    <script type="text/javascript">
        window.addEventListener("load",function() {
            // Set a timeout...
            setTimeout(function(){
                // Hide the address bar!
                window.scrollTo(0, 1);
            }, 0);
        });
    </script>
</head>
<body id="page">

<div id="pagecontainer">

    <div id="header" class="black_gradient">
        <a href="index.html" class="back_button black_button">首页</a>
        <div class="page_title">律师投稿</div>
        <a href="#" id="menu_open" class="black_button">导航</a>
        <a href="#" id="menu_close" class="black_button">关闭</a>
        <div class="clear"></div>
    </div>

    <div id="pages_nav">
        <div class="icons_nav">
            <div class="paginated"> <!--Remove this DIV if you want to remove the pagination-->
                @include("Home.button")
            </div>  <!--Remove this DIV if you want to remove the pagination-->
        </div>
    </div>

    <div style="width:100px;height:600px;;">
        <textarea name="" id="tex" cols="40" rows="10"></textarea>
        <input type="button" value="投稿" style="width:100%;height:30px;" id="box1">
        <input type="button" value="电脑输入" style="width:100%;height:30px;" id="box2">
    </div>


    <div id="footer" class="black_gradient">
        <a href="index.html" class="back_button black_button">首页</a>
        <div class="page_title">小贾项目</div>
        <a onClick="jQuery('html, body').animate( { scrollTop: 0 }, 'slow' );"  href="javascript:void(0);" id="top" class="black_button">顶部</a>
        <div class="clear"></div>
    </div>


</div>

</body>
</html>
<script>
    $(function(){
        layui.use('layer', function(){
            var layer = layui.layer;

            $('#box1').click(function(){
                var tex=$('#tex').val();
                if(tex == ''){
                    layer.msg('不能为空',{icon:2});
                    return false;
                }

                $.ajax({
                    url:"buteAdd",
                    data:{'tex':tex,'_token':'{{csrf_token()}}'},
                    type:'post',
                    success: function(json_msg){
                        if(json_msg['status'] == 1){
                            layer.msg(json_msg['font'],{icon:json_msg['code']});
                        }else{
                            layer.msg(json_msg['font'],{icon:json_msg['code']});
                        }
                    }
                });
            });
            $('#box2').click(function(){
                alert("http://dongjie.zengjie.shop/computer");
            });
        });

    })
</script>