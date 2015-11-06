<div v-if="socketConnected">
    <div class="panel-footer">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group">
                    <span class="input-group-btn">
                        <div class="btn btn-danger btn-sm" data-toggle="modal" data-target="#end-chat-modal"><i class="fa fa-check"></i> Concluir</div>
                    </span>
                    <input
                        type="text"
                        v-model="textInput"
                        class="form-control input-sm"
                        name="message"
                        placeholder="Digite sua mensagem aqui"
                        v-on:keyup.13="__sendMessage"
                    >
                    <span class="input-group-btn">
                        <div class="btn btn-primary btn-sm" @click="__sendMessage"><i class="fa fa-send"></i>&nbsp;&nbsp;Enviar</div>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="panel-footer bg-red" v-if=" ! socketConnected">
    <h5 class="animated flash infinite animate5s color-white"><strong>Aguardando servidor de chat...</strong></h5>
</div>
