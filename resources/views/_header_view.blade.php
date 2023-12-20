<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="/" class="navbar-brand">
                <strong>E-Learning</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @auth
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ auth()->user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('history') }}">History</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('signout') }}">Sign out</a>
                            </div>
                        </li>
                    </ul>
                @else
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="{{ route('signin') }}" class="btn btn-outline-light">Sign in</a>
                        </li>
                    </ul>
                @endauth
            </div>
        </div>
    </nav>
</header>
