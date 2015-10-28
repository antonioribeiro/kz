@extends('chat.client.layouts.master')

@section('contents')
    <h4>Chat</h4>

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-comment"></span> {{ $talkerUsername }}
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                            </button>
                            <ul class="dropdown-menu slidedown">
                                <li>
                                    <a href="#">
                                        <span class="glyphicon glyphicon-refresh"></span>Atualizar
                                    </a>
                                </li>
                                <li><a href="#"><span class="glyphicon glyphicon-off"></span>
                                    Sair</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">
                        <ul class="chat">
                            <li v-for="message in chatInfo.messages | orderBy 'serial' -1" class="@{{ __chatLeftRight(message) }} clearfix">
                                <span class="chat-img pull-@{{ __chatLeftRight(message) }}">
                                    <img src="@{{ message.talker.avatar }}" alt="User Avatar" class="img-circle chat-avatar"/>
                                </span>

                                <div class="chat-body clearfix" v-if="__chatLeftRight(message) == 'left'">
                                    <div class="header">
                                        <strong class="primary-font">@{{ message.talker.fullName }}</strong>
                                        <small class="pull-right text-muted">
                                            <span class="glyphicon glyphicon-time"></span>12 mins ago
                                        </small>
                                    </div>

                                    <p>
                                        @{{{ message.message }}}
                                    </p>
                                </div>

                                <div class="chat-body clearfix" v-if="__chatLeftRight(message) == 'right'">
                                    <div class="header">
                                        <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                                        <strong class="pull-right primary-font">@{{ message.talker.fullName }}</strong>
                                    </div>

                                    <p>
                                        @{{{ message.message }}}
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-footer" class="panel-footer" v-if=" ! connected">
                        <p>Aguardando conexão com servidor...</p>
                    </div>

                    <div class="panel-footer" v-if="connected">
                        <div class="input-group">
                            <input
                                id="btn-input"
                                type="text"
                                class="form-control input-sm"
                                placeholder="Digite sua mensagem aqui..."
                                v-on:keyup.13="__sendMessage"
                                v-model="currentMessage"
                            />

                            <span class="input-group-btn">
                                <button class="btn btn-warning btn-sm" id="btn-chat" @click="__sendMessage">
                                    Enviar
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
    @include('pragmarx/sdk::chat.code')
@stop
