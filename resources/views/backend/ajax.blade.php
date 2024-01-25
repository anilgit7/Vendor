@if(request()->segment(1)==="admin" && request()->segment(2)==="categories")
    @include('backend.ajax.category')
@elseif (\Route::current()->getName() == 'admin.merchant.new')
    @include('backend.ajax.merchant')
@elseif(\Route::current()->getName()=='merchant.product')
    @include('backend.ajax.product')
@endif