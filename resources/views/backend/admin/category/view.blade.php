<div class="space-y-[1.5rem]">
    <button class="flex bg-[#337ab8] hover:bg-[#004a89] text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md" data-drawer-target="add-category" data-drawer-show="add-category" data-drawer-placement="right" aria-controls="add-category" id="createCategory">
            <span class="">Add</span>
    </button>
    @if(!$categories)
        <h1 class="text-red-700 font-bold text-[1rem] 2xs:text-[1.2rem]">No records found</h1>
    @else
        <div class="overflow-scroll scrollbar-hide">
            <table class="w-full gap-[2rem] space-x-[2rem] rounded-md" id="category_table" style="text-wrap: nowrap;">
                <thead>
                    <tr class="border-b">
                        <th class="text-start pr-[2rem] pb-[.5rem]">S.N</th>
                        <th class="text-start pr-[2rem] pb-[.5rem]">Category Name</th>
                        <th class="text-start pr-[2rem] pb-[.5rem]">Image</th>
                        <th class="text-end pb-[.5rem]">Action</th>
                    </tr>
                </thead>
                <tbody id="category_data">
                    <tr class="border-b">
                        <td class="py-[.5rem] pr-[2rem]"></td>
                        <td class="py-[.5rem] pr-[2rem] capitalize"></td>
                        <td class="flex gap-[.3rem] py-[.5rem] place-content-end">
                            <button class="editCategory flex bg-blue-500 hover:bg-blue-700 text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md">
                                <span class="">Edit</span>
                            </button>
                            <a href="javascript:void(0)" class="deleteCategory flex bg-red-500 hover:bg-red-700 text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md">
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

@include('backend.admin.category.add')
@include('backend.admin.category.edit')