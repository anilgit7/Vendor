@extends('frontend.layouts.app')
@section('title')
    User Profile
@endsection
@section('main')
    <div class="px-[1rem] 2xs:px-[1.5rem] sm:px-[3rem] lg:px-[5.9rem]">
        <div class="py-[2rem]">
            <div class="flex flex-col space-y-[2rem] lg:space-y-0 lg:flex-row py-[2rem] bg-white px-2">
                @include('frontend.profile.sidebar')
                @include('frontend.profile.mainbar')
            </div>
        </div>
    </div>
@endsection