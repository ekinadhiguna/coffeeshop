-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2022 pada 14.00
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_coffeeshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailpesanan`
--

CREATE TABLE `detailpesanan` (
  `iddp` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detailpesanan`
--

INSERT INTO `detailpesanan` (`iddp`, `id`, `idp`, `qty`) VALUES
(9, 202200019, 4, 1),
(10, 202200018, 4, 2),
(11, 202200018, 5, 3),
(12, 202200019, 6, 2),
(15, 202200019, 5, 5),
(16, 202200022, 24, 1),
(17, 202200022, 6, 2),
(18, 202200023, 15, 1),
(19, 202200023, 30, 1),
(20, 202200023, 18, 1),
(21, 202200023, 21, 1),
(22, 202200024, 16, 2),
(23, 202200024, 14, 1),
(24, 202200024, 4, 2),
(25, 202200024, 19, 1),
(26, 202200025, 29, 1),
(27, 202200021, 28, 1),
(28, 202200021, 19, 1),
(29, 202200026, 4, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '0011', 'admin'),
(2, 'kasir', 'kasir', '1122', 'kasir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `namapelanggan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal`, `namapelanggan`) VALUES
(202200021, '2022-11-18 08:31:14', 'Mesra'),
(202200022, '2022-11-19 15:11:17', 'Amanda Febryanti'),
(202200023, '2022-11-19 15:13:55', 'Stevan Hans '),
(202200024, '2022-11-19 15:17:02', 'Kelvin Anggara'),
(202200025, '2022-11-19 15:24:26', 'Age Plus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `idp` int(11) NOT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `kategori` text DEFAULT NULL,
  `harga_beli` int(11) DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `gambar_produk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`idp`, `nama_produk`, `kategori`, `harga_beli`, `harga_jual`, `gambar_produk`) VALUES
(4, 'Cinamon Roll', 'Food', 15000, 27500, '249-cinamonroll.jpg'),
(5, 'Friench Fries', 'Food', 7000, 15000, '777-frensfrais.jpg'),
(6, 'Cheesecake', 'Food', 15000, 29500, '199-ciskek.jpg'),
(13, 'Strawberry Cake', 'Food', 20000, 35000, '225-stroberikek.jpg'),
(14, 'Coffee Chocolate', 'Beverage', 15000, 30000, '38-coffee-chocolate.png'),
(15, 'Red Velvet', 'Beverage', 20000, 30000, '396-2.jpg'),
(16, 'Sparkling Mint Espresso', 'Beverage', 25000, 45000, '861-2323585078.jpg'),
(17, 'Strawberry Latte', 'Beverage', 20000, 35000, '938-1-bc151a8dfa1d424b05db44f086e4a6a9.jpg'),
(18, 'Banana Pancake', 'Food', 18000, 28000, '139-pancake.jpg'),
(19, 'Waffle', 'Food', 15000, 25000, '564-waffle.jpg'),
(20, 'Corndog', 'Food', 15000, 22000, '53-corndog.jpg'),
(21, 'Chizu Boba', 'Food', 23000, 38000, '202-Chizu_Boba.jpg'),
(22, 'Old Ferry Donut', 'Food', 10000, 20000, '394-donat.jpg'),
(23, 'Matcha Latte', 'Beverage', 20000, 26000, '390-matcha_latte.jpg'),
(24, 'Brown Sugar Dalgona Coffee', 'Beverage', 15000, 23000, '503-Brown_Sugar_Dalgona_Coffee.jpg'),
(25, 'Ice Latte', 'Beverage', 15000, 24000, '273-ice_latte.jpg'),
(26, 'Ice Americano', 'Beverage', 10000, 18000, '572-es_kopi_americano.jpg'),
(27, 'Black Coffee', 'Beverage', 5000, 12500, '992-kopi_hitam.jpg'),
(28, 'Hot Tea', 'Beverage', 2000, 5000, '83-teh.jpg'),
(29, 'Ice Tea', 'Beverage', 3000, 7000, '750-teh+s.jpg'),
(30, 'Ice Coffee Tiramisu', 'Beverage', 20000, 30000, '769-ice_coffe_tiramisu.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detailpesanan`
--
ALTER TABLE `detailpesanan`
  ADD PRIMARY KEY (`iddp`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detailpesanan`
--
ALTER TABLE `detailpesanan`
  MODIFY `iddp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202200027;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
