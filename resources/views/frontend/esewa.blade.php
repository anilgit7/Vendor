@extends('frontend.layouts.app')
@section('title')
    Esewa payment
@endsection
@section('main')
    @if(Route::currentRouteName() == 'esewa.view')
        @include('frontend.esewa.view');
    @endif
@endsection