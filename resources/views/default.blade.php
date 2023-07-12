<div class="container mt-4">
    <h4>{{ $pageTitle }}</h4>
    <hr>
    <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3
    border">
        <div class="bi-house-fill me-3 fs-1"></div>
        <blockquote class="blockquote text-center">
            <p class="mb-0">Selamat datang di halaman <strong>{{ $pageTitle }}</strong></p>
            <br>
            <footer class="blockquote-footer">User <cite title="Source Title"><strong>{{ Auth::user()->name }}<strong></cite></footer>
        </blockquote>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
</div>
