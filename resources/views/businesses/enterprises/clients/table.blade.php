<!-- start table -->
    <div class="row" id="vue-table">
        @include('components.table',
            [
                'title' => 'Clientes',
                'includeButtons' => 'businesses.enterprises.clients.partials.table-buttons',
                'columns' => [
                    'name' => 'Nome',
                    'chatLink' => 'Link para o chat',
                ],
                'rows' => $clients,
                'rowButtonsCaption' => 'Opções',
                'rowButtonsView' => 'businesses.enterprises.clients.partials.table-row-buttons',
            ]
        )

        @include('partials.delete-modal', [
            'message' => 'Deseja realmente deletar este cliente?',
            'divId' => 'delete-client-modal',
        ])
    </div>
<!-- end table -->
