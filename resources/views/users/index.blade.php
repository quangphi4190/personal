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
                    <div class="box-header">
                        <a href="{{ route('users.create') }}" class="btn btn-primary" title="{{$createUser}}">
                            {{$createUser}} <i class="fa fa-plus pl-2" aria-hidden="true"></i>
                        </a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body responsive-table">
                        <table  width="100%" id="listuser" class="table table-bordered table-striped w-100">
                            <thead>
                            <tr>
                                <th class="text-center w-50">ID</th>
                                <th>Họ và tên</th>
                                <th>Email</th>
                                <th>Điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Trạng thái</th>
                                <th class="text-center">Chức năng</th>
                            </tr>
                            </thead>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
        {{--modal-resetpassword--}}
        <div class="modal fade" id="modal-resetpassword">
            <div class="modal-dialog">
                <div class="modal-content">


                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </section>
    <script>
        function deleteUser(that) {
            $.confirm({
                title: 'Thông báo!',
                content: 'Bạn có chắc chắn muốn xóa người dùng này?',
                icon: 'fa fa-question',
                theme: 'material',
                closeIcon: true,
                animation: 'scale',
                type: 'red',
                buttons: {
                    confirm: {
                        text: 'Đồng ý',
                        btnClass: 'btn-orange',
                        action: function () {
                            $(that).find('form').submit();

                        }
                    },
                    cancel: {
                        text: 'Không',
                        action: function () {

                        }
                    }
                }
            });
        }

        function changeStatusUser(that) {
            var text = $(that).closest('.btn-action').data('status');
            let status = (text == 'on') ? 'hủy kích hoạt' : 'kích hoạt';
            let name = $(that).closest('tr').find('td:eq(1)').text();
            $.confirm({
                title: 'Thông báo!',
                content: `Bạn có chắc chắn muốn ${status} "${name}"?`,
                icon: 'fa fa-question',
                theme: 'material',
                closeIcon: true,
                animation: 'scale',
                type: 'red',
                buttons: {
                    confirm: {
                        text: 'Đồng ý',
                        btnClass: 'btn-orange',
                        action: function () {
                            $(that).find('form').submit();
                        }
                    },
                    cancel: {
                        text: 'Không',
                        action: function () {

                        }
                    }
                }
            });
        }


    </script>
    <script>
        $(document).ready( function () {
            $('#listuser').DataTable({
                processing: true,
                serverSide: true,
                ajax: "",
                filter: true,
                sort: true,
                order:[[ 0 , "asc" ]],
                language: {
                    "url": `{{url('/datatable/vi.json')}}`
                },
                columns: [
                    { data: 'id', name: 'id',class:'text-center'},
//                    { data: 'avatar', name: 'avatar' ,"width": "6%"},
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'phone', name: 'phone' },
                    { data: 'address', name: 'address' },
                    { data: 'email_verified_at', name: 'email_verified_at' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ]
            });
        });
    </script>
@endsection
