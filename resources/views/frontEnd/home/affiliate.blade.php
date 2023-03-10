@extends('frontEnd.layouts.template_page')
@section('meta')
    {{--<meta property="og:description" content="{{$news->name}}" />
    <meta property="og:image" content="{{url('upload/shares/'.$news->image)}}" />
    <meta property="og:url" content="{{route('danh-muc.chitietbaiviet', $news->slug)}}" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="title" content="{{$news->image}}"/>
    <meta name="author" content="Admin"/>
    <meta property="og:title" content="{{$news->image}}"/>
    <meta property="og:type" content="article"/>
    <meta property="og:image"
          content="{{url('upload/shares/'.$news->image)}}"/>
    <meta name="image" content="{{url('upload/shares/'.$news->image)}}"/>
    <meta property="og:description"
          content="{{$news->name}}"/>
    <meta name="description"
          content="{{$news->name}}"/>
    <title>{{$news->name}}</title>--}}
@endsection
<?php $curUrl = Request::path();?>
@section('pageTitle', $pageTitle )
@section('main')
    <main>
        <div class="top-banner">
            <picture class="top-banner__background top-banner__background--main-background d-none d-md-inline"><img
                        alt="main background" srcset="{{url('upload/image/_partner/bg-main.svg')}} 1x, {{url('upload/image/_partner/bg-main.svg')}} 2x"
                        src="{{url('upload/image/_partner/bg-main.svg')}}" width="1140" height="519" decoding="async" data-nimg="1"
                        loading="lazy" style="color: transparent;"></picture>
            <picture class="top-banner__background top-banner__background--left-background">
                <source media="(min-width:768px)" srcset="{{url('upload/image/_partner/bg-left.svg')}}">
                <div class="d-lg-none"><img alt="right background"
                                            srcset="{{url('upload/image/_partner/building.svg')}} 1x,{{url('upload/image/_partner/building.svg')}} 2x"
                                            src="{{url('upload/image/_partner/building.svg')}}" width="390" height="400" decoding="async"
                                            data-nimg="1" class="w-full" loading="lazy" style="color: transparent;">
                </div>
                <div class="d-none d-lg-inline"><img alt="right background"
                                                     srcset="{{url('upload/image/_partner/bg-left.svg')}} 1x, {{url('upload/image/_partner/bg-left.svg')}} 2x"
                                                     src="{{url('upload/image/_partner/bg-left.svg')}}" width="400" height="400"
                                                     decoding="async" data-nimg="1" loading="lazy"
                                                     style="color: transparent;"></div>
            </picture>
            <div class="top-banner__background top-banner__background--right-background d-none d-lg-inline"><img
                        alt="right background" srcset="{{url('upload/image/_partner/bg-right.svg')}} 1x, {{url('upload/image/_partner/bg-right.svg')}} 2x"
                        src="{{url('upload/image/_partner/bg-right.svg')}}" width="400" height="400" decoding="async" data-nimg="1"
                        loading="lazy" style="color: transparent;"></div>
            <picture class="top-banner__background top-banner__background--bottom-background">
                <source media="(min-width:768px)" srcset="{{url('upload/image/_partner/clouds.svg')}}">
                <img alt="bottom background"
                     srcset="{{url('upload/image/_partner/clouds-mobile.svg')}} 1x, {{url('upload/image/_partner/clouds-mobile.svg')}} 2x"
                     src="{{url('upload/image/_partner/clouds-mobile.svg')}}" width="1490" height="282" decoding="async" data-nimg="1"
                     class="h-auto" loading="lazy" style="color: transparent;"></picture>
            <div class="top-banner__content">
                <div class="container"><h1 class="top-banner__content__heading text-center font-size-24"
                                           style="color: rgb(255, 255, 255);">10% HOA H???NG TR???N ?????I C??NG</h1>
                    <ul class="top-banner__content__feature-list">
                        <li class="feature-item"><img alt="green-tick"
                                                      srcset="{{url('upload/image/_partner/green-tick.svg')}} 1x, {{url('upload/image/_partner/green-tick.svg')}} 2x"
                                                      src="{{url('upload/image/_partner/green-tick.svg')}}" width="19" height="19"
                                                      decoding="async" data-nimg="1" class="feature-item__icon"
                                                      loading="lazy" style="color: transparent;"><span
                                    class="feature-item__text ml-2">Th????ng hi???u uy t??n</span></li>
                        <li class="feature-item"><img alt="green-tick"
                                                      srcset="{{url('upload/image/_partner/green-tick.svg')}} 1x, {{url('upload/image/_partner/green-tick.svg')}} 2x"
                                                      src="{{url('upload/image/_partner/green-tick.svg')}}" width="19" height="19"
                                                      decoding="async" data-nimg="1" class="feature-item__icon"
                                                      loading="lazy" style="color: transparent;"><span
                                    class="feature-item__text ml-2">Hoa h???ng tr???n ?????i</span></li>
                        <li class="feature-item"><img alt="green-tick"
                                                      srcset="{{url('upload/image/_partner/green-tick.svg')}} 1x, {{url('upload/image/_partner/green-tick.svg')}} 2x"
                                                      src="{{url('upload/image/_partner/green-tick.svg')}}" width="19" height="19"
                                                      decoding="async" data-nimg="1" class="feature-item__icon"
                                                      loading="lazy" style="color: transparent;"><span
                                    class="feature-item__text ml-2">R??t ti???n linh ho???t</span></li>
                        <li class="feature-item"><img alt="green-tick"
                                                      srcset="{{url('upload/image/_partner/green-tick.svg')}} 1x, {{url('upload/image/_partner/green-tick.svg')}} 2x"
                                                      src="{{url('upload/image/_partner/green-tick.svg')}}" width="19" height="19"
                                                      decoding="async" data-nimg="1" class="feature-item__icon"
                                                      loading="lazy" style="color: transparent;"><span
                                    class="feature-item__text ml-2">Theo d??i theo th???i gian th???c</span></li>
                    </ul>
                    <div class="top-banner__content__btn text-center"><a class="btn btn-white btn-radius"
                                                                         href="/affiliate#">Truy c???p n???n t???ng
                            Affiliate</a></div>
                </div>
            </div>
        </div>
        <div class="section section-affiliate">
            <div class="container">
                <div class="section-title text-center"><h2 class="section-title__title text-center">T???i sao ch???n
                         GTECH</h2></div>
                <div class="section-affiliate__list">
                    <div class="row gap-row-30">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="section-affiliate__list__item text-center h-full mb-0">
                                <div class="section-affiliate__list__item__image"><img alt="Th????ng hi???u uy t??n"
                                                                                       srcset="{{url('upload/image/_partner/brand.svg')}} 1x, {{url('upload/image/_partner/brand.svg')}} 2x"
                                                                                       src="{{url('upload/image/_partner/brand.svg')}}"
                                                                                       width="84" height="70"
                                                                                       decoding="async" data-nimg="1"
                                                                                       loading="lazy"
                                                                                       style="color: transparent;">
                                </div>
                                <div class="section-affiliate__list__item__content"><h3 class="text mt-3">Th????ng hi???u uy
                                        t??n</h3>
                                    <p class="description">???????c tin d??ng b???i h??n 10,000 kh??ch h??ng v???i ch???t l?????ng d???ch
                                        v??? ch???t l?????ng cao, gi?? th??nh c???nh tranh</p></div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="section-affiliate__list__item text-center h-full mb-0">
                                <div class="section-affiliate__list__item__image"><img alt="Hoa h???ng tr???n ?????i"
                                                                                       srcset="{{url('upload/image/_partner/lifetime.svg')}} 1x, {{url('upload/image/_partner/lifetime.svg')}} 2x"
                                                                                       src="{{url('upload/image/_partner/lifetime.svg')}}"
                                                                                       width="84" height="70"
                                                                                       decoding="async" data-nimg="1"
                                                                                       loading="lazy"
                                                                                       style="color: transparent;">
                                </div>
                                <div class="section-affiliate__list__item__content"><h3 class="text mt-3">Hoa h???ng tr???n
                                        ?????i</h3>
                                    <p class="description">M???i l?????t chia s??? v?? kh??ch h??ng ????ng k?? d???ch v??? th??nh c??ng,
                                        b???n s??? ???????c nh???n 10% hoa h???ng v?? ?????c bi???t b???n c??ng nh???n ???????c hoa h???ng m???i khi h???
                                        gia h???n d???ch v???</p></div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="section-affiliate__list__item text-center h-full mb-0">
                                <div class="section-affiliate__list__item__image"><img alt="Thanh to??n linh ho???t"
                                                                                       srcset="{{url('upload/image/_partner/payment.svg')}} 1x, {{url('upload/image/_partner/payment.svg')}} 2x"
                                                                                       src="{{url('upload/image/_partner/payment.svg')}}"
                                                                                       width="84" height="70"
                                                                                       decoding="async" data-nimg="1"
                                                                                       loading="lazy"
                                                                                       style="color: transparent;">
                                </div>
                                <div class="section-affiliate__list__item__content"><h3 class="text mt-3">Thanh to??n
                                        linh ho???t</h3>
                                    <p class="description">Ch??? c???n ?????t ng?????ng 500.000 VN??, b???n c?? th??? y??u c???u r??t ti???n
                                        v??? t??i kho???n ng??n h??ng nhanh ch??ng</p></div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="section-affiliate__list__item text-center h-full mb-0">
                                <div class="section-affiliate__list__item__image"><img alt="Theo d??i th???i gian th???c"
                                                                                       srcset="{{url('upload/image/_partner/follow.svg')}} 1x, {{url('upload/image/_partner/follow.svg')}} 2x"
                                                                                       src="{{url('upload/image/_partner/follow.svg')}}"
                                                                                       width="84" height="70"
                                                                                       decoding="async" data-nimg="1"
                                                                                       loading="lazy"
                                                                                       style="color: transparent;">
                                </div>
                                <div class="section-affiliate__list__item__content"><h3 class="text mt-3">Theo d??i th???i
                                        gian th???c</h3>
                                    <p class="description">GTECH cung c???p c??ng c??? theo d??i c??c ????n h??ng th???i gian
                                        th???c, b???n s??? kh??ng c???n ph???i lo l???ng b??? m???t hoa h???ng.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-initialization-steps">
            <div class="container">
                <div class="section-title text-center"><h2 class="section-title__title text-center">Ki???m ti???n nh?? th???
                        n??o</h2></div>
                <div class="section-initialization-steps__list">
                    <div class="section-initialization-steps__list__item section-initialization-steps__list__item--1">
                        <div class="section-initialization-steps__list__item__top">
                            <div class="service-image"><img alt="????ng k??"
                                                            srcset="{{url('upload/image/_partner/register.svg')}} 1x, {{url('upload/image/_partner/register.svg')}} 2x"
                                                            src="{{url('upload/image/_partner/register.svg')}}" width="42" height="42"
                                                            decoding="async" data-nimg="1" loading="lazy"
                                                            style="color: transparent;"></div>
                        </div>
                        <div class="section-initialization-steps__list__item__body"><h3 class="text">????ng k??</h3>
                            <p class="description">????ng k?? t??i kho???n mi???n ph?? v?? l???y link, banner AFFLIATE ????? chia s???
                                ?????n kh??ch h??ng ti???m n??ng</p></div>
                    </div>
                    <div class="section-initialization-steps__list__item section-initialization-steps__list__item--2">
                        <div class="section-initialization-steps__list__item__top">
                            <div class="service-image"><img alt="Chia s??? li??n k???t"
                                                            srcset="{{url('upload/image/_partner/share-link.svg')}} 1x, {{url('upload/image/_partner/share-link.svg')}} 2x"
                                                            src="{{url('upload/image/_partner/share-link.svg')}}" width="42" height="42"
                                                            decoding="async" data-nimg="1" loading="lazy"
                                                            style="color: transparent;"></div>
                        </div>
                        <div class="section-initialization-steps__list__item__body"><h3 class="text">Chia s??? li??n
                                k???t</h3>
                            <p class="description">Chia s??? link AFFILIATE tr??n c??c n???n t???ng ti???p c???n kh??ch h??ng c???a b???n
                                nh?? Facebook, Youtube, Blog, Email,...</p></div>
                    </div>
                    <div class="section-initialization-steps__list__item section-initialization-steps__list__item--3">
                        <div class="section-initialization-steps__list__item__top">
                            <div class="service-image"><img alt="Ki???m ti???n"
                                                            srcset="{{url('upload/image/_partner/money.svg')}} 1x, {{url('upload/image/_partner/money.svg')}} 2x"
                                                            src="{{url('upload/image/_partner/money.svg')}}" width="42" height="42"
                                                            decoding="async" data-nimg="1" loading="lazy"
                                                            style="color: transparent;"></div>
                        </div>
                        <div class="section-initialization-steps__list__item__body"><h3 class="text">Ki???m ti???n</h3>
                            <p class="description">Nh???n hoa h???ng tr???n ?????i t??? c??c h??a ????n thanh to??n d???ch v??? th??nh c??ng
                                c???a kh??ch h??ng m?? b???n ???? gi???i thi???u</p></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-benefit">
            <div class="container">
                <div class="section-benefit__manager">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-6 section-benefit__manager__left">
                            <div class="section-benefit__manager__title"><h3
                                        class="section-benefit__manager__title--text">Affiliate Marketing l?? g???</h3>
                                <p class="section-benefit__manager__title--description">Affiliate Marketing (Ti???p th???
                                    li??n k???t) l?? m???t h??nh th???c ki???m ti???n online kh?? n???i b???t, b???ng c??ch b??n c??c s???n ph???m
                                    ???? c?? s???n cho c??c kh??ch h??ng m?? b???n t??m ki???m ???????c ????? nh???n m???t kho???n hoa h???ng t????ng
                                    x???ng v???i th?? lao m?? b???n b??? ra khi gi???i thi???u, h??nh th???c n??y kh??ng ????i h???i b???n c???n c??
                                    v???n nh???p h??ng hay c??n ???????c g???i l?? h??nh th???c b???t ?????u c??ng vi???c kinh doanh c???a ri??ng
                                    b???n v???i v???n 0 ?????ng.</p><a class="section-benefit__manager__title--link"
                                                              href="/affiliate-policy">Xem th??m quy ?????nh ch????ng tr??nh
                                    c???ng t??c vi??n</a></div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 section-benefit__manager__right">
                            <div class="section-benefit__manager--image"><img alt="Affiliate Marketing l?? g???"
                                                                              srcset="{{url('upload/image/_partner/affiliate-maketing.svg')}} 1x, {{url('upload/image/_partner/affiliate-maketing.svg')}} 2x"
                                                                              src="{{url('upload/image/_partner/affiliate-maketing.svg')}}"
                                                                              width="440" height="283" decoding="async"
                                                                              data-nimg="1" loading="lazy"
                                                                              style="color: transparent;"></div>
                        </div>
                    </div>
                </div>
                <div class="section-benefit__business">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="section-benefit__business--image"><img alt="??u ??i???m c???a Affiliate"
                                                                               srcset="{{url('upload/image/_partner/advantage-affiliate.svg')}} 1x, {{url('upload/image/_partner/advantage-affiliate.svg')}} 2x"
                                                                               src="{{url('upload/image/_partner/advantage-affiliate.svg')}}"
                                                                               width="540" height="481" decoding="async"
                                                                               data-nimg="1" loading="lazy"
                                                                               style="color: transparent;"></div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="section-benefit__business__title"><h3
                                        class="section-benefit__business__title--text">??u ??i???m c???a Affiliate</h3></div>
                            <div class="section-benefit__business__list">
                                <div class="section-benefit__business__list__item">
                                    <div class="section-benefit__business__list__item__title">
                                        <div class="checkmark"></div>
                                        <span class="section-benefit__business__list__item__title--text">T??? do v??? th???i gian</span>
                                    </div>
                                    <p class="section-benefit__business__list__item--description">B???n kh??ng ph??? thu???c
                                        v??o ai c??ng nh?? kh??ng ph??? thu???c v??o gi??? gi???c ????? c?? th??? l??m,b???t c??? khi n??o b???n
                                        r???nh c?? th??? l??m v?? t??m kh??ch h??ng ngay tr??n Internet</p></div>
                                <div class="section-benefit__business__list__item">
                                    <div class="section-benefit__business__list__item__title">
                                        <div class="checkmark"></div>
                                        <span class="section-benefit__business__list__item__title--text">Kh??? n??ng ki???m thu nh???p cao</span>
                                    </div>
                                    <p class="section-benefit__business__list__item--description">V???i ch??nh s??ch nh???n
                                        hoa h???ng tr???n ?????i, b???n c?? th??? nh???n hoa h???ng c???c l???n theo t??? l??? thu???n v???i gi?? tr???
                                        ????n h??ng m?? b???n ki???m ???????c</p></div>
                                <div class="section-benefit__business__list__item">
                                    <div class="section-benefit__business__list__item__title">
                                        <div class="checkmark"></div>
                                        <span class="section-benefit__business__list__item__title--text">D??? tham gia v?? ph??t tri???n</span>
                                    </div>
                                    <p class="section-benefit__business__list__item--description">B???n ch??? c???n c?? cho
                                        m??nh m???t t??i kho???n qu???n l??, nh???n li??n k???t ti???p th??? c???a b???n, t??m hi???u qua m???t s???
                                        ki???n th???c c?? b???n v??? c??ch c?? ???????c hoa h???ng l?? ???? c?? th??? b???t ?????u</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-income-affiliate">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 order-1">
                        <div class="section-income-affiliate__content"><h3
                                    class="section-income-affiliate__content__title">B???n c?? mu???n t??ng th??m thu nh???p v???i
                                Affiliate?</h3>
                            <p class="section-income-affiliate__content__description">T???n d???ng kho???ng th???i gian r???nh c???a
                                b???n ????? ki???m th??m thu nh???p gi??p b???n c?? kinh t??? t???t h??n v?? t???o ra ngu???n thu nh???p th??? ?????ng,
                                b???n c?? th??? ki???m t??? v??i tri???u ?????n h??ng ch???c tri???u ?????ng v???i Affiliate.</p><a
                                    class="btn-blue btn-radius btn-big-large text-uppercase"
                                    href="/affiliate#">THAM GIA NGAY</a></div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 order-0">
                        <div class="section-income-affiliate__image"><img
                                    alt="B???n c?? mu???n t??ng th??m thu nh???p v???i Affiliate?"
                                    srcset="{{url('upload/image/_partner/income.svg')}} 1x, {{url('upload/image/_partner/income.svg')}} 2x"
                                    src="{{url('upload/image/_partner/income.svg')}}" width="480" height="227" decoding="async"
                                    data-nimg="1" loading="lazy" style="color: transparent;"></div>
                    </div>
                </div>
            </div>
        </div>
        @include('frontEnd.layouts.support')
    </main>
@endsection
<script>
    function ShareToFaceBook() {
        var newWindow = window.open("http://www.facebook.com/sharer.php?u=" + window.location.href, '', '_blank');
        newWindow.focus();
        return false;
    }
</script>
