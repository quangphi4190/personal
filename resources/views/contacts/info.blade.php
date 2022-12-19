@extends('layouts.admin_template')

@section('pageTitle', $pageTitle )
<style>
    .blah-wrap2,  .blah-wrap3 {
        display: none;
        margin-top: 10px;
    }
    .w320 {
        max-width: 200px;
    }
</style>
@section('main')

    <section class="content-header">
        <h1>{{ $pageTitle }} <small>{{ $breadcrumb }}</small></h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> @lang('message.home_page')</a></li>
            <li>
                <a href="{{ route('banners.index') }}">{{ $pageTitle }}</a>
            </li>
            <li class="active">{{ $breadcrumb }}</li>
        </ol>
    </section>
    <section class="content">

        @include('flash-message')
        <div class="box">
            <form class="form-horizontal" action="{{ route('contacts.saveInfo', $info->id) }}" method="POST">
                @csrf @method('PUT')
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="name">Tên công ty</label>
                        <div class="col-sm-8">
                            <input autocomplete="off" name="tencongty" type="text" class="form-control" value="{{ $info->tencongty }}" placeholder="Nhập tên công ty">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="name">Điện thoại</label>
                        <div class="col-sm-8">
                            <input autocomplete="off" name="phone" type="text" class="form-control" value="{{ $info->phone }}" placeholder="Nhập số điện thoại">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="email">Email</label>
                        <div class="col-sm-8">
                            <input autocomplete="off" name="email" type="text" class="form-control" value="{{ $info->email }}" placeholder="Nhập Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="address">Địa chỉ</label>
                        <div class="col-sm-8">
                            <input autocomplete="off" name="address" type="text" class="form-control" value="{{ $info->address }}" placeholder="Nhập địa chỉ">
                        </div>
                    </div>

                   <div class="form-group" hidden="">
                        <label class="col-sm-2 control-label" for="name">Tiêu đề giới thiệu trang chủ</label>
                        <div class="col-sm-8">
                            <input autocomplete="off" name="name" type="text" class="form-control" value="{{ $info->name }}" placeholder="Nhập tiêu đề">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="editor">Nội dung</label>
                        <div class="col-sm-8">
                            <textarea id="editor" name="description" class="form-control">{{ $info->description }}</textarea>
                        </div>
                    </div>

                   {{-- <div class="form-group">
                        <label class="col-sm-2 control-label" for="image_1">image_1</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <label class="input-group-addon browseServer"><i class="fa fa-upload"></i></label>
                                <input readonly class="form-control cursor browseServer" type="text" name="image_1" value="{{ $info->image_1 ? url('upload/shares/'.$info->image_1) : '' }}">
                            </div>
                            <div class="blah-wrap" {!! $info->image_1 ? 'style="display: block"' : '' !!}>
                                <img class="blah-img w320" src="{{ url('upload/shares/'.$info->image_1) }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="image_2">image_1</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <label class="input-group-addon browseServer2"><i class="fa fa-upload"></i></label>
                                <input readonly class="form-control cursor browseServer2" type="text" name="image_2" value="{{ $info->image_2 ? url('upload/shares/'.$info->image_2) : '' }}">
                            </div>
                            <div class="blah-wrap2" {!! $info->image_2 ? 'style="display: block"' : '' !!}>
                                <img class="blah-img_2 w320" src="{{ url('upload/shares/'.$info->image_2) }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="image_3">image_1</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <label class="input-group-addon browseServer3"><i class="fa fa-upload"></i></label>
                                <input readonly class="form-control cursor browseServer3" type="text" name="image_3" value="{{ $info->image_2 ? url('upload/shares/'.$info->image_3) : '' }}">
                            </div>
                            <div class="blah-wrap3" {!! $info->image_3 ? 'style="display: block"' : '' !!}>
                                <img class="blah-img_3 w320" src="{{ url('upload/shares/'.$info->image_3) }}">
                            </div>
                        </div>
                    </div>--}}



                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="name">Nội dung ghi chú trang liên hệ</label>
                        <div class="col-sm-8">
                            <input autocomplete="off" name="text_contact" type="text" class="form-control" value="{{ $info->text_contact }}" placeholder="Nội dung ghi chú trang liên hệ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="facebook">Link Facebook</label>
                        <div class="col-sm-8">
                            <input autocomplete="off" name="facebook" type="text" class="form-control" value="{{ $info->facebook }}" placeholder="facebook">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="youtube">Link Youtube</label>
                        <div class="col-sm-8">
                            <input autocomplete="off" name="youtube" type="text" class="form-control" value="{{ $info->youtube }}" placeholder="youtube">
                        </div>
                    </div>

                    <!-- /.box-body -->
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-floppy-o"></i>
                                @lang('message.update')
                            </button>
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
                    $('input[name=image_1]').val(url);
                    $('.blah-img').attr('src', url);
                    $('.blah-wrap').show();
                });
            });
            $('.browseServer2').click(function (event) {
                lfm(options, function (url, path) {
                    $('input[name=image_2]').val(url);
                    $('.blah-img_2').attr('src', url);
                    $('.blah-wrap2').show();
                });
            });
            $('.browseServer3').click(function (event) {
                lfm(options, function (url, path) {
                    $('input[name=image_3]').val(url);
                    $('.blah-img_3').attr('src', url);
                    $('.blah-wrap3').show();
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
