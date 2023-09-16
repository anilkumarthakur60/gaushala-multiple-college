@extends('layouts.frontend-layout')

@section('content')

    <x-bread-crumb-component title1="{{$t1='Facilities'}}" title2="{{$t1}}" />

    <div class="container">
        <div class="my-5">
            <div class="my-5">
                <h5>
                    Library
                </h5>
                <p class="text-justify">
                    Many children in schools in Nepal struggle with learning to read. As many teachers and parents will
                    attest, reading failure has exacted tremendous long-term consequences for children's developing
                    self-confidence and motivation to learn, as well as for their later school performance. Kavya has a
                    well furnished library and mini class-room libraries in each class to help the children read to
                    prevent
                    the predictable consequences of early reading failure. We put reading first.
                </p>
            </div>
            <div class="my-5">
                <h5>
                    Canteen
                </h5>
                <p class="text-justify">
                    Kavya has spacious dining hall. We provide hygienic Lunch and Tiffin for all our students. We
                    discourage our students from carrying any junk food. We also provide breakfast for students from I -
                    IV.
                </p>
            </div>
            <div class="my-5">
                <h5>
                    ARTS - Explore and Express
                </h5>
                <p class="text-justify">
                    Kavya offers an extensive arts program with courses in visual arts, choral and instrumental music,
                    dance and drama.

                </p>
            </div>

        </div>
    </div>

@endsection
