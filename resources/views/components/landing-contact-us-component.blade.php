<div class="container-fluid bg-registration  ">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Enroll in This </h5>
                    <h1 class="text-white">We Always Welcome for New Student!</h1>
                </div>
                <p class="text-white">At GMC, we offer a wide range of enriching courses . Whether you're looking to
                    enhance your skills, dive into a new subject, or simply
                    pursue a passion, we've got you covered!r</p>
                <ul class="list-inline text-white m-0">
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>
                        Unleash Your Creativity through Art and Design
                    </li>
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>
                        Master Critical Thinking and Problem-Solving
                    </li>
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>
                        Delve into the Fascinating World of History
                    </li>
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>
                        Excel in Mathematics and Logical Reasoning
                    </li>
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>
                        Embark on a Journey of Personal Growth and Mindfulness
                    </li>
                </ul>
            </div>
            <div class="col-lg-5">
                <div class="card border-0">
                    <div class="card-header bg-light text-center p-4">
                        <h1 class="m-0">Enquiry you thought</h1>
                    </div>
                    <div class="card-body rounded-bottom bg-primary p-5">
                        <form action="{{ route('frontend.contact-us.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control border-0 p-4"
                                    placeholder="Your name" required="required" value="{{ old('name') }}" />
                                @error('name')
                                    <span class="text-white">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" value="{{ old('email') }}"
                                    class="form-control border-0 p-4" placeholder="Your email" required="required" />
                                @error('email')
                                    <span class="text-white">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="" class="text-white">Message</label>
                                <textarea name="message" class="form-control">
                                        {!! old('message') !!}
                                    </textarea>
                                @error('message')
                                    <span class="text-white">
                                        {{ $message }}
                                    </span>
                                @enderror

                            </div>


                            <div>
                                <button class="btn btn-dark btn-block border-0 py-3" type="submit">Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
