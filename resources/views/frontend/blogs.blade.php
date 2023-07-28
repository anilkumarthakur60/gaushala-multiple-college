@extends('layouts.frontend-layout')
@section('content')


    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Blogs</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{route('frontend.index')}}">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Blogs</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row pb-3">
                        <div class="col-lg-4 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{asset('frontend/img/blog-1.jpg')}}" alt="">
                                <a class="blog-overlay text-decoration-none" href="">
                                    <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut clita</h5>
                                    <p class="text-primary m-0">Jan 01, 2050</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{asset('frontend/img/blog-1.jpg')}}" alt="">
                                <a class="blog-overlay text-decoration-none" href="">
                                    <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut clita</h5>
                                    <p class="text-primary m-0">Jan 01, 2050</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{asset('frontend/img/blog-1.jpg')}}" alt="">
                                <a class="blog-overlay text-decoration-none" href="">
                                    <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut clita</h5>
                                    <p class="text-primary m-0">Jan 01, 2050</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{asset('frontend/img/blog-1.jpg')}}" alt="">
                                <a class="blog-overlay text-decoration-none" href="">
                                    <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut clita</h5>
                                    <p class="text-primary m-0">Jan 01, 2050</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{asset('frontend/img/blog-1.jpg')}}" alt="">
                                <a class="blog-overlay text-decoration-none" href="">
                                    <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut clita</h5>
                                    <p class="text-primary m-0">Jan 01, 2050</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="{{asset('frontend/img/blog-1.jpg')}}" alt="">
                                <a class="blog-overlay text-decoration-none" href="">
                                    <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut clita</h5>
                                    <p class="text-primary m-0">Jan 01, 2050</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
