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
                                           style="color: rgb(255, 255, 255);">10% HOA HỒNG TRỌN ĐỜI CÙNG</h1>
                    <ul class="top-banner__content__feature-list">
                        <li class="feature-item"><img alt="green-tick"
                                                      srcset="{{url('upload/image/_partner/green-tick.svg')}} 1x, {{url('upload/image/_partner/green-tick.svg')}} 2x"
                                                      src="{{url('upload/image/_partner/green-tick.svg')}}" width="19" height="19"
                                                      decoding="async" data-nimg="1" class="feature-item__icon"
                                                      loading="lazy" style="color: transparent;"><span
                                    class="feature-item__text ml-2">Thương hiệu uy tín</span></li>
                        <li class="feature-item"><img alt="green-tick"
                                                      srcset="{{url('upload/image/_partner/green-tick.svg')}} 1x, {{url('upload/image/_partner/green-tick.svg')}} 2x"
                                                      src="{{url('upload/image/_partner/green-tick.svg')}}" width="19" height="19"
                                                      decoding="async" data-nimg="1" class="feature-item__icon"
                                                      loading="lazy" style="color: transparent;"><span
                                    class="feature-item__text ml-2">Hoa hồng trọn đời</span></li>
                        <li class="feature-item"><img alt="green-tick"
                                                      srcset="{{url('upload/image/_partner/green-tick.svg')}} 1x, {{url('upload/image/_partner/green-tick.svg')}} 2x"
                                                      src="{{url('upload/image/_partner/green-tick.svg')}}" width="19" height="19"
                                                      decoding="async" data-nimg="1" class="feature-item__icon"
                                                      loading="lazy" style="color: transparent;"><span
                                    class="feature-item__text ml-2">Rút tiền linh hoạt</span></li>
                        <li class="feature-item"><img alt="green-tick"
                                                      srcset="{{url('upload/image/_partner/green-tick.svg')}} 1x, {{url('upload/image/_partner/green-tick.svg')}} 2x"
                                                      src="{{url('upload/image/_partner/green-tick.svg')}}" width="19" height="19"
                                                      decoding="async" data-nimg="1" class="feature-item__icon"
                                                      loading="lazy" style="color: transparent;"><span
                                    class="feature-item__text ml-2">Theo dõi theo thời gian thực</span></li>
                    </ul>
                    <div class="top-banner__content__btn text-center"><a class="btn btn-white btn-radius"
                                                                         href="/affiliate#">Truy cập nền tảng
                            Affiliate</a></div>
                </div>
            </div>
        </div>
        <div class="section section-affiliate">
            <div class="container">
                <div class="section-title text-center"><h2 class="section-title__title text-center">Tại sao chọn
                         GTECH</h2></div>
                <div class="section-affiliate__list">
                    <div class="row gap-row-30">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="section-affiliate__list__item text-center h-full mb-0">
                                <div class="section-affiliate__list__item__image"><img alt="Thương hiệu uy tín"
                                                                                       srcset="{{url('upload/image/_partner/brand.svg')}} 1x, {{url('upload/image/_partner/brand.svg')}} 2x"
                                                                                       src="{{url('upload/image/_partner/brand.svg')}}"
                                                                                       width="84" height="70"
                                                                                       decoding="async" data-nimg="1"
                                                                                       loading="lazy"
                                                                                       style="color: transparent;">
                                </div>
                                <div class="section-affiliate__list__item__content"><h3 class="text mt-3">Thương hiệu uy
                                        tín</h3>
                                    <p class="description">Được tin dùng bởi hơn 10,000 khách hàng với chất lượng dịch
                                        vụ chất lượng cao, giá thành cạnh tranh</p></div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="section-affiliate__list__item text-center h-full mb-0">
                                <div class="section-affiliate__list__item__image"><img alt="Hoa hồng trọn đời"
                                                                                       srcset="{{url('upload/image/_partner/lifetime.svg')}} 1x, {{url('upload/image/_partner/lifetime.svg')}} 2x"
                                                                                       src="{{url('upload/image/_partner/lifetime.svg')}}"
                                                                                       width="84" height="70"
                                                                                       decoding="async" data-nimg="1"
                                                                                       loading="lazy"
                                                                                       style="color: transparent;">
                                </div>
                                <div class="section-affiliate__list__item__content"><h3 class="text mt-3">Hoa hồng trọn
                                        đời</h3>
                                    <p class="description">Mỗi lượt chia sẻ và khách hàng đăng ký dịch vụ thành công,
                                        bạn sẽ được nhận 10% hoa hồng và đặc biệt bạn cũng nhận được hoa hồng mỗi khi họ
                                        gia hạn dịch vụ</p></div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="section-affiliate__list__item text-center h-full mb-0">
                                <div class="section-affiliate__list__item__image"><img alt="Thanh toán linh hoạt"
                                                                                       srcset="{{url('upload/image/_partner/payment.svg')}} 1x, {{url('upload/image/_partner/payment.svg')}} 2x"
                                                                                       src="{{url('upload/image/_partner/payment.svg')}}"
                                                                                       width="84" height="70"
                                                                                       decoding="async" data-nimg="1"
                                                                                       loading="lazy"
                                                                                       style="color: transparent;">
                                </div>
                                <div class="section-affiliate__list__item__content"><h3 class="text mt-3">Thanh toán
                                        linh hoạt</h3>
                                    <p class="description">Chỉ cần đạt ngưỡng 500.000 VNĐ, bạn có thể yêu cầu rút tiền
                                        về tài khoản ngân hàng nhanh chóng</p></div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="section-affiliate__list__item text-center h-full mb-0">
                                <div class="section-affiliate__list__item__image"><img alt="Theo dõi thời gian thực"
                                                                                       srcset="{{url('upload/image/_partner/follow.svg')}} 1x, {{url('upload/image/_partner/follow.svg')}} 2x"
                                                                                       src="{{url('upload/image/_partner/follow.svg')}}"
                                                                                       width="84" height="70"
                                                                                       decoding="async" data-nimg="1"
                                                                                       loading="lazy"
                                                                                       style="color: transparent;">
                                </div>
                                <div class="section-affiliate__list__item__content"><h3 class="text mt-3">Theo dõi thời
                                        gian thực</h3>
                                    <p class="description">GTECH cung cấp công cụ theo dõi các đơn hàng thời gian
                                        thực, bạn sẽ không cần phải lo lắng bị mất hoa hồng.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-initialization-steps">
            <div class="container">
                <div class="section-title text-center"><h2 class="section-title__title text-center">Kiếm tiền như thế
                        nào</h2></div>
                <div class="section-initialization-steps__list">
                    <div class="section-initialization-steps__list__item section-initialization-steps__list__item--1">
                        <div class="section-initialization-steps__list__item__top">
                            <div class="service-image"><img alt="Đăng ký"
                                                            srcset="{{url('upload/image/_partner/register.svg')}} 1x, {{url('upload/image/_partner/register.svg')}} 2x"
                                                            src="{{url('upload/image/_partner/register.svg')}}" width="42" height="42"
                                                            decoding="async" data-nimg="1" loading="lazy"
                                                            style="color: transparent;"></div>
                        </div>
                        <div class="section-initialization-steps__list__item__body"><h3 class="text">Đăng ký</h3>
                            <p class="description">Đăng ký tài khoản miễn phí và lấy link, banner AFFLIATE để chia sẻ
                                đến khách hàng tiềm năng</p></div>
                    </div>
                    <div class="section-initialization-steps__list__item section-initialization-steps__list__item--2">
                        <div class="section-initialization-steps__list__item__top">
                            <div class="service-image"><img alt="Chia sẻ liên kết"
                                                            srcset="{{url('upload/image/_partner/share-link.svg')}} 1x, {{url('upload/image/_partner/share-link.svg')}} 2x"
                                                            src="{{url('upload/image/_partner/share-link.svg')}}" width="42" height="42"
                                                            decoding="async" data-nimg="1" loading="lazy"
                                                            style="color: transparent;"></div>
                        </div>
                        <div class="section-initialization-steps__list__item__body"><h3 class="text">Chia sẻ liên
                                kết</h3>
                            <p class="description">Chia sẻ link AFFILIATE trên các nền tảng tiếp cận khách hàng của bạn
                                như Facebook, Youtube, Blog, Email,...</p></div>
                    </div>
                    <div class="section-initialization-steps__list__item section-initialization-steps__list__item--3">
                        <div class="section-initialization-steps__list__item__top">
                            <div class="service-image"><img alt="Kiếm tiền"
                                                            srcset="{{url('upload/image/_partner/money.svg')}} 1x, {{url('upload/image/_partner/money.svg')}} 2x"
                                                            src="{{url('upload/image/_partner/money.svg')}}" width="42" height="42"
                                                            decoding="async" data-nimg="1" loading="lazy"
                                                            style="color: transparent;"></div>
                        </div>
                        <div class="section-initialization-steps__list__item__body"><h3 class="text">Kiếm tiền</h3>
                            <p class="description">Nhận hoa hồng trọn đời từ các hóa đơn thanh toán dịch vụ thành công
                                của khách hàng mà bạn đã giới thiệu</p></div>
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
                                        class="section-benefit__manager__title--text">Affiliate Marketing là gì?</h3>
                                <p class="section-benefit__manager__title--description">Affiliate Marketing (Tiếp thị
                                    liên kết) là một hình thức kiếm tiền online khá nổi bật, bằng cách bán các sản phẩm
                                    đã có sẳn cho các khách hàng mà bạn tìm kiếm được để nhận một khoản hoa hồng tương
                                    xứng với thù lao mà bạn bỏ ra khi giới thiệu, hình thức này không đòi hỏi bạn cần có
                                    vốn nhập hàng hay còn được gọi là hình thức bắt đầu công việc kinh doanh của riêng
                                    bạn với vốn 0 đồng.</p><a class="section-benefit__manager__title--link"
                                                              href="/affiliate-policy">Xem thêm quy định chương trình
                                    cộng tác viên</a></div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 section-benefit__manager__right">
                            <div class="section-benefit__manager--image"><img alt="Affiliate Marketing là gì?"
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
                            <div class="section-benefit__business--image"><img alt="Ưu điểm của Affiliate"
                                                                               srcset="{{url('upload/image/_partner/advantage-affiliate.svg')}} 1x, {{url('upload/image/_partner/advantage-affiliate.svg')}} 2x"
                                                                               src="{{url('upload/image/_partner/advantage-affiliate.svg')}}"
                                                                               width="540" height="481" decoding="async"
                                                                               data-nimg="1" loading="lazy"
                                                                               style="color: transparent;"></div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="section-benefit__business__title"><h3
                                        class="section-benefit__business__title--text">Ưu điểm của Affiliate</h3></div>
                            <div class="section-benefit__business__list">
                                <div class="section-benefit__business__list__item">
                                    <div class="section-benefit__business__list__item__title">
                                        <div class="checkmark"></div>
                                        <span class="section-benefit__business__list__item__title--text">Tự do về thời gian</span>
                                    </div>
                                    <p class="section-benefit__business__list__item--description">Bạn không phụ thuộc
                                        vào ai cũng như không phụ thuộc vào giờ giấc để có thể làm,bất cứ khi nào bạn
                                        rảnh có thể làm và tìm khách hàng ngay trên Internet</p></div>
                                <div class="section-benefit__business__list__item">
                                    <div class="section-benefit__business__list__item__title">
                                        <div class="checkmark"></div>
                                        <span class="section-benefit__business__list__item__title--text">Khả năng kiếm thu nhập cao</span>
                                    </div>
                                    <p class="section-benefit__business__list__item--description">Với chính sách nhận
                                        hoa hồng trọn đời, bạn có thể nhận hoa hồng cực lớn theo tỉ lệ thuận với giá trị
                                        đơn hàng mà bạn kiếm được</p></div>
                                <div class="section-benefit__business__list__item">
                                    <div class="section-benefit__business__list__item__title">
                                        <div class="checkmark"></div>
                                        <span class="section-benefit__business__list__item__title--text">Dễ tham gia và phát triển</span>
                                    </div>
                                    <p class="section-benefit__business__list__item--description">Bạn chỉ cần có cho
                                        mình một tài khoản quản lý, nhận liên kết tiếp thị của bạn, tìm hiểu qua một số
                                        kiến thức cơ bản về cách có được hoa hồng là đã có thể bắt đầu</p></div>
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
                                    class="section-income-affiliate__content__title">Bạn có muốn tăng thêm thu nhập với
                                Affiliate?</h3>
                            <p class="section-income-affiliate__content__description">Tận dụng khoảng thời gian rảnh của
                                bạn để kiếm thêm thu nhập giúp bạn có kinh tế tốt hơn và tạo ra nguồn thu nhập thụ động,
                                bạn có thể kiếm từ vài triệu đến hàng chục triệu đồng với Affiliate.</p><a
                                    class="btn-blue btn-radius btn-big-large text-uppercase"
                                    href="/affiliate#">THAM GIA NGAY</a></div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 order-0">
                        <div class="section-income-affiliate__image"><img
                                    alt="Bạn có muốn tăng thêm thu nhập với Affiliate?"
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
