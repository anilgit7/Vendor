<script>
    function sort_by(val) {
        let origin = window.location.origin;
        let url = origin + '/' + val;
        console.log(url);
        window.location = url;
    }
</script>
<div class="py-[3rem]">
    <div class="px-[1rem] 2xs:px-[1.5rem] sm:px-[3rem] lg:px-[5.9rem]">
        <div class="flex flex-col space-y-[5rem] relative">
            <div class="anime ml-auto">
                <form action="{{route('products.list',$category->slug)}}">
                    <label for="sorting" class="font-bold drop-shadow-[0px_0px_.5px_#000000]">Sort:</label>
                    <select name="sorting" id="sorting" class="ml-5 bg-[#F28C28] font-semibold rounded-[3rem] focus:ring-0 border-0" onchange="sort_by(this.value)">
                        <option value="{{$category->slug}}" class="rounded-[.8rem]" {{($sorted == 'random') ? 'selected':''}}>Random</option>
                        <option value="{{$category->slug}}?sort=a_to_z" class="rounded-[.8rem]" {{($sorted == 'a_to_z') ? 'selected':''}}>A to Z</option>
                        <option value="{{$category->slug}}?sort=z_to_a" class="rounded-[.8rem]" {{($sorted == 'z_to_a') ? 'selected':''}}>Z to A</option>
                        <option value="{{$category->slug}}?sort=price_low_to_high" class="rounded-[.8rem]" {{($sorted == 'price_low_to_high') ? 'selected':''}}>Price low to high</option>
                        <option value="{{$category->slug}}?sort=price_high_to_low" class="rounded-[.8rem]" {{($sorted == 'price_high_to_low') ? 'selected':''}}>Price high to low</option>
                    </select>
                </form>
            </div>
            <div class="flex flex-col space-y-[1rem] lg:space-y-0 lg:flex-row lg:space-x-[1rem] pb-[5rem]">
                <div class="w-full lg:w-max">
                    <h1 class="bg-[#353935] text-[#F28C28] flex items-center py-[1rem] px-[1rem] w-full">
                        <svg class="h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"></path>
                        </svg>
                        <span>Category</span>
                    </h1>
                    <hr>
                    <div id="categoryDropDowwn" class="flex bg-[#F28C28] flex flex-row flex-wrap lg:flex-nowrap lg:flex-col w-full lg:w-max">
                        @foreach($categories as $item)
                            <a href="{{ route('product.list', $item->slug) }}" class="max-lg:border-b max-lg:border-white capitalize py-[.5rem] pl-[1rem] pr-[1rem] xl:pr-[2rem] hover:text-[#F28C28] hover:bg-[#353935] {{($item->slug == $category->slug) ? 'bg-[#353935] text-[#F28C28]':''}} ">{{$item->category_name}}</a>
                            <hr class="max-lg:h-auto max-lg:w-[1px] max-lg:bg-white">
                        @endforeach
                        
                    </div>
                </div>
                <div class="w-full">
                    <div class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-4 gap-[2rem] xl:gap-[1.5rem] w-full">
                        @if(!$productlists)
                        <h1 class="anime capitalize font-bold text-[1rem] 2xs:text-[1.5rem] drop-shadow-[0px_0px_.5px_#000000] tracking-wide break">No product found</h1>
                        @else
                            @foreach($productlists as $productlist)
                                <div class="anime bg-white p-[1rem] flex flex-col hover:shadow-[0px_2px_4px_0px_rgba(0,0,0,0.25)] group">
                                    <div class="flex flex-col space-y-[1rem] group">
                                        <a href="{{ route('product.detail',$productlist->slug) }}" class="flex flex-col space-y-[1rem]">
                                            <div  class="h-[5rem] 3xs:h-[6.5rem] 2xs:h-[9.5rem] xs:h-[8.25rem] sm:h-[9.25rem] md:h-[11.25rem] lg:h-[6.25rem] xl:h-[8.5rem] 2xl:h-[9.25rem] w-full">
                                                <img src="/images/backend/products/{{$productlist->images}}" alt="" class="h-full w-full object-contain">
                                            </div>
                                            <div class="spacey-[.5rem]">
                                                <h1 class="capitalize font-bold text-[1rem] 2xs:text-[.8rem] drop-shadow-[0px_0px_.5px_#000000] tracking-wide break">{{$productlist->product_name}}</h1>
                                                <span class="mr-2 max-2xs:text-[.7rem] 2xs:text-[.8rem] font-semibold">Rs. {{$productlist->price}}/-</span>
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
                                                <form class="ajax-cart-form" id="addToCart-{{ $productlist->id }}" action="{{route("cart.add")}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{$productlist->id}}" id="productId">
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
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>