@if ($current_business)
    <li class="dropdown navbar-user">
        <div class="pull-right">
            <div class="btn-group">
                <button type="button" class="btn btn-success btn-xs">empresa - <strong>{{ $current_business->name }}</strong></button>
                @if ($all_available_businesses)
                    <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <span class="caret"></span>
                    </button>

                    <ul class="dropdown-menu animated bounceIn" role="menu">
                        @foreach($all_available_businesses as $business)
                            <li><a href="{{ route('businesses.enterprises.select', ['businessId' => $business->id]) }}">{{ $business->name }}</a></li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div class="btn-group">
                <button type="button" class="btn btn-primary btn-xs">cliente - <strong>{{ $current_business_client->name }}</strong></button>
                @if ($all_available_business_clients)
                    <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <span class="caret"></span>
                    </button>

                    <ul class="dropdown-menu animated bounceIn" role="menu">
                        @foreach($all_available_business_clients as $client)
                            <li><a href="{{ route('businesses.enterprises.select.client', ['clientId' => $client->id]) }}">{{ $client->name }}</a></li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </li>
@endif
