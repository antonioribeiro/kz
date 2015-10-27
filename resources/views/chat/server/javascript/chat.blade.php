@include('chat.server.javascript.components')

<script>

    var socket = io('{{ url() . ':' . env('CHAT_PORT', '23172') }}');

    Vue.config.debug = true;

    var vueServerChat = new Vue(
    {
        el: '#vue-server-chat',

        data: {
            chats: {},
            scripts: [],
            listeningSockets: [],
            chatCount: 0,
            lastThirdPartyMessage: 0,
            currentChatId: null,
            currentOperatorId: '{{ $currentOperatorId }}',
            socketConnected: false,
            chatLeftRight: 'left',
            colors: ['info', 'success', 'danger'],
            talkers: [],
            textInput: '',
            scriptCount: 0,
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
                    '{{ url() }}/api/v1/chat/server/all',
                    function(data, status, request)
                    {
                        this.$set('chats', data);

                        this.__listenOnAllChatSockets();

                        this.__checkCurrentChatNewMessages();

                        this.__checkLastThirdPartyMessage();
                    }
                );
            },

            __loadScripts: function()
            {
                this.$http.get(
                    '{{ url() }}/api/v1/chat/server/scripts',
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

                for (var scriptId in this.scripts)
                {
                    this.scripts[scriptId].color = this.colors[index];

                    index = index < this.colors.length-1 ? index+1 : 0;

                    this.scripts[scriptId].order = this.__getNextScriptCount();
                }
            },

            __respond: function(chat)
            {
                this.$http.get(
                    '{{ url() }}/api/v1/chat/server/respond/'+chat.id,
                    function(data, status, request)
                    {
                        if (data.success)
                        {
                            this.__setCurrentChatId(data.chat.id);
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
                this.__setCurrentChatId(chat.id);

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
                for (var chatId in this.chats)
                {
                    if (this.chats[chatId].responder_id == this.currentOperatorId)
                    {
                        this.__listenOnChatSocket(chatId);
                    }
                }

                this.__listenOnFixedChatSockets();
            },

            __listenOnFixedChatSockets: function()
            {
                this.__socketOn('connect', function(data)
                {
                    this.socketConnected = true;
                }.bind(this));

                this.__socketOn('disconnect', function(data)
                {
                    this.socketConnected = false;
                }.bind(this));

                this.__socketOn('chat-channel:ChatCreated', function(data)
                {
                    this.__loadChats();
                }.bind(this));

                this.__socketOn('chat-channel:ChatResponded', function(data)
                {
                    this.__loadChats();
                }.bind(this));

                this.__socketOn('chat-channel:ChatRead', function(data)
                {
                    this.__loadChats();
                }.bind(this));
            },

            __listenOnChatSocket: function(chatId)
            {
                this.__socketOn('chat-channel:'+chatId, function()
                {
                    this.__loadChats();
                }.bind(this));
            },

            __sendScript: function(scriptId)
            {
                this.textInput = this.scripts[scriptId].script;

                this.__moveScriptToEnd(scriptId);

                this.__sendMessage();
            },

            __humanDate: function(date)
            {
                var human = new Date(date);

                return  padzero(human.getDay(),2) + '/' + padzero(human.getMonth(),2) + ' às ' +
                        padzero(human.getHours(),2) + ':' + padzero(human.getMinutes(),2);
            },

            __getNextScriptCount: function()
            {
                var count = this.scriptCount;

                this.scriptCount++;

                return count;
            },

            __moveScriptToEnd: function(scriptId)
            {
                this.scripts[scriptId].order = this.__getNextScriptCount();
            },

            __markChatAsRead: function(chatId)
            {
                if (this.chats[chatId].last_message_serial <= this.chats[chatId].last_read_message_serial)
                {
                    return;
                }

                var lastRead = this.chats[chatId].last_message_serial;

                this.$http.post(
                    '{{ url() }}/api/v1/chat/server/read',
                    {
                        _token: '{{ csrf_token() }}',
                        chatId: chatId,
                        serial: lastRead,
                    }
                );
            },

            __setCurrentChatId: function(id)
            {
                this.currentChatId = id;

                this.__markChatAsRead(this.currentChatId);
            },

            __checkCurrentChatNewMessages: function()
            {
                if ( ! this.currentChatId)
                {
                    return;
                }

                var lastRead = this.chats[this.currentChatId].last_read_message_serial;

                var lastMessage = this.chats[this.currentChatId].last_message_serial;

                if (lastRead < lastMessage)
                {
                    this.__markChatAsRead(this.currentChatId);
                }
            },

            __socketOn: function(channel, callable)
            {
                if (this.listeningSockets.indexOf(channel) == -1)
                {
                    this.listeningSockets.push(channel);

                    return socket.on(channel, callable);
                }
            },

            __playNewMessageSound: function()
            {
                var audio = new Audio('{{ url() }}/assets/sound/newmessage.mp3');
                audio.play();
            },

            __checkLastThirdPartyMessage: function()
            {
                var last = '0';

                for (var chatId in this.chats)
                {
                    for (var messageId in this.chats[chatId].messages)
                    {
                        if (this.chats[chatId].messages[messageId].talker.id !== this.currentOperatorId)
                        {
                            last = last < this.chats[chatId].messages[messageId].serial
                                    ? this.chats[chatId].messages[messageId].serial
                                    : last;
                        }
                    }
                }

                if (last > this.lastThirdPartyMessage)
                {
                    this.__playNewMessageSound();

                    this.$set('lastThirdPartyMessage', last);
                }
            }
        },

        ready: function()
        {
            this.__loadChats();

            this.__loadScripts();

            this.__listenOnAllChatSockets();
        },

        computed: {
            currentChatMessageCount: function ()
            {
                var count = Object.keys(this.chats[this.currentChatId].messages).length;

                return count + (count == 1 ? ' mensagem' : ' mensagens');
            }
        }
    });

    function padzero(num, size) {
        var s = num+"";
        while (s.length < size) s = "0" + s;
        return s;
    }

</script>
