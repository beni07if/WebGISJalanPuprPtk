@extends('WebGIS.Layouts.App')

@section('Content')

<main id="main">
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

        </div>
    </section>
    <!-- End Counts Section -->


    <!-- lll  -->
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-4">
                    <!-- /.card -->
                    <!-- <h2>Kondisi</h2> -->
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title">Condensed Full Width Table</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($parentJalanUniq as $jalan)
                                    <tr>
                                        <td>Nomor Ruas</td>
                                        <td><span class="badge bg-success">{{$jalan->nomor_ruas}}</span></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Ruas</td>
                                        <td><span>{{$jalan->nama_ruas}}</span></td>
                                    </tr>
                                    <tr>
                                        <td>Provinsi</td>
                                        <td><span>{{$jalan->provinsi}}</span></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-8">
                    <!-- <h2>Keterangan</h2>     -->
                    <div class="card">
                        <div class="card-header">
                            <!-- <h3 class="card-title">Kondisi Jalan Detail</h3> -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example4" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Patok Dari</th>
                                        <th>Patok Ke</th>
                                        <th>Panjang (KM)</th>
                                        <th>Lebar (M)</th>
                                        <th>Kondisi Jalan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0; ?>
                                    @foreach($parentJalan as $jalans)
                                    @foreach($jalans->Childjalan as $jalan)
                                    <?php $no++; ?>
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$jalan->patok_dari}}</td>
                                        <td>{{$jalan->patok_ke}}</td>
                                        <td>{{$jalan->panjang}}</td>
                                        <td>{{$jalan->lebar}}</td>
                                        <td>{{$jalan->kondisi_jalan}}</td>
                                    </tr>
                                    @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.col -->
            </div>



        </div>
    </section>
    <!-- End About Us Section -->
    <!-- lll  -->

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