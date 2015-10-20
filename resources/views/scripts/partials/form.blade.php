@extends('components.panel')

@section('title', 'Digite os dados nos campos abaixo')

@section('component-panel-contents')
    {!! Form::opener(['route' => 'chat.server.scripts.store', 'class' => '', 'id' => 'create-chat-form', 'no-return-ajax-url' => true]) !!}
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Nome do script</label>
                    {!! Form::text('name', null, ['id' => 'name', 'type' => 'email', 'class' => 'form-control', 'placeholder' => 'Nome', 'autofocus']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Cliente</label>
                    {!! Form::select('business_client_id', $businessClients, null, ['id' => 'business_client_id', 'class' => 'form-control', 'placeholder' => 'SELECIONE O CLIENTE']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Serviço de Chat</label>
                    {!! Form::select('chat_service_id', $chatServices, null, ['id' => 'business_client_id', 'class' => 'form-control', 'placeholder' => 'SELECIONE O SERVIÇO']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Texto do script</label>
                    {!! Form::textarea('script', null, ['id' => 'first_name', 'type' => 'email', 'class' => 'form-control', 'placeholder' => 'Escreva aqui o texto completo', 'autofocus']) !!}
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-sm btn-primary">Criar usuário</button>
        <a href="{{ route('businesses.users.index') }}" type="reset" class="btn btn-sm btn-warning">Cancelar</a>
    {!! Form::close() !!}
@stop
