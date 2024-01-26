@if(request()->segment(1)==="admin" && request()->segment(2)==="categories")
    @include('backend.ajax.category')
@elseif (\Route::current()->getName() == 'admin.merchant.new')
    @include('backend.ajax.merchant')
@elseif(\Route::current()->getName() == 'merchant.product')
    @include('backend.ajax.product')
@elseif(\Route::current()->getName() == 'product.detail')
    @include('backend.ajax.add_to_cart')
@endif