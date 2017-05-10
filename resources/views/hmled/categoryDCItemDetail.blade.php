@extends('hmled.productLeftSiderBar')

@inject('productServie', 'App\Services\ProductService');

@section('itemDetail')
    <!-- Blog All Posts -->
    <div class="col-md-9">
        @foreach($categoryItemFileTitleWithDescription as $groupItem)
            @foreach($groupItem->itemsDescription as $itemDescription)
                @php
                    $dcitemsData = $productServie->categoryDCItemsDescription($itemDescription->itemDescriptionId)
                @endphp
            <div class="tag-box tag-box-v3">
                <div class="row">
                    @foreach($dcitemsData as $itemData)
                        <div class="col-sm-3 col-xs-6 md-margin-bottom-20">
                            <img class="img-responsive rounded-2x" src="{{ url('images/productImages/'.$itemData->imageUrl) }}" alt="">
                        </div>

                        <div class="col-sm-8">
                            <h3><span class="text-highlights text-highlights-blue">Type</span></h3>
                            <h4>{{ $itemDescription->specTitle }}</h4>
                            <h3><span class="text-highlights text-highlights-blue">Dielectric</span></h3>
                            <h4>{{ $itemData->dielectric }}</h4>
                            <h3><span class="text-highlights text-highlights-blue">Description</span></h3>
                            <h4>{{ $itemData->description }}</h4>
                            <h3><span class="text-highlights text-highlights-blue">Capacitance range</span></h3>
                            <h4>{{ $itemData->capacitanceRange }}</h4>
                            <h3><span class="text-highlights text-highlights-blue">Rated voltage range</span></h3>
                            <h4>{{ $itemData->ratedVoltageRange }}</h4>
                        </div>

                        <div class="col-sm-1">
                            <h3><span class="text-highlights text-highlights-dark-blue">PDF</span></h3>
                            <p>NoPdf</p>
                        </div>
                    @endforeach
                </div>
            </div>
            @endforeach
            <!--End Basic Table-->
        @endforeach
    </div>
    <!-- End Blog All Posts -->
@endsection