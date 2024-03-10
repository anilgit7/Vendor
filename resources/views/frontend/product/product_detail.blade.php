<div class="py-[3rem]">
    <div class="px-[1rem] 2xs:px-[1.5rem] sm:px-[3rem] lg:px-[5.9rem]">
        <div class="flex flex-col space-y-[3rem]">
            <div class="anime bg-white flex flex-col 2xl:flex-row justify-between max-2xl:space-y-[1rem] p-[.8rem] 2xs:p-[2rem]">
                <div class="flex flex-col lg:flex-row max-2xl:justify-between 2xl:gap-[2rem] max-lg:space-y-[1rem]">
                    <div class="h-[6rem] 3xs:h-[8rem] 2xs:h-[12rem] xs:h-[18rem] sm:h-[30rem] lg:h-[24rem] w-[6rem] 3xs:w-[8rem] 2xs:w-[12rem] xs:w-[18rem] max-sm:mx-auto sm:w-[30rem] lg:w-[24rem]">
                        <img src="/images/backend/products/{{$product->images}}" alt="" class="h-full w-full">
                    </div>
                    <hr class="lg:hidden">
                    <div class="space-y-[.5rem] sm:w-[30rem] lg:w-auto lg:ml-[.5rem] xl:ml-0">
                        <div class="space-y-[.5rem] text-[.55rem] 3xs:text-[.62rem] 2xs:text-[.75rem] xs:text-[.9rem]">
                            <h1 class="font-bold drop-shadow-[0px_0px_.5px_#000000]">{{$product->product_name}}</h1>
                            <div class="flex items-center pb-[.3rem]">
                                <span>4.3</span>
                                <svg class="h-3 xs:h-4 ml-2 text-[#F28C28]" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z"/>
                                </svg>
                            </div>
                            <hr class="w-full">
                        </div>
                        <div class="space-y-[.5rem] text-[.55rem] 3xs:text-[.62rem] 2xs:text-[.75rem] xs:text-[.9rem]">
                            <span id="price">Rs. {{$product->price}}</span>
                            <div class="flex items-center space-x-[.6rem]">
                                <button class="subtbtn" onclick="handleDecrement('{{$product->price}}')">
                                    <svg class="h-3 2xs:h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="color: rgb(242, 140, 40);">
                                        <path fill="currentColor" d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"></path>
                                    </svg>
                                </button>
                                <p>Qty :  <span id="quantity_count">2</span></p>
                                <button class="addbtn" onclick="handleIncrement('{{$product->price}}')">
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
                                    <h1>warranty description</h1>
                                </div>
                                <div class="space-y-[.2rem] text-end capitalize text-[.55rem] 3xs:text-[.62rem] 2xs:text-[.75rem] xs:text-[.9rem]">
                                    <h1>{{$product->material}}</h1>
                                    <h1>{{$product->color}}</h1>
                                    <h1>{{$product->brand}}</h1>
                                    <h1>{{$product->size}}</h1>
                                    <h1>{{$product->weight}} kg</h1>
                                    <h1>1</h1>
                                    <h1>{{$product->warranty}} year</h1>
                                </div>
                            </div>
                            <div class="w-full flex flex-col max-3xs:space-y-[.3rem] 3xs:flex-row justify-between gap-[.2rem] text-[.55rem] 3xs:text-[.62rem] 2xs:text-[.75rem] xs:text-[.9rem]">
                                <form action="{{ route('buy.now') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$product->id}}" id="productId">
                                    <input type="hidden" value="1" name="quantity" id="buy-quantity">
                                    <button type="submit" class="px-[1rem] xs:px-[1.5rem] sm:px-[2.5rem] py-[.6rem] bg-[#efefef] hover:bg-[#f28c28] max-xs:text-center">Buy now</button>
                                </form>
                                <form class="ajax-cart-form" id="addToCart" action="{{route("cart.add")}}" method="post">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$product->id}}" id="productId">
                                    <input type="hidden" value="1" name="quantity" id="add-quantity">
                                    <button type="submit" value="add-to-cart" class="px-[1rem] xs:px-[1.2rem] sm:px-[1.9rem] py-[.6rem] bg-[#efefef] hover:bg-[#f28c28] max-xs:text-center" class="add-to-cart-btn">
                                        <span class="">Add to cart</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="xl:hidden">
                <div class="flex flex-col sm:w-[30rem] xl:w-auto space-y-[1.1rem] text-[.55rem] 3xs:text-[.55rem] 2xs:text-[.75rem] xs:text-[.9rem]">
                    <div class="space-y-[1.1rem]">
                        <h1 class="font-bold drop-shadow-[0px_0px_.5px_#000000]">Delivery</h1>
                        <div class="flex items-start capitalize">
                            <button class="h-full relative" id="map-shower" onclick="mapFunction()">
                                <svg class="h-4 mr-2 mt-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path>
                                </svg>
                            </button>
                            <h1 class="break mr-[3rem] font-semibold" id="formattedAddress">Enable address permission</h1>
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
                            <h1 class="font-semibold">{{$product->merchant->name}}</h1>
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
                        @if($product->merchant->shop_address)
                            <div class="flex items-start capitalize">
                                <div class="h-full">
                                    <svg class="h-4 mr-2 mt-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path>
                                    </svg>
                                </div>
                                <h1 class="break mr-[3rem] font-semibold">{{$product->merchant->shop_address}}</h1>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="bg-white  p-[.8rem] 2xs:p-[2rem] space-y-[.3rem]">
                <h1 class="anime font-bold drop-shadow-[0px_0px_.5px_#000000] text-[.65rem] 2xs:text-[.9rem] xs:[1.1rem] sm::text-[1.2rem]">Product description</h1>
                <p class="anime text-[.55rem] 3xs:text-[.62rem] 2xs:text-[.75rem] xs:text-[.9rem] sm:text-[1rem]">
                    @if($product->description)
                        @php
                            // Assuming $product->description contains your paragraph with 5000 characters

                            // Define the maximum number of characters before splitting
                            $maxCharacters = 500;

                            // Initialize variables
                            $newParagraph = '';
                            $currentCharacterCount = 0;
                        @endphp

                        @foreach(str_split($product->description) as $character)
                            @php
                                // Append the current character to the new paragraph
                                $newParagraph .= $character;
                                $currentCharacterCount++;

                                // Check if the maximum characters limit is reached
                                if ($currentCharacterCount >= $maxCharacters) {
                                    // If the current character is a period ".", split the paragraph
                                    if ($character === '.') {
                                        // Add a line break after the period
                                        $newParagraph .= "\n";
                                        $newParagraph .= "\n";
                                        // Reset the character count
                                        $currentCharacterCount = 0;
                                    }
                                }
                            @endphp
                        @endforeach
                        @php
                            $newParagraph = preg_replace_callback('/(?:^|(?<=\. ))(\w)/', function($matches) {
                                return ucfirst($matches[0]);
                            }, $newParagraph)
                        @endphp
                        {!! nl2br(e($newParagraph)) !!}
                        

                    @else
                        No description found
                    @endif
                </p>
            </div>
            @include('frontend.product.review')
            @if($relates)
                <div class="w-full space-y-[1rem]">
                    <h1 class="anime font-bold drop-shadow-[0px_0px_.5px_#000000] text-[1rem] 2xs:text-[1.3rem] sm:text-[1.4rem]">Related Products</h1>
                    <div class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-4 gap-[2rem] xl:gap-[1.5rem] w-full">
                        @foreach($relates as $row)
                            <div class="anime bg-white p-[1rem] flex flex-col hover:shadow-[0px_2px_4px_0px_rgba(0,0,0,0.25)] group">
                                <div class="flex flex-col space-y-[1rem] group">
                                    <a href="{{ route('product.detail',$row->slug) }}" class="flex flex-col space-y-[1rem]">
                                        <div  class="h-[5rem] 3xs:h-[6.5rem] 2xs:h-[9.5rem] xs:h-[8.25rem] sm:h-[9.25rem] md:h-[11.25rem] lg:h-[6.25rem] xl:h-[8.5rem] 2xl:h-[9.25rem] w-full">
                                            <img src="/images/backend/products/{{$row->images}}" alt="" class="h-full w-full object-contain">
                                        </div>
                                        <div class="spacey-[.5rem]">
                                            <h1 class="capitalize font-bold text-[1rem] 2xs:text-[.8rem] drop-shadow-[0px_0px_.5px_#000000] tracking-wide break">{{$row->product_name}}</h1>
                                            <span class="mr-2 max-2xs:text-[.7rem] 2xs:text-[.8rem] font-semibold">Rs. {{$row->price}}/-</span>
                                        </div>
                                    </a>
                                    <div class="capitalize flex flex-col items-start font-semibold space-y-[.5rem]">
                                        
                                        <div class=" flex justify-between  w-full items-center">
                                            <div class="flex items-center">
                                                <span>4.3</span>
                                                <svg class="h-4 ml-2 text-[#F28C28]" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z"/>
                                                </svg>
                                            </div>
                                            <form class="ajax-cart-form" id="addToCart-{{ $row->id }}" action="{{route("cart.add")}}" method="post">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{$row->id}}" id="productId">
                                                <input type="hidden" value="1" name="quantity" id="add-quantity">
                                                <button type="submit" value="submit" >
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cart-shopping" class="h-6 w-6 text-[#F28C28]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path fill="currentColor" d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@include('frontend.product.map')
<script>
    const quantityCount = document.getElementById("quantity_count");
    const productBuyQuantity = document.getElementById("buy-quantity");
    const productAddQuantity = document.getElementById("add-quantity");
    const productPrice = document.getElementById('price');
    var count = 1;
    quantityCount.innerHTML = count;
    const handleIncrement = (price) => {
        if(count<=9){
            count++;
            quantityCount.innerHTML = count;
            productBuyQuantity.value = count;
            productAddQuantity.value = count;
            productPrice.innerHTML = 'Rs. ' + count*price;
        }
        else{
            count = 10;
        }
    };
    const handleDecrement = (price) => {
        if(count>=2){
            count--;
            quantityCount.innerHTML = count;
            productBuyQuantity.value = count;
            productAddQuantity.value = count;
            productPrice.innerHTML = 'Rs. ' + count*price;
        }
    };
</script>