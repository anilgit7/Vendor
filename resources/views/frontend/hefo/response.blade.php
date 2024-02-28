@if(Session('success')==true)
    <script>
        toastr.success("{{ Session('message') }}");
    </script>
@endif

@if(Session('error')==true)
    <script>
        toastr.error("{{ Session('message') }}");
    </script>
@endif

@if(Session('info')==true)
    <script>
        toastr.info("{{ Session('message') }}");
    </script>
@endif

@if(Session('warning')==true)
    <script>
        toastr.warning("{{ Session('message') }}");
    </script>
@endif

<script>
    function ajax_response(response){
        if(response.success){
            toastr.success(response.message);
        }
        if(response.error){
            toastr.error(response.message);
        }
        if(response.info){
            toastr.info(response.message);
        }
        if(response.warning){
            toastr.warning(response.message);
        }
    }
</script>