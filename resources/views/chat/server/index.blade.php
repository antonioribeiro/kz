@extends('layouts.main')

@section('content')
    <!-- begin #content -->
    <div id="vue-chat" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li><a href="{{ route('dashboard') }}">Painel de Controle</a></li>
            <li class="active">Chat</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Chat</h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row">
            <!-- begin col-4 -->
            <div class="col-md-4">
                @include('chat.server.partials.talkers')
            </div>
            <!-- end col-4 -->

            <!-- begin col-6 -->
            <div class="col-md-6">
                @include('chat.server.partials.chat')
            </div>
            <!-- end col-6 -->

            <div class="col-md-2">
                @include('chat.server.partials.texts')
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end #content -->
@stop

@section('javascript')
    @include('chat.server.javascript.chat')
@stop
