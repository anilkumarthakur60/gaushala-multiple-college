@extends('layouts.frontend-layout')
@section('content')
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Notice Detail</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{route('frontend.index')}}">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">{{$blog->slug}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <h6 class="text-primary mb-3">
                            {{$blog->created_at?->format('D m, Y')}}
                        </h6>
                        <h1 class="mb-5">{{$blog->name}}</h1>
                        <img class="img-fluid rounded w-100 mb-4"
                             src="{{asset($blog->firstMedia('blogImage')?->getUrl()??'frontend/img/carousel-1.jpg')}}"
                             alt="Image">
                        <div class="" style="overflow-x: auto;">

                        <p class="lead mb-4"  >
                            {!! $blog->description !!}
                        </p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
@endsection
