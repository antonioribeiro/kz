<button type="submit" class="btn btn-sm btn-primary">{{ isset($submitButton) ? $submitButton : 'Gravar' }}</button>

<a href="{{ route($cancelRoute) }}" type="reset" class="btn btn-sm btn-warning">Cancelar</a>
