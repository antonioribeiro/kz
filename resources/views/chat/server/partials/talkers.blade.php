<!-- begin talkers panel -->
<div class="panel panel-inverse" data-sortable-id="index-4" id="talkers">
    <div class="panel-heading">
        <h4 class="panel-title">Sessões de Chat <span class="pull-right label label-success">@{{ __getChatCount('sessão', 'sessões') }}</span></h4>
    </div>
    <div class="panel-body bg-black">
        <div class="media media-sm" v-repeat="chat: chats">
            <a class="media-left" href="javascript:;">
                <img src="@{{ chat.talker.avatar }}" alt="" class="media-object">
            </a>
            <div class="media-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="media-heading text-white">@{{ chat.talker.fullName }}</h4>
                        <chatservice chat-service="@{{ chat.service }}"></chatservice>
                        &nbsp;
                        <span class="label label-warning animated flash infinite" v-if="__hasNewMessages(chat)">
                            <i class="fa fa-star-o"></i> Nova mensagem
                        </span>
                    </div>

                    <div class="col-md-6">
                        <label class="btn btn-sm btn-danger pull-right" v-if="__chatIsBeingResponded(chat) && ! __beingRespondendByCurrentUser(chat)">
                            <strong>@{{ chat.responder.fullName }}</strong><br>
                            em atendimento
                        </label>

                        <label class="btn btn-sm btn-warning pull-right" v-if="__chatIsBeingResponded(chat) && __beingRespondendByCurrentUser(chat) && chat.id !== currentChatId" v-on="click: __selectChat(chat)">
                            <strong>SELECIONAR</strong>
                        </label>

                        <button class="btn btn-sm btn-success pull-right" v-if=" ! __chatIsBeingResponded(chat)" v-on="click: __respond(chat)">
                            <strong>ATENDER</strong>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end talkers panel -->
