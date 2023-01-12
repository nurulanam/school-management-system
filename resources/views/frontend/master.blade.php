<!DOCTYPE html>
<html lang="zxx">

@include('frontend.includes.head')

<body>

    {{-- @include('frontend.includes.preloader') --}}


    @include('frontend.includes.top_header')


    @include('frontend.includes.navbar')


    @include('frontend.includes.sidebar')


    @yield('content')


    @include('frontend.includes.footer')
    @include('frontend.includes.copyright')




    <div class="go-top">
        <i class="ri-arrow-up-s-line"></i>
        <i class="ri-arrow-up-s-line"></i>
    </div>


    @include('frontend.includes.scripts')
    <script>
        @if (Session::has('success'))

            toastr.options.closeButton = true;
            toastr.options.progressBar = true;
            toastr.success("{{session('success')}}");

        @elseif (Session::has('error'))
            toastr.options.closeButton = true;
            toastr.options.progressBar = true;
            toastr.error("{{session('error')}}");

        @elseif (Session::has('info'))
            toastr.options.closeButton = true;
            toastr.options.progressBar = true;
            toastr.info("{{session('info')}}");
        @endif
    </script>
</body>

</html>
