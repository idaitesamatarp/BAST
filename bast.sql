-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2019 pada 13.06
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bast`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL,
  `send_to` int(5) NOT NULL,
  `send_by` int(3) NOT NULL,
  `message` tinytext NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`chat_id`, `send_to`, `send_by`, `message`, `time`) VALUES
(1, 2, 1, 'Tes', '2019-10-15 03:55:22'),
(2, 4, 1, 'Selamat Pagi ?', '2019-10-21 00:34:29'),
(3, 1, 4, 'Selamat pagi juga ', '2019-10-23 01:51:02'),
(4, 3, 4, 'Bagaimana progress project bayar internet ?', '2019-10-23 01:52:43'),
(5, 4, 3, 'Sekarang sedang dikoordinasikan dengan team pak ', '2019-10-23 02:34:35'),
(6, 1, 2, 'Apa', '2019-10-31 04:22:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama_kar` varchar(50) NOT NULL,
  `alamat` varchar(90) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nik`, `nama_kar`, `alamat`, `nohp`, `foto`) VALUES
(1, 'A001', 'Julian Shaden Mandani', 'Semarang Jawa Tengah', '085923287534', 'IMG_20160309_092244_a.jpg'),
(2, 'A002', 'Muhammad Setiadi Pratama', 'Magelang', '089672345621', 'setiadi.jpg'),
(3, 'A003', 'Bagus Slamet Oetomo', 'Jepara', '085673456123', 'slamet.jpg'),
(4, 'A004', 'Maulana Ridwan Priono', 'Kudus', '087875117601', 'lana.jpg'),
(5, 'A005', 'Dhiya Fauziza', 'Salatiga', '085216931234', 'dhiya.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pel` varchar(50) NOT NULL,
  `gender` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` varchar(90) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `perusahaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pel`, `gender`, `alamat`, `nohp`, `jabatan`, `perusahaan`) VALUES
(6, 'Dewi Anjani', 'Perempuan', 'Jln Yos Sudarso No 1 Jakarta', '081123456789', 'Chief Executive Officer', 'PT. SERIBU KARYA'),
(7, 'Aditya Putra', 'Laki-Laki', 'Jln Pramuka No 12 Pati', '087792162165', 'CTO', 'PT. PUTRA JASA'),
(8, 'Daffa Naufal Hanif', 'Laki-Laki', 'Jln Prof Soedarto No 59 Tembalang ', '085734318901', 'Kepala Dinas', 'DISHUB JATENG'),
(9, 'Dimas Arya Putra', 'Laki-Laki', 'Jln Tegalsari No 3 Bergas', '085673456123', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL,
  `nama_project` varchar(50) NOT NULL,
  `id_marketing` int(11) NOT NULL,
  `id_programmer` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `no_po` varchar(50) NOT NULL,
  `tanggal_po` date NOT NULL,
  `status` enum('New','Analisa','Desain','Implementasi','Testing','Selesai') NOT NULL,
  `presentase` varchar(3) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `sign_marketing` varchar(255) NOT NULL,
  `sign_pelanggan` varchar(255) NOT NULL,
  `tgl_bast` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`id_project`, `nama_project`, `id_marketing`, `id_programmer`, `id_pelanggan`, `no_po`, `tanggal_po`, `status`, `presentase`, `harga`, `sign_marketing`, `sign_pelanggan`, `tgl_bast`) VALUES
(1, 'Absenku', 2, 3, 6, 'XX', '2019-09-27', 'Analisa', '20', '1500000', '3c24600daab8262677fc435393bf0c3c', '2f2be4fc3e23f49f5c298802f924258c', '2019-11-04'),
(2, 'BAST Online', 4, 5, 7, 'XXI', '2019-09-28', 'Implementasi', '60', '5000000', '5d67fe1d96124fdfab3946313affdfe8', '74725913f276ce8b519e7cc367a72a0f', '0000-00-00'),
(3, 'Bayar Internet', 4, 3, 9, 'XXII', '2019-10-09', 'Selesai', '100', '2500000', '', '', '0000-00-00'),
(4, 'Internet Gratis', 2, 5, 8, 'XXIII', '2019-10-22', 'Testing', '80', '7500000', '6a564791ad78fd854c6c3cde151df1ca', '', '2019-11-07'),
(5, 'Lamp Controller', 4, 5, 8, 'XXIV', '2019-10-26', 'New', '0', '8000000', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `level` enum('admin','marketing','programmer','pelanggan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `id_karyawan`, `id_pelanggan`, `image`, `level`) VALUES
(1, 'julian03', '6a18116dc7e7b609684a4340b6ac2ea6', 1, 0, 'Screenshot_8.jpg', 'admin'),
(2, 'setiadi16', 'ee862c1f48517b8b9ef2ec9018464a21', 2, 0, 'setiadi.jpg', 'marketing'),
(3, 'bagus12', 'a89407b9014f6f6d9a85f2d5b6a2c118', 3, 0, 'slamet.jpg', 'programmer'),
(4, 'maulana10', 'ad060c9b2f5617a5c2ddda20253b1f23', 4, 0, 'lana.jpg', 'marketing'),
(5, 'dhiya11', 'e229961a2f38b1ba08bb6be4cb35138b', 5, 0, 'dhiya.jpg', 'programmer'),
(6, 'dewi12', 'fde0b737496c53bb85d07b31a02985a3', 0, 1, 'hasna.jpg', 'pelanggan'),
(7, 'aditya12', '8b019af0a1de935cc5e76d804967d51a', 0, 2, 'fauzi.jpg', 'pelanggan'),
(8, 'daffa03', '7b1e852330575c92c8d918377b30726a', 0, 3, 'anas.jpg', 'pelanggan'),
(9, 'dimas45', '51947e3cf64ee746b6f2c73d174d525a', 0, 4, 'yusuf.jpg', 'pelanggan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`),
  ADD KEY `sent_to` (`send_to`),
  ADD KEY `send_by` (`send_by`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
