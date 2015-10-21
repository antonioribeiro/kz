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
            scriptsX: [ {
                            "id": "474f83b7-c8ab-42dd-9171-69c44b290957",
                            "business_client_id": "9c6dc9ab-d46c-4d1b-a9a7-719cd6ce8047",
                            "chat_service_id": "a1f1ac7d-dee0-4867-9c9b-2bc84b4f43fe",
                            "chat_script_type_id": "148a8756-3693-4ee0-850d-23a2cb790e9f",
                            "name": "asdasd",
                            "script": "Olá, você está no Alô Alerj, meu nome é [operador], como posso ajudar? ",
                            "created_at": "2015-10-20 14:39:12",
                            "updated_at": "2015-10-20 14:39:12",
                            "type": {
                                        "id": "148a8756-3693-4ee0-850d-23a2cb790e9f",
                                        "name": "opening",
                                        "description": "Abertura",
                                        "created_at": "2015-10-20 14:33:49",
                                        "updated_at": "2015-10-20 14:33:49"
                            },
                            "color": "info" }
                    ],
            chatCount: 0,
            currentChatId: false,
            socketConnected: false,
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

                console.log(this.scripts);
            },

            __respond: function(chat)
            {
                this.$http.get(
                    '{{ url() }}/api/v1/chat/respond/'+chat.id,
                    function(data, status, request)
                    {
                        this.currentChatId = chat.id;

                        console.log(data);
                    }
                );
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
                this.currentChatId = null;
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
        }
    });
</script>
