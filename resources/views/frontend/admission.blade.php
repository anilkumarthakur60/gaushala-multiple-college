@extends('layouts.frontend-layout')

@section('content')

    <x-bread-crumb-component title1="{{$t1='Admission'}}" title2="{{$t1}}"/>

    <div class="container-fluid">
        <div class="container">

            <div class="my-3">

                Admission is largely based on merits, a proven academic success, the potential contributions a student
                can
                bring to the community, and an enthusiasm for learning. We enroll students every year to fulfil the
                vacant
                seats available on merit base. Admission shall not be denied because of nationality, ethnicity, gender,
                or
                religious beliefs.
            </div>

            <div class="mt-5">
                <h5 class="my-3">
                    Applicant must submit the following documents along with the completed application form.
                </h5>

                <ul class="mt-4">
                    <li class="my-2">
                        Letter of reference from the current school
                    </li>
                    <li class="my-2">
                        An official birth certificate
                    </li>
                    <li class="my-2">
                        Mark sheet and transfer certificate
                    </li>
                    <li class="my-2">
                        Payment of the registration
                    </li>
                </ul>


            </div>


            <div class="mt-5 mb-3">
                <h5 class="mb-5">
                    Exam Policy and Monitoring
                </h5>
                <p class="text-justify mt-3">

                    We integrate both the traditional formal exam system with modern thematic evaluation procedure
                    through assessing
                    individual performances. A series of class evaluations, observation of behavioral changes,
                    performances in
                    thematic assignments will be recorded and made available in the individual roster both manual and
                    electronic
                    forms for the parents. Every progress will be updated and parents can access to it in the school
                    website through
                    the Unique ID number provided at the time of admission. The report cards of the students’ progress
                    will be sent
                    after each formal exam. The result of the final exam conducted at the end of the academic session
                    and the
                    internal evaluations made throughout the year determine the upgrading of the child.
                </p>
            </div>


        </div>
    </div>

@endsection
