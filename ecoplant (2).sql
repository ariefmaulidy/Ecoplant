-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Mei 2018 pada 04.01
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecoplant`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email_admin` varchar(250) NOT NULL,
  `password_admin` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `email_admin`, `password_admin`) VALUES
(1, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `nama_pemesan` varchar(250) NOT NULL,
  `alamat_pemesan` text NOT NULL,
  `tanaman` varchar(250) NOT NULL,
  `banyak_pesanan` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `nama_pemesan`, `alamat_pemesan`, `tanaman`, `banyak_pesanan`, `total_harga`, `status_pembayaran`) VALUES
(1, 'indah', 'bateng', 'Anggrek', 1, 50000, 1),
(2, 'indah', 'bateng', 'Anggrek', 2, 100000, 1),
(3, 'indah', 'bateng', 'Anggrek', 7, 350000, 1),
(4, 'indah', 'bateng', 'Anggrek', 6, 300000, 1),
(5, 'Cobain', 'Lalalalalaalalaaa', 'Anthurium Bunga', 1, 55000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanaman`
--

CREATE TABLE `tanaman` (
  `id_tanaman` int(5) NOT NULL,
  `nama_tanaman` varchar(50) NOT NULL,
  `jenis_tanaman` varchar(50) NOT NULL,
  `harga_tanaman` varchar(20) NOT NULL,
  `cara_perawatan` text NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tanaman`
--

INSERT INTO `tanaman` (`id_tanaman`, `nama_tanaman`, `jenis_tanaman`, `harga_tanaman`, `cara_perawatan`, `gambar`, `stok`) VALUES
(2, 'Anthurium Bunga', 'Tanaman Hias Bunga', '55000', 'siram 2x sehari, pagi dan sore', 'anthurium.jpg', 19),
(4, 'Bougenville', 'Tanaman Hias Bunga', '27000', 'siram 2x sehari, pagi dan sore', 'bougenville.jpg', 0),
(5, 'Gerbera', 'Tanaman Hias Bunga', '75000', 'siram 2x sehari, pagi dan sore', 'gerbera.jpg', 0),
(6, 'Hibicus', 'Tanaman Hias Bunga', '150000', 'siram 2x sehari, pagi dan sore', 'hibicus.jpg', 0),
(7, 'Kalanchoe', 'Tanaman Hias Bunga', '25000', 'siram 2x sehari, pagi dan sore', 'kalanchoe.jpg', 0),
(8, 'Mawar', 'Tanaman Hias Bunga', '17000', 'siram 2x sehari, pagi dan sore', 'mawar.jpg', 0),
(9, 'Azalea', 'Tanaman Hias Bunga', '22000', 'siram 2x sehari, pagi dan sore', 'azalea.jpg', 0),
(10, 'Dahlia', 'Tanaman Hias Bunga', '22000', 'siram 2x sehari, pagi dan sore', 'dahlia.jpg', 0),
(11, 'Camelia', 'Tanaman Hias Bunga', '29000', 'siram 2x sehari, pagi dan sore', 'camelia.jpg', 0),
(12, 'chrysanthemum ', 'Tanaman Hias Bunga', '28000', 'siram 2x sehari, pagi dan sore, jauhkan dari jangkauan anak-anak', 'chrysanthemum.jpg', 0),
(13, 'Aglaonema', 'Tanaman Hias Daun', '27000', 'siram 2x sehari, pagi dan sore, jauhkan dari jangkauan anak-anak', 'aglaonema.jpg', 0),
(14, 'Anthurium Daun', 'Tanaman Hias Daun', '48000', 'siram 2x sehari, pagi dan sore, jauhkan dari jangkauan anak-anak', 'anthuriumDaun.jpg', 0),
(15, 'Bromelia', 'Tanaman Hias Daun', '44000', 'siram 2x sehari, pagi dan sore, jauhkan dari jangkauan anak-anak', 'bromelia.jpg', 0),
(16, 'Calathea', 'Tanaman Hias Daun', '32000', 'siram 2x sehari, pagi dan sore, jauhkan dari jangkauan anak-anak', 'calathea.jpg', 0),
(17, 'Coleus', 'Tanaman Hias Daun', '69000', 'siram 2x sehari, pagi dan sore, jauhkan dari jangkauan anak-anak', 'coleus.jpg', 0),
(18, 'Pakis dan Suplir', 'Tanaman Hias Daun', '76000', 'siram 2x sehari, pagi dan sore, jauhkan dari jangkauan anak-anak', 'pakis.jpg', 0),
(19, 'Philodendron', 'Tanaman Hias Daun', '28000', 'siram 2x sehari, pagi dan sore, jauhkan dari jangkauan anak-anak', 'philodendron.jpg', 0),
(20, 'Puring', 'Tanaman Hias Daun', '34000', 'siram 2x sehari, pagi dan sore, jauhkan dari jangkauan anak-anak', 'puring.jpg', 0),
(21, 'Tillandsia', 'Tanaman Hias Daun', '22000', 'siram 2x sehari, pagi dan sore, jauhkan dari jangkauan anak-anak', 'tilandsia.jpg', 0),
(22, 'Lotus', 'Tanaman Air', '37000', 'tidak perlu disiram', 'lotus.jpg', 0),
(23, 'Teratai', 'Tanaman Air', '30000', 'perlu air', 'teratai.jpg', 0),
(24, 'Paku Air', 'Tanaman Air', '23000', 'jangan di injak', 'PakuAir.jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama_user` char(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `no_telp` int(13) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `password`, `no_telp`, `tanggal_lahir`, `alamat`, `foto`) VALUES
(1, 'indah', 'indah@gmail.com', '12345', 20, '0000-00-00', 'bateng', 'img/'),
(2, 'Cobain', 'coba@coba.com', '12345', 2147483647, '0000-00-00', 'Lalalalalaalalaaa', 'images/'),
(3, 'Coba', 'coba2@coba.com', '12345', 2147483647, '0000-00-00', 'Lalalaalaa', 'images/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`id_tanaman`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tanaman`
--
ALTER TABLE `tanaman`
  MODIFY `id_tanaman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
