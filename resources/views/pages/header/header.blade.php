<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="#" class="logo d-flex align-items-center">
        <img src="{{ asset('pages/assets/img/logo.png') }}" alt="">
    </a>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto" href="#classroom">Classroom</a></li>
            <li><a class="nav-link scrollto" href="#team">Team</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <li>
                @guest
                <a class="getstarted scrollto" href="{{ route('login') }}">
                    <label style="cursor: pointer;">{{ 'Login' }}</label>
                </a>
                @else
                <a class="getstarted scrollto" href="{{ route('dashboard.index') }}">
                    <label style="cursor: pointer;">
                        {{Auth::user()->name}}
                    </label>
                </a>
                @endguest
            </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

</div>