-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 03:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
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
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text DEFAULT NULL,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
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
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', '/*'),
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
('admin', '/admin/user/logout'),
('admin', '/admin/user/request-password-reset'),
('admin', '/admin/user/reset-password'),
('admin', '/admin/user/signup'),
('admin', '/admin/user/view'),
('admin', '/berita/*'),
('admin', '/berita/create'),
('admin', '/berita/delete'),
('admin', '/berita/index'),
('admin', '/berita/update'),
('admin', '/berita/view'),
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
('admin', '/site/login'),
('admin', '/site/logout'),
('admin', '/testimoni/*'),
('admin', '/testimoni/create'),
('admin', '/testimoni/delete'),
('admin', '/testimoni/index'),
('admin', '/testimoni/update'),
('admin', '/testimoni/view'),
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
('admin', '/user/profile/*'),
('admin', '/user/profile/index'),
('admin', '/user/profile/show'),
('admin', '/user/recovery/*'),
('admin', '/user/recovery/request'),
('admin', '/user/recovery/reset'),
('admin', '/user/registration/*'),
('admin', '/user/registration/confirm'),
('admin', '/user/registration/connect'),
('admin', '/user/registration/register'),
('admin', '/user/registration/resend'),
('admin', '/user/security/*'),
('admin', '/user/security/auth'),
('admin', '/user/security/login'),
('admin', '/user/security/logout'),
('admin', '/user/settings/*'),
('admin', '/user/settings/account'),
('admin', '/user/settings/confirm'),
('admin', '/user/settings/delete'),
('admin', '/user/settings/disconnect'),
('admin', '/user/settings/networks'),
('admin', '/user/settings/profile'),
('adminPermission', '/*'),
('guest', '/berita/index'),
('guest', '/berita/view'),
('guest', '/site/contact'),
('guest', '/site/index'),
('guest', '/testimoni/*'),
('guest', '/testimoni/create'),
('guest', '/testimoni/index'),
('guest', '/testimoni/update'),
('guest', '/user/login/*'),
('guest', '/user/recovery/*'),
('guest', '/user/recovery/request'),
('guest', '/user/recovery/reset'),
('guest', '/user/registration/*'),
('guest', '/user/registration/confirm'),
('guest', '/user/registration/connect'),
('guest', '/user/registration/register'),
('guest', '/user/registration/resend'),
('guestPermission', '/berita/index'),
('guestPermission', '/testimoni/*'),
('guestPermission', '/testimoni/create'),
('guestPermission', '/testimoni/delete'),
('guestPermission', '/testimoni/index'),
('guestPermission', '/testimoni/update'),
('guestPermission', '/testimoni/view'),
('penulis', '/berita/*'),
('penulis', '/berita/create'),
('penulis', '/berita/delete'),
('penulis', '/berita/index'),
('penulis', '/berita/update'),
('penulis', '/berita/view'),
('penulis', 'penulisPermission'),
('penulisPermission', '/berita/*'),
('penulisPermission', '/berita/create'),
('penulisPermission', '/berita/delete'),
('penulisPermission', '/berita/index'),
('penulisPermission', '/berita/update'),
('penulisPermission', '/berita/view'),
('User', '/admin/user/login'),
('User', '/admin/user/logout'),
('User', '/site/index'),
('User', '/site/login'),
('User', '/site/logout'),
('User', '/submission/*'),
('User', '/submission/create'),
('User', '/submission/delete'),
('User', '/submission/index'),
('User', '/submission/update'),
('User', '/submission/view'),
('User', '/user/security/login'),
('User', '/user/security/logout'),
('User', '/user/settings/*'),
('User', '/user/settings/account'),
('User', '/user/settings/confirm'),
('User', '/user/settings/disconnect'),
('User', '/user/settings/networks'),
('User', '/user/settings/profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `tanggal_terbit` datetime DEFAULT NULL,
  `tanggal_diperbarui` datetime DEFAULT NULL,
  `photo` varchar(500) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `summary` varchar(500) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `konten`, `penulis`, `tanggal_terbit`, `tanggal_diperbarui`, `photo`, `created_by`, `updated_by`, `summary`, `link`) VALUES
(8, 'ini judul', 'ini konten', 'saya penulis', '2023-08-05 07:08:29', '2023-08-05 07:08:29', 'uploads/berita/kami bercerita zaki2.png', NULL, NULL, 'ini ringkasan', ''),
(9, 'coffe morning 1 agustus 2023', 'coffe modniafaodhadjasld', 'asdasd', '2023-08-12 09:08:13', '2023-08-12 09:08:13', 'uploads/berita/poster zaki.png', NULL, NULL, 'ini ringkasan', ''),
(10, 'coffe morning 15 agustus 2023', 'ini kontennya', 'penulis', '2023-08-16 04:08:51', '2023-08-16 04:08:51', 'uploads/berita/erd.png', NULL, NULL, 'ini ringkasannya', ''),
(11, 'sad', 'asdasdasdsa', 'asd', '2023-09-05 06:09:55', '2023-09-05 06:09:55', 'uploads/berita/WIN_20210820_11_23_18_Pro.jpg', NULL, NULL, 'ini ringkasan', '');

-- --------------------------------------------------------

--
-- Table structure for table `hubungi_kami`
--

CREATE TABLE `hubungi_kami` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_telepon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `harga` int(11) NOT NULL,
  `kecepatan` int(11) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `tanggal_terbit` datetime DEFAULT NULL,
  `tanggal_diperbarui` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `nama`, `harga`, `kecepatan`, `photo`, `tanggal_terbit`, `tanggal_diperbarui`, `created_by`, `updated_by`) VALUES
(1, 'Paket JITU 1 - 1P\r\n\r\n', 280000, 30, '', NULL, NULL, NULL, NULL),
(2, 'New IndiHome Netflix 2P HSI Streaming', 555000, 100, '', NULL, NULL, NULL, NULL),
(3, '30 mbps', 555000, 30, '', NULL, NULL, NULL, NULL),
(4, 'qweqwe', 2132, 232, 'uploads/layanan/erd.png', '2023-07-28 15:07:56', '2023-07-28 15:07:56', NULL, NULL),
(5, 'tes', 280000, 30, 'uploads/layanan/erd.png', '2023-07-31 03:07:40', '2023-07-31 03:07:40', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `parent` int(11) NOT NULL,
  `route` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1689770529),
('m140506_102106_rbac_init', 1689771549),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1689771549),
('m180523_151638_rbac_updates_indexes_without_prefix', 1689771549),
('m200409_110543_rbac_update_mssql_trigger', 1689771549);

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `testimoni` varchar(225) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `tanggal_terbit` datetime DEFAULT NULL,
  `tanggal_diperbarui` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimoni`
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `email`, `photo`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 'admin123@gmail.com', '1234567890', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hubungi_kami`
--
ALTER TABLE `hubungi_kami`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hubungi_kami`
--
ALTER TABLE `hubungi_kami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
