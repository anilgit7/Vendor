<script>
    function deleteCustomer(id){
        let url = "{{ route('admin.customer.delete', 'id') }}";
        url = url.replace("id", id);
        var customerRow = '#customer-'+id;
        $.ajax({
            url : url,
            success : function(result){
                $(customerRow).remove();
                if(result.status == '400')
                {
                    $('#message h1').html(result.error).show(0).delay(2500).hide(0);
                }
                else{
                    $('#message h1').html(result.message).show(0).delay(2500).hide(0);
                }
            }
        });
    }
</script>