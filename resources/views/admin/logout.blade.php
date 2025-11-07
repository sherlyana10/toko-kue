@extends('layouts.app')

@section('title', 'Logout - Toko Kue')

@section('content')
  <div class="text-center mt-5">
    <h3 class="mb-4" style="color:#ff6f69; font-family:'Pacifico', cursive;">Kamu yakin mau logout, Admin? 🍰</h3>
    
    <p class="text-muted mb-5">Kalau kamu logout, kamu harus login lagi untuk mengakses dashboard.</p>

    <div class="d-flex justify-content-center gap-3">
      <a href="/admin/dashboard" class="btn btn-secondary px-4 py-2">Batal</a>
      <a href="/login" class="btn btn-danger px-4 py-2" style="background:#ff6f69; border:none;">Logout</a>
    </div>
  </div>
@endsection
