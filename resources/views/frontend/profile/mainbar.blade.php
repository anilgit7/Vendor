
@if(Route::currentRouteName() == 'user.dashboard')
    @include('frontend.profile.dashboard')
@elseif(Route::currentRouteName() == 'user.order')
    @include('frontend.profile.order')
@elseif(Route::currentRouteName() == 'user.order.detail')
    @include('frontend.profile.order_detail')
@elseif(Route::currentRouteName() == 'user.setting')
    @include('frontend.profile.setting')
@endif