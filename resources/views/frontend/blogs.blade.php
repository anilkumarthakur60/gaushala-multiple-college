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
            <div class="col-lg-8">
                <div class="row pb-3">
                    @forelse ($blogs as $blog )
                    <div class="col-lg-4 mb-4">
                        <div class="blog-item position-relative overflow-hidden rounded mb-2">
                            <img class="img-fluid" src="{{asset($blog->firstMedia('blogImage')->getUrl())}}" alt="">
                            <a class="blog-overlay text-decoration-none"
                                href="{{route('frontend.blogs.detail',$blog->slug)}}">
                                <h5 class="text-white mb-3">{{$blog->name}}</h5>
                                <p class="text-primary m-0">
                                    {{$blog->created_at?->format('M d, Y')}}
                                </p>
                            </a>
                        </div>
                    </div> </a>
                </div>
            </div>

            @endforeach
            @empty

            <div class="col-lg-12">
                <div class="alert alert-danger">
                    No Blog Found
                </div>
            </div>
            @endforelse



        </div>
    </div>

    <div class="col-lg-3 mt-5 mt-lg-0">
        <!-- Recent Post -->

        <div class="mb-5">
            <form action="{{route('frontend.blogs')}}">
                <div class="input-group">
                    <input type="text" value="{{request()->query('query')}}" name="query"
                        class="form-control form-control-lg" placeholder="Keyword">
                    <div class="input-group-append">
                        <span class="input-group-text bg-transparent text-primary"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </form>
        </div>

        <div class="mb-5">
            <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recent Posts</h3>

        </div>
    </div>
</div>
</div>

<div class="col-lg-3 mt-5 mt-lg-0">
    <!-- Recent Post -->
    <div class="mb-5">
        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recent Posts</h3>

        @foreach($recentBlogs as $r)
        <a class="d-flex align-items-center text-decoration-none mb-3"
            href="{{route('frontend.blogs.detail',$r->slug)}}">
            <img class="img-fluid rounded" src="{{asset('frontend/img/blog-80x80.jpg')}}" alt="">
            <div class="pl-3">
                <h6 class="m-1">{{$r->name}}</h6>
                <small>
                    {{$r->created_at?->format('M d, Y')}}
                </small>
            </div>
        </a>
        @endforeach
    </div>
</div>
</div>
</div>
</div>
<!-- Blog End -->
@endsection