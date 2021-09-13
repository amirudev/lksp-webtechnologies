@extends('layouts.layout')
@section('content')
    <div class="row d-flex">
      @foreach ($products as $product)
        <div class="card py-2 mx-1" style="width: 200px">
          <div class="bg-light mx-auto" style="width: 175px; height: 175px;"></div>
          <div class="px-3">
            <p class="font-weight-bold mb-0">{{ $product->nama_produk }}</p>
            <p class="mb-2">${{ number_format($product->harga) }}</p>
            <a href="/product/{{ $product->id }}">
              <button class="btn btn-success w-100">Beli</button>
            </a>
          </div>
        </div>
      @endforeach
    </div>
    <!-- /.row -->
@endsection