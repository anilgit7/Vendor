<script>
$(document).ready(function(){
    $('.searchForm').on('keyup',function(){
        var query= $(this).val();
        if(query.length != 0){
                $.ajax({
                url : "{{route('search')}}",
                data : {'search':query},
                success : function(result){
                    if(result.search.length>0){
                        $('.search-list').html('');
                        $('.search-list').addClass('bg-white');
                        for(let i=0; i<result.search.length; i++){
                            var id = (result.search[i]['id'])
                            var urls = "{{ route('product.detail','id') }}";
                            urls = urls.replace('id',id);
                            $('.search-list').append(
                                `
                                <a href="`+(urls)+`" class="text-black hover:text-[#F28C28] capitalize flex justify-between">
                                    <h1 class="px-2 truncate max-2xs:w-[55%]">`+(result.search[i]['product_name'])+`</h1>
                                    <img src="{{asset('images/backend/products')}}/`+(result.search[i]["images"])+`" class="w-[3rem] object-contain px-2">
                                </a>
                                `);
                                if(i+1==result.search.length){
                                    $('.search-list').append( ``);
                                }
                                else{
                                    $('.search-list').append( `<hr class="border-[#f3f4f6]">`);
                                }
                        }
                    }
                    else{
                        $('.search-list').html('');
                        $('.search-list').addClass('bg-white');
                        $('.search-list').append( `<h1 class="text-[#F28C28] px-2 py-2">No result found</hr>`);
                    }
                }
            });
        }
        else{
            $.ajax({
                url : "{{route('remove.search')}}",
                data : {'search':query},
                success : function(result){
                    $('.search-list').html(result);
                    $('.search-list').removeClass('bg-white');
                }
            });
        }
    });
});
</script>