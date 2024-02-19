<div class="space-y-[1.5rem]">
    @if(!$users)
        <h1 class="text-red-700 font-bold text-[1rem] 2xs:text-[1.2rem]">No records found</h1>
    @else
        <div class="overflow-scroll scrollbar-hide">
            <table class="w-full gap-[2rem] space-x-[2rem] rounded-md" id="customer" style="text-wrap: nowrap;">
                <tr class="border-b">
                    <th class="text-start pr-[2rem] pb-[.5rem]">S.N</th>
                    <th class="text-start pr-[2rem] pb-[.5rem]">Customer Name</th>
                    <th class="text-start pr-[2rem] pb-[.5rem]">Email</th>
                    <th class="text-start pr-[2rem] pb-[.5rem]">Phone Number</th>
                    <th class="text-end pb-[.5rem]">Action</th>
                </tr>
                @php $i = 1; @endphp
                @foreach($users as $user)
                    <tr class="border-b" id="customer-{{$user->id}}">
                        <td class="py-[.5rem] pr-[2rem]">{{$i}}</td>
                        <td class="py-[.5rem] pr-[2rem] capitalize">{{$user->name}}</td>
                        <td class="py-[.5rem] pr-[2rem]">{{$user->email}}</td>
                        <td class="py-[.5rem] pr-[2rem] capitalize">{{$user->phone_number}}</td>
                        <td class="flex gap-[.3rem] py-[.5rem] place-content-end">
                            <button data-customer-id="'{{$user->id}}'" class="delete flex bg-red-500 hover:bg-red-700 text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md" onclick="deleteCustomer('{{$user->id}}')">
                                <span class="">Delete</span>
                            </button>
                        </td>
                    </tr>
                    @php $i++ @endphp
                @endforeach
            </table>
            <div class="pb-[1.5rem]"></div>
        </div>
    @endif
</div>