@extends('layouts.app')

@section('title', 'Pesanan - Toko Kue')

@section('content')
  <div class="d-flex justify-content-between align-items-center">
    <h3>Daftar Pesanan 🧁</h3>
  </div>

  <table class="table table-bordered mt-4">
    <thead class="table-light text-center align-middle">
      <tr>
        <th>No</th>
        <th>Nama Pelanggan</th>
        <th>Produk</th>
        <th>Jumlah</th>
        <th>Total Harga</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody class="text-center">
      <tr>
        <td colspan="7" class="text-muted py-4">Belum ada pesanan yang masuk 🍩</td>
      </tr>
    </tbody>
  </table>
@endsection
