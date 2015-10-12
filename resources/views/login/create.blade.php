@extends('admin.layouts.login')

@section('content')
    <!-- begin login -->
    <div class="login login-v2">
        <!-- begin brand -->
        <div class="login-header">
            <div class="brand">
                <span class="logo"></span> Kall Zenter
                <small>responsive bootstrap 3 admin template</small>
            </div>
            <div class="icon">
                <i class="fa fa-sign-in"></i>
            </div>
        </div>
        <!-- end brand -->
        <div class="login-content">
            <form action="index.html" method="POST" class="margin-bottom-0">
                <div class="form-group m-b-20">
                    <input type="text" class="form-control input-lg" placeholder="Endereço de e-mail" />
                </div>
                <div class="form-group m-b-20">
                    <input type="text" class="form-control input-lg" placeholder="Senha" />
                </div>
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
            </form>
        </div>
    </div>
    <!-- end login -->
@stop
