<!doctype html>
<html lang="en">

    @include('partials/_head')
    @include('partials/_styles')
    <body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">

    <div class="page-wrapper">

        @include('partials/_header')



        @yield('content')

        @include('partials/_footer')


        @include('partials/_scripts')

    </div>

</body>
</html>
