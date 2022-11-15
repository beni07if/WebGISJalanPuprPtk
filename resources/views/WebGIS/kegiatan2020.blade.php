@extends('WebGIS.Layouts.App')

@section('Content')

<main id="main">

    <section id="features" class="features">
        <div class="container" data-aos="fade-up">
            <!-- Feature Tabs -->
            <div class="row feture-tabs" data-aos="fade-up">
                <div class="col-lg-12">
                    <h3>KEGIATAN 2020</h3>

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                        <li>
                            <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Pembangunan</a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab2">Peningkatan</a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab3">Pemeliharaan</a>
                        </li>
                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab1">
                            <div class="card">
                                <div class="card-header">
                                    Tabel Data Kegiatan 2020 Bagian Pembangunan
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Pekerjaan</th>
                                                <th>Rincian Sub Kegiatan</th>
                                                <th>PD</th>
                                                <th>Kecamatan</th>
                                                <th>PAGU Dana (Rp)</th>
                                                <th>Sumber Dana (Rp)</th>
                                                <th>Proses Lelang</th>
                                                <th>Jenis Pekerjaan</th>
                                                <th>Nomor Kontrak</th>
                                                <th>Tgl Kontrak & Akhir Kontrak</th>
                                                <th>PJG Penanganan Kontrak (M)</th>
                                                <th>PJG Penanganan Kontrak ADD (M)</th>
                                                <th>Lebar Penanganan Kontrak ADD (M)</th>
                                                <th>Penyedia Jasa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; ?>
                                            @foreach($dataJalan as $jalan)
                                            <?php $no++ ?>
                                            <tr>
                                                <td>{{$no}}</td>
                                                <td>Test</td>
                                                <td>Testing</td>
                                                <td>2811</td>
                                                <td>Pontianak Selatan</td>
                                                <td>Rp. 400.000.000</td>
                                                <td>-</td>
                                                <td>Tender</td>
                                                <td>Beton K50</td>
                                                <td>fkasjflasjfasl</td>
                                                <td>4 Juni - 3 mei</td>
                                                <td>245</td>
                                                <td>-</td>
                                                <td>11.00</td>
                                                <td>PT Okesip</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div><!-- End Tab 1 Content -->

                    </div>

                </div>

            </div><!-- End Feature Tabs -->
        </div>

    </section>

</main>
<!-- End #main -->
@endsection

@section('IndexJs')
<!-- Vendor JS Filess -->
<script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

@endsection