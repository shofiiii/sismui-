-- phpMyAdmin SQL Dump
-- version 3.4.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 20. Desember 2020 jam 13:20
-- Versi Server: 5.5.15
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbtest`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbadmin`
--

CREATE TABLE IF NOT EXISTS `dbadmin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `dbadmin`
--

INSERT INTO `dbadmin` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin1', 'admin'),
(2, 'user', 'user1', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbuser`
--

CREATE TABLE IF NOT EXISTS `dbuser` (
  `id_user` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `dbuser`
--

INSERT INTO `dbuser` (`id_user`, `username`, `password`, `nama`, `jurusan`) VALUES
(1, 'shoof', '12345', 'shofi', 'jurusan'),
(2, 'shooo', '123', 'hamimi', 'jurusan'),
(3, 'shofi', '', 'shofi', 'jurusan'),
(4, 'shofi', '12', 'shofi', 'jurusan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kuisioner`
--

CREATE TABLE IF NOT EXISTS `t_kuisioner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(255) NOT NULL,
  `j1` varchar(255) NOT NULL,
  `j2` varchar(255) NOT NULL,
  `j3` varchar(255) NOT NULL,
  `j4` varchar(255) NOT NULL,
  `j5` varchar(255) NOT NULL,
  `j6` varchar(255) NOT NULL,
  `j7` varchar(255) NOT NULL,
  `j8` varchar(255) NOT NULL,
  `j9` varchar(255) NOT NULL,
  `j10` varchar(255) NOT NULL,
  `j11` varchar(255) NOT NULL,
  `j12` varchar(255) NOT NULL,
  `j13` varchar(255) NOT NULL,
  `j14` varchar(255) NOT NULL,
  `j15` varchar(255) NOT NULL,
  `j16` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `t_kuisioner`
--

INSERT INTO `t_kuisioner` (`id`, `Nama`, `j1`, `j2`, `j3`, `j4`, `j5`, `j6`, `j7`, `j8`, `j9`, `j10`, `j11`, `j12`, `j13`, `j14`, `j15`, `j16`) VALUES
(1, 'Juwita', 'S', 'S', 'SS', 'TS', 'KS', 'S', 'SS', 'S', 'KS', 'TS', 'S', 'SS', 'SS', 'KS', 'KS', 'S'),
(2, 'Aprilia', 'KS', 'S', 'S', 'KS', 'S', 'KS', 'S', 'S', 'KS', 'TS', 'TS', 'SS', 'S', 'TS', 'TS', 'S'),
(3, 'Dessy', 'S', 'S', 'SS', 'S', 'SS', 'SS', 'S', 'SS', 'SS', 'SS', 'KS', 'TS', 'SS', 'S', 'S', 'SS'),
(4, 'Indah', 'S', 'SS', 'SS', 'KS', 'S', 'TS', 'SS', 'SS', 'S', 'SS', 'S', 'KS', 'TS', 'SS', 'S', 'S'),
(5, 'Dicky', 'SS', 'S', 'S', 'S', 'S', 'KS', 'S', 'TS', 'SS', 'SS', 'S', 'SS', 'S', 'SS', 'S', 'S'),
(6, 'Lilin', 'TS', 'S', 'KS', 'SS', 'S', 'SS', 'S', 'S', 'TS', 'S', 'SS', 'KS', 'TS', 'SS', 'TS', 'SS'),
(7, 'Linda', 'S', 'SS', 'TS', 'KS', 'KS', 'TS', 'S', 'S', 'S', 'TS', 'S', 'SS', 'KS', 'TS', 'SS', 'S'),
(8, 'Nur', 'S', 'TS', 'S', 'S', 'SS', 'TS', 'SS', 'KS', 'SS', 'SS', 'S', 'S', 'TS', 'S', 'SS', 'S');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pertanyaan`
--

CREATE TABLE IF NOT EXISTS `t_pertanyaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pertanyaan` varchar(255) NOT NULL,
  `isi1` varchar(255) NOT NULL,
  `isi2` varchar(255) NOT NULL,
  `isi3` varchar(255) NOT NULL,
  `isi4` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `t_pertanyaan`
--

INSERT INTO `t_pertanyaan` (`id`, `pertanyaan`, `isi1`, `isi2`, `isi3`, `isi4`) VALUES
(1, 'Saya menyusun kata-kata dalam pikiran lebih dulu sebelum saya menulis, membaca atau mengatakannya', 'Tidak Setuju', 'Kurang Setuju', 'Setuju', 'Sangat Setuju'),
(2, 'Saya lebih mudah mengingat ketika saya mendengarkan radio atau rekaman percakapan', 'Tidak Setuju', 'Kurang Setuju', 'Setuju', 'Sangat Setuju'),
(3, 'Saya menyukai kegiatan eksperimen', 'Tidak Setuju', 'Kurang Setuju', 'Setuju', 'Sangat Setuju'),
(4, 'Saya lebih percaya pada penjelasan secara rasional dan ilmiah', 'Tidak Setuju', 'Kurang Setuju', 'Setuju', 'Sangat Setuju'),
(5, 'Ketika saya menutup mata, saya dapat membayangkan sesuatu hal dengan jelas', 'Tidak Setuju', 'Kurang setuju', 'Setuju', 'Sangat Setuju'),
(6, 'Saya sering menggunakan kamera atau video kamera untuk merekam dan mengabadikan moment di sekitar saya', 'Tidak Setuju', 'Kurang Setuju', 'Setuju', 'Sangat Setuju'),
(7, 'Saya sering mendapatkan ide-ide ketika saya sedang melakukan aktivitas fisik, seperti jalanjalan, jogging, berenang', 'Tidak Setuju', 'Kurang Setuju', 'Setuju', 'Sangat Setuju'),
(8, 'Saya menyukai kegiatan yang memicu adrenalin', 'Tidak Setuju', 'Kurang Setuju', 'Setuju', 'Sangat Setuju'),
(9, 'Saya senang mendengarkan musik lewat radio, CD, dll', 'Tidak Setuju', 'Kurang Setuju', 'Setuju', 'Sangat Setuju'),
(10, 'Hidup saya akan membosankan jika tidak ada musik', 'Tidak Setuju', 'Kurang Setuju', 'Setuju', 'Sangat Setuju'),
(11, 'Teman sering mencari saya untuk curhat atau minta saran dan masukan', 'Tidak Setuju', 'Kurang Setuju', 'Setuju', 'Sangat Setuju'),
(12, 'Saya sering diminta menjadi ketua kelompok', 'Tidak Setuju', 'Kurang Setuju', 'Setuju', 'Sangat Setuju'),
(13, 'Saya sering menghabiskan waktu untuk merenung, meditasi atau berpikir tentang pertanyaan penting dalam hidup', 'Tidak Setuju', 'Kurang Setuju', 'Setuju', 'Sangat Setuju'),
(14, 'Saya lebih suka menghabiskan waktu akhir pekan di rumah atau tempat-tempat lain yang jauh dari keramaian', 'Tidak Setuju', 'Kurang Setuju', 'Setuju', 'Sangat Setuju'),
(15, 'Saya lebih senang kegiatan di luar ruangan', 'Tidak Setuju', 'Kurang Setuju', 'Setuju', 'Sangat Setuju'),
(16, 'Saya senang mengamati lingkungan sekitar dan mengingat apa saja yang saya lihat', 'Tidak Setuju', 'Kurang Setuju', 'Setuju', 'Sangat Setuju');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
