<script id="vue-component-dashboard-widget" type="x-template">
    <!-- begin col-3 -->
    <div class="col-md-3 col-sm-6">
        <div class="widget widget-stats @{{ color }}">
            <div class="stats-icon stats-icon-lg"><i class="@{{ icon }}"></i></div>
            <div class="stats-title">@{{ title }}</div>
            <div class="stats-number">@{{ number }}</div>
            <div class="stats-progress progress">
                <div class="progress-bar" v-bind:style="progress"></div>
            </div>
            <div class="stats-desc">@{{ description }}</div>
        </div>
    </div>
    <!-- end col-3 -->
</script>
