<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset ('css/style.css')}}">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="p-3 text-center border-bottom">
            <h5>📊 Dashboard</h5>
        </div>
        <a href="{{ route('barang') }}">📦 Data Barang</a>
        <a href="{{ route('transaksi') }}">💰 Data Transaksi</a>
        <a href="{{ route('login') }}">🚪 Logout</a>
    </div>
    <!-- Konten utama -->
    <div class="content">
        <nav class="navbar navbar-light px-3 mb-3">
            <span class="navbar-text fw-semibold">@yield('title')</span>
        </nav>
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
