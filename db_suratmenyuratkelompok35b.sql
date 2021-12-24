-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Des 2021 pada 14.22
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_suratmenyuratkelompok35b`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `disposisi`
--

CREATE TABLE `disposisi` (
  `id_disposisi` int(11) NOT NULL,
  `agenda_surat_masuk` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `batas_waktu` date NOT NULL,
  `sifat_surat` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `disposisi`
--

INSERT INTO `disposisi` (`id_disposisi`, `agenda_surat_masuk`, `tujuan`, `isi`, `batas_waktu`, `sifat_surat`, `catatan`) VALUES
(1, '1', 'Kepala Tata Usaha', 'Pegawai Sekolah mengikuti upacara di kantor Camat Pekanbaru dan Pengumuman Peliburan Siswa dan Siswi', '2021-12-10', 'Segera', 'Dimohonkan Dikerjakan Segera');

-- --------------------------------------------------------

--
-- Struktur dari tabel `legalisir`
--

CREATE TABLE `legalisir` (
  `no_agenda` int(11) NOT NULL,
  `tanggal_legalisir` date NOT NULL,
  `nomor_legalisir` varchar(255) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `angkatan_legalisir` varchar(255) NOT NULL,
  `file_surat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `legalisir`
--

INSERT INTO `legalisir` (`no_agenda`, `tanggal_legalisir`, `nomor_legalisir`, `nama_siswa`, `angkatan_legalisir`, `file_surat`) VALUES
(3, '2021-12-16', 'MTS/10048308120/N/2022', 'Toni Herman', '2019', 'http://localhost/suratmenyuratkelompok35b/uploads/files/hoafl75pim_kryb.png'),
(4, '2021-12-15', 'MTS/10048308121/J/2022', 'Tomo Harmin', '2019', 'http://localhost/suratmenyuratkelompok35b/uploads/files/3zhq9gsc4bm58ev.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_tlp` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `login_session_key` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2022-03-09 00:00:00',
  `password_reset_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama_lengkap`, `username`, `password`, `level`, `alamat`, `email`, `no_tlp`, `photo`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`) VALUES
(1, 'Fajar Febriyadi', 'fajar', '$2y$10$zXpEDzwP3UTN5fpleMiDc.rgp7t7u4xYH0SWcqr13JF.lvFqq6Sci', 'staf', 'Jl Soebrantas', 'fajarversidua@gmail.com', '081378661599', 'http://localhost/suratmenyuratkelompok35b/uploads/files/tihbp_ke0oy2dqa.png', NULL, NULL, '2022-03-09 00:00:00', NULL),
(2, 'Brian Roman', 'brian', '$2y$10$T1E1TPwRKFpLBK51aVDbF.5/wGeo/mz24Lm9Dp8DOkb24dRI28gaK', 'kepsek', 'Jl Soebrantas', 'fajarversi3@gmail.com', '081378661598', 'http://localhost/suratmenyuratkelompok35b/uploads/files/64t2x8opv75as_b.png', NULL, NULL, '2022-03-09 00:00:00', NULL),
(3, 'Hanif Asmoro', 'hanif', '$2y$10$iDuz8kclvT6gf/TF6NnkMeDukACWHcjYMFBusjXHS5edxJObd.Kgi', 'kepala', 'Jl Soebrantas', 'fajarversi0@gmail.com', '081378661597', 'http://localhost/suratmenyuratkelompok35b/uploads/files/7xchrb4_16ng2fa.png', NULL, NULL, '2022-03-09 00:00:00', NULL),
(4, 'Pemohon', 'user', '$2y$10$6bNa.J8lj9UYEXXzAbAoye2AMoiqX09iRNexCcrW4ateDwiroJS4S', 'pemohon', 'Jl Sekolah', 'user@test.com', '081378661596', 'http://localhost/suratmenyuratkelompok35b/uploads/files/9w1dfk0sn5qrleu.png', NULL, NULL, '2022-03-09 00:00:00', NULL),
(5, 'Roman Tegar', 'roman', '$2y$10$ohQ83Q1oaDFQH3f8np9m/exlX8XRWezTqoUsbAoVqa0YhJPYCmjR6', 'resepsionis', 'JL Soebrantas', 'fajarversi4@gmail.com', '081378661595', 'http://localhost/suratmenyuratkelompok35b/uploads/files/vsi1tp4mf9q3guw.png', NULL, NULL, '2022-03-09 00:00:00', NULL),
(6, 'Adam Santoso', 'adam', '$2y$10$EXmZ80A30mDenitryjvAveKb1bTWP3FLin8JAfsylMlNEFg/HVhS6', 'staf', 'Jl Soebrantas', 'mugiwaran948@gmail.com', '081378661599', 'http://localhost/suratmenyuratkelompok35b/uploads/files/0uj2e3rhkwoqxg9.png', NULL, NULL, '2022-03-09 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratkeluar`
--

CREATE TABLE `suratkeluar` (
  `no_agenda` int(11) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tujuan_surat` varchar(255) NOT NULL,
  `nomor_surat` varchar(255) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `file_surat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suratkeluar`
--

INSERT INTO `suratkeluar` (`no_agenda`, `tanggal_surat`, `tujuan_surat`, `nomor_surat`, `perihal`, `file_surat`) VALUES
(2, '2021-12-14', 'Pegawai', 'SA10012021/DF', 'Pengajuan Cuti', 'http://localhost/suratmenyuratkelompok35b/uploads/files/wczis3n_gl57pbh.gif'),
(3, '2021-12-15', 'Pegawai', 'SA10022021/DF', 'Pengunduran Diri', 'http://localhost/suratmenyuratkelompok35b/uploads/files/nk3udfo8ljgx5r9.gif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratmasuk`
--

CREATE TABLE `suratmasuk` (
  `no_agenda` int(11) NOT NULL,
  `nomor_surat` varchar(255) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_terima` datetime NOT NULL,
  `asal_surat` varchar(255) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `file_surat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suratmasuk`
--

INSERT INTO `suratmasuk` (`no_agenda`, `nomor_surat`, `tanggal_surat`, `tanggal_terima`, `asal_surat`, `perihal`, `file_surat`) VALUES
(1, 'DA10012021/SO', '2021-12-08', '2021-12-09 12:00:00', 'Dinas Pendidikan Riau', 'Upacara Hari Korpri', 'http://localhost/suratmenyuratkelompok35b/uploads/files/nfoky_i673a2u4m.gif'),
(2, 'DA10022021/SO', '2021-12-09', '2021-12-10 12:00:00', 'Dinas Pendidikan Riau', 'UASBN', 'http://localhost/suratmenyuratkelompok35b/uploads/files/2js87ue45aqdbyo.gif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id_disposisi`);

--
-- Indeks untuk tabel `legalisir`
--
ALTER TABLE `legalisir`
  ADD PRIMARY KEY (`no_agenda`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suratkeluar`
--
ALTER TABLE `suratkeluar`
  ADD PRIMARY KEY (`no_agenda`);

--
-- Indeks untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  ADD PRIMARY KEY (`no_agenda`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `id_disposisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `legalisir`
--
ALTER TABLE `legalisir`
  MODIFY `no_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `suratkeluar`
--
ALTER TABLE `suratkeluar`
  MODIFY `no_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  MODIFY `no_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
