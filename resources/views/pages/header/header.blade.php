<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="#" class="logo d-flex align-items-center">
        <img src="{{ asset('pages/assets/img/logo.png') }}" alt="">
    </a>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto" href="#teacher">Teacher</a></li>
            <li><a class="nav-link scrollto" href="#classroom">Classroom</a></li>
            <li><a class="nav-link scrollto" href="#team">Team</a></li>
            <li><a class="nav-link scrollto" href="#Event">Event</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <li><a class="getstarted scrollto" href="{{ route('/login') }}">
                    @if(empty(Auth::user()->name))
                    {{'login'}}
                    @else
                    {{Auth::user()->name}}
                    @endif</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

</div>