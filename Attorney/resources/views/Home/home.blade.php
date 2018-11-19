<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{URL::asset('./imgs/images/apple-touch-icon.png')}}" />
    <link rel="apple-touch-startup-image" href="{{URL::asset('./imgs/images/apple-touch-startup-image.png')}}" />
    <meta name="author" content="FamousThemes" />
    <meta name="description" content="My Mobile Page Version 3 Template" />
    <meta name="keywords" content="mobile templates, mobile wordpress themes, mobile themes, my mobile page, premium css templates, premium wordpress themes" />
    <title>贾东杰、贾海洋、冯艳云、刘增杰项目开发小组</title>

    <!-- Main CSS file -->
    <link rel="stylesheet" href="{{URL::asset('./imgs/style.css')}}"  type="text/css" media="screen" />
    <!-- jQuery file -->
    <script src="{{URL::asset('./imgs/js/jquery.min.js')}}" ></script>
    <!-- FlexSlider -->
    <script src="{{URL::asset('./imgs/js/jquery.flexslider.js')}}" ></script>
    <script type="text/javascript">
        var $ = jQuery.noConflict();
        $(window).load(function() {
            $('.icons_nav').flexslider({
                animation: "slide",
                directionNav: true, <!--Set this to false if you want to remove the arrows navigation of the menu-->
                animationLoop: false,
                controlNav: false,
                slideshow: false,
                animationDuration: 300
            });
            $('.panels_slider').flexslider({
                animation: "slide",
                directionNav: false,
                controlNav: true,
                animationLoop: false,
                slideToStart: 1,
                animationDuration: 300,
                slideshow: false
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
    <!-- Hide on iphone top browser element | only on home page -->
    <script type="text/javascript">
        if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
            $(window).load(function() {
                $("body").removeClass("home");

                // Check to see if the window is running in app mode.
                // If it is not, then it is running in full screen mode
                if ( ("standalone" in window.navigator) && !window.navigator.standalone    ){
                    $("body").addClass("homeiphone_app");
                } else {
                    $("body").addClass("homeiphone_full");
                }
            });
        }
    </script>
</head>
<body class="home">
<div id="container">

    <div id="main_panels">
        <div class="panels_slider">
            <ul class="slides">
                <li>
                    <img src="{{URL::asset('/imgs/images/panel_2.jpg')}}"  alt="" title="" border="0" />
                </li>
                <li>
                    <img src="{{URL::asset('/imgs/images/panel_start.jpg')}}"  alt="" title="" border="0" />
                </li>
                <li>
                    <img src="{{URL::asset('/imgs/images/panel_1.jpg')}}"  alt="" title="" border="0" />
                </li>

            </ul>
        </div>
    </div>

    <div id="bottom_nav">
        <div class="icons_nav">
            <div class="paginated"> <!--Remove this DIV if you want to remove the pagination-->
                <ul class="slides">
                    <li>
                        <a href="about.html"  class="icon"><img src="{{URL::asset('/imgs/images/icons/icon_about.png')}}"  alt="" title="" border="0" /><span>个人中心</span></a>
                        <a href="services.html"  class="icon"><img src="{{URL::asset('/imgs/images/icons/icon_services.png')}}"  alt="" title="" border="0" /><span>找律师</span></a>
                        <a href="blog.html"  class="icon"><img src="{{URL::asset('/imgs/images/icons/icon_blog.png')}}"  alt="" title="" border="0" /><span>事实热点</span></a>
                        <a href="portfolio.html"  class="icon"><img src="{{URL::asset('/imgs/images/icons/icon_portfolio.png')}}"  alt="" title="" border="0" /><span>法律常识</span></a>
                    </li>
                    <li>
                        <a href="photos.html"  class="icon"><img src="{{URL::asset('/imgs/images/icons/icon_photos.png')}}"  alt="" title="" border="0" /><span>律师投稿</span></a>
                        {{--<a href="videos.html"  class="icon"><img src="{{URL::asset('/imgs/images/icons/icon_video.png')}}"  alt="" title="" border="0" /><span>管理员添加</span></a>--}}
                        {{--<a href="clients.html"  class="icon"><img src="{{URL::asset('/imgs/images/icons/icon_clients.png')}}"  alt="" title="" border="0" /><span>添加热点与删除</span></a>--}}
                        <a href="contact.html"  class="icon"><img src="{{URL::asset('/imgs/images/icons/icon_contact.png')}}"  alt="" title="" border="0" /><span>充值与提现</span></a>
                    </li>
                </ul>
            </div> <!--Remove this DIV if you want to remove the pagination-->
        </div>
    </div>

</div>
</body>
</html>