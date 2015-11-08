@include('dashboard.javascript.components')

<script>

    var socket = io('{{ url() . ':' . env('CHAT_PORT', '23172') }}');

    Vue.config.debug = '{{ env("APP_DEBUG") }}';

    var vueServerChat = new Vue(
    {
        el: '#vue-dashboard',

        data: {
            online: {
                count: 13,
            }
        },

        methods:
        {
        },

        ready: function()
        {
        },

        computed: {
        }
    });

</script>
