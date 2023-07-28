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
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Seats</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                            </div>
                            <a class="h5" href="">Web Design Fundamentals</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="{{asset('frontend/img/course-2.jpg')}}" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>30 Seats</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>02h 15m</small>
                            </div>
                            <a class="h5" href="">Responsive Web Development</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="{{asset('frontend/img/course-3.jpg')}}" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>20 Seats</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 45m</small>
                            </div>
                            <a class="h5" href="">Introduction to JavaScript</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="{{asset('frontend/img/course-4.jpg')}}" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>40 Seats</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>02h 30m</small>
                            </div>
                            <a class="h5" href="">Python Programming Basics</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="{{asset('frontend/img/course-5.jpg')}}" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>15 Seats</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 15m</small>
                            </div>
                            <a class="h5" href="">Introduction to UI/UX Design</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="{{asset('frontend/img/course-6.jpg')}}" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>28 Seats</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>02h 00m</small>
                            </div>
                            <a class="h5" href="">Machine Learning Fundamentals</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="{{asset('frontend/img/course-1.jpg')}}" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>18 Seats</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 45m</small>
                            </div>
                            <a class="h5" href="">Digital Marketing Strategies</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="{{asset('frontend/img/course-6.jpg')}}" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>22 Seats</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>02h 15m</small>
                            </div>
                            <a class="h5" href="">Photography Basics and Techniques</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="{{asset('frontend/img/course-5.jpg')}}" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>35 Seats</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>02h 30m</small>
                            </div>
                            <a class="h5" href="">Mobile App Development with React Native</a>

                        </div>
                    </div>
                </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2">
                            <img class="img-fluid" src="{{asset('frontend/img/course-2.jpg')}}" alt="">
                            <div class="bg-secondary p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>28 Seats</small>
                                    <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>02h 00m</small>
                                </div>
                                <a class="h5" href="">Introduction to Data Science</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2">
                            <img class="img-fluid" src="{{asset('frontend/img/course-1.jpg')}}" alt="">
                            <div class="bg-secondary p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>15 Seats</small>
                                    <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                                </div>
                                <a class="h5" href="">Creative Writing Workshop</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2">
                            <img class="img-fluid" src="{{asset('frontend/img/course-2.jpg')}}" alt="">
                            <div class="bg-secondary p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>20 Seats</small>
                                    <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>02h 15m</small>
                                </div>
                                <a class="h5" href="">Financial Planning and Investment</a>

                            </div>
                        </div>
                    </div>

            </div>


        </div>
    </div>
    <!-- Courses End -->

@endsection
