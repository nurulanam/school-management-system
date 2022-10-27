<!DOCTYPE html>
<html lang="zxx">

@include('frontend.includes.head')

<body>

    @include('frontend.includes.preloader')


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
</body>

</html>
