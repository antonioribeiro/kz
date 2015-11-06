<!-- begin chat panel -->
<div class="panel panel-inverse" data-sortable-id="index-2">
    @include('chat.server.partials.heading')

    @include('chat.server.partials.footer')

    <div class="panel-body bg-silver">
        <div data-scrollbar="true" data-height="425px">
            <ul class="chats">
                <li class="@{{ __chatLeftRight(message) }} animate pulse chat-line" v-for="message in __getCurrentChat().messages | orderBy 'serial' -1" id="@{{message.id}}" data-serial="@{{message.serial}}">
                    <span class="date-time">@{{ __humanDate(message.created_at) }}</span>

                    <a href="javascript:;" class="name">@{{ message.talker.fullName }}</a>

                    <a href="javascript:;" class="image"><img alt="" v-bind:src="message.talker.avatar" /></a>
                    <div class="message">
                        @{{{ message.message }}}
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end chat panel -->
