-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2024 pada 17.58
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuti_pegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` char(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `no_telp` varchar(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `nik`, `no_telp`, `nama`, `password`, `role`) VALUES
('1', 'admin@gmail.com', 'XNadmin1', '085959180949', 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ket_cuti`
--

CREATE TABLE `ket_cuti` (
  `id` int(10) NOT NULL,
  `keterangan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ket_cuti`
--

INSERT INTO `ket_cuti` (`id`, `keterangan`) VALUES
(1, 'Cuti Sakit < 14'),
(2, 'Cuti Sakit > 14 '),
(3, 'Cuti Melahirkan'),
(4, 'Cuti Alasan Penting');

-- --------------------------------------------------------

--
-- Struktur dari tabel `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `nomor` varchar(15) NOT NULL,
  `otp` int(11) NOT NULL,
  `waktu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `otp`
--

INSERT INTO `otp` (`id`, `nomor`, `otp`, `waktu`) VALUES
(7, '6285774605830', 8301, 1704527735),
(52, '6285774605830', 7743, 1705058746),
(53, '6285774605830', 7400, 1705058825),
(54, '6285774605830', 7993, 1705058877),
(55, '6285774605830', 5925, 1705058964),
(56, '6289638195586', 5772, 1705063340),
(57, '6289638195586', 1795, 1705063418),
(58, '085774605830', 8321, 1717354389);

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonan_cuti`
--

CREATE TABLE `permohonan_cuti` (
  `id_cuti` int(10) NOT NULL,
  `kode_pegawai` char(20) NOT NULL,
  `nik` varchar(150) DEFAULT NULL,
  `nama` varchar(150) NOT NULL,
  `bagian` varchar(150) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `mulai_cuti` date NOT NULL,
  `akhir_cuti` date NOT NULL,
  `surat_dokter` varchar(255) NOT NULL,
  `surat_dokter14` varchar(255) NOT NULL,
  `surat_melahirkan` varchar(255) NOT NULL,
  `surat_alasanpenting` varchar(255) NOT NULL,
  `sisa_cuti` varchar(150) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `verifikasi` int(10) NOT NULL,
  `perihal` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `permohonan_cuti`
--

INSERT INTO `permohonan_cuti` (`id_cuti`, `kode_pegawai`, `nik`, `nama`, `bagian`, `tanggal_pengajuan`, `mulai_cuti`, `akhir_cuti`, `surat_dokter`, `surat_dokter14`, `surat_melahirkan`, `surat_alasanpenting`, `sisa_cuti`, `keterangan`, `verifikasi`, `perihal`, `status`) VALUES
(86, '', 'XN20223', 'Febrilianto', 'Casting', '2024-06-10', '2024-06-10', '2024-06-11', 'surat-dokterPGW-2024-00002-10-06-2024.pdf', '', '', '', '10', 'Cuti Sakit < 14', 1, 'Keperluan Keluarga', 0),
(87, 'PGW-2023-00001', 'XN19876', 'Reski Setiawan', 'Staff Keuangan', '2024-06-10', '2024-06-10', '2024-06-11', 'surat-dokterPGW-2024-00002-10-06-20241.pdf', '', '', '', '7', 'Cuti Sakit < 14', 2, 'Sakit Maag', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pimpinan`
--

CREATE TABLE `pimpinan` (
  `kode_pimpinan` char(20) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `jabatan` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(120) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pimpinan`
--

INSERT INTO `pimpinan` (`kode_pimpinan`, `nama`, `nik`, `jabatan`, `email`, `password`, `no_telp`, `role`) VALUES
('123', 'Jaka', 'XNadmin', 'Leader Casting', 'pimpinan@gmail.com', 'pimpinan', '082345432334', 2),
('321', 'Gunawan', 'XN00955', 'Leader Casting', 'gunawan@gmail.com', 'pimpinan1', '085745632254', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `kode_pegawai` char(20) NOT NULL,
  `nik` varchar(150) DEFAULT NULL,
  `nama` varchar(150) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `jenis_kel` char(10) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `status_pekerjaan` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(120) NOT NULL,
  `status` enum('Aktif','Belum') NOT NULL DEFAULT 'Belum',
  `sisa_cuti` varchar(150) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`kode_pegawai`, `nik`, `nama`, `bagian`, `jenis_kel`, `no_telp`, `alamat`, `status_pekerjaan`, `email`, `password`, `status`, `sisa_cuti`, `role`) VALUES
('', 'XN20223', 'Febrilianto', 'Casting', 'Laki-laki', '085774605830', 'Karawang', 'Kontrak', 'febriliantoms@gmail.com', '123456', 'Aktif', '10', 3),
('PGW-2023-00001', 'XN19876', 'Reski Setiawan', 'Staff Keuangan', 'Laki-Laki', '085959180949', 'Jakarta', 'Kartap', 'reski@gmail.com', 'febri123', 'Aktif', '7', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `ket_cuti`
--
ALTER TABLE `ket_cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `permohonan_cuti`
--
ALTER TABLE `permohonan_cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indeks untuk tabel `pimpinan`
--
ALTER TABLE `pimpinan`
  ADD PRIMARY KEY (`kode_pimpinan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kode_pegawai`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ket_cuti`
--
ALTER TABLE `ket_cuti`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `permohonan_cuti`
--
ALTER TABLE `permohonan_cuti`
  MODIFY `id_cuti` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
