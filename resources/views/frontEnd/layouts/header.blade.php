<?php $curUrl = Request::path();
?>
<header class="header-transparent" id="header-main">
    <div class="d-md-none opacity_menu"></div>
    <div class="header-bottom">
        <div class="container-header">
            <div class="wrap-header-bottom">
                <div class="header-bottom-left">
                    <div class="hamburger-btn">
                            <span>
                                <svg viewBox="64 64 896 896" focusable="false" data-icon="menu" width="25px" height="25px" fill="currentColor" aria-hidden="true"><path d="M904 160H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0 624H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0-312H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8z"></path></svg>
                            </span>
                    </div>
                    <div class="wrap-logo">
                        <div class="logo logo-orange mt-1">
                            <a class="main-logo" title="Logo GTECH"
                               href="{{url('/')}}">
                                <img class="g-logo" alt="GTECH"
                                     srcset="{{url('upload/logo/logo.png')}} 1x, {{url('upload/logo/logo.png')}} 2x"
                                     src="{{url('upload/logo/logo.png')}}"
                                     width="170"
                                     decoding="async" data-nimg="1"
                                     style="color:transparent">
                            </a>
                        </div>
                    </div>
                    <ul class="desktop-menu">
                        <li><a class="<?php echo $curUrl == '/' || $curUrl == '' ? 'active' : '' ?>" href="{{url('/')}}">Trang chủ</a></li>
                        <li><a class="<?php echo $curUrl == 'gioi-thieu' || $curUrl == '' ? 'active' : '' ?>" href="{{url('/gioi-thieu')}}">Giới thiệu</a></li>
                        <li><a class="<?php echo $curUrl == 'giai-phap' || $curUrl == '' ? 'active' : '' ?>" href="{{url('/giai-phap')}}">Giải pháp</a></li>
                        <li><a class="<?php echo $curUrl == 'san-pham' || $curUrl == '' ? 'active' : '' ?>"href="{{url('/san-pham')}}">Sản phẩm</a></li>
                       {{-- <li>
                            <a href="#">Community <span class="arrow-down"></span></a>
                            <ul>
                                <li><a href="#">Overview</a></li>
                                <li><a href="#">Techblog</a></li>
                                <li><a href="#">Q&A</a></li>
                                <li><a href="#">Tools</a></li>
                            </ul>
                        </li>--}}
                    </ul>
                </div>
                <div class="header-bottom-right">
                    <?php if (isset($user) && !empty($user)){?>
                        <a href="{{url('/logout')}}" class="btn-login">Đăng xuất</a>
                    <?php }else {?>
                        <a href="{{url('/login')}}" class="btn-login">Đăng nhập</a>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap-mobile-menu">
        <div class="mask"></div>
        <div class="mobile-menu">
            <div class="mobile-menu-top">
                <h1 class="logo">
                    <a href="{{url('/')}}">
                        <img src="{{url('upload/logo/logo.png')}}" alt="GTECH">
                    </a>
                </h1>
                <button class="close-btn"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="main-mobile-menu">
                <ul>
                    <li><a class="<?php $curUrl == '/' || $curUrl == '' ? 'active' : '' ?>" href="{{url('/')}}">Trang chủ</a></li>
                    <li><a class="<?php $curUrl == 'gioi-thieu' || $curUrl == '' ? 'active' : '' ?>" href="{{url('/gioi-thieu')}}">Giới thiệu</a></li>
                    <li><a class="<?php $curUrl == 'giai-phap' || $curUrl == '' ? 'active' : '' ?>" href="{{url('/giai-phap')}}">Giải pháp</a></li>
                    <li><a class="<?php $curUrl == 'san-pham' || $curUrl == '' ? 'active' : '' ?>"href="{{url('/san-pham')}}">Sản phẩm</a></li>
                </ul>
                <?php if (isset($user) && !empty($user)){?>
                <a href="{{url('/logout')}}" class="btn-login">Đăng xuất</a>
                <?php }else {?>
                <a href="{{url('/login')}}" class="btn-login">Đăng nhập</a>
                <?php }?>
            </div>
        </div>
    </div>

</header>
