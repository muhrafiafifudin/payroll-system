<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="index.html" class="logo">
            <span>
                <img src="{{ asset('assets/images/rri-logo.png') }}" alt="" height="80">
            </span>
        </a>
    </div>

    <nav class="navbar-custom">

        <ul class="navbar-right d-flex list-inline float-right mb-0">
            <li class="dropdown notification-list d-none d-sm-block">
                <form role="search" class="app-search">
                    <div class="form-group mb-0">
                        <input type="text" class="form-control" placeholder="Search..">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </li>

            <li class="dropdown notification-list">
                <div class="dropdown notification-list nav-pro-img">
                    <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('assets/images/users/user-4.jpg') }}" alt="user" class="rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button class="dropdown-item text-danger" type="submit"><i class="mdi mdi-power text-danger"></i>Logout</button>
                        </form>
                    </div>
                </div>
            </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>
        </ul>

    </nav>

</div>
