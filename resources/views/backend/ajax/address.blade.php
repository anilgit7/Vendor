<script>
    $('#order_table').on('click','.addressPath',function(){
        var order_id = $(this).attr('data-order-id');
        var url = "{{ route('admin.address.path', 'order_id') }}";
        url = url.replace('order_id', order_id);
        $.ajax({
            url: url,
            type : 'GET',
            success : function(result){
                // console.log(result);
                initMap(result.path, result.user);
            }
        });
    });

    function productAddressPath(product_id){
        var url = "{{ route('admin.product.address.path', 'product_id') }}";
        url = url.replace('product_id', product_id);
        $.ajax({
            url: url,
            type : 'GET',
            success : function(result){
                console.log(result);
                initMap(result.path, result.user);
            }
        });
    }
</script>
@include('backend.admin.order.map_path')