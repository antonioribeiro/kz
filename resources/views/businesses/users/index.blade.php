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

        @include('notifications.flash')

        <!-- begin page-header -->
        <h1 class="page-header">Usuários <small>registrados no sistema</small></h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row">
            @include('components.table',
                [
                    'title' => 'Usuários',
                    'includeButtons' => 'businesses.users.partials.table-buttons',
                    'columns' => $columns = [
                                    'first_name' => 'Nome',
                                    'last_name' => 'Sobrenome',
                                    'email' => 'E-mail',
                                    'role' => 'Cargo',
                                ],
                    'rows' => $users,
                ]
            )
        </div>
        <!-- end row -->
    </div>
    <!-- end #content -->
@stop
