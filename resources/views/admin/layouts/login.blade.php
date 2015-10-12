@extends('admin.layouts.master')

<?php
    $html_body_attributes = ['class' => 'pace-top'];
?>

@section('body.contents')
    <div class="login-cover">
        <div class="login-cover-image">
            <img src="{{url('/')}}/assets/images/pier.png" data-id="login-cover-image" alt="" />
        </div>
        <div class="login-cover-bg"></div>
    </div>

    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        @yield('content')
    </div>
    <!-- end page container -->
@stop
