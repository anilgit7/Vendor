<div class="w-max mr-2">
    <h1 class="bg-[#353935] text-[#F28C28] flex items-center py-[1rem] px-[1rem] w-full">
        <svg class="h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"></path>
        </svg>
        <span>Profile</span>
    </h1>
    <hr>
    <div id="categoryDropDowwn" class="flex bg-[#F28C28] flex flex-row lg:flex-col w-max">
        <a href="{{ route('user.dashboard') }}" class="capitalize py-[.5rem] pl-[1rem] pr-[1rem] xl:pr-[2rem] hover:text-[#F28C28] hover:bg-[#353935] {{(Route::currentRouteName() == 'user.dashboard') ? 'bg-[#353935] text-[#F28C28]':''}} ">Dashboard</a>
        <hr class="max-lg:w-[1px] max-lg:h-auto max-lg:bg-white">
        <a href="{{ route('user.order') }}" class="capitalize py-[.5rem] pl-[1rem] pr-[1rem] xl:pr-[2rem] hover:text-[#F28C28] hover:bg-[#353935] {{(request()->segment(1) == 'order') ? 'bg-[#353935] text-[#F28C28]':''}} ">Order</a>
        <hr class="max-lg:w-[1px] max-lg:h-auto max-lg:bg-white">
        <a href="{{ route('user.setting') }}" class="capitalize py-[.5rem] pl-[1rem] pr-[1rem] xl:pr-[2rem] hover:text-[#F28C28] hover:bg-[#353935] {{(Route::currentRouteName() == 'user.setting') ? 'bg-[#353935] text-[#F28C28]':''}} ">Setting</a>
        <hr class="max-lg:w-[1px] max-lg:h-auto max-lg:bg-white">
        
    </div>
</div>