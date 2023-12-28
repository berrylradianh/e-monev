<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.dashboard.head')
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        @include('layouts.dashboard.navbar')
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('layouts.dashboard.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        @yield('container')
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
        <footer class="footer">
            <!-- © 2023 <span class="d-none d-sm-inline-block"> - E-Monev <i class="mdi mdi-heart text-danger"></i> by Anggraina Diastri</span>. -->
            © 2023 <span class="d-none d-sm-inline-block"> - Rumah Sakit Petrokimia Gresik</span>
        </footer>
    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/metismenu.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/js/waves.min.js')}}"></script>

    <!--Morris Chart-->
    <script src="{{asset('assets/plugins/morris/morris.min.js')}}"></script>
    <script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>

    <script src="{{asset('assets/pages/dashboard.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</body>

</html>
