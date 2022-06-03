<!DOCTYPE html>
<html lang="en">

<head>
    @include('NiceAdmin.Layouts.HeadStyle')
</head>

<body>

    <!-- ======= Header ======= -->
    @include('NiceAdmin.Layouts.Header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('NiceAdmin.Layouts.Sidebar')
    <!-- End Sidebar-->

    <main id="main" class="main">

        @yield('Content')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('NiceAdmin.Layouts.Footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('NiceAdmin.Layouts.Script')
    <!-- Template Main JS File -->


</body>

</html>