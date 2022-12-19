@extends('frontEnd.layouts.template-detail')
@section('meta')
    <meta property="og:description" content="{{$pageTitle}} - {{$info->tencongty}}" />
    <meta property="og:image" content="{{asset('img/favicon.ico')}}"/>
    <meta property="og:site_name" content="{{$info->tencongty}}" />
    <meta property="og:description" content="{{$info->description}}" />
    <meta property="og:url" content="{{url('/')}}" />
    <meta property="og:image" content="{{asset('img/favicon.ico')}}" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="title" content="Tin tức"/>
    <meta name="author" content="Admin"/>
    <meta property="og:type" content="article"/>
    <title>{{$pageTitle}} - {{$info->description}}</title>
@endsection
<?php $curUrl = Request::path();?>
@section('pageTitle', $pageTitle )
@section('main')
    <section id="sp-page-title" style="background-image: url({{url('upload/shares/images/no-delete/bg22.png')}});">
        <div class="row">
            <div id="sp-title" class="col-sm-12 col-md-12">
                <div class="sp-column ">
                    <div class="sp-page-title">
                        <div class="container"><h2>{{$pageTitle}}</h2>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i></li>
                                <li><a href="/" class="pathway">Trang chủ</a></li>
                                <li class="active">{{$pageTitle}}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sp-main-body">
        <div class="container">
            <div class="row">
                <div id="sp-component" class="col-sm-9 col-md-9">
                    @include('flash-message')
                    <h3 class="details__head pb-2 text-center" style="text-transform: uppercase"> {{$pageTitle}}</h3>
                    <form action="{{ route('home.form_lien_he') }}" class="order-sm-start order-lg-last mt-4 form-contact" method = "POST" >
                        @csrf

                        <div class="form-group">
                            <label for="exampleFormControlFullname">Họ tên <span class="text-danger">*</span></label>
                            <input type="text" required class="form-control" name="name" id="exampleFormControlFullname" placeholder="Nhập họ tên">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlEmail">Email</label>
                            <input type="email" class="form-control" name="email" id="exampleFormControlEmail" placeholder="Nhập số Email">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlPhone">Số điện thoại <span class="text-danger">*</span></label>
                            <input type="tel" pattern="[0-9]{10}" required class="form-control" name="phone" id="exampleFormControlPhone" placeholder="Nhập số điện thoại">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlChuDe">Chủ đề</label>
                            <input type="text" class="form-control" name="title" id="exampleFormControlChuDe" placeholder="Nhập chủ để">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlContent">Nội dung tư vấn <span class="text-danger">*</span></label>
                            <textarea class="form-control" required name="message" id="exampleFormControlContent" rows="9" placeholder="Vui lòng để lại nội dung cần tư vấn "></textarea>
                        </div>
                        <h5>{{$info->text_contact}}</h5>
                        <div class="form-row align-items-center">
                            <div class="col-auto offset-md-5 text-center">
                                <button type="submit" class="btn btn-contact mb-2">Gửi</button>
                            </div>
                        </div>
                        <p>
                    </form>
                </div>
                @include('frontEnd.layouts.menu-detail')
            </div>
        </div>
    </section>
@endsection

