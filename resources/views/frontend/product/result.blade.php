<div class="py-[3rem]">
    <div class="px-[1rem] 2xs:px-[1.5rem] sm:px-[3rem] lg:px-[5.9rem]">
        <div class="flex flex-col space-y-[5rem] relative">
            <div class="bg-[]">
                <h1 class="font-bold drop-shadow-[0px_0px_.5px_#000000] text-[1.2rem]">Result : {{$searches->count()}} items found for "{{$search_name}}"</h1>
            </div>
            <div class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 2xl:grid-cols-5 gap-[2rem] xl:gap-[1.5rem] w-full">
                @foreach($searches as $search)
                    <div class="bg-white p-[1rem] flex flex-col hover:shadow-[0px_2px_4px_0px_rgba(0,0,0,0.25)] group">
                        <div class="flex flex-col space-y-[1rem] group">
                            <a href="{{ route('product.detail',$search->id) }}" class="flex flex-col space-y-[1rem]">
                                <div  class="h-[5rem] 3xs:h-[6.5rem] 2xs:h-[9.5rem] xs:h-[8.25rem] sm:h-[9.25rem] md:h-[11.25rem] lg:h-[6.25rem] xl:h-[8.5rem] 2xl:h-[9.25rem] w-full">
                                    <img src="/images/backend/products/{{$search->images}}" alt="" class="h-full w-full object-fill group-hover:object-cover lg:object-cover">
                                </div>
                                <div class="spacey-[.5rem]">
                                    <h1 class="capitalize font-bold text-[1rem] 2xs:text-[.8rem] drop-shadow-[0px_0px_.5px_#000000] tracking-wide break">{{$search->product_name}}</h1>
                                    <span class="mr-2 max-2xs:text-[.7rem] 2xs:text-[.8rem] font-semibold">{{$search->price}}</span>
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
                                    <form action="{{route('product.cart',$search->id)}}" method="post">
                                        @csrf
                                        <input type="text" class="hidden" name="name" value="{{$search->product_name}}">
                                        <input type="hidden" name="price" value="{{$search->price}}">
                                        @auth
                                            <input type="hidden" name="user_email" value="{{auth()->user()->email}}">
                                            <input type="hidden" name="user_phone" value="{{auth()->user()->phone_number}}">
                                        @endauth
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="image" value="{{$search->images}}">
                                        <input type="hidden" name="merchant_email" value="{{$search->merchant_email}}">
                                        
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
    </div>
</div>