-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2020 pada 17.31
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_wakil`
--

CREATE TABLE `calon_wakil` (
  `id` int(10) UNSIGNED NOT NULL,
  `paslon_nomor` int(11) NOT NULL,
  `nis_wakil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foto_paslon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `misi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slogan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `calon_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `calon_wakil`
--

INSERT INTO `calon_wakil` (`id`, `paslon_nomor`, `nis_wakil`, `foto_paslon`, `visi`, `misi`, `slogan`, `admin_id`, `created_at`, `updated_at`, `calon_id`) VALUES
(1, 1, '2102187134', '20200706121645PNG', 'rkthtkr', 'jopppppppppppppppppppppppppppppppppppppp', 'lyufyflllllllllllllllllulllllllllffffffffffffluuuuuf', 1, '2020-07-06 05:16:45', '2020-07-06 05:16:45', 1),
(2, 2, '2102187136', '20200706121725jpg', 'halhjjkkf', 'aw;uhh;hga', 'knbhjhufhjajjrjbhsg', 1, '2020-07-06 05:17:25', '2020-07-06 05:17:25', 2),
(3, 3, '2102187123', '20200707201013PNG', 'halhjjkkf', 'hjfbl', 'knbhjhufhjajjrjbhsg', 1, '2020-07-07 13:10:13', '2020-07-07 13:10:13', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(10) UNSIGNED NOT NULL,
  `kelas` enum('X','XI','XII') COLLATE utf8_unicode_ci NOT NULL,
  `cabang` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `kelas`, `cabang`, `jurusan`, `created_at`, `updated_at`) VALUES
(1, 'X', '1', 'RPL (Rekayasa Perangkat Lunak)', '2020-07-06 05:11:32', '2020-07-06 05:11:32'),
(2, 'X', '1', 'TKJ (Teknik Komputer Jaringan)', '2020-07-06 05:11:45', '2020-07-06 05:11:45'),
(3, 'XI', '1', 'Tata boga', '2020-07-06 07:32:33', '2020-07-06 07:32:33'),
(4, 'X', '2', 'Akuntansi', '2020-07-08 01:44:29', '2020-07-08 01:44:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketua`
--

CREATE TABLE `ketua` (
  `id` int(10) UNSIGNED NOT NULL,
  `nis_ketua` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `ketua`
--

INSERT INTO `ketua` (`id`, `nis_ketua`, `created_at`, `updated_at`) VALUES
(1, '2102187130', '2020-07-06 05:16:11', '2020-07-06 05:16:11'),
(2, '2102187137', '2020-07-06 05:17:01', '2020-07-06 05:17:01'),
(3, '2102187135', '2020-07-07 13:09:44', '2020-07-07 13:09:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_11_29_134014_create_admins_table', 1),
(2, '2019_11_29_134038_create_votes_table', 1),
(3, '2020_06_05_200342_create_jurusans_table', 1),
(4, '2020_06_13_202205_siswa', 1),
(5, '2020_06_15_153743_create_up_votes_table', 1),
(6, '2020_06_16_134111_create_calons_table', 1),
(7, '2020_06_21_125522_create_ketuas_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nrp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jurusan_id` int(10) UNSIGNED NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Pria','Wanita') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nrp`, `nama`, `foto`, `jurusan_id`, `tgl_lahir`, `jk`, `created_at`, `updated_at`) VALUES
('2102187123', 'ahmad', '20200706123031PNG', 1, '2020-12-31', 'Pria', '2020-07-06 05:30:31', '2020-07-06 05:30:31'),
('2102187130', 'samsul', '20200706121550PNG', 1, '2020-12-31', 'Pria', '2020-07-06 05:15:50', '2020-07-06 05:15:50'),
('2102187131', 'anjani', '20200707131257jpg', 3, '1996-02-03', 'Wanita', '2020-07-07 06:12:57', '2020-07-07 06:12:57'),
('2102187134', 'ferdi', '20200706121208PNG', 1, '2020-12-31', 'Pria', '2020-07-06 05:12:08', '2020-07-06 05:12:08'),
('2102187135', 'Admin close', '20200706121235PNG', 1, '2020-12-31', 'Wanita', '2020-07-06 05:12:35', '2020-07-06 05:12:35'),
('2102187136', 'fina', '20200706121314PNG', 2, '2019-01-31', 'Pria', '2020-07-06 05:13:14', '2020-07-06 05:13:14'),
('2102187137', 'andini', '20200706121454PNG', 2, '2020-12-31', 'Pria', '2020-07-06 05:14:54', '2020-07-06 05:14:54'),
('2102187138', 'fahri', '20200706121521PNG', 2, '2020-12-31', 'Pria', '2020-07-06 05:15:21', '2020-07-06 05:15:21'),
('2102187143', 'dendi', '20200709033713PNG', 1, '2020-12-31', 'Pria', '2020-07-08 20:37:13', '2020-07-08 20:37:13'),
('2102187144', 'aska', '20200707134821PNG', 1, '1998-01-01', 'Pria', '2020-07-07 06:48:21', '2020-07-07 06:48:21'),
('2102187176', 'dono', '20200706143302PNG', 3, '2020-12-31', 'Pria', '2020-07-06 07:33:02', '2020-07-06 07:33:02'),
('2102187198', 'ainur', '20200706143330PNG', 3, '2020-01-01', 'Pria', '2020-07-06 07:33:30', '2020-07-06 07:33:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `up_vote`
--

CREATE TABLE `up_vote` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `up_vote`
--

INSERT INTO `up_vote` (`id`, `status`, `admin_id`, `created_at`, `updated_at`) VALUES
(2, '1', 1, '2020-07-12 08:02:35', '2020-07-12 08:02:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'arifin', 'arifin@gmail.com', '$2y$10$qC4ExA/QAz6OBQsEQ3sS8.Q0/kS3cToYHr/lLrlIppz6ZOM7z7zJy', '2020-07-06 05:11:01', '2020-07-06 05:11:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vote`
--

CREATE TABLE `vote` (
  `id` int(10) UNSIGNED NOT NULL,
  `siswa_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `calon_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `vote`
--

INSERT INTO `vote` (`id`, `siswa_id`, `created_at`, `updated_at`, `calon_id`) VALUES
(1, '2102187130', NULL, NULL, 1),
(16, '2102187134', '2020-07-12 08:07:33', '2020-07-12 08:07:33', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calon_wakil`
--
ALTER TABLE `calon_wakil`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `calon_wakil_nis_wakil_unique` (`nis_wakil`),
  ADD KEY `calon_wakil_admin_id_foreign` (`admin_id`),
  ADD KEY `calon_wakil_calon_id_foreign` (`calon_id`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ketua`
--
ALTER TABLE `ketua`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ketua_nis_ketua_unique` (`nis_ketua`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nrp`),
  ADD KEY `siswa_jurusan_id_foreign` (`jurusan_id`);

--
-- Indeks untuk tabel `up_vote`
--
ALTER TABLE `up_vote`
  ADD PRIMARY KEY (`id`),
  ADD KEY `up_vote_admin_id_foreign` (`admin_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vote_siswa_id_unique` (`siswa_id`),
  ADD KEY `vote_calon_id_foreign` (`calon_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calon_wakil`
--
ALTER TABLE `calon_wakil`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `ketua`
--
ALTER TABLE `ketua`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `up_vote`
--
ALTER TABLE `up_vote`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `vote`
--
ALTER TABLE `vote`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `calon_wakil`
--
ALTER TABLE `calon_wakil`
  ADD CONSTRAINT `calon_wakil_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `calon_wakil_calon_id_foreign` FOREIGN KEY (`calon_id`) REFERENCES `ketua` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `calon_wakil_nis_wakil_foreign` FOREIGN KEY (`nis_wakil`) REFERENCES `siswa` (`nrp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ketua`
--
ALTER TABLE `ketua`
  ADD CONSTRAINT `ketua_nis_ketua_foreign` FOREIGN KEY (`nis_ketua`) REFERENCES `siswa` (`nrp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_jurusan_id_foreign` FOREIGN KEY (`jurusan_id`) REFERENCES `jurusan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `up_vote`
--
ALTER TABLE `up_vote`
  ADD CONSTRAINT `up_vote_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `vote_calon_id_foreign` FOREIGN KEY (`calon_id`) REFERENCES `calon_wakil` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vote_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`nrp`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
