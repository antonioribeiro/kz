<!-- start table -->
    <div class="row" id="vue-table">
        @include('components.table',
            [
                'title' => 'Clientes',
                'includeButtons' => 'businesses.enterprises.clients.partials.table-buttons',
                'columns' => [
                    'name' => 'Nome',
                ],
                'rows' => $clients,
                'rowButtonsCaption' => 'Opções',
                'rowButtonsView' => 'businesses.enterprises.clients.partials.table-row-buttons',
            ]
        )

        @include('partials.delete-modal', [
            'message' => 'Deseja realmente deletar esta empresa?',
            'divId' => 'delete-enterprise-modal',
        ])
    </div>
<!-- end table -->
