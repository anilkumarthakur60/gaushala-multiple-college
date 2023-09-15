@extends('layouts.frontend-layout')
@section('content')

    <div class="container">
        <div class="row justify-content-center mt-5">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Email address</label>
                    <input type="email" name="email" id="form2Example1" class="form-control"/>
                    @error('email')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Password</label>
                    <input type="password" name="password" id="form2Example2" class="form-control"/>
                    @error('password')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="" value="" id="form2Example31" checked/>
                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
            </form>
        </div>
    </div>

@endsection
