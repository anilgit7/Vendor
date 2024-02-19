<header class="bg-[#F28C28] w-full py-[.55rem] z-[100000]" id="fixed-header">
    <div class="px-[1rem] 2xs:px-[1.5rem] sm:px-[3rem] lg:px-[5.9rem]">
        <div class="space-y-[.4rem]">
            <div class="space-y-[.4rem]" id="hide-content">
                <div class="grid grid-cols-1 3xs:grid-cols-2 sm:grid-cols-3 md:grid-cols-12 text-[#353935] text-[.6rem] 2xs:text-[.8rem] xs:text-[.9rem] font-semibold">
                    <a href="{{ route('merchant.register') }}" class=" md:col-span-3"><span class="hover:border-b">Become a Seller</span></a>
                    <a href="#" class="hidden sm:block mr-auto md:col-span-4"><span class="hover:border-b">Help and Support</span></a>
                    <h1 class="hidden 3xs:block 3xs:ml-auto  md:col-span-5">{{date("l\, j  F")}}</h1>
                </div>
                <div class="flex sm:grid grid-cols-12 lg:grid-cols-12 xl:grid-cols-9 gap-[1rem] items-center">
                    <a href="{{ route('home') }}" class="h-[2rem] xs:h-[2.8rem] w-[5rem] xs:w-[7.5rem] col-span-3 md:col-span-3 lg:col-span-2">
                        <!-- <img src="{{asset('images/frontend/logo.png')}}" alt="" class="h-full w-full"> -->
                        <h1 class="font-bold text-[1.8rem] drop-shadow-[0px_0px_.5px_#000000] shadow-[0px_0px_5px_1px_#f28c28] px-0.5">D-Mart</h1>
                    </a>
                    <div class="hidden sm:block sm:relative col-span-7 md:col-span-5 lg:col-span-7 xl:col-span-5">
                        <form action="{{ route('result.page') }}" method="get">
                            @csrf
                            <input type="text" name="search" placeholder="Search in D-mart" class="searchForm w-full rounded-[8rem] mt-1 text-[.9rem] border border-gray-400 text-gray-900 focus:ring-primary-600 focus:border-primary-600" onfocus="this.value=''">
                            <button type="submit" class="absolute top-3.5 right-3">
                                <svg class="h-5 w-5 text-[#444444]" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" d="M12.14 4.18a5.504 5.504 0 0 1 .72 6.89c.12.1.22.21.36.31c.2.16.47.36.81.59c.34.24.56.39.66.47c.42.31.73.57.94.78c.32.32.6.65.84 1c.25.35.44.69.59 1.04c.14.35.21.68.18 1c-.02.32-.14.59-.36.81s-.49.34-.81.36c-.31.02-.65-.04-.99-.19c-.35-.14-.7-.34-1.04-.59c-.35-.24-.68-.52-1-.84c-.21-.21-.47-.52-.77-.93c-.1-.13-.25-.35-.47-.66c-.22-.32-.4-.57-.56-.78c-.16-.2-.29-.35-.44-.5a5.503 5.503 0 0 1-6.44-.98c-2.14-2.15-2.14-5.64 0-7.78a5.498 5.498 0 0 1 7.78 0m-1.41 6.36a3.513 3.513 0 0 0 0-4.95a3.495 3.495 0 0 0-4.95 0a3.495 3.495 0 0 0 0 4.95a3.495 3.495 0 0 0 4.95 0"/>
                                </svg>
                            </button>
                        </form>
                        <div class="search-list hidden sm:block absolute w-full rounded-[.8rem] flex flex-col z-[10000] py-1 space-y-[.2rem]">
                        </div>
                    </div>
                    <div class="col-span-2 md:col-span-4 lg:col-span-3 xl:col-span-2 ml-auto">
                        <div class="flex space-x-[1rem] md:space-x-[2rem] items-center">
                            <div class="flex text-[#353935] text-[.9rem] font-semibold relative">
                                @auth
                                    <div>
                                        <button type="button" class="flex items-center text-black w-8 h-8 rounded items-center justify-center hover:bg-gray-50" data-dropdown-toggle="dropdownProfileSetting">
                                            <svg class="h-[1.5rem] w-[1.5rem]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                                                    <path d="M16 9a4 4 0 1 1-8 0a4 4 0 0 1 8 0m-2 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0"/>
                                                    <path d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11s11-4.925 11-11S18.075 1 12 1M3 12c0 2.09.713 4.014 1.908 5.542A8.986 8.986 0 0 1 12.065 14a8.984 8.984 0 0 1 7.092 3.458A9 9 0 1 0 3 12m9 9a8.963 8.963 0 0 1-5.672-2.012A6.992 6.992 0 0 1 12.065 16a6.991 6.991 0 0 1 5.689 2.92A8.964 8.964 0 0 1 12 21"/>
                                                </g>
                                            </svg>
                                        </button>
                                        <div class="dropdown-nav-menu bg-[#F28C28] shadow-[0px_0px_1px_1px_rgba(0,0,0,0.25)] z-[1000] hidden py-1.5 rounded-md w-max max-w-[100px] pl-2" id="dropdownProfileSetting">
                                            <div class="max-[280px]:px-1 max-[280px]:py-1 px-2 py-2 dark:text-white truncate select-none">
                                                <h1 class="max-[280px]:text-[.6rem] max-sm:text-[.8rem] text-sm font-normal pb-1 text-gray-600 capitalize truncate">
                                                    {{ Auth::user()->name }}
                                                </h1>
                                            </div>
                                            <div class="max-[280px]:px-1 max-[280px]:py-1 px-2 py-2 dark:text-white truncate">
                                                <a href="{{ route('profile.show') }}" class="max-[280px]:text-[.7rem] max-sm:text-[.9rem] font-semibold pb-1 text-gray-900 hover:border-y-2 rounded-[.3rem]">
                                                    {{ __('Profile') }}
                                                </a>
                                            </div>
                                            <div class="max-[280px]:px-1 max-[280px]:py-1 px-2 py-2 dark:text-white truncate">
                                                <form  class="h-auto" method="POST" action="{{ route('logout') }}" x-data>
                                                    @csrf
                                                    <a href="{{ route('logout') }}" class="max-[280px]:text-[.7rem] max-sm:text-[.9rem] font-semibold pb-1 text-gray-900 hover:border-y-2 rounded-[.3rem]" 
                                                            @click.prevent="$root.submit();">
                                                        {{ __('Log Out') }}
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <button class="block md:hidden" data-collapse-toggle="dropdown-log-in">
                                        <svg class="h-[1.5rem] w-[1.5rem]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                                                <path d="M16 9a4 4 0 1 1-8 0a4 4 0 0 1 8 0m-2 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0"/>
                                                <path d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11s11-4.925 11-11S18.075 1 12 1M3 12c0 2.09.713 4.014 1.908 5.542A8.986 8.986 0 0 1 12.065 14a8.984 8.984 0 0 1 7.092 3.458A9 9 0 1 0 3 12m9 9a8.963 8.963 0 0 1-5.672-2.012A6.992 6.992 0 0 1 12.065 16a6.991 6.991 0 0 1 5.689 2.92A8.964 8.964 0 0 1 12 21"/>
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="hidden z-[100] max-md:absolute max-md:bg-[#F28C28] flex max-md:flex-col max-md:top-[2.5rem] max-md:-left-[1.5rem] max-md:space-y-2 max-md:py-2 max-md:px-[1rem] max-md:shadow-[0px_0px_1px_1px_rgba(0,0,0,0.25)] max-md:w-max md:flex" id="dropdown-log-in">
                                        <a href="{{ route('login') }}" class="md:border-r-2 md:border-[#353935] md:pr-[1.5rem]"><span class="hover:border-b">Login</span></a>
                                        <hr class="md:hidden">
                                        <a href="{{ route('register') }}" class="md:pl-[1.5rem]"><span class="hover:border-b">Sign up</span></a>
                                    </div>
                                @endauth
                            </div>
                            <a href="{{ route('product.cartlist') }}">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cart-shopping" class="h-6 w-6 text-[#212529]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block sm:hidden relative" id="show-content">
                <form action="{{ route('result.page') }}" method="post">
                    @csrf
                    <input type="text" name="search" placeholder="Search in D-mart" class="searchForm w-full rounded-[8rem] text-[.8rem] xs:text-[.9rem] max-2xs:p-[.3rem] border border-gray-400 text-gray-900 focus:ring-primary-600 focus:border-primary-600">
                    <button type="submit" class="absolute max-2xs:top-2.5 2xs:top-2.5 right-3">
                        <svg class="max-2xs:h-4 2xs:h-5 max-2xs:w-4 2xs:w-5 text-[#444444]" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M12.14 4.18a5.504 5.504 0 0 1 .72 6.89c.12.1.22.21.36.31c.2.16.47.36.81.59c.34.24.56.39.66.47c.42.31.73.57.94.78c.32.32.6.65.84 1c.25.35.44.69.59 1.04c.14.35.21.68.18 1c-.02.32-.14.59-.36.81s-.49.34-.81.36c-.31.02-.65-.04-.99-.19c-.35-.14-.7-.34-1.04-.59c-.35-.24-.68-.52-1-.84c-.21-.21-.47-.52-.77-.93c-.1-.13-.25-.35-.47-.66c-.22-.32-.4-.57-.56-.78c-.16-.2-.29-.35-.44-.5a5.503 5.503 0 0 1-6.44-.98c-2.14-2.15-2.14-5.64 0-7.78a5.498 5.498 0 0 1 7.78 0m-1.41 6.36a3.513 3.513 0 0 0 0-4.95a3.495 3.495 0 0 0-4.95 0a3.495 3.495 0 0 0 0 4.95a3.495 3.495 0 0 0 4.95 0"/>
                        </svg>
                    </button>
                </form>
                <div class="search-list sm:hidden absolute w-full rounded-[.8rem] flex flex-col z-[10000] py-1 space-y-[.2rem]">
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    /*********************************************************************************************/
    /************************************ Header Fixer *******************************************/
    /*********************************************************************************************/
    window.onscroll = function() {scrollFunction()};
    let headFix = document.getElementById('fixed-header');
    let headSet = document.getElementById('position-set');
    let hideContent = document.getElementById('hide-content');
    let showContent = document.getElementById('show-content');
    function scrollFunction() {
        if (document.body.scrollTop > 90 || document.documentElement.scrollTop > 90) {
            headFix.style.position = "fixed";
            headFix.style.transition = "all 2s ease-in-out";
            headFix.style.top = '0px';
            if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
                
                hideContent.style.display = 'none';
                showContent.style.display = 'block';
                showContent.style.paddingBottom = ".3rem";
            }
            else{
                hideContent.style.display = 'block';
                showContent.style.display = '';
                showContent.style.paddingBottom = "";
            }
        }
        else {
            headFix.style.position = "relative";
        }
    }
</script>
