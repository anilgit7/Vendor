@extends('frontend.layouts.app')
@section('title')
    Welcome to D-mart
@endsection
@section('main')
    @include('frontend.home.landing')
    @include('frontend.home.category')
    @include('frontend.home.for_you')
    @include('frontend.home.best')
@endsection
