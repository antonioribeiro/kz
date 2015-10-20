@if ($messages = Flash::popMessages())
    <div class="well">
        @foreach ($messages as $kind => $message)
            @include(
                'notifications.message',
                [
                    'kind' => $message['kind'],
                    'icon' => $message['icon'],
                    'title' => $message['title'],
                    'message' => $message['message'],
                ]
            )
        @endforeach
    </div>
@endif
