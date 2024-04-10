<div class="bg-[#f3f4f6] w-full px-[2rem]">
    <h1 class="anime text-[1.2rem] font-bold pt-[1rem]">Change Password</h1>
    <form action="{{route('change.password')}}" method="post">
        @csrf
        <div class="mb-4 space-y-[1rem]">
            <div class="grid grid-cols-1 gap-[2rem] sm:gap-0 sm:grid-cols-3">
                <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start">
                    <div class="relative z-0">
                        <input type="password" id="n_passwod" class="block form-one capitalize px-2 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" placeholder="" name="n_password" minlength="8" maxlength="50" value="" required />
                        <label for="n_passwod" class="absolute text-sm text-gray-500 font-semibold duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#444] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-[#f3f4f6] truncate">New Password</label>
                    </div>
                </h3>
            </div>
            <div class="grid grid-cols-1 gap-[2rem] sm:gap-0 sm:grid-cols-3">
                <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start">
                    <div class="relative z-0">
                        <input type="password" id="c_passwod" class="block form-one capitalize px-2 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" placeholder="" name="c_password" minlength="8" maxlength="50" value="" required />
                        <label for="c_passwod" class="absolute text-sm text-gray-500 font-semibold duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#444] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-[#f3f4f6] truncate">Confirm Password</label>
                    </div>
                </h3>
            </div>
            <button type="submit" class="flex text-center text-white bg-[#F28C28] font-semibold hover:bg-[#c2660c] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-[.7rem] xs:text-[.95rem] px-5 py-2.5 h-[2.03rem] xs:h-[2.5rem] focus:outline-none">Submit</button>
        </div>
    </form>
</div>