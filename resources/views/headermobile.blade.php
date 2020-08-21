<div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a href="{{url('/')}}">
                            <span><h3 class="title">&ensp;Voting</h3></span>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="{{ Request::path() == '/' ? 'active' : ''}}">
                    <a  href="{{ url('/') }}">
                    <i class="fas fa-home"></i>Home</a>
                </li>
                <li class="{{ Request::path() == 'admin' ? 'active' : ''}}">
                    <a href="{{ url('admin') }}">
                    <i class="fa fa-gears"></i>Admin</a>
                </li>
                <li class="has-sub {{ Request::path() == 'mahasiswa' || Request::path() === 'calon' ? 'active' : ''}}">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i> Master
                        <span class="arrow pull-right">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ url('mahasiswa') }}">
                            <i class="fas fa-graduation-cap"></i> Mahasiswa</a>
                        </li>
                        <li>
                            <a href="{{ url('calon') }}">
                            <i class="fas fa-users"></i> Calon</a>
                        </li>
                    </ul>
                <li class="{{ Request::path() == 'vote' ? 'active' : ''}}">
                    <a href="{{ url('vote') }}">
                    <i class="fa fa-bar-chart-o"></i>Vote</a>
                </li>
                </li>
            </ul>
		</nav>
        </header>