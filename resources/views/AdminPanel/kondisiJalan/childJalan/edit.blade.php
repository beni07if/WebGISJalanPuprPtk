@extends('AdminPanel.Layout.App')

@section('tagheader')
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Edit Data Kondisi Jalansw</a>
    </li>
</ul>
@endsection('tagheader')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Data Kondisi Jalan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="col-md-8">

                <!-- Horizontal Form -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Kondisi Jalan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    @foreach($childJalan as $jalan)
                    <form class="form-horizontal" method="POST" action="{{ route('child-jalan.update', $jalan->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="provinsi" class="col-sm-3 col-form-label">No. Ruas / Nama Ruas</label>
                                <div class="col-sm-9">
                                    <!-- <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder=".."> -->
                                    <!-- <label>Minimal</label> -->
                                    <select class="form-control select2" name="parentjalan_id" style="width: 100%;">
                                        @foreach($parentJalan as $jalans)
                                        <option selected="selected" value="{{$jalans->id}}">{{$jalans->nomor_ruas}} / {{$jalans->nama_ruas}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="patok_dari" class="col-sm-3 col-form-label">Patok Dari</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="patok_dari" value="{{$jalan->patok_dari}}" id="patok_dari" placeholder="Patok Dari..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="patok_ke" class="col-sm-3 col-form-label">Patok Ke</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="patok_ke" value="{{$jalan->patok_ke}}" id="patok_ke" placeholder="Patok Ke..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="panjang" class="col-sm-3 col-form-label">Panjang (KM)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="panjang" value="{{$jalan->panjang}}" id="panjang" placeholder="Panjang (KM)">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lebar" class="col-sm-3 col-form-label">Lebar (M)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="lebar" value="{{$jalan->lebar}}" id="lebar" placeholder="Lebar (M)">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kondisi_jalan" class="col-sm-3 col-form-label">Kondisi Jalan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="kondisi_jalan" value="{{$jalan->kondisi_jalan}}" id="kondisi_jalan" placeholder="Kondisi Jalan">
                                </div>
                            </div>
                        </div>

                        <!-- /.card-header -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Simpan</button>
                            <!-- <button type="submit" class="btn btn-default float-right">Batal</button> -->
                        </div>
                        <!-- /.card-body -->

                    </form>
                    @endforeach
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.content -->
</div>
@endsection