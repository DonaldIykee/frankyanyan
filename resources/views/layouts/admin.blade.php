<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.headerLinks')
</head>

<body>

    <!-- Page Container -->
    <div class="page-container">
        <!-- Page Sidebar -->
        @include('includes.sidebar')
        <!-- /Page Sidebar -->

        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Header -->
            @include('includes.header')

            {{-- @include('includes.innerPage') --}}
            @yield('content')

        </div><!-- /Page Content -->
    </div><!-- /Page Container -->


    <!-- Javascripts -->
    @include('includes.footerlinks')

    @yield('scripts')
</body>

</html>
