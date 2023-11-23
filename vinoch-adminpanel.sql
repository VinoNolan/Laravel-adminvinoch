-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2023 pada 03.54
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinoch-adminpanel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) UNSIGNED NOT NULL,
  `id_user` int(20) UNSIGNED NOT NULL,
  `pesanan` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasa`
--

CREATE TABLE `jasa` (
  `id_jasa` bigint(20) UNSIGNED NOT NULL,
  `juduljasa` varchar(255) NOT NULL,
  `hargajasa` decimal(10,2) NOT NULL,
  `deskripsijasa` text NOT NULL,
  `gambarjasa` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jasa`
--

INSERT INTO `jasa` (`id_jasa`, `juduljasa`, `hargajasa`, `deskripsijasa`, `gambarjasa`, `created_at`, `updated_at`) VALUES
(4, 'IT Consultant', 230000.00, 'Membantu Kamu yang ingin membuat website', '2023-11-061107810.jpg', '2023-11-05 20:56:50', '2023-11-05 20:56:50'),
(5, 'MarketerAPP', 230000.00, 'Membantu Kamu yang ingin membuat website', '2023-11-061107810.jpg', '2023-11-05 23:43:35', '2023-11-05 23:43:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2023_10_30_064103_create_produks_table', 3),
(12, '2014_10_12_000000_create_users_table', 4),
(13, '2014_10_12_100000_create_password_reset_tokens_table', 4),
(14, '2019_08_19_000000_create_failed_jobs_table', 4),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(16, '2023_10_30_063343_create_produk_table', 4),
(17, '2023_10_31_013839_create_jasa_table', 5),
(18, '2023_10_31_035553_create_pemesanan_table', 6),
(19, '2023_11_01_070531_create_userpembeli_table', 7),
(20, '2023_11_02_063847_create_passwordreset_table', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(20) UNSIGNED NOT NULL,
  `pesanan` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `totalharga` decimal(10,2) NOT NULL,
  `namapembeli` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `alamatlengkap` text NOT NULL,
  `tipepembayaran` varchar(255) NOT NULL,
  `catatan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_user`, `pesanan`, `quantity`, `totalharga`, `namapembeli`, `email`, `kabupaten`, `kecamatan`, `alamatlengkap`, `tipepembayaran`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 1, '', 0, 2000000.00, 'Yanto', 'yanto123@gmail.com', 'Boyolali', 'Sawit', 'Rt 03 Rw 04', 'Transfer bank BCA', 'Hubungi saya jam 1 siang ya', '2023-10-30 21:05:51', '2023-11-01 18:28:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `judulproduk` varchar(255) NOT NULL,
  `hargaproduk` decimal(10,2) NOT NULL,
  `deskripsiproduk` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id_produk`, `judulproduk`, `hargaproduk`, `deskripsiproduk`, `gambar`, `created_at`, `updated_at`) VALUES
(11, 'Susu UHT', 12000.00, 'Produk ini sangat sehat', '2023-11-021107810.jpg', '2023-11-01 18:26:42', '2023-11-01 18:26:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `userpembeli`
--

CREATE TABLE `userpembeli` (
  `id_user` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `asalkota` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `userpembeli`
--

INSERT INTO `userpembeli` (`id_user`, `name`, `email`, `password`, `asalkota`, `created_at`, `updated_at`) VALUES
(1, 'Roy', 'Roy21@gmail.com', '$2y$10$6xD0PUDlHUy9D9CnOnaEbenVz73FTmzG/2zzRNt6U54s1XNVkA24e', 'Semarang', '2023-11-01 00:21:01', '2023-11-02 02:07:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_admin`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Evan', 'avinnolis12@gmail.com', NULL, '$2y$10$8moZxTXyQBvJ096Y/TQAxuWVdUIDHjliudSEPNRrjRW0kRLU6rTJm', 'superadmin', NULL, '2023-10-30 01:33:58', '2023-11-02 02:09:50'),
(6, 'Rian', 'fakekunno2a@gmail.com', NULL, '$2y$10$SgbQ/lpHcV/Mv9oJN3uF0.PnEY0.o9rYhu27yf/GMM5nxBnsUKnLK', 'admin', NULL, '2023-11-01 20:33:55', '2023-11-01 20:34:41'),
(9, 'EngkongHD', 'avinnolis13@gmail.com', NULL, '$2y$10$AVuP3q3lKOGnyXF6UvpY.efHg/eUZfBXm7AbP97eDbbIGPzhO09zC', 'admin', NULL, '2023-11-01 20:51:16', '2023-11-01 20:51:16'),
(10, 'jojoid', 'lisasutantri79@gmail.com', NULL, '$2y$10$dHCK6Vzd3w7LYLJp6zMwgOsI2l3QvhhA4EbOUwcMfW.bPzLRQ6NPW', 'admin', NULL, '2023-11-02 01:26:14', '2023-11-02 01:31:04'),
(11, 'jojoid', 'meraldyfiko24@gmail.com', NULL, '$2y$10$NDC4mzOoY4obCDFKVqxdUOYpBrzY//NNAnFwhNDO.MsOSMR4ZdG5q', 'admin', NULL, '2023-11-02 01:29:46', '2023-11-02 01:29:46'),
(12, 'JOKO', 'susantojoko809@gmail.com', NULL, '$2y$10$nRH20NhAw8cbwHruM0kNXuEFyJg208EVOboqwTJOhAB5wkgQmGXvm', 'admin', NULL, '2023-11-02 01:34:50', '2023-11-02 01:34:50'),
(13, 'Hina', 'hina123@gmail.com', NULL, '$2y$10$rEI8ocHV5bTbL/o6dQErtuiUbwXODY8sNAFRCt.IIECr2pV6395/S', 'admin', NULL, '2023-11-02 02:37:58', '2023-11-02 02:37:58');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`id_jasa`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `userpembeli`
--
ALTER TABLE `userpembeli`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jasa`
--
ALTER TABLE `jasa`
  MODIFY `id_jasa` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id_produk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `userpembeli`
--
ALTER TABLE `userpembeli`
  MODIFY `id_user` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_admin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `userpembeli` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `userpembeli` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
