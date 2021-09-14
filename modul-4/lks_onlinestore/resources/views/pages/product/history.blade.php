@extends('layouts.layout-customer')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Riwayat Transaksi</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Kode Transaksi</th>
                <th>Tanggal</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
                  @foreach ($transactions as $transaction)
                  <tr>
                    <td>{{ $transaction->kode_transaksi }}</td>
                    <td>{{ $transaction->tanggal }}</td>
                    <td>
                        <a href="/product/summary/{{ $transaction->kode_transaksi }}">
                            <button class="btn btn-success">Buka Invoice</button>
                        </a>
                    </td>
                  </tr>
                  @endforeach
                <td>Win 95+</td>
                <td> 4</td>
                <td>X</td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection