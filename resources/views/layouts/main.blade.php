@extends('layouts.master')

@section('body.contents')
    <!-- begin #page-container -->
    <div id="page-container" class="page-container fade page-without-sidebar page-header-fixed page-with-top-menu in">

        @include('layouts.partials.header')

        {{--@include('layouts.partials.sidebar')--}}

        @include('layouts.partials.topmenu')

        @include('notifications.flash')

        @yield('content')

        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->
@stop
