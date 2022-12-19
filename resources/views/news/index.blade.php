@extends('layouts.admin_template')

@section('pageTitle', $pageTitle )

@section('main')

    <section class="content-header">
        <h1>{{ $pageTitle }} <small>{{ $breadcrumb }}</small></h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> @lang('message.home_page')</a></li>
            <li>
                <a href="{{ route('news.index') }}">{{ $pageTitle }}</a>
            </li>
            <li class="active">{{ $breadcrumb }}</li>
        </ol>
    </section>
    <section class="content">

        @include('flash-message')

        <div class="box box-primary">
            <div class="box-header">
                <a href="{{ route('news.create') }}" class="btn btn-primary" title="Thêm mới tin"><i
                            class="fa fa-plus" aria-hidden="true"></i> {{$createNew}}</a>
            </div>
            <div class="box-body responsive-table">
                <table width="100%" id="news-list" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tiêu đề</th>
                        <th>Mô tả ngắn</th>

                        <th>Danh mục</th>
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
                content: `Bạn có chắc chắn muốn xóa tin "${name}" ?`,
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


        $(document).ready( function () {

            $('#news-list').DataTable({
                processing: true,
                serverSide: true,
                aaSorting : [[0, 'desc']],
                ajax: '',
                language: {
                    "url": `{{url('/datatable/vi.json')}}`
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'description', name: 'description' },

                    { data: 'category.name', name: 'category.name' },
                    { data: 'action', name: 'action', orderable: false, searchable: false },
                ]
            });
        });
    </script>

@endpush('script')
