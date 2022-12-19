@extends('layouts.admin_template')
@section('pageTitle', $pageTitle )
@section('main')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>{{ $pageTitle }} <small>{{ $breadcrumb }}</small></h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li>Danh sách người dùng</li>
            <li class="active">{{ $breadcrumb }}</li>
        </ol>
    </section>
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-xs-12">
                @include('flash-message')
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="listuser" class="table table-bordered table-striped w-100">
                            <thead>
                            <tr>
                                <th class="text-center w-50">ID</th>
                                <th>Họ và tên</th>
                                <th>Email</th>
                                <th>Điện thoại</th>
                                <th>Địa chỉ</th>
                                <th class="text-center">Chức năng</th>
                            </tr>
                            </thead>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
    <script>
        function revertUser(that) {
            let name = $(that).closest('tr').find('td:eq(1)').text();
            $.confirm({
                title: 'Thông báo!',
                content: `Bạn có chắc chắn muốn khôi phục tài khoản "${name}"?`,
                icon: 'fa fa-question',
                theme: 'material',
                closeIcon: true,
                animation: 'scale',
                type: 'blue',
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
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ]
            });
        });
    </script>
@endsection