<form method="POST" action="{{ route('logout') }}" class="d-inline">
    @csrf
    <button type="submit" {{ $attributes }}>
        {{ $slot }}
    </button>
</form>
