@extends('layouts.layout')

@section('content')
    <!--=== Breadcrumbs v1 ===-->
    <div class="breadcrumbs-v1">
        <div class="container">
            <span>Blog Page11</span>
            <h1>Basic With Sidebar</h1>
        </div>
    </div>
    <!--=== End Breadcrumbs v1 ===-->

    <!--=== Blog Posts ===-->
    <div class="bg-color-light">
        <div class="container content-sm">
            <div class="row">
                <!-- Blog Sidebar -->
                <div class="col-md-3">
                    @foreach($leftSiderBarWithCategoryItems as $category)
                        <div class="headline-v2">
                            <h2>{{ $category->chineseName }}</h2>
                        </div>
                        <!-- Trending -->
                        <ul class="list-unstyled blog-trending margin-bottom-50">
                            @foreach($category->categoryItems as $categoryItem)
                                <li>
                                    <h3>
                                        @if ($categoryItem->formType == 'A')
                                            <a href="{{ url('product/show', [$categoryItem->categoryItemId]) }}">{{ $categoryItem->title }}</a>
                                        @elseif ($categoryItem->formType == 'B')
                                            <a href="{{ url('product/showDC', [$categoryItem->categoryItemId]) }}">{{ $categoryItem->title }}</a>
                                        @endif
                                    </h3>
                                </li>
                            @endforeach
                        </ul>
                        <!-- End Trending -->
                    @endforeach
                </div>
                <!-- End Blog Sidebar -->

                @yield('itemDetail')
            </div>
        </div>
    </div>
    <!--=== End Blog Posts ===-->
@endsection