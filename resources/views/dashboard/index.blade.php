@extends('layouts.main')

@section('content')
    <!-- begin #content -->
    <div id="vue-dashboard" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="/">Home</a></li>
            <li>Painel de Controle</li>
        </ol>
        <!-- end breadcrumb -->

        <!-- begin page-header -->
        <h1 class="page-header">Painel de Controle <small>sumário do atendimento</small></h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row">
            <widget
                color="bg-blue"
                title="ONLINE"
                number="45"
                icon="fa fa-globe fa-fw"
                progress="width: 25%;"
                description="Maior do que a semana passada (35%)"
            ></widget>

            <widget
                color="bg-black"
                title="MENSAGENS"
                number="139.400"
                icon="fa fa-comments fa-fw"
                progress="width: 25%;"
                description="Maior do que a semana passada (35%)"
            ></widget>

            <widget
                color="bg-green"
                title="ATENDIMENTOS"
                number="3559"
                icon="fa fa-list fa-fw"
                progress="width: 25%;"
                description="Maior do que a semana passada (35%)"
            ></widget>

            <widget
                color="bg-purple"
                title="USUÁRIOS"
                number="150"
                icon="fa fa-user fa-fw"
                progress="width: 85%;"
                description="Maior do que a semana passada (25%)"
            ></widget>
        </div>
        <!-- end row -->
    </div>
    <!-- end #content -->

    @include('dashboard.components.widget')
@stop

@section('javascript')
    @include('dashboard.javascript.app')
@stop
