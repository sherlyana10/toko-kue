@extends('layouts.app')

@section('title', 'Produk - Toko Kue')

@section('content')
  <div class="d-flex justify-content-between align-items-center">
    <h3>Daftar Produk 🍪</h3>
    <button class="btn btn-danger" style="background:#ff6f69; border:none; border-radius:8px;">+ Tambah Produk</button>
  </div>

  <table class="table table-bordered mt-4">
    <thead class="table-light">
      <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="5" class="text-center text-muted py-4">Belum ada produk yang ditambahkan 🍰</td>
      </tr>
    </tbody>
  </table>
@endsection
