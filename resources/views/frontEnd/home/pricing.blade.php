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
                                <div class="section-title"><p class="mb-0 font-size-30 text-primary">Bảng giá</p>
                                    <h2 class="text-white mt-2 font-size-32 mb-3"
                                        style="font-weight: normal; line-height: 55px;">THANH TOÁN THEO GIỜ
                                        TIẾT KIỆM KHI MUA NHIỀU HƠN</h2>
                                    <div class="d-flex">
                                        <div class="checkmark-primary mt-1 hidden-md"></div>
                                        <p class="description text-white mt-0">Dịch vụ đa dạng - Chất lượng vượt trội -
                                            Giá thành cạnh tranh</p></div>
                                    <div class="d-flex">
                                        <div class="checkmark-primary mt-1 hidden-md"></div>
                                        <p class="description text-white mt-0">Tiết kiệm hơn khi đăng ký hoặc gia hạn
                                            dịch vụ từ 3 tháng trở đi với chiết khấu lên đến 30%</p></div>
                                    <div class="d-flex">
                                        <div class="checkmark-primary mt-1 hidden-md"></div>
                                        <p class="description text-white mt-0">TOP 1 nhà cung cấp dịch vụ Cloud tại Việt
                                            Nam hỗ trợ các chu kỳ thanh toán theo giờ, tháng, năm linh hoạt</p></div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="section-image px-5">
                                    <img alt="THANH TOÁN THEO GIỜ TIẾT KIỆM KHI MUA NHIỀU HƠN"
                                     srcset="{{url('upload/image/pricing/banner__pricing.png')}} 1x, {{url('upload/image/pricing/banner__pricing.png')}} 2x"
                                     src="{{url('upload/image/pricing/banner__pricing.png')}}"
                                    width="728" height="679" decoding="async"
                                    data-nimg="1" class="h-auto"  style="color: transparent;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="section wrapper-container container_pricing">
                <div class="container d-flex">
                    <div class="section-pricing-content__left ">
                        <div>
                            <div style="padding-bottom: 0px;"></div>
                            <div style="padding-bottom: 130px; transform: translateZ(0px);">
                                <div>
                                    <div class="">
                                        <div class="section-pricing-content-menu scroll-custom">
                                            <div class="mb-2"><span style="color: red;">(*)</span> Bảng giá chưa bao gồm
                                                10% VAT
                                            </div>
                                            <ul class="section-pricing-content-menu_ul">
                                                <li><a class="section-pricing-content-menu_ul-a"
                                                       href="/pricing#cloud-server">
                                                        <div class="d-flex">
                                                            <img alt="Cloud Server"
                                                            srcset="{{url('upload/image/icon/cloud-sever.svg')}} 1x, {{url('upload/image/icon/cloud-sever.svg')}} 2x"
                                                            src="{{url('upload/image/icon/cloud-sever.svg')}}"
                                                            width="50" height="50" decoding="async"
                                                            data-nimg="1" loading="lazy" style="color: transparent;">
                                                            <div class="w-flex ml-4"><p
                                                                        class="mt-0 mb-2 font-weight-bold">Cloud
                                                                    Server</p>
                                                                <p class="mt-2 mb-0 font-size-14">Máy chủ ảo điện toán
                                                                    đám mây hiệu năng cao</p></div>
                                                        </div>
                                                    </a></li>
                                                <li><a class="section-pricing-content-menu_ul-a"
                                                       href="/pricing#load-balancer">
                                                        <div class="d-flex"><img alt="Load Balancer"
                                                                                 srcset="{{url('upload/image/icon/load_balancer.svg')}} 1x, {{url('upload/image/icon/load_balancer.svg')}} 2x"
                                                                                 src="{{url('upload/image/icon/load_balancer.svg')}}"
                                                                                 width="50" height="50" decoding="async"
                                                                                 data-nimg="1" loading="lazy"
                                                                                 style="color: transparent;">
                                                            <div class="w-flex ml-4"><p
                                                                        class="mt-0 mb-2 font-weight-bold">Load
                                                                    Balancer</p>
                                                                <p class="mt-2 mb-0 font-size-14">Cân bằng tải cho ứng
                                                                    dụng, website của bạn</p></div>
                                                        </div>
                                                    </a></li>
                                                <li><a class="section-pricing-content-menu_ul-a" href="/pricing#domain">
                                                        <div class="d-flex"><img alt="Tên miền"
                                                                                 srcset="{{url('upload/image/icon/cloud-sever.svg')}} 1x, {{url('upload/image/icon/cloud-sever.svg')}} 2x"
                                                                                 src="{{url('upload/image/icon/cloud-sever.svg')}}"
                                                                                 width="50" height="50" decoding="async"
                                                                                 data-nimg="1" loading="lazy"
                                                                                 style="color: transparent;">
                                                            <div class="w-flex ml-4"><p
                                                                        class="mt-0 mb-2 font-weight-bold">Tên miền</p>
                                                                <p class="mt-2 mb-0 font-size-14">Bảo vệ thương hiệu của
                                                                    bạn trên internet</p></div>
                                                        </div>
                                                    </a></li>
                                                <li><a class="section-pricing-content-menu_ul-a" href="/pricing#ssl">
                                                        <div class="d-flex"><img alt="SSL"
                                                                                 srcset="{{url('upload/image/icon/cloud-sever.svg')}} 1x, {{url('upload/image/icon/cloud-sever.svg')}} 2x"
                                                                                 src="{{url('upload/image/icon/cloud-sever.svg')}}"
                                                                                 width="50" height="50" decoding="async"
                                                                                 data-nimg="1" loading="lazy"
                                                                                 style="color: transparent;">
                                                            <div class="w-flex ml-4"><p
                                                                        class="mt-0 mb-2 font-weight-bold">SSL</p>
                                                                <p class="mt-2 mb-0 font-size-14">Bảo mật website với
                                                                    https://</p></div>
                                                        </div>
                                                    </a></li>
                                                <li><a class="section-pricing-content-menu_ul-a"
                                                       href="/pricing#dedicated-server">
                                                        <div class="d-flex"><img alt="Dedicated server"
                                                                                 srcset="{{url('upload/image/icon/dedicated.svg')}} 1x, {{url('upload/image/icon/dedicated.svg')}} 2x"
                                                                                 src="{{url('upload/image/icon/dedicated.svg')}}"
                                                                                 width="50" height="50" decoding="async"
                                                                                 data-nimg="1" loading="lazy"
                                                                                 style="color: transparent;">
                                                            <div class="w-flex ml-4"><p
                                                                        class="mt-0 mb-2 font-weight-bold">Dedicated
                                                                    server</p>
                                                                <p class="mt-2 mb-0 font-size-14">Máy chủ vật lý mạnh
                                                                    mẽ, tài nguyên xử lý lớn</p></div>
                                                        </div>
                                                    </a></li>
                                                <li><a class="section-pricing-content-menu_ul-a"
                                                       href="/pricing#colocation-server">
                                                        <div class="d-flex"><img alt="Colocation server"
                                                                                 srcset="{{url('upload/image/icon/colocation-server.svg')}} 1x, {{url('upload/image/icon/colocation-server.svg')}} 2x"
                                                                                 src="{{url('upload/image/icon/colocation-server.svg')}}"
                                                                                 width="50" height="50" decoding="async"
                                                                                 data-nimg="1" loading="lazy"
                                                                                 style="color: transparent;">
                                                            <div class="w-flex ml-4"><p
                                                                        class="mt-0 mb-2 font-weight-bold">Colocation
                                                                    server</p>
                                                                <p class="mt-2 mb-0 font-size-14">Dịch vụ cho thuê chỗ
                                                                    đặt máy chủ chất lượng cao</p></div>
                                                        </div>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-pricing-content__right pt-4">
                        <div class="mb-3 d-block d-lg-none"><span style="color: red;">(*)</span> Bảng giá chưa bao gồm
                            10% VAT
                        </div>
                        <div class="section-pricing-content__menu-right-item" id="cloud-server">
                            <div class="d-flex align-items-center mb-4"><img alt="Cloud Server"
                                                                             srcset="{{url('upload/image/icon/cloud-sever.svg')}} 1x, {{url('upload/image/icon/cloud-sever.svg')}} 2x"
                                                                             src="{{url('upload/image/icon/cloud-sever.svg')}}"
                                                                             width="45" height="45" decoding="async"
                                                                             data-nimg="1" loading="lazy"
                                                                             style="color: transparent;">
                                <h2 class="mb-0 mt-0 ml-3">Cloud Server</h2></div>
                            <p class="description mt-0 description-color mb-4">Khởi tạo Cloud Server chỉ trong vài giây
                                với giao diện quản trị thông minh, tự động hoàn toàn 100%. Hệ thống máy chủ ảo với nhiều
                                lựa chọn về cấu hình, giúp đáp ứng hầu hết mọi nhu cầu về chạy ứng dụng, website,... của
                                bạn</p>
                            <div class="mb-4"><h3 class="mb-3">Basic</h3>
                                <p class="description mt-0 description-color">Ứng dụng đơn giản, cá nhân - Trang bị CPU
                                    Intel Xeon V2 xung nhịp 2.4GHz cùng với ổ cứng Enterprise SSD</p>
                                <div class="tab-content tab-content--price-list--mobile section-price-list__detail--mobile d-block d-md-none">
                                    <div class="tab-pane package_12_month change-box active" id="package_12_month">
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">79,000 đ</span><span
                                                        class="package__old-price d-block">55,300 đ/tháng </span><span
                                                        class="package__price d-block">121đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>1
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>1 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>20 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector">
                                                        <span class="ant-select-selection-search">
                                                            <input type="search"
                                                           autocomplete="off"
                                                           class="ant-select-selection-search-input"
                                                           role="combobox"
                                                           aria-haspopup="listbox"
                                                           aria-owns="rc_select_3_list"
                                                           aria-autocomplete="list"
                                                           aria-controls="rc_select_3_list"
                                                           aria-activedescendant="rc_select_3_list_0"
                                                           readonly=""
                                                           unselectable="on"
                                                           value=""
                                                           id="rc_select_3" style="opacity: 0;">
                                                        </span>
                                                        <span class="ant-select-selection-item"><span>36 tháng = 1,990,800đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"  style="user-select: none;">
                                                        <span role="img" aria-label="down" class="anticon anticon-down ant-select-suffix">
                                                            <svg viewBox="64 64 896 896" focusable="false"  data-icon="down" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                <path d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">140,000 đ</span><span
                                                        class="package__old-price d-block">98,000 đ/tháng </span><span
                                                        class="package__price d-block">214đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>1
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>2 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>40 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_4_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_4_list"
                                                                                                           aria-activedescendant="rc_select_4_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_4"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 3,528,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">190,000 đ</span><span
                                                        class="package__old-price d-block">133,000 đ/tháng </span><span
                                                        class="package__price d-block">290đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>2
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>2 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>60 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_5_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_5_list"
                                                                                                           aria-activedescendant="rc_select_5_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_5"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 4,788,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">280,000 đ</span><span
                                                        class="package__old-price d-block">196,000 đ/tháng </span><span
                                                        class="package__price d-block">428đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>2
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>4 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>80 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_6_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_6_list"
                                                                                                           aria-activedescendant="rc_select_6_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_6"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 7,056,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">380,000 đ</span><span
                                                        class="package__old-price d-block">266,000 đ/tháng </span><span
                                                        class="package__price d-block">581đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>4
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>4 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>120 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_7_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_7_list"
                                                                                                           aria-activedescendant="rc_select_7_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_7"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 9,576,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="#"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">560,000 đ</span><span
                                                        class="package__old-price d-block">392,000 đ/tháng </span><span
                                                        class="package__price d-block">856đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>4
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>8 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>160 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_8_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_8_list"
                                                                                                           aria-activedescendant="rc_select_8_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_8"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 14,112,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">840,000 đ</span><span
                                                        class="package__old-price d-block">588,000 đ/tháng </span><span
                                                        class="package__price d-block">1,283đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>6
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>12 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>240 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_9_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_9_list"
                                                                                                           aria-activedescendant="rc_select_9_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_9"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 21,168,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="#"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">1,120,000 đ</span><span
                                                        class="package__old-price d-block">784,000 đ/tháng </span><span
                                                        class="package__price d-block">1,711đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>8
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>16 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>320 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_10_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_10_list"
                                                                                                           aria-activedescendant="rc_select_10_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_10"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 28,224,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="#"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="section-price-list__body section-price-list__body--desktop hidden-xs">
                                    <div class="tab-content tab-content--price-list"
                                         style="box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 30px;">
                                        <div class="tab-pane fade active show table-price-list__td-top"
                                             id="price_list_month_12" role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="table-price-list ">
                                                    <thead>
                                                    <tr>
                                                        <th>
                                                            <div class="table-head">CPU</div>
                                                        </th>
                                                        <th>
                                                            <div class="table-head">Ram</div>
                                                        </th>
                                                        <th>
                                                            <div class="table-head">SSD Storage</div>
                                                        </th>
                                                        <th>
                                                            <div class="table-head">Tốc độ mạng</div>
                                                        </th>
                                                        <th>
                                                            <div class="table-head">GIÁ</div>
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">1 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">20 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">79,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">55,300
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">121 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_11_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_11_list"
                                                                                    aria-activedescendant="rc_select_11_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_11"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 1,990,800đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">1 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">2 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">40 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">140,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">98,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">214 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_12_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_12_list"
                                                                                    aria-activedescendant="rc_select_12_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_12"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 3,528,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">2 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">2 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">60 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">190,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">133,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">290 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_13_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_13_list"
                                                                                    aria-activedescendant="rc_select_13_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_13"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 4,788,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">2 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">4 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">80 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">280,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">196,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">428 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_14_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_14_list"
                                                                                    aria-activedescendant="rc_select_14_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_14"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 7,056,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">4 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">4 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">120 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">380,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">266,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">581 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_15_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_15_list"
                                                                                    aria-activedescendant="rc_select_15_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_15"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 9,576,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">4 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">8 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">160 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">560,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">392,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">856 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_16_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_16_list"
                                                                                    aria-activedescendant="rc_select_16_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_16"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 14,112,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">6 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">12 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">240 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">840,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">588,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">1,283 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_17_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_17_list"
                                                                                    aria-activedescendant="rc_select_17_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_17"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 21,168,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">8 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">16 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">320 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">1,120,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">784,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">1,711 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_18_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_18_list"
                                                                                    aria-activedescendant="rc_select_18_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_18"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 28,224,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4"><h3 class="mb-3">Standard</h3>
                                <p class="description mt-0 description-color">Ứng dụng hầu hết mọi nhu cầu - Trang bị
                                    CPU Intel Xeon V4 xung nhịp 2.6GHz cùng với ổ cứng Enterprise SSD siêu nhanh</p>
                                <div class="tab-content tab-content--price-list--mobile section-price-list__detail--mobile d-block d-md-none">
                                    <div class="tab-pane package_12_month change-box active" id="package_12_month">
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">110,000 đ</span><span
                                                        class="package__old-price d-block">77,000 đ/tháng </span><span
                                                        class="package__price d-block">168đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>1
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>1 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>20 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_19_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_19_list"
                                                                                                           aria-activedescendant="rc_select_19_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_19"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 2,772,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">180,000 đ</span><span
                                                        class="package__old-price d-block">126,000 đ/tháng </span><span
                                                        class="package__price d-block">275đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>1
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>2 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>40 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_20_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_20_list"
                                                                                                           aria-activedescendant="rc_select_20_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_20"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 4,536,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">250,000 đ</span><span
                                                        class="package__old-price d-block">175,000 đ/tháng </span><span
                                                        class="package__price d-block">382đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>2
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>2 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>60 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_21_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_21_list"
                                                                                                           aria-activedescendant="rc_select_21_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_21"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 6,300,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn  btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">370,000 đ</span><span
                                                        class="package__old-price d-block">259,000 đ/tháng </span><span
                                                        class="package__price d-block">565đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>2
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>4 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>80 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_22_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_22_list"
                                                                                                           aria-activedescendant="rc_select_22_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_22"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 9,324,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">500,000 đ</span><span
                                                        class="package__old-price d-block">350,000 đ/tháng </span><span
                                                        class="package__price d-block">764đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>4
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>4 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>120 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_23_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_23_list"
                                                                                                           aria-activedescendant="rc_select_23_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_23"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 12,600,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">730,000 đ</span><span
                                                        class="package__old-price d-block">511,000 đ/tháng </span><span
                                                        class="package__price d-block">1,115đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>4
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>8 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>160 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_24_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_24_list"
                                                                                                           aria-activedescendant="rc_select_24_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_24"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 18,396,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">1,100,000 đ</span><span
                                                        class="package__old-price d-block">770,000 đ/tháng </span><span
                                                        class="package__price d-block">1,681đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>6
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>12 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>240 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_25_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_25_list"
                                                                                                           aria-activedescendant="rc_select_25_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_25"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 27,720,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">1,450,000 đ</span><span
                                                        class="package__old-price d-block">1,015,000 đ/tháng </span><span
                                                        class="package__price d-block">2,215đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>8
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>16 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>320 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_26_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_26_list"
                                                                                                           aria-activedescendant="rc_select_26_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_26"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 36,540,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">2,190,000 đ</span><span
                                                        class="package__old-price d-block">1,533,000 đ/tháng </span><span
                                                        class="package__price d-block">3,346đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>12
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>24 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>480 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_27_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_27_list"
                                                                                                           aria-activedescendant="rc_select_27_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_27"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 55,188,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">2,900,000 đ</span><span
                                                        class="package__old-price d-block">2,030,000 đ/tháng </span><span
                                                        class="package__price d-block">4,431đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>16
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>32 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>640 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_28_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_28_list"
                                                                                                           aria-activedescendant="rc_select_28_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_28"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 73,080,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/cloud/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">4,370,000 đ</span><span
                                                        class="package__old-price d-block">3,059,000 đ/tháng </span><span
                                                        class="package__price d-block">6,676đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>24
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>48 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>960 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_29_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_29_list"
                                                                                                           aria-activedescendant="rc_select_29_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_29"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 110,124,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="section-price-list__body section-price-list__body--desktop hidden-xs">
                                    <div class="tab-content tab-content--price-list"
                                         style="box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 30px;">
                                        <div class="tab-pane fade active show table-price-list__td-top"
                                             id="price_list_month_12" role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="table-price-list ">
                                                    <thead>
                                                    <tr>
                                                        <th>
                                                            <div class="table-head">CPU</div>
                                                        </th>
                                                        <th>
                                                            <div class="table-head">Ram</div>
                                                        </th>
                                                        <th>
                                                            <div class="table-head">SSD Storage</div>
                                                        </th>
                                                        <th>
                                                            <div class="table-head">Tốc độ mạng</div>
                                                        </th>
                                                        <th>
                                                            <div class="table-head">GIÁ</div>
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">1 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">20 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">110,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">77,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">168 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_30_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_30_list"
                                                                                    aria-activedescendant="rc_select_30_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_30"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 2,772,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">1 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">2 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">40 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">180,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">126,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">275 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_31_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_31_list"
                                                                                    aria-activedescendant="rc_select_31_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_31"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 4,536,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">2 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">2 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">60 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">250,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">175,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">382 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_32_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_32_list"
                                                                                    aria-activedescendant="rc_select_32_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_32"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 6,300,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">2 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">4 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">80 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">370,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">259,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">565 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_33_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_33_list"
                                                                                    aria-activedescendant="rc_select_33_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_33"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 9,324,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">4 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">4 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">120 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">500,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">350,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">764 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_34_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_34_list"
                                                                                    aria-activedescendant="rc_select_34_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_34"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 12,600,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">4 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">8 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">160 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">730,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">511,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">1,115 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_35_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_35_list"
                                                                                    aria-activedescendant="rc_select_35_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_35"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 18,396,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">6 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">12 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">240 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">1,100,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">770,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">1,681 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_36_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_36_list"
                                                                                    aria-activedescendant="rc_select_36_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_36"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 27,720,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">8 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">16 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">320 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">1,450,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">1,015,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">2,215 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_37_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_37_list"
                                                                                    aria-activedescendant="rc_select_37_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_37"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 36,540,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">12 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">24 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">480 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">2,190,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">1,533,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">3,346 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_38_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_38_list"
                                                                                    aria-activedescendant="rc_select_38_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_38"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 55,188,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">16 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">32 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">640 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">2,900,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">2,030,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">4,431 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_39_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_39_list"
                                                                                    aria-activedescendant="rc_select_39_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_39"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 73,080,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">24 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">48 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">960 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">4,370,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">3,059,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">6,676 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_40_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_40_list"
                                                                                    aria-activedescendant="rc_select_40_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_40"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 110,124,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4"><h3 class="mb-3">Premium</h3>
                                <p class="description mt-0 description-color">Ứng dụng đòi hỏi hiệu năng cao - Trang bị
                                    CPU Intel Xeon Gold xung nhịp 3.2GHz cùng với ổ cứng Enterprise NVMe siêu siêu
                                    nhanh</p>
                                <div class="tab-content tab-content--price-list--mobile section-price-list__detail--mobile d-block d-md-none">
                                    <div class="tab-pane package_12_month change-box active" id="package_12_month">
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">140,000 đ</span><span
                                                        class="package__old-price d-block">98,000 đ/tháng </span><span
                                                        class="package__price d-block">214đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>1
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>1 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>20 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_41_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_41_list"
                                                                                                           aria-activedescendant="rc_select_41_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_41"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 3,528,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">230,000 đ</span><span
                                                        class="package__old-price d-block">161,000 đ/tháng </span><span
                                                        class="package__price d-block">351đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>1
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>2 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>40 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_42_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_42_list"
                                                                                                           aria-activedescendant="rc_select_42_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_42"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 5,796,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">330,000 đ</span><span
                                                        class="package__old-price d-block">231,000 đ/tháng </span><span
                                                        class="package__price d-block">504đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>2
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>2 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>60 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_43_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_43_list"
                                                                                                           aria-activedescendant="rc_select_43_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_43"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 8,316,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">480,000 đ</span><span
                                                        class="package__old-price d-block">336,000 đ/tháng </span><span
                                                        class="package__price d-block">733đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>2
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>4 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>80 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_44_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_44_list"
                                                                                                           aria-activedescendant="rc_select_44_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_44"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 12,096,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">650,000 đ</span><span
                                                        class="package__old-price d-block">455,000 đ/tháng </span><span
                                                        class="package__price d-block">993đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>4
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>4 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>120 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_45_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_45_list"
                                                                                                           aria-activedescendant="rc_select_45_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_45"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 16,380,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">950,000 đ</span><span
                                                        class="package__old-price d-block">665,000 đ/tháng </span><span
                                                        class="package__price d-block">1,451đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>4
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>8 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>160 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_46_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_46_list"
                                                                                                           aria-activedescendant="rc_select_46_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_46"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 23,940,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">1,430,000 đ</span><span
                                                        class="package__old-price d-block">1,001,000 đ/tháng </span><span
                                                        class="package__price d-block">2,185đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>6
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>12 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>240 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_47_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_47_list"
                                                                                                           aria-activedescendant="rc_select_47_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_47"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 36,036,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">1,890,000 đ</span><span
                                                        class="package__old-price d-block">1,323,000 đ/tháng </span><span
                                                        class="package__price d-block">2,888đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>8
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>16 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>320 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_48_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_48_list"
                                                                                                           aria-activedescendant="rc_select_48_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_48"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 47,628,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">2,840,000 đ</span><span
                                                        class="package__old-price d-block">1,988,000 đ/tháng </span><span
                                                        class="package__price d-block">4,339đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>12
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>24 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>480 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_49_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_49_list"
                                                                                                           aria-activedescendant="rc_select_49_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_49"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 71,568,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">3,770,000 đ</span><span
                                                        class="package__old-price d-block">2,639,000 đ/tháng </span><span
                                                        class="package__price d-block">5,760đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>16
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>32 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>640 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_50_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_50_list"
                                                                                                           aria-activedescendant="rc_select_50_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_50"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 95,004,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                        <div class="package">
                                            <div class="package__top"><span class="font-size-14 text-red"
                                                                            style="text-decoration: line-through;">5,680,000 đ</span><span
                                                        class="package__old-price d-block">3,976,000 đ/tháng </span><span
                                                        class="package__price d-block">8,678đ/giờ</span></div>
                                            <div class="package__body"><p class="package__body__content"><strong>24
                                                        CPU</strong></p>
                                                <p class="package__body__content"><strong>48 GB </strong>Ram</p>
                                                <p class="package__body__content"><strong>960 GB</strong></p>
                                                <p class="package__body__content"><strong>1 Gb/s</strong> Tốc độ mạng
                                                </p>
                                                <div>Tính thử giá:</div>
                                                <div class="ant-select ant-select-lg w-full text-left input_select_rounded mb-4 ant-select-single ant-select-show-arrow">
                                                    <div class="ant-select-selector"><span
                                                                class="ant-select-selection-search"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           class="ant-select-selection-search-input"
                                                                                                           role="combobox"
                                                                                                           aria-haspopup="listbox"
                                                                                                           aria-owns="rc_select_51_list"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="rc_select_51_list"
                                                                                                           aria-activedescendant="rc_select_51_list_0"
                                                                                                           readonly=""
                                                                                                           unselectable="on"
                                                                                                           value=""
                                                                                                           id="rc_select_51"
                                                                                                           style="opacity: 0;"></span><span
                                                                class="ant-select-selection-item"><span>36 tháng = 143,136,000đ</span><span
                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                    </div>
                                                    <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                          style="user-select: none;"><span role="img" aria-label="down"
                                                                                           class="anticon anticon-down ant-select-suffix"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="down" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="package__bottom"><a
                                                        href="/server/deploy"
                                                        target="_blank" rel="noreferrer"
                                                        class="package__bottom__btn btn btn-blue d-block btn-border"
                                                        title="Khởi tạo">Khởi tạo</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="section-price-list__body section-price-list__body--desktop hidden-xs">
                                    <div class="tab-content tab-content--price-list"
                                         style="box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 30px;">
                                        <div class="tab-pane fade active show table-price-list__td-top"
                                             id="price_list_month_12" role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="table-price-list ">
                                                    <thead>
                                                    <tr>
                                                        <th>
                                                            <div class="table-head">CPU</div>
                                                        </th>
                                                        <th>
                                                            <div class="table-head">Ram</div>
                                                        </th>
                                                        <th>
                                                            <div class="table-head">SSD Storage</div>
                                                        </th>
                                                        <th>
                                                            <div class="table-head">Tốc độ mạng</div>
                                                        </th>
                                                        <th>
                                                            <div class="table-head">GIÁ</div>
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">1 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">20 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">140,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">98,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">214 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_52_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_52_list"
                                                                                    aria-activedescendant="rc_select_52_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_52"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 3,528,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="https://my.cloudfly.vn/cloud/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">1 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">2 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">40 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">230,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">161,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">351 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_53_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_53_list"
                                                                                    aria-activedescendant="rc_select_53_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_53"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 5,796,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">2 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">2 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">60 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">330,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">231,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">504 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_54_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_54_list"
                                                                                    aria-activedescendant="rc_select_54_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_54"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 8,316,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">2 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">4 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">80 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">480,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">336,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">733 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_55_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_55_list"
                                                                                    aria-activedescendant="rc_select_55_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_55"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 12,096,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">4 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">4 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">120 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">650,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">455,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">993 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_56_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_56_list"
                                                                                    aria-activedescendant="rc_select_56_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_56"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 16,380,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">4 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">8 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">160 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">950,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">665,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">1,451 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_57_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_57_list"
                                                                                    aria-activedescendant="rc_select_57_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_57"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 23,940,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">6 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">12 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">240 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">1,430,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">1,001,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">2,185 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_58_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_58_list"
                                                                                    aria-activedescendant="rc_select_58_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_58"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 36,036,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">8 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">16 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">320 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">1,890,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">1,323,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">2,888 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_59_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_59_list"
                                                                                    aria-activedescendant="rc_select_59_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_59"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 47,628,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">12 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">24 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">480 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">2,840,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">1,988,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">4,339 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_60_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_60_list"
                                                                                    aria-activedescendant="rc_select_60_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_60"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 71,568,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">16 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">32 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">640 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">3,770,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">2,639,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">5,760 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_61_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_61_list"
                                                                                    aria-activedescendant="rc_select_61_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_61"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 95,004,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="table-content text-left">24 CPU</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">48 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">960 GB</div>
                                                        </td>
                                                        <td>
                                                            <div class="table-content text-left">1 Gb/s</div>
                                                        </td>
                                                        <td>
                                                            <div class="font-size-14 text-red"
                                                                 style="text-decoration: line-through;">5,680,000 đ
                                                            </div>
                                                            <div class="table-content package-price text-left">3,976,000
                                                                đ/tháng
                                                            </div>
                                                            <p class="package__old-price">8,678 đ/giờ</p></td>
                                                        <td align="right">
                                                            <div class="d-flex align-items-center flex-wrap justify-content-end gap-5">
                                                                <div class="ant-select w-full text-left input_select_rounded max-width-230 m-0 input_select-37 font-size-13 ant-select-single ant-select-show-arrow">
                                                                    <div class="ant-select-selector"><span
                                                                                class="ant-select-selection-search"><input
                                                                                    type="search" autocomplete="off"
                                                                                    class="ant-select-selection-search-input"
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-owns="rc_select_62_list"
                                                                                    aria-autocomplete="list"
                                                                                    aria-controls="rc_select_62_list"
                                                                                    aria-activedescendant="rc_select_62_list_0"
                                                                                    readonly="" unselectable="on"
                                                                                    value="" id="rc_select_62"
                                                                                    style="opacity: 0;"></span><span
                                                                                class="ant-select-selection-item"><span>36 tháng = 143,136,000đ</span><span
                                                                                    class="input_select_rounded--discount">-30%</span></span>
                                                                    </div>
                                                                    <span class="ant-select-arrow" unselectable="on"
                                                                          aria-hidden="true" style="user-select: none;"><span
                                                                                role="img" aria-label="down"
                                                                                class="anticon anticon-down ant-select-suffix"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" data-icon="down"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true"><path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                                </div>
                                                                <div class="item-action"><a
                                                                            href="/server/deploy"
                                                                            target="_blank" rel="noreferrer"
                                                                            class="btn btn-white btn-action font-size-15 px-3"
                                                                            title="Khởi tạo">Khởi tạo</a></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-pricing-content__menu-right-item" id="load-balancer">
                            <div class="d-flex align-items-center mb-4"><img alt="Load Balancer"
                                                                             srcset="{{url('upload/image/icon/load_balancer.svg')}} 1x, {{url('upload/image/icon/load_balancer.svg')}} 2x"
                                                                             src="{{url('upload/image/icon/load_balancer.svg')}}"
                                                                             width="45" height="45" decoding="async"
                                                                             data-nimg="1" loading="lazy"
                                                                             style="color: transparent;">
                                <h2 class="mb-0 mt-0 ml-3">Load Balancer</h2></div>
                            <p class="description mt-0 description-color">Cân bằng tải cho ứng dụng, website của bạn
                                trên nền tảng điện toán đám mây của chúng tôi. Hệ thống dễ dàng mở rộng, hỗ trợ đa giao
                                thức, sticky sessions,... và còn hơn thế nữa</p>
                            <div class="row gap-row-30">
                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="colocation-server__price-item h-full mb-0 rounded-15">
                                        <div class="colocation-server__price-item-header border-bottom"><h3>Basic</h3>
                                            <div class="font-size-14 text-red" style="text-decoration: line-through;">
                                                250,000 đ
                                            </div>
                                            <p>175,000<sup>đ</sup><span class="font-size-16">/tháng</span></p>
                                            <div class="description-color mt-2"><span>382<sup>đ</sup>/giờ</span></div>
                                        </div>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Kết nối đồng thời: 1500reqs/s</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Kết nối SSL đồng thời: 250reqs/s</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="min-height-70 colocation-server__pack-item__text">Dành cho các website tĩnh, blog tĩnh có traffic truy cập thấp</span>
                                        </p>
                                        <div class=" mt-3">Tính thử giá:</div>
                                        <div class="ant-select ant-select-lg w-full text-left input_select_rounded ant-select-single ant-select-show-arrow">
                                            <div class="ant-select-selector"><span
                                                        class="ant-select-selection-search"><input type="search"
                                                                                                   autocomplete="off"
                                                                                                   class="ant-select-selection-search-input"
                                                                                                   role="combobox"
                                                                                                   aria-haspopup="listbox"
                                                                                                   aria-owns="rc_select_0_list"
                                                                                                   aria-autocomplete="list"
                                                                                                   aria-controls="rc_select_0_list"
                                                                                                   aria-activedescendant="rc_select_0_list_0"
                                                                                                   readonly=""
                                                                                                   unselectable="on"
                                                                                                   value=""
                                                                                                   id="rc_select_0"
                                                                                                   style="opacity: 0;"></span><span
                                                        class="ant-select-selection-item"><span>36 tháng = 6,300,000đ</span><span
                                                            class="input_select_rounded--discount">-30%</span></span>
                                            </div>
                                            <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                  style="user-select: none;"><span role="img" aria-label="down"
                                                                                   class="anticon anticon-down ant-select-suffix"><svg
                                                            viewBox="64 64 896 896" focusable="false" data-icon="down"
                                                            width="1em" height="1em" fill="currentColor"
                                                            aria-hidden="true"><path
                                                                d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                        </div>
                                        <div class="text-uppercase mt-4"><a target="_blank"
                                                                            class="btn btn-blue d-block btn-border"
                                                                            rel="noreferrer"
                                                                            href="/load-balancer/create">Khởi
                                                tạo</a></div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="colocation-server__price-item h-full mb-0 rounded-15">
                                        <div class="colocation-server__price-item-header border-bottom"><h3>
                                                Standard</h3>
                                            <div class="font-size-14 text-red" style="text-decoration: line-through;">
                                                700,000 đ
                                            </div>
                                            <p>490,000<sup>đ</sup><span class="font-size-16">/tháng</span></p>
                                            <div class="description-color mt-2"><span>1,069<sup>đ</sup>/giờ</span></div>
                                        </div>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Kết nối đồng thời: 4500reqs/s</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Kết nối SSL đồng thời: 500reqs/s</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="min-height-70 colocation-server__pack-item__text">Dành cho các website, ứng dụng theo hướng giao dịch có traffic truy cập trung bình</span>
                                        </p>
                                        <div class=" mt-3">Tính thử giá:</div>
                                        <div class="ant-select ant-select-lg w-full text-left input_select_rounded ant-select-single ant-select-show-arrow">
                                            <div class="ant-select-selector"><span
                                                        class="ant-select-selection-search"><input type="search"
                                                                                                   autocomplete="off"
                                                                                                   class="ant-select-selection-search-input"
                                                                                                   role="combobox"
                                                                                                   aria-haspopup="listbox"
                                                                                                   aria-owns="rc_select_1_list"
                                                                                                   aria-autocomplete="list"
                                                                                                   aria-controls="rc_select_1_list"
                                                                                                   aria-activedescendant="rc_select_1_list_0"
                                                                                                   readonly=""
                                                                                                   unselectable="on"
                                                                                                   value=""
                                                                                                   id="rc_select_1"
                                                                                                   style="opacity: 0;"></span><span
                                                        class="ant-select-selection-item"><span>36 tháng = 17,640,000đ</span><span
                                                            class="input_select_rounded--discount">-30%</span></span>
                                            </div>
                                            <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                  style="user-select: none;"><span role="img" aria-label="down"
                                                                                   class="anticon anticon-down ant-select-suffix"><svg
                                                            viewBox="64 64 896 896" focusable="false" data-icon="down"
                                                            width="1em" height="1em" fill="currentColor"
                                                            aria-hidden="true"><path
                                                                d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                        </div>
                                        <div class="text-uppercase mt-4"><a target="_blank"
                                                                            class="btn btn-blue d-block btn-border"
                                                                            rel="noreferrer"
                                                                            href="/load-balancer/create">Khởi
                                                tạo</a></div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="colocation-server__price-item h-full mb-0 rounded-15">
                                        <div class="colocation-server__price-item-header border-bottom"><h3>Premium</h3>
                                            <div class="font-size-14 text-red" style="text-decoration: line-through;">
                                                1,500,000 đ
                                            </div>
                                            <p>1,050,000<sup>đ</sup><span class="font-size-16">/tháng</span></p>
                                            <div class="description-color mt-2"><span>2,292<sup>đ</sup>/giờ</span></div>
                                        </div>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Kết nối đồng thời: 10000reqs/s</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Kết nối SSL đồng thời: 1000reqs/s</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="min-height-70 colocation-server__pack-item__text">Dành cho các website, ứng dụng hoặc điểm cuối có traffic truy cập lớn, liên tục</span>
                                        </p>
                                        <div class=" mt-3">Tính thử giá:</div>
                                        <div class="ant-select ant-select-lg w-full text-left input_select_rounded ant-select-single ant-select-show-arrow">
                                            <div class="ant-select-selector"><span
                                                        class="ant-select-selection-search"><input type="search"
                                                                                                   autocomplete="off"
                                                                                                   class="ant-select-selection-search-input"
                                                                                                   role="combobox"
                                                                                                   aria-haspopup="listbox"
                                                                                                   aria-owns="rc_select_2_list"
                                                                                                   aria-autocomplete="list"
                                                                                                   aria-controls="rc_select_2_list"
                                                                                                   aria-activedescendant="rc_select_2_list_0"
                                                                                                   readonly=""
                                                                                                   unselectable="on"
                                                                                                   value=""
                                                                                                   id="rc_select_2"
                                                                                                   style="opacity: 0;"></span><span
                                                        class="ant-select-selection-item"><span>36 tháng = 37,800,000đ</span><span
                                                            class="input_select_rounded--discount">-30%</span></span>
                                            </div>
                                            <span class="ant-select-arrow" unselectable="on" aria-hidden="true"
                                                  style="user-select: none;"><span role="img" aria-label="down"
                                                                                   class="anticon anticon-down ant-select-suffix"><svg
                                                            viewBox="64 64 896 896" focusable="false" data-icon="down"
                                                            width="1em" height="1em" fill="currentColor"
                                                            aria-hidden="true"><path
                                                                d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                        </div>
                                        <div class="text-uppercase mt-4"><a target="_blank"
                                                                            class="btn btn-blue d-block btn-border"
                                                                            rel="noreferrer"
                                                                            href="/load-balancer/create">Khởi
                                                tạo</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-pricing-content__menu-right-item" id="domain">
                            <div class="d-flex align-items-center mb-4">
                                <img alt="Domain"
                                                     srcset="{{url('upload/image/icon/load_balancer.svg')}} 1x, {{url('upload/image/icon/load_balancer.svg')}} 2x"
                                                     src="{{url('upload/image/icon/load_balancer.svg')}}"
                                                     width="45" height="45" decoding="async"
                                                     data-nimg="1" loading="lazy"
                                                     style="color: transparent;">
                                <h2 class="mb-0 mt-0 ml-3">Tên miền</h2></div>
                            <p class="description mt-0 description-color">Đăng ký và sở hữu tên miền nhanh chóng chỉ
                                trong vài thao tác với hệ thống hỗ trợ đăng ký và xác thực tự động</p>
                            <div class="row gap-row-30">
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="section-top__item rounded-15 hover-shadow">
                                        <img alt=".vn"
                                            srcset="{{url('upload/image/tenmien/logo_vn.png')}} 1x, {{url('upload/image/tenmien/logo_vn.png')}} 2x"
                                            src="{{url('upload/image/tenmien/logo_vn.png')}}"
                                            width="100" height="30"
                                            decoding="async"
                                            data-nimg="1"
                                            class="object-fit-contain"
                                            loading="lazy"
                                            style="color: transparent;">
                                        <p class="mb-0">Tên miền quốc gia</p><b>.vn</b>
                                        <p class="section-top__item--discount">550,000đ/năm</p>
                                        <p class="section-top__item--amount">770,000đ</p></div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="section-top__item rounded-15 hover-shadow">
                                        <img alt=".com.vn"
                                            srcset="{{url('upload/image/tenmien/logo_com_vn.png')}} 1x, {{url('upload/image/tenmien/logo_com_vn.png')}} 2x"
                                            src="{{url('upload/image/tenmien/logo_com_vn.png')}}"
                                            width="100" height="30"
                                            decoding="async"
                                            data-nimg="1"
                                            class="object-fit-contain"
                                            loading="lazy"
                                            style="color: transparent;">
                                        <p class="mb-0">Tên miền quốc gia</p><b>.com.vn</b>
                                        <p class="section-top__item--discount">450,000đ/năm</p>
                                        <p class="section-top__item--amount">670,000đ</p></div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="section-top__item rounded-15 hover-shadow">
                                        <img alt=".com"
                                            srcset="{{url('upload/image/tenmien/logo_com.png')}} 1x, {{url('upload/image/tenmien/logo_com.png')}} 2x"
                                            src="{{url('upload/image/tenmien/logo_com.png')}}"
                                            width="100" height="30"
                                            decoding="async"
                                            data-nimg="1"
                                            class="object-fit-contain"
                                            loading="lazy"
                                            style="color: transparent;">
                                        <p class="mb-0">Tên miền quốc tế</p><b>.com</b>
                                        <p class="section-top__item--discount">199,000đ/năm</p>
                                        <p class="section-top__item--amount">299,000đ</p></div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="section-top__item rounded-15 hover-shadow">
                                        <img alt=".net"
                                            srcset="{{url('upload/image/tenmien/logo_net.png')}} 1x, {{url('upload/image/tenmien/logo_net.png')}} 2x"
                                            src="{{url('upload/image/tenmien/logo_net.png')}}"
                                            width="100" height="30"
                                            decoding="async"
                                            data-nimg="1"
                                            class="object-fit-contain"
                                            loading="lazy"
                                            style="color: transparent;">
                                        <p class="mb-0">Tên miền quốc tế</p><b>.net</b>
                                        <p class="section-top__item--discount">199,000đ/năm</p>
                                        <p class="section-top__item--amount">300,000đ</p></div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="section-top__item rounded-15 hover-shadow">
                                        <img alt=".xyz"
                                            srcset="{{url('upload/image/tenmien/logo_xyz.png')}} 1x, {{url('upload/image/tenmien/logo_xyz.png')}} 2x"
                                            src="{{url('upload/image/tenmien/logo_xyz.png')}}"
                                            width="100" height="30"
                                            decoding="async"
                                            data-nimg="1"
                                            class="object-fit-contain"
                                            loading="lazy"
                                            style="color: transparent;">
                                        <p class="mb-0">Tên miền quốc tế</p><b>.xyz</b>
                                        <p class="section-top__item--discount">62,727đ/năm</p>
                                        <p class="section-top__item--amount">244,545đ</p></div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="section-top__item rounded-15 hover-shadow">
                                        <img alt=".online"
                                            srcset="{{url('upload/image/tenmien/logo_online.png')}} 1x, {{url('upload/image/tenmien/logo_online.png')}} 2x"
                                            src="{{url('upload/image/tenmien/logo_online.png')}}"
                                            width="100" height="30"
                                            decoding="async"
                                            data-nimg="1"
                                            class="object-fit-contain"
                                            loading="lazy"
                                            style="color: transparent;">
                                        <p class="mb-0">Tên miền quốc tế</p><b>.online</b>
                                        <p class="section-top__item--discount">45,455đ/năm</p>
                                        <p class="section-top__item--amount">839,091đ</p></div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="section-top__item rounded-15 hover-shadow">
                                        <img alt=".site"
                                            srcset="{{url('upload/image/tenmien/logo_site.png')}} 1x, {{url('upload/image/tenmien/logo_site.png')}} 2x"
                                            src="{{url('upload/image/tenmien/logo_site.png')}}"
                                            width="100" height="30"
                                            decoding="async"
                                            data-nimg="1"
                                            class="object-fit-contain"
                                            loading="lazy"
                                            style="color: transparent;">
                                        <p class="mb-0">Tên miền quốc tế</p><b>.site</b>
                                        <p class="section-top__item--discount">45,455đ/năm</p>
                                        <p class="section-top__item--amount">799,091đ</p></div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="section-top__item rounded-15 hover-shadow">
                                        <img alt=".tech"
                                            srcset="{{url('upload/image/tenmien/logo_tech.png')}} 1x, {{url('upload/image/tenmien/logo_tech.png')}} 2x"
                                            src="{{url('upload/image/tenmien/logo_tech.png')}}"
                                            width="100" height="30"
                                            decoding="async"
                                            data-nimg="1"
                                            class="object-fit-contain"
                                            loading="lazy"
                                            style="color: transparent;">
                                        <p class="mb-0">Tên miền quốc tế</p><b>.tech</b>
                                        <p class="section-top__item--discount">90,909đ/năm</p>
                                        <p class="section-top__item--amount">1,169,091đ</p></div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="section-top__item rounded-15 hover-shadow">
                                        <img alt=".store"
                                            srcset="{{url('upload/image/tenmien/logo_store.png')}} 1x, {{url('upload/image/tenmien/logo_store.png')}} 2x"
                                            src="{{url('upload/image/tenmien/logo_store.png')}}"
                                            width="100" height="30"
                                            decoding="async"
                                            data-nimg="1"
                                            class="object-fit-contain"
                                            loading="lazy"
                                            style="color: transparent;">
                                        <p class="mb-0">Tên miền quốc tế</p><b>.store</b>
                                        <p class="section-top__item--discount">45,455đ/năm</p>
                                        <p class="section-top__item--amount">1,289,091đ</p></div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="section-top__item rounded-15 hover-shadow">
                                        <img alt=".fun"
                                                srcset="{{url('upload/image/tenmien/logo_fun.png')}} 1x, {{url('upload/image/tenmien/logo_fun.png')}} 2x"
                                                src="{{url('upload/image/tenmien/logo_fun.png')}}"
                                                width="100" height="30"
                                                decoding="async"
                                                data-nimg="1"
                                                class="object-fit-contain"
                                                loading="lazy"
                                                style="color: transparent;">
                                        <p class="mb-0">Tên miền quốc tế</p><b>.fun</b>
                                        <p class="section-top__item--discount">45,455đ/năm</p>
                                        <p class="section-top__item--amount">509,091đ</p></div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="section-top__item rounded-15 hover-shadow">
                                        <img alt=".info"
                                            srcset="{{url('upload/image/tenmien/logo_info.png')}} 1x, {{url('upload/image/tenmien/logo_info.png')}} 2x"
                                            src="{{url('upload/image/tenmien/logo_info.png')}}"
                                            width="100" height="30"
                                            decoding="async"
                                            data-nimg="1"
                                            class="object-fit-contain"
                                            loading="lazy"
                                            style="color: transparent;">
                                        <p class="mb-0">Tên miền quốc tế</p><b>.info</b>
                                        <p class="section-top__item--discount">717,273đ/năm</p>
                                        <p class="section-top__item--amount">717,273đ</p></div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="section-top__item rounded-15 hover-shadow">
                                        <img alt=".edu.vn"
                                            srcset="{{url('upload/image/tenmien/logo_edu.png')}} 1x, {{url('upload/image/tenmien/logo_edu.png')}} 2x"
                                            src="{{url('upload/image/tenmien/logo_edu.png')}}"
                                            width="100" height="30"
                                            decoding="async"
                                            data-nimg="1"
                                            class="object-fit-contain"
                                            loading="lazy"
                                            style="color: transparent;">
                                        <p class="mb-0">Tên miền quốc gia</p><b>.edu.vn</b>
                                        <p class="section-top__item--discount">490,000đ/năm</p>
                                        <p class="section-top__item--amount">490,000đ</p></div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="section-top__item rounded-15 hover-shadow">
                                        <img alt=".top"
                                            srcset="{{url('upload/image/tenmien/logo_top.png')}} 1x, {{url('upload/image/tenmien/logo_top.png')}} 2x"
                                            src="{{url('upload/image/tenmien/logo_top.png')}}"
                                            width="100" height="30"
                                            decoding="async"
                                            data-nimg="1"
                                            class="object-fit-contain"
                                            loading="lazy"
                                            style="color: transparent;">
                                        <p class="mb-0">Tên miền quốc tế</p><b>.top</b>
                                        <p class="section-top__item--discount">269,000đ/năm</p>
                                        <p class="section-top__item--amount">269,000đ</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="section-pricing-content__menu-right-item" id="ssl">
                            <div class="d-flex align-items-center mb-4">
                                <img alt="SSL"
                                             srcset="{{url('upload/image/icon/load_balancer.svg')}}, {{url('upload/image/icon/load_balancer.svg')}} 2x"
                                             src="{{url('upload/image/icon/load_balancer.svg')}}"
                                             width="45" height="45" decoding="async"
                                             data-nimg="1" loading="lazy"
                                             style="color: transparent;">
                                <h2 class="mb-0 mt-0 ml-3">SSL</h2></div>
                            <p class="description mt-0 description-color">Biểu tượng https:// trên website giúp tăng độ
                                tin tưởng của người truy cập đối với trang web cũng như doanh nghiệp của bạn và được
                                Google ưu tiên trên công cụ tìm kiếm.</p>
                            <div class="section-pricessl__table d-none d-xl-block">
                                <table>
                                    <thead>
                                    <tr>
                                        <td>Tính năng</td>
                                        <td>Positive SSL</td>
                                        <td>Positive Wildcard SSL</td>
                                        <td>Sectigo SSL</td>
                                        <td>Sectigo EV SSL</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Giá đăng ký/năm</td>
                                        <td><b class="section-pricessl__table-amount">200,000<sup> ₫</sup></b></td>
                                        <td><b class="section-pricessl__table-amount">2,150,000<sup> ₫</sup></b></td>
                                        <td><b class="section-pricessl__table-amount">830,000<sup> ₫</sup></b></td>
                                        <td><b class="section-pricessl__table-amount">3,270,000<sup> ₫</sup></b></td>
                                    </tr>
                                    <tr>
                                        <td>Thích hợp</td>
                                        <td>Website cá nhân và doanh nghiệp vừa và nhỏ</td>
                                        <td>Website cá nhân và doanh nghiệp sử dụng nhiều sub domain</td>
                                        <td>Website doanh nghiệp và bán hàng có lượng giao dịch vừa và nhỏ</td>
                                        <td> Website doanh nghiệp lớn, ngân hàng điện tử, sàn giao dịch</td>
                                    </tr>
                                    <tr>
                                        <td>Mức xác minh khách hàng</td>
                                        <td>Domain Validation (DV)</td>
                                        <td>Domain Validation (DV)</td>
                                        <td>Domain Validation (DV)</td>
                                        <td>Extended Validation (EV)</td>
                                    </tr>
                                    <tr>
                                        <td>Sức mạnh mã hóa</td>
                                        <td>128/256 bit</td>
                                        <td>128/256 bit</td>
                                        <td>128/256 bit</td>
                                        <td>128/256 bit</td>
                                    </tr>
                                    <tr>
                                        <td>Mức bảo hiểm</td>
                                        <td>$10,000</td>
                                        <td>$10,000</td>
                                        <td>$250,000</td>
                                        <td>$175,000</td>
                                    </tr>
                                    <tr>
                                        <td>Bảo mật cho www.domain.com và domain.com</td>
                                        <td><img alt="icon"
                                                 srcset="{{url('upload/image/icon/checkmark-green.svg')}} 1x, {{url('upload/image/icon/checkmark-green.svg')}} 2x"
                                                 src="{{url('upload/image/icon/checkmark-green.svg')}}" width="20" height="20"
                                                 decoding="async" data-nimg="1" loading="lazy"
                                                 style="color: transparent;"></td>
                                        <td><img alt="icon"
                                                 srcset="{{url('upload/image/icon/checkmark-green.svg')}} 1x, {{url('upload/image/icon/checkmark-green.svg')}} 2x"
                                                 src="{{url('upload/image/icon/checkmark-green.svg')}}" width="20" height="20"
                                                 decoding="async" data-nimg="1" loading="lazy"
                                                 style="color: transparent;"></td>
                                        <td><img alt="icon"
                                                 srcset="{{url('upload/image/icon/checkmark-green.svg')}} 1x, {{url('upload/image/icon/checkmark-green.svg')}} 2x"
                                                 src="{{url('upload/image/icon/checkmark-green.svg')}}" width="20" height="20"
                                                 decoding="async" data-nimg="1" loading="lazy"
                                                 style="color: transparent;"></td>
                                        <td><img alt="icon"
                                                 srcset="{{url('upload/image/icon/checkmark-green.svg')}} 1x, {{url('upload/image/icon/checkmark-green.svg')}} 2x"
                                                 src="{{url('upload/image/icon/checkmark-green.svg')}}" width="20" height="20"
                                                 decoding="async" data-nimg="1" loading="lazy"
                                                 style="color: transparent;"></td>
                                    </tr>
                                    <tr>
                                        <td>Hỗ trợ tên miền SAN</td>
                                        <td><img alt="icon" srcset="{{url('upload/image/icon/close.svg')}} 1x, {{url('upload/image/icon/close.svg')}} 2x"
                                                 src="{{url('upload/image/icon/close.svg')}}" width="20" height="20" decoding="async"
                                                 data-nimg="1" loading="lazy" style="color: transparent;"></td>
                                        <td><img alt="icon" srcset="{{url('upload/image/icon/close.svg')}} 1x, {{url('upload/image/icon/close.svg')}} 2x"
                                                 src="{{url('upload/image/icon/close.svg')}}" width="20" height="20" decoding="async"
                                                 data-nimg="1" loading="lazy" style="color: transparent;"></td>
                                        <td><img alt="icon" srcset="{{url('upload/image/icon/close.svg')}} 1x, {{url('upload/image/icon/close.svg')}} 2x"
                                                 src="{{url('upload/image/icon/close.svg')}}" width="20" height="20" decoding="async"
                                                 data-nimg="1" loading="lazy" style="color: transparent;"></td>
                                        <td><img alt="icon" srcset="{{url('upload/image/icon/close.svg')}} 1x, {{url('upload/image/icon/close.svg')}} 2x"
                                                 src="{{url('upload/image/icon/close.svg')}}" width="20" height="20" decoding="async"
                                                 data-nimg="1" loading="lazy" style="color: transparent;"></td>
                                    </tr>
                                    <tr>
                                        <td>Reissue</td>
                                        <td>Miễn phí</td>
                                        <td>Miễn phí</td>
                                        <td>Miễn phí</td>
                                        <td>Miễn phí</td>
                                    </tr>
                                    <tr>
                                        <td>Thời gian cấp</td>
                                        <td>Trong vòng 10 phút</td>
                                        <td>Trong vòng 10 phút</td>
                                        <td>Trong vòng 10 phút</td>
                                        <td>Trong vòng 7 ngày làm việc</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><a target="_blank" href="/ssl/register">
                                                <div class="section-pricessl__button">Đăng ký</div>
                                            </a></td>
                                        <td><a target="_blank" href="/ssl/register">
                                                <div class="section-pricessl__button">Đăng ký</div>
                                            </a></td>
                                        <td><a target="_blank" href="/ssl/register">
                                                <div class="section-pricessl__button">Đăng ký</div>
                                            </a></td>
                                        <td><a target="_blank" href="/ssl/register">
                                                <div class="section-pricessl__button">Đăng ký</div>
                                            </a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row gap-row-30 d-xl-none">
                                <div class="col-12 col-sm-6 col-md-6">
                                    <div class="section-pricessl__list-item rounded-15 h-full mb-0"><p
                                                class="mt-0 mb-0">Positive SSL</p><b class="font-size-22">200,000<sup>
                                                ₫</sup></b>
                                        <div class="section-pricessl__list-br"></div>
                                        <div class="mb-3">
                                            <div>Thích hợp</div>
                                            <b>Website cá nhân và doanh nghiệp vừa và nhỏ</b></div>
                                        <div class="mb-3">
                                            <div>Mức xác minh khách hàng</div>
                                            <b>Domain Validation (DV)</b></div>
                                        <div class="mb-3">
                                            <div>Sức mạnh mã hóa</div>
                                            <b>128/256 bit</b></div>
                                        <div class="mb-3">
                                            <div>Mức bảo hiểm</div>
                                            <b>$10,000</b></div>
                                        <div class="mb-3">
                                            <div>Bảo mật cho www.domain.com và domain.com</div>
                                            <b><img alt="icon"
                                                    srcset="{{url('upload/image/icon/checkmark-green.svg')}} 1x, {{url('upload/image/icon/checkmark-green.svg')}} 2x"
                                                    src="{{url('upload/image/icon/checkmark-green.svg')}}" width="20" height="20"
                                                    decoding="async" data-nimg="1" loading="lazy"
                                                    style="color: transparent;"></b></div>
                                        <div class="mb-3">
                                            <div>Hỗ trợ tên miền SAN</div>
                                            <b><img alt="icon"
                                                    srcset="{{url('upload/image/icon/close.svg')}} 1x, {{url('upload/image/icon/close.svg')}} 2x"
                                                    src="{{url('upload/image/icon/close.svg')}}" width="20" height="20" decoding="async"
                                                    data-nimg="1" loading="lazy" style="color: transparent;"></b></div>
                                        <div class="mb-3">
                                            <div>Reissue</div>
                                            <b>Miễn phí</b></div>
                                        <div class="mb-3">
                                            <div>Thời gian cấp</div>
                                            <b>Trong vòng 10 phút</b></div>
                                        <a target="_blank" rel="noopener noreferrer nofollow"
                                           href="/ssl/register" style="width: 100%;">
                                            <div class="section-pricessl__button">Đăng ký</div>
                                        </a></div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6">
                                    <div class="section-pricessl__list-item rounded-15 h-full mb-0"><p
                                                class="mt-0 mb-0">Positive Wildcard SSL</p><b class="font-size-22">2,150,000<sup>
                                                ₫</sup></b>
                                        <div class="section-pricessl__list-br"></div>
                                        <div class="mb-3">
                                            <div>Thích hợp</div>
                                            <b>Website cá nhân và doanh nghiệp sử dụng nhiều sub domain</b></div>
                                        <div class="mb-3">
                                            <div>Mức xác minh khách hàng</div>
                                            <b>Domain Validation (DV)</b></div>
                                        <div class="mb-3">
                                            <div>Sức mạnh mã hóa</div>
                                            <b>128/256 bit</b></div>
                                        <div class="mb-3">
                                            <div>Mức bảo hiểm</div>
                                            <b>$10,000</b></div>
                                        <div class="mb-3">
                                            <div>Bảo mật cho www.domain.com và domain.com</div>
                                            <b><img alt="icon"
                                                    srcset="{{url('upload/image/icon/close.svg')}}/image/icon/checkmark-green.svg 1x, /image/icon/checkmark-green.svg 2x"
                                                    src="/image/icon/checkmark-green.svg" width="20" height="20"
                                                    decoding="async" data-nimg="1" loading="lazy"
                                                    style="color: transparent;"></b></div>
                                        <div class="mb-3">
                                            <div>Hỗ trợ tên miền SAN</div>
                                            <b><img alt="icon"
                                                    srcset="{{url('upload/image/icon/close.svg')}} 1x, {{url('upload/image/icon/close.svg')}} 2x"
                                                    src="{{url('upload/image/icon/close.svg')}}" width="20" height="20" decoding="async"
                                                    data-nimg="1" loading="lazy" style="color: transparent;"></b></div>
                                        <div class="mb-3">
                                            <div>Reissue</div>
                                            <b>Miễn phí</b></div>
                                        <div class="mb-3">
                                            <div>Thời gian cấp</div>
                                            <b>Trong vòng 10 phút</b></div>
                                        <a target="_blank" rel="noopener noreferrer nofollow"
                                           href="/ssl/register" style="width: 100%;">
                                            <div class="section-pricessl__button">Đăng ký</div>
                                        </a></div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6">
                                    <div class="section-pricessl__list-item rounded-15 h-full mb-0"><p
                                                class="mt-0 mb-0">Sectigo SSL</p><b class="font-size-22">830,000<sup>
                                                ₫</sup></b>
                                        <div class="section-pricessl__list-br"></div>
                                        <div class="mb-3">
                                            <div>Thích hợp</div>
                                            <b>Website doanh nghiệp và bán hàng có lượng giao dịch vừa và nhỏ</b></div>
                                        <div class="mb-3">
                                            <div>Mức xác minh khách hàng</div>
                                            <b>Domain Validation (DV)</b></div>
                                        <div class="mb-3">
                                            <div>Sức mạnh mã hóa</div>
                                            <b>128/256 bit</b></div>
                                        <div class="mb-3">
                                            <div>Mức bảo hiểm</div>
                                            <b>$250,000</b></div>
                                        <div class="mb-3">
                                            <div>Bảo mật cho www.domain.com và domain.com</div>
                                            <b><img alt="icon"
                                                    srcset="{{url('upload/image/icon/checkmark-green.svg')}} 1x, {{url('upload/image/icon/checkmark-green.svg')}} 2x"
                                                    src="{{url('upload/image/icon/checkmark-green.svg')}}" width="20" height="20"
                                                    decoding="async" data-nimg="1" loading="lazy"
                                                    style="color: transparent;"></b></div>
                                        <div class="mb-3">
                                            <div>Hỗ trợ tên miền SAN</div>
                                            <b><img alt="icon"
                                                    srcset="{{url('upload/image/icon/close.svg')}} 1x, {{url('upload/image/icon/close.svg')}} 2x"
                                                    src="{{url('upload/image/icon/close.svg')}}" width="20" height="20" decoding="async"
                                                    data-nimg="1" loading="lazy" style="color: transparent;"></b></div>
                                        <div class="mb-3">
                                            <div>Reissue</div>
                                            <b>Miễn phí</b></div>
                                        <div class="mb-3">
                                            <div>Thời gian cấp</div>
                                            <b>Trong vòng 10 phút</b></div>
                                        <a target="_blank" rel="noopener noreferrer nofollow"
                                           href="/ssl/register" style="width: 100%;">
                                            <div class="section-pricessl__button">Đăng ký</div>
                                        </a></div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6">
                                    <div class="section-pricessl__list-item rounded-15 h-full mb-0"><p
                                                class="mt-0 mb-0">Sectigo EV SSL</p><b
                                                class="font-size-22">3,270,000<sup> ₫</sup></b>
                                        <div class="section-pricessl__list-br"></div>
                                        <div class="mb-3">
                                            <div>Thích hợp</div>
                                            <b> Website doanh nghiệp lớn, ngân hàng điện tử, sàn giao dịch</b></div>
                                        <div class="mb-3">
                                            <div>Mức xác minh khách hàng</div>
                                            <b>Extended Validation (EV)</b></div>
                                        <div class="mb-3">
                                            <div>Sức mạnh mã hóa</div>
                                            <b>128/256 bit</b></div>
                                        <div class="mb-3">
                                            <div>Mức bảo hiểm</div>
                                            <b>$175,000</b></div>
                                        <div class="mb-3">
                                            <div>Bảo mật cho www.domain.com và domain.com</div>
                                            <b><img alt="icon"
                                                    srcset="{{url('upload/image/icon/checkmark-green.svg')}} 1x, {{url('upload/image/icon/checkmark-green.svg')}} 2x"
                                                    src="{{url('upload/image/icon/checkmark-green.svg')}}" width="20" height="20"
                                                    decoding="async" data-nimg="1" loading="lazy"
                                                    style="color: transparent;"></b></div>
                                        <div class="mb-3">
                                            <div>Hỗ trợ tên miền SAN</div>
                                            <b><img alt="icon"
                                                    srcset="{{url('upload/image/icon/close.svg')}} 1x, {{url('upload/image/icon/close.svg')}} 2x"
                                                    src="{{url('upload/image/icon/close.svg')}}" width="20" height="20" decoding="async"
                                                    data-nimg="1" loading="lazy" style="color: transparent;"></b></div>
                                        <div class="mb-3">
                                            <div>Reissue</div>
                                            <b>Miễn phí</b></div>
                                        <div class="mb-3">
                                            <div>Thời gian cấp</div>
                                            <b>Trong vòng 7 ngày làm việc</b></div>
                                        <a target="_blank" rel="noopener noreferrer nofollow"
                                           href="https://my.cloudfly.vn/ssl/register" style="width: 100%;">
                                            <div class="section-pricessl__button">Đăng ký</div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <div class="section-pricing-content__menu-right-item" id="dedicated-server">
                            <div class="d-flex align-items-center mb-4">
                                <img alt="Dedicated server"
                                 srcset="{{url('upload/image/icon/dedicated.svg')}} 1x, {{url('upload/image/icon/dedicated.svg')}} 2x"
                                 src="{{url('upload/image/icon/dedicated.svg')}}" width="45"
                                 height="45" decoding="async" data-nimg="1"
                                 loading="lazy" style="color: transparent;">
                                <h2 class="mb-0 mt-0 ml-3">Dedicated server</h2></div>
                            <p class="description mt-0 description-color">Hệ thống máy chủ riêng với tài nguyên và dung
                                lượng lưu trữ cao cùng với đường truyền mở rộng linh hoạt giúp đáp ứng các nhu cầu xử lý
                                hệ thống lớn cho doanh nghiệp của bạn</p>
                            <div class="row gap-row-30">
                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="colocation-server__price-item rounded-15">
                                        <div class="colocation-server__price-item-header border-bottom"><h3>Dedicated
                                                1</h3>
                                            <p>3,800,000đ</p><span>/tháng</span></div>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">CPU: 1 x Intel E5-2680 V3</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">RAM: 32GB</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Ổ cứng: 1 x SSD 240GB</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Tốc độ mạng: 200Mb/s</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">IPv4: 01</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">IPv6: Miễn phí</span></p>
                                        <div class="text-uppercase mt-3"><a target="_blank"
                                                                            class="btn btn-blue d-block btn-border"
                                                                            rel="noreferrer" href="/en/pricing#">Đăng
                                                ký</a></div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="colocation-server__price-item rounded-15">
                                        <div class="colocation-server__price-item-header border-bottom"><h3>Dedicated
                                                2</h3>
                                            <p>5,100,000đ</p><span>/tháng</span></div>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">CPU: 2 x Intel E5-2680 V3</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">RAM: 64GB</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Ổ cứng: 1 x SSD 240GB</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Tốc độ mạng: 200Mb/s</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">IPv4: 01</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">IPv6: Miễn phí</span></p>
                                        <div class="text-uppercase mt-3"><a target="_blank"
                                                                            class="btn btn-blue d-block btn-border"
                                                                            rel="noreferrer" href="/en/pricing#">Đăng
                                                ký</a></div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="colocation-server__price-item rounded-15">
                                        <div class="colocation-server__price-item-header border-bottom"><h3>Dedicated
                                                3</h3>
                                            <p>6,500,000đ</p><span>/tháng</span></div>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">CPU: 2 x Intel E5-2680 V3</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">RAM: 128GB</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Ổ cứng: 1 x SSD 1TB</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Tốc độ mạng: 200Mb/s</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">IPv4: 01</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">IPv6: Miễn phí</span></p>
                                        <div class="text-uppercase mt-3">
                                            <a target="_blank"
                                                                            class="btn btn-blue d-block btn-border"
                                                                            rel="noreferrer" href="/en/pricing#">Đăng
                                                ký</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-pricing-content__menu-right-item" id="colocation-server">
                            <div class="d-flex align-items-center mb-4">
                                <img alt="Colocation server"
                                             srcset="{{url('upload/image/icon/load_balancer.svg')}} 1x, {{url('upload/image/icon/load_balancer.svg')}} 2x"
                                             src="{{url('upload/image/icon/load_balancer.svg')}}"
                                             width="45" height="45" decoding="async"
                                             data-nimg="1" loading="lazy"
                                             style="color: transparent;">
                                <h2 class="mb-0 mt-0 ml-3">Colocation server</h2></div>
                            <p class="description mt-0 description-color">Dịch vụ chỗ đặt máy chủ đáp ứng mong muốn đặt
                                máy chủ ở Data center đạt chuẩn Tier 3, đảm bảo tốc độ đường truyền mạnh mẽ và hỗ trợ kỹ
                                thuật 24/7</p>
                            <div class="row gap-row-30">
                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="colocation-server__price-item rounded-15">
                                        <div class="colocation-server__price-item-header border-bottom"><h3>Colocation
                                                1</h3>
                                            <p>1,600,000đ</p><span>/tháng</span></div>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Không gian: 1U</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Công suất điện: 300W</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Lưu trữ thông tin: Unlimited</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Băng thông trong nước: 100Mbps</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Băng thông quốc tế: 5Mbps</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Cổng cắm mạng: 1Gbps</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Điện máy nổ dự phòng: Có</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">UPS: Có</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">IPv4: 01</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">IPv6: Miễn phí</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Hỗ trợ kỹ thuật: 24/7</span>
                                        </p>
                                        <div class="text-uppercase mt-3"><a target="_blank"
                                                                            class="btn btn-blue d-block btn-border"
                                                                            rel="noreferrer" href="/en/pricing#">Đăng
                                                ký</a></div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="colocation-server__price-item rounded-15">
                                        <div class="colocation-server__price-item-header border-bottom"><h3>Colocation
                                                2</h3>
                                            <p>2,400,000đ</p><span>/tháng</span></div>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Không gian: 1U</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Công suất điện: 300W</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Lưu trữ thông tin: Unlimited</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Băng thông trong nước: 100Mbps</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Băng thông quốc tế: 10Mbps</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Cổng cắm mạng: 1Gbps</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Điện máy nổ dự phòng: Có</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">UPS: Có</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">IPv4: 01</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">IPv6: Miễn phí</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Hỗ trợ kỹ thuật: 24/7</span>
                                        </p>
                                        <div class="text-uppercase mt-3"><a target="_blank"
                                                                            class="btn btn-blue d-block btn-border"
                                                                            rel="noreferrer" href="/en/pricing#">Đăng
                                                ký</a></div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="colocation-server__price-item rounded-15">
                                        <div class="colocation-server__price-item-header border-bottom"><h3>Colocation
                                                3</h3>
                                            <p>3,600,000đ</p><span>/tháng</span></div>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Không gian: 1U</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Công suất điện: 300W</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Lưu trữ thông tin: Unlimited</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Băng thông trong nước: 200Mbps</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Băng thông quốc tế: 10Mbps</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Cổng cắm mạng: 1Gbps</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Điện máy nổ dự phòng: Có</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">UPS: Có</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">IPv4: 01</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">IPv6: Miễn phí</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Hỗ trợ kỹ thuật: 24/7</span>
                                        </p>
                                        <div class="text-uppercase mt-3"><a target="_blank"
                                                                            class="btn btn-blue d-block btn-border"
                                                                            rel="noreferrer" href="/en/pricing#">Đăng
                                                ký</a></div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="colocation-server__price-item rounded-15">
                                        <div class="colocation-server__price-item-header border-bottom"><h3>Colocation
                                                4</h3>
                                            <p>4,800,000đ</p><span>/tháng</span></div>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Không gian: 1U</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Công suất điện: 300W</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Lưu trữ thông tin: Unlimited</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Băng thông trong nước: 300Mbps</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Băng thông quốc tế: 15Mbps</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Cổng cắm mạng: 1Gbps</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Điện máy nổ dự phòng: Có</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">UPS: Có</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">IPv4: 01</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">IPv6: Miễn phí</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Hỗ trợ kỹ thuật: 24/7</span>
                                        </p>
                                        <div class="text-uppercase mt-3"><a target="_blank"
                                                                            class="btn btn-blue d-block btn-border"
                                                                            rel="noreferrer" href="/en/pricing#">Đăng
                                                ký</a></div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="colocation-server__price-item rounded-15">
                                        <div class="colocation-server__price-item-header border-bottom"><h3>Colocation
                                                5</h3>
                                            <p>6,000,000đ</p><span>/tháng</span></div>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Không gian: 1U</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Công suất điện: 300W</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Lưu trữ thông tin: Unlimited</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Băng thông trong nước: 400Mbps</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Băng thông quốc tế: 20Mbps</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Cổng cắm mạng: 1Gbps</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Điện máy nổ dự phòng: Có</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">UPS: Có</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">IPv4: 01</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">IPv6: Miễn phí</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Hỗ trợ kỹ thuật: 24/7</span>
                                        </p>
                                        <div class="text-uppercase mt-3"><a target="_blank"
                                                                            class="btn btn-blue d-block btn-border"
                                                                            rel="noreferrer" href="/en/pricing#">Đăng
                                                ký</a></div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="colocation-server__price-item rounded-15">
                                        <div class="colocation-server__price-item-header border-bottom"><h3>Colocation
                                                6</h3>
                                            <p>7,200,000đ</p><span>/tháng</span></div>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Không gian: 1U</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Công suất điện: 300W</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Lưu trữ thông tin: Unlimited</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Băng thông trong nước: 500Mbps</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Băng thông quốc tế: 25Mbps</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Cổng cắm mạng: 1Gbps</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Điện máy nổ dự phòng: Có</span>
                                        </p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">UPS: Có</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">IPv4: 01</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">IPv6: Miễn phí</span></p>
                                        <p class="d-flex colocation-server-pack-item mt-0 mb-0"><span
                                                    class="checkmark-green"></span><span
                                                    class="colocation-server__pack-item__text">Hỗ trợ kỹ thuật: 24/7</span>
                                        </p>
                                        <div class="text-uppercase mt-3"><a target="_blank"
                                                                            class="btn btn-blue d-block btn-border"
                                                                            rel="noreferrer" href="/en/pricing#">Đăng
                                                ký</a></div>
                                    </div>
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
