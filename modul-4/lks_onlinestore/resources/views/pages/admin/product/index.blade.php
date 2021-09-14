@extends('layouts.admin')
@section('content-header')
    <div class="row mb-2">
    <div class="col-sm-6">
      <h1>Data Transaksi</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Data Transaksi</li>
      </ol>
    </div>
  </div>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tabel Laporan Penjualan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama Produk</th>
                  <th>Kategori</th>
                  <th>Deskripsi</th>
                  <th>Harga</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                      <td>{{ $product->nama_produk }}</td>
                      <td>{{ $product->nama_kategori }}</td>
                      <td>{{ substr($product->deskripsi, 0, 100) }}</td>
                      <td>{{ $product->harga }}</td>
                      <td>
                          <div class="d-flex">
                              <a class="mx-1" href="/product/{{ $product->id }}">
                                  <button class="btn btn-success">Lihat</button>
                              </a>
                              <a class="mx-1" href="/admin/product/hapus/{{ $product->id }}">
                                <button class="btn btn-danger">Hapus</button>
                            </a>
                          </div>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection