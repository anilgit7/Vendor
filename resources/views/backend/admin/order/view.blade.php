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
                    </tr>
                </thead>
                <tbody id="product_data">
                    @php $c=1; @endphp
                    @foreach($orders as $order)
                    <tr class="border-b">
                        <td class="py-[.5rem] pr-[2rem]">{{$c}}</td>
                        <td class="py-[.5rem] pr-[2rem] capitalize"><a href="{{route('admin.order.detail',$order->order_tracking_id)}}">{{$order->user->name}}</a></td>
                        <td><a href="{{route('admin.order.detail',$order->order_tracking_id)}}">{{$order->order_tracking_id}}</a></td>
                        <td><a href="{{route('admin.order.detail',$order->order_tracking_id)}}" class="capitalize">{{$order->delivery_status}}</a></td>
                        <td class="capitalize">{{$order->payment}}</td>
                        <td>Rs. {{$order->total}}/-</td>
                    </tr>
                    @php $c++ @endphp
                    @endforeach
                </tbody>
            </table>
            <div class="pb-[1.5rem]"></div>
        </div>
    @endif
</div>