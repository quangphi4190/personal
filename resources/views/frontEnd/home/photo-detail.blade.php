@extends('frontEnd.layouts.template-detail')
@section('meta')
    {{--<meta property="og:title" content="{{$event->name}}" />--}}
    {{--<meta property="og:description" content="{{$event->intro}}" />--}}
    <meta property="og:description" content="{{$photo->title}}" />
    <meta property="og:image" content="{{url('upload/shares/'.$photo->image)}}" />
    <meta property="og:url" content="{{route('hinh-anh-hoat-dong.chitietbaiviet', $photo->id)}}" />

@endsection
@section('pageTitle', $pageTitle )
@section('main')
    <div class="breadcrumb-detail">
        <ul>

            <li><a href="{{url('/')}}" title=""> Trang chủ</a></li>
            <li><a class="selected"  href="{{route('home.list-data-photo')}}">Hình ảnh hoạt động</a></li>
            {{--<li><a class="selected" href="{{route('hinh-anh-hoat-dong.chitietbaiviet', $photo->id)}}">{{$photo->title}}</a></li>--}}

        </ul>
    </div>
    <div class="col-md-8 ftco-animate">
        <h1 class="details__head">{{$photo->title}}</h1>
        <i><i class="fa fa-clock-o" aria-hidden="true"></i> {{dateEnToVnFull($photo->created_at)}}</i>
        <p>{!! $photo->description !!}</p>
    </div>
@endsection
