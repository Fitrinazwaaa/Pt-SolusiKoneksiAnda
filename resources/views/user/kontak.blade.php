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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-SOME_HASH_HERE" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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
            margin-top: 101px;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
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
        .modern-footer {
            background-color: #0f172a;
            color: #cbd5e1;
            padding: 60px 20px 30px;
            font-family: 'Segoe UI', sans-serif;
        }

        .footer-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: nowrap;
            justify-content: space-between;
            align-items: flex-start;
            gap: 48px;
        }

        .footer-col {
            flex: 1;
            min-width: 260px;
        }

        .footer-left .logo-group {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
        }

        .footer-logo {
            width: 52px;
            height: auto;
        }

        .company-name {
            font-size: 20px;
            font-weight: 700;
            color: #ffffff;
        }

        .social-links {
            margin-top: 20px;
        }

        .social-links a {
            font-size: 20px;
            color: #94a3b8;
            margin-left: 34px;
            transition: all 0.3s ease-in-out;
        }

        .social-links a:hover {
            color: #3b82f6;
            transform: scale(1.1);
        }

        .footer-middle h4,
        .footer-right h4 {
            font-size: 18px;
            color: #ffffff;
            margin-bottom: 12px;
        }

        .footer-middle p,
        .footer-right p {
            font-size: 15px;
            color: #94a3b8;
            margin-bottom: 12px;
            line-height: 1.6;
        }

        .footer-btn {
            display: inline-block;
            background-color: #3b82f6;
            padding: 10px 24px;
            border-radius: 9999px;
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .footer-btn:hover {
            background-color: #2563eb;
            transform: translateY(-2px);
        }

        .support-link {
            color: #3b82f6;
            text-decoration: none;
            font-weight: 500;
        }

        .support-link:hover {
            text-decoration: underline;
        }

        .footer-bottom {
            border-top: 1px solid #1e293b;
            margin-top: 48px;
            padding-top: 24px;
            text-align: center;
            font-size: 14px;
            color: #64748b;
        }

        .footer-maps-wrapper {
            max-width: 100%;
            padding: 60px 16px 20px 16px;
        }

        .footer-map iframe {
            width: 100%;
            height: 300px;
            border: 0;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        /* RESPONSIVE */
        @media (max-width: 1024px) {
            .footer-wrapper {
                flex-wrap: wrap;
                justify-content: center;
                gap: 32px;
                text-align: center;
            }

            .footer-middle,
            .footer-right {
                text-align: center;
            }

            .logo-group {
                justify-content: center;
            }

            .social-links {
                justify-content: center;
                display: flex;
                flex-wrap: wrap;
            }

            .footer-col {
                max-width: 100%;
            }
        }

        @media (max-width: 480px) {
            .footer-btn {
                width: 100%;
                text-align: center;
            }
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

    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-frame"></div>
        <h1>Kontak Kami</h1>
    </div>

    {{-- Content --}}
    <footer class="modern-footer">
        <div class="footer-wrapper">
            <!-- Kiri: Logo & Sosial Media -->
            <div class="footer-col">
                <div class="logo-group flex items-center space-x-3 mb-4">
                    <img src="{{ asset('logo2.png') }}" alt="Logo" class="footer-logo w-12 h-12 object-contain">
                    <span class="company-name text-xl font-semibold">PT. Solusi Koneksi Anda</span>
                </div>
                <div class="social-links flex space-x-4 text-xl">
                    @if ($medsos)
                        @if ($medsos->facebook)
                            <a href="{{ $medsos->facebook }}" target="_blank" aria-label="Facebook"><i
                                    class="fab fa-facebook-f"></i></a>
                        @endif
                        @if ($medsos->instagram)
                            <a href="{{ $medsos->instagram }}" target="_blank" aria-label="Instagram"><i
                                    class="fab fa-instagram"></i></a>
                        @endif
                        @if ($medsos->youtube)
                            <a href="{{ $medsos->youtube }}" target="_blank" aria-label="YouTube"><i
                                    class="fab fa-youtube"></i></a>
                        @endif
                        @if ($medsos->linkedin)
                            <a href="{{ $medsos->linkedin }}" target="_blank" aria-label="LinkedIn"><i
                                    class="fab fa-linkedin-in"></i></a>
                        @endif
                        @if ($medsos->x)
                            <a href="{{ $medsos->x }}" target="_blank" aria-label="Twitter / X"><i
                                    class="fab fa-x-twitter"></i></a>
                        @endif
                    @endif
                </div>
            </div>

            <!-- Tengah: Alamat dan Tombol -->
            <div class="footer-col footer-middle">
                <h4>Alamat</h4>
                @if ($kontak)
                    <p style="line-height: 1.2;" class="text-sm">{!! nl2br(e($kontak->alamat)) !!}</p>
                @else
                    <p>Alamat belum tersedia.</p>
                @endif
                <a href="#tentang-kami" class="footer-btn">Tentang Kami</a>
            </div>

            <!-- Kanan: Support -->
            <div class="footer-col footer-right">
                <h4>Support</h4>
                @if ($kontak)
                    <p style="margin-bottom: -2px;">Email: <a href="mailto:{{ $kontak->email }}"
                            class="support-link">{{ $kontak->email }}</a></p>
                    <p>Telepon: <a href="tel:{{ $kontak->phone }}" class="support-link">{{ $kontak->phone }}</a></p>
                @else
                    <p>Kontak belum tersedia.</p>
                @endif
            </div>
        </div>

        @if ($kontak && $kontak->maps)
            <div class="footer-maps-wrapper mt-8">
                <div class="footer-map">
                    {!! $kontak->maps !!}
                </div>
            </div>
        @endif

        <div class="footer-bottom">
            <p>&copy; 2025 PT. Solusi Koneksi Anda. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>
