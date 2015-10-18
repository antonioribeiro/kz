@include('chat.server.javascript.components')

<script>
    var socket = io('{{ url() . ':' . env('CHAT_PORT', '23172') }}');

    new Vue(
    {
        el: '#vue-chat',

        data: {
            chats: [],
            chatCount: 0,
            currentChatId: false,
            socketConnected: false,
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

                        console.log(data['6eec0cd3-8d4a-4f13-88f4-2a6eef96d584'].messages);
                    }
                );
            },

            __respond: function(chat)
            {
                this.currentChatId = chat.id;
            },

            __getFromCurrentChat: function(props)
            {
                if ( ! this.currentChatId)
                {
                    return null;
                }

                return this.__getProperty(this.chats[this.currentChatId], props);
            },

            __getProperty: function(obj, props)
            {
                props = props.split('.');

                for (var prop in props)
                {
                    obj = obj[props[prop]];
                }

                return obj;
            },

            __getChatCount: function()
            {
                return Object.keys(this.chats).length
            },

            __terminateChat: function()
            {
                this.currentChatId = null;
            }
        },

        ready: function()
        {
            this.__loadChats();

            socket.on('connect', function(data)
            {
                this.socketConnected = true;
            }.bind(this));

            socket.on('disconnect', function(data)
            {
                this.socketConnected = false;
            }.bind(this));

            socket.on('{{ $listenChannel }}', function(data)
            {
                {{--var isOperator = data.username == '{{ $operatorUsername }}';--}}

                var message = {
                    "isOperator": isOperator,
                    "username": data.username,
//                    "message": data.message,
//                    "pull": isOperator ? 'left' : 'right',
                    {{--"photo": isOperator ? '{!! $operatorAvatar !!}' : '{!! $talkerAvatar !!}',--}}
                };

                this.messages.push(message);
            }.bind(this));
        }
    });
</script>
