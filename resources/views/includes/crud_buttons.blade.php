<!-- Show Button -->
<a href="{{ route('{{ route }}.show', {{ data }}) }}" class="btn btn-success btn-sm">
    <i class="bi bi-eye"></i> Show
</a>
<!-- Edit Button -->
<a href="{{ route('{{ route }}.edit', {{ data }}) }}" class="btn btn-primary btn-sm">
    <i class="bi bi-pencil"></i> Edit
</a>
<!-- Delete Button -->
<form action="{{ route('{{ route }}.destroy', {{ data }}) }}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this?')">
        <i class="bi bi-trash"></i> Delete
    </button>
</form>