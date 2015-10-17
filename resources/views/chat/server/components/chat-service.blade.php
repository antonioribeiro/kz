<script id="vue-component-chat-service" type="x-template">
    <span class="label label-primary" v-if="chat.service == 'telegram'">
        <i class="fa fa-envelope"></i> Telegram
    </span>

    <span class="label label-danger" v-if="chat.service == 'chat'">
        <i class="fa fa-comment"></i> Chat
    </span>

    <span class="label label-success" v-if="chat.service == 'whatsapp'">
        <i class="fa fa-whatsapp"></i> WhatsApp
    </span>
</script>
