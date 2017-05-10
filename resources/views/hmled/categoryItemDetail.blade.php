@extends('hmled.productLeftSiderBar')

@section('itemDetail')
    <!-- Blog All Posts -->
    <div class="col-md-9">
        <div class="col-md-6 md-margin-bottom-60">
            <div class="headline">
                @foreach($categoryMainDescriptionWithImages as $mainDescription)
                <h2>{{ $mainDescription->title }}</h2>
                @endforeach
            </div>
            <p></p>
        </div>
        <!-- End Content Info -->
        <div class="col-md-6 md-margin-bottom-20 productImage">
            <!-- Carousel -->
            <div class="carousel slide carousel-v1" id="myCarousel">
                <div class="carousel-inner">
                    @foreach($categoryMainDescriptionWithImages as $mainDescription)
                        @foreach($mainDescription->images as $itemImage)
                            @if ($loop->first)
                                <div class="item active">
                            @else
                                <div class="item">
                            @endif
                                <img class="productImages" alt="" src='{{ asset("images/productImages/$itemImage->categoryItemId/$itemImage->imageName") }}'>
                                <div class="carousel-caption">
                                    <p></p>
                                </div>
                            </div>
                        @endforeach
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
            <!-- End Carousel -->
        </div>
        <!-- End Content Info -->
        <!--Basic Table Option (Spacing)-->
        @foreach($categoryItemFileTitleWithDescription as $groupItem)
            <div class="panel panel-blue margin-bottom-10">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-file-text"></i>{{ $groupItem->title }}</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr class="bg-color-darker">
                                <th class="col-sm-10">PDF Document</th>
                                <th class="col-sm-2">PDF Files</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($groupItem->itemsDescription as $itemDescription)
                                <tr class="item-content">
                                    <td>{{ $itemDescription->specDescription }}</td>
                                    <td>No PDFs</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
        <!--End Basic Table-->
    </div>
    <!-- End Blog All Posts -->
@endsection