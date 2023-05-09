<nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
    <div class="container text-center">
        <a class="navbar-brand text-white mr-auto" href="#">Laliga Official</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mx-auto mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('teams.*') ? 'active' : '' }}"
                        href="{{ route('teams.index') }}">Teams</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('scores.*') ? 'active' : '' }}"
                        href="{{ route('scores.index') }}">Pertandingan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('monitorings.*') ? 'active' : '' }}"
                        href="{{ route('monitorings.index') }}">Monitoring</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Services</a>
                </li>
            </ul>
            <h6 class="text-white m-0">👨🏻‍💻 Administrator</h6>
        </div>
    </div>
</nav>
