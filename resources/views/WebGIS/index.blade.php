@extends('WebGIS.Layouts.App')

@section('Content')
<!-- ======= Hero SectisonSs ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">WebGIS PS Ketapang</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Website penyedia persebaran Perhutanan Sosial (HD dan HKm) di Kabupaten Ketapang..</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <!-- <a href="{{ route('peta2') }}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Jelajah Peta</span>
                            <i class="bi bi-arrow-right"></i>
                        </a> -->
                        <a href="assets/img/video/video-psktp.mp4" target="_blank" class="glightbox btn-watch-video btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center"><i class="bi bi-play-circle"></i><span>Video Singkat PS Ketapang</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="assets/img/foto/ps-ktp/peta-indonesia-update.png" class="img-fluid" alt="">
            </div>
            <!-- <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1>Better Solutions For Your Business</h1>
                <h2>We are team of talented designers making websites with Bootstrap</h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    <a href="assets/img/video/video-psktp.mp4" target="_blank" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
            </div> -->
        </div>
    </div>

</section><!-- End Hersosss -->

<main id="main">
    <!-- ======= Video ssection ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <!-- <h2>Contact</h2> -->
                <!-- <p>Video Singkat PS Ketapang</p> -->
            </header>

            <!-- <video autoplay loop muted playsinline>
                <source src="assets/img/video/sicomel.mp4" type="video/mp4" />
            </video> -->

            <!-- <video controls>
                <source src="assets/img/video/video-psktp.mp4" type="video/mp4" />
                Browsermu tidak mendukung tag ini, upgrade donk!
            </video> -->

        </div>
    </section>
    <!-- End Video section -->

    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <!-- <h2>Contact</h2> -->
                <p>Skema Perhutanan Sosial Ketapang</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext" style="color: #15be56;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hutan Desa</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hutan Kemasyarakatan</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext" style="color: #15be56;"></i>
                        <div>
                            <span>PIAPS</span>
                            <p>Peta Indikatif Areal Perhutanan Sosial</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Values Section ======= -->
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
                        <h3>Goverment</h3>
                        <p>Partners from supporting government sector and social forestry programs with Aidenvironment in Ketapang District.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                    <div class="box">
                        <img src="assets/img/foto/2.png" class="img-fluid" alt="">
                        <h3>Private Sektor</h3>
                        <p>Supporting private sector partners and social forestry program with Aidenvironment in Ketapang District.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                    <div class="box">
                        <img src="assets/img/foto/3.png" class="img-fluid" alt="">
                        <h3>Civil Society Organitation</h3>
                        <p>Supporting CSO partners and social forestry program with Aidenvironment in Ketapang District.</p>
                    </div>
                </div>

            </div>

        </div>

    </section> -->
    <!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
    <!-- <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-headset" style="color: #15be56;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-people" style="color: #bb0852;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hard Workers</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section> -->
    <!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

        <div class="container" data-aos="fade-up">

            <!-- <header class="section-header">
                <p>Other Information</p>
            </header>

            <div class="row">

                <div class="col-lg-6">
                    <img src="assets/img/features.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                    <div class="row align-self-center gy-4">

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Eos aspernatur rem</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Facilis neque ipsa</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Volup amet voluptas</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Rerum omnis sint</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Alias possimus</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Repellendus mollitia</h3>
                            </div>
                        </div>

                    </div>
                </div>

            </div> -->
            <!-- / row -->

            <!-- Feature Tabs -->
            <div class="row feture-tabs" data-aos="fade-up">
                <div class="col-lg-6">
                    <h3>Tentang Perhutanan Sosial (PS)</h3>

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                        <li>
                            <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Perhutanan Sosial</a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab2">Skema PS</a>
                        </li>
                        <!-- <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab3">Corrupti</a>
                        </li> -->
                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab1">
                            <p style="text-align: justify;">Perhutanan sosial (PS) adalah sistem pengelolaan hutan lestari yang dilaksanakan dalam
                                kawasan hutan negara atau hutan hak/hutan adat yang dilaksanakan oleh masyarakat
                                setempat atau masyarakat hukum adat sebagai pelaku utama untuk meningkatkan
                                kesejahteraannya, keseimbangan lingkungan dan dinamika sosial budaya dalam bentuk Hutan
                                Desa, Hutan Kemasyarakatan, Hutan Tanaman Rakyat, Hutan Rakyat, Hutan Adat, dan
                                Kemitraan Kehutanan. Sampai dengan 25 Januari 2022, PS sudah menjangkau luasan 4,9 juta hektar, dari total alokasi 12,7 juta hektar. Jumlah persetujuan yang sudah dikeluarkan oleh Kementerian LHK menaungi lebih dari 1 juta KK (Dewi, 2022).
                            </p>
                            <h4>Dokumen Terkait Perhutanan Sosial</h4>
                            <div class="col-lg-12 mt-5 mt-lg-0 d-flex">
                                <div class="row align-self-center gy-4">
                                    <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                        <div class="feature-box d-flex align-items-center">
                                            <i class="bi bi-check"></i>
                                            <a href="https://jdih.maritim.go.id/en/peraturan-menteri-lingkungan-hidup-dan-kehutanan-no-9-tahun-2021" target="_blank">
                                                <h4>PermenLHK No.9 Tahun 2021</h4>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                        <div class="feature-box d-flex align-items-center">
                                            <i class="bi bi-check"></i>
                                            <a href="https://jdih.setkab.go.id/PUUdoc/176365/PP_Nomor_23_Tahun_2021.pdf" target="_blank">
                                                <h4>PP No. 23 Tahun 2021</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <h4 style="padding-top: 50px;">Policy Brief</h4>
                                    <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                        <div class="feature-box d-flex align-items-center">
                                            <i class="bi bi-check"></i>
                                            <a href="https://drive.google.com/file/d/1910ShsJZ7MzndhRweBFmThgGrGp6hIKv/view?usp=sharing" target="_blank">
                                                <h4>Peningkatan Ekonomi Masyarakat Melalui Regulasi Pengelolaan Komoditas</h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Tab 1 Content -->

                        <div class="tab-pane fade show" id="tab2">
                            <p style="text-align: justify;">Program Perhutanan Sosial memiliki berbagai skema yang memiliki inti yang masih sama. Skema yang
                                diusung dalam program ini adalah Hutan Desa (HD), Hutan Kemasyarakatan (HKm), Hutan
                                Tanaman Rakyat (HTR/IPHPS), Hutan Adat (HA), dan Kemitraan Kehutanan.</p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><a href="https://drive.google.com/file/d/1qno5GkZgBmKIKiHnZfBLRDqmd8Nu_Fw_/view?usp=sharing" target="_blank">Hutan Desa (HD)</a> </h4>
                            </div>
                            <p style="text-align: justify;">Hutan Desa (HD) adalah hutan negara yang dalam pengelolaannya dilakukan oleh
                                lembaga desa dengan tujuan untuk menyejahterakan suatu desa.</p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><a href="https://drive.google.com/file/d/10vyQldgXMVw5u051gVFn3xQDcixjBlVM/view?usp=sharing" target="_blank">Hutan Kemasyarakatan (HKm)</a> </h4>
                            </div>
                            <p style="text-align: justify;">Hutan Kemasyarakatan (HKm) adalah hutan negara yang mana pengelolaannya dilakukan
                                oleh masyarakat dengan tujuan untuk memberdayakan masyarakat sekitar agar tercipta
                                kesejahteraan.</p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><a href="https://drive.google.com/file/d/1OUgdB72ngEaoK_8GukW9tnbMMqaKLeJV/view?usp=sharing" target="_blank">Hutan Tanaman Rakyat (HTR)</a> </h4>
                            </div>
                            <p style="text-align: justify;">Hutan Tanaman Rakyat (HTR) adalah hutan tanaman pada hutan produksi yang dibangun
                                oleh kelompok masyarakat untuk meningkatkan potensi dan kualitas hutan produksi dengan
                                menerapkan sistem silvikultur untuk menjamin kelestarian hutan.
                            </p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><a href="https://drive.google.com/file/d/1mhrymEfs-yPwk2bxiDGRAoENnNkPfnt_/view?usp=sharing" target="_blank">Hutan Adat (HA)</a> </h4>
                            </div>
                            <p style="text-align: justify;">Hutan adat adalah hutan yang dimiliki oleh masyarakat adat yang sebelumnya merupakan
                                hutan negara ataupun bukan hutan negara
                            </p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><a href="https://www.cifor.org/publications/pdf_files/Books/BFirdaus1801.pdf" target="_blank">Kemitraan Kehutanan (KK)</a> </h4>
                            </div>
                            <p style="text-align: justify;">Kemitraan kehutanan (KK) adalah bentuk kerja sama antara masyarakat dengan pihak tertentu yang memiliki/memegang hak pengelolaan hutan/hak pengusahaan hutan/hak pemanfaatan hutan maupun pemegang izin pinjam pakai kawasan hutan/izin usaha industri hasil hutan.
                                Misalnya suatu daerah dimana ada perusahaan hutan tanaman industri bentuk kemitraannya dapat berupa kerja sama menampung kayu hasil tanaman warga untuk dibantu dipasarkan, atau bisa juga bentuk kerja samanya menjadikan masyarakat sebagai tenaga tanam tanaman tertentu yang menjadi komoditas perusahaan pemegang hak kelola ataupun izin atas kawasan hutan tersebut.
                            </p>
                        </div><!-- End Tab 2 Content -->

                        <!-- <div class="tab-pane fade show" id="tab3">
                            <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                            </div>
                            <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4>Incidunt non veritatis illum ea ut nisi</h4>
                            </div>
                            <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
                        </div> -->
                        <!-- End Tab 3 Content -->

                    </div>

                </div>

                <div class="col-lg-6">
                    <img src="assets/img/foto/ps-ktp/skema-ps.png" class="img-fluid" alt="">
                </div>

            </div><!-- End Feature Tabs -->

            <!-- Feature Icons -->
            <!-- <div class="row feature-icons" data-aos="fade-up">
                <h3>Other Information</h3>

                <div class="row">

                    <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/img/features-3.png" class="img-fluid p-4" alt="">
                    </div>

                    <div class="col-xl-8 d-flex content">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <i class="ri-line-chart-line"></i>
                                <div>
                                    <h4>Corporis voluptates sit</h4>
                                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="ri-stack-line"></i>
                                <div>
                                    <h4>Ullamco laboris nisi</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="ri-brush-4-line"></i>
                                <div>
                                    <h4>Labore consequatur</h4>
                                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="ri-magic-line"></i>
                                <div>
                                    <h4>Beatae veritatis</h4>
                                    <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <i class="ri-command-line"></i>
                                <div>
                                    <h4>Molestiae dolor</h4>
                                    <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                <i class="ri-radar-line"></i>
                                <div>
                                    <h4>Explicabo consectetur</h4>
                                    <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div> -->
            <!-- End Feature Icons -->
        </div>

    </section>
    <!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <!-- <section id="services" class="services">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Services</h2>
                <p>Veritatis et dolores facere numquam et praesentium</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box blue">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Nesciunt Mete</h3>
                        <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box orange">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Eosle Commodi</h3>
                        <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-box green">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Ledo Markt</h3>
                        <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-box red">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Asperiores Commodi</h3>
                        <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-box purple">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Velit Doloremque.</h3>
                        <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="service-box pink">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Dolori Architecto</h3>
                        <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>

        </div>

    </section> -->
    <!-- End Services Section -->

    <!-- ======= F.A.Q Section ======= -->
    <!-- <section id="faq" class="faq">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>Other Information</p>
            </header>

            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion accordion-flush" id="faqlist1">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                    Non consectetur a erat nam at lectus urna duis?
                                </button>
                            </h2>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                                </button>
                            </h2>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                                </button>
                            </h2>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">

                    <div class="accordion accordion-flush" id="faqlist2">

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                                </button>
                            </h2>
                            <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body">
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                                </button>
                            </h2>
                            <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body">
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                                    Varius vel pharetra vel turpis nunc eget lorem dolor?
                                </button>
                            </h2>
                            <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body">
                                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section> -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <!-- <h2>Mitra Yang Terlibat</h2> -->
                <p>Didukung oleh</p>
            </header>

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="assets/img/logo/logo-mitra/klhk.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/logo/logo-mitra/kabupaten-ketapang.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/logo/logo-mitra/kph.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/logo/logo-mitra/aid.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/logo/logo-mitra/sbl.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/logo/logo-mitra/jari.png" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </section>
    <!-- End Clients Section -->


    <!-- ======= Recent Bsldog Posts Section ======= -->
    <!-- <section id="recent-blog-posts" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>Media & Publikasi</p>
            </header>

            <div class="row">

                <div class="col-lg-4">
                    <div class="post-box">
                        <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
                        <span class="post-date">Tue, September 15</span>
                        <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
                        <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="post-box">
                        <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
                        <span class="post-date">Fri, August 28</span>
                        <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
                        <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="post-box">
                        <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
                        <span class="post-date">Mon, July 11</span>
                        <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
                        <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>

        </div>

    </section> -->
    <!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <!-- <h2>Contact</h2> -->
                <p>Kontak Kami</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Alamat</h3>
                                <p>Jalan .. No. .. ,<br>Ketapang, Indonesia</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>Telephone</h3>
                                <p>+62 813-4744-4794</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Email</h3>
                                <p>info@webgis-psketapang.co.id</p>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                <h3>Open Hourss</h3>
                                <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                            </div>
                        </div> -->
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" class="php-email-form">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>

                            <!-- <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Judul" required>
                            </div> -->

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Isi pesan" required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading..</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Kirim pesan</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section><!-- End Contact Section -->

</main>
<!-- End #main -->
@endsection

@section('IndexJs')
<!-- Vendor JS Files -->
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