@extends('WebGIS.Layouts.App')

@section('Content')

<main id="main">
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

        </div>
    </section>
    <!-- End Counts Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-6">
                    <h2>Peta/Grafik</h2>
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title">Bordered Table</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Task</th>
                                        <th>Progress</th>
                                        <th style="width: 40px">Label</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Update software</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger">55%</span></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Clean database</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning" style="width: 70%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-warning">70%</span></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Cron job running</td>
                                        <td>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar bg-primary" style="width: 30%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-primary">30%</span></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Fix and squish bugs</td>
                                        <td>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar bg-success" style="width: 90%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-success">90%</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <!-- <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div> -->
                    </div>
                    <br>
                    <!-- /.card -->
                    <h2>Kondisi</h2>
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title">Condensed Full Width Table</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Task</th>
                                        <th>Progress</th>
                                        <!-- <th style="width: 40px">Label</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Baik (km)</td>
                                        <td><span class="badge bg-success">0.640</span></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Sedang (km)</td>
                                        <td><span class="badge bg-primary">98</span></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Rusak Ringan (km)</td>
                                        <td><span class="badge bg-warning"></span></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Rusak Berat (km)</td>
                                        <td><span class="badge bg-danger"></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <h2>Keterangan</h2>
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title">Bordered Table</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Task</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>No. Ruas</td>
                                        <td>Isi</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Nama Ruas</td>
                                        <td>Isi</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Panjang (km)</td>
                                        <td>Isi</td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Kecamatan</td>
                                        <td>Isi</td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Kelurahan</td>
                                        <td>Isi</td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>Koordinat Pangkal</td>
                                        <td>Isi</td>
                                    </tr>
                                    <tr>
                                        <td>7.</td>
                                        <td>Koordinat Ujung</td>
                                        <td>Isi</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <!-- <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div> -->
                    </div>
                    <br>
                    <!-- /.card -->
                    <h2>Jenis Perkerasan</h2>
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title">Striped Full Width Table</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Task</th>
                                        <th>Progress</th>
                                        <!-- <th style="width: 40px">Label</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Aspal (%)</td>
                                        <td><span class="badge bg-success">100</span></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Beton (%)</td>
                                        <td><span class="badge bg-primary"></span></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Kerikil (%)</td>
                                        <td><span class="badge bg-warning"></span></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Tanah</td>
                                        <td><span class="badge bg-danger"></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>



        </div>
    </section>
    <!-- End About Us Section -->

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