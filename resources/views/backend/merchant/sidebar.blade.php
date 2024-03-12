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
                <a href="{{ route('merchant.product') }}" class="flex items-center w-full p-1 2xs:p-2 text-base text-gray-300 transition duration-75 rounded-lg group hover:bg-gray-100 {{ ((request()->segment(1) === 'merchant') && (request()->segment(2) === 'product')) ? 'bg-gray-100 text-gray-900' : '' }}">
                    <svg class="flex-shrink-0 w-3 h-3 2xs:w-5 2xs:h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                    </svg>
                    <span class="flex-1 ml-1 2xs:ml-3 text-[.8rem] 2xs:text-[1rem] whitespace-nowrap group-hover:text-gray-900 truncate">
                        Product
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ route('merchant.order') }}" class="flex items-center w-full p-1 2xs:p-2 text-base text-gray-300 transition duration-75 rounded-lg group hover:bg-gray-100 {{ ((request()->segment(1) === 'merchant') && (request()->segment(2) === 'order')) ? 'bg-gray-100 text-gray-900' : '' }}">
                    <svg class="flex-shrink-0 w-3 h-3 2xs:w-5 2xs:h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                    </svg>
                    <span class="flex-1 ml-1 2xs:ml-3 text-[.8rem] 2xs:text-[1rem] whitespace-nowrap group-hover:text-gray-900 truncate">
                        Order
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ route('merchant.rating') }}" class="flex items-center w-full p-1 2xs:p-2 text-base text-gray-300 transition duration-75 rounded-lg group hover:bg-gray-100 {{ ((request()->segment(1) === 'merchant') && (request()->segment(2) === 'rating')) ? 'bg-gray-100 text-gray-900' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-3 h-3 2xs:w-5 2xs:h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" viewBox="0 0 14 14">
                        <path fill="currentColor" fill-rule="evenodd" d="M4.808 1.515c-.797 0-1.443.646-1.443 1.443V8.57h1.25a.5.5 0 0 1 .354.854l-1.604 1.603v.015H3.35l-.381.382a.5.5 0 0 1-.708 0l-.38-.382h-.016v-.015L.261 9.424a.5.5 0 0 1 .354-.854h1.25V2.958a2.942 2.942 0 0 1 5.885 0v8.084a1.442 1.442 0 0 0 2.885 0V5.368h-1.25a.5.5 0 0 1-.354-.854l2-2a.5.5 0 0 1 .707 0l2 2a.5.5 0 0 1-.353.854h-1.25v5.674a2.942 2.942 0 1 1-5.885 0V2.958c0-.797-.646-1.443-1.442-1.443" clip-rule="evenodd"/>
                    </svg>
                    <span class="flex-1 ml-1 2xs:ml-3 text-[.8rem] 2xs:text-[1rem] whitespace-nowrap group-hover:text-gray-900 truncate">
                        Rating
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ route('merchant.address') }}" class="flex items-center w-full p-1 2xs:p-2 text-base text-gray-300 transition duration-75 rounded-lg group hover:bg-gray-100 {{ ((request()->segment(1) === 'merchant') && (request()->segment(2) === 'address')) ? 'bg-gray-100 text-gray-900' : '' }}">
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