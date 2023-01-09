@extends('frontEnd.layouts.template_page')
@section('meta')
    <meta property="og:description" content="{{$content->name}}" />
    <meta property="og:image" content="{{url('upload/shares/'.$content->image)}}" />
    <meta property="og:url" content="{{route('danh-muc.chitietbaiviet', $content->slug)}}" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="title" content="{{$content->description}}"/>
    <meta name="author" content="Admin"/>
    <meta property="og:title" content="{{$content->description}}"/>
    <meta property="og:type" content="article"/>
    <meta property="og:image"
          content="{{url('upload/shares/'.$content->image)}}"/>
    <meta name="image" content="{{url('upload/shares/'.$content->image)}}"/>
    <meta property="og:description"
          content="{{$content->description}}"/>
    <meta name="description"
          content="{{$content->description}}"/>
    <title>{{$content->name}}</title>
@endsection
<?php $curUrl = Request::path();?>
@section('pageTitle', $pageTitle )
@section('main')
    <main>
        <div>
            <div class="section-bannersolution">
                <div class="container">
                    <div class="mainbanner-content">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                <div class="section-title banner-title"><h1 class="mb-0 mt-0">{{$content->description}}</h1></div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12"></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="section" id="web_hosting">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-12"><h2 class="web-hosting__title">{{$content->name}}</h2>
                            {!! $content->content !!}
                        </div>
                    </div>
                </div>
            </div>
            <section id="system" class="pt-0 section">
                <div class="container row-custom">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 mb-4 mb-sm-0">
                            <div class="ot-heading mb-0">
                                <h2 class="main-heading">THÀNH PHẦN HỆ THỐNG</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach ($thanhphanhethongs as $ht){?>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="icon-box-s2 s1 pb-60">
                                <div class="icon-main">
                                    <i class="{{$ht->icon}}"></i>
                                </div>
                                <div class="content-box">
                                    <h5>{{$ht->title}}</h5>
                                    <p>{!! $ht->description !!}</p>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </section>
            @include('frontEnd.layouts.support')
        </div>
    </main>

@endsection
<script>
    function ShareToFaceBook() {
        var newWindow = window.open("http://www.facebook.com/sharer.php?u=" + window.location.href, '', '_blank');
        newWindow.focus();
        return false;
    }
</script>
