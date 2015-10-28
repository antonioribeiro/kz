<!DOCTYPE html>
<html>
    <head>
        <title>Alô Alerj - Chat</title>

        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="/assets/css/main-client.css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                @include('notifications.flash')
                @yield('contents')
            </div>
        </div>

        <script src="/assets/js/jquery-2.1.4.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/vue.min.js"></script>
        <script src="/assets/js/vue-resource.min.js"></script>
        <script src="/assets/js/socket.io.min.js"></script>

        @yield('javascript')
    </body>
</html>
