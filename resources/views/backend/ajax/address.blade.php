
<script>
    $('#order_table').on('click','.addressPath',function(){
        var order_id = $(this).attr('data-order-id');
        var url = "{{ route('admin.address.path', 'order_id') }}";
        url = url.replace('order_id', order_id);
        $.ajax({
            url: url,
            type : 'GET',
            success : function(result){
                console.log(result);
                initMap(result.path);
            }
        });
    });
</script>
@include('backend.admin.order.map_path')