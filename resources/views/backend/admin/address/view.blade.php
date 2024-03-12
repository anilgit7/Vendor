<div class="bg-[#f3f4f6] w-full px-[2rem]">
    <div class="py-[2rem] space-y-[1rem]">
        @if($user->address)
            <div class="flex flex-row">
                <label for="address" class="mr-2">Address : : </label>
                <h1 id="address">{{$user->address}}</h1>
            </div>
            <a href="{{route('admin.address.edit')}}" class="flex w-max items-center text-white bg-[#F28C28] font-semibold hover:bg-[#c2660c] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-[.7rem] xs:text-[.95rem] px-5 py-2.5 h-[2.03rem] xs:h-[2.5rem] focus:outline-none">Edit</a>
        @else
            <div class="flex flex-row">
                <label for="address" class="mr-2">Address : : </label>
                <h1 id="address">Add address</h1>
            </div>
            <a href="{{route('admin.address.edit')}}" class="flex w-max items-center text-white bg-[#F28C28] font-semibold hover:bg-[#c2660c] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-[.7rem] xs:text-[.95rem] px-5 py-2.5 h-[2.03rem] xs:h-[2.5rem] focus:outline-none">Create</a>
        @endif
    </div>
</div>