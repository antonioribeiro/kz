<!-- vue-table -->
<script>
    new Vue({
        el: '#vue-table',
        data: {
            currentId: '000',
            currentIds: {},
        },
        methods: {
            __doDelete: function()
            {
                window.location.replace(this.__makeUrl());
            },

            __setCurrentId: function(key, id)
            {
                this.$set('currentIds.'+key, id);
            },

            __makeUrl: function()
            {
                if (Object.keys(this.currentIds).length)
                {
                    url = "{{ $deleteUri }}";

                    for (key in this.currentIds)
                    {
                        if (this.currentIds.hasOwnProperty(key))
                        {
                            url = url.replace('{'+key+'}', this.currentIds[key]);
                        }
                    }
                }
                else
                {
                    url = "{{ $deleteUri }}"+this.currentId;
                }

                return url;
            }
        },
    })
</script>
<!-- /vue-table -->
