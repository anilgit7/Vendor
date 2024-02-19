<div class="space-y-[1.5rem]">
    @if(!$users)
        <h1 class="text-red-700 font-bold text-[1rem] 2xs:text-[1.2rem]">No records found</h1>
    @else
        <div class="overflow-scroll scrollbar-hide">
            <table class="w-full gap-[2rem] space-x-[2rem] rounded-md" id="verified_merchant" style="text-wrap: nowrap;">
            </table>
            <div class="pb-[1.5rem]"></div>
        </div>
    @endif
</div>