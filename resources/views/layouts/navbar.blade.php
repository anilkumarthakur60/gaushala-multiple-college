<div class="container-fluid d-none d-lg-block">
    <div class="row align-items-center py-4 px-xl-5">
        <div class="col-lg-3">
            <a href="{{ route('frontend.index') }}" class="text-decoration-none">
                <h1 class="m-0"><span class="text-primary">S</span>KPS</h1>
            </a>
        </div>
        <div class="col-lg-3 text-right">
            <div class="d-inline-flex align-items-center">
                <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                <div class="text-left">
                    <h6 class="font-weight-semi-bold mb-1">Location</h6>
                    <small>Sunkoshi Rural Muncipality-7 Sindhupalchowk</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 text-right">
            <div class="d-inline-flex align-items-center">
                <i class="fa fa-2x fa-envelope text-primary mr-3"></i>
                <div class="text-left">
                    <h6 class="font-weight-semi-bold mb-1">Email Us</h6>
                    <small>info@skps.com.np</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 text-right">
            <div class="d-inline-flex align-items-center">
                <i class="fa fa-2x fa-phone text-primary mr-3"></i>
                <div class="text-left">
                    <h6 class="font-weight-semi-bold mb-1">Call Us</h6>
                    <small>9808711001</small>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row border-top px-xl-5">
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0"><span class="text-primary">E</span>COURSES</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav py-0">
                        <a href="{{ route('frontend.index') }}"
                            class="nav-item nav-link {{ request()->routeIs('frontend.index') ? 'active' : '' }}">
                            Home
                        </a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                                About Us
                            </a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{ route('frontend.about') }}" class="dropdown-item">
                                    About School
                                </a>
                                <a href="{{ route('frontend.principal-message') }}" class="dropdown-item">
                                    Principal Message
                                </a>
                                <a href="{{ route('frontend.teachers') }}" class="dropdown-item">
                                    Out Team
                                </a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                                Curriculum
                            </a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{ route('frontend.admission') }}" class="dropdown-item">
                                    Admission
                                </a>
                                <a href="{{ route('frontend.technology') }}" class="dropdown-item">
                                    Technology
                                </a>
                                <a href="{{ route('frontend.facilities') }}" class="dropdown-item">
                                    Facilities
                                </a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                                Activities
                            </a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{ route('frontend.community-service') }}" class="dropdown-item">
                                    Community Services
                                </a>
                                <a href="{{ route('frontend.educational-tour') }}" class="dropdown-item">
                                    Education Tour
                                </a>
                                <a href="{{ route('frontend.scout') }}" class="dropdown-item">
                                    Scout
                                </a>
                                <a href="{{ route('frontend.project-based-learning') }}" class="dropdown-item">
                                    Project Based Learning
                                </a>
                                <a href="{{ route('frontend.prize-distribution') }}" class="dropdown-item">
                                    Prize Distribution
                                </a>
                            </div>
                        </div>

                        <a href="{{ route('frontend.blogs') }}"
                            class="nav-item nav-link {{ request()->routeIs('frontend.blogs') ? 'active' : '' }}">
                            Notice
                        </a>
                        <a href="{{ route('frontend.contact-us') }}"
                            class="nav-item nav-link {{ request()->routeIs('frontend.contact-us') ? 'active' : '' }}">
                            Contact
                        </a>


                        @if (auth()->user()?->type === true)
                            <a href="{{ route('dashboard') }}" class="nav-item nav-link">Dashboard</a>
                        @endif

                    </div>
                    <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block"
                        href="{{ route('frontend.contact-us') }}">Get In Touch</a>
                </div>
            </nav>
        </div>
    </div>
</div>
