<!DOCTYPE HTML>
<html>
<head>
    <meta charset="gb2312">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" name="viewport"/>
    <meta name="author" content="法律文章">
    <meta name="keywords" content="法律文章,法律文章">
    <meta name="description" content="法律文章">
    <meta name="copyright" content="法律文章" />
    <title>法律文章</title>

    <link rel="icon" href="../www.kdnet.net/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="../www.kdnet.net/favicon.ico" type="image/x-icon" />
    <link rel="bookmark" href="../www.kdnet.net/favicon.ico" type="image/x-icon" />

    <link href="/law/css/base.css" rel="stylesheet" type="text/css" /><!--公用样式-->
    <link href="/law/css/kdclub.css" rel="stylesheet" type="text/css" /><!--触屏版样式-->

    <script type="text/javascript" src="/law/js/jquery.min.js"></script><!--jquery.min-->
    <script type="text/javascript" language="javascript" src="/law/js/jquery.cookie.js"></script> <!-- jquery.cookie.js -->
    <script type="text/javascript" src="/law/js/common.js"></script><!--common-->

    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>

<body id="gotop">
<header class="header">

    <div class="header-main">
        <h1 class="nav-top-title title-2"><a href="javascript:history.back(-1);"><b class="icon-back"></b></a></h1>
        <a href="index.php"><b class="logo lf ml20"></b></a>
        <div class="reply-num"><a href="reply_list.php@id=10070153&boardid=1&announceid=35606755&page=1&pagetype=n"><b class="icon-nav-reply-left"></b><span class="num-all">0跟帖</span><b class="icon-nav-reply-right"></b></a></div>
        <!--未登录-->
        <!--<div class="login-box"><a href="#">登录</a></div>-->
        <!--已登录-->
        <!--未登录-->
        <div class="login-box"><a href="login.php">回复</a></div>
    </div>
</header><!-- /.header-->
<div class="no-header"></div>

<article>

    <article class="content-main">
        <section>
            <h1 class="cont-title">{{$article->att_k_title}}</h1>
            <p class="cont-user"><span class="c-4d7399 mr5">{{$article->k_name}}</span>
                <!--<b class="icon18 icon-star"></b>
                <b class="icon18 icon-vip"></b>
                <b class="icon18 icon-level"></b>
                -->
                <span class="f14px ml5 c-aaaeb3">{{$article->ctime}}</span></p>

            <div class="setting-box msg_caption clearfix">
                <h2 class="lf">发布于：<a href="list.php@boardid=1">管理员先生</a></h2>
                <span class="bigger"><b class="icon18 icon-big-word"></b>大字</span>
                <span class="smaller"><b class="icon18 icon-small-word"></b>小字</span>
            </div>
        </section>
        <div style="text-align:center;">
            <img src="{{$article->a_img}}" alt="">
        </div>
        <section class="cont post">
            {{$article->article_content}}
        </section>
        <div class="contAppDown appUrl"><a href="../3g.kdnet.net/app.php@type=t8" target="_blank"></a></div>

        <div class="Share-box">
            <div class="fuc" id="shareFuc"><b>分享到:</b></div>
            <div class="toolBar" id="shareToolBar">
                <div class="toolB">
                    <a href="javascript:void(0)" onClick="postToWb('sina', '1',  '10070153');"  title="分享到新浪微博" class="sns"><i class="icon-sina"></i></a>
                    <a href="javascript:void(0)" onClick="postToWb('tx', '1',  '10070153');" title="分享到腾讯微博"  class="sns"><i class="icon-qq"></i></a>
                </div>
            </div>
        </div>

        <section class="look">
            <span class="look-num">7人看过</span>
            <div class="good-main">

                <a class="praise" id="35606755" title=""  onclick='cuding(this);'>0+</a>
            </div>
        </section>

        <!--联盟广告-->
        <div class="mt15 mb15">
            <script type="text/javascript">
                /*3G内容页（横幅2）20:3，创建于2014-2-12*/
                var cpro_id = "u1467977";
            </script>
            <script src="../cpro.baidustatic.com/cpro/ui/cm.js" type="text/javascript"></script>
        </div>

    </article><!-- /.content-main-->

    <article>
        <section class="replyList-main">
            <h2 class="reply-title">精彩回复<b class="trans-title trans-orange"></b></h2>
            <ul class="replyList">
            </ul>
        </section><!-- /.replyList-main -->
        <section class="more-reply-main">
            <a href="reply_list.php@id=10070153&boardid=1&announceid=35606755&page=1&pagetype=n"><div class="more-reply f16px c-7489a6">查看全部 0 条回复</div></a>
        </section>

    </article><!-- / 回复 -->

</article><!-- /.font-size -->

<!--底部 S-->
<footer class="footer">
    <div class="back"><a href="javascript:history.back(-1);"><b></b>返回</a></div>
    <div class="kdnet-pc"><a href="../club.kdnet.net/dispbbs.asp@id=10070153&boardid=1&sourcemoblie=m">电脑版</a></div>
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

<!--联盟-->
<script type="text/javascript">
    /*3G凯迪全站底部悬浮20:3，创建于2014-2-14*/
    var cpro_id = "u1468957";
</script>
<script src="../cpro.baidustatic.com/cpro/ui/cm.js" type="text/javascript"></script><!--底部 E-->
<script type="text/javascript">

    function hftip()
    {
        javascrip:alert("没有回复权限！");
        return;
    }
    //点击赞一个添加样式
    var saction='add';
    function cuding(obj){
        var userid=0;
        if(userid<=0)
        {
            window.location.href="login.php";
            return;
        }
        if(obj.title!="")
        {
            saction='cancel';
        }
        else
        {
            saction='add';
        }
        var announceid=obj.id;
        //http://3g.kdnet.net/phone/ding_m.php?topicid=8653890&announceid=11409598&action=add&username=cjrcjr668&password=49ba59abbe56e057
        var data = { 'ajaxtype': 'bssding', 'topicid': '10070153', 'announceid': ''+announceid+'', 'action': ''+saction+'', 'userid': '0' };
        $.getJSON("http://3g.kdnet.net/touch/ajax.php?jsoncallback=?",
                data,
                function (json) {
                    try
                    {
                        if(json.state==1)
                        {
                            if(obj.title!="")
                            {
                                obj.title="";
                                var dingcount=parseInt(obj.innerHTML);
                                if(dingcount>0)
                                {
                                    dingcount=dingcount-1;
                                }
                                obj.innerHTML=dingcount;
                                $(obj).removeClass("icon-good");
                            }
                            else
                            {
                                obj.title="1";
                                var dingcount=parseInt(obj.innerHTML);
                                dingcount=dingcount+1;
                                obj.innerHTML=dingcount;
                                $(obj).addClass("icon-good");
                            }
                        }
                    }
                    catch(e)
                    {
                    }
                }
        );
    }


    $(function() {
        //字体放大/缩小
        $(".msg_caption span").click(function(){
            var thisEle = $(".post").css("font-size");
            var textFontSize = parseFloat(thisEle , 10);
            var unit = thisEle.slice(-2); //获取单位
            var cName = $(this).attr("class");
            if(cName == "bigger"){
                textFontSize += 2;
            }else if(cName == "smaller"){
                textFontSize -= 2;
            }
            $(".post").css("font-size",  textFontSize + unit );
            $.cookie('fontSize', $(".post").css("font-size"), {expires: 365, path: 'default.htm'});//新建一个cookie
        });
        var fontSize=$.cookie("fontSize");
        if (fontSize) {//假如cookie值存在，直接设置post的字体大小
            $(".post").css("font-size",fontSize);
        };


        //判断页面楼层引用
        var addHideTips = function(){
            var qnum = 5;
            var qnummax = 10;
            $('.reply-box').each(function(index){
                $(this).attr('id', 10000 + index);
                var qbox = $(this).find('.quote-cont-box');
                if(qbox.length >= qnum && qbox.length <= qnummax){
                    qbox.eq(1).addClass('quote-hide');
                    qbox.eq((qbox.length-1)).addClass('quote-last').parent().append('<p class="hide-tips" onClick="showQuoteCon('+$(this).attr('id')+')">已经隐藏重复盖楼，点击展开</p>');
                }
                else if(qbox.length >= qnummax){
                    qbox.eq(1).addClass('quote-hide');
                    qbox.eq(10).hide();
                    qbox.eq(9).addClass('quote-last').parent().append('<p class="hide-tips" onClick="showQuoteCon('+$(this).attr('id')+')">已经隐藏重复盖楼，点击展开</p>');
                };
            });
        }();

    });

    //展开引用楼层
    function showQuoteCon(qid){
        $('#'+qid+'').find(".quote-cont-box").removeClass("quote-hide");
        $('#'+qid+'').find(".hide-tips").hide();
    };
</script>
<script src="../tracking.cat898.com/about/log.js"></script>
<script>
    var tracking_starttime = "1400417374";
    tracking_log();
</script>

</body>
</html>
