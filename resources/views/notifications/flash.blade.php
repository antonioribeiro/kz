@if ($messages = Flash::popMessages())
    <div id="flash-messages" class="row">
        <div class="col-md-12">
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
    </div>
@endif
