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
        <div class="card-footer">
            <a href="{{ route('tambahJalan') }}" class="btn btn-primary">Add Data Jalan</a>
        </div>
        <div class="card-header">
            <h3 class="card-title">Data Jalan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No. Ruas</th>
                        <th>Nama Ruas</th>
                        <th>Panjgan (km)</th>
                        <th>Kecamatan</th>
                        <th>Kelurahan</th>
                        <th>Koordinat Pangkal</th>
                        <th>Koordinat Ujung</th>
                        <th>Detail</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td> 14</td>
                        <td>Jalan Tanjungpura</td>
                        <td>12</td>
                        <td>Pontianak Selatan</td>
                        <td>Akcaya</td>
                        <td>xxxxx</td>
                        <td>yyyyy</td>
                        <td> Button</td>
                        <td>Button</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td> 15</td>
                        <td>Jalan Ayani</td>
                        <td>17</td>
                        <td>Pontianak Tenggara</td>
                        <td>Belitung</td>
                        <td> xxxxx</td>
                        <td>yyyyy</td>
                        <td> Button</td>
                        <td>Button</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.content -->
</div>
@endsection