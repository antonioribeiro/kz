@extends('layouts.main')

@section('content')
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li><a href="{{ route('businesses.enterprises.index') }}">Empresas</a></li>
            <li>{{ $business->present()->name }}</li>
        </ol>


        <!-- end breadcrumb -->

        <!-- begin page-header -->
        <h1 class="page-header">{{ $business->name }} <small>use campos abaixo</small></h1>
        <!-- end page-header -->

        <!-- begin form -->
            @include('businesses.enterprises.partials.form')
        <!-- end form -->

        @include('businesses.enterprises.clients.table')
    </div>
    <!-- end #content -->
@stop
