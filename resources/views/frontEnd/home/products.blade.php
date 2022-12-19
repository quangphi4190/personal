@extends('frontEnd.layouts.template_page')
@section('meta')
    <meta property="og:description" content="{{$info->name}}" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="title" content="{{$info->description}}"/>
    <meta name="author" content="Admin"/>
    <title>{{$info->tencongty}}</title>
    <meta property="og:site_name" content="{{$info->tencongty}}" />
    <meta property="og:description" content="{{$info->description}}" />
    <meta property="og:url" content="{{url('/')}}" />
    <meta property="og:image" content="{{asset('img/favicon.ico')}}" />
    <meta property="og:description"
          content="{{$info->description}}"/>
    <meta name="description"
          content="{{$info->description}}"/>
    <title>{{$info->name}}</title>
@endsection
<style>

</style>
<?php $curUrl = Request::path();?>
@section('pageTitle', $pageTitle )
@section('main')
    <main>
    <section id="sp-page-title" style="background-image: url({{url('upload/products/product.jpg')}})">
        <div class="container">
            <div id="sp-title" class="col-sm-12 col-md-12">
                <div class="sp-column ">
                    <div class="sp-page-title">
                        <div class="container"><h2>{{$pageTitle}}</h2>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i></li>
                                <li><a href="{{url('/')}}" class="pathway">Trang chủ</a></li>
                                <li class="active">{{$pageTitle}}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <section id="sp-main-body">
            <div class="container">
                <div class="row">
                    <div id="sp-component" class="col-sm-9 col-md-9">
                        <div class="sp-column ">
                            <div id="system-message-container"></div>
                            <?php if(sizeof($products)>0) {?>
                                <?php foreach ($products as $product) {?>
                                <div class="col-lg-4 col-md-12 ">
                                    <figure class="snip1527">
                                        <div class="image">
                                            <img src="{{ url('upload/shares/'.$product->image) }}" alt="pr-sample23" />
                                        </div>
                                        <figcaption class="des-overflow">
    {{--
                                            <div class="date"><span class="day">28</span><span class="month">Oct</span></div>
    --}}
                                            <h3> {{$product->name}}</h3>
                                            <p> {{$product->description}}</p>
                                        </figcaption>
                                        <a href="{{route('danh-muc.chitietbaiviet', $product->slug)}}"></a>
                                    </figure>
                                </div>
                                <?php }?>


                            <?php }else {?>
                            <p class="text-center">Đang cập nhật</p>
                            <?php }?>
                        </div>
                        <?php if(sizeof($products) > 0):?>
                        <div class="pull-right">
                            {{ $products->links()}}
                        </div>
                        <?php endif;?>
                    </div>
                    @include('frontEnd.layouts.menu-detail')

                </div>
            </div>
        </section>
    </main>
@endsection
<script>
    function ShareToFaceBook() {
        var newWindow = window.open("http://www.facebook.com/sharer.php?u=" + window.location.href, '', '_blank');
        newWindow.focus();
        return false;
    }
    $(".hover").mouseleave(
        function() {
            $(this).removeClass("hover");
        }
    );
</script>
