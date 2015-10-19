@extends('components.panel')

@section('title', 'Digite os dados nos campos abaixo')

@section('component-panel-contents')
    {!! Form::opener(['route' => 'businesses.users.store', 'class' => 'form-horizontal', 'id' => 'business-user-create', 'no-return-ajax-url' => true]) !!}
        <div class="form-group">
            <label class="col-md-2 control-label">Nome</label>
            <div class="col-md-5">
                {!! Form::text('first_name', null, ['id' => 'first_name', 'type' => 'email', 'class' => 'form-control', 'placeholder' => 'Nome', 'autofocus']) !!}
            </div>
            <div class="col-md-5">
                {!! Form::text('last_name', null, ['id' => 'last_name', 'type' => 'email', 'class' => 'form-control', 'placeholder' => 'Sobrenome', 'autofocus']) !!}
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">E-mail</label>
            <div class="col-md-10">
                {!! Form::text('email', null, ['id' => 'email', 'type' => 'email', 'class' => 'form-control', 'placeholder' => 'Endereço de e-mail', 'autofocus']) !!}
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label"></label>
            <div class="col-md-10">
                <button type="submit" class="btn btn-sm btn-success">Criar usuário</button>
            </div>
        </div>
    {!! Form::close() !!}
@stop
