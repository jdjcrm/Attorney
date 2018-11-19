<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link rel="apple-touch-icon" href="{{URL::asset('./age/images/apple-touch-icon.png')}}" />
    <link rel="apple-touch-startup-image" href="{{URL::asset('./age/images/apple-touch-startup-image-320x460.png')}}" />
    <meta name="author" content="FamousThemes" />
    <meta name="description" content="GoMobile - A next generation web app theme" />
    <meta name="keywords" content="mobile web app, mobile template, mobile design, mobile app design, mobile app theme, mobile wordpress theme, my mobile app" />
    <link type="text/css" rel="stylesheet" href="{{URL::asset('./age/css/style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('./age/colors/wedding/wedding.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('./age/css/idangerous.swiper.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('./age/css/swipebox.css')}}">
    <link href='../../../fonts.googleapis.com/css@family=Lato_3A300' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="header">
    <div class="gohome radius20"><a href="#"><img src="{{URL::asset('./age/images/icons/home.png')}}" alt="" title="" /></a></div>
    <div class="gomenu radius20"><a href="#" onclick="swiperParent.swipeTo(10);"><img src="{{URL::asset('./age/images/icons/contact.png')}}" alt="" title="" /></a></div>
</div>
<div class="swiper-container swiper-parent">
    <div class="swiper-wrapper">

        <!--Menu page-->
        <div class="swiper-slide sliderbg_menu">
            <div class="swiper-container swiper-nested">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="logo"><a href="#"><img src="{{URL::asset('./age/colors/wedding/images/logo.png')}}" alt="" title="" border="0" /><span>乐柠 &amp; 贾东杰</span></a></div>
                            <div class="menu">
                                <ul>
                                    <li><a href="#" onclick="swiperParent.swipeTo(1);"><img src="{{URL::asset('./age/images/icons/about.png')}}" alt="" title="" /><span>个人中心</span></a></li>
                                    <li><a href="#" onclick="swiperParent.swipeTo(2);"><img src="{{URL::asset('./age/images/icons/tools.png')}}" alt="" title="" /><span>添加热点</span></a></li>
                                    <li><a href="#" onclick="swiperParent.swipeTo(3);"><img src="{{URL::asset('./age/images/icons/blog.png')}}" alt="" title="" /><span>热点展示</span></a></li>
                                    <li><a href="#" onclick="swiperParent.swipeTo(5);"><img src="{{URL::asset('./age/images/icons/docs.png')}}" alt="" title="" /><span>添加法律常识</span></a></li>
                                    <li><a href="#" onclick="swiperParent.swipeTo(6);"><img src="{{URL::asset('./age/images/icons/photos.png')}}" alt="" title="" /><span>展示法律常识</span></a></li>
                                    <li><a href="#" onclick="swiperParent.swipeTo(7);"><img src="{{URL::asset('./age/images/icons/videos.png')}}" alt="" title="" /><span>事实热点</span></a></li>
                                    <li><a href="#" onclick="swiperParent.swipeTo(8);"><img src="{{URL::asset('./age/images/icons/clients.png')}}" alt="" title="" /><span>管理员添加</span></a></li>
                                    <li><a href="#" onclick="swiperParent.swipeTo(9);"><img src="{{URL::asset('./age/images/icons/twitter.png')}}" alt="" title="" /><span>Twitter</span></a></li>
                                    <li><a href="#" onclick="swiperParent.swipeTo(10);"><img src="{{URL::asset('./age/images/icons/contact.png')}}" alt="" title="" /><span>Contact</span></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-scrollbar"></div>
            </div>
        </div>

        <!--Page 1 content-->
        <div class="swiper-slide sliderbg">
            <div class="swiper-container swiper-nested1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="pages_container">
                                <h2 class="page_title">About Us</h2>
                                {{--<div class="image_single radius4"><img src="{{URL::asset('./age/images/page_photo.jpg')}}" alt="" title="" border="0" /></div>--}}
                                <div class="image_caption red red_borderbottom radius4">个人中心</div>
                                <h3>Imagination is our power</h3>
                                <blockquote>Design is the fundamental soul of a human-made creation that ends up expressing itself in successive outer layers of the product or service. <span class="quote_author">-Steve Jobs</span></blockquote>

                                <h3>Just a simple listing</h3>
                                <ul class="listing">
                                    <li>Proin dignissim risus ut quam aliquam dignissim.</li>
                                    <li>Nunc erat eros, cursus et commodo vitae, pulvinar ac libero.</li>
                                    <li>In erat elit, bibendum vitae commodo vitae, bibendum non justo.</li>
                                </ul>
                                <h3>A more detailed listing</h3>
                                <ul class="listing_detailed">
                                    <li><a href="#">Proin dignissim risus</a></li>
                                    <li><a href="#">Nunc erat eros, cursus et</a></li>
                                    <li><a href="#">In erat elit, bibendum</a></li>
                                </ul>

                                <h2>Toggle styles</h2>

                                <div class="toogle_wrap radius8">
                                    <div class="trigger"><a href="#">toggle with text</a></div>

                                    <div class="toggle_container">
                                        <p>
                                            Lorem ipsum <a href="#">dolor sit amet</a>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>
                                    </div>
                                </div>

                                <div class="toogle_wrap radius8">
                                    <div class="trigger"><a href="#">toggle with lists</a></div>

                                    <div class="toggle_container">
                                        <ul class="listing_detailed">
                                            <li>Consectetur adipisicing elit sed</li>
                                            <li>Sed do eiusmod tempor incididunt</li>
                                            <li>Ut enim ad minim veniam</li>
                                        </ul>
                                    </div>
                                </div>

                                <h2>Some flexible <span class="tag">tabs</span></h2>

                                <ul id="tabsmenu" class="tabsmenu">
                                    <li class="active"><a href="#tab1">Text tab</a></li>
                                    <li><a href="#tab2">Listing tab</a></li>
                                    <li><a href="#tab3">Quote tab</a></li>
                                </ul>
                                <div id="tab1" class="tabcontent">
                                    <h4>Simple text title</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
                                <div id="tab2" class="tabcontent">
                                    <h4>Listing title</h4>
                                    <ul class="listing">
                                        <li>Consectetur adipisicing elit sed</li>
                                        <li>Sed do eiusmod tempor incididunt</li>
                                        <li>Ut enim ad minim veniam</li>
                                    </ul>
                                </div>

                                <div id="tab3" class="tabcontent">
                                    <h4>Quote title</h4>
                                    <blockquote>Design is the fundamental soul of a human-made creation that ends up expressing itself in successive outer layers of the product or service. <span class="quote_author">-Steve Jobs</span></blockquote>
                                </div>

                                <h2>Some buttons styles</h2>
                                <a href="#" class="button_12 green green_borderbottom radius4">Button 1/2</a>  <a href="#" class="button_12 blue blue_borderbottom radius4">Button 1/2</a>
                                <a href="#" class="button_12 red red_borderbottom radius4">Button 1/2</a>  <a href="#" class="button_12 orange orange_borderbottom radius4">Button 1/2</a>
                                <a href="#" class="button_12 black black_borderbottom radius4">Button 1/2</a>  <a href="#" class="button_12 gray gray_borderbottom radius4">Button 1/2</a>
                                <a href="#" class="button_11 bluegreen bluegreen_borderbottom radius4">Full width button</a>

                                <div class="clearfix"></div>
                                <div class="scrolltop radius20"><a href="#" class="scrolltop1"><img src="{{URL::asset('./age/images/icons/top.png')}}" alt="Go on top" title="Go on top" /></a></div>
                            </div>
                            <!--End of page container-->
                        </div>
                    </div>
                </div>
                <div class="swiper-scrollbar1"></div>
            </div>
        </div>

        <!--Page 2 content-->
        <div class="swiper-slide sliderbg">
            <div class="swiper-container swiper-nested2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="pages_container">
                                <h2 class="page_title">添加热点</h2>
                                <blockquote>Design is the fundamental soul of a human-made creation that ends up expressing itself in successive outer layers of the product or service. <span class="quote_author">添加热点</span></blockquote>

                                <h3>Our main services</h3>
                                <div class="service_box">
                                    <div class="services_icon"><img src="{{URL::asset('./age/images/icons/services.png')}}" alt="" title="" /></div>
                                    <div class="service_content">
                                        <h4>Web development</h4>
                                        <p>Lorem ipsum dolor sit <a href="#">amet consectetur</a> adipisicing elit, <strong>sed do eiusmod</strong> tempor</p>
                                    </div>
                                </div>
                                <div class="service_box">
                                    <div class="services_icon"><img src="{{URL::asset('./age/images/icons/layout.png')}}" alt="" title="" /></div>
                                    <div class="service_content">
                                        <h4>Layout design</h4>
                                        <p>Cras <strong>vestibulum</strong> <a href="#">justo eget lorem</a> semper ac facilisis nulla porta</p>
                                    </div>
                                </div>
                                <div class="service_box">
                                    <div class="services_icon"><img src="{{URL::asset('./age/images/icons/pencil.png')}}" alt="" title="" /></div>
                                    <div class="service_content">
                                        <h4>Drawing</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                    </div>
                                </div>
                                <div class="service_box">
                                    <div class="services_icon"><img src="{{URL::asset('./age/images/icons/code.png')}}" alt="" title="" /></div>
                                    <div class="service_content">
                                        <h4>Programming</h4>
                                        <p>Lorem ipsum dolor sit amet, <a href="#"><strong>consectetur adipisicing elit</strong></a>, sed do eiusmod tempor</p>
                                    </div>
                                </div>
                                <div class="service_box">
                                    <div class="services_icon"><img src="{{URL::asset('./age/images/icons/travel.png')}}" alt="" title="" /></div>
                                    <div class="service_content">
                                        <h4>Custom work</h4>
                                        <p>Lorem ipsum dolor sit <a href="#">amet consectetur</a> adipisicing elit, <strong>sed do eiusmod</strong> tempor</p>
                                    </div>
                                </div>
                                <div class="service_box">
                                    <div class="services_icon"><img src="{{URL::asset('./age/images/icons/security.png')}}" alt="" title="" /></div>
                                    <div class="service_content">
                                        <h4>Security</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                    </div>
                                </div>

                                <h3>Prices</h3>

                                <ul class="responsive_table">
                                    <li class="table_row">
                                        <div class="table_section_small">Nr</div>
                                        <div class="table_section">Service</div>
                                        <div class="table_section">Price</div>
                                    </li>
                                    <li class="table_row">
                                        <div class="table_section_small">01</div>
                                        <div class="table_section">Web development</div>
                                        <div class="table_section">1200$</div>
                                    </li>
                                    <li class="table_row">
                                        <div class="table_section_small">02</div>
                                        <div class="table_section">Drawing</div>
                                        <div class="table_section">600$</div>
                                    </li>
                                    <li class="table_row">
                                        <div class="table_section_small">03</div>
                                        <div class="table_section">Custom work</div>
                                        <div class="table_section">500$</div>
                                    </li>
                                    <li class="table_row">
                                        <div class="table_section_small">04</div>
                                        <div class="table_section">Layout design</div>
                                        <div class="table_section">800$</div>
                                    </li>
                                    <li class="table_row">
                                        <div class="table_section_small">05</div>
                                        <div class="table_section">Security</div>
                                        <div class="table_section">650$</div>
                                    </li>
                                </ul>

                                <div class="clearfix"></div>
                                <div class="scrolltop radius20"><a href="#" class="scrolltop2"><img src="{{URL::asset('./age/images/icons/top.png')}}" alt="Go on top" title="Go on top" /></a></div>
                            </div>
                            <!--End of page container-->
                        </div>
                    </div>
                </div>
                <div class="swiper-scrollbar2"></div>
            </div>
        </div>

        <!--Page 3 content-->
        <div class="swiper-slide sliderbg">
            <div class="swiper-container swiper-nested3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="pages_container blogheight">
                                <h2 class="page_title">热点展示</h2>
                                <div class="toogle_wrap_blog radius8">
                                    <div class="trigger_blog"><a href="#">blog categories</a></div>
                                    <div class="toggle_container_blog">
                                        <ul class="listing_detailed">
                                            <li><a href="#">webdesign work</a></li>
                                            <li><a href="#">painted illustrations</a></li>
                                            <li><a href="#">programming and javascript</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="posts">
                                    <li class="post">
                                        <a href="#" class="post_more"></a>
                                        <div class="post_right_reveal">
                                            <h4><a href="#" onclick="swiperParent.swipeTo(4);">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</a></h4>
                                        </div>
                                        <div class="post_right_unreveal">
                                            Posted in <a href="#">blog category</a>
                                            <span class="post_comments">25 Comments</span>
                                            <a href="#" class="post_readmore" onclick="swiperParent.swipeTo(4);">read more</a>
                                        </div>

                                        <div class="post_left">
                                            <span class="day">23</span>
                                            <span class="month">june</span>
                                        </div>

                                    </li>
                                    <li class="post">
                                        <a href="#" class="post_more"></a>
                                        <div class="post_right_reveal">
                                            <h4><a href="#" onclick="swiperParent.swipeTo(4);">Cras vestibulum justo eget lorem semper ac facilisis nulla porta...</a></h4>
                                        </div>
                                        <div class="post_right_unreveal">
                                            Posted in <a href="#">programming</a>
                                            <span class="post_comments">18 Comments</span>
                                            <a href="#" class="post_readmore" onclick="swiperParent.swipeTo(4);">read more</a>
                                        </div>

                                        <div class="post_left">
                                            <span class="day">18</span>
                                            <span class="month">sept</span>
                                        </div>
                                    </li>
                                    <li class="post">
                                        <a href="#" class="post_more"></a>
                                        <div class="post_right_reveal">
                                            <h4><a href="#" onclick="swiperParent.swipeTo(4);">Nam velit sapien, eleifend in tempus volutpat, posuere ullamcorper augue...</a></h4>
                                        </div>
                                        <div class="post_right_unreveal">
                                            Posted in <a href="#">blog category</a>
                                            <span class="post_comments">11 Comments</span>
                                            <a href="#" class="post_readmore" onclick="swiperParent.swipeTo(4);">read more</a>
                                        </div>

                                        <div class="post_left">
                                            <span class="day">09</span>
                                            <span class="month">dec</span>
                                        </div>

                                    </li>
                                    <li class="post">
                                        <a href="#" class="post_more"></a>
                                        <div class="post_right_reveal">
                                            <h4><a href="#" onclick="swiperParent.swipeTo(4);">Cras vestibulum justo eget lorem semper ac facilisis nulla porta...</a></h4>
                                        </div>
                                        <div class="post_right_unreveal">
                                            Posted in <a href="#">programming</a>
                                            <span class="post_comments">06 Comments</span>
                                            <a href="#" class="post_readmore" onclick="swiperParent.swipeTo(4);">read more</a>
                                        </div>

                                        <div class="post_left">
                                            <span class="day">12</span>
                                            <span class="month">mart</span>
                                        </div>
                                    </li>
                                    <li class="post">
                                        <a href="#" class="post_more"></a>
                                        <div class="post_right_reveal">
                                            <h4><a href="#" onclick="swiperParent.swipeTo(4);">Cras vestibulum justo eget lorem semper ac facilisis nulla porta...</a></h4>
                                        </div>
                                        <div class="post_right_unreveal">
                                            Posted in <a href="#">programming</a>
                                            <span class="post_comments">18 Comments</span>
                                            <a href="#" class="post_readmore" onclick="swiperParent.swipeTo(4);">read more</a>
                                        </div>

                                        <div class="post_left">
                                            <span class="day">18</span>
                                            <span class="month">sept</span>
                                        </div>
                                    </li>
                                    <li class="post">
                                        <a href="#" class="post_more"></a>
                                        <div class="post_right_reveal">
                                            <h4><a href="#" onclick="swiperParent.swipeTo(4);">Nam velit sapien, eleifend in tempus volutpat, posuere ullamcorper augue...</a></h4>
                                        </div>
                                        <div class="post_right_unreveal">
                                            Posted in <a href="#">blog category</a>
                                            <span class="post_comments">11 Comments</span>
                                            <a href="#" class="post_readmore" onclick="swiperParent.swipeTo(4);">read more</a>
                                        </div>

                                        <div class="post_left">
                                            <span class="day">09</span>
                                            <span class="month">dec</span>
                                        </div>

                                    </li>
                                    <li class="post">
                                        <a href="#" class="post_more"></a>
                                        <div class="post_right_reveal">
                                            <h4><a href="#" onclick="swiperParent.swipeTo(4);">Cras vestibulum justo eget lorem semper ac facilisis nulla porta...</a></h4>
                                        </div>
                                        <div class="post_right_unreveal">
                                            Posted in <a href="#">programming</a>
                                            <span class="post_comments">18 Comments</span>
                                            <a href="#" class="post_readmore" onclick="swiperParent.swipeTo(4);">read more</a>
                                        </div>

                                        <div class="post_left">
                                            <span class="day">18</span>
                                            <span class="month">sept</span>
                                        </div>
                                    </li>
                                    <li class="post">
                                        <a href="#" class="post_more"></a>
                                        <div class="post_right_reveal">
                                            <h4><a href="#" onclick="swiperParent.swipeTo(4);">Nam velit sapien, eleifend in tempus volutpat, posuere ullamcorper augue...</a></h4>
                                        </div>
                                        <div class="post_right_unreveal">
                                            Posted in <a href="#">blog category</a>
                                            <span class="post_comments">11 Comments</span>
                                            <a href="#" class="post_readmore" onclick="swiperParent.swipeTo(4);">read more</a>
                                        </div>

                                        <div class="post_left">
                                            <span class="day">09</span>
                                            <span class="month">dec</span>
                                        </div>

                                    </li>
                                </ul>
                                <div id="loadMore" class="radius8">Load more posts</div>
                                <div id="showLess" class="radius8">No more posts</div>
                                <div class="scrolltop radius20"><a href="#" class="scrolltop3"><img src="{{URL::asset('./age/images/icons/top.png')}}" alt="Go on top" title="Go on top" /></a></div>
                            </div>
                            <!--End of page container-->
                        </div>
                    </div>
                </div>
                <div class="swiper-scrollbar3"></div>
            </div>
        </div>

        <div class="swiper-slide sliderbg">
            <div class="swiper-container swiper-nestedsingle">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="pages_container">
                                <a class="backtoblog radius8" onclick="swiperParent.swipeTo(3);">back to blog</a>
                                <h2 class="page_title">Blog single page</h2>
                                <div class="image_single radius4"><img src="{{URL::asset('./age/images/page_photo.jpg')}}" alt="" title="" border="0" /></div>
                                <div class="image_caption green green_borderbottom radius4">Image title</div>
                                <h3>Imagination is our power</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit sapien, eleifend in tempus volutpat, posuere ullamcorper augue. Proin dignissim risus ut quam aliquam dignissim. In erat elit, bibendum vitae commodo vitae, bibendum non justo.<br /><br /> Nunc erat eros, cursus et commodo vitae, pulvinar ac libero. Nullam et scelerisque erat. Cras vestibulum justo eget lorem semper ac facilisis nulla porta.</p>
                                <h3>Comments</h3>
                                <div class="comment_row">
                                    <div class="comm_avatar"><img src="{{URL::asset('./age/images/avatar.jpg')}}" alt="" title="" border="0" /></div>
                                    <div class="comm_content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit sapien, eleifend in by <a href="#">comment author</a></p></div>
                                </div>
                                <div class="comment_row">
                                    <div class="comm_avatar"><img src="{{URL::asset('./age/images/avatar.jpg')}}" alt="" title="" border="0" /></div>
                                    <div class="comm_content"><p>Nullam et scelerisque erat. Cras vestibulum justo eget lorem semper ac facilisis nulla porta by <a href="#">comment author</a></p></div>
                                </div>
                                <h3>Leave a comment</h3>
                                <div class="form">
                                    <form action="">
                                        <label>Name:</label>
                                        <input type="text" class="form_input radius4" />
                                        <label>Email:</label>
                                        <input type="text" class="form_input radius4" />
                                        <label>Comment:</label>
                                        <textarea class="form_textarea radius4" rows="" cols=""></textarea>

                                        <input type="submit" class="form_submit radius4 green green_borderbottom" value="Submit" />
                                    </form>
                                </div>
                                <div class="scrolltop radius20"><a href="#" class="scrolltopsingle"><img src="{{URL::asset('./age/images/icons/top.png')}}" alt="Go on top" title="Go on top" /></a></div>
                            </div>
                            <!--End of page container-->
                        </div>
                    </div>
                </div>
                <div class="swiper-scrollbarsingle"></div>
            </div>
        </div>
        <!--Page 4 content-->
        <div class="swiper-slide sliderbg">
            <div class="swiper-container swiper-nested4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="pages_container">
                                <h2 class="page_title">添加法律常识</h2>
                                <div class="toogle_wrap radius8">
                                    <div class="trigger"><a href="#">portfolio categories</a></div>
                                    <div class="toggle_container">
                                        <ul class="listing_detailed">
                                            <li><a href="#">webdesign work</a></li>
                                            <li><a href="#">painted illustrations</a></li>
                                            <li><a href="#">programming and javascript</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="portfolio_item radius8">
                                    <div class="portfolio_image"><a rel="gallery-1" href="{{URL::asset('./age/images/portfolio_thumb.jpg')}}" class="swipebox" title="Webdesign work"><img src="{{URL::asset('./age/images/portfolio_thumb.jpg')}}" alt="" title="" border="0" /></a></div>
                                    <div class="portfolio_details">
                                        <h4>Webdesign work</h4>
                                        <p>Nullam et scelerisque erat. Cras vestibulum justo...</p>
                                        <a rel="gallery-2" href="{{URL::asset('./age/images/portfolio_thumb.jpg')}}" class="swipebox view_details" title="Webdesign work">view details</a>
                                    </div>
                                </div>
                                <div class="portfolio_item radius8">
                                    <div class="portfolio_image"><a rel="gallery-1" href="{{URL::asset('./age/images/portfolio_thumb2.jpg')}}" class="swipebox" title="Webdesign work"><img src="{{URL::asset('./age/images/portfolio_thumb2.jpg')}}" alt="" title="" border="0" /></a></div>
                                    <div class="portfolio_details">
                                        <h4>Mobile development</h4>
                                        <p>Cras vestibulum justo eget lorem semper ac facilisis...</p>
                                        <a rel="gallery-2" href="{{URL::asset('./age/images/portfolio_thumb2.jpg')}}" class="swipebox view_details" title="Webdesign work">view details</a>
                                    </div>
                                </div>
                                <div class="portfolio_item radius8">
                                    <div class="portfolio_image"><a rel="gallery-1" href="{{URL::asset('./age/images/portfolio_thumb3.jpg')}}" class="swipebox" title="Webdesign work"><img src="{{URL::asset('./age/images/portfolio_thumb3.jpg')}}" alt="" title="" border="0" /></a></div>
                                    <div class="portfolio_details">
                                        <h4>Applications</h4>
                                        <p>Sed ut felis non arcu pulvinar molestie....</p>
                                        <a rel="gallery-2" href="{{URL::asset('./age/images/portfolio_thumb3.jpg')}}" class="swipebox view_details" title="Webdesign work">view details</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <h3>Portfolio with round images</h3>
                                <div class="portfolio_item radius8">
                                    <div class="portfolio_image_round"><a rel="gallery-1" href="{{URL::asset('./age/images/portfolio_thumb.jpg')}}" class="swipebox" title="Webdesign work"><img src="{{URL::asset('./age/images/portfolio_thumb.jpg')}}" alt="" title="" border="0" /></a></div>
                                    <div class="portfolio_details">
                                        <h4>Webdesign work</h4>
                                        <p>Nullam et scelerisque erat. Cras vestibulum justo...</p>
                                        <a rel="gallery-2" href="{{URL::asset('./age/images/portfolio_thumb.jpg')}}" class="swipebox view_details" title="Webdesign work">view details</a>
                                    </div>
                                </div>
                                <div class="portfolio_item radius8">
                                    <div class="portfolio_image_round"><a rel="gallery-1" href="{{URL::asset('./age/images/portfolio_thumb2.jpg')}}" class="swipebox" title="Webdesign work"><img src="{{URL::asset('./age/images/portfolio_thumb2.jpg')}}" alt="" title="" border="0" /></a></div>
                                    <div class="portfolio_details">
                                        <h4>Mobile development</h4>
                                        <p>Cras vestibulum justo eget lorem semper ac facilisis...</p>
                                        <a rel="gallery-2" href="{{URL::asset('./age/images/portfolio_thumb2.jpg')}}" class="swipebox view_details" title="Webdesign work">view details</a>
                                    </div>
                                </div>
                                <div class="portfolio_item radius8">
                                    <div class="portfolio_image_round"><a rel="gallery-1" href="{{URL::asset('./age/images/portfolio_thumb3.jpg')}}" class="swipebox" title="Webdesign work"><img src="{{URL::asset('./age/images/portfolio_thumb3.jpg')}}" alt="" title="" border="0" /></a></div>
                                    <div class="portfolio_details">
                                        <h4>Applications</h4>
                                        <p>Sed ut felis non arcu pulvinar molestie....</p>
                                        <a rel="gallery-2" href="{{URL::asset('./age/images/portfolio_thumb3.jpg')}}" class="swipebox view_details" title="Webdesign work">view details</a>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <div class="scrolltop radius20"><a href="#" class="scrolltop4"><img src="{{URL::asset('./age/images/icons/top.png')}}" alt="Go on top" title="Go on top" /></a></div>
                            </div>
                            <!--End of page container-->
                        </div>
                    </div>
                </div>
                <div class="swiper-scrollbar4"></div>
            </div>
        </div>

        <!--Page 5 content-->
        <div class="swiper-slide sliderbg">
            <div class="swiper-container swiper-nested5">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="pages_container">
                                <h2 class="page_title">展示法律常识</h2>
                                <ul class="photo_gallery_13">
                                    <li><a rel="gallery-3" href="images/photos/photo1.jpg" title="Photo title" class="swipebox"><img src="{{URL::asset('./age/images/photos/photo1.jpg')}}" alt="image"></a></li>
                                    <li><a rel="gallery-3" href="images/photos/photo2.jpg" title="Photo title" class="swipebox"><img src="{{URL::asset('./age/images/photos/photo2.jpg')}}" alt="image"></a></li>
                                    <li><a rel="gallery-3" href="images/photos/photo3.jpg" title="Photo title" class="swipebox"><img src="{{URL::asset('./age/images/photos/photo3.jpg')}}" alt="image"></a></li>
                                    <li><a rel="gallery-3" href="images/photos/photo4.jpg" title="Photo title" class="swipebox"><img src="{{URL::asset('./age/images/photos/photo4.jpg')}}" alt="image"></a></li>
                                    <li><a rel="gallery-3" href="images/photos/photo5.jpg" title="Photo title" class="swipebox"><img src="{{URL::asset('./age/images/photos/photo5.jpg')}}" alt="image"></a></li>
                                    <li><a rel="gallery-3" href="images/photos/photo6.jpg" title="Photo title" class="swipebox"><img src="{{URL::asset('./age/images/photos/photo6.jpg')}}" alt="image"></a></li>
                                </ul>
                                <h2>Photo Gallery 1/2</h2>
                                <ul class="photo_gallery_12">
                                    <li><a rel="gallery-4" href="{{URL::asset('./age/')}}images/photos/photo7.jpg" title="Photo title" class="swipebox"><img src="{{URL::asset('./age/images/photos/photo7.jpg')}}" alt="image"></a></li>
                                    <li><a rel="gallery-4" href="{{URL::asset('./age/')}}images/photos/photo8.jpg" title="Photo title" class="swipebox"><img src="{{URL::asset('./age/images/photos/photo8.jpg')}}" alt="image"></a></li>
                                    <li><a rel="gallery-4" href="{{URL::asset('./age/')}}images/photos/photo9.jpg" title="Photo title" class="swipebox"><img src="{{URL::asset('./age/images/photos/photo9.jpg')}}" alt="image"></a></li>
                                    <li><a rel="gallery-4" href="{{URL::asset('./age/')}}images/photos/photo10.jpg" title="Photo title" class="swipebox"><img src="{{URL::asset('./age/images/photos/photo10.jpg')}}" alt="image"></a></li>

                                </ul>
                                <h2>Photo Gallery 1/1</h2>
                                <ul class="photo_gallery_11">
                                    <li><a rel="gallery-5" href="{{URL::asset('./age/')}}images/photos/photo11.jpg" title="Photo title" class="swipebox"><img src="{{URL::asset('./age/images/photos/photo11.jpg')}}" alt="image"></a></li>
                                </ul>
                                <h2 class="page_title">Round corners 1/3</h2>
                                <ul class="photo_gallery_13_round">
                                    <li><a rel="gallery-6" href="{{URL::asset('./age/')}}images/photos/photo1.jpg" title="Photo title" class="swipebox"><img src="{{URL::asset('./age/images/photos/photo1.jpg')}}" alt="image"></a></li>
                                    <li><a rel="gallery-6" href="{{URL::asset('./age/')}}images/photos/photo2.jpg" title="Photo title" class="swipebox"><img src="{{URL::asset('./age/images/photos/photo2.jpg')}}" alt="image"></a></li>
                                    <li><a rel="gallery-6" href="{{URL::asset('./age/')}}images/photos/photo3.jpg" title="Photo title" class="swipebox"><img src="{{URL::asset('./age/images/photos/photo3.jpg')}}" alt="image"></a></li>
                                    <li><a rel="gallery-6" href="{{URL::asset('./age/')}}images/photos/photo4.jpg" title="Photo title" class="swipebox"><img src="{{URL::asset('./age/images/photos/photo4.jpg')}}" alt="image"></a></li>
                                    <li><a rel="gallery-6" href="{{URL::asset('./age/')}}images/photos/photo5.jpg" title="Photo title" class="swipebox"><img src="{{URL::asset('./age/images/photos/photo5.jpg')}}" alt="image"></a></li>
                                    <li><a rel="gallery-6" href="{{URL::asset('./age/')}}images/photos/photo6.jpg" title="Photo title" class="swipebox"><img src="{{URL::asset('./age/images/photos/photo6.jpg')}}" alt="image"></a></li>
                                </ul>
                                <div class="clearfix"></div>
                                <div class="scrolltop radius20"><a href="#" class="scrolltop5"><img src="{{URL::asset('./age/images/icons/top.png')}}" alt="Go on top" title="Go on top" /></a></div>
                            </div>
                            <!--End of page container-->
                        </div>
                    </div>
                </div>
                <div class="swiper-scrollbar5"></div>
            </div>
        </div>
        <!--Page 6 content-->
        <div class="swiper-slide sliderbg">
            <div class="swiper-container swiper-nested6">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="pages_container">
                                <h2 class="page_title"></h2>
                                <p>
                                    Just some responsive videos. You can add your video description here.
                                </p>
                                <div class="videocontainer radius6">
                                    <OBJECT width="400" height="150"  ><PARAM name="movie" value="MPFLVPlayer.swf" /><PARAM name="allowFullScreen" value="true" /><PARAM name="FlashVars" value="fn=../../../www.youtube.com/watch@v=bwJWYlS-wnE&flvskin=MPFLVSkin.swf" /><EMBED src="MPFLVPlayer.swf"  width="400" height="150"  type="application/x-shockwave-flash" allowFullScreen="true" FlashVars="fn=../../../www.youtube.com/watch@v=bwJWYlS-wnE&flvskin=MPFLVSkin.swf"></EMBED></OBJECT>"></iframe>
                                </div>
                                <h3>Photography style</h3>
                                <div class="videocontainer radius6">
                                    <OBJECT width="400" height="150"  ><PARAM name="movie" value="MPFLVPlayer.swf" /><PARAM name="allowFullScreen" value="true" /><PARAM name="FlashVars" value="fn=../../../www.youtube.com/watch@v=BuAtapRfauM&flvskin=MPFLVSkin.swf" /><EMBED src="MPFLVPlayer.swf"  width="400" height="150"  type="application/x-shockwave-flash" allowFullScreen="true" FlashVars="fn=../../../www.youtube.com/watch@v=BuAtapRfauM&flvskin=MPFLVSkin.swf"></EMBED></OBJECT>                </div>
                            </div>
                        </div>
                        <div class="swiper-scrollbar4"></div>
                    </div>
                </div>
                <!--Page 7 content-->
                <div class="swiper-slide sliderbg">
                    <div class="swiper-container swiper-nested7">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide-inner">
                                    <div class="pages_container">
                                        <h2 class="page_title">Our Clients</h2>
                                        <div class="client_row">
                                            <div class="service_box">
                                                <div class="services_icon"><img src="{{URL::asset('./age/images/icons/clients.png')}}" alt="" title="" /></div>
                                                <div class="service_content">
                                                    <h4>Web company</h4>
                                                    <p>Lorem ipsum dolor sit amet, <a href="#"><strong>consectetur adipisicing elit</strong></a>, sed do eiusmod tempor</p>
                                                </div>
                                            </div>
                                            <h3>Things we done for this client:</h3>
                                            <ul class="listing">
                                                <li>Proin dignissim risus ut quam aliquam dignissim.</li>
                                                <li>Nunc erat eros, cursus et commodo vitae, pulvinar ac libero.</li>
                                                <li>In erat elit, bibendum vitae commodo vitae, bibendum non justo.</li>
                                            </ul>
                                            <a href="#" class="button_12 green green_borderbottom radius4">See work</a>  <a href="#" class="button_12 blue blue_borderbottom radius4">Client web</a>
                                        </div>
                                        <div class="client_row">
                                            <div class="service_box">
                                                <div class="services_icon"><img src="{{URL::asset('./age/images/icons/clients.png')}}" alt="" title="" /></div>
                                                <div class="service_content">
                                                    <h4>Design company</h4>
                                                    <p>Lorem ipsum dolor sit <a href="#">amet consectetur</a> adipisicing elit, <strong>sed do eiusmod</strong> tempor</p>
                                                </div>
                                            </div>
                                            <h3>Things we done for this client:</h3>
                                            <ul class="listing">
                                                <li>Proin dignissim risus ut quam aliquam dignissim.</li>
                                                <li>Nunc erat eros, cursus et commodo vitae, pulvinar ac libero.</li>
                                                <li>In erat elit, bibendum vitae commodo vitae, bibendum non justo.</li>
                                            </ul>
                                            <a href="#" class="button_12 green green_borderbottom radius4">See work</a>  <a href="#" class="button_12 blue blue_borderbottom radius4">Client web</a>
                                        </div>


                                        <div class="clearfix"></div>
                                        <div class="scrolltop radius20"><a href="#" class="scrolltop7"><img src="{{URL::asset('./age/images/icons/top.png')}}" alt="Go on top" title="Go on top" /></a></div>
                                    </div>
                                    <!--End of page container-->
                                </div>
                            </div>
                        </div>
                        <div class="swiper-scrollbar7"></div>
                    </div>
                </div>
                <!--Page 8 content-->
                <div class="swiper-slide sliderbg">
                    <div class="swiper-container swiper-nested8">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide-inner">
                                    <div class="pages_container">
                                        <h2 class="page_title">Latest Tweets</h2>
                                        <div class="tweet"></div>
                                        <a href="#" class="button_11 blue">Follow Us!</a>
                                        <div class="clearfix"></div>
                                        <div class="scrolltop radius20"><a href="#" class="scrolltop8"><img src="{{URL::asset('./age/images/icons/top.png')}}" alt="Go on top" title="Go on top" /></a></div>
                                    </div>
                                    <!--End of page container-->
                                </div>
                            </div>
                        </div>
                        <div class="swiper-scrollbar8"></div>
                    </div>
                </div>
                <!--Page 9 content-->
                <div class="swiper-slide sliderbg">
                    <div class="swiper-container swiper-nested9">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide-inner">
                                    <div class="pages_container">

                                        <h2 class="page_title">Get in touch</h2>
                                        <div class="form">
                                            <form id="contact-us" action="" method="post">
                                                <label>Name:</label>
                                                <input type="text" name="contactName" id="contactName" value="" class="form_input radius4 txt requiredField" />
                                                <label>Email:</label>
                                                <input type="text" name="email" id="email" value="" class="form_input radius4 txt requiredField email" />
                                                <label>Message:</label>
                                                <textarea name="comments" id="commentsText" class="form_textarea radius4 txtarea requiredField" rows="" cols=""></textarea>
                                                <input type="hidden" name="submitted" id="submitted" value="true" />
                                                <input name="submit" type="submit" class="form_submit radius4 green green_borderbottom" value="Send" />
                                            </form>
                                        </div>


                                        <h2>Let's socialize</h2>
                                        <ul class="social">
                                            <li class="social_facebook"><a href="#"><img src="{{URL::asset('./age/images/icons/social/facebook.png')}}" alt="" title="" border="0" /></a></li>
                                            <li class="social_twitter"><a href="#"><img src="{{URL::asset('./age/images/icons/social/twitter.png')}}" alt="" title="" border="0" /></a></li>
                                            <li class="social_google"><a href="#"><img src="{{URL::asset('./age/images/icons/social/google.png')}}" alt="" title="" border="0" /></a></li>
                                            <li class="social_pinterest"><a href="#"><img src="{{URL::asset('./age/images/icons/social/pinterest.png')}}" alt="" title="" border="0" /></a></li>
                                            <li class="social_flickr"><a href="#"><img src="{{URL::asset('./age/images/icons/social/flickr.png')}}" alt="" title="" border="0" /></a></li>
                                            <li class="social_digg"><a href="#"><img src="{{URL::asset('./age/images/icons/social/digg.png')}}" alt="" title="" border="0" /></a></li>
                                        </ul>
                                        <h2>Give Us a call</h2>
                                        <a href="tel_3A123 456 789" class="call_button radius8">Click To Call Now!</a>
                                        <a href="../../../maps.google.com/maps@q=houston+usa&hl=ro&sll=37.0625,-95.677068&sspn=53.961216,114.169922&hnear=Houston,+Harris,+Texas&t=m&z=5" class="map_button radius8">View our location</a>

                                        <div class="clearfix"></div>
                                        <div class="scrolltop radius20"><a href="#" class="scrolltop9"><img src="{{URL::asset('./age/images/icons/top.png')}}" alt="Go on top" title="Go on top" /></a></div>
                                    </div>
                                    <!--End of page container-->
                                </div>
                            </div>
                        </div>
                        <div class="swiper-scrollbar9"></div>
                    </div>
                </div>

                <!--End of pages-->

            </div>
            <div class="pagination"></div>
        </div>
        <script type="text/javascript" src="{{URL::asset('./age/js/jquery-1.10.1.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('./age/js/jquery.swipebox.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('./age/js/idangerous.swiper-2.1.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('./age/js/idangerous.swiper.scrollbar-2.1.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('./age/js/jquery.tabify.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('./age/js/jquery.fitvids.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('./age/js/code.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('./age/js/load.js')}}"></script>
        <!--Twitter Feed-->
        <script type="text/javascript" src="{{URL::asset('./age/js/twitter/jquery.tweet.js')}}" charset="utf-8"></script>
        <script type="text/javascript" charset="utf-8">
            var $ = jQuery.noConflict();
            jQuery(function($){
                $(".tweet").tweet({
                    modpath: 'js/twitter/',
                    join_text: "auto",
                    username: "famousthemes",
                    count: 5,
                    auto_join_text_default: "we said,",
                    auto_join_text_ed: "we",
                    auto_join_text_ing: "we were",
                    auto_join_text_reply: "we replied",
                    auto_join_text_url: "we were checking out",
                    loading_text: "loading tweets..."
                });
            });
        </script>
</body>
</html>
