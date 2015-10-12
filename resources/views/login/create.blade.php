@extends('layouts.login')

@section('content')
    <!-- begin login -->
    <div class="login login-v2">
        <!-- begin brand -->
        <div class="login-header">
            <div class="brand">
                <span class="logo"></span> Kall Zenter
                <small>chat para centros de atendimento</small>
            </div>
            <div class="icon">
                <i class="fa fa-sign-in"></i>
            </div>
        </div>
        <!-- end brand -->
        <div class="login-content">
            @include('notifications.flash')

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
        </div>
    </div>
    <!-- end login -->
@stop
