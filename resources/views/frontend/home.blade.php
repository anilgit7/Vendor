@extends('frontend.layouts.app')

@section('main')
    @include('frontend.home.landing')
    @include('frontend.home.category')
    @if(Auth::check())
        @include('frontend.home.dashboard')
    @endif
@endsection
