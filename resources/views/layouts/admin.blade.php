<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title> @yield('title') </title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/rri-logo.png">

        @include('includes.style')
    </head>
    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            @include('includes.topbar')
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('includes.sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">

                <!-- content -->
                @yield('content')
                <!-- end content -->

                <!-- footer -->
                @include('includes.footer')
                <!-- end footer -->

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        @yield('scripts')

        @include('includes.script')
    </body>
</html>
