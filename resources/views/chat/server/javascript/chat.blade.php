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
            currentChatId: null,
            currentOperatorId: '{{ $currentOperatorId }}',
            socketConnected: false,
            chatLeftRight: 'left',
            colors: ['info', 'success', 'danger'],
            talkers: [],
            textInput: '',
        },

        methods:
        {
            __sendMessage: function()
            {
                this.$http.post(
                    '{{ url() }}/api/v1/chat/server/send',
                    {
                        _token: '{{ csrf_token() }}',
                        chatId: this.currentChatId,
                        message: this.textInput,
                    }
                );

                this.textInput = '';
            },

            __loadChats: function()
            {
                this.$http.get(
                    '{{ url() }}/api/v1/chat/all',
                    function(data, status, request)
                    {
                        this.$set('chats', data);

                        this.__listenOnAllChatSockets();

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
                            this.currentChatId = data.chat.id;
                        }
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
            },

            __beingRespondendByCurrentUser: function(chat)
            {
                return chat.responder_id == this.currentOperatorId;
            },

            __chatIsBeingResponded: function(chat)
            {
                return chat.responder_id !== null;
            },

            __selectChat: function(chat)
            {
                this.currentChatId = chat.id;

                this.__listenOnCurrentChatSocket();
            },

            __chatLeftRight: function(message)
            {
                if (typeof this.talkers[message.talker.id] == 'undefined' || typeof this.talkers[message.talker.id].leftRight == 'undefined')
                {
                    this.talkers[message.talker.id] = {leftRight: this.chatLeftRight};

                    this.chatLeftRight = this.chatLeftRight == 'left' ? 'right' : 'left';
                }

                return this.talkers[message.talker.id].leftRight;
            },

            __getCurrentChat: function()
            {
                if ( ! this.currentChatId)
                {
                    return null;
                }

                return this.chats[this.currentChatId];
            },

            __listenOnCurrentChatSocket: function()
            {
                this.__listenOnChatSocket(this.currentChatId);
            },

            __listenOnAllChatSockets: function()
            {
                for (var chat in this.chats)
                {
                    if (chat.responder_id == this.currentOperatorId)
                    {
                        this.__listenOnChatSocket(chat.id);
                    }
                }
            },

            __listenOnChatSocket: function(chatId)
            {
                socket.on('chat-channel:'+chatId, function()
                {
                    this.__loadChats();
                }.bind(this));
            },

            __sendScript: function(script)
            {
                this.__sendMessage(script.script);
            },

            __humanDate: function(date)
            {
                var human = new Date(date);

                return  padzero(human.getDay(),2) + '/' + padzero(human.getMonth(),2) + ' às ' +
                        padzero(human.getHours(),2) + ':' + padzero(human.getMinutes(),2);
            },
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

    function padzero(num, size) {
        var s = num+"";
        while (s.length < size) s = "0" + s;
        return s;
    }

</script>
