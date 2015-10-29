@extends('components.panel')

@section('title', 'Digite os dados nos campos abaixo')

@section('component-panel-contents')
    {!! Form::opener(isset($user) ? $user : null, ['route' => $route, 'class' => '', 'id' => 'business-user-create', 'no-return-ajax-url' => true]) !!}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Nome</label>
                    {!! Form::text('first_name', null, ['id' => 'first_name', 'type' => 'email', 'class' => 'form-control', 'placeholder' => 'Nome', 'autofocus']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Sobrenome</label>
                    {!! Form::text('last_name', null, ['id' => 'last_name', 'type' => 'email', 'class' => 'form-control', 'placeholder' => 'Sobrenome']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">E-mail</label>
                    {!! Form::text('email', null, ['id' => 'email', 'type' => 'email', 'class' => 'form-control', 'placeholder' => 'Endereço de e-mail']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Cliente</label>
                    {!! Form::select('business_client_id', $businessClients, isset($user) ? $user->business_client_id : null, ['id' => 'business_client_id', 'class' => 'form-control', 'placeholder' => 'SELECIONE O CLIENTE']) !!}
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-sm btn-primary">{{ $submitButton }}</button>

        <a href="{{ route('businesses.users.index') }}" type="reset" class="btn btn-sm btn-warning">Cancelar</a>
    {!! Form::close() !!}
@stop
