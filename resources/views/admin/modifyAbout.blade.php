@extends('layouts.layout-admin')

@section('custom-css')
    <link href="{{ asset('admin-assets/css/plugins/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/css/plugins/slick/slick-theme.css') }}" rel="stylesheet">
    <style>
        .image-use-slick .ibox-content-inside {
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
                        <h5>修改 關於翰鎂 封面圖片</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="image-use-slick image-use-slick-js">
                            @foreach($aboutImages as $imageRow)
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
                    <form method="POST" class="form-horizontal" action="{{ action('Admin\ModifyAboutController@addAboutImage') }}" enctype="multipart/form-data">
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
            @php
                foreach($aboutDescription as $detailData) {
                    $variableName = $detailData->descriptionType;
                    $$variableName = $detailData;
                }
            @endphp
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title blue-bg">
                        <h5>修改 關於翰鎂 內容區塊 <small class="text-navy">六大區塊提供修改</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form method="POST" class="form-horizontal" action="{{ action('Admin\ModifyAboutController@editAboutDescription') }}">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            @foreach($aboutDescription as $detailData)
                                @php
                                    $currentVariableName = $detailData->descriptionType;
                                @endphp
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">標題</label>
                                    <div class="col-sm-10">
                                        <input class="form-control {{($errors->has("$currentVariableName-title")) ? 'input-error' : ''}}" name="{{ $currentVariableName }}-title" value="{{ $$currentVariableName->contentTitle }}">
                                        @if ($errors->has("$currentVariableName-title"))
                                            <label class="label label-danger">{{ $errors->first("$currentVariableName-title") }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">{{ $$currentVariableName->contentTitle }}</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control {{($errors->has("$currentVariableName")) ?'input-error' : ''}}" name="{{ $currentVariableName }}">{{ $$currentVariableName->content }}</textarea>
                                        @if ($errors->has("$currentVariableName"))
                                            <label class="label label-danger">{{ $errors->first("$currentVariableName") }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                            @endforeach
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
    <script src="{{ asset('js/admin/modify-image-and-slick.js') }}"></script>
    <!-- Jasny -->
    <script src="{{ asset('admin-assets/js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>
@endsection