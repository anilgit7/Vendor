<div class="space-y-[1.5rem]">
    <!-- <button class="flex bg-[#337ab8] hover:bg-[#004a89] text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md" data-drawer-target="add-category" data-drawer-show="add-category" data-drawer-placement="right" aria-controls="add-category" id="createCategory">
            <span class="">Add</span>
    </button> -->
    @if(!$users)
        <h1 class="text-red-700 font-bold text-[1rem] 2xs:text-[1.2rem]">No records found</h1>
    @else
        <div class="overflow-scroll scrollbar-hide">
            <table class="w-full gap-[2rem] space-x-[2rem] rounded-md" id="new_merchant" style="text-wrap: nowrap;">
            </table>
            <div class="pb-[1.5rem]"></div>
        </div>
    @endif
</div>

