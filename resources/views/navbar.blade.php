<nav class="navbar navbar-expand-sm navbar-dark bg-info">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home <span
                    class="sr-only">(current)</span></a>
            <a class="nav-item nav-link {{ Request::is('posts') ? 'active' : '' }}" href="/posts">Blog</a>
            <a class="nav-item nav-link {{ Request::is('categories') ? 'active' : '' }}"
                href="/categories">Categories</a>
            <a class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
        </div>

        <div class="navbar-nav ml-auto">
            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-expanded="false">
                        Wellcome back, {{ auth()->user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/dashboard"><i class="bi bi-grid-3x2-gap-fill"></i> My Dashboard</a>
                        <div class="dropdown-divider"></div>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item "><i class="bi bi-box-arrow-right"></i> Logout</button>
                        </form>
                    </div>
                </li>
            @else
                <li class="nav-item" id="btn-login">
                    <a href="/login" class="nav-link active"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
            @endauth
        </div>
    </div>
</nav>
