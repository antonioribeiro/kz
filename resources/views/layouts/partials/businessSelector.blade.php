<li class="dropdown navbar-user">
    <div class="btn-group pull-right">
        <button type="button" class="btn btn-success btn-xs">{{ $current_business->name }}</button>
        <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
            @foreach($all_businesses as $business)
                @if ($business->id !== $current_business->id)
                    <li><a href="{{ route('businesses.enterprises.select', ['businessId' => $business->id]) }}">{{ $business->name }}</a></li>
                @endif
            @endforeach
        </ul>
    </div>
</li>
