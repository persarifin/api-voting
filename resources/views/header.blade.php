<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
            <form class="form-header" action="" method="POST">
                    </button>
                </form>
                <div class="header-button">
                    <div class="noti-wrap ">
                        <!-- <div class="noti__item js-item-menu ">
                            <i class="zmdi zmdi-notifications"></i>
                            <span class="quantity">3</span>
                            <div class="notifi-dropdown js-dropdown">
                                <div class="notifi__title">
                                    <p>You have 3 Notifications</p>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a email notification</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c2 img-cir img-40">
                                        <i class="zmdi zmdi-account-box"></i>
                                    </div>
                                    <div class="content">
                                        <p>Your account has been blocked</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c3 img-cir img-40">
                                        <i class="zmdi zmdi-file-text"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a new file</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__footer">
                                    <a href="#">All notifications</a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu ">
                            <div class="image">
                                        @if (File::exists(public_path("assets/foto/". Auth::user()->foto)))
                                            <img src="{{ asset('foto/' . $Auth::user()->foto) }}"  />
                                        @else 
                                            <img src="{{ asset('images/icon/avatar-02.jpg') }}"  />
                                        @endif
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">{{ Auth::user()->nama }}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                        @if (File::exists(public_path("assets/foto/". Auth::user()->foto)))
                                            <img src="{{ asset('foto/' . $Auth::user()->foto) }}"  />
                                        @else 
                                            <img src="{{ asset('images/icon/avatar-02.jpg') }}"  />
                                        @endif
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">{{ Auth::user()->nama }}</a>
                                        </h5>
                                        <span class="email">{{ Auth::user()->email }}</span>
                                    </div>
                                </div>
                                <!-- <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="{{ route('admin.edit', Auth::user()->id) }}">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                </div> -->
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="zmdi zmdi-power"></i>{{ __('Logout') }}</a>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
