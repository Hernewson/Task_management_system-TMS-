<!doctype html>
<html lang="en">

@include('partials/_head')
@yield('title')
@include('partials/_styles')

<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">

    <div class="page-wrapper">

        @include('partials/_header')

        <div class="page-container">
            <!-- start sidebar menu -->
            @include('partials/_sidebar_container')
            <!-- end sidebar menu -->
                <!-- start page content -->

                <div class="page-content-wrapper">
                    @yield('content')
                </div>
                <!-- end page content -->
        </div>
    </div>

        @include('partials/_footer')

        @include('partials/_scripts')



</body>

</html>
