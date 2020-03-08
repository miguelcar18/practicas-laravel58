<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            <a class="navbar-brand" href="{{ URL::route('home') }}">
                <!-- Logo icon -->
                <b class="logo-icon p-l-10">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="{{ asset('assets/images/logo-icon.png') }}" alt="homepage" class="light-logo" />
                </b>
                <!--End Logo icon -->
                 <!-- Logo text -->
                <span class="logo-text">
                     <!-- dark Logo text -->
                     <h4 class="card-title m-t-10">{{ config('app.name', 'Eventos felice') }}</h4>
                </span>
                <!-- Logo icon -->
                <!-- <b class="logo-icon"> -->
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <!-- <img src="{{ asset('assets/images/logo-text.png') }}" alt="homepage" class="light-logo" /> -->
                <!-- </b> -->
                <!--End Logo icon -->
            </a>
            <!-- Toggle which is visible on mobile only -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <!-- toggle and nav items -->
            <ul class="navbar-nav float-left mr-auto">
                <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
            </ul>
            <!-- Right side toggle and nav items -->
            <ul class="navbar-nav float-right">
                <!-- User profile and search -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if( !auth()->user()->path )
                        <img src="{{ asset('assets/images/users/1.jpg') }}" alt="user" class="rounded-circle" width="31">
                        @else
                        <img src="{{ asset(auth()->user()->url_path) }}" alt="user" class="rounded-circle" width="31">
                        @endif

                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated">
                        <a class="dropdown-item" href="{{ route('user.my-profile') }}"><i class="ti-user m-r-5 m-l-5"></i> {{ trans('pages/sections/logged-in-user.my_profile') }}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off m-r-5 m-l-5"></i> {{ trans('pages/sections/logged-in-user.logout') }}</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
   @csrf
</form>
