@extends('AdminPanel.Layout.App')

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
        <!-- <div class="card-footer">
            <a href="{{ route('tambahJalan') }}" class="btn btn-primary">Add Data Jalan</a>
        </div> -->
        <div class="card-header">
            <h3 class="card-title">Data Jalan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="col-md-8">
                @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div><br />
                @endif
                <!-- Horizontal Form -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Jalan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="{{ route('simpanJalan') }} " enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="nomor_ruas" class="col-sm-2 col-form-label">Nomor Ruas</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nomor_ruas" id="nomor_ruas" placeholder="Nomor Ruas">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_ruas" class="col-sm-2 col-form-label">Nama Ruas</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nomor_ruas" id="nama_ruas" placeholder="Nama Ruas">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="panjang" class="col-sm-2 col-form-label">Panjang</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="panjang" id="panjang" placeholder="..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Pontianak ..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kelurahan" class="col-sm-2 col-form-label">Kelurahan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kelurahan" id="kelurahan" placeholder="Kelurahan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="koordinat_pangkal" class="col-sm-2 col-form-label">Koordinat Pangkal</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="koordinat_pangkal" id="koordinat_pangkal" placeholder="..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="koordinat_ujung" class="col-sm-2 col-form-label">Koordinat Ujung</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="koordinat_ujung" id="koordinat_ujung" placeholder="..">
                                </div>
                            </div>
                            <h5 class="mt-4 mb-2">Kondisi</h5>
                            <div class="form-group row">
                                <label for="kondisi_baik" class="col-sm-2 col-form-label">Baik (km)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kondisi_baik" id="kondisi_baik" placeholder="..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kondisi_sedang" class="col-sm-2 col-form-label">Sedang (km)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kondisi_sedang" id="kondisi_sedang" placeholder="..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kondisi_rusak_ringan" class="col-sm-2 col-form-label">Rusak Ringan (km)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kondisi_rusak_ringan" id="kondisi_rusak_ringan" placeholder="..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kondisi_rusak_berat" class="col-sm-2 col-form-label">Rusak Berat (km)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kondisi_rusak_berat" id="kondisi_rusak_berat" placeholder="..">
                                </div>
                            </div>

                            <h5 class="mt-4 mb-2">Jenis Perkerasan</h5>
                            <div class="form-group row">
                                <label for="jp_aspal" class="col-sm-2 col-form-label">Aspal (%)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jp_aspal" id="jp_aspal" placeholder="..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jp_beton" class="col-sm-2 col-form-label">Beton (%)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jp_beton" id="jp_beton" placeholder="..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jp_kerikil" class="col-sm-2 col-form-label">Kerikil (%)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jp_kerikil" id="jp_kerikil" placeholder="..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jp_tanah" class="col-sm-2 col-form-label">Tanah (%)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jp_tanah" id="jp_tanah" placeholder="..">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Simpan</button>
                            <!-- <button type="submit" class="btn btn-default float-right">Batal</button> -->
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.content -->
</div>
@endsection