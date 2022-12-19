<aside class="main-sidebar">
<?php $roleId = \Illuminate\Support\Facades\Session::get('roleId');

?>
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{Auth::user()->avatar == null ? url('/img/avatar-default.png') :url('/upload/shares/'.trim(Auth::user()->avatar))}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menu quản lý</li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Quản lý người dùng</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ request()->is('users') || request()->is('users/*/edit') ? 'active' : '' }}"><a href="{{route('users.index')}}"><i class="fa fa-list"></i> Danh sách</a></li>
                    <li class="{{ request()->is('users/create') ? 'active' : '' }}"><a href="{{ route('users.create') }}"><i class="fa fa-user-plus"></i>  Tạo người dùng</a></li>
                </ul>
            </li>
           {{-- <li class="treeview {{ request()->is('roles') || request()->is('roles/*/edit') || request()->is('roles/create') ? 'active menu-open' : '' }}">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Vai trò</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('roles.index') }}"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                    <li><a href="{{ route('roles.create') }}"><i class="fa fa-circle-o"></i> Tạo mới</a></li>
                </ul>
            </li>--}}
            {{--<li class="treeview">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-ban"></i>--}}
                    {{--<span>Phân quyền</span>--}}
                    {{--<span class="pull-right-container">--}}
                      {{--<i class="fa fa-angle-left pull-right"></i>--}}
                    {{--</span>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="{{ route('permissions.index') }}"><i class="fa fa-circle-o"></i> Danh sách</a></li>--}}
                    {{--<li><a href="{{ route('permissions.create') }}"><i class="fa fa-circle-o"></i> Thêm mới</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-id-card-o" aria-hidden="true"></i> <span>Quản lý danh mục</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ request()->is('categories') || request()->is('categories/*/edit') ? 'active' : '' }}"><a href="{{route('categories.index')}}"><i class="fa fa-list"></i> Danh sách</a></li>
                    <li class="{{ request()->is('categories/create') ? 'active' : '' }}"><a href="{{ route('categories.create') }}"><i class="fa fa-plus" aria-hidden="true"></i>
                            Thêm mới </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i> <span>Danh sách tin</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ request()->is('news') || request()->is('news/*/edit') ? 'active' : '' }}"><a href="{{route('news.index')}}"><i class="fa fa-list"></i> Danh sách</a></li>
                    <li class="{{ request()->is('news/create') ? 'active' : '' }}"><a href="{{ route('news.create') }}"><i class="fa fa-plus" aria-hidden="true"></i>
                            Thêm mới </a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-picture-o" aria-hidden="true"></i> <span>Quản lý banner</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ request()->is('banners') || request()->is('banners/*/edit') ? 'active' : '' }}"><a href="{{route('banners.index')}}"><i class="fa fa-list"></i> Danh sách</a></li>
                    <li class="{{ request()->is('banners/create') ? 'active' : '' }}"><a href="{{ route('banners.create') }}"><i class="fa fa-picture-o" aria-hidden="true"></i>  Thêm mới </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-picture-o" aria-hidden="true"></i> <span>Thành phần hệ thống</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ request()->is('systems') || request()->is('systems/*/edit') ? 'active' : '' }}"><a href="{{route('systems.index')}}"><i class="fa fa-list"></i> Danh sách</a></li>
                    <li class="{{ request()->is('systems/create') ? 'active' : '' }}"><a href="{{ route('systems.create') }}"><i class="fa fa-picture-o" aria-hidden="true"></i>  Thêm mới </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-picture-o" aria-hidden="true"></i> <span>Ưu điểm, Giải pháp</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ request()->is('solutions') || request()->is('solutions/*/edit') ? 'active' : '' }}"><a href="{{route('solutions.index')}}"><i class="fa fa-list"></i> Danh sách</a></li>
                    <li class="{{ request()->is('solutions/create') ? 'active' : '' }}"><a href="{{ route('solutions.create') }}"><i class="fa fa-picture-o" aria-hidden="true"></i>  Thêm mới </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-picture-o" aria-hidden="true"></i> <span>Con số thống kê</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ request()->is('statistics') || request()->is('statistics/*/edit') ? 'active' : '' }}"><a href="{{route('statistics.index')}}"><i class="fa fa-list"></i> Danh sách</a></li>
                    <li class="{{ request()->is('statistics/create') ? 'active' : '' }}"><a href="{{ route('statistics.create') }}"><i class="fa fa-picture-o" aria-hidden="true"></i>  Thêm mới </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-picture-o" aria-hidden="true"></i> <span>Quản lý hỗ trợ</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ request()->is('supports') || request()->is('supports/*/edit') ? 'active' : '' }}"><a href="{{route('supports.index')}}"><i class="fa fa-list"></i> Danh sách</a></li>
                    <li class="{{ request()->is('supports/create') ? 'active' : '' }}"><a href="{{ route('supports.create') }}"><i class="fa fa-picture-o" aria-hidden="true"></i>  Thêm mới </a></li>
                </ul>
            </li>
            {{--<li class="treeview">
                <a href="#">
                    <i class="fa fa-list-alt"></i> <span>Danh sách gửi liên hệ</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ request()->is('contacts/danh-sach-gui-lien-he') ? 'active' : '' }}"><a href="{{ route('contacts.index') }}"><i class="fa fa-id-card"></i>  Danh sách</a></li>
                </ul>
            </li>--}}
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-picture-o" aria-hidden="true"></i> <span>Quản lý Nội dung</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{request()->is('qly-noi-dung') ? 'active' : '' }}"><a href="{{url('/qly-noi-dung')}}"><i class="fa fa-leaf"></i> Quản lý nội dung</a></li>
                </ul>
            </li>
            <li class="{{request()->is('thong-tin-trang') ? 'active' : '' }}"><a href="{{url('/thong-tin-trang')}}"><i class="fa fa-leaf"></i> Thông tin trang</a></li>
       </ul>
    </section>
    <!-- /.sidebar -->
</aside>
