<p>Total items: {{ $data->total() }}</p>

<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        {{ $data->links('pagination::bootstrap-4') }}
    </ul>
</nav>