@extends('layouts.app')

@section('title', 'Dashboard - Toko Kue')

@section('content')
  <h3>Selamat Datang di Dashboard, Admin 🍰</h3>
  <p>Berikut ringkasan toko kue kamu hari ini:</p>

  <div class="row mt-4">
    <div class="col-md-4">
      <div class="card p-3 text-center">
        <h5>Total Produk</h5>
        <h2>-</h2>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card p-3 text-center">
        <h5>Total Pesanan</h5>
        <h2>-</h2>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card p-3 text-center">
        <h5>Total Penjualan</h5>
        <h2>-</h2>
      </div>
    </div>
  </div>
@endsection
