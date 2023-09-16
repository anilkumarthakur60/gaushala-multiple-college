@extends('layouts.frontend-layout')
@section('content')


    <x-bread-crumb-component title1="{{$t1='Teacher'}}" title2="{{$t1}}" />
    <x-landing-teacher-list-component/>

@endsection
