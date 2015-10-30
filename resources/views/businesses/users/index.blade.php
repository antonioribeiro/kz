@extends('layouts.main')

@section('content')
    <!-- begin #content -->
    <div id="business-users" class="content">
        @{{ $data | json }}
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
        </div>
        <!-- end row -->

        @include('businesses.users.partials.delete-user-modal')
    </div>
    <!-- end #content -->
@stop

@section('page-javascript')
    <script>
        new Vue({
            el: '#business-users',
            data: {
                currentId: '000',
            },
            methods: {
                __deleteUser: function()
                {
                    console.log('clicked!');

                    window.location.replace("/businesses/users/delete/"+this.currentId);
                }
            },
        })
    </script>
@stop
