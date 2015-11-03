@extends('layouts.main')

@section('content')
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li><a href="{{ route('businesses.enterprises.index') }}">Empresas</a></li>
            <li>Nova Empresa</li>
        </ol>
        <!-- end breadcrumb -->

        <!-- begin page-header -->
        <h1 class="page-header">Nova Empresa <small>digite os dados abaixo</small></h1>
        <!-- end page-header -->

        <!-- begin form -->
            @include('businesses.enterprises.partials.form')
        <!-- end form -->
    </div>
    <!-- end #content -->
@stop
