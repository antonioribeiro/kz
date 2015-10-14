@extends('layouts.message')

@section('error-code')
    Senha <strong>Alterada</strong>
@stop

@section('error-message')
    A sua senha foi alterada com sucesso, clique no botão abaixo para fazer login.
@stop

@section('error-buttons')
    <a href="{{ route('auth.login') }}" class="btn btn-success">
        Login
    </a>
@stop
