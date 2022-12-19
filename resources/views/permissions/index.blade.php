@extends('layouts.admin_template')

@section('pageTitle', $pageTitle )

@section('main')

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
    @if ($message = session('message'))
    <div id="flash" class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
    <div class="box box-primary">
        <div class="box-header">
            <a href="{{ route('permissions.create') }}" class="btn btn-default" title="Tạo mới">
                <i class="fa fa-plus" aria-hidden="true"></i> Tạo mới
            </a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="listpermission" class="table table-bordered table-striped w-100">
                <thead>
                    <tr>
                        <th class="text-center w-50">STT</th>
                        <th>Tên quyền</th>
                        <th>Từ khóa</th>
                        <th>Đường dẫn</th>
                        <th>Thời gian tạo</th>
                        <th class="text-center">Chức năng</th>
                    </tr>
                </thead>

            </table>
        </div>
        <!-- /.box-body -->
    </div>

</section>
<script>
    function deleteQuyen(that) {
        let name = $(that).closest('tr').find('td:eq(1)').text();
        $.confirm({
            title: 'Thông báo!',
            content: `Bạn có chắc chắn muốn xóa quyền "${name}" ?`,
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
    $(document).ready( function () {
        $('#listpermission').DataTable({
            processing: true,
            serverSide: true,
            ajax: "",
            filter: true,
            sort: true,
            order:[[ 0 , "asc" ]],
            language: {
                "url": `{{url('datatable/vi.json')}}`
            },
            columns: [
            { data: 'id', name: 'id',class:'text-center'},
            { data: 'name', name: 'name' },
            { data: 'key', name: 'key' },
            { data: 'path', name: 'path' },
            { data: 'created_at', name: 'created_at' },
            { data: 'action', name: 'action',orderable: false, searchable: false }
            ]
        });
    });
</script>
@endsection
