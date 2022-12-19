@extends('layouts.admin_template')

@section('pageTitle', $pageTitle )

@section('main')

	<section class="content-header">
		<h1>{{ $pageTitle }} <small>{{ $breadcrumb }}</small></h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> @lang('message.home_page')</a></li>
			<li>
				<a href="{{ route('news.index') }}">{{ $pageTitle }}</a>
			</li>
			<li class="active">{{ $breadcrumb }}</li>
		</ol>
	</section>
	<section class="content">

		@include('flash-message')

		<div class="box">

			<form class="form-horizontal" action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="box-body">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="image">Ảnh đại diện <span class="c-red">*</span></label>
						<div class="col-sm-8 ">
							<div class="input-group ">

								<label class="input-group-addon browseServer"><i class="fa fa-upload"></i></label>

								<input required readonly class="@error('image') is-invalid @enderror form-control cursor browseServer" type="text" name="cover">

							</div>

							<div class="blah-wrap">
								<img class="blah-img" src="">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="image">Hình ảnh</label>
						<div class="col-sm-8 ">
							<input type="file" class="form-control" name="image[]" placeholder="Images" multiple accept="image/png, image/gif, image/jpeg">

						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="image">Danh mục <span class="c-red">*</span></label>
						<div class="col-sm-8">
							<select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
								<option value="">-- Chọn danh mục</option>
								@foreach($categories as $cate)
									<option value="{{ $cate->id }}">{{ $cate->name }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="name">Tiêu đề tin <span class="c-red">*</span></label>
						<div class="col-sm-8">
							<input autocomplete="off" required name="name" type="text" class="@error('name') is-invalid @enderror form-control" value="{{ old('name') }}" placeholder="Nhập Tiêu đề ">
						</div>
					</div>


					<div class="form-group hidden">
						<div class="col-sm-offset-2 col-sm-8">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="feature"> Dự án tiêu biểu
								</label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="name">Mô tả ngắn <span class="c-red">*</span></label>
						<div class="col-sm-8">
							<input required autocomplete="off" name="description" type="text" class="@error('description') is-invalid @enderror form-control" value="{{ old('description') }}" placeholder="Nhập mô tả ngắn">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="editor">Nội dung <span class="c-red">*</span></label>
						<div class="col-sm-8">
							<textarea id="editor"  name="content" class="form-control @error('content') is-invalid @enderror" required="required">{{ old('content') }}</textarea>
						</div>
					</div>
					<!-- /.box-body -->
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-8">
							<button type="submit" class="btn btn-info">Thêm mới <i class="fa fa-floppy-o"></i>
							</button>
							<a href="{{ route('news.index') }}" class="btn btn-default pull-right">« Quay lại</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>

@endsection

@push('script')

	<!-- CK Editor -->
	<script src="{{ asset('bower_components/ckeditor/ckeditor.js') }}"></script>

	<script>

        $(document).ready(function(){
            var $window_width = $(window).innerWidth();
            var lfm_width = $window_width - 200;
            var lfm_left = $window_width / 2 - lfm_width / 2;
            var lfm_top = 50;
            var lfm_height = $(window).innerHeight() - lfm_top;
            var lfm = function (options, cb) {
                var route_prefix = (options && options.prefix) ? options.prefix : 'laravel-filemanager';
                window.open(route_prefix + '?type=' + options.type || 'Image', 'FileManager', 'left=' + lfm_left + ', top=' + lfm_top + ',width=' + lfm_width + ',height=' + lfm_height + ',scrollbars=yes');
                window.SetUrl = cb;
            };
            var options = {};
            options.prefix = '{{ url("laravel-filemanager")  }}';
            options.type = 'Image';
            $('.browseServer').click(function (event) {
                lfm(options, function (url, path) {
                    console.log(url)
                    $('input[name=cover]').val(url);
                    $('.blah-img').attr('src', url);
                    $('.blah-wrap').show();
                });
            })

            var _token = $('meta[name=csrf-token]').attr('content');
            var config = {
                filebrowserImageBrowseUrl: 'laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: 'laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
                filebrowserBrowseUrl: 'laravel-filemanager?type=Files',
                filebrowserUploadUrl: 'laravel-filemanager/upload?type=Files&_token={{csrf_token()}}',
                filebrowserUploadMethod: 'form',
                entities_latin: false,
                language: 'vi'
            };

            // config.toolbar = [
            //     { name: "document", items: [ 'Source', 'Preview' ] },
            //     { name: 'clipboard', items: [ 'Undo', 'Redo' ] },
            //     { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
            //     { name: 'links' },
            //     { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike' ] },
            //     { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
            //     { name: 'insert', items: [ 'Image', 'Table', 'Iframe' ] },
            //     { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
            //     { name: 'tools', items: [ 'Maximize' ] }
            // ];

            var editor = CKEDITOR.replace('editor', config);
        })
	</script>


@endpush
