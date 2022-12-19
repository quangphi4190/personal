@extends('frontEnd.layouts.template_page')
@section('meta')
    <meta property="og:description" content="{{$content->name}}" />
    <meta property="og:image" content="{{url('upload/shares/'.$content->image)}}" />
    <meta property="og:url" content="{{route('danh-muc.chitietbaiviet', $content->slug)}}" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="title" content="{{$content->image}}"/>
    <meta name="author" content="Admin"/>
    <meta property="og:title" content="{{$content->image}}"/>
    <meta property="og:type" content="article"/>
    <meta property="og:image"
          content="{{url('upload/shares/'.$content->image)}}"/>
    <meta name="image" content="{{url('upload/shares/'.$content->image)}}"/>
    <meta property="og:description"
          content="{{$content->name}}"/>
    <meta name="description"
          content="{{$content->name}}"/>
    <title>{{$content->name}}</title>
@endsection
<?php $curUrl = Request::path();?>
@section('pageTitle', $pageTitle )
@section('main')
    <main>
        <div class="section-mainbanner">
            <div class="container">
                <div class="">
                    <div class="mainbanner-content">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-7">
                                <div class="section-title"><h1 class="headline text-white text-uppercase">Về
                                        GTECH.DN</h1>
                                    <p class="description text-white">{{$content->name}}</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-benefit">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-lg-12 col-md-12 col-12">

                        {!! $content->content !!}
                    </div>

                </div>

            </div>
        </div>

        <div class="section pb-0">
            <div class="container border-bottom pb-4">
                <div class="section-title"><h2 class="section-title__title text-center">Giá trị cốt lõi</h2></div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-core-value text-center">
                            <div class="img-core-value"><img alt="TIN TƯỞNG"
                                                             srcset="{{url('upload/gioithieu/trust.svg')}} 1x, {{url('upload/gioithieu/trust.svg')}} 2x"
                                                             src="{{url('upload/gioithieu/trust.svg')}}" width="110" height="110"
                                                             decoding="async" data-nimg="1" loading="lazy"
                                                             style="color: transparent;"></div>
                            <div class="core-value-text"><h3 class="core-value-name">TIN TƯỞNG</h3>
                                <p class="description-core-value">TRUST</p>
                                <div class="hr-core-value"></div>
                                <p class="content-core-value">Tin tưởng nhân viên và được nhân viên tin tưởng</p></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-core-value text-center">
                            <div class="img-core-value"><img alt="ĐỒNG HÀNH"
                                                             srcset="{{url('upload/gioithieu/collaboration.svg')}} 1x, {{url('upload/gioithieu/collaboration.svg')}} 2x"
                                                             src="{{url('upload/gioithieu/collaboration.svg')}}" width="110"
                                                             height="110" decoding="async" data-nimg="1" loading="lazy"
                                                             style="color: transparent;"></div>
                            <div class="core-value-text"><h3 class="core-value-name">ĐỒNG HÀNH</h3>
                                <p class="description-core-value">COLLABORATION</p>
                                <div class="hr-core-value"></div>
                                <p class="content-core-value">Khách hàng là trung tâm cho sự phát triển</p></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-core-value text-center">
                            <div class="img-core-value"><img alt="MINH BẠCH"
                                                             srcset="{{url('upload/gioithieu/transparency.svg')}} 1x, {{url('upload/gioithieu/transparency.svg')}} 2x"
                                                             src="{{url('upload/gioithieu/transparency.svg')}}" width="110" height="110"
                                                             decoding="async" data-nimg="1" loading="lazy"
                                                             style="color: transparent;"></div>
                            <div class="core-value-text"><h3 class="core-value-name">MINH BẠCH</h3>
                                <p class="description-core-value">TRANSPARENCY</p>
                                <div class="hr-core-value"></div>
                                <p class="content-core-value">Minh bạch trong nội bộ, công khai với khách hàng</p></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-core-value text-center">
                            <div class="img-core-value"><img alt="TRÁCH NGHIỆM"
                                                             srcset="{{url('upload/gioithieu/responsibility.svg')}} 1x, {{url('upload/gioithieu/responsibility.svg')}} 2x"
                                                             src="{{url('upload/gioithieu/responsibility.svg')}}" width="110"
                                                             height="110" decoding="async" data-nimg="1" loading="lazy"
                                                             style="color: transparent;"></div>
                            <div class="core-value-text"><h3 class="core-value-name">TRÁCH NGHIỆM</h3>
                                <p class="description-core-value">RESPONSIBILITY</p>
                                <div class="hr-core-value"></div>
                                <p class="content-core-value">Hết mình vì khách hàng, trách nhiệm với xã hội</p></div>
                        </div>
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
