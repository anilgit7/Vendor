<div class="bg-[#f3f4f6] w-full px-[2rem] overflow-scroll">
    <div class="py-[2rem] space-y-[1rem]">
        <div class="space-y-[1.5rem]">
            @if(empty($orders))
                <h1 class="text-red-700 font-bold text-[1rem] 2xs:text-[1.2rem]">No orders has been placed.</h1>
            @else
                <div class="overflow-scroll scrollbar-hide">
                    <table class="w-full gap-[2rem] space-x-[2rem] rounded-md" id="product_table" style="text-wrap: nowrap;">
                        <thead>
                            <tr class="border-b">
                                <th class="text-start pr-[2rem] pb-[.5rem]">S.N</th>
                                <th class="text-start pr-[2rem] pb-[.5rem]">Customer</th>
                                <th class="text-start pr-[2rem] pb-[.5rem]">Order Tracking Id</th>
                                <th class="text-start pr-[2rem] pb-[.5rem]">Shipped</th>
                                <th class="text-start pr-[2rem] pb-[.5rem]">Payment</th>
                                <th class="text-start pr-[2rem] pb-[.5rem]">Total</th>
                                <th class="text-start pr-[2rem] pb-[.5rem]">Action</th>
                            </tr>
                        </thead>
                        <tbody id="product_data">
                            @php $c=1; @endphp
                            @foreach($orders as $order)
                            <tr class="border-b">
                                <td class="py-[.5rem] pr-[2rem]">{{$c}}</td>
                                <td class="py-[.5rem] pr-[2rem] capitalize">{{$order->user->name}}</td>
                                <td>{{$order->order_tracking_id}}</td>
                                <td class="capitalize">{{$order->delivery_status}}</td>
                                <td class="capitalize">{{$order->payment}}</td>
                                <td>Rs. {{$order->total}}/-</td>
                                <td class="py-[1rem]"><a href="{{route('user.order.detail',$order->order_tracking_id)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View</a></td>
                            </tr>
                            @php $c++ @endphp
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pb-[1.5rem]"></div>
                </div>
            @endif
        </div>

    </div>
</div>