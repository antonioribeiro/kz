@extends('layouts.message')

@section('error-code')
    {!! $title !!}
@stop

@section('error-message')
    {!! $message !!}
@stop

@section('error-buttons')
    @if ($buttons)
        @foreach($buttons as $button)
            <a href="{!! $button['url'] !!}" class="btn btn-danger btn-lg">{{ $button['caption'] }}</a>
        @endforeach
    @endif
@stop
