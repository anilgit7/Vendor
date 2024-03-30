@extends('frontend.layouts.app')
@section('title')
    D-mart : : Checkout
@endsection
@section('main')
@if(Cart::count()>0)
    <div class="flex flex-col lg:flex-row px-[1rem] 2xs:px-[1.5rem] sm:px-[3rem] lg:px-[5.9rem]">
        <div class="lg:min-h-screen w-full lg:mr-2 bg-transparent pt-[1rem] pb-[2rem] lg:px-[2rem] !bg-fixed !bg-no-repeat !bg-center !bg-cover">
            <div class="bg-white max-2xs:px-[1rem] p-[1rem] space-y-[1.6rem] shadow-[0px_0px_20px_5px_rgba(0,0,0,0.35)_inset]">
                <h1 class="anime max-2xs:text-[.9rem] text-[1.1rem] sm:text-[1.5rem] lg:text-[2rem] font-bold">Checkout</h1>
                <form class="anime" action="{{route('order')}}" method="POST">
                @csrf
                    @php
                        $shipping = 30;
                        $taxrate = 0.01;
                        $taxAmount = $taxrate * Cart::subtotal();
                        $total = $taxAmount + $shipping + Cart::subtotal();
                        $total = number_format($total, 2);
                    @endphp
                    <input type="hidden" name="total" value="{{$total}}">
                    <input type="hidden" value="{{$shipping}}" name="shipping">
                    <input type="hidden" name="tax" value="{{$taxAmount}}">
                    <div class="mb-4 space-y-[1rem]">
                        <div class="grid grid-cols-1 gap-[2rem] sm:gap-0 sm:grid-cols-1">
                            <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                <div class="relative z-0">
                                    <input type="text" id="name" class="block form-one capitalize px-2 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" placeholder="" name="name" minlength="2" maxlength="50" value="{{ $user ? $user->name : '' }}" required />
                                    <label for="name" class="absolute text-sm text-gray-500 font-semibold duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">Full Name</label>
                                </div>
                            </h3>
                        </div>
                        <div class=" sm:gap-0 sm:grid-cols-2">
                            <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                <div class="relative z-0">
                                    <input type="hidden" name="latitude" id="latitude" value="{{ $user ? $user->latitude : '' }}">
                                    <input type="hidden" id="longitude" name="longitude" value="{{ $user ? $user->longitude : '' }}">
                                    <input type="text" id="address" class="block form-one capitalize px-2 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" placeholder="" value="" name="address" minlength="2" maxlength="250" value="{{ $user ? $user->address : '' }}" required onclick="mapShow()"/>
                                    <label for="address" class="absolute text-sm text-gray-500 font-semibold duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">Address(Click to change)</label>
                                </div>
                            </h3>
                        </div>
                        <div class=" sm:gap-0 sm:grid-cols-2">
                            <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                <div class="relative z-0">
                                    <input type="email" id="email" class="block form-one px-2 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" placeholder="" name="email" minlength="2" maxlength="50" value="{{ $user ? $user->email : '' }}" required />
                                    <label for="email" class="absolute text-sm text-gray-500 font-semibold duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">Email</label>
                                </div>
                            </h3>
                        </div>
                        <div class=" sm:gap-0 sm:grid-cols-2">
                            <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                <div class="relative z-0">
                                    <select name="payment" class="block form-one capitalize px-2 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" id="payment">
                                        <option value="esewa">Esewa</option>
                                        <option value="cash" selected>Cash on delivery</option>
                                    </select>
                                    <label for="payment" class="absolute text-sm text-gray-500 font-semibold duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">Payment Method</label>
                                </div>
                            </h3>
                        </div>
                    </div>
                    <button type="submit" class="flex items-center mx-auto text-center text-white bg-[#F28C28] font-semibold hover:bg-[#c2660c] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-[.7rem] xs:text-[.95rem] px-5 py-2.5 h-[2.03rem] xs:h-[2.5rem] focus:outline-none">Checkout</button>
                </form>
            </div>
        </div>
        <div class="h-max bg-transparent lg:min-w-[24rem] lg:ml-auto max-lg:pt-0 py-[1rem] !bg-fixed !bg-no-repeat !bg-center !bg-cover">
            <div class="bg-transparent p-[1rem]">
                <h1 class="anime max-2xs:text-[.9rem] text-[1.1rem] sm:text-[1.5rem] lg:text-[2rem] font-bold">Order</h1>
                <div class="space-y-[1rem]" id="cartItemList">
                    <hr class="h-[1rem]">
                    <div class="space-y-[.54rem]">
                        <div class="space-y-[.2rem]">
                            @php
                                $shipping = 30;
                                $shipping =  number_format($shipping, 2); 
                                $taxrate = 0.01;
                            @endphp
                            <div class="space-y-[.55rem] h-[20rem] lg:h-[10rem] overflow-y-scroll scrollbar-hide">
                                @foreach(Cart::content() as $cart)
                                    <div class="anime space-y-[1rem] group">
                                        <div class="grid grid-cols-3 gap-[2rem] lg:gap-[1rem]">
                                            <div class="bg-[#f7f7f7] h-[2rem] h-[5rem] w-[2rem] w-[5rem] min-md:mx-auto p-2">
                                                <img src="/images/backend/products/{{$cart->options->images}}"class="h-full rounded-[.5rem] w-fit mx-auto">
                                            </div>
                                            <div class="flex flex-col justify-between">
                                                <!-- <div class="grid max-md:grid-cols-1 grid-cols-3 max-md:space-y-[.4rem] justify-between w-full"> -->
                                                    <h1 class="text-[.7rem] xs:text-[.9rem] font-semibold text-[#374151]">{{ $cart->name }}</h1>
                                                    <span class="text-[.7rem] 2xs:text-[.65rem] xs:text-[.8rem] sm:text-[.95rem] text-[#111827] font-semibold">Qty :- {{$cart->qty}}</span>
                                            </div>
                                            <div class="flex flex-col justify-between ml-auto">
                                                        
                                                <span class="text-[.7rem] xs:text-[.9rem] font-semibold text-[#374151] md:ml-auto">Rs. {{ $cart->price * $cart->qty }}/-</span>
                                                <a href="{{ route('cart.delete', $cart->rowId) }}" class="font-semibold text-[#F28C28] hover:text-white ml-auto px-1 py-1 bg-[#F28C28] rounded-[50%] text-black hidden group-hover:block">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-3 w-3">
                                                        <path fill="currentColor" d="M19.78 18.36a1 1 0 0 1-.12 1.4 1 1 0 0 1-1.4-.12L12 13.4l-6.27 6.27a1 1 0 1 1-1.4-1.42L10.6 12 4.33 5.73a1 1 0 1 1 1.4-1.42L12 10.6l6.27-6.27a1 1 0 0 1 1.4 1.42L13.4 12l6.37 6.36z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        @if(!($loop->last))
                                            <hr class="h-[1rem]">
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <hr class="anime h-[1rem]">
                        <div class="anime space-y-[2.5rem]">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="p-[2rem]">
        <h1>No records found</h1>
    </div>
@endif
@include('frontend.product.map')
@endsection