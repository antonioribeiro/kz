<!-- begin chat panel -->
<div class="panel panel-inverse" data-sortable-id="index-2">
    @include('chat.server.partials.heading')

    <div class="panel-body bg-silver">
        <div data-scrollbar="true" data-height="425px">
            <ul class="chats">
                <li class="@{{ __chatLeftRight(message) }}" v-repeat="message: __getCurrentChat().messages">
                    <span class="date-time">@{{ __humanDate(message.created_at) }}</span>
                    @{{ __markMessageAsRead(__getCurrentChat(), message.id) }}
                    <a href="javascript:;" class="name">@{{ message.talker.fullName }}</a>
                    <a href="javascript:;" class="image"><img alt="" src="@{{ message.talker.avatar }}" /></a>
                    <div class="message">
                        @{{ message.message }}
                    </div>
                </li>
            </ul>
        </div>
    </div>

    @include('chat.server.partials.footer')
</div>
<!-- end chat panel -->
