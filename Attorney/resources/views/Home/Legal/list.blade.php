<script>var boardid=1;var lasttime='2014-05-18+20%3A47%3A29';</script>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="gb2312">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" name="viewport"/>
    <meta name="author" content="法律常识">
    <meta name="keywords" content="法律常识,法律常识">
    <meta name="description" content="法律常识">
    <meta name="copyright" content="法律常识" />
    <title>法律常识</title>

    <link rel="icon" href="../www.kdnet.net/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="../www.kdnet.net/favicon.ico" type="image/x-icon" />
    <link rel="bookmark" href="../www.kdnet.net/favicon.ico" type="image/x-icon" />

    <link href="/law/css/base.css" rel="stylesheet" type="text/css" /><!--公用样式-->
    <link href="/law/css/kdclub.css" rel="stylesheet" type="text/css" /><!--触屏版样式-->

    <script type="text/javascript" language="javascript" src="/law/js/jquery.min.js"></script><!--jquery.min.js-->
    <script type="text/javascript" language="javascript" src="/law/js/jquery.cookie.js"></script> <!-- jquery.cookie.js -->
    <script type="text/javascript" language="javascript" src="/law/js/common.js"></script><!--jquery.min.js-->

</head>

<body id="gotop">

<header class="header">
    <div class="appdown appUrl"><a href="../3g.kdnet.net/app.php@type=t7" target="_blank"><img src="images/appdown.jpg"></a><b class="close"></b></div>
    <div class="header-main">
        <h1 class="nav-top-title title-2"><a href="javascript:history.back(-1);"><b class="icon-back"></b>法律你我知</a></h1>
        <div class="goHome"><a href="{{url('home')}}">首页</a></div>
        <b class="icon-search"><a href="search.html"></a></b>

    </div>
</header><!-- /.header-->
<div class="no-header"></div>

<!--内容 S-->
<article>
    <ul class="list-thelist">
        @foreach($article as $v)
        <li class="clearfix">
            <a href="{{url('legal_content')}}?a_id={{$v->id}}">

                <h2 class="news-Title">{{$v->att_k_title}}</h2>
                <p class="news-Intro"><span class="user"><b class="mr10">{{$v->k_id}}</b><b>{{$v->ctime}}</b></span><span class="num">查看文章</span></p>
            </a>
        </li>
        @endforeach
    </ul>

    <div class="my-loading-box" id="listAddMore">
        <span><b class="loading"></b>更多内容&hellip;&hellip;</span>
    </div>

</article><!-- /帖子列表-->
<!--内容 E-->

<!--底部 S-->
<footer class="footer">
    <div class="back"><a href="javascript:history.back(-1);"><b></b>返回</a></div>
    <div class="kdnet-pc"><a href="../club.kdnet.net/list.asp@boardid=1&sourcemoblie=m">电脑版</a></div>
    <div class="suggest"><a href="feedback.php">意见反馈</a></div>
    <div class="gotop">	<a href="javascript:void(0);" rel="#gotop"><b></b></a></div>
</footer>
<!--悬停广告-->
<!--<div class="fixAd">
    <a href="http://bdzy.kdnet.net/" target="_blank"><img src="ad/jixiang.jpg"></a><b class="ClosefixAd"></b>
</div>-->
<!--悬停广告 E-->

<!--<script type="text/javascript">
$(window).load(function(){
	var fixAdH = $('.fixAd').outerHeight();
	//alert(fixAdH);
	$('.footer').css({paddingBottom:fixAdH});
	$('.ClosefixAd').click(function(){
		$(this).parent(".fixAd").hide();
		$('.footer').css({paddingBottom:"0px"});
	});
});
</script>-->



</body>
</html>
