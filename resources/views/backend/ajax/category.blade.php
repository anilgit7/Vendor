<script>
$(document).ready(function(){
    /********************************************************************************/
    /****************************** View Category ***********************************/
    /********************************************************************************/
    loadTable();
    function loadTable(){
        $.ajax({
            url: "{{ route('admin.category.view') }}",
            success : function(result){
                if(result.categories.length>0){
                    $('#category_data').html('');
                    for(let i=0; i<result.categories.length; i++){
                        $('#category_data').append(
                            `<tr class="border-b">
                                <input type="hidden" value="`+(result.categories[i]['id'])+`">
                                <td class="py-[.5rem] pr-[2rem] align-top">`+(i+1)+`</td>
                                <td class="py-[.5rem] pr-[2rem] align-top capitalize">`+(result.categories[i]["category_name"])+`</td>
                                <td class="pr-[2rem] capitalize py-[.5rem]"><img src="{{asset('images/backend/category')}}/`+(result.categories[i]["image"])+`" class="w-[4rem] object-contain"></td>
                                <td class="flex gap-[.3rem] py-[.5rem] place-content-end">
                                    <button data-category-id="`+(result.categories[i]['id'])+`" class="editCategory flex bg-blue-500 hover:bg-blue-700 text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md">
                                        <span class="">Edit</span>
                                    </button>
                                    <a href="javascript:void(0)" data-category-id="`+(result.categories[i]['id'])+`" class="deleteCategory flex bg-red-500 hover:bg-red-700 text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md">
                                        <span class="">Delete</span>
                                    </a>
                                </td>
                            </tr>`
                        );
                    }
                }
            }
        });
    }

    /********************************************************************************/
    /****************************** Add Category ************************************/
    /********************************************************************************/
    $('#form_add_category').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            url : "{{ route('admin.category.add') }}",
            type : "POST",
            data : new FormData(this),
            contentType: 'multipart/form-data',
            success : function(result){
                loadTable();
                $('#form_add_category').trigger('reset');
                if(result.status == '400')
                {
                    $('#message h1').html(result.error).show(0).delay(2500).hide(0);
                }
                else{
                    $('#message h1').html(result.message).show(0).delay(2500).hide(0);
                }
            },
            contentType : false,
            processData : false
        });
    });

    /********************************************************************************/
    /****************************** Edit Category ***********************************/
    /********************************************************************************/
    $('#category_table').on('click','.editCategory',function(e){
        e.preventDefault();
        var category_id = $(this).attr('data-category-id');
        var url = "{{ route('admin.category.edit', 'category_id') }}";
        url = url.replace('category_id', category_id);
        $('#edit-category-container').show();
        $('#edit-category-form').removeClass('translate-x-full hidden');
        $.ajax({
            url :  url,
            type : 'get',
            success : function(result){
                if(result.status == 404){
                    $('#message h1').html(result.message).show(0).delay(2500).hide(0);
                }
                else{
                    $('#edit_category_name').val(result.category['category_name']);
                    $('#edit_category_id').val(category_id);
                }
            }
        });
    });

    /********************************************************************************/
    /****************************** Update Category *********************************/
    /********************************************************************************/
    /********************************************************************************/
    $('#form_edit_category').on('submit',function(e){
        e.preventDefault();
        var category_id = $('#edit_category_id').val();
        var url = "{{ route('admin.category.update', 'category_id') }}";
        url = url.replace('category_id', category_id);
        $.ajax({
            url : url,
            type : 'post',
            data : new FormData(this),
            contentType: 'multipart/form-data',
            success : function(result){
                loadTable();
                closeForm();
                $('#form_edit_category').trigger('reset');
                $('#message h1').html(result.message).show(0).delay(2500).hide(0);
            },
            contentType : false,
            processData : false
        });
    });

    /****************************** Delete Category *********************************/
    /********************************************************************************/
    $('#category_table').on('click','.deleteCategory',function(){
        var category_id = $(this).attr('data-category-id');
        var url = "{{ route('admin.category.delete', 'category_id') }}";
        url = url.replace('category_id', category_id);
        $.ajax({
            // url: "delete-category/" + category_id,
            url: url,
            type : 'GET',
            success : function(result){
                loadTable();
                if(result.status == 404){
                    $('#message h1').html(result.error).show(0).delay(2500).hide(0);
                }
                else{
                    $('#message h1').html(result.message).show(0).delay(2500).hide(0);
                }
            }
        });
    });
});

/********************************************************************************/
/****************************** Close Function **********************************/
/********************************************************************************/
function closeForm(){
    $('#edit-category-form').addClass('translate-x-full hidden');
    $('#edit-category-container').delay(2500).hide();
}
</script>