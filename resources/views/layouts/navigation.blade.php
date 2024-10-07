<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon small"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            @if (Route::has('login'))
                @auth
                    @if(Request::is('dashboard'))
                    <a class="btn btn-outline-info" type="submit" href="{{ url('/') }}">
                        Home Screen
                    </a>
                    @else
                    <a class="btn btn-outline-info" type="submit" href="{{ url('dashboard') }}">
                        Dashboard
                    </a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-warning ms-3">Logout</button>
                    </form>
                @else
                    <a class="btn btn-outline-info" type="submit" href="{{ url('/') }}">
                        Home Screen
                    </a>
                    <a class="ms-3 btn btn-outline-info" type="submit" href="{{ route('login') }}">
                        Log in
                    </a>
                @endauth
            @endif
        </div>
    </div>
</nav>
