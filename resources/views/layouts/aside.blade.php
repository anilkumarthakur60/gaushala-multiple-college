<aside class="sidebar sidebar-default navs-rounded-all">
    <div class="sidebar-header d-flex align-items-center justify-content-start ">
        <a href="{{route('frontend.home')}}" class="navbar-brand" target="_blank">

            <img src="{{asset('back/assets/images/brand-logo.png')}}"
                 width="31"
                 alt="skill-training Nepal"
                 title="skill-training Nepal"/>
            <h5 class="logo-title font-bold pt-1 ms-1">Skill Training Nepal</h5>
        </a>
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <x-dashboard-icons.toggle/>
        </div>
    </div>
    <div class="sidebar-body pt-0 data-scrollbar">
        <div class="sidebar-list">
            <!-- Sidebar Menu Start -->
            <ul class="navbar-nav iq-main-menu" id="sidebar-menu">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                       href="{{route('dashboard')}}">
                        <x-dashboard-icons.dashboard/>
                        <span class="item-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('*slider*') ? 'active' : '' }}"
                       href="{{route('sliders.index')}}">
                        <x-dashboard-icons.slider/>
                        <span>Slider</span>
                    </a>
                </li>
        </div>
    </div>
</aside>
