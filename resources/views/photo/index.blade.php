@extends('layouts.admin_template')

@section('pageTitle', $pageTitle )

@section('main')

    <section class="content-header">
        <h1>{{ $pageTitle }} <small>{{ $breadcrumb }}</small></h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> @lang('message.home_page')</a></li>
            <li>
                <a href="{{ route('photo.index') }}">{{ $pageTitle }}</a>
            </li>
            <li class="active">{{ $breadcrumb }}</li>
        </ol>
    </section>
    <section class="content">

        @include('flash-message')

        <div class="box box-primary">
            <div class="box-header">
                <a href="{{ route('photo.create') }}" class="btn btn-default" title="Thêm mới"><i
                            class="fa fa-plus" aria-hidden="true"></i> {{$create}}</a>
            </div>
            <div class="box-body responsive-table">
                <table width="100%" id="photo-list" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tiêu đề</th>
                        <th>Mô tả</th>
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
                content: `Bạn có chắc chắn muốn xóa "${name}" ?`,
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

        $('#photo-list').DataTable({
            processing: true,
            serverSide: true,
            aaSorting : [[0, 'desc']],
            ajax: '',
            language: {
                "url": `{{url('/datatable/vi.json')}}`
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'title', name: 'title' },
                { data: 'description', name: 'description' },
                { data: 'created_at', name: 'created_at' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ]
        })

    </script>

@endpush('script')
