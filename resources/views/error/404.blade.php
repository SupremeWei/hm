<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <title>404 Error Page 3 | Unify - Responsive Website Template</title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico">

        <!-- Web Fonts -->
        <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

        <!-- CSS Global Compulsory -->
        <link rel="stylesheet" href="{{ asset('package-assets/plugins/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('package-assets/css/style.css') }}">

        <!-- CSS Header and Footer -->
        <link rel="stylesheet" href="{{ asset('package-assets/css/headers/header-default.css') }}">
        <link rel="stylesheet" href="{{ asset('package-assets/css/footers/footer-v1.css') }}">

        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="{{ asset('package-assets/plugins/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('package-assets/plugins/line-icons/line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('package-assets/plugins/font-awesome/css/font-awesome.min.css') }}">

        <!-- CSS Page Style -->
        <link rel="stylesheet" href="{{ asset('package-assets/css/pages/page_error4_404.css') }}">

        <!-- CSS Theme -->
        <link rel="stylesheet" href="{{ asset('package-assets/css/theme-colors/default.css" id="style_color') }}">
        <link rel="stylesheet" href="{{ asset('package-assets/css/theme-skins/dark.css') }}">

        <!-- CSS Customization -->
        <link rel="stylesheet" href="{{ asset('package-assets/css/custom.css?v=201704271000') }}">
    </head>

    <body>
        <!--=== Error V4 ===-->
        <div class="container content valign__middle">
            <!--Error Block-->
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="error-v4">
                        <a href="#"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                        <h1>404</h1>
                        <span class="sorry">抱歉，欲存取頁面不存在</span>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <a class="btn-u btn-brd btn-u-light" href="{{ action('HmLed\HomeController@home') }}"> 回到首頁 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/container-->
        <!--End Error Block-->

        <!--=== Sticky Footer ===-->
        <div class="error-v4 container sticky-footer">
            <p class="copyright-space">
                {{ date("Y") }} &copy; 翰鎂科技有限公司擁有
            </p>
        </div>
        <!--=== End Sticky Footer ===-->

        <!-- JS Global Compulsory -->
        <script type="text/javascript" src="{{ asset('package-assets/plugins/jquery/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('package-assets/plugins/jquery/jquery-migrate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('package-assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- JS Implementing Plugins -->
        <script type="text/javascript" src="{{ asset('package-assets/plugins/back-to-top.js') }}"></script>
        <script type="text/javascript" src="{{ asset('package-assets/plugins/backstretch/jquery.backstretch.min.js') }}"></script>
        <!-- JS Customization -->
        <script type="text/javascript" src="{{ asset('package-assets/js/custom.js') }}"></script>
        <!-- JS Page Level -->
        <script type="text/javascript" src="{{ asset('package-assets/js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('package-assets/js/plugins/style-switcher.js') }}"></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                App.init();
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
