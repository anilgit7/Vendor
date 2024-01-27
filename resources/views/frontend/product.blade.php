@extends('frontend.layouts.app')
@section('title')
    Product - Shopping with variety of products
@endsection
@section('main')
    @if(\Route::current()->getName() === 'product.list')
        @include('frontend.product.product_list')
    @elseif (\Route::current()->getName() == 'result.page')
        @include('frontend.product.result')
    @elseif(\Route::current()->getName() === 'product.detail')
        @include('frontend.product.product_detail')
    @elseif (\Route::current()->getName() == 'product.cartlist')
        @include('frontend.product.cartlist')
    @elseif (\Route::current()->getName() == 'payment.response')
        @include('frontend.product.response')
    @endif
@endsection