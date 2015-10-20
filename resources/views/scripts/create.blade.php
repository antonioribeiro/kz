@extends('layouts.main')

@section('content')
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li><a href="{{ route('chat.server.scripts.index') }}">Scripts</a></li>
            <li>Novo Script</li>
        </ol>
        <!-- end breadcrumb -->

        <!-- begin page-header -->
        <h1 class="page-header">Novo Script <small>digite os dados abaixo</small></h1>
        <!-- end page-header -->

        <!-- begin form -->
            @include('scripts.partials.form')
        <!-- end form -->
    </div>
    <!-- end #content -->
@stop
