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
                        <li class="rounded-x" data-target="#myCarousel" data-slide-to="0"></li>
                        <li class="rounded-x" data-target="#myCarousel" data-slide-to="1"></li>
                        <li class="rounded-x" data-target="#myCarousel" data-slide-to="2"></li>
                        <li class="rounded-x" data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <div class="carousel-inner">
                        @foreach ($aboutImages as $image)
                            <div class="item {{ ($loop->first) ? 'active' : '' }}">
                                <img class="img-responsive" src="{{ Storage::url("$image->fileUrl/$image->fileName") }}" alt="">
                            </div>
                        @endforeach
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

    <div class="bg-color-dark-blue">
        <div class="container content-md">
            <div class="text-center margin-bottom-60">
                <h2 class="title-v2 title-center">我們提供的 <span class="color-red"> 產品</span> 與 <span class="color-red">服務</span> </h2>
                <p class="space-lg-hor about-message">我們一直以 <span class="color-red about-messsage">專業、服務、品質 </span>為我們的一貫精神，提供最好的產品，以及最佳的服務，我們的努力是為產品做責任保證亦是為永續經營做準備。</p>
            </div>

            @foreach ($aboutDescription as $chunkData)
                <div class="row margin-bottom-30">
                @foreach ($chunkData as $detailData)
                    @php
                        $variableName = $detailData->descriptionType;
                        $$variableName = $detailData;
                        $currentVariableName = $detailData->descriptionType;
                    @endphp
                    <div class="col-sm-6 sm-margin-bottom-50 animated fadeIn wow" data-wow-duration="1.5s">
                        <div class="service-block-v8">
                            <i class="icon-bubbles"></i>
                            <div class="service-block-desc">
                                <h3>{{ $$currentVariableName->contentTitle }}</h3>
                                <p>{{ $$currentVariableName->content }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            @endforeach
        </div>
    </div>
    <!-- End Services Blocks -->
@endsection