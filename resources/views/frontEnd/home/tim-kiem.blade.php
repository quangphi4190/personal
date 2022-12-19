@extends('frontEnd.layouts.template-detail')
@section('pageTitle', $pageTitle )
@section('main')
    <div class="breadcrumb-detail">
        <ul>
            <li><a href="{{url('/')}}" title="@lang('message.textPage')"> Trang chủ</a></li>
            <li><a class="selected"  href="{{url('tim-kiem')}}">Kết quả tìm kiếm</a></li>
        </ul>
    </div>
    <div class="col-md-8 ftco-animate">
        <div class="feature">
            <h5 class="font-weight-bold">{{$pageTitle }} : {{sizeof($news)}}</h5>
            <?php if(sizeof($news)>0):?>
                <?php foreach ($news as $t):?>
                <article class="story story--primary" style="height: 100px;">
                    <a href="{{route('danh-muc.chitietbaiviet', $t->slug)}}" title="{{$t->name}}" class="story__thumb"><img style="width: 100%;
                        height: 100px;" src="{{ url('upload/shares/'.$t->image) }}" alt="{{$t->name}}" class="loading" data-was-processed="true"></a>
                    <p class="mb-0"><a href="{{route('danh-muc.chitietbaiviet', $t->slug)}}" title="{{$t->name}}" class="story__title">{{$t->name}}</a></p>
                    <div class="meta">
                        <time class="timebox done">{{dateEnToVnFull($t->created_at)}}</time>
                    </div>
                </article>
                <?php endforeach;?>
            <?php else:?>
            <p class="text-center">Không có dữ liệu</p>
            <?php endif;?>
        </div>
    </div>
@endsection
