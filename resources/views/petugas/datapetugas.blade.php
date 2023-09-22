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
                            <li class="breadcrumb-item active">Petugas</li>
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
                                <h3 class="card-title">Data Petugas</h3>
                            </div>
                            <!-- /.card-header -->
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Nama Petugas</th>
                                    <th>Jabatan</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @forelse ($petugas as $key=>$item)               
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->jabatan }}</td>
                                        <td>
                                    <form action="{{ route('petugas.destroy', $item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <a href="{{ route('petugas.show', $item->id) }}" class="btn-sm btn-info">show</a>
                                        <a href="{{ route('petugas.edit', $item->id) }}" class="btn-sm btn-warning">edit</a>
                                        <button type="submit" class="btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus ini?')">delete</button>
                                        </td>
                                    </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection