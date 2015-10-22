<!-- begin texts panel -->
<div class="panel panel-inverse" data-sortable-id="ui-buttons-4">
    <div class="panel-heading">
        <div class="panel-heading-btn">
            {{--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>--}}
            {{--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>--}}
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            {{--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>--}}
        </div>
        <h4 class="panel-title">Scripts</h4>
    </div>
    <div class="panel-body">
        <div v-repeat="script: scripts | orderBy 'order'">
            <div class="note note-@{{ script.color }}">
                <p>
                    @{{ script.script }}
                    <br><br>
                    <button class="btn btn-xs btn-primary pull-right" v-on="click: __sendScript(script.id)">enviar</button>
                    <br>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- end texts panel -->
