@extends('layouts.admin_template')
@section('pageTitle', $pageTitle )

@section('main')
    <!-- Content Header (Page header) -->
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
        <!-- Info boxes -->
        <div class="row">
            <div class="col-xs-12">
                @include('flash-message')
                <div class="box box-primary">
                    <div class="box-header with-border">
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ route('users.update', $user->id) }}">
                        @method('PUT')
                        @csrf

                        <div class="box-body">
                            <div class="form-group">
                                <label for="avatar" class="col-sm-2 control-label">Avatar</label>

                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <label class="cursor input-group-addon browseServer" id="lfm" data-input="thumbnail" data-preview="holder"
                                               value="Upload"><i class="fa fa-upload"></i></label>
                                        <input id="thumbnail" class="form-control thumbnail" type="text" name="avatar" value="{{$user->avatar == null ? '':$url.$user->avatar}}">
                                    </div>
                                    <div class="col-sm-8 blah blah-avatar" >
                                        <?php if($user->avatar == null ){?>
                                            <img src="{{url('/upload/shares/noavatar.png')}}" class="blah-img avatar-img" alt ='Avatar'>
                                        <?php }else{?>
                                            <img src="{{url('/upload/shares/'.trim($user->avatar))}}" class="blah-img avatar-img" alt ='Avatar'>
                                        <?php }?>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputName1" class="col-sm-2 control-label">H??? v?? t??n <span class="c-red">*</span></label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputName1" name="name" placeholder="H??? v?? t??n" value="{{$user->name}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputusername3" class="col-sm-2 control-label">Username <span class="c-red">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="username" class="form-control" id="inputusername3" placeholder="username" value="{{$user->username}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email <span class="c-red">*</span></label>
                                <div class="col-sm-8">
                                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" value="{{$user->email}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phonenum" class="col-sm-2 control-label">??i???n tho???i <span class="c-red">*</span></label>
                                <div class="col-sm-8">
                                    <input id="phonenum" name="phone" type="text" class="form-control" placeholder="??i???n tho???i" value="{{$user->phone}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-sm-2 control-label">?????a ch???</label>
                                <div class="col-sm-8">
                                    <input id="address" name="address" type="text" class="form-control" placeholder="?????a ch???" value="{{$user->address}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city" class="col-sm-2 control-label">Th??nh ph???</label>
                                <div class="col-sm-8">
                                    <input id="city" name="city" type="text" class="form-control" placeholder="Th??nh ph???" value="{{$user->city}}">
                                </div>
                            </div>
                            <div class="form-group" hidden="hidden">
                                <label for="password" class="col-sm-2 control-label">Vai tr??</label>
                                <div class="col-sm-8">
                                    <select data-placeholder="Ch???n vai tr??" multiple class="form-control select2" tabindex="8" name="role[]">
                                        <option value=""></option>
                                        <?php foreach ($roles as $role):?>
                                        <option {{ in_array($role->id, $arrIdRole)? 'selected' : '' }} value="{{$role->id}}">{{$role->name}}</option>
                                        <?php endforeach;?>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-primary">C???p nh???t</button>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('script')

<script>
    $(document).ready(function(){

        $('#flash').delay(5000).slideUp();

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
                $('.thumbnail').val(url);
                $('.blah-img').attr('src', url);
                $('.blah').show();
            });
        })

        $('.select2').select2();

    })
</script>

@endpush
