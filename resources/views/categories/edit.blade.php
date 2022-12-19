@extends('layouts.admin_template')

@section('pageTitle', $pageTitle )

@section('main')

<section class="content-header">
	<h1>{{ $pageTitle }} <small>{{ $breadcrumb }}</small></h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> @lang('message.home_page')</a></li>
		<li>
			<a href="{{ route('categories.index') }}">{{ $pageTitle }}</a>
		</li>
		<li class="active">{{ $breadcrumb }}</li>
	</ol>
</section>
<section class="content">

	@include('flash-message')

	<div class="box">
		<form class="form-horizontal" action="{{ route('categories.update', $category->id) }}" method="POST">
			@method('PUT') @csrf
			<div class="box-body">
				<div class="form-group">
					<label class="col-sm-2 control-label" for="name">Tên danh mục</label>
					<div class="col-sm-8">
						<input autocomplete="off" name="name" type="text" class="form-control" id="name" value="{{ $category->name }}" placeholder="Nhập tên danh mục dịch vụ">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="sort">Thứ tự hiển thị</label>
					<div class="col-sm-8">
						<input type="number" name="sort" min="1" class="form-control" id="sort" value="{{ $category->sort }}" placeholder="Nhập thứ tự hiển thị">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-8">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="published" {{ $category->published == 1 ? 'checked' : '' }}> Phát hành
							</label>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-8">
						<button type="submit" class="btn btn-info">
							<i class="fa fa-floppy-o"></i>
							Cập nhật
						</button>
						<a href="{{ route('categories.index') }}" class="btn btn-default pull-right">« Quay lại</a>
					</div>
				</div>
			</div>
			<!-- /.box-footer -->
		</form>
	</div>
</section>

@endsection