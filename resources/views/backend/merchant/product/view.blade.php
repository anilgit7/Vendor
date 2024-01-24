<div class="space-y-[1.5rem]">
    <button class="flex bg-[#337ab8] hover:bg-[#004a89] text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md" data-drawer-target="add-product" data-drawer-show="add-product" data-drawer-placement="right" aria-controls="add-product" id="createProduct">
    <span class="">Add</span>
    </button>
    @if(!$products)
        <h1 class="text-red-700 font-bold text-[1rem] 2xs:text-[1.2rem]">No records found</h1>
    @else
    <div class="overflow-scroll scrollbar-hide">
            <table class="w-full gap-[2rem] space-x-[2rem] rounded-md" id="product_table" style="text-wrap: nowrap;">
                <thead>
                    <tr class="border-b">
                        <th class="text-start pr-[2rem] pb-[.5rem]">S.N</th>
                        <th class="text-start pr-[2rem] pb-[.5rem]">Product</th>
                        <th class="text-start pr-[2rem] pb-[.5rem]">Price</th>
                        <th class="text-start pr-[2rem] pb-[.5rem]">Color</th>
                        <th class="text-start pr-[2rem] pb-[.5rem]">Category</th>
                        <th class="text-start pr-[2rem] pb-[.5rem]">Size</th>
                        <th class="text-start pr-[2rem] pb-[.5rem]">Material</th>
                        <th class="text-start pr-[2rem] pb-[.5rem]">Brand</th>
                        <th class="text-start pr-[2rem] pb-[.5rem]">Weight</th>
                        <th class="text-start pr-[2rem] pb-[.5rem]">Warranty</th>
                        <th class="text-start pr-[2rem] pb-[.5rem]">Image</th>
                        <th class="text-center pb-[.5rem]">Action</th>
                    </tr>
                </thead>
                <tbody id="product_data">
                    <tr class="border-b">
                        <td class="py-[.5rem] pr-[2rem]"></td>
                        <td class="py-[.5rem] pr-[2rem] capitalize"></td>
                        <td class="flex gap-[.3rem] py-[.5rem] place-content-end"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="flex gap-[.3rem] py-[.5rem] place-content-end">
                            <button class="editProduct flex bg-blue-500 hover:bg-blue-700 text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md">
                                <span class="">Edit</span>
                            </button>
                            <a href="javascript:void(0)" class="deleteProduct flex bg-red-500 hover:bg-red-700 text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md">
                                <span class="">Delete</span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="pb-[1.5rem]"></div>
        </div>
    @endif
</div>

@include('backend.merchant.product.add')
@include('backend.merchant.product.edit')