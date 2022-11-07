 <!-- Vendor JS Files -->
 <script src="{{asset('assets/vendor/purecounter/purecounter.js') }}"></script>
 <script src="{{asset('assets/vendor/aos/aos.js') }}"></script>
 <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
 <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
 <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
 <script src="{{asset('assets/vendor/php-email-form/validate.js') }}"></script>

 <!-- Template Main JS File -->
 <script src="{{asset('assets/js/main.js') }}"></script>



 <!-- start datatable -->
 <!-- Vendor JS Files -->
 <script src="{{ asset('assetsAdmin/vendor/tinymce/tinymce.min.js') }}"></script>
 <script src="{{ asset('assetsAdmin/vendor/simple-datatables/simple-datatables.js') }}"></script>

 <!-- Template Main JS File -->
 <script src="{{ asset('assetsAdmin/js/main.js') }}"></script>
 <!-- end datatables -->


 <!-- datatable adminlte  -->
 <!-- jQuery -->
 <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
 <!-- Bootstrap 4 -->
 <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <!-- DataTables  & Plugins -->
 <!-- DataTables  & Plugins -->
 <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
 <script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
 <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('adminlte/plugins/jszip/jszip.min.js') }}"></script>
 <script src="{{ asset('adminlte/plugins/pdfmake/pdfmake.min.js') }}"></script>
 <script src="{{ asset('adminlte/plugins/pdfmake/vfs_fonts.js') }}"></script>
 <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
 <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
 <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

 <script>
     $(function() {
         $("#example1").DataTable({
             "responsive": true,
             "lengthChange": false,
             "autoWidth": false,
             "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
         }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
         $('#example2').DataTable({
             "paging": true,
             "lengthChange": false,
             "searching": false,
             "ordering": true,
             "info": true,
             "autoWidth": false,
             "responsive": true,
         });
     });
 </script>
 <!-- end datatable adminlte  -->



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

         //--------------
         //- AREA CHART -
         //--------------

         // Get context with jQuery - using jQuery's .get() method.
         var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

         var areaChartData = {
             labels: ['Baik', 'Sedang', 'Rusak Ringan', 'Rusak Berat'],
             datasets: [{
                     label: 'Persen (%)',
                     backgroundColor: 'rgba(60,141,188,0.9)',
                     borderColor: 'rgba(60,141,188,0.8)',
                     pointRadius: false,
                     pointColor: '#3b8bba',
                     data: [77, 11, 5, 5]
                 },
                 {
                     label: 'Kilo Meter (KM)',
                     backgroundColor: 'rgba(210, 214, 222, 1)',
                     borderColor: 'rgba(210, 214, 222, 1)',
                     pointRadius: false,
                     pointColor: 'rgba(210, 214, 222, 1)',
                     data: [220, 33, 13, 15]
                 },
             ]
         }

         var areaChartOptions = {
             maintainAspectRatio: false,
             responsive: true,
             legend: {
                 display: false
             },
             scales: {
                 xAxes: [{
                     gridLines: {
                         display: false,
                     }
                 }],
                 yAxes: [{
                     gridLines: {
                         display: false,
                     }
                 }]
             }
         }

         // This will get the first returned node in the jQuery collection.
         new Chart(areaChartCanvas, {
             type: 'line',
             data: areaChartData,
             options: areaChartOptions
         })

         //-------------
         //- LINE CHART -
         //--------------
         var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
         var lineChartOptions = $.extend(true, {}, areaChartOptions)
         var lineChartData = $.extend(true, {}, areaChartData)
         lineChartData.datasets[0].fill = false;
         lineChartData.datasets[1].fill = false;
         lineChartOptions.datasetFill = false

         var lineChart = new Chart(lineChartCanvas, {
             type: 'line',
             data: lineChartData,
             options: lineChartOptions
         })

         //-------------
         //- DONUT CHART -
         //-------------
         // Get context with jQuery - using jQuery's .get() method.
         var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
         var donutData = {
             labels: [
                 'Mantap',
                 'Tidak Mantap',
             ],
             datasets: [{
                 data: [89, 11

                 ],
                 backgroundColor: ['#00a65a', '#f56954'],
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

         //-------------
         //- PIE CHART -
         //-------------
         // Get context with jQuery - using jQuery's .get() method.
         var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
         var pieData = donutData;
         var pieOptions = {
             maintainAspectRatio: false,
             responsive: true,
         }
         //Create pie or douhnut chart
         // You can switch between pie and douhnut using the method below.
         new Chart(pieChartCanvas, {
             type: 'pie',
             data: pieData,
             options: pieOptions
         })

         //-------------
         //- BAR CHART -
         //-------------
         var barChartCanvas = $('#barChart').get(0).getContext('2d')
         var barChartData = $.extend(true, {}, areaChartData)
         var temp0 = areaChartData.datasets[0]
         var temp1 = areaChartData.datasets[1]
         barChartData.datasets[0] = temp1
         barChartData.datasets[1] = temp0

         var barChartOptions = {
             responsive: true,
             maintainAspectRatio: false,
             datasetFill: false
         }

         new Chart(barChartCanvas, {
             type: 'bar',
             data: barChartData,
             options: barChartOptions
         })

         //---------------------
         //- STACKED BAR CHART -
         //---------------------
         var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
         var stackedBarChartData = $.extend(true, {}, barChartData)

         var stackedBarChartOptions = {
             responsive: true,
             maintainAspectRatio: false,
             scales: {
                 xAxes: [{
                     stacked: true,
                 }],
                 yAxes: [{
                     stacked: true
                 }]
             }
         }

         new Chart(stackedBarChartCanvas, {
             type: 'bar',
             data: stackedBarChartData,
             options: stackedBarChartOptions
         })
     })
 </script>
 <!-- End grafik  -->