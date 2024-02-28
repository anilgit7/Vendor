@extends('frontend.layouts.app')

@section('main')
    <h1>Shopping Cart</h1>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
                @foreach($cartItems as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->qty }}</td>
                    <td>{{ $item->subtotal }}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection