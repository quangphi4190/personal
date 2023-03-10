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
                        <div class="section-title__description max-width-50">H??? th???ng h??? tr??? ??a d???ng c??c ???ng d???ng ???????c
                            c??i ?????t s???n. Gi??p r??t ng???n th???i gian tri???n khai tr??n m???t m??y ch??? m???i
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12 web-mobile-app__col-left">
                            <div class="d-flex">
                                <div class="checkmark-blue mtop-3px"></div>
                                <p class="description mt-0">X??y d???ng nhanh ch??ng c??c m??y ch??? Frontend/Backend c???a Web v??
                                    ???ng d???ng di ?????ng c???a b???n b???ng c??ch s??? d???ng n???n t???ng ????m m??y ???????c thi???t k??? d??nh cho
                                    nh?? ph??t tri???n</p></div>
                            <div class="d-flex">
                                <div class="checkmark-blue mtop-3px"></div>
                                <p class="description mt-0">H??? th???ng h??? tr??? ??a d???ng c??c ???ng d???ng ???????c c??i ?????t s???n. Gi??p
                                    r??t ng???n th???i gian tri???n khai tr??n m???t m??y ch??? m???i</p></div>
                            <div class="d-flex">
                                <div class="checkmark-blue mtop-3px"></div>
                                <p class="description mt-0">T????ng th??ch ho??n to??n v???i c??c ng??n ng??? l???p tr??nh v?? h??? qu???n
                                    tr??? c?? s??? d??? li???u nh?? Python, Nodejs, Java, PHP, MySQL, SQL Server</p></div>
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
                                                <div class="game-development__item-content">T???n d???ng v?? k??? th???a c??c s???n
                                                    ph???m ??a d???ng trong h??? sinh th??i ????m m??y c???a ch??ng t??i gi??p b???n kh??ng
                                                    c??n lo l???ng v??? v???n ????? v???n h??nh h??? th???ng
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
                                                <div class="game-development__item-content">T???n d???ng v?? k??? th???a c??c s???n
                                                    ph???m ??a d???ng trong h??? sinh th??i ????m m??y c???a ch??ng t??i gi??p b???n kh??ng
                                                    c??n lo l???ng v??? v???n ????? v???n h??nh h??? th???ng
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
                            <div class="game-development__item-content">T???n d???ng v?? k??? th???a c??c s???n ph???m ??a d???ng trong
                                h??? sinh th??i ????m m??y c???a ch??ng t??i gi??p b???n kh??ng c??n lo l???ng v??? v???n ????? v???n h??nh h???
                                th???ng
                            </div>
                        </div>
                        <div><img alt="no_image"
                                  srcset="{{url('upload/image/solution/game_2.jpeg')}} 1x, {{url('upload/image/solution/game_2.jpeg')}} 2x"
                                  src="{{url('upload/image/solution/game_2.jpeg')}}"
                                  width="500" height="400" decoding="async" data-nimg="1" loading="lazy"
                                  style="color: transparent;">
                            <div class="game-development__item-content">Ch??ng t??i gi??p c??c nh?? ph??t tri???n c???a b???n x??y
                                d???ng Game Server c???a b???n tr??n <span style="color: rgb(71, 211, 255);"></span>
                                nhanh ch??ng v?? d??? d??ng v???i c??c t??y ch???n t??nh to??n linh ho???t
                            </div>
                        </div>
                        <div><img alt="no_image"
                                  srcset="{{url('upload/image/solution/game_3.jpeg')}} 1x, {{url('upload/image/solution/game_3.jpeg')}} 2x"
                                  src="{{url('upload/image/solution/game_3.jpeg')}}"
                                  width="500" height="400" decoding="async" data-nimg="1" loading="lazy"
                                  style="color: transparent;">
                            <div class="game-development__item-content">H??? t???ng v???i b??ng th??ng l???n v?? l??u l?????ng truy???n
                                t???i kh??ng gi???i h???n gi??p b???n m??? r???ng nhanh ch??ng ????? ????p ???ng s??? l?????ng ng?????i ch??i ph??t sinh
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="video_stream">
                <div class="container">
                    <div class="section-title text-center"><h2 class="section-title__title text-center">VIDEO
                            STREAMING</h2>
                        <div class="section-title__description max-width-50">H??? th???ng h??? tr??? ??a d???ng c??c ???ng d???ng ???????c
                            c??i ?????t s???n. Gi??p r??t ng???n th???i gian tri???n khai tr??n m???t m??y ch??? m???i
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
                                    <div class="video-stream__content-1">Gi??p nh?? ph??t tri???n d??? d??ng x??y d???ng h??? th???ng
                                        ph??t tr???c tuy???n tr??n n???n t???ng ????m m??y v???i nhi???u d???ch v??? b??? tr???
                                        trong h??? sinh th??i
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="video-stream__content-2">H??? th???ng thanh to??n linh ho???t c??ng v???i b??ng
                                        th??ng m???ng l???n gi??p ti???t ki???m t???i ??a chi ph?? cho doanh nghi???p c???a b???n
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="video-stream__content-3">Ch??? ?????ng l??n k??? ho???ch cung c???p d???ch v??? t???t nh???t
                                        v???i h??? th???ng gi??m s??t t??i nguy??n CPU, b??ng th??ng m???ng
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
                        <div class="section-title__description max-width-50">H??? th???ng h??? tr??? ??a d???ng c??c ???ng d???ng ???????c
                            c??i ?????t s???n. Gi??p r??t ng???n th???i gian tri???n khai tr??n m???t m??y ch??? m???i
                        </div>
                    </div>
                    <div class="section-highlight__list">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                <div class="section-highlight__list__item text-center">
                                    <img alt="Ti???t ki???m th???i gian"
                                        srcset="{{url('upload/image/solution/icon_lock.svg')}} 1x, {{url('upload/image/solution/icon_lock.svg')}} 2x"
                                        src="{{url('upload/image/solution/icon_lock.svg')}}"
                                        width="100" height="100"
                                        decoding="async"
                                        data-nimg="1" loading="lazy"
                                        style="color: transparent;">
                                    <h3 class="section-highlight__list__item__title mt-3">Ti???t ki???m th???i gian</h3>
                                    <div class="section-highlight__list__item__description"><p
                                                class="section-highlight__list__item__description--text">Gi???m thi???u th???i
                                            gian tri???n khai, lo???i b??? m???i s??? ph???t t???p ????? Startup c???a b???n ra m???t s???m ph???m
                                            s???m nh???t v???i n???n t???ng ????m m??y c???a ch??ng t??i</p></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                <div class="section-highlight__list__item text-center">
                                    <img alt="Thanh to??n t??? ?????ng"
                                        srcset="{{url('upload/image/solution/icon_calendar.svg')}} 1x, {{url('upload/image/solution/icon_calendar.svg')}} 2x"
                                        src="{{url('upload/image/solution/icon_calendar.svg')}}"
                                        width="100" height="100"
                                        decoding="async"
                                        data-nimg="1" loading="lazy"
                                        style="color: transparent;">
                                    <h3 class="section-highlight__list__item__title mt-3">Thanh to??n t??? ?????ng</h3>
                                    <div class="section-highlight__list__item__description"><p
                                                class="section-highlight__list__item__description--text">Ti???t ki???m chi
                                            ph?? v???n h??nh t???i ??a cho Startup c???a b???n v???i h??? th???ng thanh to??n theo chu k??
                                            theo gi???, th??ng, n??m linh ho???t v?? c?? th??? d??? ??o??n ???????c</p></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                <div class="section-highlight__list__item text-center">
                                    <img alt="H???n ch??? r???i ro"
                                        srcset="{{url('upload/image/solution/icon_darts.svg')}} 1x, {{url('upload/image/solution/icon_darts.svg')}} 2x"
                                        src="{{url('upload/image/solution/icon_darts.svg')}}"
                                        width="100" height="100"
                                        decoding="async"
                                        data-nimg="1" loading="lazy"
                                        style="color: transparent;">
                                    <h3 class="section-highlight__list__item__title mt-3">H???n ch??? r???i ro</h3>
                                    <div class="section-highlight__list__item__description"><p
                                                class="section-highlight__list__item__description--text">R??t ng???n quy
                                            tr??nh v???n h??nh doanh nghi???p, h???n ch??? r???i ro v?? ph??t tri???n nhanh ch??ng cho
                                            Startup c???a b???n</p></div>
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
                        <div class="section-title__description max-width-50 text-white">H??? th???ng h??? tr??? ??a d???ng c??c ???ng
                            d???ng ???????c c??i ?????t s???n. Gi??p r??t ng???n th???i gian tri???n khai tr??n m???t m??y ch??? m???i
                        </div>
                    </div>
                    <div class="private-cloud__grid">
                        <div class="private-cloud__grid-col private-cloud__grid-col-1">
                            <div><h3>H??? th???ng m??y ch??? ???o</h3>
                                <div>Gi???i ph??p gi??p doanh nghi???p x??y d???ng h??? th???ng cung c???p m??y ch??? ???o s??? d???ng n???n t???ng
                                    ??i???n to??n ????m m??y OpenStack
                                </div>
                            </div>
                            <img alt="H??? th???ng m??y ch??? ???o"
                                 srcset="{{url('upload/image/solution/private_1.jpeg')}} 1x, {{url('upload/image/solution/private_1.jpeg')}} 2x"
                                 src="{{url('upload/image/solution/private_1.jpeg')}}"
                                 width="377" height="246" decoding="async" data-nimg="1" loading="lazy"
                                 style="color: transparent;"></div>
                        <div class="private-cloud__grid-col private-cloud__grid-col-2">
                            <div><h3>Thi???t k??? t???i ??u</h3>
                                <div>Thi???t k??? t???i ??u, ti???t ki???m chi ph?? v?? m??? r???ng linh ho???t theo nhu c???u c???a s??? d???ng
                                    c???a doanh nghi???p
                                </div>
                            </div>
                            <img alt="Thi???t k??? t???i ??u"
                                 srcset="{{url('upload/image/solution/private_2.jpeg')}} 1x, {{url('upload/image/solution/private_2.jpeg')}} 2x"
                                 src="{{url('upload/image/solution/private_2.jpeg')}}"
                                 width="355" height="246" decoding="async" data-nimg="1" loading="lazy"
                                 style="color: transparent;"></div>
                        <div class="private-cloud__grid-col private-cloud__grid-col-3">
                            <div><h3>Qu???n tr??? chuy??n d???ng</h3>
                                <div>Portal qu???n tr??? chuy??n d???ng v???i ?????y ????? t??nh n??ng d??nh cho ng?????i qu???n tr??? h??? th???ng
                                    v?? ng?????i d??ng cu???i
                                </div>
                            </div>
                            <img alt="Qu???n tr??? chuy??n d???ng"
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
                                <p class="description mt-0">Gi???i ph??p x??y d???ng h??? th???ng l??u tr??? to??n di???n cho doanh
                                    nghi???p v???i h??? t???ng l??u tr??? ph??n t??n, ???n ?????nh, ????? tin c???y v?? hi???u n??ng cao, d??? d??ng
                                    m??? r???ng</p></div>
                            <div class="d-flex">
                                <div class="checkmark-blue mtop-3px"></div>
                                <p class="description mt-0">????p ???ng cho c??c h??? th???ng v?? d???ch v??? c???a doanh nghi???p c?? nhu
                                    c???u l??u tr??? l???n, kh??? n??ng m??? r???ng nhanh nh?? Phim Online, Video Streaming, n???i dung
                                    s???,...</p></div>
                            <div class="d-flex">
                                <div class="checkmark-blue mtop-3px"></div>
                                <p class="description mt-0">Gi???i quy???t c??c b??i to??n nh???t nh???i c???a doanh nghi???p ??ang g???p
                                    ph???i v??? nhu c???u l??u tr??? d??? li???u l???n v?? m??? r???ng li??n t???c</p></div>
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
                    <div class="section-title text-center"><h2 class="section-title__title text-center">T??CH H???P H???
                            TH???NG</h2>
                        <div class="section-title__description max-width-50">H??? th???ng h??? tr??? ??a d???ng c??c ???ng d???ng ???????c
                            c??i ?????t s???n. Gi??p r??t ng???n th???i gian tri???n khai tr??n m???t m??y ch??? m???i
                        </div>
                    </div>
                    <div class="section-highlight__list">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                <div class="section-highlight__list__item text-center">
                                    <img alt="Thi???t k??? v?? tri???n khai"
                                        srcset="{{url('upload/image/solution/icon_system_1.svg')}} 1x, {{url('upload/image/solution/icon_system_1.svg')}} 2x"
                                        src="{{url('upload/image/solution/icon_system_1.svg')}}"
                                        width="100" height="100"
                                        decoding="async"
                                        data-nimg="1" loading="lazy"
                                        style="color: transparent;">
                                    <h3 class="section-highlight__list__item__title mt-3">Thi???t k??? v?? tri???n khai</h3>
                                    <div class="section-highlight__list__item__description"><p
                                                class="section-highlight__list__item__description--text">Thi???t k???, cung
                                            c???p, tri???n khai v?? v???n h??nh h???u h???t nh???ng h??? th???ng c??ng ngh??? th??ng tin t???ng
                                            th??? cho c??c t??? ch???c, doanh nghi???p</p></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                <div class="section-highlight__list__item text-center">
                                    <img alt="Ti???t ki???m chi ph??"
                                        srcset="{{url('upload/image/solution/icon_system_2.svg')}} 1x, {{url('upload/image/solution/icon_system_2.svg')}} 2x"
                                        src="{{url('upload/image/solution/icon_system_2.svg')}}"
                                        width="100" height="100"
                                        decoding="async"
                                        data-nimg="1" loading="lazy"
                                        style="color: transparent;">
                                    <h3 class="section-highlight__list__item__title mt-3">Ti???t ki???m chi ph??</h3>
                                    <div class="section-highlight__list__item__description"><p
                                                class="section-highlight__list__item__description--text">Ti???t ki???m chi
                                            ph?? nh??n s??? v???n h??nh, ????n gi???n h??a c??c v???n ????? v??? h??? t???ng ????? t???p trung v??o
                                            vi???c ph??t tri???n s???n ph???m kinh doanh c???a doanh nghi???p</p></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                <div class="section-highlight__list__item text-center">
                                    <img alt="??a d???ng d???ch v???"
                                        srcset="{{url('upload/image/solution/icon_system_3.svg')}} 1x, {{url('upload/image/solution/icon_system_3.svg')}} 2x"
                                        src="{{url('upload/image/solution/icon_system_3.svg')}}"
                                        width="100" height="100"
                                        decoding="async"
                                        data-nimg="1" loading="lazy"
                                        style="color: transparent;">
                                    <h3 class="section-highlight__list__item__title mt-3">??a d???ng d???ch v???</h3>
                                    <div class="section-highlight__list__item__description"><p
                                                class="section-highlight__list__item__description--text">C??c d???ch v???
                                            T??ch h???p H??? th???ng v?? thi???t b??? cung c???p g???m: D???ch v??? h??? t???ng CNTT, Thi???t k???
                                            v?? x??y d???ng c?? s??? d??? li???u cho doanh nghi???p, H??? th???ng m???ng v?? b???o m???t,...</p>
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
