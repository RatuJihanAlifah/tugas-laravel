@extends('layout.master')
@section('title', 'anggota')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Anggota</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Anggota</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Anggota</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('anggota.store') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="kode_anggota">Kode Anggota</label>
                                        <input type="text" class="form-control  @error('kode_anggota') is-invalid @enderror" id="kode_anggota"
                                            placeholder="Masukan kode" name="kode_anggota">
                                    </div>
                                    @error('kode-anggota')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control  @error('nama') is-invalid @enderror" id="nama"
                                            placeholder="Masukan nama" name="nama">
                                    </div>
                                    @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="jk">Jenis Kelamin</label>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="l"
                                                name="jenis_kelamin" value="Laki-laki">
                                            <label for="l" class="custom-control-label">Laki-laki</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="p"
                                                name="jenis_kelamin" value="Perempuan">
                                            <label for="p" class="custom-control-label">Perempuan</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Jurusan</label>
                                        <select class="custom-select" name="jurusan">
                                            <option selected disabled>Pilih Jurusan</option>
                                            <option value="TKRO">TKRO</option>
                                            <option value="TBSM">TBSM</option>
                                            <option value="TP">TP</option>
                                            <option value="TPGM">TPGM</option>
                                            <option value="TPL">TPL</option>
                                            <option value="TFLM">TFLM</option>
                                            <option value="TITL">TITL</option>
                                            <option value="DPIB">DPIB</option>
                                            <option value="TKJ">TKJ</option>
                                            <option value="RPL">RPL</option>
                                            <option value="TEI">TEI</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>No. Telepon</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="number" class="form-control"
                                                data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukan angka" name="no_telepon">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" rows="3" placeholder="Masukan alamat" name="alamat"></textarea>
                                        </div>
                                    <td>
                                        <div class="card-footer">
                                            <input type="button" class="btn btn-danger" value="Back" onclick="history.back()">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </td>
                                </div>
                                <!-- /.content -->
                            </form>
                        </div>
@endsection