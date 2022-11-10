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