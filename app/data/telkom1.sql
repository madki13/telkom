-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 07 Sep 2023 pada 13.28
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telkom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_id` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data untuk tabel `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1575602373),
('User', '2', 1663605410),
('User', '3', 1661183081),
('User', '4', 1663602768),
('User', '5', 1663605774),
('User', '6', 1663645253),
('User', '7', 1664249477);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `type` smallint NOT NULL,
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `rule_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int DEFAULT NULL,
  `updated_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data untuk tabel `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/*', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/*', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/assignment/*', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/assignment/assign', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/assignment/index', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/assignment/revoke', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/assignment/view', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/default/*', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/default/index', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/menu/*', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/menu/create', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/menu/delete', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/menu/index', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/menu/update', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/menu/view', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/permission/*', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/permission/assign', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/permission/create', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/permission/delete', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/permission/get-users', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/permission/index', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/permission/remove', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/permission/update', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/permission/view', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/role/*', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/role/assign', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/role/create', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/role/delete', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/role/get-users', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/role/index', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/role/remove', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/role/update', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/role/view', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/route/*', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/route/assign', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/route/create', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/route/index', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/route/refresh', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/route/remove', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/rule/*', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/rule/create', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/rule/delete', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/rule/index', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/rule/update', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/rule/view', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/user/*', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/user/activate', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/user/change-password', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/user/delete', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/user/index', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/user/login', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/user/logout', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/user/request-password-reset', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/user/reset-password', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/user/signup', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/admin/user/view', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/berita/*', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/berita/create', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/berita/delete', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/berita/index', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/berita/update', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/berita/view', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/debug/*', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/debug/default/*', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/debug/default/db-explain', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/debug/default/download-mail', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/debug/default/index', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/debug/default/toolbar', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/debug/default/view', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/debug/user/*', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/debug/user/reset-identity', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/debug/user/set-identity', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/gii/*', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/gii/default/*', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/gii/default/action', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/gii/default/diff', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/gii/default/index', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/gii/default/preview', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/gii/default/view', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/layanan/*', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/layanan/create', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/layanan/delete', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/layanan/index', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/layanan/update', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/layanan/view', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/site/*', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/site/about', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/site/captcha', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/site/contact', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/site/error', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/site/index', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/site/login', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/site/logout', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/testimoni/*', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/testimoni/create', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/testimoni/delete', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/testimoni/index', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/testimoni/update', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('/testimoni/view', 2, NULL, NULL, NULL, 1690944458, 1690944458),
('admin', 1, NULL, NULL, NULL, 1661097949, 1690944492),
('adminPermission', 2, NULL, NULL, NULL, 1690945297, 1690945297),
('guest', 1, NULL, NULL, NULL, 1663602370, 1690889304),
('guestPermission', 2, NULL, NULL, NULL, 1690945491, 1690945491),
('penulis', 1, NULL, NULL, NULL, 1690945184, 1690945184),
('penulisPermission', 2, NULL, NULL, NULL, 1690945244, 1690945244),
('User', 1, NULL, NULL, NULL, 1661183073, 1661183073);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `child` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data untuk tabel `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', '/*'),
('adminPermission', '/*'),
('admin', '/admin/*'),
('admin', '/admin/assignment/*'),
('admin', '/admin/assignment/assign'),
('admin', '/admin/assignment/index'),
('admin', '/admin/assignment/revoke'),
('admin', '/admin/assignment/view'),
('admin', '/admin/default/*'),
('admin', '/admin/default/index'),
('admin', '/admin/menu/*'),
('admin', '/admin/menu/create'),
('admin', '/admin/menu/delete'),
('admin', '/admin/menu/index'),
('admin', '/admin/menu/update'),
('admin', '/admin/menu/view'),
('admin', '/admin/permission/*'),
('admin', '/admin/permission/assign'),
('admin', '/admin/permission/create'),
('admin', '/admin/permission/delete'),
('admin', '/admin/permission/get-users'),
('admin', '/admin/permission/index'),
('admin', '/admin/permission/remove'),
('admin', '/admin/permission/update'),
('admin', '/admin/permission/view'),
('admin', '/admin/role/*'),
('admin', '/admin/role/assign'),
('admin', '/admin/role/create'),
('admin', '/admin/role/delete'),
('admin', '/admin/role/get-users'),
('admin', '/admin/role/index'),
('admin', '/admin/role/remove'),
('admin', '/admin/role/update'),
('admin', '/admin/role/view'),
('admin', '/admin/route/*'),
('admin', '/admin/route/assign'),
('admin', '/admin/route/create'),
('admin', '/admin/route/index'),
('admin', '/admin/route/refresh'),
('admin', '/admin/route/remove'),
('admin', '/admin/rule/*'),
('admin', '/admin/rule/create'),
('admin', '/admin/rule/delete'),
('admin', '/admin/rule/index'),
('admin', '/admin/rule/update'),
('admin', '/admin/rule/view'),
('admin', '/admin/user/*'),
('admin', '/admin/user/activate'),
('admin', '/admin/user/change-password'),
('admin', '/admin/user/delete'),
('admin', '/admin/user/index'),
('admin', '/admin/user/login'),
('User', '/admin/user/login'),
('admin', '/admin/user/logout'),
('User', '/admin/user/logout'),
('admin', '/admin/user/request-password-reset'),
('admin', '/admin/user/reset-password'),
('admin', '/admin/user/signup'),
('admin', '/admin/user/view'),
('admin', '/berita/*'),
('penulis', '/berita/*'),
('penulisPermission', '/berita/*'),
('admin', '/berita/create'),
('penulis', '/berita/create'),
('penulisPermission', '/berita/create'),
('admin', '/berita/delete'),
('penulis', '/berita/delete'),
('penulisPermission', '/berita/delete'),
('admin', '/berita/index'),
('guestPermission', '/berita/index'),
('penulis', '/berita/index'),
('penulisPermission', '/berita/index'),
('admin', '/berita/update'),
('penulis', '/berita/update'),
('penulisPermission', '/berita/update'),
('admin', '/berita/view'),
('penulis', '/berita/view'),
('penulisPermission', '/berita/view'),
('admin', '/classroom/*'),
('admin', '/classroom/create'),
('admin', '/classroom/delete'),
('admin', '/classroom/index'),
('admin', '/classroom/update'),
('admin', '/classroom/view'),
('admin', '/debug/*'),
('admin', '/debug/default/*'),
('admin', '/debug/default/db-explain'),
('admin', '/debug/default/download-mail'),
('admin', '/debug/default/index'),
('admin', '/debug/default/toolbar'),
('admin', '/debug/default/view'),
('admin', '/debug/user/*'),
('admin', '/debug/user/reset-identity'),
('admin', '/debug/user/set-identity'),
('admin', '/gii/*'),
('admin', '/gii/default/*'),
('admin', '/gii/default/action'),
('admin', '/gii/default/diff'),
('admin', '/gii/default/index'),
('admin', '/gii/default/preview'),
('admin', '/gii/default/view'),
('admin', '/gridview/*'),
('admin', '/gridview/export/*'),
('admin', '/gridview/export/download'),
('admin', '/gridview/grid-edited-row/*'),
('admin', '/gridview/grid-edited-row/back'),
('admin', '/layanan/*'),
('admin', '/layanan/create'),
('admin', '/layanan/delete'),
('admin', '/layanan/index'),
('admin', '/layanan/update'),
('admin', '/layanan/view'),
('admin', '/question-template/*'),
('admin', '/question-template/create'),
('admin', '/question-template/delete'),
('admin', '/question-template/index'),
('admin', '/question-template/update'),
('admin', '/question-template/view'),
('admin', '/report/*'),
('admin', '/report/detail'),
('admin', '/report/export-detail'),
('admin', '/report/export-training'),
('admin', '/report/training'),
('admin', '/site/*'),
('admin', '/site/about'),
('admin', '/site/captcha'),
('admin', '/site/contact'),
('admin', '/site/error'),
('admin', '/site/index'),
('User', '/site/index'),
('admin', '/site/login'),
('User', '/site/login'),
('admin', '/site/logout'),
('User', '/site/logout'),
('User', '/submission/*'),
('User', '/submission/create'),
('User', '/submission/delete'),
('User', '/submission/index'),
('User', '/submission/update'),
('User', '/submission/view'),
('admin', '/testimoni/*'),
('guest', '/testimoni/*'),
('guestPermission', '/testimoni/*'),
('admin', '/testimoni/create'),
('guest', '/testimoni/create'),
('guestPermission', '/testimoni/create'),
('admin', '/testimoni/delete'),
('guest', '/testimoni/delete'),
('guestPermission', '/testimoni/delete'),
('admin', '/testimoni/index'),
('guest', '/testimoni/index'),
('guestPermission', '/testimoni/index'),
('admin', '/testimoni/update'),
('guest', '/testimoni/update'),
('guestPermission', '/testimoni/update'),
('admin', '/testimoni/view'),
('guestPermission', '/testimoni/view'),
('admin', '/trainer/*'),
('admin', '/trainer/create'),
('admin', '/trainer/delete'),
('admin', '/trainer/index'),
('admin', '/trainer/update'),
('admin', '/trainer/view'),
('admin', '/training/*'),
('admin', '/training/create'),
('admin', '/training/delete'),
('admin', '/training/index'),
('admin', '/training/update'),
('admin', '/training/view'),
('admin', '/user/*'),
('admin', '/user/admin/*'),
('admin', '/user/admin/assignments'),
('admin', '/user/admin/block'),
('admin', '/user/admin/confirm'),
('admin', '/user/admin/create'),
('admin', '/user/admin/delete'),
('admin', '/user/admin/index'),
('admin', '/user/admin/info'),
('admin', '/user/admin/resend-password'),
('admin', '/user/admin/switch'),
('admin', '/user/admin/update'),
('admin', '/user/admin/update-profile'),
('guest', '/user/login/*'),
('admin', '/user/profile/*'),
('admin', '/user/profile/index'),
('admin', '/user/profile/show'),
('admin', '/user/recovery/*'),
('guest', '/user/recovery/*'),
('admin', '/user/recovery/request'),
('guest', '/user/recovery/request'),
('admin', '/user/recovery/reset'),
('guest', '/user/recovery/reset'),
('admin', '/user/registration/*'),
('guest', '/user/registration/*'),
('admin', '/user/registration/confirm'),
('guest', '/user/registration/confirm'),
('admin', '/user/registration/connect'),
('guest', '/user/registration/connect'),
('admin', '/user/registration/register'),
('guest', '/user/registration/register'),
('admin', '/user/registration/resend'),
('guest', '/user/registration/resend'),
('admin', '/user/security/*'),
('admin', '/user/security/auth'),
('admin', '/user/security/login'),
('User', '/user/security/login'),
('admin', '/user/security/logout'),
('User', '/user/security/logout'),
('admin', '/user/settings/*'),
('User', '/user/settings/*'),
('admin', '/user/settings/account'),
('User', '/user/settings/account'),
('admin', '/user/settings/confirm'),
('User', '/user/settings/confirm'),
('admin', '/user/settings/delete'),
('admin', '/user/settings/disconnect'),
('User', '/user/settings/disconnect'),
('admin', '/user/settings/networks'),
('User', '/user/settings/networks'),
('admin', '/user/settings/profile'),
('User', '/user/settings/profile'),
('penulis', 'penulisPermission');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int DEFAULT NULL,
  `updated_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `konten` text COLLATE utf8mb4_general_ci NOT NULL,
  `penulis` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_terbit` datetime DEFAULT NULL,
  `tanggal_diperbarui` datetime DEFAULT NULL,
  `photo` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `summary` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `link` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `konten`, `penulis`, `tanggal_terbit`, `tanggal_diperbarui`, `photo`, `created_by`, `updated_by`, `summary`, `link`) VALUES
(8, 'ini judul', 'ini konten', 'saya penulis', '2023-08-05 07:08:29', '2023-08-05 07:08:29', 'uploads/berita/kami bercerita zaki2.png', NULL, NULL, 'ini ringkasan', ''),
(9, 'coffe morning 1 agustus 2023', 'coffe modniafaodhadjasld', 'asdasd', '2023-08-12 09:08:13', '2023-08-12 09:08:13', 'uploads/berita/poster zaki.png', NULL, NULL, 'ini ringkasan', ''),
(10, 'coffe morning 15 agustus 2023', 'ini kontennya', 'penulis', '2023-08-16 04:08:51', '2023-08-16 04:08:51', 'uploads/berita/erd.png', NULL, NULL, 'ini ringkasannya', ''),
(11, 'sad', 'asdasdasdsa', 'asd', '2023-09-05 06:09:55', '2023-09-05 06:09:55', 'uploads/berita/WIN_20210820_11_23_18_Pro.jpg', NULL, NULL, 'ini ringkasan', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungi_kami`
--

CREATE TABLE `hubungi_kami` (
  `id` int NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `id` int NOT NULL,
  `nama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga` int NOT NULL,
  `kecepatan` int NOT NULL,
  `photo` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_terbit` datetime DEFAULT NULL,
  `tanggal_diperbarui` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`id`, `nama`, `harga`, `kecepatan`, `photo`, `tanggal_terbit`, `tanggal_diperbarui`, `created_by`, `updated_by`) VALUES
(1, 'Paket JITU 1 - 1P\r\n\r\n', 280000, 30, '', NULL, NULL, NULL, NULL),
(2, 'New IndiHome Netflix 2P HSI Streaming', 555000, 100, '', NULL, NULL, NULL, NULL),
(3, '30 mbps', 555000, 30, '', NULL, NULL, NULL, NULL),
(4, 'qweqwe', 2132, 232, 'uploads/layanan/erd.png', '2023-07-28 15:07:56', '2023-07-28 15:07:56', NULL, NULL),
(5, 'tes', 280000, 30, 'uploads/layanan/erd.png', '2023-07-31 03:07:40', '2023-07-31 03:07:40', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `parent` int NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `order` int NOT NULL,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8mb4_general_ci NOT NULL,
  `apply_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1689770529),
('m140506_102106_rbac_init', 1689771549),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1689771549),
('m180523_151638_rbac_updates_indexes_without_prefix', 1689771549),
('m200409_110543_rbac_update_mssql_trigger', 1689771549);

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `testimoni` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `photo` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_terbit` datetime DEFAULT NULL,
  `tanggal_diperbarui` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `testimoni`, `photo`, `tanggal_terbit`, `tanggal_diperbarui`, `created_by`, `updated_by`) VALUES
(16, 'asdsa', 'asdsad', 'uploads/testimoni/squence diagram terbaru.png', '2023-08-15 04:08:00', '2023-08-15 04:08:00', NULL, NULL),
(17, 'ini nama saya', 'ini testimoni saya', 'uploads/testimoni/usecase.png', '2023-08-15 10:08:18', '2023-08-15 10:08:18', NULL, NULL),
(19, 'asdsa', 'testi', 'uploads/testimoni/hutan.jpeg', '2023-08-21 02:08:10', '2023-08-21 02:08:10', NULL, NULL),
(20, 'Supri', 'Menurut saya ganteng', 'uploads/testimoni/hutan.jpeg', '2023-08-21 02:08:16', '2023-08-21 02:08:16', NULL, NULL),
(21, 'Aku', 'Semua bagus', 'uploads/testimoni/WhatsApp Image 2023-01-16 at 11.43.19.jpeg', '2023-08-21 02:08:29', '2023-08-21 02:08:29', NULL, NULL),
(22, 'Sayng', 'Semua amu', 'uploads/testimoni/edead884-0ba4-455c-bf39-9c67c6bd4ed1-removebg-preview.png', '2023-08-21 02:08:07', '2023-08-21 02:08:07', NULL, NULL),
(31, 'ini nama', 'ini testimoni saya', 'uploads/testimoni/WIN_20210820_11_23_18_Pro.jpg', '2023-09-03 11:09:45', '2023-09-03 11:09:45', NULL, NULL),
(32, 'ini nama', 'ini testimoni saya', 'uploads/testimoni/WIN_20210820_11_17_52_Pro.jpg', '2023-09-03 11:09:21', '2023-09-03 11:09:21', NULL, NULL),
(33, 'ini nama', 'ini testimoni saya', 'uploads/testimoni/WIN_20210823_06_45_06_Pro.jpg', '2023-09-03 11:09:58', '2023-09-03 11:09:58', NULL, NULL),
(38, 'ini nama', 'iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', 'uploads/testimoni/WIN_20210823_06_45_15_Pro.jpg', '2023-09-06 05:09:50', '2023-09-06 05:09:50', NULL, NULL),
(39, 'ini nama', 'ini nama', 'uploads/testimoni/WIN_20210820_11_17_52_Pro.jpg', '2023-09-06 05:09:43', '2023-09-06 05:09:43', NULL, NULL),
(43, 'ini nama', 'dasdsadasdas\r\ndasdsadasdas\r\ndasdsadasdas', 'uploads/testimoni/WIN_20210820_11_17_52_Pro.jpg', '2023-09-06 05:09:33', '2023-09-06 05:09:33', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nama` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `photo` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `email`, `photo`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 'admin123@gmail.com', '1234567890', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indeks untuk tabel `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indeks untuk tabel `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hubungi_kami`
--
ALTER TABLE `hubungi_kami`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `hubungi_kami`
--
ALTER TABLE `hubungi_kami`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
