@extends('frontend.layouts.app')
@section('title')
    Product - Shopping with variety of products
@endsection
@section('main')
    @if(\Route::current()->getName() === 'product.list')
        @include('frontend.product.product_list')
    @endif
@endsection