<!-- Footer Start -->
<div class="container-fluid bg-dark text-white px-sm-3 px-lg-5">
    <div class="row pt-5">
        <div class="col-lg-7 col-md-12">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Get In Touch</h5>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Gaushala -2,Mahottari</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>9808711001</p>
                    <p><i class="fa fa-envelope mr-2"></i>info@gaushalamultiplecampus.edu.np/</p>
                </div>
                <div class="col-md-6 mb-5">
                    <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Quick Link</h5>
                    <div class="d-flex flex-column justify-content-start">

                        <a href="{{ route('frontend.about') }}" class="text-white mb-2"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                        <a href="{{ route('frontend.blogs') }}" class="text-white mb-2"><i class="fa fa-angle-right mr-2"></i>Notice</a>
                        <a href="{{ route('frontend.calendar') }}" class="text-white mb-2"><i class="fa fa-angle-right mr-2"></i>Calender</a>
                        <a href="{{ route('frontend.faq') }}" class="text-white mb-2"><i class="fa fa-angle-right mr-2"></i>FAQ</a>
                        <a href="{{ route('frontend.admission') }}" class="text-white mb-2"><i class="fa fa-angle-right mr-2"></i>Admission</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 mb-5">
            <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Newsletter</h5>
            <p>Get the latest updates on school events, academic achievements, exciting activities, and important
                announcements delivered right to your inbox.</p>
            <div class="w-100">
                <form action="{{route('frontend.news-letters')}}" method="POST">
                    @csrf
                    @error('email')
                    {{ $message }}
                    @enderror
                    <div class="input-group">

                        <input type="email" name="email" class="form-control border-light" style="padding: 30px;"
                               placeholder="Your Email Address">

                        <div class="input-group-append">
                            <button class="btn btn-primary px-4" type="submit">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
     style="border-color: rgba(256, 256, 256, .1) !important;">
    <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
            <p class="m-0 text-white">&copy; <a href="{{route('frontend.index')}}">SKPS</a>  All Rights Reserved.
            </p>
        </div>
        <div class="col-lg-6 text-center text-md-right">
            <ul class="nav d-inline-flex">
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="{{route('frontend.privacy-policy')}}">Privacy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0 mr-4" href="{{route('frontend.terms-and-condition')}}">Terms  and Condition</a>
                </li>

            </ul>
        </div>
    </div>
</div>
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
