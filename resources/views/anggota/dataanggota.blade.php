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
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Kode Anggota</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jurusan</th>
                                    <th>No Telepon</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @forelse ($anggotas as $key=>$item)               
                                    <tr>
                                      <td>{{ $key + 1 }}</td>
                                      <td>{{ $item->kode_anggota }}</td>
                                      <td>{{ $item->nama }}</td>
                                      <td>{{ $item->jenis_kelamin }}</td>
                                      <td>{{ $item->jurusan }}</td>
                                      <td>{{ $item->no_telepon }}</td>
                                      <td>
                                        <form action="{{ route('anggota.destroy', $item->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <a href="{{ route('anggota.show', $item->id) }}" class="btn-sm btn-info">show</a>
                                        <a href="{{ route('anggota.edit', $item->id) }}" class="btn-sm btn-warning">edit</a>
                                        <button type="submit" class="btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">delete</button>
                                        </form>
                                      </td>
                                    </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                              </table>
                              <div class="card-footer">
                                <input type="button" class="btn btn-danger" value="Kembali" onclick="history.back()">
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection