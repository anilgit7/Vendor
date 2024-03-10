<div class="bg-[#f3f4f6] w-full px-[2rem]">
    <div class="py-[2rem] space-y-[1rem]">
        <form action="{{route('user.address.store')}}" method="post" class="anime space-y-[1rem]">
        @csrf
            <div class="relative z-0">
                <input type="hidden" name="latitude" id="latitude" value="{{ $user ? $user->latitude : '' }}">
                <input type="hidden" id="longitude" name="longitude" value="{{ $user ? $user->longitude : '' }}">
                <input type="text" id="address" class="block form-one capitalize px-2 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" placeholder="" value="" name="address" minlength="2" maxlength="250" value="{{ $user ? $user->address : '' }}" required onclick="mapShow()"/>
                <label for="address" class="absolute text-sm text-gray-500 font-semibold duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-[#f3f4f6] truncate">Address</label>
            </div>
            <button type="submit" class="flex items-center text-white bg-[#F28C28] font-semibold hover:bg-[#c2660c] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-[.7rem] xs:text-[.95rem] px-5 py-2.5 h-[2.03rem] xs:h-[2.5rem] focus:outline-none">Submit</button>
        </form>
    </div>
</div>