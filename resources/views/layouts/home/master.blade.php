<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.home.head')
</head>

<body>

    <!-- Begin page -->
    @yield('container')
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/metismenu.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/js/waves.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>

</body>

</html>
