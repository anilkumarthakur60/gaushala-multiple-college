<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Teachers</h5>
            <h1>Meet Our Teachers</h1>
        </div>
        <div class="row">
            @foreach($teachers as $teacher)

                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src=" {{$teacher->firstMedia('teacherImage')->getUrl()}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fas fa-at"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>
                                {{$teacher->name}}
                            </h5>
                            <p class="m-0">
                                {!!$teacher->subject !!}
                            </p>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
</div>

