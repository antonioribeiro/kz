@extends('layouts.main')

@section('content')
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li><a href="{{ route('businesses.users.index') }}">Usuários</a></li>
            <li>Novo Usuário</li>
        </ol>
        <!-- end breadcrumb -->

        <!-- begin page-header -->
        <h1 class="page-header">Novo Usuário <small>digite os dados abaixo</small></h1>
        <!-- end page-header -->

        <!-- begin form -->
            @include('businesses.users.partials.form')
        <!-- end form -->
    </div>
    <!-- end #content -->
@stop
