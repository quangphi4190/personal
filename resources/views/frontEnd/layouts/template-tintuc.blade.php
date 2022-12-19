<!DOCTYPE html>
<html lang="en">
<head>
    <title>@lang('message.textPage')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:site_name" content="{{$info->tencongty}}" />
    <meta property="og:description" content="{{$info->description}}" />
    @yield('meta')
    <link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('frontEnd/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/css/flickity-docs.css_6.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datepicker.css') }}" rel="stylesheet">

</head>
<body>
<?php $curUrl = Request::path();?>
@include('frontEnd.layouts.header')
<!-- END nav -->
<div class="container">

    <section class="ftco-section pb-0 pt-0 detail-new">
        <div class="container">
            <div class="row d-flex">
                @yield('main')

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
                    <a class="story__thumb h-auto" href="{{route('danh-muc.chitietbaiviet', $tinkhac->slug)}}">
                        <img class="img-other" src="{{ url('upload/shares/'.$tinkhac->image) }}">
                    </a>
                    <h2 class="f-1-2rem">
                        <a class="story__title cms-link" href="{{route('danh-muc.chitietbaiviet', $tinkhac->slug)}}">{{$tinkhac->name}}</a>
                    </h2>
                </article>
            <?php endforeach;?>

            </div>

    </section>
    <?php endif;?>
 </div>
<div id="button-contact-vr">
    <div id="gom-all-in-one">
        <div id="zalo-vr" class="button-contact">
            <div class="phone-vr">
                <div class="phone-vr-circle-fill"></div>
                <div class="phone-vr-img-circle">
                    <a target="_blank" href="https://zalo.me/0919172720">
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
                    <a href="tel:0919172720">
                        <img data-src="{{url('/upload/phone.png')}}" class=" lazyloaded" src="{{url('/upload/phone.png')}}"><noscript><img src="{{url('/upload/phone.png')}}" /></noscript>
                    </a>
                </div>
            </div>
        </div>
    </div>
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
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('frontEnd/js/flickity-docs.min.js') }}"></script>
<script type="text/javascript">
   /* var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/61153c90d6e7610a49afe736/1fctf95f3';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();*/
</script>
<script>
    $('.sub-menu ul').hide();
    $(".sub-menu a").click(function () {
        $(this).parent(".sub-menu").children("ul").slideToggle("100");
        $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
    });
    $(function () {
        $("#datepicker").datepicker({
            format: 'dd/mm/yyyy'
        })
    });
    $(function () {
        $("#datepickeBirthday input").datepicker({
            format: 'dd/mm/yyyy'
        })
    });

</script>

</body>
</html>
