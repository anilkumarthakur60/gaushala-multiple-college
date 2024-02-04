@extends('layouts.frontend-layout')
@section('content')
    <x-bread-crumb-component title1="{{ $t1 = 'Notice' }}" title2="{{ $t1 }}" />

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row pb-3">
                        @forelse ($blogs as $blog)
                            <div class="col-lg-4 mb-4">
                                <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                    <img class="img-fluid" src="{{ asset($blog->firstMedia('blogImage')->getUrl()) }}"
                                        alt="">
                                    <a class="blog-overlay text-decoration-none"
                                        href="{{ route('frontend.blogs.detail', $blog->slug) }}">
                                        <h5 class="text-white mb-3">{{ $blog->name }}</h5>
                                        <p class="text-primary m-0">
                                            {{ $blog->created_at?->format('M d, Y') }}
                                        </p>
                                    </a>
                                </div>
                            </div>

                        @empty
                            <div class="col-lg-12">
                                <div class="alert alert-danger">
                                    No Notice Found
                                </div>
                            </div>
                        @endforelse

                    </div>
                </div>


                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="mb-5">
                        <form action="{{ route('frontend.blogs') }}" id="form-id" method="get">
                            <div class="input-group">
                                <input type="text" value="{{ request()->query('query') }}" name="query"
                                    class="form-control form-control-lg" placeholder="Keyword">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-transparent text-primary" id="your-id"><i
                                            class="fa fa-search"></i></span>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="mb-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recent Notice</h3>
                        @foreach ($recentBlogs as $r)
                            <a class="d-flex align-items-center text-decoration-none mb-3"
                                href="{{ route('frontend.blogs.detail', $r->slug) }}">
                                <img class="img-fluid rounded" src="{{ asset('frontend/img/blog-80x80.jpg') }}"
                                    alt="">
                                <div class="pl-3">
                                    <h6 class="m-1">{{ $r->name }}</h6>
                                    <small>
                                        {{ $r->created_at?->format('M d, Y') }}
                                    </small>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="mb-5">

                        <div class="mb-5">
                            <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Tag</h3>
                            <div class="d-flex flex-wrap m-n1">
                                @foreach ($tags as $tag)
                                    <a href="{{ route('frontend.blogs') . '?tag=' . $tag }}"
                                        class="btn m-1 {{ request()->query('tag') === $tag ? 'btn-primary' : 'btn-outline-primary' }}">{{ $tag }}</a>
                                @endforeach

                            </div>
                            <a href="{{ route('frontend.blogs') }}" class="btn m-1 btn-outline-success">Clear</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var form = document.getElementById("form-id");

        document.getElementById("your-id").addEventListener("click", function() {
            form.submit();
        });
    </script>
@endsection
