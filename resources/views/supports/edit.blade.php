@extends('layouts.admin_template')

@section('pageTitle', $pageTitle )

@section('main')

<section class="content-header">
	<h1>{{ $pageTitle }} <small>{{ $breadcrumb }}</small></h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> @lang('message.home_page')</a></li>
		<li>
			<a href="{{ route('supports.index') }}">{{ $pageTitle }}</a>
		</li>
		<li class="active">{{ $breadcrumb }}</li>
	</ol>
</section>
<section class="content">

	@include('flash-message')

	<div class="box">
		<form class="form-horizontal" action="{{ route('supports.update', $support->id) }}" method="POST">
			@csrf @method('PUT')
			<div class="box-body">
				<div class="form-group">
					<label class="col-sm-2 control-label" for="name">Tiêu đề </label>
					<div class="col-sm-8">
						<input autocomplete="off" name="title" type="text" class="form-control" value="{{ $support->title }}" placeholder="Nhập tiêu đề">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="image">Hình ảnh</label>
					<div class="col-sm-8">
						<div class="input-group">
							<label class="input-group-addon browseServer"><i class="fa fa-upload"></i></label>
							<input readonly class="form-control cursor browseServer" type="text" name="image" value="{{ $support->image ? url('upload/shares/'.$support->image) : '' }}">
						</div>
						<div class="blah-wrap" {!! $support->image ? 'style="display: block"' : '' !!}>
							<img class="blah-img" src="{{ url('upload/shares/'.$support->image) }}">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="editor">Nội dung</label>
					<div class="col-sm-8">
						<textarea id="editor" name="description" class="form-control">{{ $support->description }}</textarea>
					</div>
				</div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="order">Order</label>
                    <div class="col-sm-8">
                        <input type="number" id="order" name="order" class="form-control" value="{{ $support->order }}">
                    </div>
                </div>
				<!-- /.box-body -->
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-8">
						<button type="submit" class="btn btn-info">
							<i class="fa fa-floppy-o"></i>
							@lang('message.update')
						</button>
						<a href="{{ route('supports.index') }}" class="btn btn-default pull-right">« Quay lại</a>
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
                    $('input[name=image]').val(url);
                    $('.blah-img').attr('src', url);
                    $('.blah-wrap').show();
                });
            });

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

           /* config.toolbar = [
                { name: "document", items: [ 'Source', 'Preview' ] },
                { name: 'clipboard', items: [ 'Undo', 'Redo' ] },
                { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
                { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike' ] },
                { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
                { name: 'insert', items: [ 'Image', 'Table', 'Iframe' ] },
                { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
                { name: 'tools', items: [ 'Maximize' ] }
            ];*/

            var editor = CKEDITOR.replace('editor', config);
        })
	</script>

@endpush
