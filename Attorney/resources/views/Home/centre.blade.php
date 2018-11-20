<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="author" content="FamousThemes" />
    <meta name="description" content="My Mobile Page Version 3 Template" />
    <meta name="keywords" content="mobile templates, mobile wordpress themes, mobile themes, my mobile page, premium css templates, premium wordpress themes" />
    <title>小贾项目</title>

    <!-- Main CSS file -->
    <link rel="stylesheet" href="{{URL::asset('/imgs/style.css')}}"  type="text/css" media="screen" />
    <!-- Google web font -->
    <link href="../../../fonts.googleapis.com/css-family=Open+Sans-300.css"  rel='stylesheet' type='text/css'>
    <!-- jQuery file -->
    <script src="{{URL::asset('/imgs/js/jquery.min.js')}}" ></script>
    <!-- FlexSlider -->
    <script src="{{URL::asset('/imgs/js/jquery.flexslider.js')}}" ></script>
    <!-- Main effects files -->
    <script src="{{URL::asset('imgs/js/effects.js')}}" ></script>
    <!-- PrettyPhoto -->
    <script src="{{URL::asset('/imgs/js/jquery.prettyPhoto.js')}}"  type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="{{URL::asset('/imgs/prettyphoto/prettyPhoto.css')}}"  type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
    <!-- jQuery Tabs -->
    <script src="{{URL::asset('/imgs/js/jquery.tabify.js')}}"  type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        var $ = jQuery.noConflict();
        $(function() {
            $('#tabsmenu').tabify();
            $(".toggle_container").hide();
            $(".trigger").click(function(){
                $(this).toggleClass("active").next().slideToggle("slow");
                return false;
            });
        });
    </script>
    <!-- Hide Mobiles Browser Navigation Bar -->
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
        <a href="home"  class="back_button black_button">首页</a>
        <div class="page_title">小贾项目</div>
        <a href="#" id="menu_open" class="black_button">导航</a>
        <a href="#" id="menu_close" class="black_button">关闭</a>
        <div class="clear"></div>
    </div>

    <div id="pages_nav">
        <div class="icons_nav">
            <div class="paginated"> <!--Remove this DIV if you want to remove the pagination-->

                @include('Home.button')
</div>  <!--Remove this DIV if you want to remove the pagination-->
</div>
</div>


<div class="content">
<a href="{{$img}}"  rel="prettyPhoto[gallery]"><img src="{{$img}}"  alt="" style="width:100%" title="" border="0" class="rounded" /></a>

<h2>昵称：<span class="tag">{{$name}}</span></h2>

<ul class="lists">
<li>{{$sign}}</li>
</ul>



<h2><span class="tag">我的勋章</span></h2>

<ul id="tabsmenu" class="tabsmenu">
<li class="active"><a href="#tab1">铜</a></li>
<li><a href="#tab2">银</a></li>
<li><a href="#tab3">金</a></li>
</ul>
<div id="tab1" class="tabcontent">
<h3>你还没有消费够</h3>
</div>
<div id="tab2" class="tabcontent">
<h3>你还没有消费够</h3>
</div>

<div id="tab3" class="tabcontent">
<h3>你还没有消费够</h3>
</div>


<div class="clear"></div>
</div>


<div id="footer" class="black_gradient">
<a href="home"  class="back_button black_button">首页</a>
<div class="page_title">小贾项目</div>
<a onClick="jQuery('html, body').animate( { scrollTop: 0 }, 'slow' );"  href="javascript:void(0);" id="top" class="black_button">顶部</a>
<div class="clear"></div>
</div>


</div>

</body>
</html>