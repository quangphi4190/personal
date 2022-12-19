@extends('frontEnd.layouts.template-detail')
@section('meta')
    <meta property="og:description" content="Tin tức - {{$info->tencongty}}" />
    <meta property="og:image" content="{{asset('img/favicon.ico')}}"/>
    <meta property="og:site_name" content="{{$info->tencongty}}" />
    <meta property="og:description" content="{{$info->description}}" />
    <meta property="og:url" content="{{url('/')}}" />
    <meta property="og:image" content="{{asset('img/favicon.ico')}}" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="title" content="Tin tức"/>
    <meta name="author" content="Admin"/>
    <meta property="og:type" content="article"/>
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
                    <?php if(isset($new)){?>
                    <h4 class="details__head">{{$new->name}}</h4>
                    <i><i class="fa fa-clock-o" aria-hidden="true"></i> {{dateEnToVnFull($new->created_at)}}</i>
                    <p>{!! $new->content !!}</p>
                    <?php }else {?>
                    <p class="text-center">Đang cập nhật...</p>
                    <?php }?>
                </div>

                @include('frontEnd.layouts.menu-detail')
            </div>
        </div>
    </section>
    <?php if(isset($tinkhacs)):?>
    <section class="zone zone--suggest container pt-4">
        <header class="zone__heading">
            <h4 class="heading">TIN KHÁC</h4>
        </header>
        <div class="zone__body row">

            <?php foreach ($tinkhacs as $tinkhac):?>
            <article class="story col-lg-3 col-md-12 col-sm-12">
                <a class="story__thumb h-auto" href="{{route('danh-muc.tintucchitiet', $tinkhac->slug)}}">
                    <img class="img-other" src="{{ url('upload/shares/'.$tinkhac->image) }}">
                </a>
                <h2 class="title-other">
                    <a class="story__title cms-link" href="{{route('danh-muc.tintucchitiet', $tinkhac->slug)}}">{{$tinkhac->name}}</a>
                </h2>
            </article>
            <?php endforeach;?>

        </div>

    </section>
    <?php endif;?>
@endsection
<script>
    function ShareToFaceBook(){
        var newWindow = window.open("http://www.facebook.com/sharer.php?u="+window.location.href,'','_blank');
        newWindow.focus();
        return false;
    }
</script>
