@extends('layouts.layout-customer')
@section('content')
<!-- Main content -->
<div class="invoice p-3 mb-3">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h4>
          <i class="fas fa-globe"></i> Tokopayuli
          <small class="float-right">Date: {{ date('Y/m/d') }}</small>
        </h4>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>Tokopayuli</strong><br>
          795 Folsom Ave, Suite 600<br>
          San Francisco, CA 94107<br>
          Phone: (804) 123-5432<br>
          Email: tokopayuli@lksonlinestore.com
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong>{{ $transaction->customer->nama_lengkap }}</strong><br>
          {{ $transaction->customer->alamat_lengkap }}<br>
          Email : {{ $transaction->customer->email }}
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Invoice {{ $transaction->kode_transaksi }}</b><br>
        <br>
        <b>Order ID:</b> {{ $transaction->kode_transaksi }}<br>
        <b>Payment Due:</b> {{ date('Y/m/d') }}<br>
        <b>Account:</b> {{ $transaction->customer->no_hp }}
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Qty</th>
            <th>Product</th>
            <th>Description</th>
            <th>Subtotal</th>
          </tr>
          </thead>
          <tbody>
            <?php $totalHarga = 0; ?>
            @foreach ($transaction->transaksiDetail as $item)
              <tr>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->nama_produk }}</td>
                <td>{{ substr($item->deskripsi, 0, 50) }}</td>
                <td>${{ number_format($item->harga) }}</td>
              </tr>
              <?php $totalHarga += $item->harga ?>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
        <p class="lead">Payment Methods:</p>
        <img src="../../dist/img/credit/visa.png" alt="Visa">
        <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
        <img src="../../dist/img/credit/american-express.png" alt="American Express">
        <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

        <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
          Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
          plugg
          dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
        </p>
      </div>
      <!-- /.col -->
      <div class="col-6">
        <p class="lead">Amount Due {{ date('Y/m/d') }}</p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Subtotal:</th>
              <td>${{ number_format($totalHarga) }}</td>
            </tr>
            <tr>
              <th>Tax (15%)</th>
              <td>${{ number_format($totalHarga * 0.15) }}</td>
            </tr>
            <tr>
              <th>Shipping:</th>
              <td>$10</td>
            </tr>
            <tr>
              <th>Total:</th>
              <td>${{ number_format($totalHarga * 1.15 + 10) }}</td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- this row will not appear when printing -->
    <div class="row no-print">
      <div class="col-12">
        <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
        <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
          <i class="fas fa-download"></i> Generate PDF
        </button>
      </div>
    </div>
  </div>
  <!-- /.invoice -->
  @endsection