@extends('WebGIS.Layouts.AppPetaJs')


@section('Content')
<div id="viewDiv"></div>

<!-- tambahan utk lenght and area -->
<div id="measurements" class="esri-widget">
    <!-- end tambahan utk lenght and area -->
    @endsection

    @section('IndexJs')
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
    <!-- <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script> -->

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @endsection