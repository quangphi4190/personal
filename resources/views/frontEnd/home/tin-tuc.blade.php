@extends('frontEnd.layouts.template-detail')
@section('pageTitle', $pageTitle )
@section('meta')
    <meta property="og:description" content="{{$content->name}}" />
    <meta property="og:image" content="{{url('upload/shares/'.$content->image)}}" />
    <meta property="og:url" content="{{route('danh-muc.chitietbaiviet', $content->slug)}}" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="title" content="{{$info->description}}"/>
    <meta name="author" content="Admin"/>
    <meta property="og:title" content="{{$info->description}}"/>
    <meta property="og:type" content="article"/>
    <meta property="og:image" content="{{asset('img/favicon.ico')}}" />
    <meta name="image" content="{{asset('upload/logo/logo.png')}}"/>
    <meta property="og:description"
          content="{{$info->description}}"/>
    <meta name="description"
          content="{{$info->description}}"/>
    <title>{{$pageTitle}}</title>
@endsection

@section('main')
    <section id="sp-page-title" style="background-image: url({{url('upload/shares/images/no-delete/bg22.png')}});">
        <div class="row">
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
                        <?php if(sizeof($news)>0) {?>
                        <div id="k2Container" class="itemListView">
                            <div class="itemList">
                                <div class="itemListPrimarys row">
                                    <?php foreach ($news as $datb) {?>
                                        <div class="col-lg-4 col-md-12 ">
                                            <div class=" ">
                                                <div class="moduleItemIntrotext">
                                                    <div class="catItemImageBlocks">
                                                <span class="catItemImage">
                                                    <a href="{{route('danh-muc.tintucchitiet', $datb->slug)}}"
                                                       title="{{$datb->name}}">
                                                        <img src="{{ url('upload/shares/'.$datb->image) }}"
                                                             alt="{{$datb->name}}"
                                                             style="width:400px; height:auto;">
                                                    </a>
                                                </span>
                                                        <div class="clr"></div>
                                                    </div>


                                                    <div class="clr"></div>
                                                    <div class="catItemHeader">

                                                        <!-- Item title -->
                                                        <h3 class="catItemTitle">

                                                            <a class="moduleItemTitle"
                                                               href="{{route('danh-muc.tintucchitiet', $datb->slug)}}">
                                                                {{$datb->name}} </a>

                                                        </h3>

                                                    </div>
                                                    <div class="clr"></div>
                                                </div>
                                                <div class="clr"></div>
                                                <div class="clr"></div>
                                                <div class="clr"></div>
                                                <div class="clr"></div>
                                            </div>
                                        </div>
                                    <?php }?>
                                    <div class="clr"></div>
                                    <div class="clr"></div>
                                </div>



                            </div>

                            <!-- Pagination -->
                            {{ $news->links()}}
                        </div>
                        <?php }else {?>
                        <p class="text-center">Đang cập nhật</p>
                        <?php }?>
                    </div>
                </div>
                @include('frontEnd.layouts.menu-detail')

            </div>
        </div>
    </section>
@endsection
