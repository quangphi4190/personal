@extends('layouts.admin_template')
@section('pageTitle', $pageTitle )

@section('main')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Đặt lại mật khẩu: {{$user->name}}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li class="active">Đặt lại mật khẩu</li>
        </ol>
    </section>
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" id="contact_form" enctype="multipart/form-data" method="POST" action="{{ route('users.update-password') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="password" class="col-sm-2 control-label">Mật khẩu <span class="c-red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Mật khẩu" value="{{ old('password') }}" autofocus>
                                    <span class="text-danger" role="alert">{{ $errors->first('password') }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        $("#contact_form").validate({
            rules: {
                password: {
                    required: true,
                    minlength: 8,
                }
            },
            messages: {
                password: {
                    required: "Vui lòng nhập mật khẩu",
                    minlength: "Mật khẩu ít nhất 8 ký tự",
                }

            },
        })
    </script>
@endsection
