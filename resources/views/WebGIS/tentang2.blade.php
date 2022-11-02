@extends('WebGIS.Layouts.App')

@section('Content')

<main id="main" class="main">
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

        </div>
    </section>
    <!-- End Counts Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Keterangan Singkat Tabel dan Grafik Jalan</h2>
                <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum numquam dolorem mollitia nisi magni officia eum, quaerat maxime error magnam, et alias aliquam facilis architecto porro modi dicta accusantium inventore! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit cum vitae hic, libero explicabo aliquam inventore aperiam quam dolor deleniti deserunt soluta, fuga doloremque aspernatur laudantium blanditiis aut! Autem, quos.</p>
            </div>

        </div>
    </section><!-- End About Us Section -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <!-- DONUT CHART -->
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Donut Chart</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>


    </section><!-- End About Us Section -->

    <!-- Main content -->
    <section class="content" style="padding-left: 15%; ">
        <div class="container-fluid">
            <div class="row">

                <div id="wrapper">
                    <iframe width="720" height="445" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSpbMlxvEm-CIzIYeG0f9bDv766jGybH1Wy2kwF7Z9Dwj3KOwRtkBXZOzIP8tI08apRuIsBaeFJP85g/pubchart?oid=630718358&amp;format=interactive"></iframe>
                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                            Explorer 4.0
                                        </td>
                                        <td>Win 95+</td>
                                        <td> 4</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                            Explorer 5.0
                                        </td>
                                        <td>Win 95+</td>
                                        <td>5</td>
                                        <td>C</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </section>

    <section class="content" style="padding-left: 15%; ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Jalan Kota</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Jalan</th>
                                        <th>Kondisi</th>
                                        <th>Panjang(m)</th>
                                        <th>Status</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                            Explorer 4.0
                                        </td>
                                        <td>Win 95+</td>
                                        <td> 4</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                            Explorer 5.0
                                        </td>
                                        <td>Win 95+</td>
                                        <td>5</td>
                                        <td>C</td>
                                    </tr>
                                </tbody>
                                <!-- <tfoot>
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>
                                </tfoot> -->
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

    <section class="content" style="padding-left: 15%; ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-5">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Program Lokasi Kegiatan 2020</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Jalan</th>
                                        <th>Kondisi</th>
                                        <th>Panjang(m)</th>
                                        <th>Status</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                            Explorer 4.0
                                        </td>
                                        <td>Win 95+</td>
                                        <td> 4</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                            Explorer 5.0
                                        </td>
                                        <td>Win 95+</td>
                                        <td>5</td>
                                        <td>C</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-5">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lokasi Kegiatan TK STA 2020</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Jalan</th>
                                        <th>Kondisi</th>
                                        <th>Panjang(m)</th>
                                        <th>Status</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                            Explorer 4.0
                                        </td>
                                        <td>Win 95+</td>
                                        <td> 4</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                            Explorer 5.0
                                        </td>
                                        <td>Win 95+</td>
                                        <td>5</td>
                                        <td>C</td>
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
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <section class="section" style="padding-left: 15%; ">
        <div class="row">
            <div class="col-lg-5">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Program Lokasi Kegiatan 2021</h5>

                        <!-- Default Table -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Kondisi</th>
                                    <th scope="col">Panjang</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Brandon Jacob</td>
                                    <td>Designer</td>
                                    <td>28</td>
                                    <td>2016-05-25</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Bridie Kessler</td>
                                    <td>Developer</td>
                                    <td>35</td>
                                    <td>2014-12-05</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Ashleigh Langosh</td>
                                    <td>Finance</td>
                                    <td>45</td>
                                    <td>2011-08-12</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Angus Grady</td>
                                    <td>HR</td>
                                    <td>34</td>
                                    <td>2012-06-11</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Raheem Lehner</td>
                                    <td>Dynamic Division Officer</td>
                                    <td>47</td>
                                    <td>2011-04-19</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>

            </div>

            <div class="col-lg-5">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lokasi Kegiatan TK STA 2021</h5>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Kondisi</th>
                                    <th scope="col">Panjang</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Brandon Jacob</td>
                                    <td>Designer</td>
                                    <td>28</td>
                                    <td>2016-05-25</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Bridie Kessler</td>
                                    <td>Developer</td>
                                    <td>35</td>
                                    <td>2014-12-05</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Ashleigh Langosh</td>
                                    <td>Finance</td>
                                    <td>45</td>
                                    <td>2011-08-12</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Angus Grady</td>
                                    <td>HR</td>
                                    <td>34</td>
                                    <td>2012-06-11</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Raheem Lehner</td>
                                    <td>Dynamic Division Officer</td>
                                    <td>47</td>
                                    <td>2011-04-19</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

        <div class="container" data-aos="fade-up">

            <!-- <header class="section-header">
                <p>Other Information</p>
            </header> -->
            <!-- / row -->

            <!-- Hutan DeSssass -->
            <div class="row feature-icons" data-aos="fade-up">
                <!-- <h3>Tantangan Perhutanan Sosial Kabupaten Ketapang</h3> -->

                <div class="row">

                    <!-- <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="assetsAdmin/img/foto/ps-ktp/grafik1.PNG" class="img-fluid p-4" alt="">
                    </div>
                    <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="assetsAdmin/img/foto/ps-ktp/grafik2.PNG" class="img-fluid p-4" alt="">
                    </div> -->

                    <!-- <div class="col-lg-6 d-flex align-items-center" style="padding-top: 20px;" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assetsAdmin/img/infografis/1.png" style="width: 100%;" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 d-flex align-items-center" style="padding-top: 20px;" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assetsAdmin/img/infografis/2.png" style="width: 100%;" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 d-flex align-items-center" style="padding-top: 20px;" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assetsAdmin/img/infografis/3.png" style="width: 100%;" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 d-flex align-items-center" style="padding-top: 20px;" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assetsAdmin/img/infografis/4.png" style="width: 100%;" class="img-fluid" alt="">
                    </div> -->

                    <!-- <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assetsAdmin/img/foto/ps-ktp/grafik1.png" style="width: 100%;" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assetsAdmin/img/foto/ps-ktp/grafik2.png" style="width: 100%;" class="img-fluid" alt="">
                    </div> -->

                </div>
                <img style="text-align: justify;" src="assetsAdmin/img/infografis/mitra.png" style="width: 60%;" alt="">

            </div><!-- End Hutan Desas -->
        </div>

    </section>
    <!-- End Features Section -->


    <!-- ======= Values Secdtion ======= -->
    <!-- <section id="values" class="values">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Our Values</h2>
                <p>Mitra Yang Terlibat</p>
            </header>

            <div class="row">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="box">
                        <img src="assetsAdmin/img/foto/1.png" class="img-fluid" alt="">
                        <h3>Pemerintah</h3>
                        <p>Partners from supporting government sector and social forestry programs with Aidenvironment in Ketapang District.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                    <div class="box">
                        <img src="assetsAdmin/img/foto/2.png" class="img-fluid" alt="">
                        <h3>Perusahaan</h3>
                        <p>Supporting private sector partners and social forestry program with Aidenvironment in Ketapang District.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                    <div class="box">
                        <img src="assetsAdmin/img/foto/3.png" class="img-fluid" alt="">
                        <h3>Lembaga Swadaya Masyarakat</h3>
                        <p>Supporting CSO partners and social forestry program with Aidenvironment in Ketapang District.</p>
                    </div>
                </div>

            </div>

        </div>

    </section> -->
    <!-- End Values Section -->

    <!-- ======= Testimonials Section ======= -->

    <!-- End Testimonials Section -->

</main>
<!-- End #main -->
@endsection

@section('IndexJs')
<!-- Vendor JS Filess -->
<script src="{{ asset('assetsAdmin/vendor/purecounter/purecounter.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assetsAdmin/js/main.js') }}"></script>
@endsection