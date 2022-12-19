<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi-vn" lang="vi-vn" dir="ltr">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('meta')
    <link href="{{asset('frontEnd/homecenter/images/no-delete/favicon.png')}}" rel="shortcut icon"/>


    <link href="{{asset('frontEnd/css/main.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('frontEnd/homecenter/css/magnific-popup.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('frontEnd/homecenter/css/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('frontEnd/homecenter/css/centerhome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/simplebox.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/fe.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/print.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/css.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/legacy.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/fe.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/preset1.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/frontend-edit.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/homecenter/css/mod_accordeonck_css.css')}}" rel="stylesheet" type="text/css">

    <style type="text/css">

        .mfp-iframe-holder {
            padding: 10px;
        }

        .mfp-iframe-holder .mfp-content {
            max-width: 100%;
            width: 100%;
            height: 100%;
        }

        .mfp-iframe-scaler iframe {
            background: #fff;
            padding: 10px;
            box-sizing: border-box;
            box-shadow: none;
        }

        body {
            font-family: Roboto, sans-serif;
            font-size: 15px;
            font-weight: normal;
        }


        #sp-bottom {
            background-color: #373737;
            color: #ffffff;
            padding: 35px 0px 15px;
        }

        #sp-bottom a {
            color: #ffffff;
        }

        #sp-bottom a:hover {
            color: #ffffff;
        }

        #sp-footer {
            background-color: #0e0f0f;
            color: #ffffff;
            padding: 5px 0;
        }

        #sp-footer a {
            color: #ffffff;
        }

        #sp-footer a:hover {
            color: #ffffff;
        }

        #accordeonck124 li > .accordeonck_outer .toggler_icon {
            outline: none;
            background: url(upload/shares/images/no-delete/icon5.png) right center no-repeat !important;
        }

        #accordeonck124 li.open > .accordeonck_outer .toggler_icon {
            background: url(upload/shares/images/no-delete/icon6.png) right center no-repeat !important;
        }

        #accordeonck124 li ul li ul li ul {
            border: none !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }

        #accordeonck124 {
            padding: unset!important;
            margin: 0px;
            -moz-border-radius: 5px 5px 5px 5px;
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
            -moz-box-shadow: 0px 0px 3px 0px #444444;
            -webkit-box-shadow: 0px 0px 3px 0px #444444;
            box-shadow: 0px 0px 3px 0px #444444;
        }

        #accordeonck124 li.parent > span {
            display: block;
            position: relative;
        }

        #accordeonck124 li.parent > span span.toggler_icon {
            position: absolute;
            cursor: pointer;
            display: block;
            height: 100%;
            z-index: 10;
            right: 0;
            background: none;
            width: 20px;
        }

        #accordeonck124 li.level1 {
            padding: 0px;

            margin: 0px;
            -moz-border-radius: 0px 0px 0px 0px;
            -webkit-border-radius: 0px 0px 0px 0px;
            border-radius: 0px 0px 0px 0px;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        #accordeonck124 li.level1 > .accordeonck_outer a {
            font-size: 14px;
        }

        #accordeonck124 li.level1 > .accordeonck_outer a:hover {
        }

        #accordeonck124 li.level1 > .accordeonck_outer a span.accordeonckdesc {
            font-size: 10px;
        }

        #accordeonck124 li.level2 {
            padding: 0px;
            margin: 0px;
            -moz-border-radius: 0px 0px 0px 0px;
            -webkit-border-radius: 0px 0px 0px 0px;
            border-radius: 0px 0px 0px 0px;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        #accordeonck124 li.level2 > .accordeonck_outer a {
            font-size: 14px;
        }

        #accordeonck124 li.level2 > .accordeonck_outer a:hover {
        }

        #accordeonck124 li.level2 > .accordeonck_outer a span.accordeonckdesc {
            font-size: 14px;
        }

        #accordeonck124 li.level3 {
            padding: 0px;
            margin: 0px;
            -moz-border-radius: 0px 0px 0px 0px;
            -webkit-border-radius: 0px 0px 0px 0px;
            border-radius: 0px 0px 0px 0px;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        #accordeonck124 li.level3 .accordeonck_outer a {
            font-size: 14px;
        }

        #accordeonck124 li.level3 .accordeonck_outer a:hover {
        }

        #accordeonck124 li.level3 .accordeonck_outer a span.accordeonckdesc {
            font-size: 14px;
        }
    </style>
    <script src="{{ asset('frontEnd/homecenter/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/jquery-noconflict.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/jquery-migrate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/centerhome.frontend.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/mootools-core.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/simplebox.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/jssor.slider-26.5.0.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/behaviour.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/jquery.sticky.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/main.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/frontend-edit.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/jquery.ui.core.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/mod_accordeonck.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontEnd/homecenter/js/jquery.easing.1.3.js') }}" type="text/javascript"></script>

    <script type="text/javascript">

        var sp_preloader = '0';

        var sp_gotop = '1';

        var sp_offanimation = 'default';

        jQuery(document).ready(function (jQuery) {
            jQuery('#accordeonck124').accordeonmenuck({
                fadetransition: false,
                eventtype: 'click',
                transition: 'linear',
                menuID: 'accordeonck124',
                imageplus: '../images/no-delete/icon5.png',
                imageminus: '/images/no-delete/icon6.png',
                defaultopenedid: '',
                activeeffect: '',
                showcounter: '',
                duree: 500
            });
        });
        jQuery(function ($) {
            initTooltips();
            $("body").on("subform-row-add", initTooltips);

            function initTooltips(event, container) {
                container = container || document;
                $(container).find(".hasTooltip").tooltip({"html": true, "container": "body"});
            }
        });
    </script>

</head>

<body class="site com-k2 view-item no-layout no-task itemid-558 vi-vn ltr  sticky-header layout-fluid off-canvas-menu-init">
<?php $curUrl = Request::path();?>
<div class="body-wrapper">
    <div class="body-innerwrapper">
        @include('frontEnd.layouts.header')

        @yield('main')
        @include('frontEnd.layouts.footer')
    </div> <!-- /.body-innerwrapper -->
</div> <!-- /.body-innerwrapper -->

<!-- Off Canvas Menu -->
<div class="offcanvas-menu">
    <a href="#" class="close-offcanvas" aria-label="Close"><i class="fa fa-remove" aria-hidden="true"
                                                              title="HELIX_CLOSE_MENU"></i></a>
    <div class="offcanvas-inner">
        <div class="sp-module " hidden="hidden">
            <h3 class="sp-module-title" >Tìm kiếm</h3>
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

<!--Start of Tawk.to Script-->
{{--<a onclick="return gtag_report_conversion('tel:0931393270');" href="tel: {{$info->phone}}" class="fancybox">
    <div class="coccoc-alo-phone coccoc-alo-green coccoc-alo-show" id="coccoc-alo-phoneIcon"
         style="left:0px; bottom: 0px;">
        <div class="coccoc-alo-ph-circle"></div>
        <div class="hotline_call"></div>
        <div class="coccoc-alo-ph-circle-fill"></div>
        <div class="coccoc-alo-ph-img-circle"></div>
    </div>
</a>--}}

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


<!-- Preloader -->


<!-- Go to top -->
<a href="javascript:void(0)" class="scrollup" aria-label="Go To Top">&nbsp;</a>

</body>
</html>
