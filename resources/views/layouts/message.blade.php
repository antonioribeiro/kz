@extends('layouts.master')

<?php
    $html_body_attributes = ['class' => 'pace-top'];
?>

@section('body.contents')
    <!-- begin error -->
    <div class="error">
        <div class="error-code m-b-10">@yield('error-code')</div>
        <div class="error-content">
            <div class="error-message">@yield('error-message')</div>
            <div class="error-desc m-b-20">
                @yield('error-description')
            </div>
            <div>
                <a href="@yield('error-button-url')" class="btn btn-success">
                    @yield('error-button-caption')
                </a>

                @yield('extra-html')
            </div>
        </div>
    </div>
    <!-- end error -->

    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
@stop
