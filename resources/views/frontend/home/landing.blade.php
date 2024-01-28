<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative overflow-hidden h-[13.25rem] 2xs:h-[14.5rem] xs:h-[16.75rem] sm:h-[20rem] md:h-[23.25rem] lg:h-[25.5rem] xl:h-[28.75rem] 2xl:h-[31.25rem]">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/frontend/sale1.png') }}" class="absolute block w-full object-cover lg:object-none h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            <div class="absolute z-[100] flex flex-col items-center justify-center h-full w-full space-y-[2rem]">
                <h1 class="uppercase text-black font-bold text-[1rem] 2xs:text-[1.5rem] xs:text-[2.5rem] md:text-[3.5rem] lg:text-[4.5rem] drop-shadow-[0px_0px_2px_#000000]">catalogue</h1>
                <span class="capitalize text-white font-semibold text-[.7rem] 2xs:text-[1rem] xs:text-[1.5rem] md:text-[2.5rem] lg:text-[3rem] drop-shadow-[5px_5px_5px_#000000]">Types of Item Offered by D-mart</span>
            </div>
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/frontend/sale2.png') }}" class="absolute block w-full object-cover h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            <div class="absolute z-[100] flex flex-col items-center justify-center h-full w-full space-y-[2rem]">
                <h1 class="uppercase text-black font-bold text-[1rem] 2xs:text-[1.5rem] xs:text-[2.5rem] md:text-[3.5rem] lg:text-[4.5rem] drop-shadow-[0px_0px_2px_#000000]">catalogue</h1>
                <span class="capitalize text-white font-semibold text-[.7rem] 2xs:text-[1rem] xs:text-[1.5rem] md:text-[2.5rem] lg:text-[3rem] drop-shadow-[5px_5px_5px_#000000]">Types of Item Offered by D-mart</span>
            </div>
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/frontend/sale3.png') }}" class="absolute block w-full object-fill h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            <div class="absolute z-[100] flex flex-col items-center justify-center h-full w-full space-y-[2rem]">
                <h1 class="uppercase text-black font-bold text-[1rem] 2xs:text-[1.5rem] xs:text-[2.5rem] md:text-[3.5rem] lg:text-[4.5rem] drop-shadow-[0px_0px_2px_#000000]">catalogue</h1>
                <span class="capitalize text-white font-semibold text-[.7rem] 2xs:text-[1rem] xs:text-[1.5rem] md:text-[2.5rem] lg:text-[3rem] drop-shadow-[5px_5px_5px_#000000]">Types of Item Offered by D-mart</span>
            </div>
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/frontend/sale4.png') }}" class="absolute block w-full object-fill h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            <div class="absolute z-[100] flex flex-col items-center justify-center h-full w-full space-y-[2rem]">
                <h1 class="uppercase text-black font-bold text-[1rem] 2xs:text-[1.5rem] xs:text-[2.5rem] md:text-[3.5rem] lg:text-[4.5rem] drop-shadow-[0px_0px_2px_#000000]">catalogue</h1>
                <span class="capitalize text-white font-semibold text-[.7rem] 2xs:text-[1rem] xs:text-[1.5rem] md:text-[2.5rem] lg:text-[3rem] drop-shadow-[5px_5px_5px_#000000]">Types of Item Offered by D-mart</span>
            </div>
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>