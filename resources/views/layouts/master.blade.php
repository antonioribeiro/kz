@extends('pragmarx/sdk::html')

@section('html.head')
    <title>Kall Zenter</title>

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/css/animate.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/css/style.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/css/style-responsive.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/css/theme/default.css" rel="stylesheet" id="theme" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css" rel="stylesheet" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
    <link href="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" />
    <link href="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet" />
    <link href="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    {{--<link href="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/morris/morris.css" rel="stylesheet" />--}}
    <link href="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/css/red.css" rel="stylesheet" />

    <link href="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->

    <link href="{{url('/')}}/assets/css/main-server.css" rel="stylesheet" />
@stop

@section('html.body')
    @yield('body.heading')

    @yield('body.contents')

    @yield('body.footer')

    <!-- begin #page-loader -->
    <div id="page-loader" class="fade in"><span class="spinner"></span></div>
    <!-- end #page-loader -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/crossbrowserjs/html5shiv.js"></script>
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/crossbrowserjs/respond.min.js"></script>
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
    <!-- ================== END BASE JS ================== -->

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    {{--<script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/morris/raphael.min.js"></script>--}}
    {{--<script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/morris/morris.js"></script>--}}
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js"></script>
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js"></script>
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/gritter/js/jquery.gritter.js"></script>
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/js/dashboard-v2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.16/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.1.16/vue-resource.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.3.7/socket.io.min.js"></script>

    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js"></script>
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js"></script>
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js"></script>
    {{--<script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/DataTables/extensions/Buttons/js/buttons.colvis.min.js"></script>--}}
    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>

    <script src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/js/apps.min.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <script>
        $(document).ready(function() {
            App.init();
            DashboardV2.init();
            TableManageButtons.init();
        });
    </script>

    @yield('javascript')
    @yield('component-javascript')
@stop
