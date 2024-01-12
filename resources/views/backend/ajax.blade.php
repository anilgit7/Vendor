@if(request()->segment(1)==="admin")
    @include('backend.ajax.category_ajax')
@endif