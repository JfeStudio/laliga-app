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
                    <a class="nav-link text-white active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('teams.index') }}">Teams</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('scores.index') }}">Pertandingan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('monitorings.index') }}">Monitoring</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Services</a>
                </li>
            </ul>
            <form action="" method="post">
                <button type="submit" class="btn btn-outline-light">Login</button>
            </form>
        </div>
    </div>
</nav>
