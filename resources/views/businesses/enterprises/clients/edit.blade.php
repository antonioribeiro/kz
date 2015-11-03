@extends('layouts.main')

@section('content')
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li><a href="{{ route('businesses.enterprises.index') }}">Empresas</a></li>
            <li><a href="{{ route('businesses.enterprises.edit', ['businessId', $business->id]) }}">{{ $business->name }}</a></li>
            <li>{{ $client->name }}</li>
        </ol>

        <!-- end breadcrumb -->

        <!-- begin page-header -->
            <h1 class="page-header">{{ $client->name }} <small>use campos abaixo</small></h1>
        <!-- end page-header -->

        <!-- begin form -->
            @include('businesses.enterprises.clients.partials.form')
        <!-- end form -->
    </div>
    <!-- end #content -->
@stop
