@extends('layouts.main')

@section('content')
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li><a href="{{ route('dashboard') }}">Painel de Controle</a></li>
            <li class="active">Chat</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Chat <small>header small text goes here...</small></h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row">
            <!-- begin col-4 -->
            <div class="col-md-4">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="index-4">
                    <div class="panel-heading">
                        <h4 class="panel-title">New Registered Users <span class="pull-right label label-success">24 new users</span></h4>
                    </div>
                    <ul class="registered-users-list clearfix">
                        <li>
                            <a href="javascript:;"><img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/img/user-5.jpg" alt="" /></a>
                            <h4 class="username text-ellipsis">
                                Savory Posh
                                <small>Algerian</small>
                            </h4>
                        </li>
                        <li>
                            <a href="javascript:;"><img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/img/user-3.jpg" alt="" /></a>
                            <h4 class="username text-ellipsis">
                                Ancient Caviar
                                <small>Korean</small>
                            </h4>
                        </li>
                        <li>
                            <a href="javascript:;"><img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/img/user-1.jpg" alt="" /></a>
                            <h4 class="username text-ellipsis">
                                Marble Lungs
                                <small>Indian</small>
                            </h4>
                        </li>
                        <li>
                            <a href="javascript:;"><img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/img/user-8.jpg" alt="" /></a>
                            <h4 class="username text-ellipsis">
                                Blank Bloke
                                <small>Japanese</small>
                            </h4>
                        </li>
                        <li>
                            <a href="javascript:;"><img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/img/user-2.jpg" alt="" /></a>
                            <h4 class="username text-ellipsis">
                                Hip Sculling
                                <small>Cuban</small>
                            </h4>
                        </li>
                        <li>
                            <a href="javascript:;"><img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/img/user-6.jpg" alt="" /></a>
                            <h4 class="username text-ellipsis">
                                Flat Moon
                                <small>Nepalese</small>
                            </h4>
                        </li>
                        <li>
                            <a href="javascript:;"><img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/img/user-4.jpg" alt="" /></a>
                            <h4 class="username text-ellipsis">
                                Packed Puffs
                                <small>Malaysian></small>
                            </h4>
                        </li>
                        <li>
                            <a href="javascript:;"><img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/img/user-9.jpg" alt="" /></a>
                            <h4 class="username text-ellipsis">
                                Clay Hike
                                <small>Swedish</small>
                            </h4>
                        </li>
                    </ul>
                    <div class="panel-footer text-center">
                        <a href="javascript:;" class="text-inverse">View All</a>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-4 -->

            <!-- begin col-8 -->
            <div class="col-md-8">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="index-2">
                    <div class="panel-heading">
                        <h4 class="panel-title">Chat History <span class="label label-success pull-right">4 message</span></h4>
                    </div>
                    <div class="panel-body bg-silver">
                        <div data-scrollbar="true" data-height="225px">
                            <ul class="chats">
                                <li class="left">
                                    <span class="date-time">yesterday 11:23pm</span>
                                    <a href="javascript:;" class="name">Sowse Bawdy</a>
                                    <a href="javascript:;" class="image"><img alt="" src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/img/user-12.jpg" /></a>
                                    <div class="message">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit volutpat. Praesent mattis interdum arcu eu feugiat.
                                    </div>
                                </li>
                                <li class="right">
                                    <span class="date-time">08:12am</span>
                                    <a href="#" class="name"><span class="label label-primary">ADMIN</span> Me</a>
                                    <a href="javascript:;" class="image"><img alt="" src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/img/user-13.jpg" /></a>
                                    <div class="message">
                                        Nullam posuere, nisl a varius rhoncus, risus tellus hendrerit neque.
                                    </div>
                                </li>
                                <li class="left">
                                    <span class="date-time">09:20am</span>
                                    <a href="#" class="name">Neck Jolly</a>
                                    <a href="javascript:;" class="image"><img alt="" src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/img/user-10.jpg" /></a>
                                    <div class="message">
                                        Euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    </div>
                                </li>
                                <li class="left">
                                    <span class="date-time">11:15am</span>
                                    <a href="#" class="name">Shag Strap</a>
                                    <a href="javascript:;" class="image"><img alt="" src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/admin/html/assets/img/user-14.jpg" /></a>
                                    <div class="message">
                                        Nullam iaculis pharetra pharetra. Proin sodales tristique sapien mattis placerat.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <form name="send_message_form" data-id="message-form">
                            <div class="input-group">
                                <input type="text" class="form-control input-sm" name="message" placeholder="Enter your message here.">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary btn-sm" type="button">Send</button>
                                    </span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-8 -->

        </div>
        <!-- end row -->
    </div>
    <!-- end #content -->
@stop
