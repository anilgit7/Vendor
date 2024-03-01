<div class="space-y-[1.5rem]">
    @if(empty($order->orderItems))
        <h1 class="text-red-700 font-bold text-[1rem] 2xs:text-[1.2rem]">Detials not found.</h1>
    @else
    <div class="flex flex-col space-y-[1rem] pb-[2rem]">
        <div class="flex flex-row justify-between w-full">
            <div class="flex flex-col">
                <div class="bg-[#e9eaeb] py-2 px-4">
                    <h1 class="font-bold text-[#111827] drop-shadow-[0px_0px_.5px_#000000]">Customer Details</h1>
                </div>
                <div class="bg-[#f9fafb] flex flex-col py-2 px-4">
                    <span class="capitalize font-bold text-[#111827]">Name :- <span class="font-normal text-[#4b5563]">{{$order->user->name}}</span></span>
                    <span class="font-bold text-[#111827]">Email :- <span class="font-normal text-[#4b5563]">{{$order->user->email}}</span></span> 
                </div>
            </div>
            <div class="flex flex-col">
                <div class="bg-[#e9eaeb] py-2 px-4">
                    <h1 class="font-bold text-[#111827] drop-shadow-[0px_0px_.5px_#000000]">Billing Address</h1>
                </div>
                <div class="bg-[#f9fafb] flex flex-col py-2 px-4">
                    <span class="capitalize font-bold text-[#111827]">Name :- <span class="font-normal text-[#4b5563]">{{$order->billing_name}}</span></span>
                    <span class="font-bold text-[#111827]">Adddress :- <span class="font-normal text-[#4b5563]">{{$order->billing_address}}</span></span>
                    <span class="font-bold text-[#111827]">Email :- <span class="font-normal text-[#4b5563]">{{$order->billing_email}}</span></span>
                    <span class="font-bold text-[#111827]">Payment :- <span class="font-normal text-[#4b5563]">{{$order->payment}}</span></span>
                </div>
            </div>
            <div class="flex flex-col space-y-[1rem]">
                <div class="flex flex-col">
                    <div class="bg-[#e9eaeb] py-2 px-4">
                        <h1 class="font-bold text-[#111827] drop-shadow-[0px_0px_.5px_#000000]">Order Details</h1>
                    </div>
                    <div class="bg-[#f9fafb] flex flex-col py-2 px-4">
                        <span class="font-bold text-[#111827]">Order Tracking Id :- <span class="font-normal text-[#4b5563]">{{$order->order_tracking_id}}</span></span>
                        <span class="font-bold text-[#111827]">Order date :- <span class="font-normal text-[#4b5563]">{{$order->created_at->format('Y-m-d')}}</span></span>
                    </div>
                </div>
                <div>
                    <div class="bg-[#e9eaeb] py-2 px-4">
                        <h1 class="font-bold text-[#111827] drop-shadow-[0px_0px_.5px_#000000]">Order Status</h1>
                    </div>
                    <div class="bg-[#f9fafb] flex flex-col py-2 px-4">
                        <form action="{{route('merchant.order.status',$order->id)}}" method="POST">
                            @csrf
                            <select name="delivery" id="delivery" class="bg-[#f9fafb] border-none">
                                <option value="picked" {{($order->delivery_status == 'picked')? 'selected':''}}>Picked</option>
                                <option value="pending" {{($order->delivery_status == 'pending')? 'selected':''}}>Pending</option>
                            </select>
                            <button type="submit" class="bg-[#e9eaeb] p-2 hover:bg-[#d9dadb] hover:text-white">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <hr>
        <div class="space-y-[1.54rem]">
            <div class="space-y-[.2rem]">
                <div class="space-y-[1.55rem]">
                    @foreach($orderItems as $orderItem)
                        <div class="space-y-[2.5rem]">
                            <div class="grid grid-cols-1 lg:grid-cols-5 2xl:grid-cols-6 gap-[2rem] lg:gap-[5rem]">
                                <div class="bg-[#f7f7f7] h-[5rem] xs:h-[7rem] sm:h-[8rem] w-[5rem] xs:w-[7rem] sm:w-[8rem] rounded-[.5rem] col-span-1 min-md:mx-auto p-2">
                                    <img src="/images/backend/products/{{$orderItem->product->images}}"class="h-full rounded-[.5rem] w-fit mx-auto">
                                </div>
                                <div class="flex flex-col justify-between lg:col-span-4 2xl:col-span-5">
                                    <div class="grid max-md:grid-cols-1 grid-cols-4 max-md:space-y-[.4rem] justify-between w-full">
                                        <h1 class="text-[.7rem] xs:text-[.9rem] font-semibold text-[#374151]">{{$orderItem->product->product_name}}</h1>
                                        <h1 class="text-[.7rem] xs:text-[.9rem] font-semibold text-[#374151]">{{$orderItem->quantity}}</h1>
                                        <span class="text-[.7rem] xs:text-[.9rem] font-semibold text-[#374151] md:ml-auto">Rs. {{$orderItem->product->price}}/-</span>
                                        <span class="text-[.7rem] xs:text-[.9rem] font-semibold text-[#374151] md:ml-auto">Rs. {{$orderItem->quantity *$orderItem->product->price}}/-</span>
                                    </div>
                                </div>
                            </div>
                            <hr class="h-[1rem]">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="lg:pl-[9.5rem] space-y-[2.5rem]">
                <div class="bg-[#f9fafb] max-2xs:px-[.5rem] 2xs:px-[1rem] sm:px-[2rem] py-[1.9rem] rounded-[.5rem] space-y-[.9rem]">
                    <div class="flex justify-between">
                        <h1 class="text-[.7rem] 2xs:text-[.65rem] xs:text-[.8rem] sm:text-[.95rem] text-[#4b5563]">Subtotal</h1>
                        <span class="text-[.7rem] 2xs:text-[.65rem] xs:text-[.8rem] sm:text-[.95rem] text-[#111827] font-semibold">Rs. {{$subtotals}}/-</span>
                    </div>
                    <hr class="h-[1px]">
                    <div class="flex justify-between">
                        <h1 class="text-[.7rem] 2xs:text-[.65rem] xs:text-[.8rem] sm:text-[.95rem] text-[#4b5563]">Tax</h1>
                        <span class="text-[.7rem] 2xs:text-[.65rem] xs:text-[.8rem] sm:text-[.95rem] text-[#111827] font-semibold">Rs. {{$taxamount}}/-</span>
                    </div>
                    <hr class="h-[1px]">
                    <div class="flex justify-between">
                        <h1 class="max-2xs:text-[.8rem] max-xs:text-[.85rem] xs:text-[.9rem] sm:text-[1rem] md:text-[1.2rem] text-[#111827] font-semibold">Total</h1>
                        <span class="max-2xs:text-[.8rem] max-xs:text-[.85rem] xs:text-[.9rem] sm:text-[1rem] md:text-[1.2rem] text-[#111827] font-semibold">Rs.
                        {{$total}}/-
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>