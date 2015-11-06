@extends('chat.client.layouts.master')

@section('contents')
    <h4>Chat</h4>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! Form::opener(['route' => 'chat.client.store']) !!}
                    {!! Form::hidden('clientId', $clientId) !!}

                    <div class="form-group">
                        <label for="name">Nome</label>
                        {!! Form::text('name') !!}
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        {!! Form::text('email') !!}
                    </div>

                    <button type="submit" class="btn btn-primary">Entrar no chat</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
