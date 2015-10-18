<script>
    Vue.component('chatservice',
    {
        template: '#vue-component-chat-service',

        props: ['chat-service'],

        data: function() {
             return {
                 chat: {
                    service: this.chatService
                }
            }
        }
    });
</script>
