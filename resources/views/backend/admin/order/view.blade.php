<div class="space-y-[1.5rem]">
    @if(empty($orders))
        <h1 class="text-red-700 font-bold text-[1rem] 2xs:text-[1.2rem]">No orders has been placed.</h1>
    @else
        <div class="overflow-scroll scrollbar-hide">
            <table class="w-full gap-[2rem] space-x-[2rem] rounded-md" id="order_table" style="text-wrap: nowrap;">
                <thead>
                    <tr class="border-b">
                        <th class="text-start pr-[2rem] pb-[.5rem]">S.N</th>
                        <th class="text-start pr-[2rem] pb-[.5rem]">Customer</th>
                        <th class="text-start pr-[2rem] pb-[.5rem]">Order Tracking Id</th>
                        <th class="text-start pr-[2rem] pb-[.5rem]">Shipped</th>
                        <th class="text-start pr-[2rem] pb-[.5rem]">Payment</th>
                        <th class="text-start pr-[2rem] pb-[.5rem]">Total</th>
                        <th class="text-start pr-[2rem] pb-[.5rem] flex place-content-end">Action</th>
                    </tr>
                </thead>
                <tbody id="order_data">
                    @php $c=1; @endphp
                    @foreach($orders as $order)
                    <tr class="border-b">
                        <td class="py-[.5rem] pr-[2rem]">{{$c}}</td>
                        <td class="py-[.5rem] pr-[2rem] capitalize"><a href="{{route('admin.order.detail',$order->order_tracking_id)}}">{{$order->user->name}}</a></td>
                        <td><a href="{{route('admin.order.detail',$order->order_tracking_id)}}">{{$order->order_tracking_id}}</a></td>
                        <td><a href="{{route('admin.order.detail',$order->order_tracking_id)}}" class="capitalize">{{$order->delivery_status}}</a></td>
                        <td class="capitalize">{{$order->payment}}</td>
                        <td>Rs. {{$order->total}}/-</td>
                        <td class="flex py-[.5rem] place-content-end">
                            <button class="addressPath flex bg-blue-500 hover:bg-blue-700 text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md" data-order-id="{{$order->id}}">
                                <span class="">Map</span>
                            </button>
                        </td>
                    </tr>
                    @php $c++ @endphp
                    @endforeach
                </tbody>
            </table>
            <div class="pb-[1.5rem]"></div>
        </div>
    @endif
</div>