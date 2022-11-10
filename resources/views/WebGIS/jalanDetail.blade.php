@extends('WebGIS.Layouts.App')

@section('Content')

<main id="main">
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

        </div>
    </section>

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-6">
                    <h2>Grafik Jenis Pengerasan</h2>
                    <div class="card card-danger">
                        <div class="card-body">
                            <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <!-- DONUT CHART -->
                    <div class="card card-danger" hidden>
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
                                        <th>Jalan</th>
                                        <th>Progress</th>
                                        <!-- <th style="width: 40px">Label</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($jalanDetail as $jalan)
                                    <tr>
                                        <td>1.</td>
                                        <td>Baik (km)</td>
                                        <td><span class="badge bg-success">{{$jalan->kondisi_baik}} Km</span></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Sedang (km)</td>
                                        <td><span class="badge bg-primary">{{$jalan->kondisi_sedang}} Km</span></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Rusak Ringan (km)</td>
                                        <td><span class="badge bg-warning">{{$jalan->kondisi_rusak_ringan}} Km</span></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Rusak Berat (km)</td>
                                        <td><span class="badge bg-danger">{{$jalan->kondisi_rusak_berat}} Km</span></td>
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
                                        <th>Jalan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($jalanDetail as $jalan)
                                    <tr>
                                        <td>1.</td>
                                        <td>No. Ruas</td>
                                        <td>{{$jalan->nomor_ruas}}</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Nama Ruas</td>
                                        <td>{{$jalan->nama_ruas}}</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Panjang (km)</td>
                                        <td>{{$jalan->panjang}}</td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Kecamatan</td>
                                        <td>{{$jalan->kecamatan}}</td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Kelurahan</td>
                                        <td>{{$jalan->kelurahan}}</td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>Koordinat Pangkal</td>
                                        <td>{{$jalan->koordinat_pangkal}}</td>
                                    </tr>
                                    <tr>
                                        <td>7.</td>
                                        <td>Koordinat Ujung</td>
                                        <td>{{$jalan->koordinat_ujung}}</td>
                                    </tr>
                                    @endforeach
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
                                        <th>Jalan</th>
                                        <th>Progress</th>
                                        <!-- <th style="width: 40px">Label</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($jalanDetail as $jalan)
                                    <tr>
                                        <td>1.</td>
                                        <td>Aspal (%)</td>
                                        <td><span class="badge bg-success">{{$jalan->jp_aspal}} %</span></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Beton (%)</td>
                                        <td><span class="badge bg-primary">{{$jalan->jp_beton}} %</span></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Kerikil (%)</td>
                                        <td><span class="badge bg-warning">{{$jalan->jp_kerikil}} %</span></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Tanah</td>
                                        <td><span class="badge bg-danger">{{$jalan->jp_tanah}} %</span></td>
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
<!-- end  -->

@endsection

<!-- script grafik  -->
@section('ScriptGrafik')

@foreach($jalanDetail as $jld)
{{ $jld->jp_aspal}}
{{$jld->jp_beton}}
{{$jld->jp_kerikil}}
{{$jld->jp_tanah}}
@endforeach
<!-- Grafik  -->
<!-- jQuery -->
<!-- <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script> -->
<!-- Bootstrap 4 -->
<!-- <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->
<!-- ChartJS -->
<script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('adminlte/dist/js/demo.js') }}"></script>
<!-- Page specific script -->
<script>
    $(function() {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */


        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var aspal1 = "{{   $jld->jp_aspal;}}";
        var beton1 = "{{   $jld->jp_beton;}}";
        var kerikil1 = "{{   $jld->jp_kerikil;}}";
        var tanah1 = "{{   $jld->jp_tanah;}}";
        var donutChartCanvas = $('#pieChart').get(0).getContext('2d')
        var donutData = {
            labels: [
                'Aspal (%)',
                'Beton (%)',
                'Kerikil (%)',
                'Tanah',
            ],
            datasets: [{
                // data: [100, 0, 0, 0, 200],
                data: [aspal1, beton1, kerikil1, tanah1],
                backgroundColor: ['#00c0ef', '#f56954', '#00a65a', '#f39c12'],
            }]
        }
        var donutOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(donutChartCanvas, {
            type: 'pie',
            data: donutData,
            options: donutOptions
        })


        // donat chart
        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData = {
            labels: [
                'Aspal (%)',
                'Beton (%)',
                'Kerikil (%)',
                'Tanah',
            ],
            datasets: [{
                data: [100, 0, 0, 0],
                backgroundColor: ['#00c0ef', '#f56954', '#00a65a', '#f39c12'],
            }]
        }
        var donutOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })
    })
</script>
<!-- End grafik  -->
@endsection
<!-- end  -->