@extends('layouts.layout-customer')
@section('content')
<div class="card card-solid">
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-sm-6">
          <h3 class="d-inline-block d-sm-none mb-3">{{ $product->nama_produk }}</h3>
          <div class="col-12">
            <img src="/uploads/{{ $product->gambar }}" alt="{{ $product->nama_produk }}" style="width: 100%; height: 50vh; object-fit: contain;">
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <h3 class="my-3">{{ $product->nama_produk }}</h3>
          <p>{{ substr($product->deskripsi, 0, 1000) }}</p>

          <hr>

          <div class="bg-gray py-2 px-3 mt-4">
            <h2 class="mb-0">
              ${{ number_format($product->harga) }}
            </h2>
          </div>

          <div class="mt-4">
            <a href="/product/add/{{ $product->id }}">
                <div class="btn btn-primary btn-lg btn-flat">
                  <i class="fas fa-cart-plus fa-lg mr-2"></i>
                  Add to Cart
                </div>
            </a>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <nav class="w-100">
          <div class="nav nav-tabs" id="product-tab" role="tablist">
            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
          </div>
        </nav>
        <div class="tab-content p-3" id="nav-tabContent">
          <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">{{ $product->deskripsi }}</div>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection