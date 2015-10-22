@include('chat.server.javascript.components')

<script>
    var socket = io('{{ url() . ':' . env('CHAT_PORT', '23172') }}');

    Vue.config.debug = true;

    new Vue(
    {
        el: '#vue-server-chat',

        data: {
            chats: [],
            scripts: [],
            chatCount: 0,
            currentChat: null,
            currentOperatorId: '{{ $currentOperatorId }}',
            socketConnected: false,
            chatLeftRight: 'left',
            colors: ['info', 'success', 'danger'],
        },

        methods:
        {
            __sendMessage: function(event)
            {
                var user = event.targetVM.$data.currentUsername;

                var message = event.targetVM.$data.currentMessage;

                var chatId = event.targetVM.$data.chatId;

                this.$http.get('{{ url() }}/api/v1/chat/client/send/'+chatId+'/'+user+'/'+message);
            },

            __loadChats: function()
            {
                this.$http.get(
                    '{{ url() }}/api/v1/chat/all',
                    function(data, status, request)
                    {
                        this.chats = data;

                        console.log('this.chats');
                        console.log(data);
                    }
                );
            },

            __loadScripts: function()
            {
                this.$http.get(
                    '{{ url() }}/api/v1/chat/scripts',
                    function(data, status, request)
                    {
                        this.scripts = data;

                        this.__processScripts();
                    }
                );
            },

            __processScripts: function()
            {
                var index = 0;

                for (var script in Object.keys(this.scripts))
                {
                    this.scripts[script].color = this.colors[index];

                    index = index < this.colors.length-1 ? index+1 : 0;
                }

                console.log('this.scripts');
                console.log(this.scripts);
            },

            __respond: function(chat)
            {
                this.$http.get(
                    '{{ url() }}/api/v1/chat/respond/'+chat.id,
                    function(data, status, request)
                    {
                        if (data.success)
                        {
                            this.currentChat = data.chat;
                        }
                    }
                );
            },

            __getFromCurrentChat: function(props)
            {
                if ( ! this.currentChat)
                {
                    return null;
                }

                return this.__getProperty(this.chats[this.currentChat.id], props);
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

            __getChatCount: function(one, many)
            {
                total = Object.keys(this.chats).length;

                if (one && many)
                {
                    return total + ' ' + (total < 2 ? one : many);
                }

                return total;
            },

            __terminateChat: function()
            {
                this.currentChat = null;
            },

            __beingRespondendByCurrentUser: function(chat)
            {
                return chat.responder_id == this.currentOperatorId;
            },

            __chatIsBeingResponded: function(chat)
            {
                return chat.responder_id !== null;
            },

            __getCurrentChatId: function()
            {
                if (this.currentChat)
                {
                    return this.currentChat.id;
                }

                return null;
            },

            __selectChat: function(chat)
            {
                this.currentChat = chat;
            },

            __chatLeftRight: function(message)
            {
                if (typeof message.leftRight == 'undefined')
                {
                    message.leftRight = this.chatLeftRight;

                    this.chatLeftRight = this.chatLeftRight == 'left' ? 'right' : 'left';
                }

                return message.leftRight;
            }
        },

        ready: function()
        {
            this.__loadChats();

            this.__loadScripts();

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

            socket.on('chat-channel:ChatCreated', function(data)
            {
                this.__loadChats();
            }.bind(this));

            socket.on('chat-channel:ChatResponded', function(data)
            {
                this.__loadChats();
            }.bind(this));
        }
    });
</script>
