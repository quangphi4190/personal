@extends('frontEnd.layouts.template_page')
@section('meta')
    <meta property="og:description" content="{{$content->name}}" />
    <meta property="og:image" content="{{url('upload/shares/'.$content->description)}}" />
    <meta property="og:url" content="{{route('danh-muc.chitietbaiviet', $content->slug)}}" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="title" content="{{$content->description}}"/>
    <meta name="author" content="Admin"/>
    <meta property="og:title" content="{{$content->description}}"/>
    <meta property="og:type" content="article"/>
    <meta property="og:image"
          content="{{url('upload/shares/'.$content->image)}}"/>
    <meta name="image" content="{{url('upload/shares/'.$content->image)}}"/>
    <meta property="og:description"
          content="{{$content->description}}"/>
    <meta name="description"
          content="{{$content->description}}"/>
    <title>{{$content->name}}</title>
@endsection
<?php $curUrl = Request::path();?>
@section('pageTitle', $pageTitle )
@section('main')
    <main>
        <div>
            <div class="section-bannersolution">
                <div class="container">
                    <div class="mainbanner-content">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                <div class="section-title banner-title"><h1 class="mb-0 mt-0">{{$content->description}}</h1></div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12"></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="section" id="web_hosting">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-12"><h2 class="web-hosting__title">{{$content->name}}</h2>
                            {!! $content->content !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="web_mobile_app">
                <div class="container">
                    <div class="section-title text-center"><h2 class="section-title__title text-center">WEB &amp; MOBILE
                            APPS</h2>
                        <div class="section-title__description max-width-50">Hệ thống hỗ trợ đa dạng các ứng dụng được
                            cài đặt sẵn. Giúp rút ngắn thời gian triển khai trên một máy chủ mới
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12 web-mobile-app__col-left">
                            <div class="d-flex">
                                <div class="checkmark-blue mtop-3px"></div>
                                <p class="description mt-0">Xây dựng nhanh chóng các máy chủ Frontend/Backend của Web và
                                    ứng dụng di động của bạn bằng cách sử dụng nền tảng đám mây được thiết kế dành cho
                                    nhà phát triển</p></div>
                            <div class="d-flex">
                                <div class="checkmark-blue mtop-3px"></div>
                                <p class="description mt-0">Hệ thống hỗ trợ đa dạng các ứng dụng được cài đặt sẵn. Giúp
                                    rút ngắn thời gian triển khai trên một máy chủ mới</p></div>
                            <div class="d-flex">
                                <div class="checkmark-blue mtop-3px"></div>
                                <p class="description mt-0">Tương thích hoàn toàn với các ngôn ngữ lập trình và hệ quản
                                    trị cơ sở dữ liệu như Python, Nodejs, Java, PHP, MySQL, SQL Server</p></div>
                            <div class="row mt-4">
                                <div class="col-4 mb-1 d-flex justify-content-center">
                                    <img alt="python"
                                           srcset="{{url('upload/image/solution/python.svg')}} 1x, {{url('upload/image/solution/python.svg')}} 2x"
                                           src="{{url('upload/image/solution/python.svg')}}"
                                           width="90" height="70"
                                           decoding="async"
                                           data-nimg="1" loading="lazy"
                                           style="color: transparent;">
                                </div>
                                <div class="col-4 mb-1 d-flex justify-content-center">
                                    <img alt="nodejs"
                                           srcset="{{url('upload/image/solution/notejs.svg')}} 1x, {{url('upload/image/solution/notejs.svg')}} 2x"
                                           src="{{url('upload/image/solution/notejs.svg')}}"
                                           width="90" height="70"
                                           decoding="async"
                                           data-nimg="1" loading="lazy"
                                           style="color: transparent;">
                                </div>
                                <div class="col-4 mb-1 d-flex justify-content-center">
                                    <img alt="java"
                                       srcset="{{url('upload/image/solution/java.svg')}} 1x, {{url('upload/image/solution/java.svg')}} 2x"
                                       src="{{url('upload/image/solution/java.svg')}}"
                                       width="90" height="70"
                                       decoding="async"
                                       data-nimg="1" loading="lazy"
                                       style="color: transparent;">
                                </div>
                                <div class="col-4 mb-1 d-flex justify-content-center">
                                    <img alt="mysql"
                                       srcset="{{url('upload/image/solution/mysql.svg')}} 1x, {{url('upload/image/solution/mysql.svg')}} 2x"
                                       src="{{url('upload/image/solution/mysql.svg')}}"
                                       width="90" height="70"
                                       decoding="async"
                                       data-nimg="1" loading="lazy"
                                       style="color: transparent;">
                                </div>
                                <div class="col-4 mb-1 d-flex justify-content-center">
                                    <img alt="php"
                                           srcset="{{url('upload/image/solution/php.svg')}} 1x, {{url('upload/image/solution/php.svg')}} 2x"
                                           src="{{url('upload/image/solution/php.svg')}}"
                                           width="90" height="70"
                                           decoding="async"
                                           data-nimg="1" loading="lazy"
                                           style="color: transparent;">
                                </div>
                                <div class="col-4 mb-1 d-flex justify-content-center">
                                    <img alt="sql server"
                                       srcset="{{url('upload/image/solution/sql.svg')}} 1x, {{url('upload/image/solution/sql.svg')}} 2x"
                                       src="{{url('upload/image/solution/sql.svg')}}"
                                       width="90" height="70"
                                       decoding="async"
                                       data-nimg="1" loading="lazy"
                                       style="color: transparent;">

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12"><img alt="WEBSITE HOSTING"
                                                          srcset="{{url('upload/image/solution/mobile_app.png')}} 1x, {{url('upload/image/solution/mobile_app.png')}} 2x"
                                                          src="{{url('upload/image/solution/mobile_app.png')}}"
                                                          width="540" height="670" decoding="async" data-nimg="1"
                                                          class="web-mobile-app__img" loading="lazy"
                                                          style="color: transparent;"></div>
                    </div>
                </div>
            </div>
            <div class="section" id="game_development">
                <div class="container"><h2 class="game-development__title"><span>GAME </span>DEVELOPMENT</h2>
                    <div class="game-development__hr"></div>
                    <div class="game-development__pc-ipad">
                        <div class="slick-slider center slick-initialized" dir="ltr">
                            <div class="slick-prev slick-arrow"><i class="arrow left"></i></div>
                            <div class="slick-list" style="padding: 0px 20%;">
                                <div class="slick-track" style="width: 5328px; left: -1332px; opacity: 1;">
                                    <div data-index="-2" tabindex="-1" class="slick-slide slick-cloned"
                                         aria-hidden="true" style="width: 666px;">
                                        <div>
                                            <div class="game-development__item" tabindex="-1"
                                                 style="width: 100%; display: inline-block;">
                                                <img alt="no_image"
                                                     srcset="{{url('upload/image/solution/game_2.jpeg')}} 1x, {{url('upload/image/solution/game_2.jpeg')}} 2x"
                                                     src="{{url('upload/image/solution/game_2.jpeg')}}"
                                                     width="660"
                                                     height="400"
                                                     decoding="async"
                                                     data-nimg="1"
                                                     loading="lazy"
                                                     style="color: transparent;">
                                            </div>
                                        </div>
                                    </div>
                                    <div data-index="-1" tabindex="-1" class="slick-slide slick-cloned"
                                         aria-hidden="true" style="width: 666px;">
                                        <div>
                                            <div class="game-development__item" tabindex="-1"
                                                 style="width: 100%; display: inline-block;">
                                                <img alt="no_image"
                                                     srcset="{{url('upload/image/solution/game_3.jpeg')}} 1x, {{url('upload/image/solution/game_3.jpeg')}} 2x"
                                                     src="{{url('upload/image/solution/game_3.jpeg')}}"
                                                     width="660"
                                                     height="400"
                                                     decoding="async"
                                                     data-nimg="1"
                                                     loading="lazy"
                                                     style="color: transparent;">
                                            </div>
                                        </div>
                                    </div>
                                    <div data-index="0" class="slick-slide slick-active slick-center slick-current"
                                         tabindex="-1" aria-hidden="false" style="outline: none; width: 666px;">
                                        <div>
                                            <div class="game-development__item" tabindex="-1"
                                                 style="width: 100%; display: inline-block;">
                                                <img alt="no_image"
                                                     srcset="{{url('upload/image/solution/game_1.jpeg')}} 1x, {{url('upload/image/solution/game_1.jpeg')}} 2x"
                                                     src="{{url('upload/image/solution/game_1.jpeg')}}"
                                                     width="660"
                                                     height="400"
                                                     decoding="async"
                                                     data-nimg="1"
                                                     loading="lazy"
                                                     style="color: transparent;">
                                                <div class="game-development__item-content">Tận dụng và kế thừa các sản
                                                    phẩm đa dạng trong hệ sinh thái đám mây của chúng tôi giúp bạn không
                                                    còn lo lắng về vấn đề vận hành hệ thống
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-index="1" class="slick-slide" tabindex="-1" aria-hidden="true"
                                         style="outline: none; width: 666px;">
                                        <div>
                                            <div class="game-development__item" tabindex="-1"
                                                 style="width: 100%; display: inline-block;">
                                                <img alt="no_image"
                                                      srcset="{{url('upload/image/solution/game_2.jpeg')}} 1x, {{url('upload/image/solution/game_2.jpeg')}} 2x"
                                                      src="{{url('upload/image/solution/game_2.jpeg')}}"
                                                      width="660"
                                                      height="400"
                                                      decoding="async"
                                                      data-nimg="1"
                                                      loading="lazy"
                                                      style="color: transparent;">
                                            </div>
                                        </div>
                                    </div>
                                    <div data-index="2" class="slick-slide" tabindex="-1" aria-hidden="true"
                                         style="outline: none; width: 666px;">
                                        <div>
                                            <div class="game-development__item" tabindex="-1"
                                                 style="width: 100%; display: inline-block;">
                                                <img alt="no_image"
                                                     srcset="{{url('upload/image/solution/game_3.jpeg')}} 1x, {{url('upload/image/solution/game_3.jpeg')}} 2x"
                                                     src="{{url('upload/image/solution/game_3.jpeg')}}"
                                                     width="660"
                                                     height="400"
                                                     decoding="async"
                                                     data-nimg="1"
                                                     loading="lazy"
                                                     style="color: transparent;">
                                            </div>
                                        </div>
                                    </div>
                                    <div data-index="3" tabindex="-1" class="slick-slide slick-center slick-cloned"
                                         aria-hidden="true" style="width: 666px;">
                                        <div>
                                            <div class="game-development__item" tabindex="-1"
                                                 style="width: 100%; display: inline-block;">
                                                <img alt="no_image"
                                                      srcset="{{url('upload/image/solution/game_1.jpeg')}} 1x, {{url('upload/image/solution/game_1.jpeg')}} 2x"
                                                      src="{{url('upload/image/solution/game_1.jpeg')}}"
                                                      width="660"
                                                      height="400"
                                                      decoding="async"
                                                      data-nimg="1"
                                                      loading="lazy"
                                                      style="color: transparent;">
                                                <div class="game-development__item-content">Tận dụng và kế thừa các sản
                                                    phẩm đa dạng trong hệ sinh thái đám mây của chúng tôi giúp bạn không
                                                    còn lo lắng về vấn đề vận hành hệ thống
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-index="4" tabindex="-1" class="slick-slide slick-cloned"
                                         aria-hidden="true" style="width: 666px;">
                                        <div>
                                            <div class="game-development__item" tabindex="-1"
                                                 style="width: 100%; display: inline-block;">
                                                <img alt="no_image"
                                                      srcset="{{url('upload/image/solution/game_2.jpeg')}} 1x, {{url('upload/image/solution/game_2.jpeg')}} 2x"
                                                      src="{{url('upload/image/solution/game_2.jpeg')}}"
                                                      width="660"
                                                      height="400"
                                                      decoding="async"
                                                      data-nimg="1"
                                                      loading="lazy"
                                                      style="color: transparent;">
                                            </div>
                                        </div>
                                    </div>
                                    <div data-index="5" tabindex="-1" class="slick-slide slick-cloned"
                                         aria-hidden="true" style="width: 666px;">
                                        <div>
                                            <div class="game-development__item" tabindex="-1"
                                                 style="width: 100%; display: inline-block;">
                                                <img alt="no_image"
                                                  srcset="{{url('upload/image/solution/game_3.jpeg')}} 1x, {{url('upload/image/solution/game_3.jpeg')}} 2x"
                                                  src="{{url('upload/image/solution/game_3.jpeg')}}"
                                                  width="660"
                                                  height="400"
                                                  decoding="async"
                                                  data-nimg="1"
                                                  loading="lazy"
                                                  style="color: transparent;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-next slick-arrow"><i class="arrow right"></i></div>
                        </div>
                    </div>
                    <div class="game-development__mobile">
                        <div><img alt="no_image"
                                  srcset="{{url('upload/image/solution/game_1.jpeg')}} 1x, {{url('upload/image/solution/game_1.jpeg')}} 2x"
                                  src="{{url('upload/image/solution/game_1.jpeg')}}"
                                  width="500" height="400" decoding="async" data-nimg="1" loading="lazy"
                                  style="color: transparent;">
                            <div class="game-development__item-content">Tận dụng và kế thừa các sản phẩm đa dạng trong
                                hệ sinh thái đám mây của chúng tôi giúp bạn không còn lo lắng về vấn đề vận hành hệ
                                thống
                            </div>
                        </div>
                        <div><img alt="no_image"
                                  srcset="{{url('upload/image/solution/game_2.jpeg')}} 1x, {{url('upload/image/solution/game_2.jpeg')}} 2x"
                                  src="{{url('upload/image/solution/game_2.jpeg')}}"
                                  width="500" height="400" decoding="async" data-nimg="1" loading="lazy"
                                  style="color: transparent;">
                            <div class="game-development__item-content">Chúng tôi giúp các nhà phát triển của bạn xây
                                dựng Game Server của bạn trên <span style="color: rgb(71, 211, 255);"></span>
                                nhanh chóng và dễ dàng với các tùy chọn tính toán linh hoạt
                            </div>
                        </div>
                        <div><img alt="no_image"
                                  srcset="{{url('upload/image/solution/game_3.jpeg')}} 1x, {{url('upload/image/solution/game_3.jpeg')}} 2x"
                                  src="{{url('upload/image/solution/game_3.jpeg')}}"
                                  width="500" height="400" decoding="async" data-nimg="1" loading="lazy"
                                  style="color: transparent;">
                            <div class="game-development__item-content">Hạ tầng với băng thông lớn và lưu lượng truyền
                                tải không giới hạn giúp bạn mở rộng nhanh chóng để đáp ứng số lượng người chơi phát sinh
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="video_stream">
                <div class="container">
                    <div class="section-title text-center"><h2 class="section-title__title text-center">VIDEO
                            STREAMING</h2>
                        <div class="section-title__description max-width-50">Hệ thống hỗ trợ đa dạng các ứng dụng được
                            cài đặt sẵn. Giúp rút ngắn thời gian triển khai trên một máy chủ mới
                        </div>
                    </div>
                </div>
                <div class="video-stream__image">
                    <img alt="VIDEO STREAMING"
                      srcset="{{url('upload/image/solution/video_stream.jpeg')}} 1x, {{url('upload/image/solution/video_stream.jpeg')}} 2x"
                      src="{{url('upload/image/solution/video_stream.jpeg')}}"
                      width="1903" height="610" decoding="async" data-nimg="1"
                      class="h-auto" loading="lazy" style="color: transparent;">
                    <div class="video-stream__content">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="video-stream__content-1">Giúp nhà phát triển dễ dàng xây dựng hệ thống
                                        phát trực tuyến trên nền tảng đám mây với nhiều dịch vụ bổ trợ
                                        trong hệ sinh thái
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="video-stream__content-2">Hệ thống thanh toán linh hoạt cùng với băng
                                        thông mạng lớn giúp tiết kiệm tối đa chi phí cho doanh nghiệp của bạn
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="video-stream__content-3">Chủ động lên kế hoạch cung cấp dịch vụ tốt nhất
                                        với hệ thống giám sát tài nguyên CPU, băng thông mạng
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="startup">
                <div class="container">
                    <div class="section-title text-center"><h2 class="section-title__title text-center">START UP</h2>
                        <div class="section-title__description max-width-50">Hệ thống hỗ trợ đa dạng các ứng dụng được
                            cài đặt sẵn. Giúp rút ngắn thời gian triển khai trên một máy chủ mới
                        </div>
                    </div>
                    <div class="section-highlight__list">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                <div class="section-highlight__list__item text-center">
                                    <img alt="Tiết kiệm thời gian"
                                        srcset="{{url('upload/image/solution/icon_lock.svg')}} 1x, {{url('upload/image/solution/icon_lock.svg')}} 2x"
                                        src="{{url('upload/image/solution/icon_lock.svg')}}"
                                        width="100" height="100"
                                        decoding="async"
                                        data-nimg="1" loading="lazy"
                                        style="color: transparent;">
                                    <h3 class="section-highlight__list__item__title mt-3">Tiết kiệm thời gian</h3>
                                    <div class="section-highlight__list__item__description"><p
                                                class="section-highlight__list__item__description--text">Giảm thiểu thời
                                            gian triển khai, loại bỏ mọi sự phứt tạp để Startup của bạn ra mắt sảm phẩm
                                            sớm nhất với nền tảng đám mây của chúng tôi</p></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                <div class="section-highlight__list__item text-center">
                                    <img alt="Thanh toán tự động"
                                        srcset="{{url('upload/image/solution/icon_calendar.svg')}} 1x, {{url('upload/image/solution/icon_calendar.svg')}} 2x"
                                        src="{{url('upload/image/solution/icon_calendar.svg')}}"
                                        width="100" height="100"
                                        decoding="async"
                                        data-nimg="1" loading="lazy"
                                        style="color: transparent;">
                                    <h3 class="section-highlight__list__item__title mt-3">Thanh toán tự động</h3>
                                    <div class="section-highlight__list__item__description"><p
                                                class="section-highlight__list__item__description--text">Tiết kiệm chi
                                            phí vận hành tối đa cho Startup của bạn với hệ thống thanh toán theo chu kì
                                            theo giờ, tháng, năm linh hoạt và có thể dự đoán được</p></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                <div class="section-highlight__list__item text-center">
                                    <img alt="Hạn chế rủi ro"
                                        srcset="{{url('upload/image/solution/icon_darts.svg')}} 1x, {{url('upload/image/solution/icon_darts.svg')}} 2x"
                                        src="{{url('upload/image/solution/icon_darts.svg')}}"
                                        width="100" height="100"
                                        decoding="async"
                                        data-nimg="1" loading="lazy"
                                        style="color: transparent;">
                                    <h3 class="section-highlight__list__item__title mt-3">Hạn chế rủi ro</h3>
                                    <div class="section-highlight__list__item__description"><p
                                                class="section-highlight__list__item__description--text">Rút ngắn quy
                                            trình vận hành doanh nghiệp, hạn chế rủi ro và phát triển nhanh chóng cho
                                            Startup của bạn</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-private-solution" id="private_cloud">
                <div class="container">
                    <div class="section-title text-center"><h2 class="section-title__title text-center text-white">
                            PRIVATE CLOUD</h2>
                        <div class="section-title__description max-width-50 text-white">Hệ thống hỗ trợ đa dạng các ứng
                            dụng được cài đặt sẵn. Giúp rút ngắn thời gian triển khai trên một máy chủ mới
                        </div>
                    </div>
                    <div class="private-cloud__grid">
                        <div class="private-cloud__grid-col private-cloud__grid-col-1">
                            <div><h3>Hệ thống máy chủ ảo</h3>
                                <div>Giải pháp giúp doanh nghiệp xây dựng hệ thống cung cấp máy chủ ảo sử dụng nền tảng
                                    điện toán đám mây OpenStack
                                </div>
                            </div>
                            <img alt="Hệ thống máy chủ ảo"
                                 srcset="{{url('upload/image/solution/private_1.jpeg')}} 1x, {{url('upload/image/solution/private_1.jpeg')}} 2x"
                                 src="{{url('upload/image/solution/private_1.jpeg')}}"
                                 width="377" height="246" decoding="async" data-nimg="1" loading="lazy"
                                 style="color: transparent;"></div>
                        <div class="private-cloud__grid-col private-cloud__grid-col-2">
                            <div><h3>Thiết kế tối ưu</h3>
                                <div>Thiết kế tối ưu, tiết kiệm chi phí và mở rộng linh hoạt theo nhu cầu của sử dụng
                                    của doanh nghiệp
                                </div>
                            </div>
                            <img alt="Thiết kế tối ưu"
                                 srcset="{{url('upload/image/solution/private_2.jpeg')}} 1x, {{url('upload/image/solution/private_2.jpeg')}} 2x"
                                 src="{{url('upload/image/solution/private_2.jpeg')}}"
                                 width="355" height="246" decoding="async" data-nimg="1" loading="lazy"
                                 style="color: transparent;"></div>
                        <div class="private-cloud__grid-col private-cloud__grid-col-3">
                            <div><h3>Quản trị chuyên dụng</h3>
                                <div>Portal quản trị chuyên dụng với đầy đủ tính năng dành cho người quản trị hệ thống
                                    và người dùng cuối
                                </div>
                            </div>
                            <img alt="Quản trị chuyên dụng"
                                 srcset="{{url('upload/image/solution/private_3.jpeg')}} 1x, {{url('upload/image/solution/private_3.jpeg')}} 2x"
                                 src="{{url('upload/image/solution/private_3.jpeg')}}"
                                 width="377" height="246" decoding="async" data-nimg="1" loading="lazy"
                                 style="color: transparent;"></div>
                    </div>
                </div>
            </div>
            <div class="section" id="cloud_storage">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-12"><h2 class="web-hosting__title">CLOUD STORAGE</h2>
                            <div class="d-flex">
                                <div class="checkmark-blue mtop-3px"></div>
                                <p class="description mt-0">Giải pháp xây dựng hệ thống lưu trữ toàn diện cho doanh
                                    nghiệp với hạ tầng lưu trữ phân tán, ổn định, độ tin cậy và hiệu năng cao, dễ dàng
                                    mở rộng</p></div>
                            <div class="d-flex">
                                <div class="checkmark-blue mtop-3px"></div>
                                <p class="description mt-0">Đáp ứng cho các hệ thống và dịch vụ của doanh nghiệp có nhu
                                    cầu lưu trữ lớn, khả năng mở rộng nhanh như Phim Online, Video Streaming, nội dung
                                    số,...</p></div>
                            <div class="d-flex">
                                <div class="checkmark-blue mtop-3px"></div>
                                <p class="description mt-0">Giải quyết các bài toán nhứt nhối của doanh nghiệp đang gặp
                                    phải về nhu cầu lưu trữ dữ liệu lớn và mở rộng liên tục</p></div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <img alt="CLOUD STORAGE"
                              srcset="{{url('upload/image/solution/cloud_storage.png')}} 1x, {{url('upload/image/solution/cloud_storage.png')}} 2x"
                              src="{{url('upload/image/solution/cloud_storage.png')}}"
                              width="540" height="610" decoding="async" data-nimg="1"
                              class="web-hosting__img" loading="lazy"
                              style="color: transparent;"></div>
                    </div>
                </div>
            </div>
            <div class="section" id="system_integration">
                <div class="container">
                    <div class="section-title text-center"><h2 class="section-title__title text-center">TÍCH HỢP HỆ
                            THỐNG</h2>
                        <div class="section-title__description max-width-50">Hệ thống hỗ trợ đa dạng các ứng dụng được
                            cài đặt sẵn. Giúp rút ngắn thời gian triển khai trên một máy chủ mới
                        </div>
                    </div>
                    <div class="section-highlight__list">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                <div class="section-highlight__list__item text-center">
                                    <img alt="Thiết kế và triển khai"
                                        srcset="{{url('upload/image/solution/icon_system_1.svg')}} 1x, {{url('upload/image/solution/icon_system_1.svg')}} 2x"
                                        src="{{url('upload/image/solution/icon_system_1.svg')}}"
                                        width="100" height="100"
                                        decoding="async"
                                        data-nimg="1" loading="lazy"
                                        style="color: transparent;">
                                    <h3 class="section-highlight__list__item__title mt-3">Thiết kế và triển khai</h3>
                                    <div class="section-highlight__list__item__description"><p
                                                class="section-highlight__list__item__description--text">Thiết kế, cung
                                            cấp, triển khai và vận hành hầu hết những hệ thống công nghệ thông tin tổng
                                            thể cho các tổ chức, doanh nghiệp</p></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                <div class="section-highlight__list__item text-center">
                                    <img alt="Tiết kiệm chi phí"
                                        srcset="{{url('upload/image/solution/icon_system_2.svg')}} 1x, {{url('upload/image/solution/icon_system_2.svg')}} 2x"
                                        src="{{url('upload/image/solution/icon_system_2.svg')}}"
                                        width="100" height="100"
                                        decoding="async"
                                        data-nimg="1" loading="lazy"
                                        style="color: transparent;">
                                    <h3 class="section-highlight__list__item__title mt-3">Tiết kiệm chi phí</h3>
                                    <div class="section-highlight__list__item__description"><p
                                                class="section-highlight__list__item__description--text">Tiết kiệm chi
                                            phí nhân sự vận hành, đơn giản hóa các vấn đề về hạ tầng để tập trung vào
                                            việc phát triển sản phẩm kinh doanh của doanh nghiệp</p></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                <div class="section-highlight__list__item text-center">
                                    <img alt="Đa dạng dịch vụ"
                                        srcset="{{url('upload/image/solution/icon_system_3.svg')}} 1x, {{url('upload/image/solution/icon_system_3.svg')}} 2x"
                                        src="{{url('upload/image/solution/icon_system_3.svg')}}"
                                        width="100" height="100"
                                        decoding="async"
                                        data-nimg="1" loading="lazy"
                                        style="color: transparent;">
                                    <h3 class="section-highlight__list__item__title mt-3">Đa dạng dịch vụ</h3>
                                    <div class="section-highlight__list__item__description"><p
                                                class="section-highlight__list__item__description--text">Các dịch vụ
                                            Tích hợp Hệ thống và thiết bị cung cấp gồm: Dịch vụ hạ tầng CNTT, Thiết kế
                                            và xây dựng cơ sở dữ liệu cho doanh nghiệp, Hệ thống mạng và bảo mật,...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('frontEnd.layouts.support')
        </div>
    </main>

@endsection
<script>
    function ShareToFaceBook() {
        var newWindow = window.open("http://www.facebook.com/sharer.php?u=" + window.location.href, '', '_blank');
        newWindow.focus();
        return false;
    }
</script>
