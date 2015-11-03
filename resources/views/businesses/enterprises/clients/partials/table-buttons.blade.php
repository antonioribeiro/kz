@can('create', $current_user)
    <a href="{{ route('businesses.clients.create', ['businessId' => $business->id]) }}" class="btn btn-primary btn-xs">
        <i class="fa fa-plus"></i> Novo cliente
    </a>
@endcan
