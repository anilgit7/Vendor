@if($ratings->isEmpty())
    <h1 class="text-red-700 font-bold text-[1rem] 2xs:text-[1.2rem]">No records found</h1>
@else
    <div class="overflow-scroll scrollbar-hide">
        <table class="w-full gap-[2rem] space-x-[2rem] rounded-md" id="reviews_table" style="text-wrap: nowrap;">
            <thead>
                <tr class="border-b">
                    <th class="text-start pr-[2rem] pb-[.5rem]">S.N</th>
                    <th class="text-start pr-[2rem] pb-[.5rem]">Product Name</th>
                    <th class="text-start pr-[2rem] pb-[.5rem]">Reviews</th>
                    <th class="text-start pr-[2rem] pb-[.5rem]">Rating</th>
                    <th class="text-center pb-[.5rem]">Action</th>
                </tr>
            </thead>
            <tbody id="reviews-data">
                @foreach($ratings as $rating)
                    <tr class="border-b">
                        <td class="py-[.5rem] pr-[2rem]">{{$loop->iteration}}</td>
                        <td class="py-[.5rem] pr-[2rem] capitalize">{{$rating->product->product_name}}</td>
                        <td class="py-[.5rem] pr-[2rem] capitalize">{{$rating->description}}</td>
                        <td class="py-[.5rem] pr-[2rem] capitalize">{{$rating->rating}}</td>
                        <td class="flex gap-[.3rem] py-[.5rem] place-content-end" id="reviewStatus-{{$rating->id}}">
                            @if($rating->status == 'hide')
                                <form action="{{route('merchant.rating.update',$rating->id)}}" method="post">
                                    @csrf
                                    <input type="hidden" name="status" value="show">
                                    <button class="flex bg-blue-500 hover:bg-blue-700 text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md">
                                        <span class="">Show</span>
                                    </button>
                                </form>
                            @endif
                            @if($rating->status == 'show')
                                <form action="{{route('merchant.rating.update',$rating->id)}}" method="post">
                                    @csrf
                                    <input type="hidden" name="status" value="hide">
                                    <button class="flex bg-red-500 hover:bg-red-700 text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md">
                                        <span class="">hide</span>
                                    </button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pb-[1.5rem]"></div>
    </div>
@endif