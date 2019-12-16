<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route(trans('pages/sections/left-bar.home.route')) }}" aria-expanded="false"><i class="mdi mdi-{{ trans('pages/sections/left-bar.home.icon') }}"></i><span class="hide-menu">{{ trans('pages/sections/left-bar.home.text') }}</span></a></li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route(trans('pages/sections/left-bar.user.route')) }}" aria-expanded="false">
                        <i class="mdi mdi-{{ trans('pages/sections/left-bar.user.icon') }}"></i><span class="hide-menu">{{ trans('pages/sections/left-bar.user.text') }}</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route(trans('pages/sections/left-bar.category.route')) }}" aria-expanded="false">
                        <i class="mdi mdi-{{ trans('pages/sections/left-bar.category.icon') }}"></i><span class="hide-menu">{{ trans('pages/sections/left-bar.category.text') }}</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
