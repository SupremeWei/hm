@extends('layouts.layout')

@section('content')
    <div class="bg-color-light">
        <!--=== Content Part ===-->
        <div class="container content">
            <div class="title-box-v2">
                <h2>關於 <span class="color-green">翰鎂</span></h2>
                <p class="space-lg-hor">專營 <span class="color-blue">LED亮化產品</span> 規劃製造，承接LED廣告、照明、亮化及LED相關產品製造販售，燈具、照明、工廠自動化看板、電腦字幕機、智慧型叫號機、數字鐘、電子零件周邊產品。</p>
            </div>

            <!-- About Sldier -->
            <div class="shadow-wrapper margin-bottom-50">
                <div class="carousel slide carousel-v1 box-shadow shadow-effect-2" id="myCarousel">
                    <ol class="carousel-indicators">
                        <li class="rounded-x active" data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li class="rounded-x" data-target="#myCarousel" data-slide-to="1"></li>
                        <li class="rounded-x" data-target="#myCarousel" data-slide-to="2"></li>
                        <li class="rounded-x" data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="{{ asset('images/home/hmhome1.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="{{ asset('images/home/hmhome2.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="{{ asset('images/home/hmhome3.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="{{ asset('images/home/hmhome4.jpg') }}" alt="">
                        </div>
                    </div>

                    <div class="carousel-arrow">
                        <a data-slide="prev" href="#myCarousel" class="left carousel-control">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a data-slide="next" href="#myCarousel" class="right carousel-control">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End About Sldier -->
        </div>
    </div>
    <!-- Services Blocks -->
    <div class="bg-color-dark-blue">
        <div class="container content-md">
            <div class="text-center margin-bottom-60">
                <h2 class="title-v2 title-center">我們提供的 <span class="color-red"> 產品</span> 與 <span class="color-red">服務</span> </h2>
                <p class="space-lg-hor about-message">我們一直以 <span class="color-red about-messsage">專業、服務、品質 </span>為我們的一貫精神，提供最好的產品，以及最佳的服務，我們的努力是為產品做責任保證亦是為永續經營做準備。</p>
            </div>

            <!-- Service Block v8 -->
            <div class="row margin-bottom-30">
                <div class="col-sm-6 sm-margin-bottom-50 animated fadeIn wow" data-wow-duration="1.5s">
                    <div class="service-block-v8">
                        <i class="icon-bubbles"></i>
                        <div class="service-block-desc">
                            <h3>到府維修</h3>
                            <p>我們仍將秉持一貫的態度，繼續提供顧客高品質的產品與最佳的服務，請繼續給我們更多的支持與建議。</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 sm-margin-bottom-20 animated fadeIn wow" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <div class="service-block-v8">
                        <i class="icon-globe"></i>
                        <div class="service-block-desc">
                            <h3>商品</h3>
                            <p>遍佈全省北中南各區，近幾年已把行銷處點延伸至國際，提供各地產品的需求與服務</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Service Block v8 -->

            <!-- Service Block v8 -->
            <div class="row margin-bottom-30">
                <div class="col-sm-6 sm-margin-bottom-50 animated fadeIn wow" data-wow-duration="1.5s" data-wow-delay="0.5s">
                    <div class="service-block-v8">
                        <i class="icon-layers"></i>
                        <div class="service-block-desc">
                            <h3>One Page Templates</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus velit nec ante tempor, iaculis mollis ante imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 animated fadeIn wow" data-wow-duration="1.5s" data-wow-delay="0.6s">
                    <div class="service-block-v8">
                        <i class="icon-handbag"></i>
                        <div class="service-block-desc">
                            <h3>E-Commerce Ready</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus velit nec ante tempor, iaculis mollis ante imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Service Block v8 -->

            <!-- Service Block v8 -->
            <div class="row">
                <div class="col-sm-6 sm-margin-bottom-50 animated fadeIn wow" data-wow-duration="1.5s" data-wow-delay="0.7s">
                    <div class="service-block-v8">
                        <i class="icon-paper-plane"></i>
                        <div class="service-block-desc">
                            <h3>Blog &amp; News</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus velit nec ante tempor, iaculis mollis ante imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 sm-margin-bottom-20 animated fadeIn wow" data-wow-duration="1.5s" data-wow-delay="0.8s">
                    <div class="service-block-v8">
                        <i class="icon-present"></i>
                        <div class="service-block-desc">
                            <h3>Much More Others</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus velit nec ante tempor, iaculis mollis ante imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Service Block v8 -->
        </div>
    </div>
    <!-- End Services Blocks -->
@endsection