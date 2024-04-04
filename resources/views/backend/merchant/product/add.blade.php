<div id="add-product" class="fixed top-0 right-0 z-[10000] w-full h-screen max-w-[13rem] 2xs:max-w-[15rem] sm:max-w-[17rem] lg:max-w-xs p-4 overflow-y-auto transition-transform translate-x-full bg-white shadow-[-5px_-1px_5px_-8px_rgba(0,0,0,0.75)]" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
    <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase">New product</h5>
    <button type="button" data-drawer-dismiss="add-product" aria-controls="add-product" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
    <h1 class="text-[.8rem] text-[#444]">'*' fields are required</h1>
    <form id="form_add_product">
        @csrf
        <div class="space-y-4">
            <!-- <input type="hidden" name="merchant_email" value="{{auth()->user()->email}}"> -->
            <input type="hidden" name="merchant_id" value="{{auth()->user()->id}}">
            <!-- <input type="hidden" name="shop_name" value="{{auth()->user()->name}}"> -->
            <div>
                <label for="product_name" class="block mb-2 text-sm font-medium text-gray-900">Product Name </label>
                <input type="text" id="product_name" name="product_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type product name" required>
            </div>
            <div>
                <label for="product_price" class="block mb-2 text-sm font-medium text-gray-900">Product Price </label>
                <input type="number" id="product_price" name="product_price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Price in Rupees" required>
            </div>
            <div>
                <label for="product_category" class="block mb-2 text-sm font-medium text-gray-900">Category </label>
                <select name="product_category" id="product_category" class="w-full rounded-lg bg-gray-50 border border-gray-300 text-gray-500 text-sm focus:ring-primary-600 focus:border-primary-600 p-2">
                    @if($categories)
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" class="w-full rounded-lg bg-gray-50 border border-gray-300 text-gray-500 text-sm focus:ring-primary-600 focus:border-primary-600 p-2.5">{{$category->category_name}}</option>
                        @endforeach
                    @else
                        <option class="w-full rounded-lg bg-gray-50 border border-gray-300 text-gray-500 text-sm focus:ring-primary-600 focus:border-primary-600 p-2.5">No category available</option>
                    @endif
                </select>
            </div>
            <div>
                <label for="product_color" class="block mb-2 text-sm font-medium text-gray-900">Product Color </label>
                <input type="text" id="product_color" name="product_color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type product color" required>
            </div>
            <div>
                <label for="product_size" class="block mb-2 text-sm font-medium text-gray-900">Size Available </label>
                <div id="checkbtn" class="flex items-center space-x-4">
                    <label for="size_1" class="block mb-2 text-sm font-medium text-gray-900"><input type="checkbox" id="size_1" class="w-4 h-4 rounded-full focus:ring-0 mr-1 mb-1 text-sm font-medium text-gray-900" name="product_size[]" value="S" checked>S</label>
                    <label for="size_2" class="block mb-2 text-sm font-medium text-gray-900"><input type="checkbox" id="size_2" class="w-4 h-4 rounded-full focus:ring-0 mr-1 mb-1 text-sm font-medium text-gray-900" name="product_size[]" value="L" >L</label>
                    <label for="size_3" class="block mb-2 text-sm font-medium text-gray-900"><input type="checkbox" id="size_3" class="w-4 h-4 rounded-full focus:ring-0 mr-1 mb-1 text-sm font-medium text-gray-900" name="product_size[]" value="XL" >XL</label>
                    <label for="size_4" class="block mb-2 text-sm font-medium text-gray-900"><input type="checkbox" id="size_4" class="w-4 h-4 rounded-full focus:ring-0 mr-1 mb-1 text-sm font-medium text-gray-900" name="product_size[]" value="XXL" >XXL</label>
                </div>
            </div>
            <div class="w-full max-w-[13rem] 2xs:max-w-[15rem] sm:max-w-[17rem] lg:max-w-xs">
                <label for="product_image" class="block mb-2 text-sm font-medium text-gray-900">Upload Image</label>
                <input type="file" name="image" class="w-full rounded-lg bg-gray-50 border border-gray-300 text-gray-500 text-sm focus:ring-primary-600 focus:border-primary-600 p-2" required>
            </div>

            <div class="w-full max-w-[13rem] 2xs:max-w-[15rem] sm:max-w-[17rem] lg:max-w-xs">
                <label for="product_material" class="block mb-2 text-sm font-medium text-gray-900">Product Material </label>
                <input type="text" id="product_material" name="product_material" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Cotton,Leather,Fabric,..." required>
            </div>
            <div class="w-full max-w-[13rem] 2xs:max-w-[15rem] sm:max-w-[17rem] lg:max-w-xs">
                <label for="product_weight" class="block mb-2 text-sm font-medium text-gray-900">Weight </label>
                <input type="number" id="product_weight" name="product_weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Weight in kilogram" required>
            </div>
            <div class="w-full max-w-[13rem] 2xs:max-w-[15rem] sm:max-w-[17rem] lg:max-w-xs">
                <label for="product_brand" class="block mb-2 text-sm font-medium text-gray-900">Brand</label>
                <input type="text" id="product_brand" name="product_brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Brand name">
            </div>
            <div class="w-full max-w-[13rem] 2xs:max-w-[15rem] sm:max-w-[17rem] lg:max-w-xs">
                <label for="product_warranty" class="block mb-2 text-sm font-medium text-gray-900">Warranty</label>
                <input type="number" id="product_warrenty" name="product_warranty" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Warranty in year">
            </div>
            <div class="w-full max-w-[13rem] 2xs:max-w-[15rem] sm:max-w-[17rem] lg:max-w-xs">
                <label for="product_description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                <textarea name="description" id="product_description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" cols="30" rows="10"></textarea>
            </div>
            <div class="bottom-0 left-0 flex justify-between w-full pb-4 space-x-4 md:px-4">
                <button type="submit" id="add_product" value="Add product" class="flex bg-[#337ab8] hover:bg-[#004a89] text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md">
                    <span class="">Save</span>
                </button>
                <button data-drawer-dismiss="add-product" aria-controls="add-product" class="inline-flex w-fit justify-center text-gray-500 items-center bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg border border-gray-200 text-sm font-medium p-4 py-1.5 hover:text-gray-900 focus:z-10y-600">
                    <svg aria-hidden="true" class="w-5 h-5 -ml-1 sm:mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    Cancel
                </button>
            </div>
        </div>
    </form>
</div>