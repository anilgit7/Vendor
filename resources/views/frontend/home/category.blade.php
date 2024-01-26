<div class="relative pb-[1rem] top-[-3.75rem] z-[100]">
    <div class="px-[1rem] 2xs:px-[1.5rem] sm:px-[3rem] lg:px-[5.9rem]">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-[2rem] xl:gap-[5rem] 2xl:gap-[3rem]">
            @foreach($categories as $category)
                <div class="bg-white flex flex-col items-center py-[1.5rem] px-[.85rem] space-y-[1.5rem] rounded-[.5rem] hover:shadow-[0px_4px_8px_.5px_rgba(0,0,0,0.25)]">
                    <h1 class="capitalize font-bold text-[1rem] 2xs:text-[1.2rem] drop-shadow-[0px_0px_.5px_#000000] tracking-wide break">{{$category->category_name}}</h1>
                    <a href="{{ route('product.list', $category->category_name) }}" class="flex flex-col items-center space-y-[2rem]">
                        <div class="h-[6rem] 3xs:h-[7.5rem] 2xs:h-[9.5rem] xs:h-[12.25rem] w-full">
                            <img src="/images/backend/category/{{$category->image}}" alt="" class="h-full w-full">
                        </div>
                        <div class="capitalize flex items-center drop-shadow-[0px_0px_.5px_#000000] font-semibold">
                            <span class="mr-2 max-2xs:text-[.8rem]">Shop now</span>
                            <svg class="w-3 2xs:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g data-name="19-Arrow Right"><path d="M16 0a16 16 0 1 0 16 16A16 16 0 0 0 16 0zm0 30a14 14 0 1 1 14-14 14 14 0 0 1-14 14z"/><path d="m26.71 15.29-7-7-1.42 1.42 5.3 5.29H5v2h18.59l-5.29 5.29 1.41 1.41 7-7a1 1 0 0 0 0-1.41z"/></g></svg>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>