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
        <div class="section-mainbanner banner-cloudserver">
            <div class="container">
                <div class="">
                    <div class="mainbanner-content">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="section-title"><p class="mb-0 title-banner-cloudserver">Cloud Server</p>
                                    <h2 class="headline text-white mt-2 hidden-md"
                                        style="font-weight: normal; line-height: 60px;">Máy chủ ảo
                                        Điện toán đám mây</h2>
                                    <div class="d-flex">
                                        <div class="checkmark-primary mt-1 hidden-md"></div>
                                        <p class="description text-white mt-0">Khởi tạo Cloud Server trong vài giây với
                                            giao diện quản trị thông minh và tự động hoàn toàn 100%</p></div>
                                    <div class="d-flex">
                                        <div class="checkmark-primary mt-1 hidden-md"></div>
                                        <p class="description text-white mt-0">Hạ tầng mạnh mẽ trang bị CPU xung nhịp
                                            lên đến 3.2GHz và ổ cứng Enterprise NVMe SSD siêu siêu nhanh</p></div>
                                    <div class="d-flex">
                                        <div class="checkmark-primary mt-1 hidden-md"></div>
                                        <p class="description text-white mt-0">Là nền tảng duy nhất tại Việt Nam hỗ trợ
                                            các chu kỳ thanh toán theo giờ (pay as you go), tháng, năm linh hoạt</p>
                                    </div>
                                    <div class="button-action d-flex gap-15 mt-2"><a
                                                class="btn-blue btn-radius btn-medium"
                                                title="Dùng thử miễn phí" target="_blank" rel="noreferrer"
                                                href="{{url('/signup')}}}}">Dùng thử miễn phí</a></div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="section-image">
                                    <img alt="Máy chủ ảo
Điện toán đám mây"
                                        srcset="{{url('upload/image/cloudserver_bg_illus.png')}} 1x, {{url('upload/image/cloudserver_bg_illus.png')}} 2x"
                                        src="{{url('upload/image/cloudserver_bg_illus.png')}}"
                                        width="775" height="610" decoding="async" data-nimg="1"
                                        class="h-auto" style="color: transparent;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-aboutcloud">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <img alt="Cloud Server là gì?"
                                      srcset="{{url('upload/image/bg_about_sr.jpeg')}} 1x,  2x"
                                      src="{{url('upload/image/bg_about_sr.jpeg')}}"
                                      width="516" height="417" decoding="async" data-nimg="1"
                                      class="section-aboutcloud__image" loading="lazy"
                                      style="color: transparent;"></div>
                    <div class="col-lg-6 col-12">
                        <h1 class="font-size-30">Cloud Server là gì?</h1>
                        <div class="d-flex">
                            <div class="checkmark-blue mtop-3px"></div>
                            <p class="description mt-0">Cloud server là hệ thống máy chủ hiệu năng cao được ảo hóa trên
                                nền tảng điện toán đám mây. Việc ảo hóa trên các cụm máy chủ vật lý mạnh mẽ giúp hệ
                                thống của doanh nghiệp luôn ổn định, sẵn sàng cao và không bị tắc nghẽn khi có lượng
                                truy cập lớn.</p></div>
                        <div class="d-flex">
                            <div class="checkmark-blue mtop-3px"></div>
                            <p class="description mt-0">Với lượng tài nguyên dự phòng lớn, máy chủ ảo Cloud Server cho
                                phép doanh nghiệp mở rộng tài nguyên gần như ngay lập tức bất cứ khi nào có nhu cầu. Lúc
                                này doanh nghiệp không cần tốn thời gian chờ đợi mua thêm thiết bị để mở rộng/ thay thế
                                hay lo ngại việc dừng dịch vụ quá lâu gây thiệt hại đến sản xuất kinh doanh.</p></div>
                        <div class="d-flex">
                            <div class="checkmark-blue mtop-3px"></div>
                            <p class="description mt-0">Cloud Server giúp khách hàng yên tâm tập trung vào hoạt động
                                kinh doanh với nền tảng đám mây bảo mật cùng khả năng xử lý vượt trội hơn rất nhiều so
                                với VPS hay Shared Hosting thông thường.</p></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-usage-level">
            <div class="container">
                <div class="section-title text-center"><h2 class="section-title__title text-center">Đa dạng cấp độ sử
                        dụng</h2>
                    <div class="section-title__description max-width-70">Đơn giản cho mọi người dùng - Mạnh mẽ với từng
                        doanh nghiệp
                    </div>
                </div>
                <div class="section-usage-level__list">
                    <div class="row ">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                            <div class="section-usage-level__list__item">
                                <div class="section-usage-level__list__item__header">
                                    <img alt="Basic"
                                              srcset="{{url('upload/image/icon/dedicated.svg')}} 1x, {{url('upload/image/icon/dedicated.svg')}} 2x"
                                              src="{{url('upload/image/icon/dedicated.svg')}}"
                                              width="60" height="60"
                                              decoding="async" data-nimg="1"
                                              loading="lazy"
                                              style="color: transparent;">
                                    <div class="section-usage-level__list__item__header-content"><h3
                                                class="section-usage-level__list__item__title">Basic</h3>
                                        <div class="section-usage-level__list__item__description"><p
                                                    class="section-usage-level__list__item__description--text">Ứng dụng
                                                đơn giản, cá nhân</p></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex">
                                        <div class="checkmark-green-2"></div>
                                        <p class="description mt-0 description-color">Trang bị CPU Intel Xeon V2 xung
                                            nhịp 2.4GHz cùng với ổ cứng Enterprise SSD</p></div>
                                    <div class="d-flex">
                                        <div class="checkmark-green-2"></div>
                                        <p class="description mt-0 description-color">Máy chủ WEB lưu lượng thấp</p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="checkmark-green-2"></div>
                                        <p class="description mt-0 description-color">Ứng dụng, blogs, diễn đàn cá
                                            nhân</p></div>
                                    <div class="d-flex">
                                        <div class="checkmark-green-2"></div>
                                        <p class="description mt-0 description-color">Cơ sở dữ liệu truy xuất không
                                            thường xuyên</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                            <div class="section-usage-level__list__item">
                                <div class="section-usage-level__list__item__header">
                                    <img alt="Standard"
                                      srcset="{{url('upload/image/icon/cloud-sever.svg')}} 1x, {{url('upload/image/icon/cloud-sever.svg')}} 2x"
                                      src="{{url('upload/image/icon/cloud-sever.svg')}}"
                                      width="60" height="60"
                                      decoding="async" data-nimg="1"
                                      loading="lazy"
                                      style="color: transparent;">
                                    <div class="section-usage-level__list__item__header-content"><h3
                                                class="section-usage-level__list__item__title">Standard</h3>
                                        <div class="section-usage-level__list__item__description"><p
                                                    class="section-usage-level__list__item__description--text">Ứng dụng
                                                hầu hết mọi nhu cầu</p></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex">
                                        <div class="checkmark-green-2"></div>
                                        <p class="description mt-0 description-color">Trang bị CPU Intel Xeon V4 xung
                                            nhịp 2.6GHz cùng với ổ cứng Enterprise SSD siêu nhanh</p></div>
                                    <div class="d-flex">
                                        <div class="checkmark-green-2"></div>
                                        <p class="description mt-0 description-color">Máy chủ Web lưu lượng trung
                                            bình</p></div>
                                    <div class="d-flex">
                                        <div class="checkmark-green-2"></div>
                                        <p class="description mt-0 description-color">Ứng dụng, Website cho doanh
                                            nghiệp</p></div>
                                    <div class="d-flex">
                                        <div class="checkmark-green-2"></div>
                                        <p class="description mt-0 description-color">Cơ sở dữ liệu truy xuất trung
                                            bình</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                            <div class="section-usage-level__list__item">
                                <div class="section-usage-level__list__item__header">
                                    <img alt="Premium"
                                      srcset="{{url('upload/image/icon/tubor.svg')}} 1x, {{url('upload/image/icon/tubor.svg')}} 2x"
                                      src="{{url('upload/image/icon/tubor.svg')}}"
                                      width="60" height="60"
                                      decoding="async" data-nimg="1"
                                      loading="lazy"
                                      style="color: transparent;">
                                    <div class="section-usage-level__list__item__header-content"><h3
                                                class="section-usage-level__list__item__title">Premium</h3>
                                        <div class="section-usage-level__list__item__description"><p
                                                    class="section-usage-level__list__item__description--text">Ứng dụng
                                                đòi hỏi hiệu năng cao</p></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex">
                                        <div class="checkmark-green-2"></div>
                                        <p class="description mt-0 description-color">Trang bị CPU Intel Xeon Gold xung
                                            nhịp 3.2GHz cùng với ổ cứng Enterprise NVMe siêu siêu nhanh</p></div>
                                    <div class="d-flex">
                                        <div class="checkmark-green-2"></div>
                                        <p class="description mt-0 description-color">Máy chủ Web lưu lượng lớn</p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="checkmark-green-2"></div>
                                        <p class="description mt-0 description-color">Ứng dụng, Website doanh nghiệp
                                            lớn</p></div>
                                    <div class="d-flex">
                                        <div class="checkmark-green-2"></div>
                                        <p class="description mt-0 description-color">Cơ sở dữ liệu truy xuất lớn, liên
                                            tục</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-5"><a
                                class="btn-blue btn-border btn-radius btn-medium" title="Xem bảng giá"
                                href="/pricing">Xem bảng giá</a></div>
                </div>
            </div>
        </div>
        <div class="section section-initialization-steps">
            <div class="container">
                <div class="section-title text-center"><h2 class="section-title__title text-center">3 bước khởi tạo đơn
                        giản</h2>
                    <div class="section-title__description max-width-70">Chỉ với vài giây, bạn đã có ngay máy chủ Cloud
                        Server hiệu suất cao
                    </div>
                </div>
                <div class="section-initialization-steps__list">
                    <div class="section-initialization-steps__list__item section-initialization-steps__list__item--1">
                        <div class="section-initialization-steps__list__item__top">
                            <div class="service-image">
                                <img alt="Image theo môi trường chạy ứng dụng"
                                    srcset="{{url('upload/image/initialization-steps/servers-1.svg')}} 1x, {{url('upload/image/initialization-steps/servers-1.svg')}} 2x"
                                    src="{{url('upload/image/initialization-steps/servers-1.svg')}}" width="45"
                                    height="45" decoding="async" data-nimg="1" loading="lazy"
                                    style="color: transparent;"></div>
                            <span class="service-number">1</span></div>
                        <div class="section-initialization-steps__list__item__body"><h3 class="text">Image theo môi
                                trường chạy ứng dụng</h3>
                            <p class="description">Lựa chọn các image OS, ứng dụng được cài đặt sẵn hoặc các Image tải
                                lên theo nhu cầu phù hợp</p></div>
                    </div>
                    <div class="section-initialization-steps__list__item section-initialization-steps__list__item--2">
                        <div class="section-initialization-steps__list__item__top">
                            <div class="service-image">
                                <img alt="Cấu hình phù hợp theo nhu cầu"
                                    srcset="{{url('upload/image/initialization-steps/servers-2.svg')}} 1x, {{url('upload/image/initialization-steps/servers-2.svg')}} 2x"
                                    src="{{url('upload/image/initialization-steps/servers-2.svg')}}" width="45"
                                    height="45" decoding="async" data-nimg="1" loading="lazy"
                                    style="color: transparent;"></div>
                            <span class="service-number">2</span></div>
                        <div class="section-initialization-steps__list__item__body"><h3 class="text">Cấu hình phù hợp
                                theo nhu cầu</h3>
                            <p class="description">Lựa chọn cấu hình phù hợp theo nhu cầu chạy ứng dụng. Mở rộng cấu
                                hình dễ dàng, ngay lập tức khi cần thiết</p></div>
                    </div>
                    <div class="section-initialization-steps__list__item section-initialization-steps__list__item--3">
                        <div class="section-initialization-steps__list__item__top">
                            <div class="service-image">
                                <img alt="Chu kỳ thanh toán tối ưu"
                                    srcset="{{url('upload/image/initialization-steps/servers-3.svg')}} 1x, {{url('upload/image/initialization-steps/servers-3.svg')}} 2x"
                                    src="{{url('upload/image/initialization-steps/servers-3.svg')}}" width="45"
                                    height="45" decoding="async" data-nimg="1" loading="lazy"
                                    style="color: transparent;"></div>
                            <span class="service-number">3</span></div>
                        <div class="section-initialization-steps__list__item__body"><h3 class="text">Chu kỳ thanh toán
                                tối ưu</h3>
                            <p class="description">Lựa chọn chu kỳ thanh toán theo giờ, tháng, năm linh hoạt với chiết
                                khấu cao để tối ưu chi phí cho nhu cầu sử dụng</p></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-highlight">
            <div class="container">
                <div class="section-title text-center"><h2 class="section-title__title text-center">Ưu điểm nổi bật</h2>
                </div>
                <div class="section-highlight__list">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                            <div class="section-highlight__list__item text-center">
                                <img alt="Hạ tầng mạnh mẽ"
                                        srcset="{{url('upload/image/highlight/infrastructure.svg')}} 1x, {{url('upload/image/highlight/infrastructure.svg')}} 2x"
                                        src="{{url('upload/image/highlight/infrastructure.svg')}}"
                                        width="100" height="100"
                                        decoding="async" data-nimg="1"
                                        loading="lazy"
                                        style="color: transparent;">
                                <h3 class="section-highlight__list__item__title mt-3">Hạ tầng mạnh mẽ</h3>
                                <div class="section-highlight__list__item__description"><p
                                            class="section-highlight__list__item__description--text text-ellipsis ellipsis-3">
                                        Hệ thống trang bị CPU 2.6Ghz trở lên cùng với 100% ổ cứng SSD Enterprise siêu
                                        nhanh</p></div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                            <div class="section-highlight__list__item text-center">
                                <img alt="Tốc độ cao"
                                    srcset="{{url('upload/image/highlight/speed.svg')}} 1x, {{url('upload/image/highlight/speed.svg')}} 2x"
                                    src="{{url('upload/image/highlight/speed.svg')}}"
                                    width="100" height="100"
                                    decoding="async" data-nimg="1"
                                    loading="lazy"
                                    style="color: transparent;">
                                <h3 class="section-highlight__list__item__title mt-3">Tốc độ cao</h3>
                                <div class="section-highlight__list__item__description"><p
                                            class="section-highlight__list__item__description--text text-ellipsis ellipsis-3">
                                        Mỗi Cloud Server băng thông ra Internet 1Gb/s và kết nối VPC nội bộ 10Gb</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                            <div class="section-highlight__list__item text-center">
                                <img alt="Thay đổi cấu hình tức thì"
                                        srcset="{{url('upload/image/highlight/config.svg')}} 1x, {{url('upload/image/highlight/config.svg')}} 2x"
                                        src="{{url('upload/image/highlight/config.svg')}}"
                                        width="100" height="100"
                                        decoding="async" data-nimg="1"
                                        loading="lazy"
                                        style="color: transparent;">
                                <h3 class="section-highlight__list__item__title mt-3">Thay đổi cấu hình tức thì</h3>
                                <div class="section-highlight__list__item__description"><p
                                            class="section-highlight__list__item__description--text text-ellipsis ellipsis-3">
                                        Thay đổi tăng/giảm tài nguyên RAM/CPU cho Cloud Server nhanh chóng, linh
                                        hoạt</p></div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                            <div class="section-highlight__list__item text-center">
                                <img alt="Ổn định - Bảo Mật"
                                            srcset="{{url('upload/image/highlight/security.svg')}} 1x, {{url('upload/image/highlight/security.svg')}} 2x"
                                            src="{{url('upload/image/highlight/security.svg')}}"
                                            width="100" height="100"
                                            decoding="async" data-nimg="1"
                                            loading="lazy"
                                            style="color: transparent;">
                                <h3 class="section-highlight__list__item__title mt-3">Ổn định - Bảo Mật</h3>
                                <div class="section-highlight__list__item__description"><p
                                            class="section-highlight__list__item__description--text text-ellipsis ellipsis-3">
                                        Cam kết mức độ sẵn sàng của server ở mức 99,99% đi kèm chính sách bồi thường rõ
                                        ràng.</p></div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                            <div class="section-highlight__list__item text-center">
                                <img alt="Quản trị thông minh"
                                        srcset="{{url('upload/image/highlight/admins.svg')}} 1x, {{url('upload/image/highlight/admins.svg')}} 2x"
                                        src="{{url('upload/image/highlight/admins.svg')}}"
                                        width="100" height="100"
                                        decoding="async" data-nimg="1"
                                        loading="lazy"
                                        style="color: transparent;">
                                <h3 class="section-highlight__list__item__title mt-3">Quản trị thông minh</h3>
                                <div class="section-highlight__list__item__description"><p
                                            class="section-highlight__list__item__description--text text-ellipsis ellipsis-3">
                                        Giao diện thân thiện, 100% tự động, khách hàng có thể chủ động mọi thao tác</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                            <div class="section-highlight__list__item text-center">
                                <img alt="Tối ưu chi phí"
                                        srcset="{{url('upload/image/highlight/cost-price.svg')}} 1x, {{url('upload/image/highlight/cost-price.svg')}} 2x"
                                        src="{{url('upload/image/highlight/cost-price.svg')}}"
                                        width="100" height="100"
                                        decoding="async" data-nimg="1"
                                        loading="lazy"
                                        style="color: transparent;">
                                <h3 class="section-highlight__list__item__title mt-3">Tối ưu chi phí</h3>
                                <div class="section-highlight__list__item__description"><p
                                            class="section-highlight__list__item__description--text text-ellipsis ellipsis-3">
                                        Chu kỳ thanh toán theo giờ, tháng, năm linh hoạt duy nhất tại Việt Nam</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-library">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <div class="section-library__content d-flex">
                            <div class="section-library__content__left"><h2 class="section-title__title">Thư viện image
                                    đa dạng</h2>
                                <p>Hỗ trợ nhiều hệ điều hành, ứng dụng được cài đặt sẵn hoặc tải lên các Image theo nhu
                                    cầu</p></div>
                            <div class="section-library__content__right hidden-xs">
                                <img alt="Thư viện image đa dạng"
                                    srcset="{{url('upload/image/bg.png')}} 1x, {{url('upload/image/bg.png')}} 2x"
                                    src="{{url('upload/image/library/bg.png')}}"
                                    width="270" height="300"
                                    decoding="async" data-nimg="1"
                                    loading="lazy"
                                    style="color: transparent;">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <div class="section-library__list">
                            <div class="section-library__list__item operating_system">
                                <div class="section-library--title operating_system__title">HỆ ĐIỀU HÀNH</div>
                                <div class="section-library__list__item__slide operating_system__list operating_system--slide">
                                    <div class="slick-slider slick-initialized">
                                        <div class="slick-list">
                                            <div class="slick-track"
                                                 style="width: 500px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                                                <div data-index="0" class="slick-slide slick-active slick-current"
                                                     tabindex="-1" aria-hidden="false"
                                                     style="outline: none; width: 125px;">
                                                    <div>
                                                        <div class="operating_system__list_item text-center"
                                                             tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <div class="operating_system__list_item__image"><img
                                                                        alt="Ubuntu"
                                                                        srcset="{{url('upload/image/library/ubuntu-logo-1.svg')}} 1x, {{url('upload/image/library/ubuntu-logo-1.svg')}} 2x"
                                                                        src="{{url('upload/image/library/ubuntu-logo-1.svg')}}"
                                                                        width="81" height="35" decoding="async"
                                                                        data-nimg="1" loading="lazy"
                                                                        style="color: transparent;"></div>
                                                            <p class="operating_system__list_item__title text-ellipsis pt-1">
                                                                Ubuntu</p></div>
                                                    </div>
                                                </div>
                                                <div data-index="1" class="slick-slide slick-active" tabindex="-1"
                                                     aria-hidden="false" style="outline: none; width: 125px;">
                                                    <div>
                                                        <div class="operating_system__list_item text-center"
                                                             tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <div class="operating_system__list_item__image"><img
                                                                        alt="Centos"
                                                                        srcset="{{url('upload/image/library/centos.svg')}} 1x, {{url('upload/image/library/centos.svg')}} 2x"
                                                                        src="{{url('upload/image/library/centos.svg')}}" width="81"
                                                                        height="35" decoding="async" data-nimg="1"
                                                                        loading="lazy" style="color: transparent;">
                                                            </div>
                                                            <p class="operating_system__list_item__title text-ellipsis pt-1">
                                                                Centos</p></div>
                                                    </div>
                                                </div>
                                                <div data-index="2" class="slick-slide slick-active" tabindex="-1"
                                                     aria-hidden="false" style="outline: none; width: 125px;">
                                                    <div>
                                                        <div class="operating_system__list_item text-center"
                                                             tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <div class="operating_system__list_item__image"><img
                                                                        alt="Debian"
                                                                        srcset="{{url('upload/image/library/debian.svg')}} 1x, {{url('upload/image/library/debian.svg')}} 2x"

                                                                        src="{{url('upload/image/library/debian.svg')}}" width="81"
                                                                        height="35" decoding="async" data-nimg="1"
                                                                        loading="lazy" style="color: transparent;">
                                                            </div>
                                                            <p class="operating_system__list_item__title text-ellipsis pt-1">
                                                                Debian</p></div>
                                                    </div>
                                                </div>
                                                <div data-index="3" class="slick-slide slick-active" tabindex="-1"
                                                     aria-hidden="false" style="outline: none; width: 125px;">
                                                    <div>
                                                        <div class="operating_system__list_item text-center"
                                                             tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <div class="operating_system__list_item__image">
                                                                <img
                                                                        alt="Fedora"
                                                                        srcset="{{url('upload/image/library/fedora.svg')}} 1x, {{url('upload/image/library/fedora.svg')}} 2x"
                                                                        src="{{url('upload/image/library/fedora.svg')}}" width="81"
                                                                        height="35" decoding="async" data-nimg="1"
                                                                        loading="lazy" style="color: transparent;">
                                                            </div>
                                                            <p class="operating_system__list_item__title text-ellipsis pt-1">
                                                                Fedora</p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section-library__list__item application">
                                <div class="section-library--title application__title">ỨNG DỤNG</div>
                                <div class="section-library__list__item__slide application__list application--slide">
                                    <div class="slick-slider slick-initialized">
                                        <div class="slick-list">
                                            <div class="slick-track"
                                                 style="width: 500px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                                                <div data-index="0" class="slick-slide" tabindex="-1" aria-hidden="true"
                                                     style="outline: none; width: 125px;">
                                                    <div>
                                                        <div class="operating_system__list_item text-center"
                                                             tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <div class="operating_system__list_item__image">
                                                                <img
                                                                        alt="Docker"
                                                                        srcset="{{url('upload/image/library/docker.svg')}} 1x, {{url('upload/image/library/docker.svg')}} 2x"
                                                                        src="{{url('upload/image/library/docker.svg')}}" width="81"
                                                                        height="35" decoding="async" data-nimg="1"
                                                                        loading="lazy" style="color: transparent;">
                                                            </div>
                                                            <p class="operating_system__list_item__title text-ellipsis pt-1">
                                                                Docker</p></div>
                                                    </div>
                                                </div>
                                                <div data-index="1" class="slick-slide slick-active slick-current"
                                                     tabindex="-1" aria-hidden="false"
                                                     style="outline: none; width: 125px;">
                                                    <div>
                                                        <div class="operating_system__list_item text-center"
                                                             tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <div class="operating_system__list_item__image">
                                                                <img
                                                                        alt="cPanel"
                                                                        srcset="{{url('upload/image/library/cpanel.svg')}} 1x, {{url('upload/image/library/cpanel.svg')}} 2x"
                                                                        src="{{url('upload/image/library/cpanel.svg')}}" width="81"
                                                                        height="35" decoding="async" data-nimg="1"
                                                                        loading="lazy" style="color: transparent;">
                                                            </div>
                                                            <p class="operating_system__list_item__title text-ellipsis pt-1">
                                                                cPanel</p></div>
                                                    </div>
                                                </div>
                                                <div data-index="2" class="slick-slide slick-active" tabindex="-1"
                                                     aria-hidden="false" style="outline: none; width: 125px;">
                                                    <div>
                                                        <div class="operating_system__list_item text-center"
                                                             tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <div class="operating_system__list_item__image">
                                                                <img
                                                                        alt="DirecrtAdmin"
                                                                        srcset="{{url('upload/image/library/DirectAdmin.svg')}} 1x, {{url('upload/image/library/DirectAdmin.svg')}} 2x"
                                                                        src="{{url('upload/image/library/DirectAdmin.svg')}}" width="81"
                                                                        height="35" decoding="async" data-nimg="1"
                                                                        loading="lazy" style="color: transparent;">
                                                            </div>
                                                            <p class="operating_system__list_item__title text-ellipsis pt-1">
                                                                DirecrtAdmin</p></div>
                                                    </div>
                                                </div>
                                                <div data-index="3" class="slick-slide slick-active" tabindex="-1"
                                                     aria-hidden="false" style="outline: none; width: 125px;">
                                                    <div>
                                                        <div class="operating_system__list_item text-center"
                                                             tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <div class="operating_system__list_item__image">
                                                                <img
                                                                        alt="MongoDB"
                                                                        srcset="{{url('upload/image/library/MongoDB.svg')}} 1x, {{url('upload/image/library/MongoDB.svg')}} 2x"
                                                                        src="{{url('upload/image/library/MongoDB.svg')}}" width="81"
                                                                        height="35" decoding="async" data-nimg="1"
                                                                        loading="lazy" style="color: transparent;">
                                                            </div>
                                                            <p class="operating_system__list_item__title text-ellipsis pt-1">
                                                                MongoDB</p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section-library__list__item customer_image">
                                <div class="section-library--title customer_image__title">CUSTOM IMAGE</div>
                                <div class="section-library__list__item__slide customer_image__list customer_image--slide">
                                    <div class="slick-slider slick-initialized">
                                        <div class="slick-list">
                                            <div class="slick-track"
                                                 style="width: 498px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                                                <div data-index="0" class="slick-slide" tabindex="-1" aria-hidden="true"
                                                     style="outline: none; width: 166px;">
                                                    <div>
                                                        <div class="operating_system__list_item text-center"
                                                             tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <div class="operating_system__list_item__image">
                                                                <img
                                                                        alt="Upload Image"
                                                                        srcset="{{url('upload/image/library/uploadsImage.svg')}} 1x, {{url('upload/image/library/uploadsImage.svg')}} 2x"
                                                                        src="{{url('upload/image/library/uploadsImage.svg')}}"
                                                                        width="122" height="35" decoding="async"
                                                                        data-nimg="1" loading="lazy"
                                                                        style="color: transparent;"></div>
                                                            <p class="operating_system__list_item__title text-ellipsis pt-1">
                                                                Upload Image</p></div>
                                                    </div>
                                                </div>
                                                <div data-index="1" class="slick-slide" tabindex="-1" aria-hidden="true"
                                                     style="outline: none; width: 166px;">
                                                    <div>
                                                        <div class="operating_system__list_item text-center"
                                                             tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <div class="operating_system__list_item__image">
                                                                <img
                                                                        alt="Snapshot Image"
                                                                        srcset="{{url('upload/image/library/snapshot.svg')}} 1x, {{url('upload/image/library/snapshot.svg')}} 2x"
                                                                        src="{{url('upload/image/library/snapshot.svg')}}" width="122"
                                                                        height="35" decoding="async" data-nimg="1"
                                                                        loading="lazy" style="color: transparent;">
                                                            </div>
                                                            <p class="operating_system__list_item__title text-ellipsis pt-1">
                                                                Snapshot Image</p></div>
                                                    </div>
                                                </div>
                                                <div data-index="2" class="slick-slide slick-active slick-current"
                                                     tabindex="-1" aria-hidden="false"
                                                     style="outline: none; width: 166px;">
                                                    <div>
                                                        <div class="operating_system__list_item text-center"
                                                             tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <div class="operating_system__list_item__image">
                                                                <img
                                                                        alt="Backup Image"
                                                                        srcset="{{url('upload/image/library/clock-1.svg')}} 1x, {{url('upload/image/library/clock-1.svg')}} 2x"
                                                                        src="{{url('upload/image/library/clock-1.svg')}}" width="122"
                                                                        height="35" decoding="async" data-nimg="1"
                                                                        loading="lazy" style="color: transparent;">
                                                            </div>
                                                            <p class="operating_system__list_item__title text-ellipsis pt-1">
                                                                Backup Image</p></div>
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
            </div>
        </div>
        <div class="section section-features">
            <div class="container">
                <div class="section-title text-center"><h2 class="section-title__title text-center max-width-60">Tiết
                        kiệm thời gian quản trị với các công cụ và tính năng tuyệt vời</h2></div>
                <div class="section-features__tab">
                    <div class="section-features__tab-header"><span data-active="true">Metric</span><span
                                data-active="false" class="tab-firewall ">Cloud Firewall</span><span
                                data-active="false">Snapshot</span><span data-active="false">Backup</span></div>
                </div>
                <div class="tab-content tab-content--features-list">
                    <div id="feature_metric" class="tab-pane fade feature_metric active show">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-7 col-md-6 col-12 order-2">
                                <div class="feature--content feature_metric__content"><h3
                                            class="feature_metric__content__title">Metric</h3>
                                    <p class="feature_metric__content__description">Giám sát tài nguyên sử dụng real
                                        time, giúp khách hàng đánh giá và dự trù kế hoạch sử dụng</p></div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-6 col-12 order-1">
                                <div class="feature_metric__image text-center">
                                    <img alt="metric"
                                        srcset="{{url('upload/image/feature/metric.svg')}} 1x, {{url('upload/image/feature/metric.svg')}} 2x"
                                        src="{{url('upload/image/feature/metric.svg')}}"
                                        width="290" height="316"
                                        decoding="async" data-nimg="1"
                                        loading="lazy"
                                        style="color: transparent;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('frontEnd.layouts.usefree')
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
