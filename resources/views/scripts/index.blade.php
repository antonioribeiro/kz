@extends('layouts.main')

@section('content')
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li>Usuários</li>
        </ol>
        <!-- end breadcrumb -->

        <!-- begin page-header -->
        <h1 class="page-header">Usuários <small>registrados no sistema</small></h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row">
            @include('components.table',
                [
                    'title' => 'Scritps de Chat',
                    'includeButtons' => 'scripts.partials.table-buttons',
                    'columns' => [
                        'name' => 'Nome do script',
                        'businessClient' => 'Cliente',
                        'service' => 'Serviço',
                        'script' => 'Script completo',
                    ],
                    'rows' => $scripts,
                    'rowButtonsCaption' => 'Opções',
                    'rowButtonsView' => 'scripts.partials.table-row-buttons',
                ]
            )
        </div>
        <!-- end row -->
    </div>
    <!-- end #content -->
@stop
