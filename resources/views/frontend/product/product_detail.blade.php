<div class="py-[3rem]">
    <div class="px-[1rem] 2xs:px-[1.5rem] sm:px-[3rem] lg:px-[5.9rem]">
        <div class="flex flex-col space-y-[3rem]">
            <div class="bg-white flex flex-col 2xl:flex-row justify-between max-2xl:space-y-[1rem] p-[.8rem] 2xs:p-[2rem]">
                <div class="flex flex-col lg:flex-row max-2xl:justify-between 2xl:gap-[2rem] max-lg:space-y-[1rem]">
                    <div class="h-[6rem] 3xs:h-[8rem] 2xs:h-[12rem] xs:h-[18rem] sm:h-[30rem] lg:h-[24rem] w-[6rem] 3xs:w-[8rem] 2xs:w-[12rem] xs:w-[18rem] max-sm:mx-auto sm:w-[30rem] lg:w-[24rem]">
                        <img src="{{ asset('images/frontend/electronics.png') }}" alt="" class="h-full w-full">
                    </div>
                    <hr class="lg:hidden">
                    <div class="space-y-[.5rem] sm:w-[30rem] lg:w-auto">
                        <div class="space-y-[.5rem] text-[.55rem] 3xs:text-[.62rem] 2xs:text-[.75rem] xs:text-[.9rem]">
                            <h1 class="font-bold drop-shadow-[0px_0px_.5px_#000000]">Electronic blub</h1>
                            <div class="flex items-center pb-[.3rem]">
                                <span>4.3</span>
                                <svg class="h-3 xs:h-4 ml-2 text-[#F28C28]" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z"/>
                                </svg>
                            </div>
                            <hr class="w-full">
                        </div>
                        <div class="space-y-[.5rem] text-[.55rem] 3xs:text-[.62rem] 2xs:text-[.75rem] xs:text-[.9rem]">
                            <span>Rs.1500</span>
                            <div class="flex items-center space-x-[.6rem]">
                                <button>
                                    <svg class="h-3 2xs:h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="color: rgb(242, 140, 40);">
                                        <path fill="currentColor" d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"></path>
                                    </svg>
                                </button>
                                <span>Qty: </span>
                                <button>
                                    <svg class="h-3 2xs:h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="color: rgb(242, 140, 40); margin-left: 10px;"><path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path></svg>
                                </button>
                            </div>
                            <hr class="w-full">
                        </div>
                        <div class="space-y-[1rem]">
                            <div class="flex max-lg:justify-between lg:space-x-[8rem] xl:space-x-[14rem] 2xl:space-x-[5rem]">
                                <div class="space-y-[.2rem] capitalize text-[.55rem] 3xs:text-[.62rem] 2xs:text-[.75rem] xs:text-[.9rem] font-semibold">
                                    <h1>Material</h1>
                                    <h1>color</h1>
                                    <h1>brand</h1>
                                    <h1>size</h1>
                                    <h1>item weight</h1>
                                    <h1>number of pieces</h1>
                                    <h1>warrenty description</h1>
                                </div>
                                <div class="space-y-[.2rem] text-end capitalize text-[.55rem] 3xs:text-[.62rem] 2xs:text-[.75rem] xs:text-[.9rem]">
                                    <h1>Alumnium</h1>
                                    <h1>black</h1>
                                    <h1>no brand</h1>
                                    <h1>sm</h1>
                                    <h1>1kg</h1>
                                    <h1>1</h1>
                                    <h1>no warrenty</h1>
                                </div>
                            </div>
                            <div class="w-full flex flex-col max-3xs:space-y-[.3rem] 3xs:flex-row justify-between gap-[.2rem] text-[.55rem] 3xs:text-[.62rem] 2xs:text-[.75rem] xs:text-[.9rem]">
                                <a href="#" class="px-[1rem] xs:px-[1.5rem] sm:px-[2.5rem] py-[.6rem] bg-[#efefef] hover:bg-[#f28c28] max-xs:text-center">Buy now</a>
                                    <form action="{{route('product.cart','id->1')}}" method="post">
                                        @csrf
                                        <input type="text" class="hidden" name="name" value="">
                                        <input type="number" class="hidden" name="price" value="">
                                        <input type="text" class="hidden" name="restaurant_email" value="">
                                        <input type="number" class="hidden" name="quantity" value="1">
                                        <input type="text" class="hidden" name="image" value="">
                                        <input type="text" class="hidden" name="restaurant_email" value="">
                                        
                                        <button type="submit" value="submit" class="px-[1rem] xs:px-[1.2rem] sm:px-[1.9rem] py-[.6rem] bg-[#efefef] hover:bg-[#f28c28] max-xs:text-center">
                                            <span class="">Add to cart</span>
                                        </button>
                                    </form>
                                <!-- <a href="#" class="px-[1rem] xs:px-[1.2rem] sm:px-[1.9rem] py-[.6rem] bg-[#efefef] hover:bg-[#f28c28] max-xs:text-center">Add to cart</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="xl:hidden">
                <div class="flex flex-col sm:w-[30rem] xl:w-auto space-y-[1.1rem] text-[.55rem] 3xs:text-[.55rem] 2xs:text-[.75rem] xs:text-[.9rem]">
                    <div class="space-y-[1.1rem]">
                        <h1 class="font-bold drop-shadow-[0px_0px_.5px_#000000]">Delivery</h1>
                        <div class="flex items-start capitalize">
                            <div class="h-full">
                                <svg class="h-4 mr-2 mt-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path>
                                </svg>
                            </div>
                            <h1 class="break mr-[3rem] font-semibold">koteshwor, kathmandu fnksdf dfadfad dfa </h1>
                            <div class="ml-auto">
                                <span>Change</span>
                            </div>
                        </div>
                        <div class="flex items-center capitalize">
                            <h1 class="font-semibold">delivery cost</h1>
                            <span class="ml-auto">Rs.65</span>
                        </div>
                        <hr>
                    </div>
                    <div class="space-y-[1.1rem]">
                        <h1 class="font-bold drop-shadow-[0px_0px_.5px_#000000]">Payment method available</h1>
                        <div class="flex items-center capitalize">
                            <h1 class="font-semibold">Cash on delivery</h1>
                            <h1 class="ml-auto">esewa</h1>
                        </div>
                    </div>
                    <hr>
                    <div class="space-y-[1.1rem]">
                        <h1 class="font-bold drop-shadow-[0px_0px_.5px_#000000]">Shop details</h1>
                        <div class="flex items-center capitalize">
                            <h1 class="font-semibold">abc shop</h1>
                            <div class="flex ml-auto items-center">
                                <svg class="h-5 mr-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M15.59 12.4V16.47C15.59 16.83 15.55 17.17 15.46 17.48C15.09 18.95 13.87 19.87 12.19 19.87H9.47L6.45 21.88C6 22.19 5.4 21.86 5.4 21.32V19.87C4.38 19.87 3.53 19.53 2.94 18.94C2.34 18.34 2 17.49 2 16.47V12.4C2 10.5 3.18 9.19 5 9.02C5.13 9.01 5.26 9 5.4 9H12.19C14.23 9 15.59 10.36 15.59 12.4Z" fill="#2abbe8"></path>
                                        <path d="M17.75 15.6C19.02 15.6 20.09 15.18 20.83 14.43C21.58 13.69 22 12.62 22 11.35V6.25C22 3.9 20.1 2 17.75 2H9.25C6.9 2 5 3.9 5 6.25V7C5 7.28 5.22 7.5 5.5 7.5H12.19C14.9 7.5 17.09 9.69 17.09 12.4V15.1C17.09 15.38 17.31 15.6 17.59 15.6H17.75Z" fill="#2abbe8"></path>
                                    </g>
                                </svg>
                                <span>Chat</span>
                            </div>
                        </div>
                        <div class="flex items-start capitalize">
                            <div class="h-full">
                                <svg class="h-4 mr-2 mt-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path>
                                </svg>
                            </div>
                            <h1 class="break mr-[3rem] font-semibold">koteshwor, kathmandu fnksdf dfadfad dfa </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white  p-[.8rem] 2xs:p-[2rem] space-y-[.3rem]">
                <h1 class="font-bold drop-shadow-[0px_0px_.5px_#000000] text-[.65rem] 2xs:text-[.9rem] xs:[1.1rem] sm::text-[1.2rem]">Product description</h1>
                <p class="text-[.55rem] 3xs:text-[.62rem] 2xs:text-[.75rem] xs:text-[.9rem]">Discover the Ultima Boom 161 EQ Wireless Earbuds, a fusion of style and technology. With a sleek matte finish and dual-tone design, these Bluetooth V5.3 earbuds offer a range of up to 10 meters. Enjoy a gaming advantage with 60ms Low Latency and choose from three EQ modes for a personalized audio experience. The IPX4 Sweat Resistance ensures durability during workouts. With a total playtime of 42 hours, ASAP Charge technology, and touch controls, these earbuds are a perfect daily companion. Available in Deep Black or Mystic White, backed by a 6-month warranty and 15-day replacement guarantee. Elevate your audio with Ultima Boom 161 EQ.</p>
            </div>
        </div>
    </div>
</div>