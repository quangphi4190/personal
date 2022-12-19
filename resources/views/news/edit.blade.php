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
			<div class="row">
				<div class="col-md-9">
					<form class="form-horizontal" action="{{ route('news.update', $new->id) }}" method="POST" enctype="multipart/form-data">
						@csrf @method('PUT')
						<div class="box-body">
							<div class="form-group">
								<label class="col-sm-2 control-label" for="cover">Ảnh đại diện <span class="c-red">*</span></label>
								<div class="col-sm-10">
									<div class="input-group">
										<label class="input-group-addon browseServer"><i class="fa fa-upload"></i></label>
										<input readonly class="form-control cursor browseServer" type="text" name="cover" value="{{ $new->image ? url('upload/shares/'.$new->image) : '' }}">
									</div>
									<div class="blah-wrap" {!! $new->image ? 'style="display: block"' : '' !!}>
										<img class="blah-img" src="{{ url('upload/shares/'.$new->image) }}">
									</div>
									@error('image')
									<span class="invalid-feedback" role="alert">{{ $message }}</span>
									@enderror
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="image">Hình ảnh</label>
								<div class="col-sm-10 ">
									<input type="file" class="form-control" name="image[]" placeholder="Images" multiple accept="image/png, image/gif, image/jpeg">

								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="image">Danh mục <span class="c-red">*</span></label>
								<div class="col-sm-10">
									<select class="form-control" name="category_id">
										<option value="">-- Chọn danh mục</option>
										@foreach($categories as $cate)
											<option {{ $new->category_id == $cate->id ? 'selected' : '' }} value="{{ $cate->id }}">{{ $cate->name }}</option>
										@endforeach

									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="name">Tiêu đề tin <span class="c-red">*</span></label>
								<div class="col-sm-10">
									<input autocomplete="off" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $new->name }}" placeholder="Nhập tên tin">
									@error('name')
									<span class="invalid-feedback" role="alert">{{ $message }}</span>
									@enderror
								</div>
							</div>

							<div class="form-group hidden">
								<div class="col-sm-offset-2 col-sm-8">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="feature" {{ $new->feature == 1 ? "checked" : "" }}> Dự án tiêu biểu
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="name">Mô tả ngắn <span class="c-red">*</span></label>
								<div class="col-sm-10">
									<input autocomplete="off" name="description" type="text" class="@error('description') is-invalid @enderror  form-control" value="{{ $new->description }}" placeholder="Nhập mô tả ngắn">
									@error('description')
									<span class="invalid-feedback" role="alert">{{ $message }}</span>
									@enderror
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="editor">Nội dung <span class="c-red">*</span></label>
								<div class="col-sm-10">
									<textarea id="editor" name="content" class="form-control @error('content') is-invalid @enderror">{{ $new->content }}</textarea>
									@error('content')
									<span class="invalid-feedback" role="alert">{{ $message }}</span>
									@enderror
								</div>
							</div>
							<!-- /.box-body -->
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-info">
										<i class="fa fa-floppy-o"></i>
										@lang('message.update')
									</button>
									<a href="{{ route('news.index') }}" class="btn btn-default pull-right">« Quay lại</a>
								</div>
							</div>
						</div>
					</form>
				</div>

				<div class="col-md-2">
					<div class="form-group">
						@if (count($new->images)>0)
							<p>Hình ảnh:</p>
							@foreach ($new->images as $img)
								<form action="{{ route('news.deleteimage', $img->id) }}" method="post">
									<button class="btn text-danger">X</button>
									@csrf
									@method('delete')
								</form>
								<img src="{{ url('./uploads/files/'.$img->image) }}" class="img-responsive" style="max-height: 200px; max-width: 200px;border: 1px solid #ecf0f5;
    margin: 10px 0px;" alt="" srcset="">
							@endforeach
						@endif
					</div>
				</div>
			</div>
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
