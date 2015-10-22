<div v-if="socketConnected">
    <div class="panel-footer">
        <form name="send_message_form" data-id="message-form">
            <div class="input-group">
                <input type="text" class="form-control input-sm" name="message" placeholder="Digite sua mensagem aqui">
                    <span class="input-group-btn">
                        <button class="btn btn-primary btn-sm" type="button">Enviar</button>
                    </span>
            </div>
        </form>
    </div>

    <div class="panel-footer">
        <button class="btn btn-danger btn-sm" v-on="click: __terminateChat">Encerrar chat</button>
    </div>
</div>
<div class="panel-footer bg-red" v-if=" ! socketConnected">
    <h5 class="animated flash infinite animate5s color-white"><strong>Aguardando servidor de chat...</strong></h5>
</div>
