@extends('layouts.login')

@section('content')
    {!! Form::opener(['route' => 'auth.login', 'class' => 'smart-form client-form', 'id' => 'smart-form-register', 'no-return-ajax-url' => true]) !!}
        <div class="form-group m-b-20">
            {!! Form::text('email', null, ['id' => 'email', 'type' => 'email', 'class' => 'form-control input-lg', 'placeholder' => 'Endereço de e-mail', 'autofocus']) !!}
        </div>

        <div class="login-buttons">
            <button type="submit" class="btn btn-success btn-block btn-lg">Trocar minha senha</button>
        </div>

        <div class="m-t-20">
            Já tem uma conta? Clique <a href="/auth/login">aqui</a> para entrar.
        </div>

        <div class="m-t-20">
            Ainda não tem uma conta? Clique <a href="/register">aqui</a> para se registrar.
        </div>
    {!! Form::close() !!}
@stop
