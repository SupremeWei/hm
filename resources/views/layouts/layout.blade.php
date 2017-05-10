<!DOCTYPE html>
    <!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
    <!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
    <!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <title>翰鎂科技有限公司</title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('images/hm.ico') }}">

        <!-- Web Fonts -->
        <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

        <!-- CSS Global Compulsory -->
        <link rel="stylesheet" href="{{ asset('package-assets/plugins/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('package-assets/css/style.css') }}">

        <!-- CSS Header and Footer -->
        <link rel="stylesheet" href="{{ asset('package-assets/css/headers/header-v6.css') }}">
        <link rel="stylesheet" href="{{ asset('package-assets/css/footers/footer-v1.css') }}">

        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="{{ asset('package-assets/plugins/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('package-assets/plugins/line-icons/line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('package-assets/plugins/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('package-assets/plugins/fancybox/source/jquery.fancybox.css') }}">
        <link rel="stylesheet" href="{{ asset('package-assets/plugins/owl-carousel/owl-carousel/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('package-assets/plugins/master-slider/masterslider/style/masterslider.css') }}">
        <link rel='stylesheet' href="{{ asset('package-assets/plugins/master-slider/masterslider/skins/black-2/style.css') }}">
        @yield('css-plugins')

        <!-- CSS Pages Style -->
        <link rel="stylesheet" href="{{ asset('package-assets/css/pages/page_one.css') }}">
        @yield('css-pages-style')

        <!-- CSS Theme -->
        <link rel="stylesheet" href="{{ asset('package-assets/css/theme-colors/blue.css') }}" id="style_color">
        <link rel="stylesheet" href="{{ asset('package-assets/css/theme-skins/dark.css') }}">

        <!-- CSS Customization -->
        <link rel="stylesheet" href="{{ asset('package-assets/css/custom.css?v=201705031510') }}">
    </head>

    <body class="header-fixed header-fixed-space">
        <div class="wrapper">
            <!--=== Header v6 ===-->
            <div class="header-v6 header-classic-white header-sticky">
                <!-- Navbar -->
                <div class="navbar mega-menu" role="navigation">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="menu-container">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <!-- Navbar Brand -->
                            <div class="navbar-brand">
                                <a href="{{ action('HmLed\HomeController@home') }}">
                                    <img class="shrink-logo" src="{{ asset('images/logo.png') }}" alt="Logo">
                                </a>
                            </div>
                            <!-- ENd Navbar Brand -->
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-responsive-collapse">
                            <div class="menu-container">
                                <ul class="nav navbar-nav">
                                    <!-- Home -->
                                    <li class="home">
                                        <a href="{{ action('HmLed\HomeController@home') }}">
                                            首頁
                                        </a>
                                    </li>
                                    <!-- End Home -->

                                    <!-- 關於翰鎂 -->
                                    <li class="about">
                                        <a href="{{ action('HmLed\HomeController@about') }}">
                                            關於翰鎂
                                        </a>
                                    </li>
                                    <!-- End 關於翰鎂 -->

                                    <!-- 產品資訊 -->
                                    <li class="production">
                                        <a href="{{ action('HmLed\ProductController@showItemDetail', ['categoryItemId' => 1]) }}">
                                            產品資訊
                                        </a>
                                    </li>
                                    <!-- End 產品資訊 -->

                                    <!-- 聯絡翰鎂 -->
                                    <li class="contact">
                                        <a href="{{ action('HmLed\HomeController@contact') }}">
                                            聯絡翰鎂
                                        </a>
                                    </li>
                                    <!-- End 聯絡翰鎂 -->
                                </ul>
                            </div>
                        </div><!--/navbar-collapse-->
                    </div>
                </div>
                <!-- End Navbar -->
            </div>
            <!--=== End Header v6 ===-->

            @yield('content')

            <!--=== Footer v1 ===-->
            <div id="footer-v1" class="footer-v1">
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <!-- About -->
                            <div class="col-md-3 md-margin-bottom-10">
                                <div class="headline"><h2>翰鎂理念</h2></div>
                                <p>我們仍將秉持一貫的態度，繼續提供顧客高品質的產品與最佳的服務，請繼續給我們更多的支持與建議。</p>
                            </div>
                            <!-- End About -->

                            <!-- Link List -->
                            <div class="col-md-4 md-margin-bottom-40">
                                <div class="headline"><h2>網站連結</h2></div>
                                <ul class="list-unstyled link-list">
                                    <li><a href="{{ action('HmLed\HomeController@home') }}">首頁</a><i class="fa fa-angle-right"></i></li>
                                    <li><a href="{{ action('HmLed\HomeController@about') }}">關於翰鎂</a><i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">產品資訊</a><i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">聯絡翰鎂</a><i class="fa fa-angle-right"></i></li>
                                </ul>
                            </div>
                            <!-- End Link List -->

                            <!-- Address -->
                            <div class="col-md-4 map-img md-margin-bottom-40">
                                <div class="headline"><h2>聯絡翰鎂</h2></div>
                                <address class="md-margin-bottom-40">
                                    台中市梧棲區立德街55號<br />
                                    電話 ：04-26583542 <br />
                                    傳真：04-26583574 <br />
                                    信箱：<a href="mailto:cmyew.hm@msa.hinet.net" class="">icmyew.hm@msa.hinet.net</a>
                                </address>
                            </div>
                            <!-- End Address -->
                        </div>
                    </div>
                </div><!--/footer-->

                <div class="copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    {{ date("Y") }} &copy; 翰鎂科技有限公司擁有
                                </p>
                            </div>
                        </div>
                    </div>
                </div><!--/copyright-->
            </div>
            <!--=== End Footer v1 ===-->
        </div><!--/wrapper-->

        <!-- JS Global Compulsory -->
        <script type="text/javascript" src="{{ asset('package-assets/plugins/jquery/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('package-assets/plugins/jquery/jquery-migrate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('package-assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- JS Implementing Plugins -->
        <script type="text/javascript" src="{{ asset('package-assets/plugins/back-to-top.js') }}"></script>
        <script type="text/javascript" src="{{ asset('package-assets/plugins/smoothScroll.js') }}"></script>
        <script type="text/javascript" src="{{ asset('package-assets/plugins/jquery.parallax.js') }}"></script>
        <script src="{{ asset('package-assets/plugins/master-slider/masterslider/masterslider.min.js') }}"></script>
        <script src="{{ asset('package-assets/plugins/master-slider/masterslider/jquery.easing.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('package-assets/plugins/counter/waypoints.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('package-assets/plugins/counter/jquery.counterup.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('package-assets/plugins/fancybox/source/jquery.fancybox.pack.js') }}"></script>
        <script type="text/javascript" src="{{ asset('package-assets/plugins/owl-carousel/owl-carousel/owl.carousel.js') }}"></script>
        <!-- JS Customization -->
        <script type="text/javascript" src="{{ asset('package-assets/js/custom.js?v=201705021515') }}"></script>
        <!-- JS Page Level -->
        <script type="text/javascript" src="{{ asset('package-assets/js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('package-assets/js/plugins/fancy-box.js') }}"></script>
        <script type="text/javascript" src="{{ asset('package-assets/js/plugins/owl-carousel.js') }}"></script>
        <script type="text/javascript" src="{{ asset('package-assets/js/plugins/master-slider-fw.js') }}"></script>
        <script type="text/javascript" src="{{ asset('package-assets/js/plugins/style-switcher.js') }}"></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                App.init();
                App.initCounter();
                App.initParallaxBg();
                FancyBox.initFancybox();
                MSfullWidth.initMSfullWidth();
                OwlCarousel.initOwlCarousel();
                StyleSwitcher.initStyleSwitcher();
            });
        </script>
        <!--[if lt IE 9]>
        <script src="{{ asset('package-assets/plugins/respond.js') }}"></script>
        <script src="{{ asset('package-assets/plugins/html5shiv.js') }}"></script>
        <script src="{{ asset('package-assets/plugins/placeholder-IE-fixes.js') }}"></script>
        <![endif]-->
    </body>
</html>