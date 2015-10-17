@include('chat.server.components.chat-service')

<!-- begin talkers panel -->
<div class="panel panel-inverse" data-sortable-id="index-4" id="talkers">
    <div class="panel-heading">
        <h4 class="panel-title">Chats <span class="pull-right label label-success">@{{ __getChatCount() }} sessões</span></h4>
    </div>
    <div class="panel-body">
        <div class="media media-sm" v-repeat="chat: chats">
            <a class="media-left" href="javascript:;">
                <img src="@{{ chat.talker.avatar }}" alt="" class="media-object">
            </a>
            <div class="media-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="media-heading">@{{ chat.talker.fullName }}</h5>
                        <chatservice chat-service="@{{ chat.service }}"></chatservice>
                    </div>

                    <div class="col-md-6">
                        <label class="btn btn-sm btn-danger pull-right" v-if="responder">
                            ANTONIO CARLOS<br>
                            <strong>em atendimento</strong>
                        </label>

                        <button class="btn btn-sm btn-success pull-right" v-if=" ! responder" v-on="click: __respond(chat)">
                            <strong>ATENDER</strong>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end talkers panel -->
