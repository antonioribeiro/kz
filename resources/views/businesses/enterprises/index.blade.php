@extends('layouts.main')

@section('content')
    <!-- begin #content -->
    <div id="business-enterprises" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="/">Home</a></li>
            <li>Empresas</li>
        </ol>
        <!-- end breadcrumb -->

        <!-- begin page-header -->
        <h1 class="page-header">Empresas <small>registradas no sistema</small></h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row" id="vue-table">
            @include('components.table',
                [
                    'title' => 'Empresas',
                    'includeButtons' => 'businesses.enterprises.partials.table-buttons',
                    'columns' => [
                        'name' => 'Nome',
                    ],
                    'rows' => $businesses,
                    'rowButtonsCaption' => 'Opções',
                    'rowButtonsView' => 'businesses.enterprises.partials.table-row-buttons',
                ]
            )

            @include('partials.delete-modal', [
                'message' => 'Deseja realmente deletar este usuário?',
                'divId' => 'delete-enterprise-modal',
                'deleteUri' => '/businesses/enterprises/delete/'
            ])
        </div>
        <!-- end row -->

    </div>
    <!-- end #content -->
@stop

