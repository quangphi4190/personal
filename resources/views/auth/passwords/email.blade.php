@extends('layouts.login')
@section('pageTitle', 'Quên mật khẩu' )
@section('content')
    <div class="login-box-body">
        <p class="login-box-msg f-2r">Quên mật khẩu</p>
        @include('flash-message')
        <form class="login100-form validate-form" id="fogotPassword" method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Email" name="email" autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="container-login100 m-t-r-10">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Gửi</button>
            </div>
        </form>
        <a href="{{ route('login') }}">Đăng nhập</a><br>
    </div>
    <script>
        $("#fogotPassword").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                email: {
                    required: "Vui lòng nhập Email",
                    email: "Địa chỉ email không hợp lệ"
                }
            }
        })
    </script>
@endsection
