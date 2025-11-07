<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Toko Kue')</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Pacifico&display=swap" rel="stylesheet">

  <style>
    body {
      background: #f8f9fa;
      font-family: 'Poppins', sans-serif;
    }
    .sidebar {
      height: 100vh;
      background-color: #ffb6b9;
      padding-top: 30px;
      position: fixed;
      width: 220px;
    }
    .sidebar h2 {
      font-family: 'Pacifico', cursive;
      color: white;
      text-align: center;
      margin-bottom: 30px;
      font-size: 28px;
    }
    .sidebar a {
      display: block;
      color: white;
      text-decoration: none;
      padding: 12px 20px;
      margin: 5px 0;
      border-radius: 10px;
      transition: 0.3s;
    }
    .sidebar a:hover,
    .sidebar a.active {
      background: rgba(255, 255, 255, 0.3);
    }
    .content {
      margin-left: 240px;
      padding: 30px;
    }
    h3 {
      font-family: 'Pacifico', cursive;
      color: #ff6f69;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h2>Toko Kue</h2>
    <a href="/admin/dashboard" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">Dashboard</a>
    <a href="/admin/produk" class="{{ request()->is('admin/produk') ? 'active' : '' }}">Produk</a>
    <a href="/admin/pesanan" class="{{ request()->is('admin/pesanan') ? 'active' : '' }}">Pesanan</a>
    <a href="/admin/logout" class="{{ request()->is('admin/logout') ? 'active' : '' }}">Logout</a>
  </div>

  <!-- Content -->
  <div class="content">
    @yield('content')
  </div>

</body>
</html>
