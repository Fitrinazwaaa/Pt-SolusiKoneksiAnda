<?php
use App\Models\Module;
$modules = Module::orderBy('index_order')->get();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f1f5f9;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Navbar Atas */
        .navbar-top {
            background-color: #ffffff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 40px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 999;
        }

        .navbar-top .left {
            display: flex;
            align-items: center;
        }

        .navbar-top .brand-link {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .navbar-top .logo {
            width: 36px;
            height: 36px;
            border-radius: 6px;
            object-fit: cover;
        }

        .navbar-top .company-name {
            font-size: 16px;
            font-weight: 600;
            color: #1e293b;
        }

        .navbar-top .right {
            display: flex;
            align-items: center;
            gap: 20px;
            font-size: 14px;
            color: #334155;
        }

        .navbar-top .logout-btn {
            background-color: #bf2929;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .navbar-top .logout-btn:hover {
            background-color: #790909;
        }

        .navbar-bottom {
            background-color: #1e293b;
            position: fixed;
            top: 54px;
            left: 0;
            right: 0;
            z-index: 998;
        }

        .navbar-bottom ul {
            list-style: none;
            display: flex;
            justify-content: center;
            padding: 14px 0;
        }

        .navbar-bottom li {
            position: relative;
            margin: 0 20px;
        }

        .navbar-bottom a {
            color: #f1f5f9;
            font-size: 15px;
            padding: 10px;
            transition: color 0.3s ease;
        }

        .navbar-bottom a:hover {
            color: #3b82f6;
        }

        /* Dropdown */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #334155;
            border-radius: 6px;
            top: 100%;
            left: 0;
            min-width: 160px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            z-index: 10;
        }

        .dropdown-content a {
            padding: 12px 16px;
            display: block;
            color: #f1f5f9;
        }

        .dropdown-content a:hover {
            background-color: #475569;
        }

        .navbar-bottom li:hover .dropdown-content {
            display: block;
        }

        /* Responsive hint (opsional bisa dikembangkan nanti) */
        @media (max-width: 768px) {

            .navbar-top,
            .navbar-bottom ul {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .navbar-bottom li {
                margin: 10px 0;
            }
        }

        .modern-footer {
            background-color: #0f172a;
            color: #cbd5e1;
            /* padding: 60px 20px 30px; */
            font-family: 'Segoe UI', sans-serif;
        }

        /* Footer Bottom */
        .footer-bottom {
            border-top: 1px solid #1e293b;
            padding-top: 20px;
            padding-bottom: 20px;
            text-align: center;
            font-size: 14px;
            color: #64748b;
        }
    </style>
</head>

<body>
    <!-- Navbar Atas -->
    <div class="navbar-top">
        <div class="left">
            <a href="{{ route('login') }}" class="brand-link">
                <img src="{{ asset('logo2.png') }}" alt="Logo" class="logo">
                <div class="company-name">PT. Solusi Koneksi Anda</div>
            </a>
        </div>
        <div class="right">
            <span>📞 0812-3456-7890</span>
        </div>
    </div>

    <!-- Navbar Bawah -->
    <nav class="navbar-bottom">
        <ul>
            <li><a href="{{ route('awal') }}">Home</a></li>
            <li><a href="{{ route('user.profile') }}">Profil Perusahaan</a></li>
            <li>
                <a href="#">Produk ▾</a>
                <div class="dropdown-content">
                    @foreach ($modules as $module)
                        <a href="{{ route('user.produk', $module->id) }}">
                            {{ $module->name }}
                        </a>
                    @endforeach
                </div>
            </li>

            <li><a href="{{ route('user.artikel') }}">Artikel</a></li>
            <li>
                <a href="{{ route('user.galeri') }}">Galeri Kegiatan</a>
            </li>
            <li><a href="{{ route('user.kontak') }}">Kontak Kami</a></li>
        </ul>
    </nav>
    <div style="padding: 140px;">
        @yield('content') {{-- Tempat isi halaman --}}
    </div>

    {{-- footer --}}
    <footer class="modern-footer">
        <div class="footer-bottom">
            <p>&copy; 2025 PT. Solusi Koneksi Anda. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
