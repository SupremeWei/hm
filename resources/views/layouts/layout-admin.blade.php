<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>HM Admin</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('images/hm.ico') }}">

        <link href="{{ asset('admin-assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('admin-assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

        <!-- Toastr style -->
        <link href="{{ asset('admin-assets/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">

        <!-- Gritter -->
        <link href="{{ asset('admin-assets/js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">

        <!-- Sweet Alert -->
        <link href="{{ asset('admin-assets/css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">

        <link href="{{ asset('admin-assets/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('admin-assets/css/style.css') }}" rel="stylesheet">

        <!-- Custom -->
        <link href="{{ asset('admin-assets/css/custom.css?v=201705051500') }}" rel="stylesheet">

        @yield('custom-css')
    </head>
    <body class="skin-1">
        <div id="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav metismenu" id="side-menu">
                        <li class="nav-header">
                            <div class="dropdown profile-element">
                                <span><img alt="image" class="img-circle" src="{{ asset('admin-assets/img/user-small.jpg') }}" /></span>
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear">
                                        <span class="block m-t-xs">
                                            <strong class="font-bold">David Williams</strong>
                                        </span>
                                        <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                    <li><a href="login.html">Logout</a></li>
                                </ul>
                            </div>
                            <div class="logo-element">
                                HM
                            </div>
                        </li>
                        <li class="active">
                            <a href="layouts.html"><i class="fa fa-home"></i> <span class="nav-label">首頁</span></a>
                        </li>
                        <li>
                            <a href="layouts.html"><i class="fa fa-building-o"></i> <span class="nav-label">關於翰鎂</span></a>
                        </li>
                        <li>
                            <a href="layouts.html"><i class="fa fa-diamond"></i> <span class="nav-label">產品資訊</span></a>
                        </li>
                        <li>
                            <a href="layouts.html"><i class="fa fa-envelope"></i> <span class="nav-label">聯絡翰鎂</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="page-wrapper" class="gray-bg">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <span class="m-r-sm text-muted welcome-message">Welcome to HM Admin.</span>
                            </li>
                            <li>
                                <a href="login.html">
                                    <i class="fa fa-sign-out"></i> Log out
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                @yield('content')

                <div class="footer">
                    <div class="pull-right">
                        {{ date("Y") }} © <strong>翰鎂科技有限公司擁有</strong>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mainly scripts -->
        <script src="{{ asset('admin-assets/js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('admin-assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin-assets/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
        <script src="{{ asset('admin-assets/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

        <!-- Flot -->
        <script src="{{ asset('admin-assets/js/plugins/flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('admin-assets/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('admin-assets/js/plugins/flot/jquery.flot.spline.js') }}"></script>
        <script src="{{ asset('admin-assets/js/plugins/flot/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('admin-assets/js/plugins/flot/jquery.flot.pie.js') }}"></script>

        <!-- Peity -->
        <script src="{{ asset('admin-assets/js/plugins/peity/jquery.peity.min.js') }}"></script>
        <script src="{{ asset('admin-assets/js/demo/peity-demo.js') }}"></script>

        <!-- Custom and plugin javascript -->
        <script src="{{ asset('admin-assets/js/inspinia.js') }}"></script>
        <script src="{{ asset('admin-assets/js/plugins/pace/pace.min.js') }}"></script>

        <!-- jQuery UI -->
        <script src="{{ asset('admin-assets/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

        <!-- GITTER -->
        <script src="{{ asset('admin-assets/js/plugins/gritter/jquery.gritter.min.js') }}"></script>

        <!-- Sparkline -->
        <script src="{{ asset('admin-assets/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

        <!-- Sparkline demo data  -->
        <script src="{{ asset('admin-assets/js/demo/sparkline-demo.js') }}"></script>

        <!-- ChartJS-->
        <script src="{{ asset('admin-assets/js/plugins/chartJs/Chart.min.js') }}"></script>

        <!-- Toastr -->
        <script src="{{ asset('admin-assets/js/plugins/toastr/toastr.min.js') }}"></script>

        <!-- Sweet alert -->
        <script src="{{ asset('admin-assets/js/plugins/sweetalert/sweetalert.min.js') }}"></script>

        @include('flash.sweetalert')

        <script>
            $(document).ready(function() {
                setTimeout(function() {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 4000
                    };
                    toastr.success('HM admin', 'Login to HM Admin');

                }, 1300);
            });
        </script>

        @yield('custom-js')
    </body>
</html>

