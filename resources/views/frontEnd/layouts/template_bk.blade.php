<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi-vn" lang="vi-vn" dir="ltr">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- head -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{url('/')}}"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description"
          content="{{$info->description}}"/>
    <meta name="generator" content="{{$info->tencongty}}"/>
    <link href="{{asset('frontEnd/homecenter/images/no-delete/favicon.png')}}" rel="shortcut icon"/>
    <link href="{{asset('frontEnd/homecenter/css/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('frontEnd/homecenter/fonts/fontawesome-webfont.woff2')}}">
    <link href="{{asset('frontEnd/homecenter/css/centerhome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/animate.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/sppagebuilder.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/sppagecontainer.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/camera.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/magnific-popup.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/sj-basic-news.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/css.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/legacy.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/fe.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/preset1.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/pagebuilder.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/frontend-edit.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/css/main.css')}}" rel="stylesheet" type="text/css">

    <script src="{{ asset('frontEnd/homecenter/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/jquery-noconflict.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/jquery-migrate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/centerhome.frontend.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/core.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/sppagebuilder.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/jquery.easing.1.3.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/camera.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('frontEnd/homecenter/js/jquery.sticky.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/main.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/frontend-edit.js') }}" type="text/javascript"></script>

    <script type="text/javascript">

        jQuery(document).ready(function () {
            new Slideshowck('#camera_wrap_110', {
                height: '38%',
                minHeight: '150',
                pauseOnClick: false,
                hover: 1,
                fx: 'random',
                loader: 'none',
                pagination: 0,
                thumbnails: 0,
                thumbheight: 75,
                thumbwidth: 100,
                time: 7000,
                transPeriod: 1500,
                alignment: 'center',
                autoAdvance: 1,
                mobileAutoAdvance: 1,
                portrait: 0,
                barDirection: 'leftToRight',
                imagePath: '/media/com_slideshowck/images/',
                lightbox: 'mediaboxck',
                fullpage: 0,
                mobileimageresolution: '0',
                navigationHover: true,
                mobileNavHover: true,
                navigation: true,
                playPause: true,
                barPosition: 'bottom',
                responsiveCaption: 0,
                keyboardNavigation: 0,
                container: ''
            });
        });

        var sp_preloader = '0';

        var sp_gotop = '1';

        var sp_offanimation = 'default';

    </script>
    <meta content="{{$info->tencongty}}" property="og:title"/>
    <meta content="website" property="og:type"/>
    <meta content="https://centralhome.com.vn/" property="og:url"/>

</head>
<?php $curUrl = Request::path();?>
<body class="site com-sppagebuilder view-page no-layout no-task itemid-437 vi-vn ltr  sticky-header layout-fluid off-canvas-menu-init">
<div class="body-wrapper">
    <div class="body-innerwrapper">
        @include('frontEnd.layouts.header')
        <section id="sp-page-title" style="background-image: url({{url('upload/shares/images/no-delete/bg22.png')}});">
            <div class="row">
                <div id="sp-title" class="col-sm-12 col-md-12">
                    <div class="sp-column "></div>
                </div>
            </div>
        </section>
        <section id="sp-main-body">
            <div class="row">
                <div id="sp-component" class="col-sm-12 col-md-12">
                    <div class="sp-column ">
                        <div id="system-message-container"></div>
                        <div id="sp-page-builder" class="sp-page-builder  page-9">
                            <div class="page-content">
                                <div id="section-id-1568169582687" class="sppb-section ">
                                    <div class="sppb-container-inner">
                                        <div class="sppb-row">
                                            <div class="sppb-col-md-12">
                                                <div id="column-id-1568169582686" class="sppb-column">
                                                    <div class="sppb-column-addons">
                                                        <div id="sppb-addon-1568272325906" class="clearfix">
                                                            <div class="sppb-addon sppb-addon-module ">
                                                                <div class="sppb-addon-content">
                                                                    <div class="slideshowck camera_wrap camera_amber_skin" id="camera_wrap_110">
                                                                        {{--banner--}}
                                                                        <?php foreach ($banners as $banner){ ?>
                                                                        <div data-alt=""
                                                                             data-thumb="{{ url('upload/shares/'.$banner->image) }}"
                                                                             data-src="{{ url('upload/shares/'.$banner->image) }}">
                                                                        </div>

                                                                        <?php }?>
                                                                    </div>
                                                                    <div style="clear:both;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <section id="section-id-1568362986931" class="sppb-section ">
                                    <div class="sppb-row-container">
                                        <div class="sppb-section-title sppb-text-center">
                                            <h3 class="sppb-title-heading">{{$info->tencongty}}</h3>
                                            <p class="sppb-title-subheading">{!! $info->description !!} </p>
                                        </div>
                                        <div class="sppb-row">
                                            <div class="sppb-col-md-4">
                                                <div id="column-id-1568362986930" class="sppb-column">
                                                    <div class="sppb-column-addons">
                                                        <div id="sppb-addon-1568362986936" class="clearfix">
                                                            <div
                                                                    class="sppb-addon sppb-addon-single-image sppb-text-center ">
                                                                <div class="sppb-addon-content">
                                                                    <div class="sppb-addon-single-image-container">
                                                                        <img class="sppb-img-responsive"
                                                                             src="{{ url('upload/shares/'.$info->image_1) }}"
                                                                             alt="Image" title=""></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sppb-col-md-4">
                                                <div id="column-id-1568362986932" class="sppb-column">
                                                    <div class="sppb-column-addons">
                                                        <div id="sppb-addon-1568362986939" class="clearfix">
                                                            <div
                                                                    class="sppb-addon sppb-addon-single-image sppb-text-center ">
                                                                <div class="sppb-addon-content">
                                                                    <div class="sppb-addon-single-image-container">
                                                                        <img class="sppb-img-responsive"
                                                                             src="{{ url('upload/shares/'.$info->image_2) }}"
                                                                             alt="Image" title=""></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sppb-col-md-4">
                                                <div id="column-id-1568362986933" class="sppb-column">
                                                    <div class="sppb-column-addons">
                                                        <div id="sppb-addon-1568362986942" class="clearfix">
                                                            <div
                                                                    class="sppb-addon sppb-addon-single-image sppb-text-center ">
                                                                <div class="sppb-addon-content">
                                                                    <div class="sppb-addon-single-image-container">
                                                                        <img class="sppb-img-responsive"
                                                                             src="{{ url('upload/shares/'.$info->image_3) }}"
                                                                             alt="Image" title=""></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section id="section-id-1568275362338" class="sppb-section ">
                                    <div class="sppb-row-container">
                                        <div class="sppb-section-title sppb-text-center">
                                            <h3 class="sppb-title-heading">DỰ ÁN TIÊU BIỂU</h3>
                                        </div>
                                        <div class="sppb-row">
                                            <div class="sppb-col-md-12">
                                                <div id="column-id-1568275362337" class="sppb-column">
                                                    <div class="sppb-column-addons">
                                                        <div id="sppb-addon-1568275362341" class="clearfix">
                                                            <div class="sppb-addon sppb-addon-module ">
                                                                <div class="sppb-addon-content">
                                                                    <div id="sk2ModuleBox112" class="k2ItemsBlock">
                                                                        <div class="row">
                                                                            <?php foreach ($duantieubieu as $datb) {?>
                                                                            <div class="col-md-4 ">
                                                                                <div class="moduleItemIntrotext">
                                                                                    <a class="moduleItemImage"
                                                                                       href="{{route('danh-muc.chitietbaiviet', $datb->slug)}}"
                                                                                       title="{{$datb->name}}">
                                                                                        <img src="{{ url('upload/shares/'.$datb->image) }}"
                                                                                             alt="{{$datb->name}}"/>
                                                                                    </a>

                                                                                    <a class="moduleItemTitle"
                                                                                       href="{{route('danh-muc.chitietbaiviet', $datb->slug)}}">{{$datb->name}}</a>
                                                                                </div>
                                                                                <div class="clr"></div>
                                                                                <div class="clr"></div>
                                                                                <div class="clr"></div>
                                                                            </div>
                                                                            <?php }?>
                                                                            <div class="clearList"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div id="sppb-addon-1568391338197" class="clearfix">
                                                            <div class="sppb-text-center">
                                                                <a href="{{url('/du-an')}}" id="btn-1568391338197"
                                                                   class="sppb-btn  sppb-btn-custom sppb-btn-rounded">
                                                                    Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section id="section-id-1568362986944" class="sppb-section ">
                                    <div class="sppb-row-container">
                                        <div class="sppb-section-title sppb-text-center">
                                            <h2 class="sppb-title-heading">KIẾN THỨC NHÀ ĐẸP</h2>
                                        </div>
                                        <div class="sppb-row">
                                            <div class="sppb-col-md-12">
                                                <div id="column-id-1568362986943" class="sppb-column">
                                                    <div class="sppb-column-addons">
                                                        <div id="sppb-addon-1568363841288" class="clearfix">
                                                            <div class="sppb-addon sppb-addon-module ">
                                                                <div class="sppb-addon-content">

                                                                    <div id="sj_basic_news_1630056782597484353"
                                                                         class="sj-basic-news">
                                                                        <div class="row">
                                                                            <?php foreach ($kienthucnhadeps as $ktnd) {?>
                                                                            <div class="col-md-4 bs-item cf  ">
                                                                                <div class="bs-image">
                                                                                    <a href="{{route('danh-muc.tintucchitiet', $ktnd->slug)}}"
                                                                                       title=" {{$ktnd->name}}">
                                                                                        <img src="{{ url('upload/shares/'.$ktnd->image) }}"
                                                                                             alt="" title=""/> </a>
                                                                                </div>
                                                                                <div class="bs-content">
                                                                                    <div class="bs-title">
                                                                                        <a href="{{route('danh-muc.tintucchitiet', $ktnd->slug)}}"
                                                                                           title="{{$ktnd->name}}">
                                                                                            {{$ktnd->name}}
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="bs-description">
                                                                                        {{$ktnd->description}}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <?php }?>

                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Load Facebook SDK for JavaScript -->
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "112278727163263");
        chatbox.setAttribute("attribution", "biz_inbox");

        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v12.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
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
</div>
</div>

    <!-- Off Canvas Menu -->
    <div class="offcanvas-menu">
        <a href="#" class="close-offcanvas" aria-label="Close"><i class="fa fa-remove" aria-hidden="true"
                                                                  title="HELIX_CLOSE_MENU"></i></a>
        <div class="offcanvas-inner">
            <div class="sp-module " hidden="hidden">
                <h3 class="sp-module-title">Tìm kiếm</h3>
                <div class="sp-module-content">
                    <div class="search">
                        <form action="/" method="post">
                            <input name="searchword" id="mod-search-searchword" maxlength="200"
                                   class="inputbox search-query" type="text" size="20" placeholder="Search..."/> <input
                                    type="hidden" name="task" value="search"/>
                            <input type="hidden" name="option" value="com_search"/>
                            <input type="hidden" name="Itemid" value="437"/>
                        </form>
                    </div>
                </div>
            </div>
            <div class="sp-module ">
                <div class="sp-module-content">
                    <ul class="nav menu">
                        <li class="item-437  current <?php echo $curUrl == '/' ? 'active' : '' ?>"><a href="{{url('/')}}"> Trang chủ</a></li>
                        <li class="item-278 "><a href="{{url('/gioi-thieu')}}"> Giới thiệu</a></li>
                        <li class="item-553  deeper parent"><a href="{{url('/du-an')}}"> Dự án</a><span
                                    class="offcanvas-menu-toggler collapsed" data-toggle="collapse"
                                    data-target="#collapse-menu-553"><i class="open-icon fa fa-angle-down"></i><i
                                        class="close-icon fa fa-angle-up"></i></span>
                            <ul class="collapse" id="collapse-menu-553">
                                <li class="item-557"><a href="{{url('/du-an/nha-pho')}}"> Nhà phố</a></li>
                                <li class="item-565"><a href="{{url('/du-an/nha-cap-4')}}"> Nhà cấp 4</a></li>
                                <li class="item-566"><a href="{{url('/du-an/nha-tan-co-dien')}}"> Nhà tân cổ điển</a></li>
                                <li class="item-558"><a href="{{url('/du-an/biet-thu')}}"> Biệt thự</a></li>
                                <li class="item-560"><a href="{{url('/du-an/khach-san-resort')}}"> Khách sạn &amp; Resort</a>
                                </li>
                                <li class="item-559"><a href="{{url('/du-an/van-phong')}}"> Văn phòng</a></li>
                            </ul>
                        </li>
                        <li class="item-564"><a href="{{url('/bang-gia')}}"> Bảng giá</a></li>
                        <li class="item-554"><a href="{{url('/dich-vu')}}"> Dịch vụ</a></li>
                        <li class="item-555"><a href="{{url('/tin-tuc')}}"> Tin tức</a></li>
                        <li class="item-556"><a href="{{url('/lien-he')}}"> Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div> <!-- /.offcanvas-inner -->
    </div> <!-- /.offcanvas-menu -->


    <!-- Go to top -->
    <a href="javascript:void(0)" class="scrollup" aria-label="Go To Top">&nbsp;</a>


</body>

</html>
