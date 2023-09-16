@extends('layouts.frontend-layout')
@section('content')


    <x-bread-crumb-component title1="{{$t1=$blog->name}}" title2="{{'notice-detail / '.$t1}}" />

    <div class="container-fluid">
        <div class="container">
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
