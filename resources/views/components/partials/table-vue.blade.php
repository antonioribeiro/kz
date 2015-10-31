<!-- vue-table -->
<script>
    new Vue({
        el: '#vue-table',
        data: {
            currentId: '000',
        },
        methods: {
            __doDelete: function()
            {
                console.log('clicked!');

                window.location.replace("{{ $deleteUri }}"+this.currentId);
            }
        },
    })
</script>
<!-- /vue-table -->
