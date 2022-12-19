@extends('frontEnd.layouts.template-detail')
@section('pageTitle', $pageTitle )
@section('main')
    <div class="breadcrumb-detail">
        <ul>
            <li><a href="{{url('/')}}" title=""> Trang chủ</a></li>
            <li><a class="selected"  href="{{url('tim-kiem')}}">Đăng ký trực tuyến</a></li>
        </ul>
    </div>
    <div class="col-md-8 ftco-animate pt-2">
        @include('flash-message')
        <h3 class="details__head pb-2 text-center" style="text-transform: uppercase"> {{$pageTitle}}</h3>
        <form action="{{ route('home.form-dang-ky-thi') }}" class="order-sm-start order-lg-last mt-4" method = "POST" >
            @csrf

            <div class="form-group">
                <label for="exampleFormControlFullname">Họ tên <span class="t-red">*</span></label>
                <input type="text" required class="form-control" name="fullname" id="exampleFormControlFullname" placeholder="Nhập họ tên">
            </div>
            <div class="form-group">
                <label for="exampleFormControlEmail">Ngày sinh <span class="t-red">*</span></label>
                <div id="datepickeBirthday" class="input-group date">
                    <input required class="form-control" type="text" name="birthday" readonly style="border-radius: 4px;"  placeholder="Nhập ngày sinh"/>
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlAddress">Nơi sinh <span class="t-red">*</span></label>
                <input type="text" required class="form-control" name="noisinh" id="exampleFormControlAddress" placeholder="Nhập nơi sinh">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSex">Giới tính</label>
                <select class="form-control" id="exampleFormControlSex" name="sex">
                    <option value="0">Nam</option>
                    <option value="1">Nữ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlAddress">Địa chỉ</label>
                <input type="text" class="form-control" name="address" id="exampleFormControlAddress" placeholder="Nhập địa chỉ">
            </div>
            <div class="form-group">
                <label for="exampleFormControlPhone">Số điện thoại <span class="t-red">*</span></label>
                <input type="tel" required class="form-control" name="phone" id="exampleFormControlPhone" placeholder="Nhập số điện thoại">
            </div>

            <div class="form-group">
                <label for="exampleFormControlEmail">Email</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlEmail" placeholder="Nhập số Email">
            </div>
            <div class="form-group">
                <label for="exampleFormControlContent">Nội dung <span class="t-red">*</span></label>
                <textarea class="form-control" required name="content" id="exampleFormControlContent" rows="3" placeholder="Vui lòng ghi rõ thông tin cần đăng ký ( Khóa học,...) "></textarea>
            </div>
            <div class="form-row align-items-center">
                <div class="col-auto offset-md-5 text-center">
                    <button type="submit" class="btn btn-primary mb-2">Đăng ký</button>
                </div>
            </div>
        </form>
    </div>

@endsection
