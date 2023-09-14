@extends('layouts.frontend-layout')

@section('content')

    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Technology</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{route('frontend.index')}}">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Technology</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="">
            <h5 class="font-weight-bold my-3 ">
                To enrich our approach to e-learning, we have implemented smart boards as an integral part of our
                classroom teaching and learning resources.
            </h5>
            <p class="text-justify my-4">
                In our commitment to equipping students with modern technology, we have seamlessly integrated
                Information and Communication Technology (ICT) into our educational framework. Our students have regular
                access to the internet, computer labs, science labs, language labs, and mathematics labs, all tailored
                to the specific requirements of their courses and grade levels.
            </p>
            <p class="text-justify my-4">
                Furthermore, our students actively engage in collaborative projects through platforms such as ENO
                (Environment Online) and iEARN (International Education and Resource Network). These virtual schools
                connect our students with peers from diverse educational backgrounds worldwide. This collaborative
                approach empowers both teachers and students to utilize the internet and other technological tools to
                work together on projects that not only enhance their learning experiences but also contribute
                positively to the global community.
            </p>
            <p class="text-justify my-4">
                In our ongoing efforts to enhance e-learning, we have introduced smart boards as an integral teaching
                and learning tool within our classrooms, further embracing the potential of Information Technology in
                education.
            </p>
        </div>

    </div>

@endsection
