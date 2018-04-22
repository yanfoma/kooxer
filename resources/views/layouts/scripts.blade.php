<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/ripples.min.js')}}"></script>
<script src="{{asset('js/material.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

<script src="{{asset('js/toastr.min.js')}}"  type="text/javascript" ></script>
<!--scrollPress JS BACK TO TOP-->
<script>

    @if(Session::has('success'))

        toastr.success("{{ Session::get('success') }}");

    @endif

    @if(Session::has('warning'))

        toastr.warning("{{ Session::get('warning') }}");

    @endif


    @if(Session::has('info'))

        toastr.info("{{ Session::get('info') }}");

    @endif
</script>
