@extends('layouts.admin')
@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1>Tambah Produk</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/product">Produk</a></li>
        <li class="breadcrumb-item active">Tambah Produk</li>
      </ol>
    </div>
</div>
@endsection
@section('content')
<div class="card card-primary">
    <div class="card-body">
      @foreach($errors->all() as $error)
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ $error }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
      @endforeach
      <form action="/admin/product/tambah-kategori" method="POST">
        @csrf
        <div class="form-group">
          <label for="inputName">Nama Kategori</label>
          <input type="text" id="inputName" class="form-control" name="nama_kategori">
        </div>
      <div class="d-flex justify-content-end">
        <button class="btn btn-success">Tambah Kategori</button>
      </div>
      </form>
    <!-- /.card-body -->
  </div>
</div>
  <!-- /.card -->
@endsection