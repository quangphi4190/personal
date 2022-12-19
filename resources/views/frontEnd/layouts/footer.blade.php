{{--footer--}}
<footer class="footer-main" id="footer-main">
    <div class="footer-area">
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <div class="footer-wrapper mb-30">
                            <div class="title-footer">
                                <a title="Logo GTECH" href="{{url('/')}}">
                                    <img alt="Logo Gtecth"
                                           srcset="{{url('upload/logo/logo.png')}} 1x, {{url('upload/logo/logo.png')}} 2x"
                                           src="{{url('upload/logo/logo.png')}}"
                                           width="170"
                                           decoding="async"
                                           data-nimg="1"
                                           loading="lazy"
                                           style="color:transparent">
                                </a>
                                <p class="reserved pt-3">
                                    <i class="fa-solid fa-phone"></i> Điện thoại:
                                    <a href="tel:{{$info->phone}}">
                                        {{$info->phone}}
                                    </a>
                                </p>
                                <p class="reserved pt-3">
                                    <i class="fa-solid fa-envelope"></i> Email:
                                    <a href="javascript:void(0);">
                                        {{$info->email}}
                                    </a>
                                </p>
                                <p class="reserved pt-3">
                                    <i class="fa-solid fa-location-dot"></i> Địa chỉ:
                                    <a href="javascript:void(0);">
                                        {{$info->address}}
                                    </a>
                                </p>

                                <p class="reserved pt-3">
                                    © 2020 Gtech.dn. Powered by<!-- -->
                                    <a target="_blank" rel="noopener noreferrer nofollow" href="https://gtechdn.vn/" title="Gtech.dn">
                                        Gtech.dn
                                    </a>
                                </p>
                            </div>
                            <p>Theo dõi chúng tôi</p>
                            <div class="list-footer-icon">
                                <ul>
                                    <li><a href="#" target="_blank"
                                           rel="noopener noreferrer nofollow" aria-label="Facebook"
                                           title="facebook"><img alt="facebook"
                                                                 srcset="{{url('upload/logo/facebook.svg')}} 1x, {{url('upload/logo/facebook.svg')}} 2x"
                                                                 src="{{url('upload/logo/facebook.svg')}}" width="30"
                                                                 height="30" decoding="async" data-nimg="1"
                                                                 class="display-inline" loading="lazy"
                                                                 style="color:transparent"></a></li>
                                    <li><a target="_blank" rel="noopener noreferrer nofollow" aria-label="Youtube"
                                           title="Youtube" href="#"><img alt="youtube"
                                                                            srcset="{{url('upload/logo/youtube.svg')}} 1x, {{url('upload/logo/youtube.svg')}} 2x"
                                                                            src="{{url('upload/logo/youtube.svg')}}" width="30"
                                                                            height="30" decoding="async"
                                                                            data-nimg="1" class="display-inline"
                                                                            loading="lazy"
                                                                            style="color:transparent"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <div class="row">
                            {{--<div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                <div class="footer-wrapper mb-30 " >
                                    <div class="title-footer">Sản phẩm</div>
                                    <ul class="list-footer">
                                        <li><h3><a title="Cloud Server" href="/en/cloud-server">Cloud Server</a>
                                            </h3></li>
                                        <li><h3><a title="Load Balancer" href="/en/load-balancer">Load Balancer</a>
                                            </h3></li>
                                        <li><h3><a title="Dedicated Server" href="/en/dedicated-server">Dedicated
                                                    Server</a></h3></li>
                                        <li><h3><a title="Colocation Server" href="/en/colocation-server">Colocation
                                                    Server</a></h3></li>
                                    </ul>
                                </div>
                            </div>--}}
                            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.418737855079!2d108.2102563152886!3d16.043746144380865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219bfbfb85919%3A0x1047a6f206e6458a!2zMTEgSHXhu7NuaCBN4bqrbiDEkOG6oXQsIEhvw6AgQ8aw4budbmcgQuG6r2MsIEjhuqNpIENow6J1LCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1591456237248!5m2!1svi!2s" width="100%" height="320" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>
