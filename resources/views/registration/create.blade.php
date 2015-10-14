@extends('layouts.message')

@section('error-code')
    VOLTA JÁ
@stop

@section('error-message')
    O registro está temporariamente desabilitado.
@stop

@section('error-description')
    Nós não estamos mais aceitando registro de novos usuários. <br>
    Para maiores informações, por favor entre em contato com Antonio Carlos Ribeiro no telefone <strong>(21)9-8088-2233</strong>.
@stop

@section('error-buttons')
    <a href="/" class="btn btn-success">
        Voltar ao site principal
    </a>

    <a href="/auth/login" class="btn btn-primary">
        Eu tenho uma conta
    </a>
@stop
