@extends('frontend.layouts.app')
@section('title')
    D-mart : : Cart
@endsection
@section('main')
<div class="min-h-screen bg-transparent px-[2rem] xs:px-[5rem] sm:px-[8rem] xl:px-[16.5rem] py-[7rem] !bg-fixed !bg-no-repeat !bg-center !bg-cover" style="background-image: url('/images/frontend/default-bg.png')">
    <div class="bg-white max-2xs:px-[1rem] px-[3rem] xs:pl-[3rem] sm:pl-[5.5rem] xs:pr-[3rem] sm:pr-[4.5rem] py-[2rem] space-y-[2.6rem] shadow-[0px_0px_20px_5px_rgba(0,0,0,0.35)_inset]">
        <h1 class="max-2xs:text-[.9rem] text-[1.1rem] sm:text-[1.5rem] lg:text-[2rem] font-bold">Shopping Cart</h1>
        <div class="space-y-[1.55rem]" id="cartItemList">
            <hr class="h-[1rem]">
            @if(Cart::count()>0)
                <div class="space-y-[1.54rem]">
                    <div class="space-y-[.2rem]">
                        @php
                            $shipping = 30;
                            $shipping =  number_format($shipping, 2); 
                            $taxrate = 0.01;
                        @endphp
                        <div class="space-y-[1.55rem]">
                            @foreach(Cart::content() as $cart)
                                <div class="space-y-[2.5rem]">
                                    <div class="grid grid-cols-1 lg:grid-cols-5 2xl:grid-cols-6 gap-[2rem] lg:gap-[5rem]">
                                        <div class="bg-[#f7f7f7] h-[5rem] xs:h-[7rem] sm:h-[8rem] w-[5rem] xs:w-[7rem] sm:w-[8rem] rounded-[.5rem] col-span-1 min-md:mx-auto p-2">
                                            <img src="/images/backend/products/{{$cart->options->images}}"class="h-full rounded-[.5rem] w-fit mx-auto">
                                        </div>
                                        <div class="flex flex-col justify-between lg:col-span-4 2xl:col-span-5">
                                            <div class="grid max-md:grid-cols-1 grid-cols-3 max-md:space-y-[.4rem] justify-between w-full">
                                                <h1 class="text-[.7rem] xs:text-[.9rem] font-semibold text-[#374151]">{{ $cart->name }}</h1>
                                                <div class="flex flex-col space-y-[.7rem] md:mx-auto">
                                                    <form action="{{ route('cart.update', $cart->rowId) }}" method="post" class="cart-update-form">
                                                        @csrf
                                                        <select name="quantity" class="text-[#374151] text-[.7rem] xs:text-[.9rem] font-semibold border-[#d1d5db] rounded-[.4rem] py-[.15rem] xs:py-[.25rem] shadow-sm px-[.55rem] xs:pl-[.75rem] xs:pr-[1.75rem] mr-[.25rem] w-fit cart-quantity-select" onchange="quantity_change(this)">
                                                            @for($i=1; $i<=$cart->options->stock; $i++)
                                                                <option value="{{ $i }}" {{ ($cart->qty == $i) ? 'selected' : '' }}>{{ $i }}</option>
                                                            @endfor
                                                        </select>
                                                    </form>
                                                    
                                                    <a href="{{ route('cart.delete', $cart->rowId) }}" class="text-[.7rem] xs:text-[.9rem] font-semibold text-[#F28C28] hover:text-[#c2660c]  max-lg:hidden">Remove</a>
                                                </div>
                                                <span class="text-[.7rem] xs:text-[.9rem] font-semibold text-[#374151] md:ml-auto">Rs. {{ $cart->price * $cart->qty }}/-</span>
                                            </div>
                                            <span class="text-[.7rem] xs:text-[.9rem] text-black font-medium">Avialable</span>
                                            <a href="{{ route('cart.delete', $cart->rowId) }}" class="text-[.7rem] xs:text-[.9rem] font-semibold text-[#F28C28] hover:text-[#c2660c] lg:hidden">Remove</a>
                                        </div>
                                    </div>
                                    <hr class="h-[1rem]">
                                </div>
                            @endforeach
                        </div>
                        <div class="flex">

                            <a href="{{ route('cart.delete.all') }}" class="ml-auto text-center text-white bg-[#F28C28] font-semibold hover:bg-[#c2660c] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-[.7rem] xs:text-[.95rem] px-5 py-2.5 h-[2.03rem] xs:h-[2.5rem] md:h-[2.7rem] dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Remove all</a>
                        </div>
                    </div>
                    <div class="lg:pl-[9.5rem] space-y-[2.5rem]">
                        <div class="bg-[#f9fafb] max-2xs:px-[.5rem] 2xs:px-[1rem] sm:px-[2rem] py-[1.9rem] rounded-[.5rem] space-y-[.9rem]">
                            <div class="flex justify-between">
                                <h1 class="text-[.7rem] 2xs:text-[.65rem] xs:text-[.8rem] sm:text-[.95rem] text-[#4b5563]">Subtotal</h1>
                                <span class="text-[.7rem] 2xs:text-[.65rem] xs:text-[.8rem] sm:text-[.95rem] text-[#111827] font-semibold">Rs. {{Cart::subtotal()}}/-</span>
                            </div>
                            <hr class="h-[1px]">
                            <div class="flex justify-between">
                                <h1 class="text-[.7rem] 2xs:text-[.65rem] xs:text-[.8rem] sm:text-[.95rem] text-[#4b5563]">Shipping</h1>
                                <span class="text-[.7rem] 2xs:text-[.65rem] xs:text-[.8rem] sm:text-[.95rem] text-[#111827] font-semibold">Rs. {{$shipping}}/-</span>
                            </div>
                            <hr class="h-[1px]">
                            <div class="flex justify-between">
                                <h1 class="text-[.7rem] 2xs:text-[.65rem] xs:text-[.8rem] sm:text-[.95rem] text-[#4b5563]">Tax</h1>
                                @php
                                    $taxAmount = $taxrate * Cart::subtotal(); 
                                     $taxAmount =  number_format($taxAmount, 2);
                                @endphp
                                <span class="text-[.7rem] 2xs:text-[.65rem] xs:text-[.8rem] sm:text-[.95rem] text-[#111827] font-semibold">Rs. {{$taxAmount}}/-</span>
                            </div>
                            <hr class="h-[1px]">
                            <div class="flex justify-between">
                                <h1 class="max-2xs:text-[.8rem] max-xs:text-[.85rem] xs:text-[.9rem] sm:text-[1rem] md:text-[1.2rem] text-[#111827] font-semibold">Total</h1>
                                <span class="max-2xs:text-[.8rem] max-xs:text-[.85rem] xs:text-[.9rem] sm:text-[1rem] md:text-[1.2rem] text-[#111827] font-semibold">Rs.
                                @php
                                    $total = $taxAmount + $shipping + Cart::subtotal();
                                    $total = number_format($total, 2);
                                @endphp
                                    {{ $total }}/-
                                </span>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-[.3rem]">
                            <a href="{{ route('order.checkout') }}" class="text-center text-white bg-[#F28C28] font-semibold hover:bg-[#c2660c] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-[.7rem] xs:text-[.95rem] px-5 py-2.5 h-[2.03rem] xs:h-[2.5rem] md:h-[2.7rem] mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Place Order</a>
                            <p class="text-center text-[#4b5563]">or</p>
                            <a href="{{ route('home') }}" class="text-[#F28C28] hover:text-[#c2660c] max-2xs:text-[.8rem] max-xs:text-[.85rem] xs:text-[.9rem] font-medium text-center w-full">Continue Order</a>
                        </div>
                    </div>
                </div>
            @else
                <h1 class="max-2xs:text-[.8rem] text-[.9rem] xs:text-[1.2rem] font-semibold text-[#374151] pb-4">No items in cart.</h1>
                <a href="{{ route('home') }}" class="text-center text-white bg-[#F28C28] font-semibold hover:bg-[#c2660c] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-[.7rem] xs:text-[.95rem] px-5 py-2.5 h-[2.03rem] xs:h-[2.5rem] md:h-[2.7rem] mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Continue Order</a>
            @endif
        </div>
    </div>
</div>

<script>
    // $(document).ready(function() {
        function quantity_change(selectElement){
            var form = $(selectElement).closest('.cart-update-form');
            var formData = form.serialize(); // Serialize form data

            $.ajax({
                url: form.attr('action'),
                type: 'POST',
                data: formData,
                success: function(response) {
                    if (response.success) {
                        $('#cartItemList').html(response.view);
                        $('#header-cart').html(response.view2);
                    }
                    ajax_response(response);
                },
            });
            event.preventDefault();
        }
    // });
</script>
@endsection