<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}"><i class="bi bi-house-door-fill"></i></a>


        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('products.*') ? 'active' : '' }}"
                        href="{{ route('products.index') }}">Product</a>
                </li>
            </ul>

            @guest
            <a href="{{ route('login') }}">Log in</a> ||
            <a href="{{ route('register') }}"> Register</a>
            @endguest

            @auth
            <span class="text-white">{{ Auth::user()->name }}</span>
            
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button>Log out</button>
            </form>
            @endauth


        </div>
    </div>
</nav>