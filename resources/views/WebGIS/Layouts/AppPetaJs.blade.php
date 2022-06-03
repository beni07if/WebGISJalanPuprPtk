<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
    @include('WebGIS.Layouts.HeadStyle')
    <title>ArcGIS API for JavaScript Tutorials: Display a map</title>

    <style>
        /* html,
        body, */
        #viewDiv {
            padding: 0;
            margin: 0;
            left: 50px;
            right: 50px;
            height: 100%;
            width: 100%;
        }
    </style>
    <link rel="stylesheet" href="https://js.arcgis.com/4.23/esri/themes/light/main.css">
    <script src="https://js.arcgis.com/4.23/"></script>
    <script>
        require(["esri/config", "esri/Map", "esri/views/MapView",
            // // start service basemap
            // "esri/widgets/BasemapToggle",
            // "esri/widgets/BasemapGallery"
            // // end service basemap

            // start service add a feature layer
            "esri/layers/FeatureLayer"

            // end service add a feature layer

        ], function(esriConfig, Map, MapView,
            // start service add a feature layer
            FeatureLayer
            // end service add a feature layer

            // // start service basemap
            // BasemapToggle, BasemapGallery
            // // end service basemap
        ) {

            esriConfig.apiKey = "AAPK2c6bbd1ff8934964a58304cd6b1585b5tVZu6we0tL4eUYmm0cRIZDWA7ouiBqWtbWomjgMslAAR2euAqf7kjnPiAYQoB1XS";

            const map = new Map({
                basemap: "arcgis-topographic" // Basemap layer service
                // basemap: "arcgis-oceans" // Basemap layer service
                // basemap: "arcgis-imagery" // Basemap layer service
                // basemap: "arcgis-streets" // Basemap layer service
                // basemap: "arcgis-navigation" // Basemap layer service
                // basemap: "arcgis-light-gray",
            });

            const view = new MapView({
                map: map,
                center: [110.766398, -0.012261], // Longitude, latitude
                zoom: 8, // Zoom level
                container: "viewDiv" // Div element
            });

            // start service add a feature layer
            //Trailheads feature layer (points)
            const trailheadsLayer = new FeatureLayer({
                url: "https://services3.arcgis.com/GVgbJbqm8hXASVYi/arcgis/rest/services/Trailheads/FeatureServer/0"
            });

            map.add(trailheadsLayer);

            //Trails feature layer (lines)
            const trailsLayer = new FeatureLayer({
                url: "https://services3.arcgis.com/GVgbJbqm8hXASVYi/arcgis/rest/services/Trails/FeatureServer/0"
            });

            map.add(trailsLayer, 0);

            // Parks and open spaces (polygons)
            const parksLayer = new FeatureLayer({
                url: "https://services6.arcgis.com/ZMEOfnD55w9Elwzc/arcgis/rest/services/revisi_project_systemiq/FeatureServer/7"
            });

            map.add(parksLayer, 0);
            // end service add a feature layer

            // // start service basemap
            // const basemapToggle = new BasemapToggle({
            //     view: view,
            //     nextBasemap: "arcgis-imagery"
            // });

            // view.ui.add(basemapToggle, "bottom-right");

            // const basemapGallery = new BasemapGallery({
            //     view: view,
            //     source: {
            //         query: {
            //             title: '"World Basemaps for Developers" AND owner:esri'
            //         }
            //     }
            // });

            // view.ui.add(basemapGallery, "top-right"); // Add to the view
            // // end service basemap

        });
    </script>

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ route('index')}}" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/logo.png') }}" alt="">
                <span>PS KETAPANG</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ route('index') }}#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}#about">About</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}#portfolio">Galery</a></li>
                    <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li> -->
                    <li><a class="nav-link scrollto" href="{{ route('index') }}#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}#recent-blog-posts">Media & Publikasi</a></li>
                    <!-- <li><a href="blog.html">Blog</a></li> -->
                    <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="{{ route('peta') }}">Peta</a></li>
                    <li><a class="getstarted scrollto" href="{{ route('peta2') }}">Peta 2</a></li>
                    <li><a class="getstarted scrollto" href="{{ route('peta3') }}">Peta 3</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->
    @yield('Content')

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <!-- <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    </div>
                    <div class="col-lg-6">
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="assets/img/logo.png" alt="">
                            <span>PS Ketapang</span>
                        </a>
                        <p>WebGIS PS Ketapang merupakan website yang menyediakan sebaran perhutanan sosial di Kabupaten Ketapang.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    @yield('IndexJs')

</html>