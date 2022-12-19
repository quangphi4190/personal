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
                    <div class="box-header" style="margin: 20px 0;">
                    <!-- /.box-header -->
                        <form id="EpxortExcel" action="{{route('export_list_regis_exam')}}" method="get" class="form-inline">
                            <div class="form-group" id="datepickerStart">
                                <label for="startDate">Từ ngày</label>
                                <input type="text" class="form-control from_date"  id="startDate" name="from_date" readonly style="border-radius: 4px;" value="{{isset($from_date) ? formatDMY($from_date) : '' }}">
                            </div>
                            <div class="form-group" id="datepickerEnd">
                                <label for="endDate">Đến ngày</label>
                                <input id = "endDate" class="form-control to_date" type="text" name="to_date" readonly style="border-radius: 4px;" value="{{isset($to_date) ? formatDMY($to_date) : '' }}"/>
                            </div>

                            <button type="submit" class="btn btn-primary btn-import">Xuất Excel <i class="fa fa-file-excel-o ml-2" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <div class="box-body responsive-table">
                        <table  width="100%" id="listuserregisexam" class="table table-bordered table-striped w-100">
                            <thead>
                            <tr>
                                <th class="text-center w-50">ID</th>
                                <th>Họ và tên</th>
                                <th>Ngày sinh</th>
                                <th>Nơi sinh</th>
                                <th>Giới tính</th>
                                <th>Địa chỉ</th>
                                <th>Điện thoại</th>
                                <th>Email</th>
                                <th>Nội dung</th>
                                <th>Ngày đăng ký</th>
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
            $('#listuserregisexam').DataTable({
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
                    { data: 'fullname', name: 'fullname' },
                    { data: 'birthday', name: 'birthday' },
                    { data: 'noisinh', name: 'noisinh' },
                    { data: 'sex', name: 'sex' },
                    { data: 'address', name: 'address' },
                    { data: 'phone', name: 'phone' },
                    { data: 'email', name: 'email' },
                    { data: 'content', name: 'content' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'status', name: 'status' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ]
            });
        });
    </script>
    {{--<script type="text/javascript">--}}

        {{--$(function () {--}}
            {{--$("#datepickerStart input").datepicker({--}}
                {{--autoclose: true,--}}
                {{--dateFormat: 'dd/mm/yy',--}}
                {{--todayHighlight: true--}}
            {{--}).datepicker('update', new Date());--}}
        {{--});--}}

    {{--</script>--}}
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
