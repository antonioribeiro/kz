<div class="modal fade" id="end-chat-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h3>Deseja realmente encerrar este chat?</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" v-on="click: __terminateCurrentChat">Encerrar chat</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
