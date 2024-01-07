<script>
$(document).ready(function(){
    /********************************************************************************/
    /****************************** View Category ***********************************/
    /********************************************************************************/
    loadTable();
    function loadTable(){
        $.ajax({
            url: 'view-categories',
            success : function(result){
                if(result.categories.length>0){
                    $('tbody').html('');
                    for(let i=0; i<result.categories.length; i++){
                        $('tbody').append(
                            `<tr class="border-b">
                                <td class="py-[.5rem] pr-[2rem]">`+(i+1)+`</td>
                                <td class="py-[.5rem] pr-[2rem] capitalize">`+(result.categories[i]["category_name"])+`</td>
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
            url : 'add-category',
            type : "POST",
            data : $('#form_add_category').serialize(),
            success : function(result){
                loadTable();
                $('#form_add_category').trigger('reset');
                $('#message h1').html(result.message).show(0).delay(2500).hide(0);
            }
        });
    });

    /********************************************************************************/
    /****************************** Edit Category ***********************************/
    /********************************************************************************/
    $('#category_table').on('click','.editCategory',function(e){
        e.preventDefault();
        var category_id = $(this).attr('data-category-id');
        $('#edit-category-container').show();
        $('#edit-category-form').removeClass('translate-x-full hidden');
        $.ajax({
            url : 'edit-category/' + category_id,
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
        $.ajax({
            url : "update-category/" + category_id,
            type : 'post',
            data : $('#form_edit_category').serialize(),
            success : function(result){
                loadTable();
                closeForm();
                $('#form_edit_category').trigger('reset');
                $('#message h1').html(result.message).show(0).delay(2500).hide(0);
            }
        });
    });

    /****************************** Delete Category *********************************/
    /********************************************************************************/
    $('#category_table').on('click','.deleteCategory',function(){
        var id = $(this).attr('data-category-id');
        var obj = $(this);
        $.ajax({
            url: "delete-category/" + id,
            type : 'GET',
            success : function(result){
                $(obj).parent().parent().remove();
                $('#message h1').html(result.message).show(0).delay(2500).hide(0);
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