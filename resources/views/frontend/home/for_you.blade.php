<div class="pt-[1rem] pb-[3rem]">
    <div class="anime px-[1rem] 2xs:px-[1.5rem] sm:px-[3rem] lg:px-[5.9rem]">
        <div class="bg-white py-[2rem] px-[2rem] space-y-[1rem]">
            <h1 class="capitalize font-bold text-[1.1rem] 2xs:text-[1.2rem] xs:text-[1.4rem] drop-shadow-[0px_0px_.5px_#000000] tracking-wide">for you</h1>
            <div class="relative flex items-center justify-center">
                <div class="w-full h-[11rem] 3xs:h-[12.5rem] 2xs:h-[15.5rem] xs:h-[14.25rem] mx-auto overflow-x-hidden overflow-y-hidden">
                    <div id="for_you_slider" class="h-full w-max flex gap-8 items-center justify-start transition ease-out duration-700">
                        @foreach($productDatas as $item)
                            <div class="anime-left flex flex-shrink-0 w-[11.7rem]">
                                <div class="bg-white flex flex-col hover:shadow-[0px_2px_4px_0px_rgba(0,0,0,0.25)] group">
                                    <a href="{{route('product.detail',$item->slug)}}" class="flex flex-col space-y-[1rem] group">
                                        <div class="p-[1rem] h-[5rem] 3xs:h-[6.5rem] 2xs:h-[9.5rem] xs:h-[8.25rem] sm:h-[9.25rem] md:h-[11.25rem] lg:h-[10.25rem] xl:h-[8.5rem] 2xl:h-[9.25rem] w-[10rem] bg-[#aaa]">
                                            <img src="images/backend/products/{{$item->images}}" alt="" class="h-full w-full object-contain group-hover:object-cover lg:object-contain p-[1rem]">
                                        </div>
                                        <hr>
                                        <div class="capitalize flex flex-col items-start 2xs:items-center font-semibold pb-[1rem] px-[.3rem] p-[1rem]">
                                            <h1 class="capitalize font-bold text-[1rem] 2xs:text-[.8rem] drop-shadow-[0px_0px_.5px_#000000] tracking-wide break">{{$item->product_name}}</h1>
                                            <span class="mr-2 max-2xs:text-[.7rem] 2xs:text-[.8rem] font-semibold">Rs. {{$item->price}}</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" onclick="forYouPrev()">
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#eee] group-hover:bg-black group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" onclick="forYouNext()">
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#eee] group-hover:bg-black group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    let defaultTransform = 0;
    function forYouNext() {
        defaultTransform = defaultTransform - 218;
        var slider = document.getElementById("for_you_slider");
        console.log(slider.scrollWidth)
        console.log(defaultTransform)
        if (Math.abs(defaultTransform) >= slider.scrollWidth / 5) defaultTransform = 0;
        slider.style.transform = "translateX(" + defaultTransform + "px)";
    }
    function forYouPrev() {
        var slider = document.getElementById("for_you_slider");
        if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
        else defaultTransform = defaultTransform + 218;
        slider.style.transform = "translateX(" + defaultTransform + "px)";
    }
</script>