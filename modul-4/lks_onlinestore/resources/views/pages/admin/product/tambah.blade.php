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
      <form action="/admin/product/tambah" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="inputName">Nama Produk</label>
          <input type="text" id="inputName" class="form-control" name="nama_produk">
        </div>
        <div class="form-group">
            <label for="inputStatus">Kategori</label>
            <select id="inputStatus" class="form-control custom-select" name="kategori_id">
                <option selected disabled>Pilih Kategori</option>
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>  
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="inputDescription">Deskripsi Produk</label>
            <textarea id="inputDescription" class="form-control" rows="4" name="deskripsi"></textarea>
          </div>
        <div class="form-group">
          <label for="inputClientCompany">Harga</label>
          <input type="number" id="inputClientCompany" class="form-control" name="harga" maxlength="4">
        </div>
        <div class="form-group">
          <label for="inputProjectLeader">Gambar</label>
          <input type="file" id="inputProjectLeader" class="form-control" name="gambar">
        </div>
      </div>
      <div class="d-flex justify-content-end">
        <button class="btn btn-success">Tambah Produk</button>
      </div>
      </form>
    <!-- /.card-body -->
  </div>
</div>
  <!-- /.card -->
@endsection