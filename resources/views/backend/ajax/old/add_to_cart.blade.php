<script>
$(document).ready(function(){
    function loadAdd(product_id){
        var url = "{{route('product.detail', 'product_id')}}";
        url = url.replace('product_id',product_id);
        $.ajax({
            url: url,
            success : function(result){
                $('#cartDismiss').html(
                `<form id="addToCart">
                    @csrf
                    <input type="hidden" value="{{$product->id}}" id="productId">
                    <input type="text" class="hidden" name="name" value="{{$product->product_name}}">
                    <input type="hidden" name="price" value="{{$product->price}}">
                    @auth
                        <input type="hidden" name="user_email" value="{{auth()->user()->email}}">
                        <input type="hidden" name="user_phone" value="{{auth()->user()->phone_number}}">
                    @endauth
                    <input type="hidden" value="1" name="quantity" id="quantity">
                    <input type="hidden" name="image" value="{{$product->images}}">
                    <input type="hidden" name="merchant_email" value="{{$product->merchant_email}}">
                    
                    <button type="submit" value="submit" class="px-[1rem] xs:px-[1.2rem] sm:px-[1.9rem] py-[.6rem] bg-[#efefef] hover:bg-[#f28c28] max-xs:text-center">
                        <span class="">Add to cart</span>
                    </button>
                </form>`
                );
            }
        });
    }
    $('#addToCart').on('submit',function(e){
        e.preventDefault();
        var productId = $('#productId').val();
        var url = "{{ route('product.cart','product_id') }}"
        url =  url.replace('product_id', productId);
        $.ajax({
            url: url,
            method: "post",
            data: $('#addToCart').serialize(),
            success: function(resutl){
                $('#cartDismiss').html(
                    `<button data-product-id="{{$product->id}}" class="removeCart capitalize px-[1rem] xs:px-[1.2rem] sm:px-[1.9rem] py-[.6rem] bg-[#efefef] hover:bg-[#f28c28] max-xs:text-center">
                        <span class="">remove</span>
                    </button>`
                );
            }
        });
    });

    $('#cartDismiss').on('click','.removeCart',function(){
        product_id = $(this).attr('data-product-id');
        var url = "{{ route('product.cart.delete', 'product_id') }}";
        url = url.replace('product_id',product_id);
        $.ajax({
            url : url,
            success : function(resutl){
                $('#cartDismiss').html('');
                loadAdd(product_id);
            }
        });
    });
});
</script>