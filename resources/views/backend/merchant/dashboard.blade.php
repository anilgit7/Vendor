<div class="min-h-screen !bg-fixed !bg-no-repeat !bg-center !bg-cover">
    @if(auth()->user()->status == 'unverified')
        <div class="w-full h-screen bg-white flex flex-col items-center justify-center">
            <div class="flex flex-col items-center space-y-[2rem] p-[2rem] shadow-[0px_0px_12px_2px_rgba(0,0,0,0.55)]">
                <h1 class="font-bold font-mono text-[1.2rem]">Your request is being verified.</h1>
                <a href="{{ route('logout') }}" class="flex bg-[#337ab8] hover:bg-[#004a89] text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md">
                    <span class="">Logout</span>
                </a>
            </div>
        </div>
    @elseif(auth()->user()->status == 'rejected')
    <div class="w-full h-screen bg-white flex flex-col items-center justify-center">
            <div class="flex flex-col items-center space-y-[2rem] p-[2rem] shadow-[0px_0px_12px_2px_rgba(0,0,0,0.55)]">
                <h1 class="font-bold font-mono text-[1.2rem]">Your request has been rejected.</h1>
                <a href="{{ route('logout') }}" class="flex bg-[#337ab8] hover:bg-[#004a89] text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md">
                    <span class="">Logout</span>
                </a>
            </div>
        </div>
    @else
        @include('backend.merchant.sidebar')
        @include('backend.merchant.mainbar')
    @endif
</div>