@extends('layout.master')
@section('title', 'rak')
@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Rak</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Rak</li>
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
                          <h3 class="card-title">Form Rak Buku</h3>
                      </div>
      <!-- /.card-header -->
      <!-- form start -->
    <body>
        <form action="{{ route('rak.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama Rak</label>
                    <input class="form-control" type="text" name="nama" id="nama" placeholder="Masukan nama rak" value="{{ old('nama') }}">
                </div>
                <div class="form-group">
                    <label for="lokasi">Lokasi Rak</label>
                    <input class="form-control" type="text" name="lokasi" id="lokasi" placeholder="Masukan lokasi" value="{{ old('lokasi') }}">
                </div>
                <td>
                    <div class="card-footer">
                        <input type="button" class="btn btn-danger" value="Back" onclick="history.back()">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </td>
            </div>
        </form>     
    </body>
@endsection