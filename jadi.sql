-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Waktu pembuatan: 22 Mar 2025 pada 10.55
=======
-- Waktu pembuatan: 22 Mar 2025 pada 07.46
>>>>>>> 6b4d8e1ef37b6e0b704a8b097fbe9ced123b2c7c
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
<<<<<<< HEAD
-- Database: `jadi`
=======
-- Database: `joinproject`
>>>>>>> 6b4d8e1ef37b6e0b704a8b097fbe9ced123b2c7c
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `status`, `kategori`) VALUES
<<<<<<< HEAD
(23, 'Galeri', 'Pending', 'Website'),
(24, 'Buku Baru', 'Published', 'Website'),
(25, 'wwwwwwwwwwwwwww', 'Pending', 'Website'),
(26, 'Bensin Bekas', 'Pending', 'Website');
=======
(20, 'Buku Baru', 'Archived', 'Mobile');
>>>>>>> 6b4d8e1ef37b6e0b704a8b097fbe9ced123b2c7c

-- --------------------------------------------------------

--
-- Struktur dari tabel `todolist`
--

CREATE TABLE `todolist` (
  `id` int(11) NOT NULL,
  `nama_todo` varchar(255) NOT NULL,
  `nama_project` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

<<<<<<< HEAD
--
-- Dumping data untuk tabel `todolist`
--

INSERT INTO `todolist` (`id`, `nama_todo`, `nama_project`, `status`, `jumlah`) VALUES
(31, 'Baru', 'Galeri', 'Done', 4);

=======
>>>>>>> 6b4d8e1ef37b6e0b704a8b097fbe9ced123b2c7c
-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'a@gmail.com', '$2y$10$QRcllzdeaOV8plIG93eMzubt4Typ98haGcwZbfqmtsg/DIYKhMWLu'),
(2, 'user', 'u@gmail.com', '$2y$10$5qoUlaLVrqoiZL2qDCcMf.gC1/DQ8k5lfvtL43Y9EYNd4KKr7bD1i'),
(3, 'weeeaaa', 'ww@gmail.com', '$2y$10$JK9errV6.BB6GOgrOn58geCTD6UYAOuIZt/DURW4/FPBk2t3qq8f2'),
(4, 'Eka', 'e@gmail.com', '$2y$10$0U37Nv57CV3jyRy4yNji4eE/izITCIlx0uLYMSKgA0CN4/nl.l5M2'),
(5, 'Dika', 'dika@gmail.com', '$2y$10$cttRJ0rLp7ZQ3HzhWVl59OcH.z4LulP6BSAuWAAAGBeENHZA/DAiS'),
(6, 'Dafa', 'dafa@gmail.com', '$2y$10$VNI.VO7Kp57Gdy9tWRLQvuc3nvcEwFBLoROoBEhFlXdExucsctqu2'),
(7, 'Tono', 'tono@gmail.com', '$2y$10$cirKE9nullDpr1W9x.laOujG1OE45tU9zuXyOGvXF7S7ZRAHVTn.q'),
(8, 'sss', 'darrellgta@gmail.com', '$2y$10$6dhRObqtjp8XadWqcBn45O92Z1Q/D7JQZ7RCRWHJeBAS8l/vYIofy'),
(9, 'sera', 's@gmail.com', '$2y$10$KMFbXRa0ZrTJf1R60pMZ6OSrvC8B673GdIeWVQS.gkOmhBz5KuypC'),
<<<<<<< HEAD
(10, 'eko', 'eko@gmail.com', '$2y$10$UYFvZ2m55VxbWs6qZtWkGO.Zmq0t4iRogioWbx3QbwKIvCLYL/u1u'),
(11, 'unta', '1u@gmail.com', '$2y$10$.GxABUHPr1.F9I8fiBtm6OaFQGfxc3m4cTKovofIcSlD2sW6lzc32'),
(12, 'user22', 'user@example.com', '$2y$10$W37d8UIEjUvI2pk5LIJUk.sKAYGVP3cdJ/qkWH9BtH.St8svsJYTS');
=======
(10, 'eko', 'eko@gmail.com', '$2y$10$UYFvZ2m55VxbWs6qZtWkGO.Zmq0t4iRogioWbx3QbwKIvCLYL/u1u');
>>>>>>> 6b4d8e1ef37b6e0b704a8b097fbe9ced123b2c7c

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `todolist`
--
ALTER TABLE `todolist`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `projects`
--
ALTER TABLE `projects`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
>>>>>>> 6b4d8e1ef37b6e0b704a8b097fbe9ced123b2c7c

--
-- AUTO_INCREMENT untuk tabel `todolist`
--
ALTER TABLE `todolist`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
>>>>>>> 6b4d8e1ef37b6e0b704a8b097fbe9ced123b2c7c

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
>>>>>>> 6b4d8e1ef37b6e0b704a8b097fbe9ced123b2c7c
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
