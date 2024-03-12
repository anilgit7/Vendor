<aside id="default-sidebar" class="fixed top-0 left-0 z-50 w-32 2xs:w-48 xs:w-64 h-full bg-gray-900 transition-transform sidebar-menu" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-900">
        <ul class="space-y-2 font-medium">
            <li>
                <div class="flex cursor-default items-center p-1 2xs:p-2 text-gray-900 rounded-lg bg-gray-100 group">
                    <svg class="w-3 h-3 2xs:w-5 2xs:h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                        <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                    </svg>
                    <span class="ml-1 2xs:ml-3 text-[.8rem] 2xs:text-[1rem]">
                        Dashboard
                    </span>
                </div>
            </li>
            <li>
                <div class="h-[1px] rounded-[.5rem] w-full bg-white"></div>
            </li>
            <li>
                <button type="button" class="flex items-center w-full p-1 2xs:p-2 text-base text-gray-300 transition duration-75 rounded-lg group hover:bg-gray-100 {{ ((request()->segment(1) === 'admin') && (request()->segment(2) === 'merchant')) ? 'bg-gray-100 text-gray-900' : '' }}" aria-controls="dropdown-merchant" data-collapse-toggle="dropdown-merchant">
                    <svg class="flex-shrink-0 w-3 h-3 2xs:w-5 2xs:h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                    </svg>
                    <span class="group-hover:text-gray-900 flex-1 ml-1 2xs:ml-3 text-[.8rem] 2xs:text-[1rem] text-left whitespace-nowrap" sidebar-toggle-item>
                        Merchant
                    </span>
                    <svg sidebar-toggle-item class="w-3 h-3 2xs:w-6 2xs:h-6 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-merchant" class="space-y-2 py-2 {{  Request::is('admin/merchant/*') ? '' : 'hidden' }}">
                    <li>
                        <a href="{{ route('admin.merchant.new') }}" class="text-base text-gray-300 rounded-lg flex items-center p-1 2xs:p-2 group hover:bg-gray-100 transition duration-75 pl-3 2xs:pl-5 xs:pl-11 {{ (Route::currentRouteName() === 'admin.merchant.new') ? 'bg-[#F3F4F6] text-gray-900' : '' }}">
                            <svg class="flex-shrink-0 w-3 h-3 2xs:w-6 2xs:h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                            </svg>
                            <span class="flex-1 ml-1 2xs:ml-3 text-[.8rem] 2xs:text-[1rem] whitespace-nowrap group-hover:text-gray-900 truncate">
                                New Merchant
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.merchant.verify') }}" class="text-base text-gray-300 rounded-lg flex items-center p-1 2xs:p-2 group hover:bg-gray-100 transition duration-75 pl-3 2xs:pl-5 xs:pl-11 {{ (route::currentRouteName() === 'admin.merchant.verify') ? 'bg-[#F3F4F6] text-gray-900' : '' }}">
                            <svg class="flex-shrink-0 w-3 h-3 2xs:w-6 2xs:h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M.99 5.24A2.25 2.25 0 013.25 3h13.5A2.25 2.25 0 0119 5.25l.01 9.5A2.25 2.25 0 0116.76 17H3.26A2.267 2.267 0 011 14.74l-.01-9.5zm8.26 9.52v-.625a.75.75 0 00-.75-.75H3.25a.75.75 0 00-.75.75v.615c0 .414.336.75.75.75h5.373a.75.75 0 00.627-.74zm1.5 0a.75.75 0 00.627.74h5.373a.75.75 0 00.75-.75v-.615a.75.75 0 00-.75-.75H11.5a.75.75 0 00-.75.75v.625zm6.75-3.63v-.625a.75.75 0 00-.75-.75H11.5a.75.75 0 00-.75.75v.625c0 .414.336.75.75.75h5.25a.75.75 0 00.75-.75zm-8.25 0v-.625a.75.75 0 00-.75-.75H3.25a.75.75 0 00-.75.75v.625c0 .414.336.75.75.75H8.5a.75.75 0 00.75-.75zM17.5 7.5v-.625a.75.75 0 00-.75-.75H11.5a.75.75 0 00-.75.75V7.5c0 .414.336.75.75.75h5.25a.75.75 0 00.75-.75zm-8.25 0v-.625a.75.75 0 00-.75-.75H3.25a.75.75 0 00-.75.75V7.5c0 .414.336.75.75.75H8.5a.75.75 0 00.75-.75z"></path>
                            </svg>
                            <span class="flex-1 ml-1 2xs:ml-3 text-[.8rem] 2xs:text-[1rem] whitespace-nowrap group-hover:text-gray-900 truncate">
                                Verified Merchant
                            </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{ route('admin.customer.list') }}" class="flex items-center w-full p-1 2xs:p-2 text-base text-gray-300 transition duration-75 rounded-lg group hover:bg-gray-100 {{ Request::is('admin/customer/*') ? 'bg-gray-100 text-gray-900' : '' }}">
                    <svg class="flex-shrink-0 w-3 h-3 2xs:w-5 2xs:h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                    </svg>
                    <span class="group-hover:text-gray-900 flex-1 ml-1 2xs:ml-3 text-[.8rem] 2xs:text-[1rem] text-left whitespace-nowrap">
                         Customer
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.category') }}" class="flex items-center w-full p-1 2xs:p-2 text-base text-gray-300 transition duration-75 rounded-lg group hover:bg-gray-100 {{ (Route::currentRouteName() === 'admin.category') ? 'bg-[#F3F4F6] text-gray-900' : '' }}">
                    <svg class="flex-shrink-0 w-3 h-3 2xs:w-6 2xs:h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor" d="M4 11h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1m10 0h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1M4 21h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1m13 0c2.206 0 4-1.794 4-4s-1.794-4-4-4s-4 1.794-4 4s1.794 4 4 4"/>
                    </svg>
                    <span class="flex-1 ml-1 2xs:ml-3 text-[.8rem] 2xs:text-[1rem] whitespace-nowrap group-hover:text-gray-900 truncate">
                        Category
                    </span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.order')}}" class="flex items-center w-full p-1 2xs:p-2 text-base text-gray-300 transition duration-75 rounded-lg group hover:bg-gray-100 {{ (Route::currentRouteName() === 'admin.order') ? 'bg-[#F3F4F6] text-gray-900' : '' }}">
                    <svg class="flex-shrink-0 w-3 h-3 2xs:w-6 2xs:h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M4 13c-1.11 0-2 .89-2 2v4c0 1.11.89 2 2 2h4c1.11 0 2-.89 2-2v-4c0-1.11-.89-2-2-2m.2 1.5l1.06 1.05l-3.99 3.95l-2.53-2.55l1.07-1.05l1.47 1.49M4 3c-1.11 0-2 .89-2 2v4c0 1.11.89 2 2 2h4c1.11 0 2-.89 2-2V5c0-1.11-.89-2-2-2M4 5h4v4H4m8-4h10v2H12m0 12v-2h10v2m-10-8h10v2H12Z"/>
                    </svg>
                    <span class="flex-1 ml-1 2xs:ml-3 text-[.8rem] 2xs:text-[1rem] whitespace-nowrap group-hover:text-gray-900 truncate">
                        Order
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.address') }}" class="flex items-center w-full p-1 2xs:p-2 text-base text-gray-300 transition duration-75 rounded-lg group hover:bg-gray-100 {{ ((request()->segment(1) === 'admin') && (request()->segment(2) === 'address')) ? 'bg-gray-100 text-gray-900' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-3 h-3 2xs:w-5 2xs:h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" viewBox="0 0 24 24">
                        <g fill="currentColor">
                            <path d="M15.75 8.25a.75.75 0 0 1 .75.75a3.74 3.74 0 0 1-1.27 2.812a.75.75 0 1 1-.992-1.124A2.243 2.243 0 0 0 15 9a.75.75 0 0 1 .75-.75Z"/>
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75s9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM4.575 15.6a8.25 8.25 0 0 0 9.348 4.425a1.966 1.966 0 0 0-1.84-1.275a.983.983 0 0 1-.97-.822l-.073-.437c-.094-.565.25-1.11.8-1.267l.99-.282c.427-.123.783-.418.982-.816l.036-.073a1.453 1.453 0 0 1 2.328-.377L16.5 15h.628a2.25 2.25 0 0 1 1.983 1.186a8.25 8.25 0 0 0-6.345-12.4c.044.262.18.503.389.676l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 0 1-1.161.886l-.143.048a1.107 1.107 0 0 0-.57 1.664a1.108 1.108 0 0 1-.427 1.605L9 13.125l.423 1.059a.956.956 0 0 1-1.652.928l-.679-.906a1.125 1.125 0 0 0-1.906.172L4.575 15.6Z" clip-rule="evenodd"/>
                        </g>
                    </svg>
                    <span class="flex-1 ml-1 2xs:ml-3 text-[.8rem] 2xs:text-[1rem] whitespace-nowrap group-hover:text-gray-900 truncate">
                        Address
                    </span>
                </a>
            </li>
        </ul>
    </div>
</aside>
<div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>