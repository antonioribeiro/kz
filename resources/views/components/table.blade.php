<!-- begin col-10 -->
<div class="col-md-12">
    <!-- begin panel -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <div class="panel-heading-btn">
                @if($includeButtons)
                    @include($includeButtons)
                @endif

                &nbsp;&nbsp;&nbsp;&nbsp;

                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
            </div>
            <h4 class="panel-title">{{ $title }}</h4>
        </div>

        <div class="panel-body">
            @if ($rows)
                <table id="data-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            @foreach($columns as $column)
                                <th>{{ $column }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rows as $row)
                            <?php $isOdd = ! (isset($isOdd) ? $isOdd : false); ?>

                            <tr class="{{ $isOdd ? 'even' : 'odd' }}">
                                @foreach($columns as $key => $column)
                                    <td>{{ $row[$key] }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h2>Não foram encontrados registros.</h2>
            @endif
        </div>
    </div>
    <!-- end panel -->
</div>

@section('component-javascript')
    <script>
        var handleDataTableButtons = function () {
            "use strict";
            0 !== $("#data-table").length && $("#data-table").DataTable(
            {
                dom: "Bfrtip",
                buttons: [
                    {text: 'Copiar', extend: "copy", className: "btn-sm"},
                    {extend: "csv", className: "btn-sm"},
                    {extend: "excel", className: "btn-sm"},
                    {extend: "pdf", className: "btn-sm"},
                    {text: 'Imprimir', extend: "print", className: "btn-sm"}
                ],
                responsive: !0,
                language: {
                    "sEmptyTable": "Nenhum registro encontrado",
                    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ".",
                    "sLengthMenu": "_MENU_ resultados por página",
                    "sLoadingRecords": "Carregando...",
                    "sProcessing": "Processando...",
                    "sZeroRecords": "Nenhum registro encontrado",
                    "sSearch": "Pesquisar",
                    "oPaginate": {
                        "sNext": "Próximo",
                        "sPrevious": "Anterior",
                        "sFirst": "Primeiro",
                        "sLast": "Último"
                    },
                    "oAria": {
                        "sSortAscending": ": Ordenar colunas de forma ascendente",
                        "sSortDescending": ": Ordenar colunas de forma descendente"
                    }
                }
            })
        }, TableManageButtons = function () {
            "use strict";
            return {
                init: function () {
                    handleDataTableButtons()
                }
            }
        }();
    </script>
@stop
