-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2021 pada 02.29
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sikp_rpl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `email`, `password`, `status`) VALUES
(1, 'Argo Wibowo', 'argo123@gmail.com', '1234', 1),
(2, 'Andhika Galuh Prabawati', 'andhika12@gmail.com', '123456', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_ujian`
--

CREATE TABLE `jadwal_ujian` (
  `tgl_ujian` date NOT NULL,
  `ruang` varchar(20) NOT NULL,
  `nim` int(8) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `dospem` varchar(100) NOT NULL,
  `penguji` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kp`
--

CREATE TABLE `kp` (
  `id` int(11) NOT NULL,
  `nim` int(8) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tools` varchar(100) NOT NULL,
  `spesifikasi` varchar(100) NOT NULL,
  `lembaga` varchar(100) NOT NULL,
  `pimpinan` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `dospem` varchar(100) DEFAULT NULL,
  `penguji` varchar(100) DEFAULT NULL,
  `ruang` varchar(20) DEFAULT NULL,
  `tgl_ujian` date DEFAULT NULL,
  `tgl_batas` date DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `status_ujian` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kp`
--

INSERT INTO `kp` (`id`, `nim`, `semester`, `tahun`, `judul`, `tools`, `spesifikasi`, `lembaga`, `pimpinan`, `no_telp`, `alamat`, `fax`, `status`, `dospem`, `penguji`, `ruang`, `tgl_ujian`, `tgl_batas`, `tgl_mulai`, `status_ujian`) VALUES
(11, 72180001, 'Gasal', '2021', 'ssafd', 'adf', 'dsfd', 'dsda', 'dds', '431', 'fscs', '321', 'Diterima', 'Andhika Galuh', 'Budi Sutedjo', 'D.2.1', '2021-06-24', '2022-06-29', '2022-06-22', 'Diterima'),
(12, 72180001, 'Gasal', '2021', 'sadsf', 'gsg', 'gd', 'sf', 'fsd', '534', 'fds', '342', 'Belum diverifikasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prakp`
--

CREATE TABLE `prakp` (
  `id` int(11) NOT NULL,
  `nim` int(8) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tools` varchar(100) NOT NULL,
  `spesifikasi` varchar(100) NOT NULL,
  `lembaga` varchar(100) NOT NULL,
  `pimpinan` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prakp`
--

INSERT INTO `prakp` (`id`, `nim`, `semester`, `tahun`, `judul`, `tools`, `spesifikasi`, `lembaga`, `pimpinan`, `no_telp`, `alamat`, `fax`, `status`) VALUES
(13, 72180001, 'Gasal', '2021', 'dssd', 'dad', 'dfas', 'ss', 'fsd', '442', 'gsd', '423', 'Diterima'),
(14, 72180001, 'Gasal', '2021', 'vsgbd', 'vsfsd', 'fsgf', 'sfd', 'fsf', '434', 'gesf', '4425', 'Belum diverifikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratketerangan`
--

CREATE TABLE `suratketerangan` (
  `id` int(11) NOT NULL,
  `nim` int(8) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `lembaga` varchar(100) NOT NULL,
  `pimpinan` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suratketerangan`
--

INSERT INTO `suratketerangan` (`id`, `nim`, `semester`, `tahun`, `lembaga`, `pimpinan`, `no_telp`, `alamat`, `fax`, `status`) VALUES
(18, 72180001, 'Gasal', '2021', 'fdds', 'dd', '323', 'fss', '331', 'Diterima'),
(19, 72180001, 'Gasal', '2021', 'dasd', 'dafssd', '2234', 'fsfv', '244', 'Belum diverifikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Diory', 'mahasiswa', 'diory.rotua@si.ukdw.ac.id', NULL, '$2y$10$K9/kBuC87vCW4vwQ.stboOnSFMB.1FJdLwPg1jvspLxnP4CbwNYsS', 'ZUCHgp8bckAD24tt0WmzrDmsKhefA2Na18GVULPIYrLOEU1HyhiEMOTNptt9', '2021-05-31 15:26:32', '2021-05-31 15:32:30'),
(2, 'Diory Panjaitan', 'koor', 'diorypanjaitan1122@gmail.com', NULL, '$2y$10$SEJAEy5f0X0Cvsyb2lUHCOLGperP/uHxEhi6qSBpjgpg0ZZ4zPnFO', 'tYz0b8CUtGkI173T2IbY62L3vJaPJDshG5gTKsHu8jFPXdncx3RfQAmd7gNv', '2021-06-01 15:08:59', '2021-06-01 15:08:59'),
(3, 'Daniel', 'dosen', 'daniel123@gmail.com', NULL, '$2y$10$Ho.QopW1/dPZvxJJvSdHse3VQ7kxk/EiOxAIjH5oavAXESFIoZfTi', 'YqF2k9ujQQO0GPilTtBbbFflliSO8PaowYTza82XrcinoitI3bvkhyDHTH6p', '2021-06-01 15:22:11', '2021-06-01 15:22:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kp`
--
ALTER TABLE `kp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prakp`
--
ALTER TABLE `prakp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suratketerangan`
--
ALTER TABLE `suratketerangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kp`
--
ALTER TABLE `kp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prakp`
--
ALTER TABLE `prakp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `suratketerangan`
--
ALTER TABLE `suratketerangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
