@extends('frontEnd.layouts.template-detail')
@section('meta')
    {{--<meta property="og:title" content="{{$event->name}}" />--}}
    {{--<meta property="og:description" content="{{$event->intro}}" />--}}
    <meta property="og:description" content="{{$news->name}}" />
    <meta property="og:image" content="{{url('upload/shares/'.$news->image)}}" />
    <meta property="og:url" content="{{route('danh-muc.bai-viet', $news->id)}}" />

@endsection
@section('pageTitle', $pageTitle )
@section('main')
    <div class="breadcrumb-detail">
        <ul>

            <li><a href="{{url('/')}}" title=""> Trang chủ</a></li>

            <li><a class="selected"  href="{{route('danh-muc.bai-viet', $news->id)}}">Bài viết</a></li>


        </ul>
    </div>
    <div class="col-md-8 ftco-animate">
        <h1 class="details__head">{{$news->name}}</h1>
        <i><i class="fa fa-clock-o" aria-hidden="true"></i> {{dateEnToVnFull($news->created_at)}}</i>
        <p>{!! $news->content !!}</p>
    </div>

@endsection
