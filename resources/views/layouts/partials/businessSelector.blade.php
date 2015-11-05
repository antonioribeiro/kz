@if ($current_business)
    <li class="dropdown navbar-user">
        <div class="pull-right">
            <div class="btn-group">
                <button type="button" class="btn btn-inverse btn-xs">empresa</button>

                @if ($current_business->name)
                    <button type="button" class="btn btn-success btn-xs"><strong>{{ strtoupper($current_business->name) }}</strong></button>
                @endif

                @if ($all_available_businesses)
                    <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <span class="caret"></span>
                    </button>

                    <ul class="dropdown-menu animated bounceIn" role="menu">
                        @foreach($all_available_businesses as $business)
                            <li><a href="{{ route('businesses.enterprises.select', ['businessId' => $business->id]) }}">{{ $business->name }}</a></li>
                        @endforeach
                    </ul>
                @else
                    @if (! $current_business->name)
                        <button type="button" class="btn btn-primary btn-xs">não disponível</button>
                    @endif
                @endif
            </div>

            &nbsp;&nbsp;&nbsp;

            <div class="btn-group">
                <button type="button" class="btn btn-inverse btn-xs">cliente</button>

                @if ($current_business_client->name)
                    <button type="button" class="btn btn-primary btn-xs"><strong>{{ strtoupper($current_business_client->name) }}</strong></button>
                @endif

                @if ($all_available_business_clients)
                    <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <span class="caret"></span>
                    </button>

                    <ul class="dropdown-menu animated bounceIn" role="menu">
                        @foreach($all_available_business_clients as $client)
                            <li><a href="{{ route('businesses.enterprises.select.client', ['clientId' => $client->id]) }}">{{ $client->name }}</a></li>
                        @endforeach
                    </ul>
                @else
                    @if (! $current_business_client->name)
                        <button type="button" class="btn btn-primary btn-xs">não disponível</button>
                    @endif
                @endif
            </div>
        </div>
    </li>
@endif
