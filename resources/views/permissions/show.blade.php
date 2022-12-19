@extends('layouts.admin_template')
@section('pageTitle', $pageTitle )

@section('main')

<section class="content-header">
    <h1>{{ $pageTitle }} <small>{{ $breadcrumb }}</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> @lang('message.home_page')</a></li>
        <li>
            <a href="{{ route('users.index') }}">{{ $pageTitle }}</a>
        </li>
        <li class="active">{{ $breadcrumb }}</li>
    </ol>
</section>

<section class="content">
    @if ($message = session('message'))
    <div id="flash" class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    <div class="box box-primary">
        <form class="form-horizontal" method="POST" id="permissionFormUpdate" action="{{ route('permissions.update', $permission->id) }}">
            @method('PUT') @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="inputName1" class="col-sm-2 control-label">Tên quyền <span class="c-red">*</span></label>

                    <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="inputName1" name="name" placeholder="Tên quyền" value="{{ $permission->name }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Từ khóa <span class="c-red">*</span></label>
                    <div class="col-sm-8">
                        <input disabled="" type="text" name="key" class="form-control" id="inputEmail3" placeholder="Từ khóa" value="{{ $permission->key }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="method" class="col-sm-2 control-label">Phương thức </label>
                    <div class="col-sm-8">
                        <select disabled="" data-placeholder="Chọn phương thức" multiple class="form-control select2" tabindex="8" name="method[]">
                            @foreach ($method_list as $method)
                                <option {{ in_array($method, $methods) ? 'selected' : '' }} value="{{ $method }}">{{ $method }}</option>
                            @endforeach
                        </select>
                        <span class="help-block">
                            <i class="fa fa-info-circle"></i>
                            <font>Mặc định trống cho tất cả các phương thức</font>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="path" class="col-sm-2 control-label">Đường dẫn</label>
                    <div class="col-sm-8">
                        <textarea disabled="" id="path" name="path"  class="form-control" rows="5" placeholder="Đường dẫn http">{{ $permission->path }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                        <a href="{{ route('permissions.index') }}" class="btn btn-default">« Quay lại</a>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </form>
    </div>
</section>

@endsection

@push('script')

<script type="text/javascript">
    $(document).ready(function(){
        $('.select2').select2();
    })
</script>

@endpush
