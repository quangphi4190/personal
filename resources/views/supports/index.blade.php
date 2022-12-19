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

        <div class="box box-primary">
            <div class="box-header">
                <a href="{{ route('supports.create') }}" class="btn btn-primary" title="Thêm mới"><i
                            class="fa fa-plus" aria-hidden="true"></i> {{$create}}</a>
            </div>
            <div class="box-body responsive-table">
                <table width="100%" id="supports-list" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>

                        <th>Tiêu đề</th>
                        <th>Mô tả</th>
                        <th>Order</th>
                        <th>Thời gian tạo</th>
                        <th class="text-center">Chức năng</th>
                    </tr>
                    </thead>

                </table>
            </div>
        </div>
    </section>

@endsection

@push('script')

    <script type="text/javascript">

        function destroy(that){
            let name = $(that).closest('tr').find('td:eq(1)').text();
            $.confirm({
                title: 'Thông báo!',
                content: `Bạn có chắc chắn muốn xóa ?`,
                icon: 'fa fa-question',
                theme: 'material',
                closeIcon: true,
                animation: 'scale',
                type: 'red',
                buttons: {
                    confirm: {
                        text: '@lang("message.agree")',
                        btnClass: 'btn-orange',
                        action: function () {
                            $(that).find('form').submit();
                        }
                    },
                    cancel: {
                        text: '@lang("message.cancel")',
                    }
                }
            });
        }

        $('#supports-list').DataTable({
            processing: true,
            serverSide: true,
            aaSorting : [[0, 'desc']],
            ajax: '',
            language: {
                "url": `{{url('/datatable/vi.json')}}`
            },
            columns: [
                { data: 'id', name: 'id' },
               /* { data: 'icon', name: 'icon' },*/
                { data: 'title', name: 'title' },
                { data: 'description', name: 'description' },
                { data: 'order', name: 'order' },
                { data: 'created_at', name: 'created_at' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ]
        })

    </script>

@endpush('script')
