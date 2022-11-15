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
        <a href="#" class="nav-link">Jalan Umum</a>
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
        <div class="card-footer">
            <a href="{{ route('parent-jalan.create') }}" class="btn btn-primary">Tambah Data Jalan Induk</a>
            <a href="{{ route('child-jalan.index') }}" class="btn btn-info">Lihat Semua Kondisi Jalan</a>
            <a href="{{ route('child-jalan.create') }}" class="btn btn-info">Tambah Kondisi Jalan</a>
        </div>
        <div class="card-header">
            <h3 class="card-title">Data Jalan Induk</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No. Ruas</th>
                        <th>Nama Ruas</th>
                        <th>Provinsi</th>
                        <th>Detail</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    @foreach($parentJalan as $jalan)
                    <?php $no++; ?>
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$jalan->nomor_ruas}}</td>
                        <td>{{$jalan->nama_ruas}}</td>
                        <td>{{$jalan->provinsi}}</td>
                        <td><a href="{{route('child-jalan.show', $jalan->id)}}" class="btn btn-info btn-xs">Detail</a></td>
                        <td><a href="{{route('parent-jalan.edit', $jalan->id)}}" class="btn btn-warning btn-xs">Edit</a></td>
                        <td>
                            <form action="{{ route('parent-jalan.destroy', $jalan->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-xs swalDefaultDeleteMahasiswa" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.content -->
</div>
@endsection