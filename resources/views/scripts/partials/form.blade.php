@extends('components.panel')

@section('title', 'Digite os dados nos campos abaixo')

@section('component-panel-contents')
    {!! Form::opener(isset($script) ? $script : null, ['route' => $postRoute, 'class' => '', 'id' => 'business-user-create', 'no-return-ajax-url' => true]) !!}
        @if (isset($script))
            {!! Form::hidden('id', $script->id) !!}
        @endif

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Nome do script</label>
                    {!! Form::text('name', null, ['id' => 'name', 'type' => 'email', 'class' => 'form-control', 'placeholder' => 'Nome', 'autofocus']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Tipo de script</label>
                    {!! Form::select('chat_script_type_id', $scriptTypes, null, ['id' => 'business_client_id', 'class' => 'form-control', 'placeholder' => 'SELECIONE O TIPO']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Cliente</label>
                    {!! Form::select('business_client_id', $businessClients, null, ['id' => 'business_client_id', 'class' => 'form-control', 'placeholder' => 'SELECIONE O CLIENTE']) !!}
                </div>
            </div>
            <div class="col-md-3">
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

        @include('partials.form-submit-buttons', ['cancelRoute' => 'chat.server.scripts.index' ])

    {!! Form::close() !!}
@stop
