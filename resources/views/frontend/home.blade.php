@extends('frontend.layouts.app')

@section('main')
    @include('frontend.home.landing')
    @include('frontend.home.category')
    @include('frontend.home.best')
    @include('frontend.home.for_you')
    @if(Auth::check())
        @include('frontend.home.dashboard')
    @endif
@endsection
