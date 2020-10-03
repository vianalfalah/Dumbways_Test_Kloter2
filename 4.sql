-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Okt 2020 pada 14.39
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(150) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `create_time` varchar(50) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `deskripsi`, `create_time`, `user_id`) VALUES
(1, 'Genshin Impact', 'genshinimpact.jpg', 'Game yang baru saja rilis buatan Developer Mihoyo dikatan mirip dengan game yang sudah lama terkenal yaitu Zelda BOTW dari Nintendo', '03-10-2020', 1),
(2, 'Honkai Impact 3', 'honkai.jpg', 'Game populer buatan developer Mihoyo, dikatakan memiliki grafik yang sangat memukau untuk platform mobile. Bergaya nuansa RPG dibalut grafik khas Anime dari Jepang....', '03-10-2020', 1),
(3, 'Kuota Belajar', 'kuota.jpg', 'Baru-baru ini kalangan Pendidik yakni Guru dan Dosen juga Kalangan Pelajar yakni Siswa dan Mahasiswa mendapatkan bantuan Kuota dari Pemerintah...', '03-10-2020', 2),
(4, 'Inject Kuota', 'inject.jpg', 'Baru-baru ini diketahui banyak orang yang menjadikan Kuota Belajar dari Pemerintah dijadikan kuota reguler dengan memanfaatkan bug menggunakan beberapa aplikasi injector....', '03-10-2020', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `role`) VALUES
(1, 'Vian ', 'vianalfalah248@gmail.com', 'Admin'),
(2, 'Alfalah', 'vianalfalah479@gmail.com', 'User');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
