<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
  <meta name="author" content="Coderthemes">
  <!-- App favicon -->
  <link rel="shortcut icon" href="{{url('public/assets/images/favicon.ico')}}">
  <!-- App title -->
  <title>{{env('APP_NAME')}}</title>
  <!--Morris Chart CSS -->
  <link rel="stylesheet" href="{{url('public/plugins/morris/morris.css')}}">
  <!-- App css -->
  <link href="{{url('public/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{url('public/assets/css/core.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{url('public/assets/css/components.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{url('public/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{url('public/assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{url('public/assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{url('public/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="{{url('public/plugins/switchery/switchery.min.css')}}">
  <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js')}}"></script>
  <![endif]-->
  <script src="{{url('public/assets/js/modernizr.min.js')}}"></script>
</head>
<body class="fixed-left">
  <!-- Begin page -->
  <div id="wrapper">
    @include('common.header')
    @include('common.sidebar')
    @yield('content')
    @include('common.footer')
  </div>
  <!-- END wrapper -->
  <script>
  var resizefunc = [];
  </script>
  <!-- jQuery  -->
  <script src="{{url('public/assets/js/jquery.min.js')}}"></script>
  <script src="{{url('public/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{url('public/assets/js/detect.js')}}"></script>
  <script src="{{url('public/assets/js/fastclick.js')}}"></script>
  <script src="{{url('public/assets/js/jquery.blockUI.js')}}"></script>
  <script src="{{url('public/assets/js/waves.js')}}"></script>
  <script src="{{url('public/assets/js/jquery.slimscroll.js')}}"></script>
  <script src="{{url('public/assets/js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{url('public/plugins/switchery/switchery.min.js')}}"></script>
  <!-- Counter js  -->
  <script src="{{url('public/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{url('public/plugins/counterup/jquery.counterup.min.js')}}"></script>
  <!--Morris Chart-->
  <script src="{{url('public/plugins/morris/morris.min.js')}}"></script>
  <script src="{{url('public/plugins/raphael/raphael-min.js')}}"></script>
  <!-- Dashboard init -->
  <script src="{{url('public/assets/pages/jquery.dashboard.js')}}"></script>
  <!-- App js -->
  <script src="{{url('public/assets/js/jquery.core.js')}}"></script>
  <script src="{{url('public/assets/js/jquery.app.js')}}"></script>
</body>
</html>
