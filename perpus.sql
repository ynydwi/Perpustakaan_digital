-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Mar 2024 pada 07.40
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `penerbit` varchar(255) DEFAULT NULL,
  `tahun_terbit` int(11) DEFAULT NULL,
  `stok` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `penulis`, `penerbit`, `tahun_terbit`, `stok`) VALUES
(1, 'Putri Salju', 'Snowhite', 'gramed', 2000, 4),
(2, 'Pangeran kodok', 'prince', 'gramed', 2005, 3),
(3, 'Keong hijau', 'Siputmadu', 'Falcon', 2005, 3),
(4, 'Cara memahami wanita', 'wonderwomen', 'Falcon', 2005, 2),
(5, 'Kancil yang kecil', 'rabbit', 'Gramed', 2000, 6),
(6, 'Antariksa', 'yenny', 'gramed', 2023, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_buku`
--

CREATE TABLE `kategori_buku` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori_buku`
--

INSERT INTO `kategori_buku` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Dongeng'),
(2, 'Cerita Rakyat'),
(3, 'Novel'),
(5, 'Buku anak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `katergoribuku_relasi`
--

CREATE TABLE `katergoribuku_relasi` (
  `id_kategoribuku` int(11) NOT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `katergoribuku_relasi`
--

INSERT INTO `katergoribuku_relasi` (`id_kategoribuku`, `id_buku`, `id_kategori`) VALUES
(1, 1, 1),
(2, 4, 3),
(3, 2, 1),
(5, 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `koleksi_pribadi`
--

CREATE TABLE `koleksi_pribadi` (
  `id_koleksi` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_buku` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `koleksi_pribadi`
--

INSERT INTO `koleksi_pribadi` (`id_koleksi`, `id_user`, `id_buku`) VALUES
(1, 5, 2),
(2, 3, 3),
(3, 4, 1),
(4, 2, 5),
(5, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `tgl_peminjaman` date DEFAULT NULL,
  `tgl_pengembalian` date DEFAULT NULL,
  `status_peminjaman` enum('Dipinjam','DiKembalikan') DEFAULT NULL,
  `Judul` varchar(255) DEFAULT NULL,
  `jumlah_bukuDipinjam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_user`, `id_buku`, `tgl_peminjaman`, `tgl_pengembalian`, `status_peminjaman`, `Judul`, `jumlah_bukuDipinjam`) VALUES
(11, 4, 2, '2024-01-23', '2024-01-26', 'DiKembalikan', 'Pangeran kodok', 3),
(12, 5, 2, '2024-01-23', '2024-01-26', 'DiKembalikan', 'Pangeran kodok', 4),
(13, 2, 5, '2024-01-17', '2024-01-23', 'DiKembalikan', 'Kancil yang kecil', 1),
(14, 5, 6, '2024-01-23', '2024-01-30', 'DiKembalikan', 'Antariksa', 1),
(15, 2, 1, '2024-01-24', '2024-01-29', 'DiKembalikan', 'Putri salju', 1),
(27, 4, 1, '2024-02-21', '2024-02-29', 'DiKembalikan', NULL, 1),
(28, 1, 1, '2024-02-21', '2024-02-29', 'DiKembalikan', NULL, 1),
(29, 1, 1, '2024-02-21', '2024-02-28', 'DiKembalikan', NULL, 1),
(30, 1, 3, '2024-02-21', '2024-03-08', 'DiKembalikan', NULL, 1),
(31, 3, 5, '2024-02-20', '2024-02-26', 'DiKembalikan', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `nama_petugas` varchar(35) DEFAULT NULL,
  `level` enum('admin','petugas') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(1, 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', 'petugas', 'petugas'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan_buku`
--

CREATE TABLE `ulasan_buku` (
  `id_ulasan` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `ulasan` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ulasan_buku`
--

INSERT INTO `ulasan_buku` (`id_ulasan`, `id_user`, `id_buku`, `ulasan`, `rating`) VALUES
(1, 5, 2, 'Buku nya Sangat Menarik', 5),
(2, 3, 5, 'Seru sekalii', 5),
(3, 4, 3, 'Sangat mudah dibaca', 4),
(4, 2, 1, 'Keren sekalii buat baperr', 4),
(5, 1, 2, 'Pangerannya sangat romantiss', 5),
(6, 2, 1, 'keren', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `namaLengkap` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `namaLengkap`, `alamat`) VALUES
(1, 'Yenny', '81dc9bdb52d04dc20036dbd8313ed055', 'yenny@gmail.com', 'Yenny Dwi Rahman', 'Metro'),
(2, 'Niya', '674f3c2c1a8a6f90461e8a66fb5550ba', 'niya@gmail.com', 'Niyaaa', 'Metro'),
(3, 'Nana', '674f3c2c1a8a6f90461e8a66fb5550ba', 'Nananina@gmail.com', 'Nanaini', 'Batanghari'),
(4, 'Ninaa', '21232f297a57a5a743894a0e4a801fc3', 'nina@gmail.com', 'Ninaani', 'Batanghari'),
(5, 'Linda', '6562c5c1f33db6e05a082a88cddab5ea', 'linda@gmail.com', 'Linda mana', 'Metro'),
(6, 'rainiya', '81dc9bdb52d04dc20036dbd8313ed055', 'rainiya@gmail.com', 'rainiya', 'metro'),
(9, 'syafana', '9cdfdc6fc77ab35d2072cc55e60ee629', 'syaf@gmail.com', 'syafna marwa', 'metro');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vdetailbuku`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vdetailbuku` (
`judul` varchar(255)
,`penerbit` varchar(255)
,`tahun_terbit` int(11)
,`tgl_peminjaman` date
,`status_peminjaman` enum('Dipinjam','DiKembalikan')
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vdetailkoleksi`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vdetailkoleksi` (
`id_user` int(11)
,`judul` varchar(255)
,`penulis` varchar(255)
,`tahun_terbit` int(11)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `vdetailbuku`
--
DROP TABLE IF EXISTS `vdetailbuku`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vdetailbuku`  AS SELECT `b`.`judul` AS `judul`, `b`.`penerbit` AS `penerbit`, `b`.`tahun_terbit` AS `tahun_terbit`, `p`.`tgl_peminjaman` AS `tgl_peminjaman`, `p`.`status_peminjaman` AS `status_peminjaman` FROM (`buku` `b` join `peminjaman` `p`) WHERE `b`.`id_buku` = `p`.`id_buku``id_buku`  ;

-- --------------------------------------------------------

--
-- Struktur untuk view `vdetailkoleksi`
--
DROP TABLE IF EXISTS `vdetailkoleksi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vdetailkoleksi`  AS SELECT `k`.`id_user` AS `id_user`, `b`.`judul` AS `judul`, `b`.`penulis` AS `penulis`, `b`.`tahun_terbit` AS `tahun_terbit` FROM (`koleksi_pribadi` `k` join `buku` `b`) WHERE `k`.`id_buku` = `b`.`id_buku``id_buku`  ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indeks untuk tabel `kategori_buku`
--
ALTER TABLE `kategori_buku`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `katergoribuku_relasi`
--
ALTER TABLE `katergoribuku_relasi`
  ADD PRIMARY KEY (`id_kategoribuku`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `koleksi_pribadi`
--
ALTER TABLE `koleksi_pribadi`
  ADD PRIMARY KEY (`id_koleksi`),
  ADD KEY `idx_user` (`id_user`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `idx_user` (`id_user`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indeks untuk tabel `ulasan_buku`
--
ALTER TABLE `ulasan_buku`
  ADD PRIMARY KEY (`id_ulasan`),
  ADD KEY `id_user` (`id_user`,`id_buku`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori_buku`
--
ALTER TABLE `kategori_buku`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `katergoribuku_relasi`
--
ALTER TABLE `katergoribuku_relasi`
  MODIFY `id_kategoribuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `koleksi_pribadi`
--
ALTER TABLE `koleksi_pribadi`
  MODIFY `id_koleksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ulasan_buku`
--
ALTER TABLE `ulasan_buku`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `katergoribuku_relasi`
--
ALTER TABLE `katergoribuku_relasi`
  ADD CONSTRAINT `katergoribuku_relasi_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `katergoribuku_relasi_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_buku` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `koleksi_pribadi`
--
ALTER TABLE `koleksi_pribadi`
  ADD CONSTRAINT `koleksi_pribadi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `koleksi_pribadi_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ulasan_buku`
--
ALTER TABLE `ulasan_buku`
  ADD CONSTRAINT `ulasan_buku_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ulasan_buku_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
