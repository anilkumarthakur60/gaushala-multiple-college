@extends('layouts.frontend-layout')

@section('content')

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
    <div class="container">
        <div class="my-5">
            <div class="my-5">
                <h5 class="font-weight-bold my-4">
                    Embark on an Educational Journey with Us
                </h5>
                <p class="text-justify">
                    At SKPS, we believe that learning extends beyond the classroom, and one of the exciting
                    ways we make this possible is through our educational tours. These tours are designed to provide
                    students with real-world experiences that complement their academic curriculum.
                </p>
                <p class="text-justify">
                    Our educational tours are carefully curated to be both enriching and enjoyable. They take students
                    to a variety of destinations, from historical sites and museums to scientific institutions and
                    cultural landmarks. These trips offer students the opportunity to connect with their studies in a
                    tangible way, helping them to see the relevance and application of what they learn in class.
                </p>
                <p class="text-justify">
                    During these tours, students not only gain knowledge but also develop essential life skills such as
                    problem-solving, teamwork, and cultural sensitivity. They have the chance to interact with experts
                    in various fields, ask questions, and explore their interests beyond the confines of textbooks.

                </p>
                <p class="text-justify">

                    Safety and supervision are our top priorities, and our experienced staff ensure that every student
                    is well-cared for throughout the trip. We also encourage open discussions and reflections on the
                    experiences, allowing students to process what they've learned and how it applies to their education
                    and personal growth.

                </p>
                <p class="text-justify">


                    Our educational tours are more than just excursions; they are opportunities for students to broaden
                    their horizons, gain a deeper understanding of the world around them, and foster a lifelong love for
                    learning. We look forward to embarking on these enlightening journeys with our students, as we
                    believe that every destination is a new chapter in their educational adventure."

                </p>
            </div>

        </div>
    </div>

@endsection
