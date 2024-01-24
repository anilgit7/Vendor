@extends('auth.app')
@section('main')
<div class="h-screen flex items-center">
    <div class="bg-[#F28C28] pt-[1.5rem] pb-[2rem] w-full z-[100000]">
        <div class="px-[1rem] 2xs:px-[1.5rem] sm:px-[3rem] lg:px-[5.9rem]">
            <div class="flex place-content-center lg:place-content-end lg:justify-between">
                <div></div>
                <div class="pb-[2rem] space-y-[2rem]">
                <h1 class="text-center capitalize drop-shadow-[0px_0px_.5px_#000000] font-bold text-[2.5rem]">Login</h1>
                    <div class="bg-[#353935] py-[1rem] sm:py-[3rem] px-[1rem] sm:px-[6rem] rounded-[.8rem]">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div>
                                <x-input id="email" placeholder="Email" class="block max-sm:py-[.2rem] mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            </div>
                
                            <div class="mt-8">
                                <x-input id="password" placeholder="Password" class="block max-sm:py-[.2rem] mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                            </div>
                
                            <div class="block mt-4">
                                <label for="remember_me" class="flex items-center text-[#F28C28]">
                                    <x-checkbox id="remember_me" name="remember" class="text-[#F28C28] focus:ring-[#F28C28]" />
                                    <span class="ms-2 text-sm">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                
                            <div class="flex flex-col sm:flex-row items-start max-sm:space-y-2 sm:items-center justify-end mt-4 text-[#F28C28]">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm  hover:text-[#c2660c] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                
                                <x-button class="sm:ms-4 !bg-[#F28C28] hover:!bg-[#c2660c]">
                                    {{ __('Log in') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection