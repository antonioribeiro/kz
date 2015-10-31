@extends('layouts.main')

@section('content')
    <!-- begin #content -->
    <div id="business-users" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="/">Home</a></li>
            <li>Usuários</li>
        </ol>
        <!-- end breadcrumb -->

        <!-- begin page-header -->
        <h1 class="page-header">Usuários <small>registrados no sistema</small></h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row" id="vue-table">
            @include('components.table',
                [
                    'title' => 'Usuários',
                    'includeButtons' => 'businesses.users.partials.table-buttons',
                    'columns' => [
                        'first_name' => 'Nome',
                        'last_name' => 'Sobrenome',
                        'businessClient' => 'Cliente',
                        'email' => 'E-mail',
                        'role' => 'Cargo',
                    ],
                    'rows' => $users,
                    'rowButtonsCaption' => 'Opções',
                    'rowButtonsView' => 'businesses.users.partials.table-row-buttons',
                ]
            )

            @include('partials.delete-modal', [
                'message' => 'Deseja realmente deletar este usuário?',
                'divId' => 'delete-user-modal',
                'deleteUri' => '/businesses/users/delete/'
            ])
        </div>
        <!-- end row -->

    </div>
    <!-- end #content -->
@stop

