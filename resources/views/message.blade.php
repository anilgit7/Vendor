@if (Session::has('message'))
    <div class="fadingMessage bg-[#ec0000] text-white px-[1rem] py-[.3rem] fixed top-[2rem] right-[1rem] z-[10000000]">
        <h1 class="capitalize:first">{{ session('message') }}</h1>
    </div>
@endif
@if (Session::has('error'))
    <div class="fadingMessage bg-[#ec0000] text-white px-[1rem] py-[.3rem] fixed top-[2rem] right-[1rem] z-[10000000]">
        <h1 class="capitalize:first">{{ session('error') }}</h1>
    </div>
@endif
<script>
    window.onload = function() {
        $('.fadingMessage').delay(1000).hide(500); 
    }
</script> 