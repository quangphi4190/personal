@extends('layouts.admin_template')
@section('pageTitle', $pageTitle )
@section('main')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thông tin người dùng
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li class="active">Thông tin người dùng</li>
        </ol>
    </section>
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle img-user"
                             src="{{$user->avatar == null ? url('/img/avatar-default.png') :url('/upload/shares/'.trim($user->avatar))}}"
                             alt="User profile picture">
                    </div>
                    <h3 class="profile-username text-center">{{$user->name}}</h3>
                    <br>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin chung</h3>
                    </div>
                    <div class="box-body">

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Email:</b> <a >{{$user->email}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Số điện thoại:</b> <a>{{$user->phone}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Địa chỉ:</b> <a>{{$user->address}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
    </section>

@endsection