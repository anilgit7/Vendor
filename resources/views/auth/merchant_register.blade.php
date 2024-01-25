@extends('auth.app')
@section('main')
<div class="h-screen flex items-center">
    <div class="bg-[#F28C28] pt-[1.5rem] pb-[2rem] w-full z-[100000]">
        <div class="px-[1rem] 2xs:px-[1.5rem] sm:px-[3rem] lg:px-[5.9rem]">
            <div class="flex place-content-center lg:place-content-end lg:justify-between">
                <div></div>
                <div class="pb-[2rem] space-y-[2rem]">
                <h1 class="text-center capitalize drop-shadow-[0px_0px_.5px_#000000] font-bold text-[2.5rem]">Create an Account</h1>
                    <div class="bg-[#353935] py-[1rem] sm:py-[3rem] px-[1rem] sm:px-[6rem] rounded-[.8rem]">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div>
                                <x-input id="name" placeholder="Name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            </div>

                            <div class="mt-4">
                                <x-input id="phone_number" placeholder="Phone Number" class="block mt-1 w-full" type="number" name="phone_number" required pattern="[1-9]{1}[0-9]{9}" onkeypress="limitkeypress(event,this.value,10)" />
                            </div>

                            <div class="mt-4">
                                <select id="address" placeholder="Address" class="block mt-1 w-full rounded-[.5rem]" type="text" name="address" required autofocus autocomplete="address">
                                    <option class="capitalize" value="kathamndu" selected>Kathamndu</option>
                                    <option class="capitalize" value="bhaktapur">Bhaktapur</option>
                                    <option class="capitalize" value="lalitpur">Lalitpur</option>
                                </select>
                            </div>

                            <div class="mt-4 hidden">
                                <x-input id="status" class="block max-sm:py-[.2rem] mt-1 w-full" type="hidden" name="status" value="unverified" required/>
                                <x-input id="merchant" class="block max-sm:py-[.2rem] mt-1 w-full" type="hidden" value="1" name="user_type" required/>
                            </div>

                            <div class="mt-4">
                                <x-input id="email" placeholder="Email" class="block max-sm:py-[.2rem] mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            </div>
                
                            <div class="mt-4">
                                <x-input id="password" placeholder="Password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                            </div>

                            <div class="mt-4">
                                <x-input id="password_confirmation" placeholder="Confirm Password" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>
                
                            <div class="flex flex-col sm:flex-row items-start max-sm:space-y-2 sm:items-center justify-end mt-4 !text-[#F28C28]">
                                    <a class="underline text-sm  hover:text-[#c2660c] rounded-md focus:outline-none" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                    </a>
                
                                <x-button class="sm:ms-4 !bg-[#F28C28] hover:!bg-[#c2660c]">
                                    {{ __('Sign Up') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function limitkeypress(event,value,maxLength){
        if(value !=undefined && value.toString().length >=maxLength){
            event.preventDefault();
        }
    }
</script>
@endsection