@extends('layouts.layout-customer')
@section('content')
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">Keranjang Belanja</h3>

                <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                ID
                            </th>

                            <th style="width: 150px">
                                Gambar Produk
                            </th>
                            <th style="width: 20%">
                                Nama Produk
                            </th>
                            <th>
                                Harga
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>
                                {{ $product->id }}
                            </td>
                            <td>
                                <img src="/uploads/{{ $product->gambar }}" alt="{{ $product->nama_produk }}" style="width: 100px; height: 100px; object-fit: cover;">
                            </td>
                            <td>
                                <a>
                                    {{ $product->nama_produk }}
                                </a>
                                <br/>
                                <small>
                                    {{ $product->nama_kategori }}
                                </small>
                            </td>
                            <td class="project_progress">
                                ${{ number_format($product->harga) }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    <div class="d-flex justify-content-end mx-1 my-2">
                        <a href="/product/deletecart">
                            <button class="btn btn-danger">Hapus Keranjang</button>
                        </a>
                    </div>
                    <div class="d-flex justify-content-end mx-1 my-2">
                        <a href="/product/checkout">
                            <button class="btn btn-success">Checkout</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </section>
@endsection