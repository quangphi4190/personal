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
        <!-- form start -->
        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ route('roles.update', $role->id) }}">
            @csrf @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Tên vai trò <span class="c-red">*</span></label>

                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nhập tên" value="{{ $role->name }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Quyền</label>
                    <div class="col-sm-8">
                        <select data-placeholder="Chọn quyền" multiple class="form-control select2" tabindex="8" name="permission[]">
                            @foreach ($permissions as $permission)
                            <option {{ in_array($permission->id, $permission_old) ? 'selected' : '' }} value="{{ $permission->id }}">{{ $permission->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-2 control-label">Mô tả</label>
                    <div class="col-sm-8">
                        <textarea name="description" id="description" class="form-control">{{ $role->description }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-floppy-o"></i>
                            Chỉnh sửa
                        </button>
                        <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">« Quay lại</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection

@push('script')

<link href="{{ asset('css/bootstrap-duallistbox.min.css') }}" rel="stylesheet">
<script src="{{ asset('js/jquery.bootstrap-duallistbox.min.js') }}"></script>
<script type="text/javascript">

    $('select[name="permission[]"]').bootstrapDualListbox();

</script>

@endpush
