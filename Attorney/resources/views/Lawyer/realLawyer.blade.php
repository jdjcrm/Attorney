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
    <meta name="keywords" content="免费法律咨询,法律在线咨询,律师在线解答">
    <meta name="description"
          content="华律网免费法律在线咨询中心聚集了全国各地的优秀律师，24小时为您提供法律在线咨询服务，还可以通过法律咨询热线或者律师在线解答qq解决你的法律问题。">
    <title>律师</title>
    <link rel="stylesheet" type="text/css" href="{{url('/062807/css/index_d1142d5.css')}}"/>

</head>
<body class="bg-f5 body-box">
<header class="mui-bar mui-bar-nav nav-gradient nav-absolute"><a href="/"
                                                                 class="mui-pull-left mui-pull-home">首页</a>

    <h1 class="mui-title">问律师</h1><span class="mui-pull-nav"><a
                href="javascript:void(0)/question/add.aspx?t_code=M_HEADER_NAVTOP"
                class="mui-pull-left mui-pull-login">提问</a> <i
                class="icon-hualv icon-unie917 mui-pull-left"></i></span> <i
            class="icon-hualv icon-closed"></i></header>
<div class="hd-mn-list">
    <ul class="hd-mn-item clearfix">
        <li class="mn-list-cr"><a href="javascript:void(0)/question/"><p><i
                            class="icon-hualv icon-unie929 mn-be"></i></p>问律师</a></li>
        <li class="mn-list-cr"><a href="javascript:void(0)/findlawyer/"><p><i
                            class="icon-hualv icon-unie926 mn-gn"></i></p>找律师</a></li>
        <li class="mn-list-cr"><a href="javascript:void(0)/laws/"><p><i
                            class="icon-hualv icon-unie927 mn-vt"></i></p>常识</a></li>
        <li class="mn-list-cr"><a href="javascript:void(0)/tel/"><p><i
                            class="icon-hualv icon-unie90b mn-red"></i></p>电话咨询</a></li>
        <li class="mn-list-cn"><a href="javascript:void(0)/case/"><p><i
                            class="icon-hualv icon-unie922"></i></p>一对一</a></li>
        <li class="mn-list-cn"><a href="javascript:void(0)/entrust/"><p><i
                            class="icon-hualv icon-unie907"></i></p>案件委托</a></li>
        <li class="mn-list-cn"><a href="javascript:void(0)/fangan/"><p><i
                            class="icon-hualv icon-unie90f"></i></p>解决方案</a></li>
        <li class="mn-list-cn"><a href="javascript:void(0)/talk/"><p><i
                            class="icon-hualv icon-unie910"></i></p>律师访谈</a></li>
        <li class="mn-list-cn"><a href="javascript:void(0)/lawyeronline/"><p><i
                            class="icon-hualv icon-unie923"></i></p>在线律师</a></li>
        <li class="mn-list-cn"><a href="javascript:void(0)/aixin/"><p><i
                            class="icon-hualv icon-unie906"></i></p>爱心律师</a></li>
        <li class="mn-list-cn"><a href="javascript:void(0)/zuiming/"><p><i
                            class="icon-hualv icon-unie92a"></i></p>罪名库</a></li>
        <li class="mn-list-cn"><a href="javascript:void(0)/lawyeroffice/"><p><i
                            class="icon-hualv icon-unie913"></i></p>律所</a></li>
        <li class="mn-list-cn"><a href="javascript:void(0)/topic2010/"><p><i
                            class="icon-hualv icon-unie928"></i></p>专题</a></li>
        <li class="mn-list-cn"><a href="javascript:void(0)/topics/"><p><i
                            class="icon-hualv icon-unie909"></i></p>百科</a></li>
        <li class="mn-list-cn"><a href="javascript:void(0)/goodcase/"><p><i
                            class="icon-hualv icon-unie908"></i></p>案例</a></li>
        <li class="mn-list-cn"><a href="javascript:void(0)/contractmodel/"><p><i
                            class="icon-hualv icon-unie90d"></i></p>合同范本</a></li>
        <li class="mn-list-cn"><a href="javascript:void(0)/tiaoli/"><p><i
                            class="icon-hualv icon-unie91b"></i></p>条例</a></li>
        <li class="mn-list-cn"><a href="javascript:void(0)/lawwrit/"><p><i
                            class="icon-hualv icon-unie91c"></i></p>文书</a></li>
        <li class="mn-list-cn"><a href="javascript:void(0)/lawarticle/"><p><i
                            class="icon-hualv icon-unie911"></i></p>论文</a></li>
        <li class="mn-list-cn"><a href="javascript:void(0)/domainblog/"><p><i
                            class="icon-hualv icon-unie912"></i></p>律师随笔</a></li>
        <li class="mn-list-cn"><a href="javascript:void(0)/news/"><p><i
                            class="icon-hualv icon-unie91f"></i></p>新闻</a></li>
        <li class="mn-list-cn"><a href="javascript:void(0)/special/"><p><i
                            class="icon-hualv icon-unie90e"></i></p>聚焦</a></li>
    </ul>
</div>
<div class="mui-content bg-none">
    <div class="banner-bar">
        <div class="ban-abs">
            <div class="questdlg-bar questdlg-bar-show">
                <form  action="/question"
                      method="post">
                    @csrf
                    <textarea class="wen-text" name="content" placeholder="请在此输入..." maxlength="300">

                    </textarea>
                    <input type="hidden" name="openid" value="{{ $openid }}">
                    <div class="ban-search"><p class="tl">详实输入案情经过，获得更精准的解答</p>
                        <button type="submit"  class="mui-btn btn-gn">问律师</button>
                    </div>
                </form>
            </div>
            <p class="f12 lh12 s-cfff mt15">今日咨询：6237条，律师解答：13443次</p></div>
    </div>
    <div class="new-hftw-bar">
        <div id="slider" class="mui-slider">
            <div id="sliderSegmentedControl"
                 class="mui-slider-indicator mui-segmented-control mui-segmented-control-inverted bg-fff">
                <a class="mui-control-item mui-active"
                   href="javascript:void(0)#item1mobile">最新回复</a> <a class="mui-control-item"
                                                                     href="javascript:void(0)#item2mobile">最新提问</a>
            </div>
            <div id="sliderGroup" class="mui-slider-group">
                <div id="item1mobile" class="mui-control-content bg-fff mui-active">
                    <ul class="lawyer-card lawyer-card2">
                        @foreach($pro_data as $k=>$v)
                        <li>
                            <button type="button" class="mui-btn btn-sl btn-gn-line advice-me"
                                    data-tel="{{ $v->openid_pro->tel }}" data-name="{{ $v->openid_pro->true_name }}" data-strtime="00:00:00"
                                    data-endtime="23:59:59" data-isservicecity="1"
                                    data-guid="37737462-b6c7-4de0-8a8e-c927f7d41a86"
                                    data-photo="{{ url($v->openid_pro->img)}}"
                                    data-helpcount="375" data-location="浙江-湖州"
                                    data-responsetime="1小时内"
                                    data-url="http://m.66law.cn/lawyer/270671d6e6470/"
                                    data-isvip="1">咨询我
                            </button>
                            <a href="javascript:void(0)"
                               class="lr-photo"><img
                                        src="{{ url($v->openid_pro->img)}}"
                                        class="img-block"> <i class="icon-hualv icon-vip"></i></a>

                            <p class="lr-name f12"><a href="article.htm" class="fl mr10">{{ $v->openid_pro->true_name }} </a>
                            </p>
                            <time class="block lh20 f12 s-c999 mt5">于5秒前回复</time>
                            <p class="lr-infor mt5"><a
                                        href="javascript:void(0)/question/7007192.aspx">{{ $v->problem }}</a>
                            </p>

                            <div class="zhuiwen-huifu"><p><span>来自问题：</span><a
                                            href="javascript:void(0)/question/7007192.aspx"
                                            class="s-cbbb">{{ $v->problem }}</a>
                                </p></div>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="pad-tb20-lr15 pb0"><a href="javascript:void(0)/question/list.aspx"
                                      class="mui-btn mui-btn-block btn-gn mb0">全部在线咨询</a></div>
</div>
<div id="valholder" class="none"><input name="citypinyin" value="wuhan" type="hidden"></div>
<div class="popup-bottom pop-ask">
    <div class="pop-photo"><a href="javascript:void(0)javascript:;" class="lr-photo"><img
                    src="http://cdn.66law.cn/m-mainweb/ui/images/photo_e2ac1ee.jpg" alt="xx律师头像"
                    class="img-block"> <i class="icon-hualv icon-vip"></i></a>

        <p class="f12 s-c333 fn-title">你正在咨询陈远国律师</p>
        <dl class="pop-info-list f10">
            <dd><span class="s-cf60 fn-time">1天内</span>响应</dd>
            <dd class="tc">近期帮助 <span class="s-cf60 fn-count">2298</span> 人</dd>
            <dd class="tr fn-local">四川 成都</dd>
        </dl>
    </div>
    <p class="btn-r2 clearfix mt15"><a href="javascript:void(0)javascript:void(0);"
                                       class="mui-btn btn-gn fn-tel"><i class="icon-hualv mr10">
                &#xe90a;</i>电话咨询</a> <a href="javascript:void(0)javascript:void(0);"
                                        class="mui-btn btn-gn fn-case"><i class="icon-hualv mr10">
                &#xe924;</i>在线咨询</a></p></div>
<script type="text/javascript" src="{{url('/062807/js/index_f5d6ef1.js')}}"></script>

<script type="text/javascript">require(["js/question/page.index"]);</script>


</body>
</html>