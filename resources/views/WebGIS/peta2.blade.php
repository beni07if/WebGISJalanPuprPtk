@extends('WebGIS.Layouts.AppPeta');

@section('header')
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ route('index') }}" class="logo d-flex align-items-center">
            <img src="assets/img/logo/aiden.png" alt="">
            <!-- <span>PS KETAPANG</span> -->
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{ route('index') }}#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="{{ route('index') }}#about">About</a></li>
                <!-- <li><a class="nav-link scrollto" href="{{ route('index') }}#services">Services</a></li> -->
                <li><a class="nav-link scrollto" href="{{ route('index') }}#portfolio">Galery</a></li>
                <li><a class="nav-link scrollto" href="{{ route('index') }}#team">Team</a></li>
                <!-- <li><a class="nav-ling scrollto active" href="{{ route('blog') }}">Media & Publikasi</a></li> -->
                <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
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
                </li> -->
                <li><a class="nav-link scrollto" href="{{ route('index') }}#contact">Contact</a></li>
                <li><a class="getstarted scrollto" href="{{ route('peta2') }}">Jelajah Peta</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
@endsection

@section('content')
<br><br><br>

<main id="main">

    <style>
        .embed-container {
            position: relative;
            padding-bottom: 50%;
            height: 0;
            max-width: 100%;
        }

        .embed-container iframe,
        .embed-container object,
        .embed-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        small {
            position: absolute;
            z-index: 40;
            bottom: 0;
            margin-bottom: -15px;
        }
    </style>
    <div class="embed-container"><small><a href="//beni07if.maps.arcgis.com/apps/Embed/index.html?webmap=46dc18914d91487eaad1b1134bd7c3de&extent=106.6646,-3.8056,114.778,0.4214&home=true&zoom=true&scale=true&search=true&searchextent=true&details=true&legendlayers=true&active_panel=details&basemap_gallery=true&disable_scroll=true&theme=light" style="color:#0000FF;text-align:left" target="_blank">View larger map</a></small><br><iframe width="800" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="WebGIS PS Ketapang" src="//beni07if.maps.arcgis.com/apps/Embed/index.html?webmap=46dc18914d91487eaad1b1134bd7c3de&extent=106.6646,-3.8056,114.778,0.4214&home=true&zoom=true&previewImage=true&scale=true&search=true&searchextent=true&details=true&legendlayers=true&active_panel=details&basemap_gallery=true&disable_scroll=true&theme=light"></iframe></div>

</main><!-- End #main -->
@endsection