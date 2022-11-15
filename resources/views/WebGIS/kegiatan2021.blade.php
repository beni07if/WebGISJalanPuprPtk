@extends('WebGIS.Layouts.App')

@section('Content')

<main id="main">

    <section id="features" class="features">
        <div class="container" data-aos="fade-up">
            <!-- Feature Tabs -->
            <div class="row feture-tabs" data-aos="fade-up">
                <div class="col-lg-12">
                    <h3>KEGIATAN 2021</h3>

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                        <li>
                            <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Pembangunan</a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab2">Rekonstruksi</a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab3">Berkala</a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab4">Trotoar</a>
                        </li>
                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab1">
                            <div class="card">
                                <div class="card-header">
                                    Tabel Data Kegiatan 2021 Bagian Pembangunan
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nomor Ruas</th>
                                                <th>Nama Ruas</th>
                                                <th>Patok Dari</th>
                                                <th>Patok Ke</th>
                                                <th>Panjang (KM)</th>
                                                <th>Lebar (M)</th>
                                                <th>Kondisi Jalan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; ?>
                                            @foreach($dataJalan as $jalan)
                                            <?php $no++ ?>
                                            <tr>
                                                <td>{{$no}}</td>
                                                <td>{{$jalan->nomor_ruas}}</td>
                                                <td>{{$jalan->nama_ruas}}</td>
                                                <td>200</td>
                                                <td>400</td>
                                                <td>0.200</td>
                                                <td>5.0</td>
                                                <td>Baik</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div><!-- End Tab 1 Content -->

                        <div class="tab-pane fade show" id="tab2">
                            <div class="card">
                                <div class="card-header">
                                    Tabel Data Kegiatan 2021 Bagian Rekonstruksi
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nomor Ruas</th>
                                                <th>Nama Ruas</th>
                                                <th>Patok Dari</th>
                                                <th>Patok Ke</th>
                                                <th>Panjang (KM)</th>
                                                <th>Lebar (M)</th>
                                                <th>Kondisi Jalan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; ?>
                                            @foreach($dataJalan as $jalan)
                                            <?php $no++ ?>
                                            <tr>
                                                <td>{{$no}}</td>
                                                <td>{{$jalan->nomor_ruas}}</td>
                                                <td>{{$jalan->nama_ruas}}</td>
                                                <td>200</td>
                                                <td>400</td>
                                                <td>0.200</td>
                                                <td>5.0</td>
                                                <td>Baik</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div><!-- End Tab 2 Content -->

                        <div class="tab-pane fade show" id="tab3">
                            <div class="card">
                                <div class="card-header">
                                    Tabel Data Kegiatan 2021 Bagian Berkala
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nomor Ruas</th>
                                                <th>Nama Ruas</th>
                                                <th>Patok Dari</th>
                                                <th>Patok Ke</th>
                                                <th>Panjang (KM)</th>
                                                <th>Lebar (M)</th>
                                                <th>Kondisi Jalan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; ?>
                                            @foreach($dataJalan as $jalan)
                                            <?php $no++ ?>
                                            <tr>
                                                <td>{{$no}}</td>
                                                <td>{{$jalan->nomor_ruas}}</td>
                                                <td>{{$jalan->nama_ruas}}</td>
                                                <td>200</td>
                                                <td>400</td>
                                                <td>0.200</td>
                                                <td>5.0</td>
                                                <td>Baik</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div><!-- End Tab 3 Content -->

                        <div class="tab-pane fade show" id="tab4">
                            <div class="card">
                                <div class="card-header">
                                    Tabel Data Kegiatan 2021 Bagian Trotoar
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nomor Ruas</th>
                                                <th>Nama Ruas</th>
                                                <th>Patok Dari</th>
                                                <th>Patok Ke</th>
                                                <th>Panjang (KM)</th>
                                                <th>Lebar (M)</th>
                                                <th>Kondisi Jalan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; ?>
                                            @foreach($dataJalan as $jalan)
                                            <?php $no++ ?>
                                            <tr>
                                                <td>{{$no}}</td>
                                                <td>{{$jalan->nomor_ruas}}</td>
                                                <td>{{$jalan->nama_ruas}}</td>
                                                <td>200</td>
                                                <td>400</td>
                                                <td>0.200</td>
                                                <td>5.0</td>
                                                <td>Baik</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div><!-- End Tab 3 Content -->

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