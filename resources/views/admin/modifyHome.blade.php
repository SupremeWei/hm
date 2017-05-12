@extends('layouts.layout-admin')

@section('custom-css')
    <link href="{{ asset('admin-assets/css/plugins/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/css/plugins/slick/slick-theme.css') }}" rel="stylesheet">
    <style>
        .home-image-use-slick .ibox-content-inside {
            margin: 0 10px;
        }
    </style>
    <link href="{{ asset('admin-assets/css/plugins/jasny/jasny-bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row float-e-margins">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title blue-bg">
                        修改 首頁封面圖片
                    </div>
                    <div class="ibox-content">
                        <div class="home-image-use-slick">
                            @foreach($homeImages as $imageRow)
                            <div>
                                <div class="ibox float-e-margins ibox-content-inside">
                                    <div class="ibox-title gray-bg">
                                        <h5>{{ $imageRow->fileName }}</h5>
                                        <div class="ibox-tools">
                                            <a name="image" data-delete-url="{{ action('Admin\ModifyHomeController@deleteHomeImage', $imageRow->companyImageId) }}"
                                                data-delete-name="{{ $imageRow->fileName }}">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-conten">
                                        <img class="img-responsive rounded-2x" src='{{ Storage::url("$imageRow->fileUrl/$imageRow->fileName") }}' alt="">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <form method="POST" class="form-horizontal" action="{{ action('Admin\ModifyHomeController@addHomeImage') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="ibox-title blue-bg">
                            新增圖片
                        </div>

                        <div class="ibox-content">
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput">
                                    <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                    <span class="fileinput-filename"></span>
                                </div>
                                <span class="input-group-addon btn btn-default btn-file">
                                    <span class="fileinput-new">選擇檔案</span>
                                    <span class="fileinput-exists">更換檔案</span>
                                    <input type="file" name="addImage">
                                </span>
                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">移除檔案</a>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-md-8"></div>
                                <div class="col-md-4">
                                    <button class="btn btn-info btn-rounded btn-block" type="submit">
                                        <i class="fa fa-upload">  上傳圖片</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title blue-bg">
                        <h5>修改 首頁內容區塊 <small class="text-navy">翰鎂提供眾多服務、專注化產品、公司願景、公司環境</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        @php
                            $center = $homeDescription->get('center');
                            $main3_1 = $homeDescription->get('3-1');
                            $main3_2 = $homeDescription->get('3-2');
                            $main3_3 = $homeDescription->get('3-3');
                        @endphp
                        <form method="POST" class="form-horizontal" action="{{ action('Admin\ModifyHomeController@editDescription') }}">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">翰鎂提供眾多服務</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control @if ($errors->has('center')) input-error @endif" name="center" value="">{{ $center->content }}</textarea>
                                    @if ($errors->has('center'))
                                        <label class="label label-danger">不可為空白</label>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">專注化產品</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control @if ($errors->has('3-1')) input-error @endif" name="3-1">{{ $main3_1->content }}</textarea>
                                    @if ($errors->has('3-1'))
                                        <label class="label label-danger">不可為空白</label>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">公司願景</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control @if ($errors->has('3-2')) input-error @endif" name="3-2">{{ $main3_2->content }}</textarea>
                                    @if ($errors->has('3-2'))
                                        <label class="label label-danger">不可為空白</label>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">公司環境</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control @if ($errors->has('3-3')) input-error @endif" name="3-3">{{ $main3_3->content }}</textarea>
                                    @if ($errors->has('3-3'))
                                        <label class="label label-danger">不可為空白</label>
                                    @endif
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-md-8"></div>
                                <div class="col-md-4">
                                    <button class="btn btn-info btn-rounded btn-block" type="submit"><i class="fa fa-check"> 儲存修改</i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <!-- slick carousel-->
    <script src="{{ asset('admin-assets/js/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('js/modify-home.js') }}"></script>
    <!-- Jasny -->
    <script src="{{ asset('admin-assets/js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>
@endsection