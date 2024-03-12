<script>
    // $(document).ready(function(){
        $('#order_table').on('click','.addressPath',function(){
        var order_id = $(this).attr('data-order-id');
        var url = "{{ route('admin.address.path', 'order_id') }}";
        url = url.replace('order_id', order_id);
        $.ajax({
            url: url,
            type : 'GET',
            success : function(result){
                if(result.status == 404){
                    $('#message h1').html(result.error).show(0).delay(2500).hide(0);
                }
                else{
                    $('#message h1').html(result.message).show(0).delay(2500).hide(0);
                    mapShow();
                    initMap();
                }
            }
        });
    });
    // });
</script>
@include('backend.admin.order.map')