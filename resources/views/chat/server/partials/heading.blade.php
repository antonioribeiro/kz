<div class="panel-heading">
    <h4 class="panel-title">
        <div class="row">
            <div class="col-md-2">
                <chatservice chat-service="@{{ __getFromCurrentChat('service') }}"></chatservice>
            </div>
            <div class="col-md-8" style="text-align: center; font-size: 1.3em;">
                @{{ __getFromCurrentChat('talker.fullName') }}
            </div>
            <div class="col-md-2">
                <span class="label label-success pull-right">4 mensagens</span>
            </div>
        </div>
    </h4>
</div>
