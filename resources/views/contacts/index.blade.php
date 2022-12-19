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
                    <div class="box-body responsive-table">
                        <table  width="100%" id="contactIndex" class="table table-bordered table-striped w-100">
                            <thead>
                            <tr>
                                <th class="text-center w-50">ID</th>
                                <th>Họ và tên</th>
                                <th>Điện thoại</th>
                                <th>Email</th>
                                <th>Chủ đề</th>
                                <th>Nội dung</th>
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
    </section>
    <script>
        function deleteUserRegis(that) {
            $.confirm({
                title: 'Thông báo!',
                content: 'Bạn có chắc chắn muốn xóa liên hệ này?',
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

        function changeStatusUserRegis(that) {
            var text = $(that).closest('.btn-action').data('status');
            let status = (text == 'on') ? 'đăng ký' : 'kích hoạt';
            let name = $(that).closest('tr').find('td:eq(1)').text();
            $.confirm({
                title: 'Thông báo!',
                content: `Cập nhật trạng thái`,
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
            $('#contactIndex').DataTable({
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
                    { data: 'name', name: 'name' },
                    { data: 'phone', name: 'phone' },
                    { data: 'email', name: 'email' },
                    { data: 'title', name: 'title' },
                    { data: 'message', name: 'message' },
                    { data: 'status', name: 'status' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ]
            });
        });
    </script>
    <script type="text/javascript">
    $(document).ready(function () {

        $('.from_date').datepicker({
            format: 'dd/mm/yyyy'
        });
    $('.to_date').datepicker({
        format: 'dd/mm/yyyy'
    });
    $('.from_date').on('dp.change', function(e){
    $('.to_date').data("datepicker").minDate(e.date);
    });

    $('.to_date').on('dp.change', function(e){
    $('.from_date').data("datepicker").maxDate(e.date);

    });
    });
    </script>
@endsection
