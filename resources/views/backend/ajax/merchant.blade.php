<script>
$(document).ready(function(){
    /*******************************************************************************************/
    /****************************** View Unverified Merchant ***********************************/
    /*******************************************************************************************/
    loadUnverfied();
    function loadUnverfied(){
        $.ajax({
            url : "{{ route('admin.merchant.new.list') }}",
            success : function(result){
                if(result.users.length>0){
                    $('#new_merchant').html('');
                    $('#new_merchant').html(
                        `<tr class="border-b">
                            <th class="text-start pr-[2rem] pb-[.5rem]">S.N</th>
                            <th class="text-start pr-[2rem] pb-[.5rem]">Merchant Name</th>
                            <th class="text-start pr-[2rem] pb-[.5rem]">Status</th>
                            <th class="text-start pr-[2rem] pb-[.5rem]">Email</th>
                            <th class="text-start pr-[2rem] pb-[.5rem]">Phone Number</th>
                            <th class="text-end pb-[.5rem]">Action</th>
                        </tr>`
                    );
                    for(let i=0; i<result.users.length; i++){
                        $('#new_merchant').append(
                            `<tr class="border-b">
                                <input type="hidden"  value="`+(result.users[i]['id'])+`">
                                <td class="py-[.5rem] pr-[2rem]">`+(i+1)+`</td>
                                <td class="py-[.5rem] pr-[2rem] capitalize">`+(result.users[i]["name"])+`</td>
                                <td class="py-[.5rem] pr-[2rem] capitalize">
                                    <select name="status" class="statusChange text-[#374151] text-[.7rem] xs:text-[.9rem] font-semibold border-[#d1d5db] rounded-[.4rem] py-[.15rem] xs:py-[.25rem] shadow-sm pr-[1.55rem] xs:pr-[1.75rem] mr-[.25rem] w-fit" data-token="{{ csrf_token() }}" data-merchant-id="`+(result.users[i]['id'])+`">
                                        <option value="`+(result.users[i]['status'])+`" selected>`+(result.users[i]['status'])+`</option>
                                        <option value="verified">verified</option>
                                        <option value="rejected">rejected</option>
                                    </select>
                                </td>
                                <td class="py-[.5rem] pr-[2rem]">`+(result.users[i]["email"])+`</td>
                                <td class="py-[.5rem] pr-[2rem] capitalize">`+(result.users[i]["phone_number"])+`</td>
                                <td class="flex gap-[.3rem] py-[.5rem] place-content-end">
                                    <a href="javascript:void(0)" data-merchant-id="`+(result.users[i]['id'])+`" class="delete flex bg-red-500 hover:bg-red-700 text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md">
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

    $('#new_merchant').on('click','.delete',function(){
        var user_id = $(this).attr('data-merchant-id');
        var url = "{{ route('admin.merchant.new.delete','user_id') }}";
        url = url.replace('user_id',user_id);
        $.ajax({
            url : url,
            success : function(result){
                loadUnverfied();
                if(result.status == 404){
                    $('#message h1').html(result.error).show(0).delay(2500).hide(0);
                }
                else{
                    $('#message h1').html(result.message).show(0).delay(2500).hide(0);
                }
            }
        });
    });

    $('#new_merchant').on('change','.statusChange',function(){
        var user_id = $(this).attr('data-merchant-id');
        var url = "{{ route('admin.merchant.new.update','user_id') }}";
        url = url.replace('user_id',user_id);
        $.ajax({
            url : url,
            type : "POST",
            data : { 
                _token : $(this).data('token'),  //"_token" is a built-in key property of ajax
                status : $(this).val() ,          //"status" is a programmer built key
            },
            success : function(result){
                loadUnverfied();
                if(result.status == 404){
                    $('#message h1').html(result.erro).show(0).delay(2500).hide(0);
                }
                else{
                    $('#message h1').html(result.message).show(0).delay(2500).hide(0);
                }
            }
        });
    });
});
</script>