<div class="modal fade" id="{{ $divId }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h3>{{ $message }}</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary"  @click="__doDelete">Deletar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
