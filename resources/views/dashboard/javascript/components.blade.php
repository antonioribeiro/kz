<script>
    Vue.component('widget',
    {
        template: '#vue-component-dashboard-widget',

        props: [
            'color',
            'title',
            'number',
            'progress',
            'description',
            'icon',
        ],

        data: function() {
             return {

            }
        }
    });
</script>
