@extends('frontEnd.layouts.template-detail')
@section('pageTitle', $pageTitle )
@section('main')
    <div class="breadcrumb-detail">
        <ul>
            <li><a href="{{url('/')}}" title=""> Trang chủ</a></li>
            <li><a class="selected" href="{{route('home.list-data-photo')}}">Hình ảnh hoạt động</a></li>
        </ul>
    </div>
    <div class="col-md-8 ftco-animate">

        <div class="feature">
            <h4 class="font-weight-bold f-1-2rem pb-4"><i class="fa fa-newspaper-o" aria-hidden="true"></i> {{$pageTitle}}</h4>
            <?php if(sizeof($photos)>0):?>
                <?php foreach ($photos as $photo):?>
                <article class="story story--primary" style="height: 100px;">
                    <a href="{{route('hinh-anh-hoat-dong.chitietbaiviet', $photo->id)}}" title="{{$photo->title}}" class="story__thumb"><img style="width: 100%;
                        height: 100px;" src="{{ url('upload/shares/'.$photo->image) }}" alt="{{$photo->title}}" class="loading" data-was-processed="true"></a>
                    <p class="mb-0"><a href="{{route('hinh-anh-hoat-dong.chitietbaiviet', $photo->id)}}" title="{{$photo->name}}" class="story__title">{{$photo->title}}</a></p>
                    <div class="meta">
                        <time class="timebox done">{{dateEnToVnFull($photo->created_at)}}</time>
                    </div>
                </article>
                <?php endforeach;?>
            {{ $photos->links()}}
            <?php else:?>
            <p class="text-center">Đang cập nhật...</p>
            <?php endif;?>
        </div>
    </div>
@endsection
