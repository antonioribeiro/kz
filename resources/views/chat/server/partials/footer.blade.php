<div v-if="socketConnected">
    <div class="panel-footer">
        <div class="row">
            <div class="col-md-2">
                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#end-chat-modal">ENCERRAR</button>
            </div>

            <div class="col-md-10">
                <form name="send_message_form" data-id="message-form">
                    <div class="input-group">
                        <input type="text" v-model="textInput" class="form-control input-sm" name="message" placeholder="Digite sua mensagem aqui">
                        <span class="input-group-btn">
                            <button class="btn btn-primary btn-sm" type="button" v-on="click: __sendMessage">Enviar</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="panel-footer bg-red" v-if=" ! socketConnected">
    <h5 class="animated flash infinite animate5s color-white"><strong>Aguardando servidor de chat...</strong></h5>
</div>
