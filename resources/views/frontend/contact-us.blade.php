@extends('layouts.frontend-layout')

@section('content')
    <x-bread-crumb-component title1="{{$t1='Contact Us'}}" title2="{{$t1}}" />

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Contact</h5>
                <h1>Contact For Any Query</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form name="sentMessage"  novalidate="novalidate" action="{{route('frontend.contact-us.store')}}" method="POST">
                            @csrf
                            <div class="control-group">
                                <input name="name" type="text" value="{{old('name')}}" class="form-control border-0 p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger">
                                    @error('name')
                                        {{$message}}
                                    @enderror
                                </p>
                            </div>
                            <div class="control-group">
                                <input type="email" name="email" value="{{old('email')}}" class="form-control border-0 p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger">
                                    @error('email')
                                        {{$message}}
                                    @enderror
                                </p>
                            </div>
                            <div class="control-group">
                                <input type="text" name="subject" value="{{old('subject')}}" class="form-control border-0 p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger">
                                    @error('subject')
                                        {{$message}}
                                    @enderror
                                </p>
                            </div>
                            <div class="control-group">
                                <textarea name="message"  class="form-control border-0 py-3 px-4" rows="5" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message">
                                    {{old('message')}}
                                </textarea>
                                <p class="help-block text-danger">
                                    @error('message')
                                        {{$message}}
                                    @enderror
                                </p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
