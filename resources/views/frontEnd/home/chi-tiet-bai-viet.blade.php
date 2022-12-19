@extends('frontEnd.layouts.template_page')
@section('meta')
   <meta property="og:description" content="{{$news->name}}" />
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
   <title>{{$news->name}}</title>
@endsection
<?php $curUrl = Request::path();?>
@section('pageTitle', $pageTitle )
@section('main')
    <section id="sp-page-title" style="background-image: url({{url('upload/products/product.jpg')}});">
        <div class="container">
            <div id="sp-title" class="col-sm-12 col-md-12">
                <div class="sp-column ">
                    <div class="sp-page-title">
                        <div class="container"><h2>{{$news->category->name}}</h2>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i></li>
                                <li><a href="/" class="pathway">Trang chủ</a></li>
                                <li><a href="{{url('/san-pham')}}" class="pathway">Sản phẩm</a></li>
                                <li class="active">{{$news->name}}</li>
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
                        <div id="system-message-container">
                        </div>
                        <div class="itemView">
                            <div class="itemBody">
                                <a name="itemImageGalleryAnchor" id="itemImageGalleryAnchor"></a>
                                <div class="itemHeader">
                                    <!-- Item title -->
                                    <h1 class="itemTitle">
                                        {{$news->name}}
                                    </h1>
                                </div>
                                <div class="itemImageGallery">
                                    <script type="text/javascript">
                                        jssor_1_slider_init = function () {

                                            var jssor_1_SlideshowTransitions = [
                                                {
                                                    $Duration: 800,
                                                    x: 0.25,
                                                    $Zoom: 1.5,
                                                    $Easing: {$Left: $Jease$.$InWave, $Zoom: $Jease$.$InCubic},
                                                    $Opacity: 2,
                                                    $ZIndex: -10,
                                                    $Brother: {
                                                        $Duration: 800,
                                                        x: -0.25,
                                                        $Zoom: 1.5,
                                                        $Easing: {$Left: $Jease$.$InWave, $Zoom: $Jease$.$InCubic},
                                                        $Opacity: 2,
                                                        $ZIndex: -10
                                                    }
                                                },
                                                {
                                                    $Duration: 1200,
                                                    x: 0.5,
                                                    $Cols: 2,
                                                    $ChessMode: {$Column: 3},
                                                    $Easing: {$Left: $Jease$.$InOutCubic},
                                                    $Opacity: 2,
                                                    $Brother: {$Duration: 1200, $Opacity: 2}
                                                },
                                                {
                                                    $Duration: 600,
                                                    x: 0.3,
                                                    $During: {$Left: [0.6, 0.4]},
                                                    $Easing: {$Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear},
                                                    $Opacity: 2,
                                                    $Brother: {
                                                        $Duration: 600,
                                                        x: -0.3,
                                                        $Easing: {
                                                            $Left: $Jease$.$InCubic,
                                                            $Opacity: $Jease$.$Linear
                                                        },
                                                        $Opacity: 2
                                                    }
                                                },
                                                {
                                                    $Duration: 1000,
                                                    x: 1,
                                                    $Rows: 2,
                                                    $ChessMode: {$Row: 3},
                                                    $Easing: {
                                                        $Left: $Jease$.$InOutQuart,
                                                        $Opacity: $Jease$.$Linear
                                                    },
                                                    $Opacity: 2,
                                                    $Brother: {
                                                        $Duration: 1000,
                                                        x: -1,
                                                        $Rows: 2,
                                                        $ChessMode: {$Row: 3},
                                                        $Easing: {
                                                            $Left: $Jease$.$InOutQuart,
                                                            $Opacity: $Jease$.$Linear
                                                        },
                                                        $Opacity: 2
                                                    }
                                                },
                                                {
                                                    $Duration: 1000,
                                                    y: -1,
                                                    $Cols: 2,
                                                    $ChessMode: {$Column: 12},
                                                    $Easing: {$Top: $Jease$.$InOutQuart, $Opacity: $Jease$.$Linear},
                                                    $Opacity: 2,
                                                    $Brother: {
                                                        $Duration: 1000,
                                                        y: 1,
                                                        $Cols: 2,
                                                        $ChessMode: {$Column: 12},
                                                        $Easing: {
                                                            $Top: $Jease$.$InOutQuart,
                                                            $Opacity: $Jease$.$Linear
                                                        },
                                                        $Opacity: 2
                                                    }
                                                },
                                                {
                                                    $Duration: 800,
                                                    y: 1,
                                                    $Easing: {$Top: $Jease$.$InOutQuart, $Opacity: $Jease$.$Linear},
                                                    $Opacity: 2,
                                                    $Brother: {
                                                        $Duration: 800,
                                                        y: -1,
                                                        $Easing: {
                                                            $Top: $Jease$.$InOutQuart,
                                                            $Opacity: $Jease$.$Linear
                                                        },
                                                        $Opacity: 2
                                                    }
                                                },
                                                {
                                                    $Duration: 1000,
                                                    x: -0.1,
                                                    y: -0.7,
                                                    $Rotate: 0.1,
                                                    $During: {
                                                        $Left: [0.6, 0.4],
                                                        $Top: [0.6, 0.4],
                                                        $Rotate: [0.6, 0.4]
                                                    },
                                                    $Easing: {
                                                        $Left: $Jease$.$InQuad,
                                                        $Top: $Jease$.$InQuad,
                                                        $Opacity: $Jease$.$Linear,
                                                        $Rotate: $Jease$.$InQuad
                                                    },
                                                    $Opacity: 2,
                                                    $Brother: {
                                                        $Duration: 1000,
                                                        x: 0.2,
                                                        y: 0.5,
                                                        $Rotate: -0.1,
                                                        $Easing: {
                                                            $Left: $Jease$.$InQuad,
                                                            $Top: $Jease$.$InQuad,
                                                            $Opacity: $Jease$.$Linear,
                                                            $Rotate: $Jease$.$InQuad
                                                        },
                                                        $Opacity: 2
                                                    }
                                                },
                                                {
                                                    $Duration: 800,
                                                    x: -0.2,
                                                    $Delay: 40,
                                                    $Cols: 12,
                                                    $During: {$Left: [0.4, 0.6]},
                                                    $SlideOut: true,
                                                    $Formation: $JssorSlideshowFormations$.$FormationStraight,
                                                    $Assembly: 260,
                                                    $Easing: {
                                                        $Left: $Jease$.$InOutExpo,
                                                        $Opacity: $Jease$.$InOutQuad
                                                    },
                                                    $Opacity: 2,
                                                    $Outside: true,
                                                    $Round: {$Top: 0.5},
                                                    $Brother: {
                                                        $Duration: 800,
                                                        x: 0.2,
                                                        $Delay: 40,
                                                        $Cols: 12,
                                                        $Formation: $JssorSlideshowFormations$.$FormationStraight,
                                                        $Assembly: 1028,
                                                        $Easing: {
                                                            $Left: $Jease$.$InOutExpo,
                                                            $Opacity: $Jease$.$InOutQuad
                                                        },
                                                        $Opacity: 2,
                                                        $Round: {$Top: 0.5},
                                                        $Shift: -200
                                                    }
                                                },
                                                {
                                                    $Duration: 700,
                                                    $Opacity: 2,
                                                    $Brother: {$Duration: 700, $Opacity: 2}
                                                },
                                                {
                                                    $Duration: 800,
                                                    x: 1,
                                                    $Easing: {
                                                        $Left: $Jease$.$InOutQuart,
                                                        $Opacity: $Jease$.$Linear
                                                    },
                                                    $Opacity: 2,
                                                    $Brother: {
                                                        $Duration: 800,
                                                        x: -1,
                                                        $Easing: {
                                                            $Left: $Jease$.$InOutQuart,
                                                            $Opacity: $Jease$.$Linear
                                                        },
                                                        $Opacity: 2
                                                    }
                                                },
                                                {
                                                    $Duration: 800,
                                                    x: 0.25,
                                                    y: 0.5,
                                                    $Rotate: -0.1,
                                                    $Easing: {
                                                        $Left: $Jease$.$InQuad,
                                                        $Top: $Jease$.$InQuad,
                                                        $Opacity: $Jease$.$Linear,
                                                        $Rotate: $Jease$.$InQuad
                                                    },
                                                    $Opacity: 2,
                                                    $Brother: {
                                                        $Duration: 800,
                                                        x: -0.1,
                                                        y: -0.7,
                                                        $Rotate: 0.1,
                                                        $Easing: {
                                                            $Left: $Jease$.$InQuad,
                                                            $Top: $Jease$.$InQuad,
                                                            $Opacity: $Jease$.$Linear,
                                                            $Rotate: $Jease$.$InQuad
                                                        },
                                                        $Opacity: 2
                                                    }
                                                }
                                            ];

                                            var jssor_1_options = {
                                                $AutoPlay: 1,
                                                $FillMode: 5,
                                                $Align: 0,
                                                $SlideshowOptions: {
                                                    $Class: $JssorSlideshowRunner$,
                                                    $Transitions: jssor_1_SlideshowTransitions,
                                                    $TransitionsOrder: 1
                                                },
                                                $ArrowNavigatorOptions: {
                                                    $Class: $JssorArrowNavigator$
                                                },
                                                $BulletNavigatorOptions: {
                                                    $Class: $JssorBulletNavigator$
                                                }
                                            };

                                            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                                            /*#region responsive code begin*/

                                            var MAX_WIDTH = 760;

                                            function ScaleSlider() {
                                                var containerElement = jssor_1_slider.$Elmt.parentNode;
                                                var containerWidth = containerElement.clientWidth;

                                                if (containerWidth) {

                                                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                                                    jssor_1_slider.$ScaleWidth(expectedWidth);
                                                }
                                                else {
                                                    window.setTimeout(ScaleSlider, 30);
                                                }
                                            }

                                            ScaleSlider();

                                            $Jssor$.$AddEvent(window, "load", ScaleSlider);
                                            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                                            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                                            /*#endregion responsive code end*/
                                        };
                                    </script>
                                    <style>
                                        /* jssor slider loading skin spin css */
                                        .jssorl-009-spin img {
                                            animation-name: jssorl-009-spin;
                                            animation-duration: 1.6s;
                                            animation-iteration-count: infinite;
                                            animation-timing-function: linear;
                                        }

                                        @keyframes jssorl-009-spin {
                                            from {
                                                transform: rotate(0deg);
                                            }

                                            to {
                                                transform: rotate(360deg);
                                            }
                                        }

                                        .jssorb072 .i {
                                            position: absolute;
                                            color: #000;
                                            font-family: "Helvetica neue", Helvetica, Arial, sans-serif;
                                            text-align: center;
                                            cursor: pointer;
                                            z-index: 0;
                                        }

                                        .jssorb072 .i .b {
                                            fill: #fff;
                                            opacity: .3;
                                        }

                                        .jssorb072 .i:hover {
                                            opacity: .7;
                                        }

                                        .jssorb072 .iav {
                                            color: #fff;
                                        }

                                        .jssorb072 .iav .b {
                                            fill: #000;
                                            opacity: .5;
                                        }

                                        .jssorb072 .i.idn {
                                            opacity: .3;
                                        }

                                        .jssora073 {
                                            display: block;
                                            position: absolute;
                                            cursor: pointer;
                                        }

                                        .jssora073 .a {
                                            fill: #ddd;
                                            fill-opacity: .7;
                                            stroke: #000;
                                            stroke-width: 160;
                                            stroke-miterlimit: 10;
                                            stroke-opacity: .7;
                                        }

                                        .jssora073:hover {
                                            opacity: .8;
                                        }

                                        .jssora073.jssora073dn {
                                            opacity: .4;
                                        }

                                        .jssora073.jssora073ds {
                                            opacity: .3;
                                            pointer-events: none;
                                        }
                                        .i span {
                                            line-height: 23px;
                                            position: relative;
                                            left: 1px;
                                        }
                                    </style>

                                    <div id="jssor_1"
                                         style="position:relative;margin:0 auto;top:0px;left:0px;width:760px;height:452px;overflow:hidden;visibility:hidden;">
                                        <!-- Loading Screen -->
                                        <div data-u="loading" class="jssorl-009-spin"
                                             style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                                            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;"
                                                 src="{{url('./img/spin-svgrepo-com.svg')}}"/>
                                        </div>
                                        <div data-u="slides"
                                             style="cursor:default;position:relative;top:0px;left:0px;width:760px;height:452px;overflow:hidden;">

                                            @foreach ($news->images as $img)
                                            <div>
                                                <a  class="sigProGalleriaTargetLink"
                                                    rel="" title="" target="_blank">
                                                    <img data-u="image" src="{{ url('./uploads/files/'.$img->image) }}"/>
                                                </a>
                                            </div>
                                            @endforeach
                                        </div>
                                        <!-- Bullet Navigator -->
                                        <div data-u="navigator" class="jssorb072"
                                             style="position:absolute;bottom:12px;right:12px;" data-autocenter="1"
                                             data-scale="0.5" data-scale-bottom="0.75">
                                            <div data-u="prototype" class="i"
                                                 style="width:24px;height:24px;font-size:12px;line-height:24px;">
                                                <svg viewbox="0 0 16000 16000"
                                                     style="position:absolute;top:0;left:0;width:100%;height:100%;z-index:-1;">
                                                    <circle class="b" cx="8000" cy="8000" r="6666.7"></circle>
                                                </svg>
                                                <div data-u="numbertemplate" class="n"></div>
                                            </div>
                                        </div>
                                        <!-- Arrow Navigator -->
                                        <div data-u="arrowleft" class="jssora073"
                                             style="width:40px;height:50px;top:0px;left:30px;" data-autocenter="2"
                                             data-scale="0.75" data-scale-left="0.75">
                                            <svg viewbox="0 0 16000 16000"
                                                 style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                                <path class="a"
                                                      d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
                                            </svg>
                                        </div>
                                        <div data-u="arrowright" class="jssora073"
                                             style="width:40px;height:50px;top:0px;right:30px;" data-autocenter="2"
                                             data-scale="0.75" data-scale-right="0.75">
                                            <svg viewbox="0 0 16000 16000"
                                                 style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                                <path class="a"
                                                      d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <script type="text/javascript">jssor_1_slider_init();</script>
                                </div>
                                <!-- Item text -->
                                <div class="itemFullText">
                                    {!! $news->content !!}
                                </div>
                                <div class="clr"></div>
                                <div class="clr"></div>
                            </div>
                            <div class="clr"></div>
                            <div class="clr"></div>
                        </div>
                    </div>
                </div>
                @include('frontEnd.layouts.menu-detail')
            </div>
        </div>
    </section>
@endsection
<script>
function ShareToFaceBook(){
    var newWindow = window.open("http://www.facebook.com/sharer.php?u="+window.location.href,'','_blank');
    newWindow.focus();
    return false;
}
</script>