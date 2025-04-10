<?php
use App\Models\Module;
$modules = Module::orderBy('index_order')->get();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar Modern</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512..." crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    </style>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8fafc;
        }

        .ultra-modern-hero {
            position: relative;
            width: 100%;
            height: 70vh;
            background: radial-gradient(circle at top left, #0f172a, #1e293b);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            overflow: hidden;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 700px;
            padding: 0 20px;
        }

        .hero-content h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .gradient-text {
            background: linear-gradient(90deg, #60a5fa, #3b82f6, #9333ea);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 300% 300%;
            animation: gradient-flow 5s ease infinite;
        }

        .hero-content p {
            font-size: 18px;
            line-height: 1.7;
            color: #e2e8f0;
        }

        @keyframes gradient-flow {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Animated Blobs */
        .animated-blobs .blob {
            position: absolute;
            border-radius: 50%;
            opacity: 0.3;
            filter: blur(100px);
            mix-blend-mode: screen;
            animation: floaty 20s infinite ease-in-out;
        }

        .blob1 {
            width: 500px;
            height: 500px;
            background: #3b82f6;
            top: -100px;
            left: -150px;
            animation-delay: 0s;
        }

        .blob2 {
            width: 400px;
            height: 400px;
            background: #9333ea;
            bottom: -150px;
            right: -100px;
            animation-delay: 5s;
        }

        .blob3 {
            width: 300px;
            height: 300px;
            background: #38bdf8;
            top: 200px;
            right: 100px;
            animation-delay: 10s;
        }

        @keyframes floaty {
            0% {
                transform: translateY(0) translateX(0);
            }

            50% {
                transform: translateY(40px) translateX(30px);
            }

            100% {
                transform: translateY(0) translateX(0);
            }
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 32px;
            }

            .hero-content p {
                font-size: 16px;
            }

            .ultra-modern-hero {
                height: 500px;
            }
        }
    </style>
    <style>
        .why-us-section {
            background: #f1f5f9;
            padding: 100px 20px;
        }

        .why-us-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            gap: 60px;
            flex-wrap: wrap;
        }

        /* Modern Visual Frame */
        .why-us-visual {
            width: 350px;
            height: 500px;
            border-radius: 30px;
            background: linear-gradient(145deg, #cbd5e1, #f8fafc);
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        }

        .modern-frame {
            width: 100%;
            height: 100%;
            position: relative;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 30px;
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.3;
            filter: blur(60px);
            animation: floaty 12s ease-in-out infinite;
        }

        .circle1 {
            width: 200px;
            height: 200px;
            background: #3b82f6;
            top: -50px;
            left: -50px;
        }

        .circle2 {
            width: 150px;
            height: 150px;
            background: #9333ea;
            bottom: -40px;
            right: -40px;
            animation-delay: 3s;
        }

        .lines::before,
        .lines::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 1px;
            background: rgba(255, 255, 255, 0.1);
            top: 25%;
            left: 0;
        }

        .lines::after {
            top: 50%;
        }

        @keyframes floaty {
            0% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(20px) rotate(15deg);
            }

            100% {
                transform: translateY(0) rotate(0deg);
            }
        }

        /* Teks Bagian */
        .why-us-text {
            flex: 1;
            min-width: 280px;
        }

        .why-us-text h2 {
            font-size: 36px;
            margin-bottom: 24px;
            font-weight: 700;
            color: #1e293b;
        }

        .highlight {
            color: #3b82f6;
        }

        .checklist {
            list-style: none;
            padding: 0;
            margin-bottom: 30px;
        }

        .checklist li {
            font-size: 18px;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            color: #334155;
        }

        .checklist .icon {
            background-color: #3b82f6;
            color: white;
            border-radius: 50%;
            font-size: 14px;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
        }

        .btn-primary {
            display: inline-block;
            padding: 12px 28px;
            background: #3b82f6;
            color: white;
            border-radius: 9999px;
            font-weight: 500;
            text-decoration: none;
            transition: background 0.3s;
        }

        .btn-primary:hover {
            background: #2563eb;
        }

        @media (max-width: 768px) {
            .why-us-container {
                flex-direction: column;
                text-align: center;
            }

            .why-us-visual {
                width: 100%;
                max-width: 300px;
                height: 420px;
            }

            .why-us-text h2 {
                font-size: 28px;
            }
        }

        .relative-wrapper {
            position: relative;
            width: 350px;
            height: 500px;
        }

        .woman-img {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            height: 100%;
            max-height: 100%;
            z-index: 2;
            pointer-events: none;
            animation: fadeInUp 1.2s ease-out forwards;
            opacity: 0;
        }

        /* Fade-in animation */
        @keyframes fadeInUp {
            0% {
                transform: translateX(-50%) translateY(30px);
                opacity: 0;
            }

            100% {
                transform: translateX(-50%) translateY(0);
                opacity: 1;
            }
        }

        .relative-wrapper {
            position: relative;
            width: 350px;
            height: 500px;
        }

        .why-us-visual {
            width: 100%;
            height: 100%;
            border-radius: 30px;
            background: linear-gradient(145deg, #cbd5e1, #f8fafc);
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        }

        .woman-img {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            height: 100%;
            max-height: 100%;
            z-index: 2;
            pointer-events: none;
            animation: fadeInUp 1.2s ease-out forwards;
            opacity: 0;
        }
    </style>
    <style>
        .features-section {
            background: #ffffff;
            padding: 100px 20px;
        }

        .features-container {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .section-header h2 {
            font-size: 36px;
            color: #1e293b;
            margin-bottom: 16px;
        }

        .section-header .highlight {
            color: #3b82f6;
        }

        .section-header p {
            font-size: 18px;
            color: #64748b;
            max-width: 700px;
            margin: 0 auto 40px;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background: linear-gradient(135deg, #f8fafc, #e2e8f0);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
        }

        .icon-box {
            font-size: 36px;
            background-color: #3b82f6;
            color: white;
            width: 60px;
            height: 60px;
            line-height: 60px;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .feature-card h3 {
            font-size: 20px;
            color: #1e293b;
            margin-bottom: 10px;
        }

        .feature-card p {
            color: #475569;
            font-size: 16px;
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

    <!-- Content Section 1-->
    <section class="ultra-modern-hero">
        <div class="hero-content">
            <h1 class="gradient-text">PT. Solusi Koneksi Anda</h1>
            <p>Kami hadir untuk memberikan solusi digital yang futuristik dan berdampak nyata bagi masa depan bisnis
                Anda.</p>
        </div>
        <div class="animated-blobs">
            <div class="blob blob1"></div>
            <div class="blob blob2"></div>
            <div class="blob blob3"></div>
        </div>
    </section>

    <!-- Content Section 2 -->
    <section class="why-us-section">
        <div class="why-us-container">
            <!-- Modern Ilustrasi Frame dengan Gambar -->
            <div class="relative-wrapper">
                <div class="why-us-visual">
                    <div class="modern-frame">
                        <div class="circle circle1"></div>
                        <div class="circle circle2"></div>
                        <div class="lines"></div>
                    </div>
                    <!-- Gambar Perempuan -->
                    <img src="{{ asset('Business_finance_and_employment_containing_asian__korean__and_businesswoman-removebg-preview.png') }}"
                        alt="Business Woman" class="woman-img">
                </div>
            </div>

            <!-- Teks -->
            <div class="why-us-text">
                <h2>KENAPA HARUS <span class="highlight">MEMILIH KAMI?</span></h2>
                <ul class="checklist">
                    <li><span class="icon">✔</span> Tim profesional & berpengalaman</li>
                    <li><span class="icon">✔</span> Solusi inovatif & berbasis teknologi</li>
                    <li><span class="icon">✔</span> Pelayanan cepat dan responsif</li>
                    <li><span class="icon">✔</span> Komitmen terhadap kualitas terbaik</li>
                </ul>
                <a href="#tentang-kami" class="btn-primary">Tentang Kami</a>
            </div>
        </div>
    </section>

    <!-- Content Section 3 -->
    <section class="features-section">
        <div class="features-container">
            <div class="section-header">
                <h2>Apa yang <span class="highlight">Kami Tawarkan</span></h2>
                <p>Kami hadir dengan solusi yang inovatif, efisien, dan berbasis teknologi modern.</p>
            </div>

            <div class="feature-grid">
                <div class="feature-card">
                    <div class="icon-box">💡</div>
                    <h3>Inovasi Tanpa Batas</h3>
                    <p>Kami selalu berinovasi untuk memberikan solusi terbaik di setiap proyek.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box">⚙️</div>
                    <h3>Teknologi Canggih</h3>
                    <p>Didukung oleh teknologi terbaru yang mendukung efisiensi kerja dan hasil maksimal.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box">🤝</div>
                    <h3>Kemitraan Strategis</h3>
                    <p>Kami menjalin hubungan jangka panjang dengan klien dan mitra bisnis.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box">📈</div>
                    <h3>Skalabilitas Bisnis</h3>
                    <p>Solusi yang fleksibel dan bisa dikembangkan seiring pertumbuhan bisnis Anda.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Foooter --}}
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

        <div class="footer-bottom">
            <p>&copy; 2025 PT. Solusi Koneksi Anda. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
