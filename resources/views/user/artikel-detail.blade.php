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
            gap: 12px;
        }

        .navbar-top .logo {
            width: 48px;
            height: 48px;
            border-radius: 8px;
            object-fit: cover;
        }

        .navbar-top .company-name {
            font-size: 20px;
            font-weight: bold;
            color: #1e293b;
        }

        .navbar-top .right {
            display: flex;
            align-items: center;
            gap: 20px;
            font-size: 15px;
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
            background-color: #2563eb;
        }

        /* Navbar Bawah */
        .navbar-bottom {
            background-color: #1e293b;
            position: fixed;
            top: 65px;
            /* sesuaikan dengan tinggi navbar-top */
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
    </style>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(to bottom, #e0f2fe, #f8fafc);
        margin: 0;
        padding: 0;
        color: #1e293b;
    }

    .hero {
        position: relative;
        width: 100%;
        height: 330px;
        background-image: url('{{ asset('storage/header-artikel.jpg') }}');
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        margin-top: 115px;
    }

    .hero::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: linear-gradient(135deg, rgba(2, 33, 82, 0.7), rgba(1, 8, 33, 0.7));
        z-index: 1;
    }

    .hero-frame {
        position: absolute;
        inset: 20px;
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 30px;
        backdrop-filter: blur(6px);
        z-index: 2;
    }

    .hero h1 {
        position: relative;
        z-index: 3;
        color: white;
        font-size: 56px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 3px;
        text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.3);
        animation: fadeInDown 1s ease-out;
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
<style>
    .article-detail {
        max-width: 1080px;
        margin: 60px auto;
        padding: 0;
        background-color: white;
        border-radius: 16px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
        overflow: hidden;
    }

    .article-image-top {
        width: 100%;
        height: 420px;
        overflow: hidden;
        border-top-left-radius: 16px;
        border-top-right-radius: 16px;
    }

    .article-image-top img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .article-meta {
        padding: 30px;
    }

    .meta-keyword {
        font-size: 14px;
        color: #3b82f6;
        font-weight: 600;
        margin-bottom: 12px;
        display: inline-block;
    }

    .article-title {
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 20px;
        color: #1e3a8a;
    }

    .article-content {
        font-size: 16px;
        color: #334155;
        line-height: 1.8;
        white-space: pre-wrap;
    }

    .back-button {
        display: inline-block;
        margin: 30px;
        margin-bottom: 0;
        padding: 10px 20px;
        background-color: #3b82f6;
        color: white;
        font-size: 14px;
        font-weight: 600;
        border-radius: 8px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .back-button:hover {
        background-color: #2563eb;
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
            <img src="{{ asset('logo2.png') }}" alt="Logo" class="logo">
            <div class="company-name">PT. Solusi Koneksi Anda</div>
        </div>
        <div class="right">
            <span>📞 0812-3456-7890</span>
            {{-- <button class="logout-btn">Logout</button> --}}
            <a href="{{ route('logout') }}" class="logout-btn"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="logout-link"><i class="bi bi-box-arrow-right"></i> Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>

    <!-- Navbar Bawah -->
    <nav class="navbar-bottom">
        <ul>
            <li><a href="{{ route('dashboard') }}">Home</a></li>
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
                <a href="{{ route('user.galeri') }}">Galeri Kegiatan ▾</a>
                <div class="dropdown-content">
                    <a href="#">Foto</a>
                    <a href="#">Video</a>
                </div>
            </li>
            <li><a href="{{ route('user.kontak') }}">Kontak Kami</a></li>
        </ul>
    </nav>

  <!-- Hero Section -->
<div class="hero">
    <div class="hero-frame"></div>
    <h1>Article Detail</h1>
</div>

<div class="article-detail">
    <div class="article-image-top">
        <img src="{{ asset('storage/' . $article->title_image) }}" alt="{{ $article->title }}">
    </div>

    <div class="article-meta">
        <div class="meta-keyword">#{{ $article->meta_keyword }}</div>
        <div class="article-title">{{ $article->title }}</div>
        <div class="article-content">
            {!! nl2br(e($article->content)) !!}
        </div>
        <a href="{{ route('user.artikel') }}" class="back-button">← Kembali ke Artikel</a>
    </div>
</div>

    {{-- footer --}}
    <footer class="modern-footer">
        <div class="footer-bottom">
            <p>&copy; 2025 PT. Solusi Koneksi Anda. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
