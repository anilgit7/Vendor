<script>
    // $(document).ready(function() {
        $('.ajax-cart-form').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                success: function(response) {
                    ajax_response(response);
                    $('#header-cart').html(response.view);
                }
            });
        });
    // });
    
</script>