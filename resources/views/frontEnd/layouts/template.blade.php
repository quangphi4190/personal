<!DOCTYPE html>
<html lang="vi">
<head>
    <?php
    use Illuminate\Support\Facades\Auth;
    $user = Auth::user();?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{url('/')}}"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description"
          content="{{$info->description}}"/>
    <meta name="generator" content="{{$info->tencongty}}"/>
    <title>{{$info->tencongty}}</title>
    <meta property="og:site_name" content="{{$info->tencongty}}" />
    <meta property="og:description" content="{{$info->description}}" />
    <meta property="og:url" content="{{url('/')}}" />
    <meta property="og:image" content="{{asset('img/favicon.ico')}}" />
    <link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <link href="{{asset('frontEnd/cloud/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/cloud/css/query.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/cloud/css/home.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/css/flaticon.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- slick css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
          integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- slick theme min css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
          integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>
<body>
@include('frontEnd.layouts.header')
<main>
    <div class="slide">
        {{--Các giải pháp nổi bật--}}
        <?php foreach ($data_system['banners'] as $banner){?>
        <div class="slide-item-save"
             style="background: #002f95 url({{ url('upload/shares/'.$banner->image) }}) no-repeat center center;">
            <div class="container">
                <div class="hero-content">
                    <h2 class="typewriter">{{$banner->title}}</h2>
                    <p>{!! $banner->description !!}</p>
                </div>
            </div>
        </div>
        <?php }?>
        {{--Thương hiệu uy tín--}}

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
                <?php foreach ($data_system['thanhphanhethongs'] as $ht){?>
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
    <div class="feature-solutions" style="background-image: url('{{url('upload/feature-solutions/bg.jpg')}}');">
        <div class="container">
            <h2 class="text-white ">ƯU ĐIỂM GIẢI PHÁP</h2>
            <p>Chuyển đổi số doanh nghiệp của bạn cùng các giải pháp sáng tạo, hiệu quả và mở rộng hệ thống để đáp ứng
                cho mọi bài toán gặp phải của doanh nghiệp</p>
            <ul class="feature-body">
                <?php foreach ($data_system['giaiphaps'] as $gp){?>
                <li>
                    <i class="{{$gp->icon}}"></i>
                    <h3>{{$gp->title}}</h3>
                    <p>{!! $gp->description !!}</p>
                </li>
                <?php }?>
            </ul>

        </div>

    </div>

    <div class="sectiontitle">
        <h2>Statistics</h2>
        <span class="headerLine"></span>
    </div>
    <div id="projectFacts" class="sectionClass">
        <div class="fullWidth eight columns">
            <div class="projectFactsWrap ">
                <?php foreach ($data_system['thongkes'] as $tk){?>
                <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
                    <i class="{{$tk->icon}}"></i>
                    <p id="number1" class="number">{{$tk->total}}</p>
                    <span></span>
                    <p>{{$tk->title}}</p>
                </div>
                <?php }?>

            </div>
        </div>
    </div>
    <div id="button-contact-vr">
        <div id="gom-all-in-one">
            <div id="zalo-vr" class="button-contact">
                <div class="phone-vr">
                    <div class="phone-vr-circle-fill"></div>
                    <div class="phone-vr-img-circle">
                        <a target="_blank" href="https://zalo.me/{{$info->phone}}">
                            <img data-src="{{url('/upload/zalo.png')}}" class=" lazyloaded" src="{{url('/upload/zalo.png')}}">
                            <noscript>
                                <img src="{{url('/upload/zalo.png')}}" />
                            </noscript>
                        </a>
                    </div>
                </div>
            </div>
            <div id="phone-vr" class="button-contact">
                <div class="phone-vr">
                    <div class="phone-vr-circle-fill"></div>
                    <div class="phone-vr-img-circle">
                        <a href="tel:{{$info->phone}}">
                            <img data-src="{{url('/upload/phone.png')}}" class=" lazyloaded" src="{{url('/upload/phone.png')}}"><noscript><img src="{{url('/upload/phone.png')}}" /></noscript>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    @include('frontEnd.layouts.usefree')--}}
    @include('frontEnd.layouts.support')

</main>
@include('frontEnd.layouts.footer')
<!-- Go to top -->
<a href="javascript:void(0)" class="scrollup" aria-label="Go To Top">&nbsp;</a>
</body>
<script src="{{ asset('frontEnd/cloud/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('frontEnd/cloud/js/slick.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('frontEnd/cloud/js/script.js') }}" type="text/javascript"></script>
<script>
    var header = $("#header-main");
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 42) {
            header.addClass("ant-affix");
        } else {
            header.removeClass("ant-affix");
        }
    });
    var sp_preloader = '0';

    var sp_gotop = '1';

    var sp_offanimation = 'default';
    // go to top
    if (typeof sp_gotop === 'undefined') {
        sp_gotop = '';
    }

    if (sp_gotop) {
        // go to top
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut(400);
            }
        });

        $('.scrollup').click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });
    } // has go to top
</script>
</html>
