<form action="{{ route('logout') }}" method="POST" style="display:inline-block; margin:0;">
    @csrf
    <button type="submit" class="btn btn-outline-light d-flex align-items-center bg-danger btn-logout" aria-label="Logout">
        <i class="bi bi-person-plus me-1"></i> Logout
    </button>
</form>
