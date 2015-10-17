<script>
    var socket = io('{{ url() . ':' . env('CHAT_PORT', '23172') }}');

    new Vue(
    {
        el: '#vue-chat',

        data: {
            chats: [],
            chatCount: 0,
        },

        methods:
        {
            __sendMessage: function(event)
            {
                var user = event.targetVM.$data.currentUsername;

                var message = event.targetVM.$data.currentMessage;

                var chatId = event.targetVM.$data.chatId;

                this.$http.get('{{ url() }}/chat/client/send/'+chatId+'/'+user+'/'+message);
            },

            __loadChats: function()
            {
                this.$http.get(
                    '{{ url() }}/chat/server/all',
                    function(data, status, request)
                    {
                        this.chats = data;
                        this.chatCount = Object.keys(data).length;
                    }
                );
            },

            __respond: function(chat)
            {
                this.currentChat = chat;
            }
        },

        ready: function()
        {
            this.__loadChats();

            {{--socket.on('connect', function(data)--}}
            {{--{--}}
                {{--this.connected = true;--}}
            {{--}.bind(this));--}}

            {{--socket.on('disconnect', function(data)--}}
            {{--{--}}
                {{--this.connected = false;--}}
            {{--}.bind(this));--}}

            {{--socket.on('{{ $listenChannel }}', function(data)--}}
            {{--{--}}
                {{--var isOperator = data.username == '{{ $operatorUsername }}';--}}

                {{--var message = {--}}
                    {{--"isOperator": isOperator,--}}
                    {{--"username": data.username,--}}
                    {{--"message": data.message,--}}
                    {{--"pull": isOperator ? 'left' : 'right',--}}
                    {{--"photo": isOperator ? '{!! $operatorAvatar !!}' : '{!! $talkerAvatar !!}',--}}
                {{--};--}}

                {{--this.messages.push(message);--}}
            {{--}.bind(this));--}}
        }
    });
</script>
