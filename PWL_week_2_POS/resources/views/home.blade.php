<!DOCTYPE html>
<html>
<head>
    <title>Home - POS System</title>
</head>
<body>
    <h1>Selamat Datang di Aplikasi Point of Sales</h1>
    <p>Gunakan menu untuk menavigasi kategori produk atau transaksi.</p>
    <hr>
    <ul>
        <li><a href="{{ url('/category/food-beverage') }}">Kategori: Food & Beverage</a></li>
        <li><a href="{{ url('/category/beauty-health') }}">Kategori: Beauty Health</a></li>
        <li><a href="{{ url('/category/home-care') }}">Kategori: Home care</a></li>
        <li><a href="{{ url('/category/baby-kid') }}">Kategori: Baby Kid</a></li>
        <li><a href="{{ url('/sales') }}">Halaman Transaksi Penjualan</a></li>
    </ul>
</body>
</html>