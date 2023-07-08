<nav class="navbar navbar-expand-lg  sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">Cs_Outlet88</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="promo">PROMO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">SHOP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="about">ABOUT</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item pe-3 d-flex">
                    <div class="input-group">
                        <input type="text" class="form-control rounded-5" placeholder="Search ..." aria-label="Recipient's username" aria-describedby="button-addon2">
                    </div>
                    <button class="btn btn-outline-secondary rounded-circle" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
                </li>
                <li class="nav-item pe-4">
                    <a href="#" class="btn" role="button" data-bs-toggle="button"><i class="bi bi-cart2"></i></a>
                </li>
                <li>
                    @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </li>
                {{-- <li class="nav-item pe-4">
                    <button type="button" class="btn btn-outline-secondary">LOGIN</button>
                </li>
                <li class="nav-item pe-4">
                    <button type="button" class="btn btn-outline-secondary">SIGN UP</button>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
