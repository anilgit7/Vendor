<!-- drawer component -->
<div id="add-category" class="fixed top-0 right-0 z-[10000] w-full h-screen max-w-[13rem] 2xs:max-w-[15rem] sm:max-w-[17rem] lg:max-w-xs p-4 overflow-y-auto transition-transform translate-x-full bg-white shadow-[-5px_-1px_5px_-8px_rgba(0,0,0,0.75)]" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
    <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase">New Category</h5>
    <button type="button" data-drawer-dismiss="add-category" aria-controls="add-category" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
    <form id="form_add_category" enctype="multipart/form-data">
        @csrf
        <div class="space-y-4">
            <div>
                <label for="category_name" class="block mb-2 text-sm font-medium text-gray-900">Category Name</label>
                <input type="text" id="category_name" name="category_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type category name" required>
            </div>
            <div>
                <label for="category_image" class="block mb-2 text-sm font-medium text-gray-900">Image</label>
                <input type="file" id="category_image" name="category_image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required>
            </div>
            <div class="bottom-0 left-0 flex justify-between w-full pb-4 space-x-4 md:px-4 md:absolute">
                <button type="submit" id="add_category" value="Add category" class="flex bg-[#337ab8] hover:bg-[#004a89] text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md">
                    <span class="">Save</span>
                </button>
                <button data-drawer-dismiss="add-category" aria-controls="add-category" class="inline-flex w-fit justify-center text-gray-500 items-center bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg border border-gray-200 text-sm font-medium p-4 py-1.5 hover:text-gray-900 focus:z-10y-600">
                    <svg aria-hidden="true" class="w-5 h-5 -ml-1 sm:mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    Cancel
                </button>
            </div>
        </div>
    </form>
</div>