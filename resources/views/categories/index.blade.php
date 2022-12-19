@extends('layouts.admin_template')

@section('pageTitle', $pageTitle )

@section('main')

<section class="content-header">
	<h1>{{ $pageTitle }} <small>{{ $breadcrumb }}</small></h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> @lang('message.home_page')</a></li>
		<li>
			<a href="{{ route('categories.index') }}">{{ $pageTitle }}</a>
		</li>
		<li class="active">{{ $breadcrumb }}</li>
	</ol>
</section>
<section class="content">
	@include('flash-message')
	<div class="box box-primary">
		<div class="box-header">
			<a href="{{ route('categories.create') }}" class="btn btn-primary" title="Tạo danh mục"><i
						class="fa fa-plus" aria-hidden="true"></i> {{$createCategory}}</a>
		</div>
		<div class="box-body responsive-table">
			<table width="100%" id="categories-list" class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên thể loại</th>
						<th>Trạng thái</th>
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
			content: `Bạn có chắc chắn muốn xóa danh mục "${name}" ?`,
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
    function changeStatusUser(that) {
        var text = $(that).closest('.btn-action').data('status');
        let status = (text == 'on') ? 'hủy kích hoạt' : ' kích hoạt';
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
	var table = $('#categories-list').DataTable({
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
			{ data: 'status', name: 'status' },
			{ data: 'created_at', name: 'created_at' },
			{ data: 'action', name: 'action', orderable: false, searchable: false },
		]
	})

</script>

@endpush('script')
