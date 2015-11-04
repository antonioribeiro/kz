<li class="dropdown navbar-user">
    <div class="btn-group pull-right">
        <button type="button" class="btn btn-success btn-xs">{{ $current_business->name }}</button>
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
</li>
