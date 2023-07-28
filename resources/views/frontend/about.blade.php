@extends('layouts.frontend-layout')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">About</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{route('frontend.index')}}">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">About</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row align-items-center">
                <div class="col-lg-12 mb-4">
                    <div class="text-left mb-4">
                        <h1>Welcome to SKPS: Inspiring Excellence</h1>
                    </div>
                    <p>
                        At SKPS, we are devoted to creating an environment where students are valued, respected, and encouraged to unleash their full potential. Our passionate educators guide students on an enriching educational journey, fostering a love for learning that extends beyond textbooks. We believe in a holistic approach, nurturing not only young minds but also compassionate and responsible individuals. Join SKPS, where dreams take flight and futures are shaped with care.
                    </p>
                </div>
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="{{asset('frontend/img/about.jpg')}}" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h1>A Holistic Approach: Nurturing Minds, Hearts, and Souls</h1>
                    </div>
                    <p>
                        We understand that education extends beyond academics. At SKPS, we embrace a holistic approach to foster well-rounded individuals. Our nurturing environment ensures that students grow not just academically but also emotionally and socially. We offer a diverse range of extracurricular activities, sports, and cultural programs, encouraging students to discover their passions and develop their personalities. Our strong parent-teacher partnership ensures open communication, enabling us to work together in the best interest of each child's growth and development. Together, let's shape a future where knowledge, creativity, and empathy combine to create exceptional leaders and lifelong learners. Join us at SKPS, and experience a transformative educational journey in our vibrant learning community.
                    </p>
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h1>Academic Excellence for a Changing World</h1>
                    </div>
                    <p>
                        We believe in preparing our students to excel in a rapidly evolving world. Our rigorous academic programs are designed to challenge and engage young minds, equipping them with the knowledge, skills, and critical thinking abilities they need to thrive. In state-of-the-art facilities and modern classrooms, students benefit from innovative teaching methods and access to cutting-edge technology. This creates a dynamic learning environment where students can confidently tackle real-world challenges.
                    </p>
                </div>
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="{{asset('frontend/img/about.jpg')}}" alt="">
                </div>
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="{{asset('frontend/img/about.jpg')}}" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h1>Parent-Teacher Partnership</h1>
                    </div>
                    <p>
                        We strongly believe that a successful educational journey requires collaboration between parents, teachers, and students. Our close-knit school community encourages open communication and active involvement from parents. Through this partnership, we ensure that each child receives personalized support and guidance, creating a conducive environment for growth and learning. Join us at SKPS, where academic excellence and nurturing care converge to provide a transformative educational experience. Together, let's prepare your child for a future of endless possibilities and empower them to become confident, compassionate, and successful individuals. We look forward to welcoming you to our vibrant learning community!
                    </p>
                </div>

            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Join Us Now</h5>
                        <h1 class="text-white">Our Salient Features</h1>
                    </div>
                    <p class="text-white">Experience excellence at SKPS: Extensive courses, innovative teaching, nurturing environment. Join us now!</p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Extensive Course Offerings</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Innovative Teaching Methods</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Nurturing Environment</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Parent-Teacher Partnership</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Engaging and Enriching Curriculum</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-light text-center p-4">
                            <h1 class="m-0">Sign Up Now</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Your name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Your email" required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>Select a course</option>
                                        <option value="1">Course 1</option>
                                        <option value="2">Course 1</option>
                                        <option value="3">Course 1</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-dark btn-block border-0 py-3" type="submit">Sign Up Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Testimonial</h5>
                <h1>What Our Students Say</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">Life-changing experience! Engaging teachers, supportive environment. SKPS empowered me to chase my dreams!</h4>
                            <img class="img-fluid mx-auto mb-3" src="{{asset('frontend/img/testimonial-1.jpg')}}" alt="">
                            <h5 class="m-0">Kavya Adhikari</h5>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">Unforgettable journey! Challenging curriculum, lifelong friends. SKPS shaped my future!</h4>
                            <img class="img-fluid mx-auto mb-3" src="{{asset('frontend/img/testimonial-1.jpg')}}" alt="">
                            <h5 class="m-0">Aryan Shrestha</h5>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">Best decision ever! Dedicated teachers, boosted confidence. Grateful for SKPS!</h4>
                            <img class="img-fluid mx-auto mb-3" src="{{asset('frontend/img/testimonial-1.jpg')}}" alt="">
                            <h5 class="m-0">Anika Gurung</h5>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">Inspiring and valued! Personalized attention, aim higher. Excited for the future!</h4>
                            <img class="img-fluid mx-auto mb-3" src="{{asset('frontend/img/testimonial-1.jpg')}}" alt="">
                            <h5 class="m-0">Nirav Thapa</h5>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">Transformative education! Innovative learning, lifelong impact. SKPS exceeded my expectations!</h4>
                            <img class="img-fluid mx-auto mb-3" src="{{asset('frontend/img/testimonial-1.jpg')}}" alt="">
                            <h5 class="m-0">Rohan Bhattarai</h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
