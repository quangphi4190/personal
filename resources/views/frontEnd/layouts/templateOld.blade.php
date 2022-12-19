<!DOCTYPE html>
<html lang="en">
<head>
    <title>@lang('message.textPage')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('frontEnd/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/css/style.css') }}" rel="stylesheet">
    {{--<link href="{{ asset('css/datepicker.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="https://swiperjs.com/package/css/swiper.min.css">
    <meta property="og:site_name" content="{{$info->tencongty}}" />
    <meta property="og:description" content="{{$info->description}}" />
    <meta property="og:url" content="{{url('/')}}" />
    <meta property="og:image" content="{{asset('img/favicon.ico')}}" />
    <!-- Stylesheets -->
</head>
<body>
<?php $curUrl = Request::path();?>
@include('frontEnd.layouts.header')
<!-- END nav -->
<div class="container">
    <div class="hero-wrap">
        <div class="home-slider owl-carousel">
            <?php foreach ($banners as $banner):?>
            <div class="slider-item" style="background-image:url({{ url('upload/shares/'.$banner->image) }})">
                <div class="overlay"></div>
                <div class="content-banner">
                    <h2 class="title-banner"><a href="{{route('danh-muc.bai-viet', $banner->id)}}">{{$banner->title}}</a></h2>
{{--                    <p class="f-16"><a href="{{route('danh-muc.bai-viet', $banner->id)}}">{{$banner->subTitle}}</a></p>--}}
                </div>

            </div>
            <?php endforeach;?>
            {{--<div class="slider-item" style="background-image:url(images/bg_2.jpg);">--}}
                {{--<div class="overlay"></div>--}}
                {{--<div class="container">--}}
                    {{--<div class="row no-gutters slider-text align-items-center justify-content-center">--}}
                        {{--<div class="col-md-8 ftco-animate">--}}
                            {{--<div class="text w-100 text-center">--}}
                                {{--<h2>We Support Business</h2>--}}
                                {{--<h1 class="mb-4">The Best Business Support</h1>--}}
                                {{--<p><a href="#" class="btn btn-white">Connect with us</a></p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="slider-item" style="background-image:url(images/bg_3.jpg);">--}}
                {{--<div class="overlay"></div>--}}
                {{--<div class="container">--}}
                    {{--<div class="row no-gutters slider-text align-items-center justify-content-center">--}}
                        {{--<div class="col-md-8 ftco-animate">--}}
                            {{--<div class="text w-100 text-center">--}}
                                {{--<h2>We Give Advice</h2>--}}
                                {{--<h1 class="mb-4">Expert Financial Advice</h1>--}}
                                {{--<p><a href="#" class="btn btn-white">Connect with us</a></p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
    <section class="ftco-section pb-0 pt-2">
        <font class="d-flex " style="background: linear-gradient(to right,#FF9800, #ffc107 );"><span class="head-breaking"> <i class="fa fa-bullhorn"></i></span>
            {{--<marquee direction="left" >--}}
            <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
               <?php foreach ($thongbaoBreakings as $thongbaoBreaking):?>
                        <span class="indent"><a href="{{route('danh-muc.chitietbaiviet', $thongbaoBreaking->slug)}}"> {{$thongbaoBreaking->name}}</a></span>
                <?php endforeach;?>
            </marquee>
        </font>
    </section>
    <section class="ftco-section pb-0">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-md-6 heading-section text-center ftco-animate">
                    <h4 class="subheading tinnoibat">Tin nổi bật</h4>
                    <hr>
                </div>
            </div>
            <div class="row d-flex">
                <?php foreach ($tinnoibat as $tinnb):?>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{route('danh-muc.chitietbaiviet', $tinnb->slug)}}" class="block-20 rounded" style="background-image: url({{ url('upload/shares/'.$tinnb->image) }});">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="{{route('danh-muc.chitietbaiviet', $tinnb->slug)}}"><i class="fa fa-clock-o" aria-hidden="true"></i> {{dateVN($tinnb->created_at)}}</a></div>
                            </div>
                            <h3 class="heading"><a href="{{route('danh-muc.chitietbaiviet', $tinnb->slug)}}">{{$tinnb->description}}</a></h3>
                            <p class="pull-right font-weight-bold"><a href="{{route('danh-muc.chitietbaiviet', $tinnb->slug)}}">Xem chi tiết <i class="fa fa-hand-o-right" aria-hidden="true"></i></a></p>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>

    <section class="ftco-section pb-0 pt-0">
        <div class="container container-event">
            <div class="row d-flex">
                <div class="col-md-8 ftco-animate">
                    <div class="heading-section text-center ftco-animate">
                        <span class="subheading pb-2">Tin Tức &amp; Sự kiện</span>

                    </div>
                    <div class="highlight">
                        <div class="focus skien">
                            <article class="story">
                                <a class="story__thumb" href="{{route('danh-muc.chitietbaiviet', $newEventNoiBat->slug)}}">
                                    <img class="w-100" src="{{ url('upload/shares/'.$newEventNoiBat->image) }}">
                                </a>
                                <div class="meta-event">
                                    <h2 class="f16">
                                        <a class="story__title_event cms-link" href="{{route('danh-muc.chitietbaiviet', $newEventNoiBat->slug)}}">{{$newEventNoiBat->name}}</a>
                                    </h2>

                                </div>
                            </article>
                        </div>
                        <div class="row-event">
                            <?php foreach ($newEvents as $newEvent):?>
                            <div class="col-md-6 col-lg-3 col-xs-12 ftco-animate">
                                <div class="block-7 mb-0">
                                    <div class="text">
                                        <a href="{{route('danh-muc.chitietbaiviet', $newEvent->slug)}}" class="story__thumb br-4">
                                            <img src="{{ url('upload/shares/'.$newEvent->image) }}">
                                        </a>
                                        <h3 class="heading pt-2 pb-2 h-event">
                                            <a class="story__title_event cms-link" href="{{route('danh-muc.chitietbaiviet', $newEvent->slug)}}">{{$newEvent->description}} </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">

                    <div class="blog-entry align-self-stretch">
                        <div class="heading-section text-center ftco-animate">
                            <span class="subheading pb-2">Thông báo <i class="fa fa-bullhorn" aria-hidden="true"></i> </span>
                        </div>
                        <div class="new-tb">
                            <?php foreach ($thongbaos as $tb):?>
                            <article class="story story--primary">
                                <a href="{{route('danh-muc.chitietbaiviet', $tb->slug)}}" title="{{$tb->name}}" class="story__thumb"><img style="width: 100%;
                                    height: 100px;" src="{{ url('upload/shares/'.$tb->image) }}" alt="{{$tb->name}}" class="loading" data-was-processed="true"></a>
                                <p class="mb-0"><a href="{{route('danh-muc.chitietbaiviet', $tb->slug)}}" title="{{$tb->name}}" class="story__title">{{$tb->name}}</a></p>
                                <div class="meta">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>  <time class="timebox done">{{dateEnToVnFull($tb->created_at)}}</time>
                                </div>
                            </article>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light mg-38">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Hình ảnh hoạt động</span>
                </div>
            </div>
            <div class="large-12 columns ftco-animate">
                <div class="owl-carousel owl-theme">
                    <?php foreach ($hinhanhhoatdongs as $hinhanhhoatdong):?>
                    <div class="item " style="height: 196px">
                        <a href="{{route('hinh-anh-hoat-dong.chitietbaiviet', $hinhanhhoatdong->id)}}" class="story__thumb">
                            <img  class="responsive" style="height: 100%" src="{{ url('upload/shares/'.$hinhanhhoatdong->image) }}">
                        </a>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
 </section>
</div>
@include('frontEnd.layouts.footer')
<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<script src="{{ asset('frontEnd/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontEnd/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('frontEnd/js/popper.min.js') }}"></script>
<script src="{{ asset('frontEnd/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontEnd/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('frontEnd/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('frontEnd/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('frontEnd/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('frontEnd/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontEnd/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontEnd/js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('frontEnd/js/google-map.js') }}"></script>
<script src="{{ asset('frontEnd/js/main.js') }}"></script>
<script src="https://swiperjs.com/package/js/swiper.min.js"></script>
<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:4,
                    nav:true,
                    loop:false
                }
            }
        });
    })

</script>
</body>
</html>
