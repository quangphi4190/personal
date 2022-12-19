@extends('frontEnd.layouts.template-detail')
@section('meta')
   <meta property="og:description" content="{{$pageTitle}} - {{$info->tencongty}}" />
   <meta property="og:image" content="{{asset('img/favicon.ico')}}"/>
   <meta property="og:site_name" content="{{$info->tencongty}}" />
   <meta property="og:description" content="{{$info->description}}" />
   <meta property="og:url" content="{{url('/')}}" />
   <meta property="og:image" content="{{asset('img/favicon.ico')}}" />
   <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
   <meta name="title" content="Giới thiệu"/>
   <meta name="author" content="Admin"/>
   <meta property="og:type" content="article"/>
   <title>{{$pageTitle}} - {{$info->tencongty}}</title>
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
                    <?php if(isset($content)){?>
                    <h4 class="details__head mb-20">{{$content->name}}</h4>
                   {{-- <i><i class="fa fa-clock-o" aria-hidden="true"></i> {{dateEnToVnFull($content->created_at)}}</i>--}}
                    <p>{!! $content->content !!}</p>
                    <?php }else {?>
                        <p class="text-center">Đang cập nhật...</p>
                    <?php }?>
                </div>

                @include('frontEnd.layouts.menu-detail')
            </div>
        </div>
    </section>
@endsection
<script>
function ShareToFaceBook(){
    var newWindow = window.open("http://www.facebook.com/sharer.php?u="+window.location.href,'','_blank');
    newWindow.focus();
    return false;
}
</script>
