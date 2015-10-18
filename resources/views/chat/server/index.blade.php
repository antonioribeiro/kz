@extends('layouts.main')

@section('content')
    <!-- begin #content -->
    <div id="vue-chat" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="active">Chat</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Chat</h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row" v-if=" ! __getChatCount()">
            @include('chat.server.partials.no-one')
        </div>
        <!-- begin row -->

        <!-- begin row -->
        <div class="row" v-if="__getChatCount()">
            <!-- talkers -->
            <div class="col-sm-6 col-md-4 animated bounceInDown">
                @include('chat.server.partials.talkers')
            </div>
            <!-- /talkers -->

            <!-- no-chat -->
            <div class="col-sm-6 col-md-8 animated bounceInDown" v-if=" ! currentChatId">
                @include('chat.server.partials.no-chat')
            </div>
            <!-- /no-chat -->

            <!-- chat -->
            <div class="col-sm-6 col-md-6 animated bounceInDown" v-if="currentChatId">
                @include('chat.server.partials.chat')
            </div>
            <!-- /chat -->

            <!-- texts -->
            <div class="col-sm-12s col-md-2 animated bounceInDown" v-if="currentChatId">
                @include('chat.server.partials.texts')
            </div>
            <!-- /texts -->
        </div>
        <!-- end row -->
    </div>
    <!-- end #content -->

    @include('chat.server.components.chat-service')
@stop

@section('javascript')
    @include('chat.server.javascript.chat')
@stop
