@extends('frontend.layouts.app')

@section('main')
    @include('frontend.home.landing')
    @if(Auth::check())
        @include('frontend.home.dashboard')
    @endif
@endsection
