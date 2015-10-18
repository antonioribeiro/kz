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
            <!-- begin col-4 -->
            <div class="col-md-4 animated bounceInDown">
                @include('chat.server.partials.talkers')
            </div>
            <!-- end col-4 -->

            <!-- begin col-6 -->
            <div class="col-md-6 animated bounceInDown" v-if="currentChatId">
                @include('chat.server.partials.chat')
            </div>

            <div class="col-md-6 animated bounceInDown" v-if=" ! currentChatId">
                @include('chat.server.partials.no-chat')
            </div>
            <!-- end col-6 -->

            <div class="col-md-2 animated bounceInDown" v-if="currentChatId">
                @include('chat.server.partials.texts')
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end #content -->

    @include('chat.server.components.chat-service')
@stop

@section('javascript')
    @include('chat.server.javascript.chat')
@stop
