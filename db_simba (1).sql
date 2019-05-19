-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Bulan Mei 2019 pada 11.10
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(6) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `nama_pgw` varchar(30) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `nama_pgw`, `status`) VALUES
(1, 'admin', 'admin', 'bu yuni', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id` int(10) NOT NULL,
  `judulartikel` varchar(50) NOT NULL,
  `isi_artikel` text NOT NULL,
  `tgl` datetime NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_artikel`
--

INSERT INTO `tb_artikel` (`id`, `judulartikel`, `isi_artikel`, `tgl`, `gambar`) VALUES
(3, 'peduli sampah', '<p>peduli sampah itu perlu dialkukan oleh setiap mahasiswa UM malang, karena pedulia lingkunagan dapat memmbuat lingkungan bersih dan juga terawat</p>', '2019-04-25 02:47:05', '2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kat_sampah`
--

CREATE TABLE `tb_kat_sampah` (
  `id_kat_sampah` int(5) NOT NULL,
  `nm_kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kat_sampah`
--

INSERT INTO `tb_kat_sampah` (`id_kat_sampah`, `nm_kategori`) VALUES
(1, 'kertas'),
(2, 'besi'),
(3, 'botol'),
(4, 'Besi2'),
(6, 'besi3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nasabah`
--

CREATE TABLE `tb_nasabah` (
  `id_nasabah` int(10) NOT NULL,
  `nm_nasabah` varchar(50) DEFAULT NULL,
  `jk` varchar(1) DEFAULT NULL,
  `alamat` text,
  `hp` varchar(12) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `lati` varchar(50) DEFAULT NULL,
  `long` varchar(50) DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nasabah`
--

INSERT INTO `tb_nasabah` (`id_nasabah`, `nm_nasabah`, `jk`, `alamat`, `hp`, `username`, `password`, `lati`, `long`, `status`, `img`) VALUES
(1, 'opo', 'l', '3asdasd', '12312', 'opo', 'fa5d7f86abfb67640f3e082ff8aa1768', NULL, NULL, '1', ''),
(2, 'tatag', 'l', '232323', '2323', 'tatag', 'e0f363ef95c21d32a6db549bb2ddc4d2', NULL, NULL, '1', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `no` int(11) NOT NULL,
  `id_pembelian` int(10) DEFAULT NULL,
  `id_nasabah` int(10) DEFAULT NULL,
  `id_sampah` int(10) DEFAULT NULL,
  `berat` double(10,1) DEFAULT NULL,
  `total` double(10,2) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `petugas` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pembelian`
--

INSERT INTO `tb_pembelian` (`no`, `id_pembelian`, `id_nasabah`, `id_sampah`, `berat`, `total`, `tgl`, `petugas`) VALUES
(1, 1, 1, 1, 2.0, 1600.00, '2019-05-01', 'Bu Yuni'),
(2, 1, 1, 3, 4.0, 1600.00, '2019-05-01', 'Bu Yuni'),
(3, 2, 1, 1, 1.0, 800.00, '2019-05-01', 'Bu Yuni'),
(4, 3, 2, 2, 2.0, 2000.00, '2019-05-01', 'Bu Yuni'),
(5, 4, 1, 4, 2.3, 3450.00, '2019-05-01', 'Bu Yuni');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengajuan`
--

CREATE TABLE `tb_pengajuan` (
  `id` int(11) NOT NULL,
  `id_nasabah` int(10) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `nominal` float(20,0) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_penjualan` int(10) NOT NULL,
  `id_perusahaan` int(10) DEFAULT NULL,
  `berat` float(6,0) DEFAULT NULL,
  `total` float(6,0) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `status` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penjualan_detail`
--

CREATE TABLE `tb_penjualan_detail` (
  `id` int(20) NOT NULL,
  `id_penjualan` int(20) DEFAULT NULL,
  `id_perusahaan` int(10) DEFAULT NULL,
  `id_sampah` int(20) DEFAULT NULL,
  `berat` double(20,2) DEFAULT NULL,
  `total` double(20,2) DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penjualan_detail`
--

INSERT INTO `tb_penjualan_detail` (`id`, `id_penjualan`, `id_perusahaan`, `id_sampah`, `berat`, `total`, `tgl`) VALUES
(1, 1, 0, 2, 7.00, 7000.00, '2019-05-01'),
(2, 1, 0, 2, 2.30, 2300.00, '2019-05-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perusahaan`
--

CREATE TABLE `tb_perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_perusahaan`
--

INSERT INTO `tb_perusahaan` (`id_perusahaan`, `nama_perusahaan`, `alamat`, `email`, `password`, `status`, `img`) VALUES
(1, 'Sinar Dunia', 'weedes', 'sinardunia@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 'Screenshot (2).png'),
(2, 'bosss', 'teres', 'boss@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02', 1, 'Screenshot (5).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sampah`
--

CREATE TABLE `tb_sampah` (
  `id_sampah` int(10) NOT NULL,
  `id_kat_sampah` int(50) NOT NULL,
  `nm_sampah` varchar(50) NOT NULL,
  `harga_bl` float NOT NULL,
  `harga_jl` float NOT NULL,
  `stok` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sampah`
--

INSERT INTO `tb_sampah` (`id_sampah`, `id_kat_sampah`, `nm_sampah`, `harga_bl`, `harga_jl`, `stok`) VALUES
(1, 1, 'kertas hvs bekas', 800, 700, 0),
(2, 2, 'besi bekas ', 1000, 1100, 0),
(3, 3, 'botol kecap', 400, 450, 0),
(4, 3, 'plastik2', 1500, 2000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tabungan`
--

CREATE TABLE `tb_tabungan` (
  `id_tabungan` int(11) NOT NULL,
  `id_nasabah` int(10) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `jumlah` double(20,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tabungan`
--

INSERT INTO `tb_tabungan` (`id_tabungan`, `id_nasabah`, `tgl`, `jumlah`) VALUES
(1, 1, '2019-05-01', 7450),
(2, 2, '2019-05-01', 2000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trans` int(11) NOT NULL,
  `id_perusahaan` int(10) NOT NULL,
  `id_penjualan` int(50) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kat_sampah`
--
ALTER TABLE `tb_kat_sampah`
  ADD PRIMARY KEY (`id_kat_sampah`);

--
-- Indeks untuk tabel `tb_nasabah`
--
ALTER TABLE `tb_nasabah`
  ADD PRIMARY KEY (`id_nasabah`);

--
-- Indeks untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`no`),
  ADD KEY `tb_pembelian_ibfk_1` (`id_sampah`);

--
-- Indeks untuk tabel `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indeks untuk tabel `tb_penjualan_detail`
--
ALTER TABLE `tb_penjualan_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indeks untuk tabel `tb_sampah`
--
ALTER TABLE `tb_sampah`
  ADD PRIMARY KEY (`id_sampah`),
  ADD KEY `id_kat_sampah` (`id_kat_sampah`);

--
-- Indeks untuk tabel `tb_tabungan`
--
ALTER TABLE `tb_tabungan`
  ADD PRIMARY KEY (`id_tabungan`),
  ADD KEY `id_nasabah` (`id_nasabah`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD KEY `id_perusahaan` (`id_perusahaan`),
  ADD KEY `transaksi_ibfk_2` (`id_penjualan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_kat_sampah`
--
ALTER TABLE `tb_kat_sampah`
  MODIFY `id_kat_sampah` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_nasabah`
--
ALTER TABLE `tb_nasabah`
  MODIFY `id_nasabah` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id_penjualan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_penjualan_detail`
--
ALTER TABLE `tb_penjualan_detail`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_sampah`
--
ALTER TABLE `tb_sampah`
  MODIFY `id_sampah` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_tabungan`
--
ALTER TABLE `tb_tabungan`
  MODIFY `id_tabungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD CONSTRAINT `tb_pembelian_ibfk_1` FOREIGN KEY (`id_sampah`) REFERENCES `tb_sampah` (`id_sampah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_sampah`
--
ALTER TABLE `tb_sampah`
  ADD CONSTRAINT `tb_sampah_ibfk_1` FOREIGN KEY (`id_kat_sampah`) REFERENCES `tb_kat_sampah` (`id_kat_sampah`);

--
-- Ketidakleluasaan untuk tabel `tb_tabungan`
--
ALTER TABLE `tb_tabungan`
  ADD CONSTRAINT `tb_tabungan_ibfk_1` FOREIGN KEY (`id_nasabah`) REFERENCES `tb_nasabah` (`id_nasabah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
