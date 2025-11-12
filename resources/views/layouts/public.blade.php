<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Fluffy Bite — Toko Kue')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff8f0;
            overflow-x: hidden;
        }
        nav.navbar {
            background: transparent;
            position: absolute;
            width: 100%;
            top: 0;
            z-index: 100;
            padding: 20px 8%;
        }
        .navbar-brand {
            font-weight: 700;
            color: #d87c6e;
            font-size: 1.5rem;
        }
        .nav-link {
            color: #444 !important;
            font-weight: 500;
            margin-left: 20px;
        }
        .nav-link:hover {
            color: #d87c6e !important;
        }
        footer {
            background-color: #fff3ea;
            text-align: center;
            padding: 20px;
            font-size: 14px;
            color: #666;
            margin-top: 50px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Fluffy Bite</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/produk">Produk</a></li>
        <li class="nav-item"><a class="nav-link" href="/tentang">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="/kontak">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>

@yield('content')

<footer>
    © {{ date('Y') }} Fluffy Bite — Semua Hak Dilindungi 🍰
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
