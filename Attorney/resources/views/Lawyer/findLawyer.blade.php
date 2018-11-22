<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="email=no">
    <meta name="format-detection" content="address=no;">
    <meta name="keywords" content="付新岭律师,朝阳区付新岭律师">
    <meta name="description"
          content="付新岭律师，执业于北京君途律师事务所。华律网付新岭律师信息页提供付新岭律师个人简介、联系方式、成功案例等，您还可以免费在线咨询或电话咨询付新岭律师。">
    <title>找律师</title>
    <link rel="stylesheet" type="text/css" href="{{url('062807/css/lawyerindex_35760a7.css')}}"/>

</head>
<body class="bg-f5 body-box pb145">
<header class="mui-bar mui-bar-nav nav-gradient nav-absolute"><a href="/" class="mui-pull-left mui-pull-home">首页</a>

    <h1 class="mui-title">律师主页</h1>
    <span class="mui-pull-nav">
        <a href="javascript:void(0)/selectLawyer?t_code=M_HEADER_NAVTOP" class="mui-pull-left mui-pull-login">提问</a>
        <i class="icon-hualv icon-unie917 mui-pull-left"></i>
    </span>
    <i class="icon-hualv icon-closed"></i>
</header>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="email=no">
    <meta name="format-detection" content="address=no;">
    <meta name="keywords" content="法律咨询,律师,律师在线咨询">
    <meta name="description"
          content="法律咨询就到华律网，这是一个最快捷的法律咨询网，为全国各地有法律咨询需求的公众提供免费律师在线咨询服务，法律常识浏览及全国律师和律师事务所查询，律师在线为您解决法律问题。">
    <title>找律师</title>
    <link rel="stylesheet" type="text/css" href="{{url('062807/css/index_2f3dc5b.css')}}"/>
    <script src="./js/jquery-3.2.1.min.js"></script>
</head>
<body class="body-box">

<div class="mui-content">
    <div class="banner-bar ban-index pr">
        <div class="ban-abs">
            <div class="ft-logo"><p><i class="icon-hualv icon-logo f30"></i> <i
                            class="icon-hualv icon-logo2 f50 mr5"></i></p>

                <p class="f14">hualv.com</p>

                <p class="f16 lh18 mt5 mb20">快速解决法律问题</p></div>
            <div class="questdlg-bar">
                <form id="fmPostCase" action="/question/add.aspx?t_code=M_HOME_TOP" method="post">
                    <textarea class="wen-text" name="content" placeholder="请在此输入..."
                              maxlength="300"></textarea>

                    <div class="ban-search"><p class="tl">详实输入案情经过，获得更精准的解答</p>
                        <button type="submit" class="mui-btn btn-gn">提问</button>
                    </div>
                </form>
            </div>
            <p class="f12 lh12 s-cfff mt10">今日咨询：6237条，律师解答：13443次</p></div>
    </div>
    <div class="slider-menu-bar">
        <div id="slider" class="mui-slider hd-mn-list-show bg-fff box-shadow">

            <div class="mui-slider-indicator">
                <div class="mui-indicator mui-active"></div>
                <div class="mui-indicator"></div>
                <div class="mui-indicator"></div>
            </div>
        </div>
    </div>

    <div id="home_tuijian_lawyer" class="bg-fff box-shadow mt10">
        <nav class="nav-tit-h74 tc">推荐律师</nav>
        <ul class="lawyer-card lawyer-card-common mt15">
            @foreach($user_data  as $k=>$v)
            <li>
                <button type="button" class="mui-btn btn-sl btn-gn-line advice-me"
                        data-tel="{{ $v->tel }}"
                        data-name="{{ $v->true_name }}"
                        data-strtime="09:00:00"
                        data-endtime="21:59:59"
                        data-isservicecity="1"
                        data-guid="{{ $v->openid }}"
                        data-photo="{{ $v->img }}"
                        data-helpcount="9"
                        data-location="湖北-武汉"
                        data-responsetime="一天内"
                        data-url="11"
                        data-isvip="1">咨询我
                </button>
                <a href="javascript:void(0)"
                   class="lr-photo"><img src="{{ $v->img }}" class="img-block"> <i class="icon-hualv icon-vip"></i> </a>

                <p class="lr-name"><a
                            href="javascript:void(0)"
                            class="fl">{{ $v->true_name }}</a></p><a
                        href="javascript:void(0)"><p
                            class="lr-infor mt10"> {{ $v->signature }}</p></a>

                <p class="lr-help mt10 clearfix"><span class="fl"><i
                                class="icon-hualv icon-310"></i>已帮助<em
                                class="s-gn">4612</em>人</span> <span><i
                                class="icon-hualv icon-xj1 star-gn"></i>好评<em class="s-gn">55</em>条</span>
                </p></li>
            @endforeach
        </ul>
       </div>


</div>

<div class="popup-bottom pop-ask">
    <div class="pop-photo">
        <a href="javascript:void(0)javascript:;" class="lr-photo">
            <img src="" alt="xx律师头像" class="img-block">
            <i class="icon-hualv icon-vip"></i>
        </a>
        <p class="f12 s-c333 fn-title">你正在咨询{{ $v->true_name }}律师</p>
        <dl class="pop-info-list f10">
            <dd><span class="s-cf60 fn-time">1天内</span>响应</dd>
            <dd class="tc">近期帮助 <span class="s-cf60 fn-count">2298</span> 人</dd>
            <dd class="tr fn-local">四川 成都</dd>
        </dl>
    </div>
    <p class="btn-r2 clearfix mt15">
        <a href="javascript:void(0)" class="mui-btn btn-gn fn-tel"><i class="icon-hualv mr10">&#xe90a;</i>电话咨询</a>
        <a href="javascript:void(0)"  class="mui-btn btn-gn fn-case"><i class="icon-hualv mr10">&#xe924;</i>在线咨询</a></p>
</div>

<script type="text/javascript" src="{{url('062807/js/index_85e4bb7.js')}}"></script>
<script type="text/javascript">require(["js/page.index"]);</script>


</body>
</html>
<script>
    $("#aaa").click(function(){
        $(".popup-bottom pop-ask pop-bottom-show")
    })
</script>



<script type="text/javascript" src="{{url('062807/js/lawyerindex_e24fb43.js')}}"></script>

</body>
</html>