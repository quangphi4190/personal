<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('pageTitle')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link type="text/css" href="{{asset('layout/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--===============================================================================================-->
    <link type="text/css" href="{{asset('layout/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">
    <!--===============================================================================================-->
    <link type="text/css" href="{{asset('layout/fonts/iconic/css/material-design-iconic-font.min.css')}}" rel="stylesheet">
    <!--===============================================================================================-->
    <link type="text/css" href="{{asset('layout/vendor/animate/animate.css')}}" rel="stylesheet">
    <!--===============================================================================================-->
    <link type="text/css" href="{{asset('layout/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet">
    <!--===============================================================================================-->
    <link type="text/css" href="{{asset('layout/vendor/animsition/css/animsition.min.css')}}" rel="stylesheet">
    <!--===============================================================================================-->
    <link type="text/css" href="{{asset('layout/vendor/select2/select2.min.css')}}" rel="stylesheet">
    <!--===============================================================================================-->
    <link type="text/css" href="{{asset('layout/vendor/daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!--===============================================================================================-->
    <link type="text/css" href="{{asset('layout/css/util.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('layout/css/main.css')}}" rel="stylesheet">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image:url('{{ asset('img/bgvdt.jpg') }}')">
        <div class="wrap-forgot100">
            @yield('content')
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{asset('layout/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('layout/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('layout/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('layout/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('layout/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('layout/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('layout/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('layout/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('layout/js/main.js')}}"></script>
</body>
<script type="text/javascript">
    $(document).ready(function(){
        setTimeout(function(){
            $('#flash').remove();
        }, 2000);
    })
</script>
</html>