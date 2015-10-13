@extends('layouts.login')

@section('content')
    {!! Form::opener(['route' => 'auth.login', 'class' => 'smart-form client-form', 'id' => 'smart-form-register', 'no-return-ajax-url' => true]) !!}
        <div class="form-group m-b-20">
            {!! Form::text('email', null, ['id' => 'email', 'type' => 'email', 'class' => 'form-control input-lg', 'placeholder' => 'Endereço de e-mail', 'autofocus']) !!}
        </div>

        <p>
            {!! Form::password('password', ['id' => 'password', 'type' => 'password', 'class' => 'form-control input-lg', 'placeholder' => 'Senha', 'value' => '']) !!}
        </p>

        <div class="checkbox m-b-20">
            <label>
                <input type="checkbox" /> Lembrar de mim
            </label>
        </div>

        <div class="login-buttons">
            <button type="submit" class="btn btn-success btn-block btn-lg">Entrar</button>
        </div>

        <div class="m-t-20">
            Ainda não tem uma conta? Clique <a href="/register">aqui</a> para se registrar.
        </div>

        <div class="m-t-20">
            Não lembra a sua senha? Clique <a href="/password">aqui</a> para recuperá-la.
        </div>
    {!! Form::close() !!}
@stop
