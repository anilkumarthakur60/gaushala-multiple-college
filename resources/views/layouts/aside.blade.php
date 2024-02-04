<aside class="sidebar sidebar-default navs-rounded-all">
    <div class="sidebar-header d-flex align-items-center justify-content-start ">
        <a href="{{ route('frontend.index') }}" class="navbar-brand" target="_blank">


            <h5 class="logo-title font-bold pt-1 ms-1">GMC School</h5>
        </a>
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <x-dashboard-icons.toggle />
        </div>
    </div>
    <div class="sidebar-body pt-0 data-scrollbar">
        <div class="sidebar-list">
            <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                        href="{{ route('dashboard') }}">
                        <x-dashboard-icons.dashboard />
                        <span class="item-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('*blogs*') ? 'active' : '' }}"
                        href="{{ route('blogs.index') }}">
                        <x-dashboard-icons.slider />
                        <span>Notice</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('*contact-us*') ? 'active' : '' }}"
                        href="{{ route('contact-us.index') }}">
                        <x-dashboard-icons.slider />
                        <span>Contact Us</span>
                    </a>
                </li>
                {{--                <li class="nav-item"> --}}
                {{--                    <a class="nav-link {{ request()->routeIs('*courses*') ? 'active' : '' }}" --}}
                {{--                       href="{{route('courses.index')}}"> --}}
                {{--                        <x-dashboard-icons.slider/> --}}
                {{--                        <span>Courses</span> --}}
                {{--                    </a> --}}
                {{--                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('*teachers*') ? 'active' : '' }}"
                        href="{{ route('teachers.index') }}">
                        <x-dashboard-icons.slider />
                        <span>Teachers</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('*sliders*') ? 'active' : '' }}"
                        href="{{ route('sliders.index') }}">
                        <x-dashboard-icons.slider />
                        <span>Sliders</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('*news-letters*') ? 'active' : '' }}"
                        href="{{ route('news-letters.index') }}">
                        <x-dashboard-icons.slider />
                        <span>News Letter</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
