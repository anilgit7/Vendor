<script>
$(document).ready(function(){
    /********************************************************************************/
    /****************************** View Product***********************************/
    /********************************************************************************/
    loadProductTable();
    function loadProductTable(){
        $.ajax({
            url: "{{ route('merchant.product.new') }}",
            success : function(result){
                if(result.products.length>0){
                    $('#product_data').html('');
                    for(let i=0; i<result.products.length; i++){
                        $('#product_data').append(
                            `<tr class="border-b">
                                <input type="hidden"  value="`+(result.products[i]['id'])+`">
                                <td class="py-[.5rem] pr-[2rem]">`+(i+1)+`</td>
                                <td class="py-[.5rem] pr-[2rem] capitalize">`+(result.products[i]["product_name"])+`</td>
                                <td class="py-[.5rem] pr-[2rem] capitalize">`+(result.products[i]["price"])+`</td>
                                <td class="py-[.5rem] pr-[2rem] capitalize">`+(result.products[i]["color"])+`</td>
                                <td class="py-[.5rem] pr-[2rem] capitalize">`+(result.products[i]["category"])+`</td>
                                <td class="py-[.5rem] pr-[2rem] capitalize">`+(result.products[i]["size"])+`</td>
                                <td class="py-[.5rem] pr-[2rem] capitalize">`+(result.products[i]["material"])+`</td>
                                <td class="py-[.5rem] pr-[2rem] capitalize">`+(result.products[i]["brand"])+`</td>
                                <td class="py-[.5rem] pr-[2rem] capitalize">`+(result.products[i]["weight"])+`</td>
                                <td class="py-[.5rem] pr-[2rem] capitalize">`+(result.products[i]["warranty"])+`</td>
                                <td class="py-[.5rem] pr-[2rem] capitalize"><img src="{{asset('images/backend/products')}}/`+(result.products[i]["images"])+`" class="h-[2rem] w-[2rem]"></td>
                                <td class="flex gap-[.3rem] py-[.5rem] place-content-end">
                                    <button data-product-id="`+(result.products[i]['id'])+`" class="editProduct flex bg-blue-500 hover:bg-blue-700 text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md">
                                        <span class="">Edit</span>
                                    </button>
                                    <a href="javascript:void(0)" data-product-id="`+(result.products[i]['id'])+`" class="deleteProduct flex bg-red-500 hover:bg-red-700 text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md">
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
    /****************************** Add product ************************************/
    /********************************************************************************/
    $('#form_add_product').on('submit',function(e){
        e.preventDefault();
        var Formdata= new FormData(this);
        $.ajax({
            url : "{{ route('product.add') }}",
            type : "POST",
            contentType: 'multipart/form-data',
            data :Formdata,
            success : function(result){
                loadProductTable();
                closeForm();
                $('#form_add_product').trigger('reset');
                $('#message h1').html(result.message).show(0).delay(2500).hide(0);
            },
            contentType:false,
            processData:false
        });
    });
    /****************************** Delete product *********************************/
    /********************************************************************************/
    $('#product_table').on('click','.deleteProduct',function(){
        var product_id = $(this).attr('data-product-id');
        var url = "{{ route('product.delete', 'product_id') }}";
        url = url.replace('product_id', product_id);
        $.ajax({
            // url: "delete-product/" + product_id,
            url: url,
            type : 'GET',
            success : function(result){
                loadProductTable();
                if(result.status == 404){
                    $('#message h1').html(result.error).show(0).delay(2500).hide(0);
                }
                else{
                    $('#message h1').html(result.message).show(0).delay(2500).hide(0);
                }
            }
        });
    });

    /********************************************************************************/
    /****************************** Edit product ***********************************/
    /********************************************************************************/
    $('#product_table').on('click','.editProduct',function(e){
        e.preventDefault();
        var product_id = $(this).attr('data-product-id');
        var url = "{{ route('product.edit', 'product_id') }}";
        url = url.replace('product_id', product_id);
        $('#edit-product-container').show();
        $('#edit-product-form').removeClass('translate-x-full hidden');
        $.ajax({
            url :  url,
            type : 'get',
            success : function(result){
                if(result.status == 404){
                    $('#message h1').html(result.message).show(0).delay(2500).hide(0);
                }
                else{
                    $('#edit_product_name').val(result.product['product_name']);
                    $('#edit_product_price').val(result.product['price']);
                    $('#edit_product_category').val(result.product['category']);
                    $('#edit_product_color').val(result.product['color']);
                    $('#edit_product_size').val(result.product['size']);
                    $('#edit_product_image').val(result.product['image']);
                    $('#edit_product_material').val(result.product['material']);
                    $('#edit_product_weight').val(result.product['weight']);
                    $('#edit_product_brand').val(result.product['brand']);
                    $('#edit_product_warranty').val(result.product['warranty']);
                    $('#edit_product_id').val(product_id);
                }
            }
        });
    });
    /********************************************************************************/
    /****************************** Update product *********************************/
    /********************************************************************************/
    /********************************************************************************/
    $('#form_edit_product').on('submit',function(e){
        e.preventDefault();
        var product_id = $('#edit_product_id').val();
        var url = "{{ route('product.update', 'product_id') }}";
        url = url.replace('product_id', product_id);
        $.ajax({
            url : url,
            type : 'POST',
            contentType: 'multipart/form-data',
            data : new FormData(this),
            success : function(result){
                loadProductTable();
                closeForm();
                $('#form_edit_product').trigger('reset');
                $('#message h1').html(result.message).show(0).delay(2500).hide(0);
            },
            contentType:false,
            processData:false
        });
    });
});
/********************************************************************************/
/****************************** Close Function **********************************/
/********************************************************************************/
function closeForm(){
    $('#edit-product-form').addClass('translate-x-full hidden');
    $('#edit-product-container').delay(2500).hide();
}
</script>