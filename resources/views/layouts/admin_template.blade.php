<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('pageTitle') {{ isset($breadcrumb) ? ' - '.$breadcrumb : '' }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
   <link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
  <base href="{{ asset('') }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.7 -->
  <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- Ionicons -->
  <link href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}" rel="stylesheet">

  <link href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">

  <link href="{{ asset('plugins/jquery-confirm.css') }}" rel="stylesheet">

  <link href="{{ asset('dist/css/skins/_all-skins.min.css') }}" rel="stylesheet">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">
  <!-- Theme style -->
  <link href="{{ asset('dist/css/AdminLTE.min.css') }}" rel="stylesheet">

  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datepicker.css') }}" rel="stylesheet">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- jQuery 3 -->
  <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    @include('layouts.header')
    <!-- Left side column. contains the logo and sidebar -->
    @include('layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
     {{--@include('flash-message')--}}

     @section('pageTitle', $pageTitle )

     @yield('main')
     <!-- /.content-wrapper -->
   </div>
   @include('layouts.footer')

 </div>
 <!-- Bootstrap 3.3.7 -->
 <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
 <!-- Select2 -->
 <script src="{{ asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>
 <!-- AdminLTE App -->
 <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>

 <script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="{{ asset('plugins/jquery-confirm.js') }}"></script>

 <script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
  <script>
      $(function () {
          $("#dotthingay").datepicker({
              autoclose: true,
              dateFormat: 'dd/mm/yy',
              todayHighlight: true
          }).datepicker('update', new Date());
      });
  </script>
 @stack('script')

</body>
</html>
