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
                                <h3 class="card-title">Data Anggota</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="id">ID Anggota</label>
                                        <input type="text" class="form-control" name="id" id="id" placeholder="Masukkan ID" value="{{ $anggota[0]->id }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="kode_anggota">Kode Anggota</label>
                                        <input type="text" class="form-control" id="kode_anggota"
                                            placeholder="Masukan kode" name="kode_anggota" value="{{ $anggota[0]->kode_anggota }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama"
                                            placeholder="Masukan nama" name="nama" value="{{ $anggota[0]->nama }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="jk">Jenis Kelamin</label>
                                        <input type="text" class="form-control" id="jenis_kelamin"
                                            placeholder="Masukan nama" name="jenis_kelamin" value="{{ $anggota[0]->jenis_kelamin }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Jurusan</label>
                                        <input type="text" class="form-control" id="jurusan"
                                            placeholder="Masukan nama" name="jurusan" value="{{ $anggota[0]->jurusan }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>No. Telepon</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="number" class="form-control"
                                                 placeholder="Masukan angka" name="no_telepon" value="{{ $anggota[0]->no_telepon }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" rows="3" placeholder="Masukan alamat" name="alamat" disabled>{{ $anggota[0]->alamat }}</textarea>
                                        </div>
                                </div>
                                <div class="card-footer">
                                    <input type="button" class="btn btn-danger" value="Kembali" onclick="history.back()">
                                </div>
                        </div>
@endsection