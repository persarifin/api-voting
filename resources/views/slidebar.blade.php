<aside class="menu-sidebar d-none d-lg-block">
    <div class="account-wrap">
        <div class="account-item clearfix js-item-menu">
            <div class="logo">
                <div class="user-panel image">
                    <a href="">
                        <img src="{{ asset('images/voting.png') }}"  class="rounded-circle" alt="User Image" />
                    </a>
                </div>
                <div class="js-acc-btn">
                    <a href="{{url('/')}}">
                    <span><h3 class="title">&ensp;Voting</h3></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="{{ Request::path() == '/' ? 'active' : ''}}">
                    <a  href="{{ url('/') }}">
                    <i class="fas fa-home"></i>Home</a>
                </li>
                <li class="has-sub {{ Request::path() == 'siswa'|| Request::path() == 'jurusan' ? 'active' : '' }}">
                    <a class="js-arrow" href="#">
                        <i class="fa fa-map"></i>Master
                        <span class="arrow pull-right">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ url('siswa') }}">
                            <i class="fas fa-graduation-cap"></i>Siswa</a>
                        </li>
                        <li>
                            <a href="{{ url('jurusan') }}">
                            <i class="fa fa-building"></i>&ensp;Jurusan</a>
                        </li>
                        
                    </ul>
                <li class="{{ Request::path() == 'calon' ? 'active' : ''}}">
                    <a href="{{ url('calon') }}">
                    <i class="fa fa-users" aria-hidden="true"></i>Calon</a>
                </li>
                <li class="{{ Request::path() == 'vote' ? 'active' : ''}}">
                    <a href="{{ url('vote') }}">
                    <i class="fa fa-bar-chart-o"></i> Progres Voting</a>
                </li>
                </li>
            </ul>
		</nav>
	</div>
</aside>
