<div class="space-y-[1.5rem]">
    @if(empty($orderDetails))
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
                    </tr>
                </thead>
                <tbody id="product_data">
                    @php $c=1; @endphp
                    @foreach($orderDetails as $orderDetail)
                    <tr class="border-b">
                        <td class="py-[.5rem] pr-[2rem]">{{$c}}</td>
                        <td class="py-[.5rem] pr-[2rem] capitalize"><a href="{{route('merchant.order.detail',$orderDetail['order']->order_tracking_id)}}">{{$orderDetail['order']->user->name}}</a></td>
                        <td><a href="{{route('merchant.order.detail',$orderDetail['order']->order_tracking_id)}}">{{$orderDetail['order']->order_tracking_id}}</a></td>
                        <td><a href="{{route('merchant.order.detail',$orderDetail['order']->order_tracking_id)}}" class="capitalize">{{$orderDetail['order']->delivery_status}}</a></td>
                        <td>{{$orderDetail['order']->payment}}</td>
                        <td>Rs. {{$orderDetail['total']}}/-</td>
                    </tr>
                    @php $c++ @endphp
                    @endforeach
                </tbody>
            </table>
            <div class="pb-[1.5rem]"></div>
        </div>
    @endif
</div>