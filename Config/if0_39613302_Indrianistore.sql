-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql312.byetcluster.com
-- Waktu pembuatan: 01 Agu 2025 pada 12.08
-- Versi server: 11.4.7-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_39613302_Indrianistore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel kategori`
--

CREATE TABLE `tabel kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `keterangan` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel login`
--

CREATE TABLE `tabel login` (
  `id_akun` int(3) NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel login`
--

INSERT INTO `tabel login` (`id_akun`, `username`, `password`) VALUES
(0, 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table barang`
--

CREATE TABLE `table barang` (
  `idbarang` int(6) NOT NULL,
  `namabarang` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kategori` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` int(8) NOT NULL,
  `gambar` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `table barang`
--

INSERT INTO `table barang` (`idbarang`, `namabarang`, `kategori`, `jumlah`, `harga`, `gambar`) VALUES
(0, '', '', 0, 0, ''),
(123, 'Buku Catatan', 'Kertas', 15, 7000, ''),
(132, 'Planer', 'Kertas', 20, 5000, ''),
(234, 'Stiker Bunga', 'Kertas', 15, 3000, ''),
(321, 'Pena', 'Tulis', 30, 5000, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel kategori`
--
ALTER TABLE `tabel kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tabel login`
--
ALTER TABLE `tabel login`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `table barang`
--
ALTER TABLE `table barang`
  ADD PRIMARY KEY (`idbarang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel kategori`
--
ALTER TABLE `tabel kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel login`
--
ALTER TABLE `tabel login`
  MODIFY `id_akun` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
