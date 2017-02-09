-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 09 Feb 2017 pada 10.16
-- Versi Server: 5.6.31-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasr`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(10) unsigned NOT NULL,
  `satuanharga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_pembayaran` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_bayar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_petani` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_rekening` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_prdks` int(11) NOT NULL,
  `tgl_post` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `total` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id`, `satuanharga`, `jumlah`, `status_pembayaran`, `status_role`, `tanggal_bayar`, `id_petani`, `id_user`, `nama_barang`, `no_rekening`, `nama`, `id_prdks`, `tgl_post`, `updated_at`, `created_at`, `total`) VALUES
(14, '10000', '1', 'Sudah Dikonfirmasi', 'Dihapus', '', '2 ', '1', '', '93985043 ', 'Melon Melan ', 3, '2016-05-27', '2016-06-06 22:10:03', '2016-05-27 00:04:31', ''),
(15, '1000', '20', 'Sudah Dikonfirmasi', 'Dihapus', '', '2 ', '5', '', '93985043 ', 'MbaMbaBam ', 4, '2016-06-07', '2017-01-17 22:48:23', '2016-06-06 22:17:47', ''),
(16, '10000', '21', 'Sudah Dikonfirmasi', 'Dihapus', '', '2 ', '1', '', '93985043 ', 'Melon ', 5, '2016-06-08', '2017-02-05 06:19:13', '2016-06-07 20:16:58', ''),
(17, '1000', '1', 'Belum Dibayar', 'Stok Ada', '', '2 ', '2', '', '93985043 ', 'MbaMbaBam ', 4, '2017-01-17', '2017-01-17 06:54:12', '2017-01-17 06:54:12', ''),
(18, '10000', '1', 'Belum Dibayar', 'Stok Ada', '', '2 ', '2', '', '93985043 ', 'Melon ', 5, '2017-02-05', '2017-02-05 06:17:20', '2017-02-05 06:17:20', ''),
(19, '10000', '12', 'Menunggu Konfirmasi', 'Stok Ada', '', '2 ', '8', '', '93985043 ', 'Daging Ayam ', 6, '2017-02-06', '2017-02-05 20:40:21', '2017-02-05 20:40:05', ''),
(22, '500000', '1', 'Sudah Dikonfirmasi', 'Stok Ada', '', '7 ', '11', '', '901021 ', 'Irian Chicken Premium ', 10, '2017-02-07', '2017-02-07 00:11:28', '2017-02-07 00:09:18', ''),
(23, '500000', '1', 'Menunggu Konfirmasi', 'Stok Ada', '', '7 ', '7', '', '901021 ', 'Irian Chicken Premium ', 10, '2017-02-08', '2017-02-07 17:24:35', '2017-02-07 17:24:11', ''),
(24, '100000', '30', 'Sudah Dikonfirmasi', 'Dihapus', '', '7 ', '11', '', '901021 ', 'Pare Nak ', 11, '2017-02-08', '2017-02-07 18:02:21', '2017-02-07 18:00:16', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
  `id` int(10) unsigned NOT NULL,
  `harga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total_pembayaran` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_bayar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_petani` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_pembeli` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_rekening` int(15) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_prdks` int(11) NOT NULL,
  `id_cart` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id`, `harga`, `jumlah`, `total_pembayaran`, `tanggal_bayar`, `id_petani`, `id_pembeli`, `nama`, `remember_token`, `created_at`, `updated_at`, `status`, `no_rekening`, `id_user`, `id_prdks`, `id_cart`) VALUES
(11, '', '1', '100000', '2016/6/20', '2  ', '', 'Melon Melan  ', NULL, '2016-05-27 00:05:46', '2016-05-27 00:08:10', 'Sudah Dikonfirmasi', 123123, 1, 3, 14),
(12, '', '20', '20000', '2016/1/1', '2  ', '', 'MbaMbaBam  ', NULL, '2016-06-06 22:18:06', '2016-06-06 22:18:34', 'Sudah Dikonfirmasi', 998121, 5, 4, 15),
(13, '', '21', '210000', '2016/6/20', '2  ', '', 'Melon  ', NULL, '2016-06-07 20:17:33', '2016-06-07 20:18:26', 'Sudah Dikonfirmasi', 2147483647, 1, 5, 16),
(14, '', '12', '1200000', '20-12-2017', '2  ', '', 'Daging Ayam  ', NULL, '2017-02-05 20:40:21', '2017-02-05 20:40:21', 'Belum Dikonfirmasi', 1313143534, 8, 6, 19),
(15, '', '1', '550000', '2016-02-02', '7  ', '', 'Irian Chicken Premium  ', NULL, '2017-02-07 00:09:39', '2017-02-07 17:53:15', 'Dihapus', 888987, 11, 10, 22),
(16, '', '1', '500000', '20-12-2017', '7  ', '', 'Irian Chicken Premium  ', NULL, '2017-02-07 17:24:34', '2017-02-07 17:24:34', 'Belum Dikonfirmasi', 901021, 7, 10, 23),
(17, '', '30', '3000000', '2017-02-02', '7  ', '', 'Pare Nak  ', NULL, '2017-02-07 18:00:47', '2017-02-07 18:01:54', 'Sudah Dikonfirmasi', 888987, 11, 11, 24);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prdks`
--

CREATE TABLE IF NOT EXISTS `prdks` (
  `id` int(10) unsigned NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `satuan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_post` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tanggal_panen` date NOT NULL,
  `id_petani` int(11) NOT NULL,
  `nama_petani` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8_unicode_ci NOT NULL,
  `no_rekening` int(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `prdks`
--

INSERT INTO `prdks` (`id`, `nama_barang`, `harga`, `jumlah`, `satuan`, `tgl_post`, `kategori`, `desr`, `remember_token`, `created_at`, `updated_at`, `tanggal_panen`, `id_petani`, `nama_petani`, `gambar`, `no_rekening`) VALUES
(6, 'Daging Ayam', '10000', '10000', 'Karung', '2017-01-15 07:20:25', 'Sayur', '', NULL, '2017-01-15 00:20:25', '2017-01-15 00:20:25', '2017-02-01', 2, 'Joko ', '20170115072025587b22b993a29.jpg', 93985043);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ptnkp`
--

CREATE TABLE IF NOT EXISTS `ptnkp` (
  `id` int(10) unsigned NOT NULL,
  `id_log` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_telp` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `id_log` int(11) NOT NULL,
  `nama_depan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_belakang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_telp` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gambar` text COLLATE utf8_unicode_ci NOT NULL,
  `no_rekening` int(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `id_log`, `nama_depan`, `nama_belakang`, `email`, `password`, `alamat`, `role`, `no_telp`, `remember_token`, `created_at`, `updated_at`, `gambar`, `no_rekening`) VALUES
(1, 0, 'Fahrel', 'Aviary', 'fahviary21@gmail.com', '$2y$10$L7LnH6C15qxEmMYt5fKXset5tSchsWt4AZhgbWCX16aL2CF0nvdWK', 'Bandung', 'User', '', 'H5esgrUpzeX8JDfPOQAwaqG7iOkuucFmiBo8uoniqlH8YBcv3wHyXEoUDiHE', NULL, '2016-06-07 20:17:50', '', 0),
(2, 0, '', '', '', '$2y$10$6UT.hpRNrhIbtO6cLGGn/uaO/2XclkGnnQJgUjwMY0ClphQQ.z/Y2', '', 'Petani', '', 'aciO1nbfOE3NRSiXZSruNgoyT6w6wtd0zPbxKwoBIF8WWigJ1MXBgsBa6vGh', '2016-05-22 04:59:30', '2017-02-05 19:03:18', '', 0),
(3, 0, 'Yoni', 'Inoy', 'yoniinoy@gmail.com', '$2y$10$X4zHB3i6glTjDC459BbUde/sXTxD6q4nqA/erh7dB218nQ/1SmY0W', 'Bandung Barat', 'User', '0921312', 'q3VtCRc5rFPTBg4RZ5lihjk3yEP6y6xdUj8TbyE1z1tQBhygHtDniq6OercF', '2016-05-23 23:19:01', '2016-05-23 23:22:43', '', 1231321123),
(4, 0, 'Fahrel ', 'Nama Belakang (Optional)', 'fahrel@gmail.com', '$2y$10$.I4OG2prd3wZC8qEF9CzxeUWlQ9Gd6y/2IODYOfYcjz/Va.JL3lqK', 'Jl. Smea VI', 'Petani', '210321212321', 'MKYNAElpfAZSz3IVOD0X8NRt60vlxRvPjZjTqc9L0Yl60RJz4k0KntaEqVj7', '2016-06-06 22:13:37', '2016-06-06 22:14:00', '', 2147483647),
(5, 0, 'Fahrel', 'Aviary', 'fafafafa@gmail.com', '$2y$10$.YHl3iTdI4B/Tj2/HYgBJOn6vS4db4PZE4AUleTYl5/H9xNumgU/C', 'Jl. Joko Asem, Cianjur, Jawa Barat', 'User', '10292923', 'INNH7odcOBtiL4iSWdPvezb6Wtx9ESYp58H35AmNqCnS123nspPDPIifEqe2', '2016-06-06 22:14:35', '2016-06-06 22:18:11', '', 998121),
(6, 0, 'Fahrel', 'AAAAAAA', 'fahrel123@gmail.com', 'no1knows', 'SMEA VI', 'User', '293012312', NULL, NULL, NULL, '', 12312321),
(7, 0, '', 'Pagi21', 'mentariiii@gmail.com', '$2y$10$cLNIvzwyzCQ/ZTtIO3ofmuJ..WLW2w6yQlJHS3Ld8CaHjMPKdOuvm', 'Subang', 'Petani', '0998', 'XM0UxJbOlT3g0ia6gLKVc7AcF0QwVHHHC5Xj4HAVe7d5eVzyum5985vGeIkj', '2016-09-19 22:34:19', '2017-02-07 21:57:32', '07974eacdab338787a65fe25c708c05c.jpg', 901021),
(8, 0, 'Ahmad', 'Ahmand', 'gagaga@gmail.com', '$2y$10$TYWblZhzWfehD6.Q0VTgI.3FVVOK0hMQDj2Gg8/MHJ5PhMOxa0.Im', 'Jakarta', 'User', '9012839201', 'xDpbaF8cZpvfYNV7haTTmOVPkkDDHjESP6STtzRaWmyEZsTAuFIAK2TGd7ws', '2016-11-24 03:53:45', '2017-02-05 20:40:51', '', 1313143534),
(9, 0, 'Ahmad', 'Ahmad', '123@gmail.com', '123321', 'Bandung', 'User', '', NULL, NULL, NULL, '', 0),
(11, 0, 'Fahrel', 'Mister', 'mrfahrel@gmail.com', '$2y$10$SHN6hrO5IMF3vCwFzlDe5.nxhNYLoiQtOwxXyGkKojQAdK/gOe4PC', 'Kalimantan', 'User', 'Nomor Telepon', 'ACTp9TFk3T0m6sMz5OdD63Ksa1Em1B2Y5RZWh3ME2aQMVGl5w4cSs4gqYDTQ', '2017-02-06 22:01:42', '2017-02-07 22:08:53', '', 888987),
(12, 0, 'Loki', 'Kilo', 'lokilo@loks.com', '$2y$10$1gWij4CTnBKyUvDBItRfQOGJYS.DgWrZ6vWqT2iIOF7BPABIFGtvq', 'Bandung', 'User', '08927231', 'LQn9QxKAqELMG21CYbVjZ52qY2TpApESaKSN2NdKNoxiqOSSd6zOkp2NJo8D', '2017-02-07 18:58:02', '2017-02-07 18:58:30', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prdks`
--
ALTER TABLE `prdks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ptnkp`
--
ALTER TABLE `ptnkp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ptnkp_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `prdks`
--
ALTER TABLE `prdks`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ptnkp`
--
ALTER TABLE `ptnkp`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
