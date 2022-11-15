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
        <a href="#" class="nav-link">Child Jalan</a>
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
        <div class="col-md-4">
            @if(session()->get('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>Berhasil</h5>
                {{ session()->get('success') }}
            </div>
            @endif
        </div>
        <!-- Jalan umum  -->
        <div class="col-md-4">
            <!-- /.card -->
            <div class="card">
                <!-- <h2>Kondisi</h2> -->
                <!-- <div class="card-header">
                            <h3 class="card-title">Condensed Full Width Table</h3>
                        </div> -->
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($parentJalanUniq as $jalan)
                            <tr>
                                <td>Nomor Ruas</td>
                                <td><span class="badge bg-success">{{$jalan->nomor_ruas}}</span></td>
                            </tr>
                            <tr>
                                <td>Nama Ruas</td>
                                <td><span>{{$jalan->nama_ruas}}</span></td>
                            </tr>
                            <tr>
                                <td>Provinsi</td>
                                <td><span>{{$jalan->provinsi}}</span></td>
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
        <!-- End jalan umum  -->
        <div class="card-footer">
            <a href="{{ route('child-jalan.create') }}" class="btn btn-info">Tambah Data Kondisi Jalan</a>
        </div>
        <div class="card-header">
            <h3 class="card-title">Data Kondisi Jalan</h3>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Patok Dari</th>
                        <th>Patok Ke</th>
                        <th>Panjang (KM)</th>
                        <th>Lebar (M)</th>
                        <th>Kondisi Jalan</th>
                        <th>Detail</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    @foreach($parentJalan as $jalans)
                    @foreach($jalans->Childjalan as $jalan)
                    <?php $no++; ?>
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$jalan->patok_dari}}</td>
                        <td>{{$jalan->patok_ke}}</td>
                        <td>{{$jalan->panjang}}</td>
                        <td>{{$jalan->lebar}}</td>
                        <td>{{$jalan->kondisi_jalan}}</td>
                        <td><a href="{{route('child-jalan.edit', $jalan->id)}}" class="btn btn-info btn-xs">Edit</a></td>
                        <td>
                            <form action="{{ route('child-jalan.destroy', $jalan->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-xs swalDefaultDeleteMahasiswa" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.content -->
</div>
@endsection