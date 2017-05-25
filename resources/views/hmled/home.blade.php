@extends('layouts.layout')

@section('content')
    <!--=== Home Slider ===-->
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
    <!--=== End Home Slider ===-->

    @foreach($homeDescription as $detailData)
        @php
            $variableName = $detailData->descriptionType;
            $$variableName = $detailData;
            $currentVariableName = $detailData->descriptionType;
        @endphp
        @if ($currentVariableName == 'center')
            <div class="purchase">
                <div class="container overflow-h">
                    <div class="row">
                        <div class="col-md-9 animated fadeInLeft">
                            <p>{{ $$currentVariableName->content }}</p>
                        </div>
                        <div class="col-md-3 btn-buy animated fadeInRight">
                            <a href="#" class="btn-u btn-u-lg"><i class="fa fa-info"></i> 觀看產品</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach


    <div class="bg-color-grey">
        <div class="container content-sm">
            <!-- Service Blocks -->
            <div class="row margin-bottom-30">
                @foreach($homeDescription as $detailData)
                    @php
                        $currentVariableName = $detailData->descriptionType;
                    @endphp
                    @if ($currentVariableName != 'center')
                        <div class="col-md-4">
                            <div class="service">
                                <i class="fa @if($$currentVariableName->choiceFontawesome != null) {{$$currentVariableName->choiceFontawesome}} @endif service-icon"></i>
                                <div class="desc">
                                    <h4>{{ $$currentVariableName->contentTitle }}</h4>
                                    <p>{{ $$currentVariableName->content }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <!-- End Service Blokcs -->
        </div><!--/end container-->
    </div>

@endsection