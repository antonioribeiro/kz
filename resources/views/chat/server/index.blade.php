@extends('layouts.main')

@section('content')
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li><a href="{{ route('dashboard') }}">Painel de Controle</a></li>
            <li class="active">Chat</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Chat</h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row">
            <!-- begin col-4 -->
            <div class="col-md-4">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="index-4">
                    <div class="panel-heading">
                        <h4 class="panel-title">Chats <span class="pull-right label label-success">4 sessões</span></h4>
                    </div>
                    <div class="panel-body">
                        <div class="media media-sm">
                            <a class="media-left" href="javascript:;">
                                <img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/img/user-1.jpg" alt="" class="media-object">
                            </a>
                            <div class="media-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="media-heading">João da Silva</h4>
                                        <span class="label label-primary"><i class="fa fa-envelope"></i> Telegram</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="btn btn-sm btn-danger pull-right">
                                            ANTONIO CARLOS<br>
                                            <strong>em atendimento</strong>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media media-sm">
                            <a class="media-left" href="javascript:;">
                                <img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/img/user-2.jpg" alt="" class="media-object">
                            </a>
                            <div class="media-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="media-heading">Fulano de Sicrano</h4>
                                        <p>
                                            <span class="label label-danger"><i class="fa fa-comment"></i> Chat</span>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="btn btn-success pull-right">
                                            <strong>ATENDER</strong>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media media-sm">
                            <a class="media-left" href="javascript:;">
                                <img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/img/user-4.jpg" alt="" class="media-object">
                            </a>
                            <div class="media-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="media-heading">Dona Flor</h4>
                                        <p>
                                            <span class="label label-success"><i class="fa fa-whatsapp"></i> WhatsApp</span>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="btn btn-success pull-right">
                                            <strong>ATENDER</strong>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media media-sm">
                            <a class="media-left" href="javascript:;">
                                <img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/img/user-10.jpg" alt="" class="media-object">
                            </a>
                            <div class="media-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="media-heading">Ariano Suassuna</h4>
                                        <p>
                                            <span class="label label-primary"><i class="fa fa-envelope"></i> Telegram</span>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="btn btn-success pull-right">
                                            <strong>ATENDER</strong>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-4 -->

            <!-- begin col-8 -->
            <div class="col-md-6">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="index-2">
                    <div class="panel-heading">
                        <h4 class="panel-title">Chat Atual <span class="label label-success pull-right">4 mensagens</span></h4>
                    </div>
                    <div class="panel-body bg-silver">
                        <div data-scrollbar="true" data-height="425px">
                            <ul class="chats">
                                <li class="left">
                                    <span class="date-time">yesterday 11:23pm</span>
                                    <a href="javascript:;" class="name">Sowse Bawdy</a>
                                    <a href="javascript:;" class="image"><img alt="" src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/img/user-12.jpg" /></a>
                                    <div class="message">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit volutpat. Praesent mattis interdum arcu eu feugiat.
                                    </div>
                                </li>
                                <li class="right">
                                    <span class="date-time">08:12am</span>
                                    <a href="#" class="name"><span class="label label-primary">ADMIN</span> Me</a>
                                    <a href="javascript:;" class="image"><img alt="" src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/img/user-13.jpg" /></a>
                                    <div class="message">
                                        Nullam posuere, nisl a varius rhoncus, risus tellus hendrerit neque.
                                    </div>
                                </li>
                                <li class="left">
                                    <span class="date-time">09:20am</span>
                                    <a href="#" class="name">Neck Jolly</a>
                                    <a href="javascript:;" class="image"><img alt="" src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/img/user-10.jpg" /></a>
                                    <div class="message">
                                        Euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    </div>
                                </li>
                                <li class="left">
                                    <span class="date-time">11:15am</span>
                                    <a href="#" class="name">Shag Strap</a>
                                    <a href="javascript:;" class="image"><img alt="" src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/img/user-14.jpg" /></a>
                                    <div class="message">
                                        Nullam iaculis pharetra pharetra. Proin sodales tristique sapien mattis placerat.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
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
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-6 -->

            <div class="col-md-2">
                <div class="panel panel-inverse" data-sortable-id="ui-buttons-4">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">Textos</h4>
                    </div>
                    <div class="panel-body">
                        <div class="note note-info">
                            <p>
                                Olá, você está no Alô Alerj, meu nome é [operador], como posso ajudar?
                                <br><br>
                                <button class="btn btn-xs btn-primary pull-right">enviar</button>
                                <br>
                            </p>
                        </div>
                        <div class="note note-success">
                            <p>
                                Precisamos de alguns dados seus: Nome completo, CPF, endereço, cep, telefone.
                                <br><br>
                                <button class="btn btn-xs btn-primary pull-right">enviar</button>
                                <br>
                            </p>
                        </div>
                        <div class="note note-danger">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad architecto consequatur eius fugiat ipsum odio officiis perferendis reiciendis temporibus.
                                <br><br>
                                <button class="btn btn-xs btn-primary pull-right">enviar</button>
                                <br>
                            </p>
                        </div>
                        <div class="note note-info">
                            <p>
                                Incidunt itaque laboriosam nisi, nulla placeat, possimus quae reprehenderit repudiandae tenetur voluptatum.
                                <br><br>
                                <button class="btn btn-xs btn-primary pull-right">enviar</button>
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end #content -->
@stop
