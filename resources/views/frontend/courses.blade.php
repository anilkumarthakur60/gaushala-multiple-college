@extends('layouts.frontend-layout')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Courses</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Courses</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Category Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Subjects</h5>
                <h1>Explore Top Subjects</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src=" {{asset('frontend/img/cat-1.jpg')}}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Web Design</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{asset('frontend/img/cat-2.jpg')}}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Development</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid"src=" {{asset('frontend/img/cat-3.jpg')}}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Quality Analyst</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src=" {{asset('frontend/img/cat-4.jpg')}}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Apps Design</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src=" {{asset('frontend/img/cat-5.jpg')}}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Marketing</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src=" {{asset('frontend/img/cat-6.jpg')}}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">UI/UX</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src=" {{asset('frontend/img/cat-7.jpg')}}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Content Writing</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src=" {{asset('frontend/img/cat-8.jpg')}}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">SEO</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category Start -->


    <!-- Courses Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Courses</h5>
                <h1>Our Popular Courses</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="{{asset('frontend/img/course-1.jpg')}}" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                            </div>
                            <a class="h5" href="">Web Design Fundamentals</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="{{asset('frontend/img/course-2.jpg')}}" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>30 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>02h 15m</small>
                            </div>
                            <a class="h5" href="">Responsive Web Development</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.8 <small>(350)</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="{{asset('frontend/img/course-3.jpg')}}" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>20 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 45m</small>
                            </div>
                            <a class="h5" href="">Introduction to JavaScript</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.6 <small>(200)</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="{{asset('frontend/img/course-4.jpg')}}" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>40 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>02h 30m</small>
                            </div>
                            <a class="h5" href="">Python Programming Basics</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.9 <small>(500)</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="{{asset('frontend/img/course-5.jpg')}}" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>15 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 15m</small>
                            </div>
                            <a class="h5" href="">Introduction to UI/UX Design</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.7 <small>(180)</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="{{asset('frontend/img/course-6.jpg')}}" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>28 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>02h 00m</small>
                            </div>
                            <a class="h5" href="">Machine Learning Fundamentals</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.6 <small>(230)</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="{{asset('frontend/img/course-1.jpg')}}" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>18 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 45m</small>
                            </div>
                            <a class="h5" href="">Digital Marketing Strategies</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.8 <small>(280)</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="{{asset('frontend/img/course-6.jpg')}}" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>22 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>02h 15m</small>
                            </div>
                            <a class="h5" href="">Photography Basics and Techniques</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.9 <small>(350)</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="{{asset('frontend/img/course-5.jpg')}}" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>35 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>02h 30m</small>
                            </div>
                            <a class="h5" href="">Mobile App Development with React Native</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.7 <small>(220)</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2">
                            <img class="img-fluid" src="{{asset('frontend/img/course-2.jpg')}}" alt="">
                            <div class="bg-secondary p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>28 Students</small>
                                    <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>02h 00m</small>
                                </div>
                                <a class="h5" href="">Introduction to Data Science</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.6 <small>(200)</small></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2">
                            <img class="img-fluid" src="{{asset('frontend/img/course-1.jpg')}}" alt="">
                            <div class="bg-secondary p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>15 Students</small>
                                    <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                                </div>
                                <a class="h5" href="">Creative Writing Workshop</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(120)</small></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2">
                            <img class="img-fluid" src="{{asset('frontend/img/course-2.jpg')}}" alt="">
                            <div class="bg-secondary p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>20 Students</small>
                                    <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>02h 15m</small>
                                </div>
                                <a class="h5" href="">Financial Planning and Investment</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.9 <small>(300)</small></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>


        </div>
    </div>
    <!-- Courses End -->

@endsection
