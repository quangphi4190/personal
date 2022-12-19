@extends('frontEnd.layouts.template-detail')
@section('pageTitle', $pageTitle )
@section('main')
    <div class="breadcrumb-detail">
        <ul>
            <li><a href="{{url('/')}}" title="{{$info->tencongty}}."> Trang chủ</a></li>
            <li><a class="selected"  href="{{url('tra-cuu-diem-thi')}}">Kết quả tra </a></li>
        </ul>
    </div>
    <div class="col-md-8 ftco-animate mb-4">
        <h3 class="details__head pb-2"><i class="fa fa-search" aria-hidden="true"></i> {{$pageTitle}}</h3>
        <form action="{{ route('home.ket_qua_tra_cuu_diem_thi') }}" class="order-sm-start order-lg-last mt-4" method = "POST" >
            @csrf
        <div class="form-row align-items-center">
            <div class="col-sm-4">
                <label class="" for="inlineFormInput">Nhập số hiệu chứng chỉ, họ tên....</label>
                <input type="text" class="form-control mb-2" name="keySearch" id="inlineFormInput" placeholder="Nhập số hiệu chứng chỉ, họ tên..." value="{{$searchKey}}">
            </div>
            <div class="col-sm-4" style="padding-bottom: 8px;">
                <label class="" for="inlineFormInput">Khóa thi ngày</label>
                <div id="datepicker" class="input-group date">
                    <input value="{{isset($dotthi) ? $dotthi : ''}}" class="form-control" type="text" name="dotthingay" readonly style="border-radius: 4px;" />
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                </div>
            </div>

            <div class="col-auto mt-34">
                <button type="submit" class="btn btn-primary mb-2">Tra cứu <i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </div>
    </form>

        <div class="table-responsive">


        </div>

    </div>
@endsection
