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
    {{--<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description"
          content="{{$info->description}}"/>
    <meta name="generator" content="{{$info->tencongty}}"/>
    <title>{{$info->tencongty}}</title>
    <meta property="og:site_name" content="{{$info->tencongty}}" />
    <meta property="og:description" content="{{$info->description}}" />
    <meta property="og:url" content="{{url('/')}}" />--}}
    @yield('meta')
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
    <script src="{{ asset('frontEnd/gtech/js/jssor.slider-26.5.0.min.js') }}" type="text/javascript"></script>

</head>

<body>
@include('frontEnd.layouts.header')

@yield('main')
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
@include('frontEnd.layouts.footer')
<!-- Go to top -->
<a href="javascript:void(0)" class="scrollup" aria-label="Go To Top">&nbsp;</a>
</body>
<!-- jquery  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer">
</script>
<!-- slick min script  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('frontEnd/cloud/js/script.js') }}" type="text/javascript"></script>


<script>
    var header = $("#header-main");
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 112) {
            header.addClass("ant-affix");
        } else {
            header.removeClass("ant-affix");
        }
    });
    /*--*/
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
<?php $curUrl = Request::path();
if($curUrl == 'gioi-thieu'){?>
<script type="text/javascript">
    $(function() {
        $('body').addClass('introduce-page');
    });

</script>
<?php }elseif ($curUrl ==  'affiliate'){?>
<script type="text/javascript">
    $(function() {
        $('body').addClass('affiliate-page');
    });

</script>
<?php }elseif ($curUrl ==  'pricing'){?>
<script type="text/javascript">
    $(function() {
        $('body').addClass('pricing-page');
    });

</script>
<?php }elseif ($curUrl ==  'giai-phap'){?>
<script type="text/javascript">
    $(function() {
        $('body').addClass('solution-page');
    });

</script>

<?php } ?>

</html>
