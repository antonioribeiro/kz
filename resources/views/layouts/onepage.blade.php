@extends('layouts.onepage-master')

<?php
    $html_body_attributes = [
        'data-spy' => 'scroll',
        'data-target' => '#header-navbar',
        'data-offset' => '51',
    ];
?>

@section('body.contents')
    @yield('content')
@stop
