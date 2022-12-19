@extends('layouts.layout_password')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form class="login100-form validate-form " method="POST" id="reset_form" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <span class="login100-form-title p-b-34 f22">Đặt lại mật khẩu</span>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('EMail') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <i>{{ $message }}</i>
                                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mật khẩu') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" autofocus>

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <i>{{ $message }}</i>
                                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Xác nhận mật khẩu') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
            </div>
        </div>
        <div class="container-login100-form-btn">
            <button type="submit" class="btn btn-primary">Gửi
            </button>
        </div>

    </form>
    <script>
        $("#reset_form").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },password: {
                    required: true,
                    minlength: 8
                },password_confirmation: {
                    required: true,
                    minlength: 8
                }
            },
            messages: {
                email: {
                    required: "Vui lòng nhập Email",
                    minlength: "Email không đúng định dạng"
                },password: {
                    required: "Vui lòng nhập mật khẩu mới",
                    minlength: "Mật khẩu ít nhất 8 ký tự"
                },password_confirmation: {
                    required: "Vui lòng nhập mật khẩu mới",
                    minlength: "Mật khẩu ít nhất 8 ký tự"
                }
            }
        })
    </script>
@endsection
