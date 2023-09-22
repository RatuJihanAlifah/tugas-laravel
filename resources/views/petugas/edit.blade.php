@extends('layout.master')
@section('title', 'petugas')
@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Petugas</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">petugas</li>
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
                          <h3 class="card-title">Form Petugas</h3>
                      </div>
      <!-- /.card-header -->
      <!-- form start -->
    <body>
        <form action="{{ route('petugas.update', $petugas[0]->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="id_petugas">ID Petugas</label>
                    <input class="form-control  @error('id') is-invalid @enderror" type="text" name="id" id="id" placeholder="Masukan ID" value="{{ $petugas[0]->id}}" disabled>
                </div>
                <div class="form-group">
                    <label for="nama_petugas">Nama Petugas</label>
                    <input class="form-control  @error('nama') is-invalid @enderror" type="text" name="nama" id="nama" placeholder="Masukan nama petugas" value="{{ $petugas[0]->nama}}">
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input class="form-control" type="text" name="jabatan" id="jabatan" placeholder="Masukan jabatan" value="{{ $petugas[0]->jabatan}}">
                </div>
                <div class="form-group">
                    <label>No. Telepon</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="number" class="form-control"
                            data-inputmask='"mask": "(999) 999-9999"' name="no_telepon" id="no_telepon" data-mask placeholder="Masukan angka" value="{{ $petugas[0]->no_telepon}}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Masukan alamat">{{ $petugas[0]->no_telepon}}</textarea>
                </div>
                <td>
                    <div class="card-footer">
                        <input type="button" class="btn btn-danger" value="Back" onclick="history.back()">
                        <button type="submit" class="btn btn-warning" onclick="return confirm('Apakah Anda yakin ingin mengedit data ini?')">Update</button>
                    </div>
                </td>
            </div>
        </form>     
    </body>
@endsection