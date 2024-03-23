-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 10 Jun 2023 pada 05.04
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
-- Database: `kelulusan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas`
--

CREATE TABLE `identitas` (
  `id` int NOT NULL,
  `nama_sekolah` varchar(128) NOT NULL,
  `nama_aplikasi` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `npsn` varchar(128) NOT NULL,
  `kepsek` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `website` varchar(128) NOT NULL,
  `telpon` varchar(50) NOT NULL,
  `logo` varchar(128) NOT NULL,
  `prov` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
--
-- Dumping data untuk tabel `identitas`
--

INSERT INTO `identitas` (`id`, `nama_sekolah`, `nama_aplikasi`, `npsn`, `kepsek`, `nip`, `alamat`, `email`, `website`, `telpon`, `logo`, `prov`) VALUES
(1, 'SMK Negeri 10 Gelumbang', 'Lulus Bareng', '38424789', 'Sandi Maulidika', '349229874988', 'Jalan Palembang-Prabumulih Kilometer 58 Gelumbang, Muara Enim', 'smknsugel@gmail.com', 'smknsagel.sch.id', '087801751653', '8e4294664661d6f46dcd83278a8210fb.png', 'sumsel.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int NOT NULL,
  `waktu` datetime NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `waktu`, `tahun_ajaran`) VALUES
(1, '2023-07-04 20:32:00', '2022/2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int NOT NULL,
  `noujian` varchar(200) NOT NULL,
  `nama_mapel` varchar(200) NOT NULL,
  `nilai_sekolah` varchar(200) NOT NULL,
  `nilai_un` varchar(200) NOT NULL,
  `nilai_akhir` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `noujian`, `nama_mapel`, `nilai_sekolah`, `nilai_un`, `nilai_akhir`) VALUES
(115, '201-210-015', 'Bahasa Indonesia', '76', '75', '43'),
(116, '201-210-015', 'Bahasa Inggris', '54', '54', '56'),
(117, '201-210-015', 'Matematika', '76', '75', '56'),
(118, '201-210-015', 'Biologi', '34', '54', '21'),
(119, '201-210-015', 'Kimia', '45', '', ''),
(120, '201-210-015', 'Fisika', '76', '', ''),
(121, '201-210-016', 'Bahasa Indonesia', '76', '75', '43'),
(122, '201-210-016', 'Bahasa Inggris', '54', '54', '56'),
(123, '201-210-016', 'Matematika', '54', '54', '56'),
(124, '201-210-016', 'Biologi', '54', '', ''),
(125, '201-210-016', 'Kimia', '54', '', ''),
(126, '201-210-016', 'Fisika', '54', '34', '42'),
(127, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_hubungi` int NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id` int NOT NULL,
  `kop1` varchar(128) NOT NULL,
  `kop2` varchar(128) NOT NULL,
  `kop3` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `nomor_sk` varchar(128) NOT NULL,
  `nomor_sk2` varchar(50) NOT NULL,
  `nomor_sk3` year NOT NULL,
  `tanggal_sk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id`, `kop1`, `kop2`, `kop3`, `alamat`, `nomor_sk`, `nomor_sk2`, `nomor_sk3`, `tanggal_sk`) VALUES
(1, 'PEMERINTAH PROVINSI SUMATERA SELATAN', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMA NEGERI 1 GELUMBANG', 'Gelumbang', '421.3', '161/SMAN1GLB/422', '2023', '31 Desember 2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int NOT NULL,
  `noujian` varchar(200) NOT NULL,
  `nisn` varchar(128) NOT NULL,
  `name` varchar(200) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `tgllhr` varchar(128) NOT NULL,
  `tmptlhr` varchar(100) NOT NULL,
  `sekolah` varchar(200) NOT NULL,
  `jurusan` varchar(200) NOT NULL,
  `ket` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `noujian`, `nisn`, `name`, `jk`, `tgllhr`, `tmptlhr`, `sekolah`, `jurusan`, `ket`) VALUES
(325, '201-210-015', '342422', 'Dika', 'Laki - laki', '2023-03-23', 'Jakarta', 'SMAN 1', 'IPS', 'lulus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `image` varchar(128) NOT NULL,
  `role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `email`, `nohp`, `image`, `role`) VALUES
(1, 'admin', '$2y$10$p5Xysf7hkouRIMbGG5CqteUrtjrkQ8pvOWwHRy3W61hgeBj23lt/e', 'Administrator', 'sandimaulidika@gmail.com', '085380948592', 'default.jpg', 1),
(10, 'sandi', '$2y$10$mDa61u97nuQA.nUEwj/QVef0RLN5y274yA5tdbU/ePHZm98l2QtEi', 'Administrator', 'sandimaulidika@gmail.com', '085380948592', 'default.jpg', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_hubungi`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no` (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_hubungi` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=326;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
