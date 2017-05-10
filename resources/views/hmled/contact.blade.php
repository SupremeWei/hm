@extends('layouts.layout')

@section('css-plugins')
    <link rel="stylesheet" href="{{ asset('package-assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css') }}">
    <link rel="stylesheet" href="{{ asset('package-assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css') }}">
    <!--[if lt IE 9]><link rel="stylesheet" href="{{ asset('package-assets/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css') }}"><![endif]-->
@endsection

@section('css-pages-style')
    <link rel="stylesheet" href="{{ asset('package-assets/css/pages/page_contact.css') }}">
@endsection

@section('content')
    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row margin-bottom-30">
            <div class="col-md-9 mb-margin-bottom-30">
                <div class="headline"><h2>請填入下方資料</h2></div>
                <p>我們會盡快回覆。</p>

                <form methods="POST" action={{ action('HmLed\MailController@sendMail') }} method="post" id="sky-form3" class="sky-form sky-changes-3">
                    {{ csrf_field() }}
                    <fieldset>
                        <div class="row">
                            <section class="col col-6">
                                <label class="label">姓名<span class="color-red">（必填）</span></label>
                                <label class="input @if ($errors->has('name')) state-error @endif">
                                    <i class="icon-append fa fa-user"></i>
                                    <input type="text" name="name" id="name" value="{{ old('name') }}">
                                </label>
                            </section>
                            <section class="col col-6">
                                <label class="label">公司名稱</label>
                                <label class="input">
                                    <i class="icon-append fa fa-building"></i>
                                    <input type="text" name="company" id="company" value="{{ old('company') }}">
                                </label>
                            </section>
                            <section class="col col-6">
                                <label class="label">電子信箱<span class="color-red">（必填）</span></label>
                                <label class="input @if ($errors->has('email')) state-error @endif">
                                    <i class="icon-append fa fa-envelope-o"></i>
                                    <input type="email" name="email" id="email" value="{{ old('email') }}">
                                </label>
                            </section>
                            <section class="col col-6">
                                <label class="label">手機號碼 or 公司電話</label>
                                <label class="input">
                                    <i class="icon-append fa fa-phone"></i>
                                    <input type="text" name="phone" id="phone" value="{{ old('name') }}">
                                </label>
                            </section>
                        </div>

                        <section>
                            <label class="label">諮詢主旨<span class="color-red">（必填）</span></label>
                            <label class="input @if ($errors->has('subject')) state-error @endif">
                                <i class="icon-append fa fa-tag"></i>
                                <input type="text" name="subject" id="subject" value="{{ old('subject') }}">
                            </label>
                        </section>

                        <section>
                            <label class="label">諮詢內容<span class="color-red">（必填）</span></label>
                            <label class="textarea input @if ($errors->has('message')) state-error @endif">
                                <i class="icon-append fa fa-comment"></i>
                                <textarea rows="4" name="message" id="message">{{ old('message') }}</textarea>
                            </label>
                        </section>
                    </fieldset>

                    <footer>
                        <button type="submit" class="btn-u">送出</button>
                    </footer>
                </form>
                <div class="margin-bottom-25"></div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger fade in">
                        @foreach($errors->all() as $error)
                            <strong>{{ $error }}</strong></br>
                        @endforeach
                    </div>
                @endif
            </div><!--/col-md-9-->

            <div class="col-md-3">
                <!-- Business Hours -->
                <div class="headline"><h2>營業時間</h2></div>
                <ul class="list-unstyled margin-bottom-30">
                    <li><strong>平日：</strong> 9am to 6pm</li>
                    <li><strong>假日：</strong> 休息</li>
                </ul>
            </div><!--/col-md-3-->
        </div><!--/row-->
    </div><!--/container-->
    <!--=== End Content Part ===-->
@endsection