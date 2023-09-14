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
    <div class="container-fluid py-5">
        <div class="container py-5">
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

    <x-landing-contact-us-component/>

@endsection
