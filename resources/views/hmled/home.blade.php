@extends('layouts.layout')

@section('content')
    <!--=== Slider ===-->
    <div class="ms-layers-template">
        <!-- masterslider -->
        <div class="master-slider ms-skin-black-2 round-skin" id="masterslider">
            @foreach ($homeImages as $image)
                <div class="ms-slide" style="z-index: 10">
                    <img src="{{ asset('package-assets/plugins/master-slider/masterslider/style/blank.gif') }}" data-src='{{ Storage::url("$image->fileUrl/$image->fileName") }}' alt="">
                </div>
            @endforeach
        </div>
        <!-- end of masterslider -->
    </div>
    <!--=== End Slider ===-->

    <!--=== Purchase Block ===-->
    <div class="purchase">
        <div class="container overflow-h">
            <div class="row">
                <div class="col-md-9 animated fadeInLeft">
                    @php
                        $centerData = $homeDescription->get('center');
                    @endphp
                    <p>{{ $centerData->content }}</p>
                </div>
                <div class="col-md-3 btn-buy animated fadeInRight">
                    <a href="#" class="btn-u btn-u-lg"><i class="fa fa-info"></i> 觀看產品</a>
                </div>
            </div>
        </div>
    </div><!--/row-->
    <!-- End Purchase Block -->
    <!--=== Content Part ===-->
    <div class="bg-color-grey">
        <div class="container content-sm">
        <!-- Service Blocks -->
        <div class="row margin-bottom-30">
            @php
                $main3_1 = $homeDescription->get('3-1');
                $main3_2 = $homeDescription->get('3-2');
                $main3_3 = $homeDescription->get('3-3');
            @endphp
            <div class="col-md-4">
                <div class="service">
                    <i class="fa @if($main3_1->choiceFontawesome != null) {{$main3_1->choiceFontawesome}} @endif service-icon"></i>
                    <div class="desc">
                        <h4>專注化產品</h4>
                        <p>{{ $main3_1->content }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <i class="fa @if($main3_2->choiceFontawesome != null) {{$main3_2->choiceFontawesome}} @endif service-icon"></i>
                    <div class="desc">
                        <h4>公司願景</h4>
                        <p>{{ $main3_2->content }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <i class="fa @if($main3_3->choiceFontawesome != null) {{$main3_3->choiceFontawesome}} @endif service-icon"></i>
                    <div class="desc">
                        <h4>公司環境</h4>
                        <p>{{ $main3_3->content }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Service Blokcs -->
    </div><!--/end container-->
    </div>
@endsection