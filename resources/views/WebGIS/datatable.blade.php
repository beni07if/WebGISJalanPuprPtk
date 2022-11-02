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

    <!-- Main content -->
    <section class="content">
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
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                            Explorer 5.5
                                        </td>
                                        <td>Win 95+</td>
                                        <td>5.5</td>
                                        <td>A</td>
                                    </tr>
                                    <tr>
                                        <td>Other browsers</td>
                                        <td>All others</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>U</td>
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

    <section class="section" style="padding-left: 2%;">
        <!-- <h3>Tabel</h3> -->
        <div class="row">
            <div class="col-lg-5">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jalan Kota</h5>
                        <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Jalan</th>
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
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section" style="padding-left: 10%; ">
        <div class="row">
            <div class="col-lg-5">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Default Table</h5>

                        <!-- Default Table -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Start Date</th>
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
                        <h5 class="card-title">Table with stripped rows</h5>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Start Date</th>
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
                        <img src="assets/img/foto/ps-ktp/grafik1.PNG" class="img-fluid p-4" alt="">
                    </div>
                    <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/img/foto/ps-ktp/grafik2.PNG" class="img-fluid p-4" alt="">
                    </div> -->

                    <!-- <div class="col-lg-6 d-flex align-items-center" style="padding-top: 20px;" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/infografis/1.png" style="width: 100%;" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 d-flex align-items-center" style="padding-top: 20px;" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/infografis/2.png" style="width: 100%;" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 d-flex align-items-center" style="padding-top: 20px;" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/infografis/3.png" style="width: 100%;" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 d-flex align-items-center" style="padding-top: 20px;" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/infografis/4.png" style="width: 100%;" class="img-fluid" alt="">
                    </div> -->

                    <!-- <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/foto/ps-ktp/grafik1.png" style="width: 100%;" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/foto/ps-ktp/grafik2.png" style="width: 100%;" class="img-fluid" alt="">
                    </div> -->

                </div>
                <img style="text-align: justify;" src="assets/img/infografis/mitra.png" style="width: 60%;" alt="">

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
                        <img src="assets/img/foto/1.png" class="img-fluid" alt="">
                        <h3>Pemerintah</h3>
                        <p>Partners from supporting government sector and social forestry programs with Aidenvironment in Ketapang District.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                    <div class="box">
                        <img src="assets/img/foto/2.png" class="img-fluid" alt="">
                        <h3>Perusahaan</h3>
                        <p>Supporting private sector partners and social forestry program with Aidenvironment in Ketapang District.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                    <div class="box">
                        <img src="assets/img/foto/3.png" class="img-fluid" alt="">
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