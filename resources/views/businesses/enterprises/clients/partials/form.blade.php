@extends('components.panel')

@section('title', 'Digite os dados nos campos abaixo')

@section('component-panel-contents')
    {!! Form::opener(isset($client) ? $client : null, ['route' => [$postRoute, isset($postRouteParameters) ? $postRouteParameters : []], 'class' => '', 'id' => 'business-user-create', 'no-return-ajax-url' => true]) !!}
        @if (isset($client))
            {!! Form::hidden('id', $client->id) !!}
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Nome</label>
                    {!! Form::text('name', null, ['id' => 'name', 'type' => 'email', 'class' => 'form-control', 'placeholder' => 'Nome', 'autofocus']) !!}
                </div>
            </div>
        </div>

        @include('partials.form-submit-buttons')
    {!! Form::close() !!}
@stop
