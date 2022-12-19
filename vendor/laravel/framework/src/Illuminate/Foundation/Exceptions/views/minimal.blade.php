<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .code {
                border-right: 2px solid;
                font-size: 26px;
                padding: 0 15px 0 15px;
                text-align: center;
            }

            .message {
                font-size: 18px;
                text-align: center;
            }
            body {
                background-color: #95c2de;
            }

            .mainbox {
                background-color: #95c2de;
                margin: auto;
                height: 600px;
                width: 600px;
                position: relative;
            }

            .err {
                color: #ffffff;
                font-family: 'Nunito Sans', sans-serif;
                font-size: 11rem;
                position:absolute;
                left: 20%;
                top: 8%;
            }

            .far {
                position: absolute;
                font-size: 8.5rem;
                left: 42%;
                top: 15%;
                color: #ffffff;
            }

            .err2 {
                color: #ffffff;
                font-family: 'Nunito Sans', sans-serif;
                font-size: 11rem;
                position:absolute;
                left: 68%;
                top: 8%;
            }

            .msg {
                text-align: center;
                font-family: 'Nunito Sans', sans-serif;
                font-size: 1.6rem;
                position:absolute;
                left: 16%;
                top: 45%;
                width: 75%;
            }

            a {
                text-decoration: none;
                color: white;
            }

            a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    {{--<body>--}}
        {{--<div class="flex-center position-ref full-height">--}}
            {{--<div class="code">--}}
                {{--@yield('code')--}}
            {{--</div>--}}

            {{--<div class="message" style="padding: 10px;">--}}
                {{--@yield('message')--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</body>--}}
    <body translate="no">
    <!-- purple x moss 2020 -->


    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;900&amp;display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4b9ba14b0f.js" crossorigin="anonymous"></script>


    <div class="mainbox">
        <div class="err">4</div>
        <i class="far fa-question-circle fa-spin" aria-hidden="true"></i>
        <div class="err2">4</div>
        <div class="msg">Bạn không có quyền truy cập vào đường link trên. Vui lòng liên hệ admin quản lý để biết thêm thông tin chi tiết.
            <p style="color: #fff!important;
    padding: 10px 20px;
    background: #3184ac;
    margin: 20px 0;
    display: inline-block;
    color: #fff;
    border-radius: 4px;"><a href="/quan-ly">Trở về trang quản lý </a></p></div>
    </div>


    </body>
    <script>
        window.console = window.console || function(t) {};
    </script>



    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>
</html>
