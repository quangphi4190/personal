@extends('layouts.login')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Đăng nhập hệ thống' )
@section('content')
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg f-2r">Đăng nhập hệ thống</p>
        @include('flash-message')
        <form class="login100-form validate-form" id="login" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Username" name="username" autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="contact100-form-checkbox">
                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="label-c" for="ckb1">
                   Ghi nhớ đăng nhập
                </label>
            </div>
            <div class="container-login100 m-t-r-10">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng nhập</button>
            </div>
        </form>
        <a href="{{ route('password.request') }}">Quên mật khẩu</a><br>
    </div>
    <script>
        $("#login").validate({
            rules: {
                username: {
                    required: true
                },
                password: {
                    required: true,
                    minlength: 8
                }
            },
            messages: {
                username: {
                    required: "Vui lòng nhập Username"
                },
                password: {
                    required: "Vui lòng nhập mật khẩu",
                    minlength: "Mật khẩu ít nhất 8 ký tự"
                }
            }
        })
    </script>
@endsection
