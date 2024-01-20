<div class="sm:ml-64 mainbar">
    <div class="py-2 px-6 bg-white flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
        <button type="button" class="text-lg text-gray-600 sidebar-toggle">
            <svg class="w-5 h-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill="#000000" d="M3 4h18v2H3V4Zm0 7h18v2H3v-2Zm0 7h18v2H3v-2Z"/>
            </svg>
        </button>
        <ul class="flex items-center text-sm ml-4 hidden xs:flex">
            <li class="mr-2">
                <a href="{{ route('merchant.dashboard') }}" class="text-gray-400 hover:text-gray-600 font-medium">Dashboard</a>
            </li>
            @if($title)
                <li class="text-gray-600 mr-2 font-medium">/</li>
                <li class="cursor-default text-gray-600 mr-2 font-medium capitalize">{{ $title }}</li>
            @endif
        </ul>
        <div class="ml-auto flex items-center">
            <div class="mr-1">
                <button type="button" class="text-gray-400 w-8 h-8 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600" data-dropdown-toggle="searchField">
                    <svg class="h-5 w-5 text-black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor" d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396l1.414-1.414l-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8s3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6s-6-2.691-6-6s2.691-6 6-6z"/>
                    </svg>
                </button>
                <div class="dropdown-nav-menu shadow-md shadow-black/5 z-30 hidden max-w-[10rem] xs:max-w-xs w-full bg-white rounded-md border border-gray-100" id="searchField">
                    <form action="" class="p-2 xs:p-4 border-b border-b-gray-100">
                        <div class="relative w-full">
                            <input type="text" class="py-1 xs:py-2 pr-4 pl-2 xs:pl-10 bg-gray-50 w-full outline-none border border-gray-100 rounded-md text-sm focus:border-blue-500" placeholder="Search...">
                            <i class="ri-search-line absolute top-1/2 left-4 -translate-y-1/2 text-gray-400"></i>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mr-1">
                <button type="button" class="text-gray-400 w-8 h-8 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600" data-dropdown-toggle="dropdownNotification">
                    <svg class="h-5 w-5" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#000000" d="M28.707 19.293L26 16.586V13a10.014 10.014 0 0 0-9-9.95V1h-2v2.05A10.014 10.014 0 0 0 6 13v3.586l-2.707 2.707A1 1 0 0 0 3 20v3a1 1 0 0 0 1 1h7v.777a5.152 5.152 0 0 0 4.5 5.199A5.006 5.006 0 0 0 21 25v-1h7a1 1 0 0 0 1-1v-3a1 1 0 0 0-.293-.707ZM19 25a3 3 0 0 1-6 0v-1h6Zm8-3H5v-1.586l2.707-2.707A1 1 0 0 0 8 17v-4a8 8 0 0 1 16 0v4a1 1 0 0 0 .293.707L27 20.414Z"/>
                    </svg>
                </button>
                <div class="dropdown-nav-menu shadow-md shadow-black/5 z-30 hidden max-w-[12rem] xs:max-w-xs w-full bg-white rounded-md border border-gray-100" id="dropdownNotification">
                    <div class="flex items-center px-4 pt-4 border-b border-b-gray-100 notification-tab">
                        <button type="button" data-tab="notification" data-tab-page="notifications" class="text-gray-400 font-medium text-[13px] hover:text-gray-600 border-b-2 border-b-transparent mr-4 pb-1 active-notification-tabs">Notifications</button>
                        <button type="button" data-tab="notification" data-tab-page="messages" class="text-gray-400 font-medium text-[13px] hover:text-gray-600 border-b-2 border-b-transparent mr-4 pb-1">Messages</button>
                    </div>
                    <div class="my-2">
                        <ul class="max-h-64 overflow-y-auto" data-tab-for="notification" data-page="notifications">
                            <li>
                                <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                    <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                    <div class="ml-2">
                                        <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">New order</div>
                                        <div class="text-[11px] text-gray-400">from a user</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <ul class="max-h-64 overflow-y-auto hidden" data-tab-for="notification" data-page="messages">
                            <li>
                                <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                    <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                    <div class="ml-2">
                                        <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">John Doe</div>
                                        <div class="text-[11px] text-gray-400">Hello there!</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <button type="button" class="flex items-center text-black w-8 h-8 rounded items-center justify-center hover:bg-gray-50" data-dropdown-toggle="dropdownProfileSetting" data-dropdown-delay="500">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none">
                            <path stroke="currentColor" stroke-width="1.5" d="M21 12a8.958 8.958 0 0 1-1.526 5.016A8.991 8.991 0 0 1 12 21a8.991 8.991 0 0 1-7.474-3.984A9 9 0 1 1 21 12Z"/>
                            <path fill="currentColor" d="M13.25 9c0 .69-.56 1.25-1.25 1.25v1.5A2.75 2.75 0 0 0 14.75 9h-1.5ZM12 10.25c-.69 0-1.25-.56-1.25-1.25h-1.5A2.75 2.75 0 0 0 12 11.75v-1.5ZM10.75 9c0-.69.56-1.25 1.25-1.25v-1.5A2.75 2.75 0 0 0 9.25 9h1.5ZM12 7.75c.69 0 1.25.56 1.25 1.25h1.5A2.75 2.75 0 0 0 12 6.25v1.5ZM5.166 17.856l-.719-.214l-.117.392l.267.31l.569-.488Zm13.668 0l.57.489l.266-.31l-.117-.393l-.719.214ZM9 15.75h6v-1.5H9v1.5Zm0-1.5a4.752 4.752 0 0 0-4.553 3.392l1.438.428A3.252 3.252 0 0 1 9 15.75v-1.5Zm3 6a8.23 8.23 0 0 1-6.265-2.882l-1.138.977A9.73 9.73 0 0 0 12 21.75v-1.5Zm3-4.5c1.47 0 2.715.978 3.115 2.32l1.438-.428A4.752 4.752 0 0 0 15 14.25v1.5Zm3.265 1.618A8.23 8.23 0 0 1 12 20.25v1.5a9.73 9.73 0 0 0 7.403-3.405l-1.138-.977Z"/>
                        </g>
                    </svg>
                </button>
                <div class="dropdown-nav-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[100px] pl-2" id="dropdownProfileSetting">
                    <div class="max-[280px]:px-1 max-[280px]:py-1 px-2 py-2 dark:text-white truncate select-none">
                        <h1 class="max-[280px]:text-[.6rem] max-sm:text-[.8rem] text-sm font-normal pb-1 text-gray-400 capitalize truncate">
                            {{ Auth::user()->name }}
                        </h1>
                    </div>
                    <div class="max-[280px]:px-1 max-[280px]:py-1 px-2 py-2 dark:text-white truncate">
                        <a href="{{ route('profile.show') }}" class="max-[280px]:text-[.7rem] max-sm:text-[.9rem] font-semibold pb-1 text-gray-600 hover:text-gray-900 hover:border-y-2 border-gray-100 rounded-[.3rem]">
                            {{ __('Profile') }}
                        </a>
                    </div>
                    <div class="max-[280px]:px-1 max-[280px]:py-1 px-2 py-2 dark:text-white truncate">
                        <form  class="h-auto" method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <a href="{{ route('logout') }}" class="max-[280px]:text-[.7rem] max-sm:text-[.9rem] font-semibold pb-1 text-gray-600 hover:text-gray-900 hover:border-y-2 border-gray-100 rounded-[.3rem]" 
                                    @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="message" class="bg-white text-red-700 p-4 h-[1rem] relative" role="alert">
        <h1 class="font-bold"></h1>
    </div>
    <div class="min-h-screen p-4 space-y-[1rem] bg-white">
        <div>
            @if(\Route::current()->getName() == 'merchant.product')
                @include('backend.merchant.product.view') 
            @endif
        </div>
    </div>
</div>