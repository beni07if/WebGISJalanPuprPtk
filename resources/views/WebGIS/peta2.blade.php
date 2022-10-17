@extends('WebGIS.Layouts.AppPeta')

@section('header')
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ route('index') }}" class="logo d-flex align-items-center">
            <img src="assets/img/pupr-ptk/logo-webgis-pupr-ptk2.JPG" alt="">
            <!-- <span>WebGIS PS Ketapang</span> -->
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{ route('index') }}">HOME</a></li>
                <li><a class="nav-link scrollto" href="{{ route('tentang') }}">DATA</a></li>
                <li><a class="nav-link scrollto" href="{{ route('peta2') }}">PETA</a></li>
                <li><a class="nav-link scrollto" href="{{ route('galery') }}">GALERY</a></li>
                <li><a class="nav-link scrollto" href="{{ route('index') }}#contact ">DOWNLOAD</a></li>
                <li><a class="nav-link scrollto" href="{{ route('index') }}#contact ">CONTACT</a></li>
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
    <div class="embed-container"><small><a href="//www.arcgis.com/apps/Embed/index.html?webmap=f8cdfbba91ec4b019e22a4db96b3e722&extent=109.0978,-0.1683,109.5974,0.0834&home=true&zoom=true&scale=true&search=true&searchextent=true&details=true&legendlayers=true&active_panel=legend&basemap_gallery=true&disable_scroll=false&theme=light" style="color:#0000FF;text-align:left" target="_blank">View larger map</a></small><br><iframe width="800" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="WebGIS Jalan PUPR Ppntianak" src="//www.arcgis.com/apps/Embed/index.html?webmap=f8cdfbba91ec4b019e22a4db96b3e722&extent=109.0978,-0.1683,109.5974,0.0834&home=true&zoom=true&previewImage=false&scale=true&search=true&searchextent=true&details=true&legendlayers=true&active_panel=legend&basemap_gallery=true&disable_scroll=false&theme=light"></iframe></div>

    <!-- <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1aIemFq2ONA3cUjGuypuXHQABdTWMIxE&usp=sharing" width="100%" height="880"></iframe> -->
    <!-- <iframe src="https://maps.arcgis.com/apps/mapviewer/index.html?webmap=de97d7b8e92b4cb489cf530554ce03a8" width="100%" height="880"></iframe> -->

</main><!-- End #mains -->
@endsection