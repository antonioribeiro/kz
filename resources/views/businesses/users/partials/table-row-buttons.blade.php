<a href="{{ route('businesses.users.edit', ['id' => $row['id']]) }}"
   class="btn btn-primary btn-xs"
   title="Editar"
>
    <i class="fa fa-edit"></i>
</a>

<a href="{{ route('businesses.users.delete', ['id' => $row['id']]) }}"
   class="btn btn-danger btn-xs"
   title="Apagar"
>
    <i class="fa fa-trash"></i>
</a>
