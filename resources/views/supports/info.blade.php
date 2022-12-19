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
                <a href="{{ route('supports.index') }}">{{ $pageTitle }}</a>
            </li>
            <li class="active">{{ $breadcrumb }}</li>
        </ol>
    </section>
    <section class="content">

        @include('flash-message')
        <div class="box">
            {{--<form class="form-horizontal" action="{{ route('save_config', $config->id) }}" method="POST">--}}
              {{--  @csrf @method('PUT')--}}
                <div class="box-body">
                    <?php foreach ($configs as $config):?>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="name">{{ $config->name }}</label>
                        <div class="col-sm-8">
                            <input autocomplete="off" name="{{ $config->key }}" type="text" class="form-control" value="{{ $config->value }}" placeholder="Nhập tên công ty">
                        </div>
                    </div>
                    <?php endforeach;?>
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
           {{-- </form>--}}
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
