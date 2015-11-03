<a href="{{ route('businesses.clients.edit', ['business_id' => $business->id, 'id' => $row['id']]) }}"
   class="btn btn-primary btn-xs"
   title="Editar"
>
    <i class="fa fa-edit"></i>
</a>

<a href="#"
   class="btn btn-danger btn-xs"
   title="Apagar"
   data-toggle="modal"
   data-target="#delete-client-modal"
   @click="__setCurrentId('clientId', '{{ $row['id'] }}') || __setCurrentId('businessId', '{{ $business->id }}')"
>
    <i class="fa fa-trash"></i>
</a>
