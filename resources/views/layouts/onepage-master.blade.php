@extends('pragmarx/sdk::html')

@section('html.head')
    <meta charset="utf-8" />
    <title>Kall Zenter</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/css/animate.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/css/style.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/css/style-responsive.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/css/theme/default.css" id="theme" rel="stylesheet" />
    <link href="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/css/theme/red.css" id="theme" rel="stylesheet" />
    <link href="{{url('/')}}/assets/css/main.css" id="theme" rel="stylesheet" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
@stop

@section('html.body')
    @yield('body.heading')

    @yield('body.contents')

    @yield('body.footer')

    <!-- begin #page-loader -->
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
    <!-- end #page-loader -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/crossbrowserjs/html5shiv.js"></script>
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/crossbrowserjs/respond.min.js"></script>
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/plugins/scrollMonitor/scrollMonitor.js"></script>
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/js/apps.min.js"></script>
    <!-- ================== END BASE JS ================== -->

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>

    @yield('javascript')
@stop
