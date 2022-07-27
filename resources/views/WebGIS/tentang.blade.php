@extends('WebGIS.Layouts.App')

@section('Content')

<main id="main">
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

        </div>
    </section>
    <!-- End Counts Section -->

    <!-- ======= About Section ======= -->
    <section id="about portfolio" class="about portfolio">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <!-- <h3>Who We Are</h3> -->
                        <h2>WebGIS PS Ketapang</h2>
                        <p>
                            WebGIS PS Ketapang merupakan website berbasis GIS yang menyediakan sebaran perhutanan sosial (Hutan Desa dan Hutan Kemasyarakatan) di Kabupaten Ketapang.
                        </p>
                        <!-- <div class="text-center text-lg-start">
                            <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Read More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div> -->
                    </div>
                </div>

                <!-- <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/foto/ps-ktp/ps-ktp.png" style="width: 80%;" class="img-fluid" alt="">
                </div> -->
                <div class="col-lg-6 d-flex align-items-center col-md-6" data-aos="zoom-out fade-up" data-aos-delay="200">
                    <div class="portfolio-wrap">
                        <img src="assets/img/foto/ps-ktp/ps-ketapang.png" style="width: 80%;" class="img-fluid" alt="">
                        <div class="portfolio-info">

                            <div class="portfolio-links">
                                <a href="assets/img/foto/ps-ktp/ps-ktp2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title=""><i class="bi bi-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row gy-6 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item gema">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/galery/gema/1.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">

                                <div class="portfolio-links">
                                    <a href="{{ asset('assets/img/galery/gema/1.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title=""><i class="bi bi-plus"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>

    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

        <div class="container" data-aos="fade-up">

            <!-- <header class="section-header">
                <p>Other Information</p>
            </header> -->
            <!-- / row -->

            <!-- Hutan Desa -->
            <div class="row feature-icons" data-aos="fade-up">
                <h3>Skema Perhutanan Sosial Ketapang (HD dan HKm)</h3>

                <div class="row">

                    <!-- <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/img/features-3.png" class="img-fluid p-4" alt="">
                    </div> -->

                    <div class="col-xl-12 d-flex content">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-4 icon-box" data-aos="fade-up">
                                <!-- <i class="ri-line-chart-line"></i> -->
                                <div>
                                    <h4>Hutan Desa Rimak Koling Raya</h4>
                                    <p>Nomor SK: 6233/MenLHK-PSKL/PKPS/PSL.0/9/2018</p>
                                </div>
                            </div>

                            <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <!-- <i class="ri-stack-line"></i> -->
                                <div>
                                    <h4>Hutan Desa Pangkalan Telok</h4>
                                    <p>Nomor SK: 3802/MenLHK-PSKL/PKPS/PSL.0/4/2019</p>
                                </div>
                            </div>

                            <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <!-- <i class="ri-brush-4-line"></i> -->
                                <div>
                                    <h4>Hutan Desa Lemmanis</h4>
                                    <p>Nomor SK: 1538/MenLHK-PSKL/PKPS/PSL.0/3/2021</p>
                                </div>
                            </div>

                            <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <!-- <i class="ri-magic-line"></i> -->
                                <div>
                                    <h4>Hutan Desa Bukit Layang</h4>
                                    <p>Nomor SK: 6682/MenLHK-PSKL/PKPS/PSL.0/13/2017</p>
                                </div>
                            </div>

                            <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <!-- <i class="ri-command-line"></i> -->
                                <div>
                                    <h4>Hutan Desa Cuhai</h4>
                                    <p>Nomor SK: 6572/MenLHK-PSKL/PKPS/PSL.0/12/2017</p>
                                </div>
                            </div>

                            <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="500">
                                <!-- <i class="ri-radar-line"></i> -->
                                <div>
                                    <h4>Hutan Desa Batu Bolah</h4>
                                    <p>Nomor SK: 6704/MenLHK-PSKL/PKPS/PSL.0/7/2017</p>
                                </div>
                            </div>

                            <div class="col-md-4 icon-box" data-aos="fade-up">
                                <!-- <i class="ri-line-chart-line"></i> -->
                                <div>
                                    <h4>Hutan Desa Belaban Rayak</h4>
                                    <p>Nomor SK: 4670/MenLHK-PSKL/PKPS/PSL.0/7/2018</p>
                                </div>
                            </div>

                            <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <!-- <i class="ri-stack-line"></i> -->
                                <div>
                                    <h4>Hutan Kemasyarakatan Gapoktan Sumber Karya</h4>
                                    <p>Nomor SK: 1652/MenLHK-PSKL/PKPS/PSL.0/3/2019</p>
                                </div>
                            </div>

                            <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <!-- <i class="ri-brush-4-line"></i> -->
                                <div>
                                    <h4>Hutan Desa Danau Paluh Lestari</h4>
                                    <p>Nomor SK: 1540/MenLHK-PSKL/PKPS/PSL.0/3/2021</p>
                                </div>
                            </div>

                            <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <!-- <i class="ri-magic-line"></i> -->
                                <div>
                                    <h4>Hutan Kemasyarakatan Serba Usaha Bersama</h4>
                                    <p>Nomor SK: 5864/MenLHK-PSKL/PKPS/PSL.0/10/2017</p>
                                </div>
                            </div>

                            <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <!-- <i class="ri-command-line"></i> -->
                                <div>
                                    <h4>Hutan Desa Sunan Bersatu</h4>
                                    <p>Nomor SK: 1030/MenLHK-PSKL/PKPS/PSL.0/3/2021</p>
                                </div>
                            </div>

                            <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="500">
                                <!-- <i class="ri-radar-line"></i> -->
                                <div>
                                    <h4>Hutan Desa Pematang Gadung</h4>
                                    <p>Nomor SK: 896/MenLHK-PSKL/PKPS/PSL.0/3/2021</p>
                                </div>
                            </div>

                            <div class="col-md-4 icon-box" data-aos="fade-up">
                                <!-- <i class="ri-line-chart-line"></i> -->
                                <div>
                                    <h4>Hutan Desa Rawa Gambut</h4>
                                    <p>Nomor SK: 5883/MenLHK-PSKL/PKPS/PSL.0/10/2017</p>
                                </div>
                            </div>

                            <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <!-- <i class="ri-stack-line"></i> -->
                                <div>
                                    <h4>Hutan Desa Wana Gambut</h4>
                                    <p>Nomor SK: 6688/MenLHK-PSKL/PKPS/PSL.0/12/2017</p>
                                </div>
                            </div>

                            <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <!-- <i class="ri-brush-4-line"></i> -->
                                <div>
                                    <h4>Hutan Desa Rimbak Sangiang</h4>
                                    <p>Nomor SK: 1539/MenLHK-PSKL/PKPS/PSL.0/3/2021</p>
                                </div>
                            </div>

                            <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <!-- <i class="ri-magic-line"></i> -->
                                <div>
                                    <h4>HUtan Desa Sembelangaan</h4>
                                    <p>Nomor SK: 5973/MenLHK-PSKL/PKPS/PSL.0/12/2017</p>
                                </div>
                            </div>

                            <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <!-- <i class="ri-command-line"></i> -->
                                <div>
                                    <h4>Hutan Desa Manjau</h4>
                                    <p>Nomor SK: 6573/MenLHK-PSKL/PKPS/PSL.0/3/2021</p>
                                </div>
                            </div>

                            <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="500">
                                <!-- <i class="ri-radar-line"></i> -->
                                <div>
                                    <h4>Hutan Desa Bukit Banjar</h4>
                                    <p>Nomor SK: 6188/MenLHK-PSKL/PKPS/PSL.0/9/2018</p>
                                </div>
                            </div>

                            <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <!-- <i class="ri-command-line"></i> -->
                                <div>
                                    <h4>Hutan Desa Mio Lestari</h4>
                                    <p>Nomor SK: 1027/MenLHK-PSKL/PKPS/PSL.0/3/2021</p>
                                </div>
                            </div>

                            <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="500">
                                <!-- <i class="ri-radar-line"></i> -->
                                <div>
                                    <h4>Hutan Desa Tanoeh Menjuakng</h4>
                                    <p>Nomor SK: 5913/MenLHK-PSKL/PKPS/PSL.0/9/2018</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div><!-- End Hutan Desa -->

            <!-- Hutan Kemasyarakatan -->
            <!-- <div class="row feature-icons" data-aos="fade-up">
                <h3>Hutan Kemasyarakatan (HKm) dampingan Aidenvironment di Kab. Ketapang</h3>

                <div class="row">

                    <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/img/features-3.png" class="img-fluid p-4" alt="">
                    </div>

                    <div class="col-xl-12 d-flex content">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <i class="ri-line-chart-line"></i>
                                <div>
                                    <h4>Hutan Kemasyarakatan A</h4>
                                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="ri-stack-line"></i>
                                <div>
                                    <h4>Hutan Kemasyarakatan B</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div> -->
            <!-- End Hutan Kemasyarakatan-->
        </div>

    </section>
    <!-- End Features Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

        <div class="container" data-aos="fade-up">

            <!-- <header class="section-header">
                <p>Other Information</p>
            </header> -->
            <!-- / row -->

            <!-- Hutan Desa -->
            <div class="row feature-icons" data-aos="fade-up">
                <h3>Info Grafis PS Ketapang</h3>

                <div class="row">

                    <!-- <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/img/features-3.png" class="img-fluid p-4" alt="">
                    </div> -->

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/foto/ps-ktp/grafik1.png" style="width: 80%;" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/foto/ps-ktp/grafik2.png" style="width: 80%;" class="img-fluid" alt="">
                    </div>

                </div>

            </div><!-- End Hutan Desa -->
        </div>

    </section>
    <!-- End Features Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Sejarah Perhutanan Sosial</h2>
                <p>Sejarah Perhutanan Sosial (PS) diawali dengan perubahan paradigma pengelolaan hutan dari pengelolaan hutan oleh negara ke arah pengelolaan hutan bersama masyarakat, yaitu pengelolaan hutan yang harus melibatkan dan mensejahterakan masyarakat sekitar hutan.</p>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        Sistem pengelolaan Hutan lestari yang dilaksanakan dalam Kawasan Hutan Negara atau Hutan Hak/Hutan Adat yang dilaksanakan oleh masyarakat setempat atau masyarakat hukum adat sebagai pelaku utama untuk meningkatkan kesejahteraannya, keseimbangan lingkungan dan dinamika sosial budaya (PP. 23 Tahun 2021 tentang Penyelenggaraan Kehutanan Ps. 1). Sampai dengan 25 Januari 2022, PS sudah menjangkau luasan 4,9 juta hektar, dari total alokasi 12,7 juta hektar. Jumlah persetujuan yang sudah dikeluarkan oleh Kementerian LHK menaungi lebih dari 1 juta KK (Dewi, 2022).
                        <br>
                    </p>
                    <p>Pelaku Perhutanan Sosial, yaitu :</p>
                    <ol>
                        <li>Lembaga Pengelola Hutan Desa (LPHD)/ Lembaga adat</li>
                        <li>Kelompok Tani, Gabungan Kelompok Tani (Gapoktan), Koperasi</li>
                        <li>Masyarakat Hukum Adat (MHA)</li>
                        <li>Lembaga Masyarakat Desa Hutan (LMDH)</li>
                    </ol>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Dengan adanya Undang-Undang Cipta Kerja, Peraturan Pemerintah nomor 23 Tahun 2020 tentang Kehutanan dan Peraturan Menteri Lingkungan Hidup dan Kehutanan Nomor 9 Tahun 2021 tentang Pengelolaan Perhutanan Sosial. Terdapat beberapa perubahan seperti perubahan luasan maksimum yang bisa diajukan sebesar 5.000 hektar, apabila lebih dari itu maka harus mengajukan dengan skema pengelolaan yang berbeda.Perubahan lainnya berupa Istilah LPHD (Lembaga Pengelola Hutan Desa) berubah menjadi LDPH (Lembaga Desa Pengelola Hutan ).
                    </p>
                    <p>
                        Dengan adanya Undang-Undang Cipta Kerja, Peraturan Pemerintah nomor 23 Tahun 2020 tentang Kehutanan dan Peraturan Menteri Lingkungan Hidup dan Kehutanan Nomor 9 Tahun 2021 tentang Pengelolaan Perhutanan Sosial. Terdapat beberapa perubahan seperti perubahan luasan maksimum yang bisa diajukan sebesar 5.000 hektar, apabila lebih dari itu maka harus mengajukan dengan skema pengelolaan yang berbeda.Perubahan lainnya berupa Istilah LPHD (Lembaga Pengelola Hutan Desa) berubah menjadi LDPH (Lembaga Desa Pengelola Hutan ).</p>
                </div>
            </div>

            <div class="row content">
                <p>
                    Program perhutanan sosial merupakan salah satu upaya pemerintah memberikan ruang akses kepada masyarakat dan desa terutama yang berada di dalam dan disekitar kawasan hutan untuk dapat mengelola dan memanfaatkan potensi sumber daya alam yang terdapat dalam kawasan hutan guna untuk peningkatan ekonomi dan kesejahteraan masyarakat. Akses kelola tersebut diusulkan oleh masyarakat dan pemerintah desa melalui sebuah lembaga desa yang disampaikan kepada Kementerian Lingkungan Hidup dan Kehutanan selaku kementerian terkait dalam pengelolaan dan perizinan pengelolaan kawasan hutan.
                </p>
                <p>
                    Di Kabupaten Ketapang, pencapaian terkait dengan program perhutanan sosial sudah cukup tinggi terutama berkaitan dengan jumlah izin perhutanan sosial yang telah dikeluarkan oleh kementerian lingkungan hidup dan kehutanan. Saat ini telah terdapat 20 izin perhutanan sosial yang ada di Kabupaten Ketapang dengan skema berupa hutan desa (HD) dan hutan kemasyarakatan (Hkm).
                </p>
                <p>
                    Di Kabupaten Ketapang program Perhutanan Sosial baru ada pada tahun 2012, ada 3 desa yang mendapatkan SK PAK (Penataan Areal Kerja) yaitu Desa Laman Satong, Desa Pematang Gadung dan Desa Sebadak Raya. SK PAK baru sebatas persetujuan lokasi, kegiatan yang dilakukan di area hutan desa berupa penataan dan perlindungan kawasan hutan, belum ada pembentukan KUPS sebagai badan yang mengelola HHBK (Hasil Hutan Bukan Kayu).
                </p>
                <p>
                    Pada Tahun 2017, 3 desa memperoleh SK dari Kementerian Lingkungan Hidup dan Kehutanan. Dua desa merupakan desa yang sudah memperoleh SK PAK sebelumnya, dan satu desa baru dengan skema pengelolaan Hutan Desa. Bentuk hak/izin yang diberikan berupa Hak Pengelolaan Hutan Desa (HPHD). Desa Laman Satong nomor SK : 6573/MENLHK-PSKL/PKPS/PSL.0/12/2017 dengan luas ± 1070 Hektar. Desa Sebadak Raya nomor SK : 6572/MENLHK-PSKL/PKPS/PSL.0/12/2017 dengan luas ±1645 Hektar. Desa Sungai Pelang nomor SK:6688/MENLHK-PSKL/PKPS/PSL.0/12/2017. Untuk Desa Pematang Gadung karena ada perubahan luas hutan desa, SK terbarunya dikeluarkan pada tahun 2021 dengan penetapan luas yang baru. </p>
                <p>
                    Kementerian Lingkungan Hidup dan Kehutanan telah mengeluarkan 20 SK untuk areal perhutanan sosial di Kabupaten Ketapang dengan skema Hutan Desa (18 SK) yang memiliki luas 63.425 hektar dan Hutan Kemasyarakatan (2 SK) yang memiliki luas 1.778 hektar. Total luasan Perhutanan Sosial di Kabupaten Ketapang sebesar 65.203 Hektar (sumber data UPT KPH Wilayah Ketapang Selatan dan UPT KPH Wilayah Ketapang Utara).
                </p>
                <!-- <p>
                    Hutan Desa yang sudah ada SK dari Kementrian Lingkungan Hidup dan Kehutanan ada 20 Hutan Desa. 2 dengan skema Hutan Kemasyarakatan dengan luas 1.778 hektar, luasan 18 Hutan Desa sebesar 63.425 Hektar. Total luasan Perhutanan Sosial di Kabupaten Ketapang sebesar 65.203 Hektar (sumber data UPT KPH Wilayah Ketapang Selatan dan UPT KPH Wilayah Ketapang Utara).
                </p> -->
                <p>
                    Hal yang kemudian menjadi persoalan yang dihadapi oleh masyarakat atau lembaga pemegang izin perhutanan di tingkat tapak adalah tahapan pasca mendapatkan izin, yaitu pengelolaan areal izin perhutanan sosial. Hal ini, paling tidak disebabkan oleh beberapa hal seperti keterbatasan sumber daya manusia dan sumberdaya keuangan yang ada di tingkat tapak untuk melakukan pengelolaan. Sedangkan dalam izin perhutanan sosial yang telah diberikan, terdapat berbagai kewajiban bagi pemegang untuk melakukan pengelolaan yang disusun dalam dokumen rencana kelola perhutanan sosial dan rencana kerja tahunan.
                </p>
                <p>
                    Dari hasil inventarisasi terhadap kendala dan tantangan yang dihadapi oleh pemegang izin perhutanan sosial pasca mendapatkan izin, antara lain sebagai berikut :
                <ol>
                    <li>Keterbatasan terhadap akses pembiayaan yang dibutuhkan dalam melakukan pengelolaan areal izin perhutanan sosial meliputi proses perencanaan, pelaksanaan, pengawasan dan pertanggungjawaban.</li>
                    <li>Minimnya kegiatan pendampingan dan penyuluhan yang didapatkan oleh masyarakat dalam upaya untuk peningkatan kapasitas kelembagaan baik bagi lembaga pemegang izin maupun Kelompok Usaha Perhutanan Sosial (KUPS) untuk melakukan pengelolaan perhutanan sosial.</li>
                    <li>Minimnya akses pasar terkait dengan produk-produk yang dihasilkan melalui pengelolaan perhutanan sosial.</li>
                    <li>Keterbatasan terkait dengan sarana, prasarana infrastruktur yang dapat mendukung bagi pemegang izin melakukan pengelolaan perhutanan sosial, seperti akses jalan baik menuju ke lokasi areal perhutanan sosial maupun menuju lokasi di dalam areal izin yang akan dikelola.</li>
                    <li>Konflik status lahan, potensi sumberdaya alam dan batas wilayah yang masih belum jelas.</li>
                    <li> Ancaman terhadap kerusakan areal izin perhutanan sosial seperti, kebakaran hutan dan lahan dan penebangan liar.</li>
                    <li>Masih rendahnya hasil-hasil produksi yang telah dihasilkan oleh lembaga pengelola dalam melakukan pengelolaan perhutanan sosial.</li>
                </ol>
                </p>
                <p>
                    Kendala dan tantangan yang dihadapi dalam melakukan pengelolaan perhutanan sosial sebagaimana tersebut, penting untuk mendapatkan izin sehingga dapat mempermudah bagi kelompok pemegang izin untuk melakukan pengelolaan terhadap areal izin perhutanan sosial. Dalam upaya untuk mengatasi kendala dan tantangan tersebut, diperlukan adanya kerjasama multipihak terutama peran pemerintah kabupaten melalui dukungan program pembangunan daerah yang berkelanjutan melalui kebijakan-kebijakan yang disusun dan diterbitkan oleh pemerintah daerah Kabupaten Ketapang.
                </p>
                <p>
                    Selain itu juga, dalam pengelolaan perhutanan sosial yang telah dilakukan oleh pemegang izin perhutanan sosial di Kabupaten Ketapang memiliki banyak potensi dan peluang yang dapat dikembangkan. Pengembangan tersebut tentunya membutuhkan peran multipihak termasuk pemerintah kabupaten untuk dapat memberikan dukungan melalui program pembangunan daerah.
                </p>
                <p>
                    Adapun beberapa peluang perhutanan sosial di tingkat tapak yang ada di Kabupaten Ketapang diantaranya:
                <ol>
                    <li>Dalam pengelolaan perhutanan sosial yang telah ada izin, telah terbentuk KUPS-KUPS yang mengelola areal sesuai dengan potensi-potensi yang ada, yang dapat dikelola dan dikembangkan pada masing-masing izin. </li>
                    <li>Dari KUPS yang telah terbentuk, hasil identifikasi yang dilakukan menunjukan bahwa 42% KUPS pada kondisi aktif dan berjalan, 33% belum berjalan dan 9% berjalan tetapi memiliki banyak kendala. Selebihnya pada kondisi tidak berjalan dan belum memiliki KUPS.</li>
                    <li>Dari hasil identifikasi terkait dengan potensi sumber daya alam yang dikelola KUPS terdapat banyak potensi yang dapat dikelola dan dikembangkan sebagai bentuk kegiatan ekonomi bagi masyarakat. Potensi-potensi tersebut diantaranya komoditas berupa Hasil Hutan Bukan Kayu (HHBK) seperti madu, buah-buahan, peternakan, perikanan, anyaman, jasa lingkungan berupa destinasi wisata dan potensi air bersih.</li>
                    <li>Izin-izin perhutanan sosial yang ada di Kabupaten Ketapang memiliki pendamping baik bersifat lembaga, KPH, mandiri dan pendamping yang ditugaskan oleh BPSKL. Dengan adanya tenaga pendamping tersebut dapat memberikan kontribusi yang signifikan terhadap pengelolaan perhutanan sosial di tingkat tapak.</li>
                    <li>Sebagian dari sebaran izin perhutanan sosial yang ada di Kabupaten Ketapang juga terdapat sektor swasta yang berada di sekitar lokasi areal perhutanan sosial. Keberadaan sektor swasta bisa didorong untuk memberikan kontribusi kepada masyarakat atau kelompok pemegang izin perhutanan sosial sebagai bagian dari tanggung jawab sosial dan lingkungan.</li>
                </ol>
                </p>
                <p>
                    Pengelolaan perhutanan sosial tidak hanya dibidang kehutanan, melainkan seluruh sektor yang terkait pada lingkungan hidup, pemberdayaan masyarakat, pariwisata, usaha masyarakat, perdagangan dan sektor lainnya. Sehingga dalam pengolahannya menjadi pekerjaan bersama yang melibatkan peran multi stakeholder termasuk pemerintah kabupaten dan desa. Dalam pengelolaan perhutanan sosial di tingkat tapak, terdapat banyak kendala dan tantangan yang dihadapi oleh masyarakat dan lembaga pemegang izin. Keterbatasan sumber daya manusia dan sumberdaya keuangan, akses pasar merupakan sebagian dari persoalan yang dihadapi. Untuk menjawab berbagai persoalan yang dihadapi tersebut, membutuhkan peran pemerintah kabupaten dan desa berdasarkan kewenangannya masing-masing.
                </p>
                <p>
                    Peran pemerintah kabupaten dan desa dapat dilakukan melalui dukungan kebijakan dan program pembangunan daerah dan desa. Oleh karena itu, penting adanya kolaborasi dan sinergitas terkait dengan bentuk pengelolaan perhutanan sosial yang dilakukan oleh masyarakat terhadap perencanaan pembangunan yang ada di kabupaten dan desa. Dengan adanya kolaborasi dan sinergi tersebut diharapkan dalam pelaksanaan program pembangunan yang ada di kabupaten dan desa dapat memberikan kontribusi terhadap pengelolaan dan pemanfaatan potensi sumber daya alam yang ada di area perhutanan sosial dalam rangka untuk meningkatkan ekonomi dan kesejahteraan masyarakat. Selain itu juga, dengan adanya kolaborasi dan sinergi tersebut dapat menjawab berbagai kendala dan tantangan yang dihadapi oleh lembaga pemegang izin perhutanan sosial.
                </p>
                <p>
                    Pengelolaan perhutanan sosial yang baik juga memberikan dampak terhadap peningkatan kondisi sosial masyarakat. Dengan adanya pengelolaan perhutanan sosial akan meningkatkan semangat gotong royong dan kepedulian pada masyarakat. Dari sisi kondisi lingkungan, adanya perhutanan sosial akan memberikan dampak terhadap perbaikan kualitas lingkungan hidup. Pemegang izin perhutanan sosial memiliki kewajiban untuk menjaga areal perhutanan sosial dari ancaman yang dapat merugikan kondisi lingkungan. Dengan adanya kegiatan ekonomi alternatif yang muncul dari pengelolaan perhutanan sosial dapat memberikan solusi atau alternatif bagi masyarakat yang selama ini melakukan aktivitas ekonomi dengan memanfaatkan potensi sumber daya alam secara ilegal.
                </p>

            </div>

        </div>
    </section><!-- End About Us Section -->

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
                                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
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
                                <div class="loading">Loading</div>
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