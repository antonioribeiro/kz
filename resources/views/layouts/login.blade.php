@extends('layouts.master')

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
        <!-- begin login template -->
        <div class="login login-v2">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand">
                    <img src="{{url('/')}}/assets/images/logo-40px.png" alt=""> Kall Zenter
                    <small>atendimento multicanal para seus clientes</small>
                </div>
                <div class="icon">
                    <i class="fa fa-sign-in"></i>
                </div>
            </div>
            <!-- end brand -->
            <div class="login-content">
                @include('notifications.flash')

                @yield('content')
            </div>
        </div>
        <!-- end login template -->
    </div>
    <!-- end page container -->
@stop
