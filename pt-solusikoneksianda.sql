-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 10, 2025 at 07:26 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pt-solusikoneksianda`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint UNSIGNED NOT NULL,
  `post_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `title_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('publish','draft') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `post_name`, `title`, `content`, `meta_keyword`, `meta_description`, `title_image`, `status`, `tags`, `created_at`, `updated_at`) VALUES
(2, 'membangun-konektivitas-bisnis-modern', 'Membangun Konektivitas Bisnis Modern Bersama PT Solusi Koneksi Anda', 'Di era digital saat ini, konektivitas bukan lagi sekadar kebutuhan tambahan, melainkan fondasi utama dalam menjalankan bisnis. PT Solusi Koneksi Anda hadir sebagai mitra terpercaya dalam menyediakan solusi jaringan yang cepat, aman, dan stabil. Dengan layanan yang disesuaikan untuk tiap skala usaha, perusahaan ini memastikan setiap klien memiliki sistem konektivitas yang mendukung pertumbuhan bisnis mereka.\r\n\r\nTim profesional PT Solusi Koneksi Anda memiliki pengalaman luas dalam menangani instalasi jaringan LAN, WAN, hingga cloud-based system. Proses implementasinya mengedepankan efisiensi tanpa mengorbankan kualitas. Selain itu, perusahaan juga memberikan pelatihan dan pendampingan teknis agar tim internal klien dapat mengelola sistem dengan mandiri.\r\n\r\nMelalui pendekatan yang berfokus pada solusi jangka panjang, PT Solusi Koneksi Anda tidak hanya menjual layanan, tetapi membangun kemitraan. Dengan konektivitas yang optimal, perusahaan Anda dapat fokus pada pengembangan inti bisnis dan transformasi digital.', 'konektivitas bisnis, solusi jaringan, pt solusi koneksi anda, transformasi digital', 'PT Solusi Koneksi Anda membantu bisnis membangun konektivitas modern yang aman dan cepat melalui solusi jaringan terbaik.\r\ntags: jaringan bisnis, IT support, transformasi digital', 'article_images/BRhVpBZdvurWRQwbtlw0dCJafKPWIWapPlzRi5Oe.jpg', 'publish', 'project', '2025-04-09 18:02:21', '2025-04-09 18:02:21'),
(3, 'solusi-jaringan-sekolah-modern', 'Solusi Jaringan untuk Sekolah Modern dari PT Solusi Koneksi Anda', 'Pendidikan modern membutuhkan dukungan teknologi yang memadai, terutama dalam hal konektivitas. PT Solusi Koneksi Anda menghadirkan solusi jaringan komprehensif untuk institusi pendidikan, memastikan proses belajar mengajar berbasis digital berjalan lancar. Dengan jaringan internet yang cepat dan stabil, guru dan siswa dapat mengakses materi pembelajaran secara real-time.\r\n\r\nInstalasi jaringan dilakukan dengan memperhatikan kebutuhan spesifik setiap sekolah, mulai dari sistem wireless di ruang kelas hingga jaringan LAN untuk laboratorium. Selain itu, perusahaan juga memberikan dukungan teknis dan pelatihan kepada staf IT sekolah agar infrastruktur digital dapat dipelihara secara mandiri.\r\n\r\nPT Solusi Koneksi Anda percaya bahwa akses teknologi yang merata akan mempercepat kemajuan pendidikan. Melalui proyek ini, kami mendukung transformasi pendidikan menuju era digital yang inklusif dan berkelanjutan.', 'jaringan sekolah, edukasi digital, pt solusi koneksi anda, solusi pendidikan', 'PT Solusi Koneksi Anda menyediakan solusi jaringan lengkap untuk mendukung sekolah digital masa kini.', 'article_images/iDFNxLif1Yex3KcgzoxFubmpvoYxMZuVu7QpGqfK.jpg', 'publish', 'technology', '2025-04-09 18:03:57', '2025-04-09 18:03:57'),
(4, 'workshop-digitalisasi-desa', 'PT Solusi Koneksi Anda Gelar Workshop Digitalisasi Sistem Desa', 'Sebagai bagian dari komitmen untuk mendorong transformasi digital nasional, PT Solusi Koneksi Anda menggelar workshop digitalisasi sistem administrasi pemerintahan desa. Kegiatan ini diadakan untuk membantu perangkat desa dalam mengelola data dan layanan publik secara lebih efisien menggunakan teknologi.\r\n\r\nDalam workshop tersebut, peserta diajarkan cara menggunakan aplikasi administrasi desa berbasis web, mulai dari manajemen surat, laporan keuangan, hingga pengelolaan data penduduk. Workshop juga menghadirkan sesi konsultasi langsung dengan tim pengembang sistem dari PT Solusi Koneksi Anda.\r\n\r\nMelalui program ini, perusahaan berharap dapat mempercepat modernisasi sistem birokrasi di tingkat desa dan meningkatkan kualitas pelayanan publik. Digitalisasi bukan hanya tentang teknologi, tetapi juga tentang mempercepat akses dan transparansi.', 'digitalisasi desa, administrasi digital, solusi koneksi anda, transformasi digital desa', 'PT Solusi Koneksi Anda menyelenggarakan workshop digitalisasi desa untuk mendukung birokrasi yang modern dan transparan.', 'article_images/CTnfM6wekZwnmnNMupNkc9aIgZHGGITUGHIjDjjF.jpg', 'publish', 'life style', '2025-04-09 18:05:16', '2025-04-09 18:05:16'),
(5, 'cloudsynq-layanan-cloud-aman', 'CloudSynQ: Layanan Cloud Aman dan Fleksibel untuk Bisnis', 'CloudSynQ adalah solusi cloud hybrid dari PT Solusi Koneksi Anda yang dirancang untuk kebutuhan bisnis masa kini. Layanan ini menggabungkan keunggulan penyimpanan lokal dan cloud publik, memberikan fleksibilitas sekaligus keamanan bagi data perusahaan. CloudSynQ sangat cocok digunakan oleh perusahaan yang membutuhkan sistem penyimpanan yang dapat diakses kapan saja dan dari mana saja.\r\n\r\nDengan sistem enkripsi tingkat tinggi dan kontrol akses pengguna yang ketat, CloudSynQ memastikan keamanan data dari kebocoran maupun serangan siber. Selain itu, fitur backup otomatis dan integrasi dengan aplikasi bisnis menjadikan platform ini sebagai pilihan utama untuk kolaborasi digital dan efisiensi kerja.\r\n\r\nPT Solusi Koneksi Anda juga menyediakan dukungan penuh berupa migrasi data, pelatihan pengguna, dan manajemen teknis. Dengan CloudSynQ, perusahaan bisa meningkatkan produktivitas tanpa harus khawatir soal keamanan atau keterbatasan ruang penyimpanan.', 'cloud hybrid, layanan cloud, pt solusi koneksi anda, cloudsynq', 'CloudSynQ dari PT Solusi Koneksi Anda adalah layanan cloud hybrid yang aman, fleksibel, dan siap mendukung bisnis modern.', 'article_images/aTsW4QNavPXvfY3BKjM0K2re2od2y5VnZ9BvrTaI.jpg', 'publish', 'project', '2025-04-09 18:06:40', '2025-04-09 18:06:40'),
(6, 'securelink-keamanan-jaringan-ai', 'SecureLink: Sistem Keamanan Jaringan Berbasis AI', 'Keamanan jaringan menjadi prioritas utama di era digital, dan PT Solusi Koneksi Anda menjawab kebutuhan ini melalui produk SecureLink. Sistem ini dilengkapi dengan teknologi AI untuk mendeteksi dan menangani potensi ancaman siber secara otomatis. Dengan modul firewall dan intrusion prevention system (IPS), SecureLink mampu menjaga stabilitas dan keamanan sistem TI perusahaan.\r\n\r\nPlatform ini juga menyediakan dashboard interaktif untuk monitoring real-time serta laporan insiden keamanan yang detail. Tim IT internal perusahaan dapat melakukan analisis cepat dan mengambil langkah mitigasi yang tepat. Dengan teknologi yang terus diperbarui, SecureLink mampu mengantisipasi ancaman siber terbaru secara adaptif.\r\n\r\nSecureLink bukan hanya alat proteksi, melainkan fondasi sistem keamanan digital yang terintegrasi. PT Solusi Koneksi Anda juga menyediakan layanan audit keamanan dan pelatihan untuk memastikan seluruh sistem berjalan optimal dan aman.', 'keamanan jaringan, AI, cyber security, securelink, solusi koneksi anda', 'SecureLink adalah solusi keamanan jaringan berbasis AI dari PT Solusi Koneksi Anda yang menjaga sistem Anda dari ancaman digital.', 'article_images/sbY4aiW7UIidejmoGQ6eftjJu81dsAlJKg79G0ka.jpg', 'publish', 'technology', '2025-04-09 18:08:10', '2025-04-09 18:08:10');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_04_09_023902_create_modules_table', 2),
(5, '2025_04_09_031051_create_module_objects_table', 3),
(10, '2025_04_09_040946_create_articles_table', 4),
(12, '2025_04_09_062452_create_setting_profile_table', 5),
(13, '2025_04_09_064419_create_setting_kontak_table', 6),
(14, '2025_04_09_065255_create_setting_medsos_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `index_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `description`, `image`, `index_order`, `created_at`, `updated_at`) VALUES
(3, 'Produk', 'Produk', 'modules/naJKGQ8gHewBn7vZBCVlw5mvMwtIB8duhol32OiQ.jpg', 3, '2025-04-09 17:24:57', '2025-04-09 17:24:57'),
(4, 'Galeri Kegiatan', 'Galeri Kegiatan', 'modules/3uw5sxJwVc57vPycyRPBuc01EbtC5e6HhlHP3vV3.jpg', 3, '2025-04-09 17:26:20', '2025-04-09 17:26:20');

-- --------------------------------------------------------

--
-- Table structure for table `module_objects`
--

CREATE TABLE `module_objects` (
  `id` bigint UNSIGNED NOT NULL,
  `module_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `object_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `object_description` text COLLATE utf8mb4_unicode_ci,
  `index_order` int NOT NULL DEFAULT '1',
  `parent_module` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_css` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `module_objects`
--

INSERT INTO `module_objects` (`id`, `module_id`, `image`, `object_name`, `object_description`, `index_order`, `parent_module`, `icon_css`, `is_active`, `created_at`, `updated_at`) VALUES
(7, 3, 'module_objects/XXUUTpFx9kFoyzJGQuPP6Ik5WlK07oUHuYcdTRdo.jpg', 'SOLUSNect', 'SOLUSNect adalah solusi cerdas yang dirancang untuk menghubungkan berbagai sistem, perangkat, dan layanan digital dalam satu platform manajemen konektivitas yang terpusat. Diciptakan untuk mendukung kebutuhan bisnis modern yang dinamis dan serba cepat, SOLUSNect memfasilitasi integrasi jaringan, sistem komunikasi, serta perangkat IoT dalam satu ekosistem yang saling terhubung. Dengan antarmuka pengguna yang ramah dan kontrol berbasis dashboard, pengguna dapat dengan mudah memantau status koneksi, mengelola bandwidth, serta mengatur prioritas trafik sesuai kebutuhan operasional. SOLUSNect juga dilengkapi dengan kemampuan otomatisasi jaringan, sehingga konfigurasi dan penyesuaian dapat dilakukan secara efisien tanpa gangguan terhadap aktivitas utama bisnis.\r\n\r\nTidak hanya berfungsi sebagai pengelola koneksi, SOLUSNect juga berperan sebagai alat analitik dan optimalisasi performa jaringan. Dengan teknologi pemantauan real-time dan laporan berbasis data, pengguna dapat mengidentifikasi bottleneck, mengukur efektivitas koneksi, dan membuat keputusan strategis untuk meningkatkan efisiensi operasional. Fitur keamanan berlapis seperti enkripsi data, autentikasi pengguna, dan sistem notifikasi dini menjadikan SOLUSNect sebagai platform yang tidak hanya andal, tetapi juga aman. Dengan fleksibilitas untuk digunakan di berbagai sektor seperti manufaktur, pendidikan, ritel, hingga layanan publik, SOLUSNect adalah mitra digital yang siap mempercepat transformasi konektivitas di era industri 4.0.', 1, '3', 'bi bi-hub', 1, '2025-04-09 17:35:40', '2025-04-09 17:35:40'),
(8, 3, 'module_objects/4AmvGaD3LfJUChSmONI5q5pdkHk4OROvlT3ZLrcl.jpg', 'NetLink Pro', 'NetLink Pro adalah layanan solusi jaringan terpadu yang dirancang untuk memenuhi kebutuhan konektivitas perusahaan, baik skala kecil, menengah, maupun besar. Produk ini mencakup perencanaan, instalasi, dan pengelolaan infrastruktur jaringan lokal (LAN), jaringan luas (WAN), serta solusi wireless dan fiber optic. Dengan mengedepankan efisiensi dan keamanan, NetLink Pro memastikan konektivitas antar perangkat dan sistem berjalan lancar dan minim gangguan. Tim ahli dari PT Solusi Koneksi Anda akan melakukan analisis kebutuhan dan memberikan solusi yang sesuai dengan struktur dan kompleksitas organisasi klien, menjadikan NetLink Pro sebagai pilihan ideal untuk bisnis yang ingin tumbuh secara digital.\r\n\r\nSelain itu, NetLink Pro dilengkapi dengan sistem pemantauan dan manajemen jaringan real-time, memungkinkan perusahaan untuk mengontrol lalu lintas data, memantau performa jaringan, dan mendeteksi potensi gangguan sejak dini. Layanan ini juga disertai dengan dukungan teknis profesional 24/7 serta opsi pemeliharaan berkala agar performa jaringan tetap optimal. Dengan fleksibilitas dan skalabilitas tinggi, NetLink Pro mampu beradaptasi dengan perkembangan bisnis dan teknologi, menjadikannya investasi jangka panjang yang strategis untuk mendukung produktivitas dan keamanan data perusahaan.', 2, '3', 'bi bi-diagram-3', 1, '2025-04-09 17:35:40', '2025-04-09 17:35:40'),
(19, 4, 'module_objects/GZlM6DyCPSqgxqexsVMIBuI2vCQG2VHQb1uYKrav.jpg', 'Pelatihan Keamanan Jaringan untuk UMKM', NULL, 1, '4', 'bi bi-dash', 1, '2025-04-09 17:49:14', '2025-04-09 17:49:14'),
(20, 4, 'module_objects/n7eKZjzNkrWBMfaDQ6WAZPjlC6oimnaFUhKO9Iw8.jpg', 'Instalasi Infrastruktur Jaringan di Sekolah Negeri 1 Bandung', NULL, 2, '4', 'bi bi-dash', 1, '2025-04-09 17:49:14', '2025-04-09 17:49:14'),
(21, 4, 'module_objects/RmPKuUSCOzWugbDfQTP5NH7cvO7zWgml1DhSuCnW.jpg', 'Workshop Digitalisasi Sistem Administrasi Pemerintahan Desa', NULL, 3, '4', 'bi bi-dash', 1, '2025-04-09 17:49:14', '2025-04-09 17:49:14'),
(24, 3, 'module_objects/483feZNt8ojlxtPaU940nWzQnpkrPTE95KbxSpsQ.jpg', 'SecureLink', 'SecureLink adalah sistem keamanan jaringan cerdas yang dirancang untuk mendeteksi, menganalisis, dan merespons ancaman siber secara otomatis menggunakan kecerdasan buatan. Dengan modul proteksi mutakhir seperti firewall generasi baru, intrusion prevention system (IPS), dan sistem deteksi ancaman berbasis AI, SecureLink melindungi jaringan perusahaan dari serangan malware, phishing, hingga ransomware. Produk ini tidak hanya memberikan perlindungan pasif, tetapi juga mampu mempelajari pola serangan dan mengambil tindakan mitigasi secara proaktif, memastikan lingkungan digital perusahaan tetap aman dan terlindungi dari potensi ancaman.\r\n\r\nDikembangkan oleh tim keamanan TI berpengalaman, SecureLink menyatu secara mulus dengan sistem jaringan yang sudah ada dan dapat disesuaikan dengan kebijakan keamanan internal perusahaan. Dashboard analitik interaktifnya memungkinkan tim IT untuk memantau ancaman secara real-time, mendapatkan laporan insiden, serta merancang strategi keamanan berbasis data. PT Solusi Koneksi Anda juga menyediakan audit keamanan berkala dan layanan tanggap darurat jika terjadi insiden serius. Dengan SecureLink, perusahaan dapat menjalankan aktivitas digital tanpa rasa khawatir, karena sistem keamanannya berjalan secara adaptif dan terus berkembang seiring dengan ancaman dunia maya yang makin kompleks.', 3, '3', 'bi bi-shield-lock', 1, '2025-04-09 17:54:37', '2025-04-09 17:54:37');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7Gd52XJKepKpz2czQP69SS8MZSoU7Du8wlKHj1lr', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36 Edg/135.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRnJjVWxjOFAxQTh0OENwOEQ4cVlmdHk0RjdHWUhDMG5wTFRzeXkzWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tb2R1bGU/c2VhcmNoPSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO30=', 1744269909);

-- --------------------------------------------------------

--
-- Table structure for table `setting_kontak`
--

CREATE TABLE `setting_kontak` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `maps` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_kontak`
--

INSERT INTO `setting_kontak` (`id`, `email`, `phone`, `alamat`, `maps`, `created_at`, `updated_at`) VALUES
(1, 'kurishani123@gmail.com', '082115478426', 'JL Talagasari, No. 35, Kawalimukti, Kawali, Kawalimukti, Ciamis, Kabupaten Ciamis, Jawa Barat 46253', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15833.660643315001!2d108.36715131568602!3d-7.193380103282906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f43087e24f9d3%3A0x34cfd3589f2615d0!2sSMK%20Negeri%201%20Kawali!5e0!3m2!1sid!2sid!4v1744181467558!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2025-04-08 23:50:27', '2025-04-08 23:51:38');

-- --------------------------------------------------------

--
-- Table structure for table `setting_medsos`
--

CREATE TABLE `setting_medsos` (
  `id` bigint UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `x` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_medsos`
--

INSERT INTO `setting_medsos` (`id`, `facebook`, `youtube`, `instagram`, `x`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/', 'https://www.youtube.com/', 'https://www.instagram.com/', 'https://x.com/?mx=2', 'https://www.linkedin.com/', '2025-04-08 23:58:22', '2025-04-08 23:58:22');

-- --------------------------------------------------------

--
-- Table structure for table `setting_profile`
--

CREATE TABLE `setting_profile` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_profile`
--

INSERT INTO `setting_profile` (`id`, `nama_website`, `deskripsi`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'PT Solusi Koneksi Anda', 'PT Solusi Koneksi Anda adalah perusahaan teknologi yang berfokus pada penyediaan solusi jaringan dan konektivitas terbaik bagi berbagai sektor industri di Indonesia. Dengan pengalaman yang luas di bidang teknologi informasi dan komunikasi, kami hadir untuk menjawab tantangan dunia digital yang semakin kompleks. Kami menyediakan layanan terintegrasi mulai dari instalasi jaringan, pemeliharaan infrastruktur IT, hingga pengembangan sistem komunikasi berbasis internet dan cloud computing. Melalui pendekatan yang inovatif dan berorientasi pada kepuasan pelanggan, PT Solusi Koneksi Anda berkomitmen untuk memberikan layanan yang cepat, aman, dan andal demi mendukung kelancaran operasional bisnis para klien kami.\r\n\r\nSebagai mitra strategis dalam transformasi digital, PT Solusi Koneksi Anda tidak hanya menawarkan teknologi, tetapi juga memberikan nilai tambah melalui dukungan teknis profesional, solusi yang dapat disesuaikan dengan kebutuhan spesifik setiap klien, dan layanan purna jual yang responsif. Website ini dirancang untuk menjadi pusat informasi lengkap tentang layanan kami, menampilkan portofolio proyek, artikel teknologi terbaru, serta media komunikasi interaktif antara perusahaan dan pelanggan. Kami percaya bahwa konektivitas adalah fondasi masa depan, dan melalui website ini, kami ingin menjembatani kebutuhan Anda dengan solusi yang cerdas dan berkelanjutan.\r\n\r\nVisi:\r\nMenjadi perusahaan penyedia solusi konektivitas dan teknologi informasi terdepan di Indonesia yang mendukung percepatan transformasi digital nasional.\r\n\r\nMisi:\r\n1. Menyediakan solusi jaringan dan teknologi yang inovatif, andal, dan sesuai dengan kebutuhan pelanggan.\r\n2. Membangun kemitraan jangka panjang dengan klien melalui layanan profesional dan dukungan teknis yang responsif.\r\n3. Mengembangkan tim yang kompeten dan berintegritas tinggi melalui pelatihan dan pengembangan berkelanjutan.\r\n4. Mendorong penerapan teknologi ramah lingkungan dan berkelanjutan dalam setiap solusi yang ditawarkan.\r\n5. Menjadi bagian aktif dalam pertumbuhan ekosistem digital nasional melalui kolaborasi dan inovasi.', 'logo/2EBClINKSecXAF2k9dhbF2uZqd2esr0iT7XEt86h.png', '2025-04-08 23:39:27', '2025-04-09 17:20:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'fitri', 'fitri@gmail.com', NULL, '$2y$12$8j0M.WMdXViS2BqOjfEvwODZDZCN5JDHPuSnsb3MwM299Or4THrDi', 'admin', NULL, '2025-04-08 17:48:41', '2025-04-09 23:26:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_objects`
--
ALTER TABLE `module_objects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module_objects_module_id_foreign` (`module_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `setting_kontak`
--
ALTER TABLE `setting_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_medsos`
--
ALTER TABLE `setting_medsos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_profile`
--
ALTER TABLE `setting_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `module_objects`
--
ALTER TABLE `module_objects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `setting_kontak`
--
ALTER TABLE `setting_kontak`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_medsos`
--
ALTER TABLE `setting_medsos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_profile`
--
ALTER TABLE `setting_profile`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `module_objects`
--
ALTER TABLE `module_objects`
  ADD CONSTRAINT `module_objects_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
