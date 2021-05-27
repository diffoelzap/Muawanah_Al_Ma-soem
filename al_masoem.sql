-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2021 pada 00.57
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `al_masoem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'abraham', '123456', 'Abraham Colim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `id_brand` int(11) NOT NULL,
  `nama_brand` varchar(255) DEFAULT NULL,
  `kategori_brand` int(1) DEFAULT NULL,
  `deskripsi_brand` text,
  `foto_brand` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_brand`
--

INSERT INTO `tbl_brand` (`id_brand`, `nama_brand`, `kategori_brand`, `deskripsi_brand`, `foto_brand`) VALUES
(1, 'App 1', 1, 'App', 'produk1.jpg'),
(2, 'App 2', 1, 'App', 'produk2.jpg'),
(3, 'Card 2', 1, 'Card', 'produk3.jpg'),
(4, 'App 3', 1, 'App', 'produk4.jpg'),
(5, 'Card 1', 1, 'Card', 'produk11.jpg'),
(6, 'Card 3', 2, 'Card', 'produk6.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_cuti`
--

CREATE TABLE `tbl_cuti` (
  `id_cuti` int(11) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `noreg` varchar(5) DEFAULT NULL,
  `jenis_cuti` varchar(50) DEFAULT NULL,
  `tanggal_awal` date DEFAULT NULL,
  `tanggal_akhir` date DEFAULT NULL,
  `lama_cuti` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_cuti`
--

INSERT INTO `tbl_cuti` (`id_cuti`, `nama_lengkap`, `noreg`, `jenis_cuti`, `tanggal_awal`, `tanggal_akhir`, `lama_cuti`, `status`, `keterangan`) VALUES
(5, 'Diffo Elza', '4321', 'Melahirkan', '2021-04-27', '2021-05-31', 34, 1, 'Aku sudah Tidak Kuat'),
(6, 'Diffo Elza', '4321', 'Menikah', '2021-04-30', '2021-05-20', 20, 1, 'Jika Upload bukti pembayaran tidak valid'),
(8, 'Ganteng', '4321', 'Melahirkan', '2021-05-12', '2021-10-28', 169, 1, 'Teuing ah lieur'),
(9, 'Hibban', '4567', 'Menikah', '2021-05-19', '2021-05-22', 3, 1, 'Bingung'),
(10, 'Hibban', '4567', 'Melahirkan', '2021-04-30', '2021-05-01', 1, 2, 'Bingung'),
(11, 'Hibban', '4567', 'Melahirkan', '2021-04-28', '2021-04-29', 1, 1, 'Jika Upload bukti pembayaran tidak valid'),
(12, 'Hibban', '4567', 'Menikah dan cuti tahunan', '2021-04-28', '2021-05-20', 22, 1, 'Jika Upload bukti pembayaran tidak valid'),
(13, 'Hibban', '4567', 'Menikah', '2021-04-29', '2021-05-12', 13, 2, 'Jika Upload bukti pembayaran tidak valid'),
(15, 'Wisnu', '4984', 'Menikah', '2021-05-06', '2021-05-07', 1, 1, 'Bingung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_job_des`
--

CREATE TABLE `tbl_job_des` (
  `id_job_des` int(11) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `noreg` varchar(5) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_job_des`
--

INSERT INTO `tbl_job_des` (`id_job_des`, `nama_lengkap`, `noreg`, `tanggal`, `jabatan`, `keterangan`) VALUES
(1, 'Wisnu', '4984', '2021-05-06', 'okwowkowkrowkowrw', 'wewew'),
(2, 'Diffo Elza', '4321', '2021-05-20', 'Manager', 'sadasdsad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `noreg` varchar(5) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `nama_panggilan` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(30) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `suku_bangsa` varchar(16) DEFAULT NULL,
  `status_perkawinan` varchar(30) DEFAULT NULL,
  `status_karyawan` varchar(30) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `direktorat` varchar(16) DEFAULT NULL,
  `divisi` varchar(16) DEFAULT NULL,
  `unit` varchar(16) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `golongan` varchar(16) DEFAULT NULL,
  `rumah` text,
  `tinggal` text,
  `foto_profil` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id_karyawan`, `username`, `password`, `nik`, `noreg`, `nama_lengkap`, `nama_panggilan`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `suku_bangsa`, `status_perkawinan`, `status_karyawan`, `tanggal_masuk`, `lokasi`, `direktorat`, `divisi`, `unit`, `jabatan`, `golongan`, `rumah`, `tinggal`, `foto_profil`) VALUES
(10, 'diffoelzap', '123456', '3277030212980005', '4321', 'Diffo Elza Pratama', 'Diffo', 'Cimahi', '1998-12-02', 'Laki - Laki', 'Islam', 'WNI', 'Belum Menikah', 'Sementara', '2021-04-26', 'Pt Al-Masoem', 'AM3', 'AM3', '', 'Sekretaris', '1.4', 'JL KH USMAN DHOMIRI NO:01', 'JL KH USMAN DHOMIRI NO:01', 'DiffoElzaPratama_6706174097_D3RPLA.jpg'),
(11, 'muhammad', '123456', '3277030212980006', '4325', 'Muhammad', 'Lutfi', 'Bandung', '2000-08-30', 'Laki - Laki', 'Kristen', 'WNI', 'Menikah', 'Tetap', '2021-04-26', 'Pt Al-Masoem', 'AM3', 'AM3', '', 'CEO AQUA', '1.5', 'JL. BOJONGSOANG', 'JL TAMAN SARI', 'test1.jpg'),
(12, 'hibbanm', '123456', '3277030212980045', '4567', 'Hibban', 'hihi', 'Ranca Ekek', '2021-04-27', 'Laki - Laki', 'Kristen', 'WNI', 'Belum Menikah', 'Tetap', '2021-04-26', 'Pt Al-Masoem', 'AM3', 'AM3', '', 'Manager', '1.4', 'JL KH USMAN DHOMIRI NO:01', 'JL KH USMAN DHOMIRI NO:01', 'Moon.jpg'),
(13, 'zahnil', '123456', '327703021298075', '4323', 'Zahnil', 'Buyung', 'Padang', '1998-12-02', 'Laki - Laki', 'Islam', 'WNI', 'Menikah', 'Sementara', '2021-04-26', 'Pt Al-Masoem', 'AM3', 'AM3', '', 'Manager', '1.4', 'JL KH USMAN DHOMIRI NO:01', 'JL KH USMAN DHOMIRI NO:01', 'logo_jadi1.png'),
(14, 'wisnutama', '123456', '3210392103213', '4984', 'Wisnu', 'Tama', 'Bandung', '2021-05-14', 'Laki - Laki', 'Islam', 'WNI', 'Menikah', 'Sementara', '2021-05-13', 'asdsa', 'sadsa', 'sadsad', 'sadasd', 'sadsad', 'sadsad', 'JL.CISANGKAN', 'JL.CISANGKAN', 'Moon1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `noreg` varchar(5) DEFAULT NULL,
  `tanggal_peminjaman` date DEFAULT NULL,
  `jam_peminjaman` time DEFAULT NULL,
  `jenis_mobil` varchar(50) DEFAULT NULL,
  `jangka_waktu_pemakaian` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `pengemudi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_peminjaman`
--

INSERT INTO `tbl_peminjaman` (`id_peminjaman`, `nama_lengkap`, `noreg`, `tanggal_peminjaman`, `jam_peminjaman`, `jenis_mobil`, `jangka_waktu_pemakaian`, `status`, `keterangan`, `pengemudi`) VALUES
(2, 'Diffo Elza', '4321', '2021-04-28', '05:20:25', 'Inova', '06.00 - 18.00', 1, 'valid', 'Jupena Solihin'),
(3, 'Hibban', '4567', '2021-04-29', '13:05:03', 'Inova', '24 jam', 2, 'Bingung', 'Pemohon'),
(4, 'Hibban', '4567', '2021-05-19', '13:05:30', 'Inova', '06.00 - 18.00', 1, 'Bingung', 'Pemohon');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_reseller`
--

CREATE TABLE `tbl_reseller` (
  `id_reseller` int(11) NOT NULL,
  `nama_reseller` varchar(255) DEFAULT NULL,
  `email_reseller` varchar(255) DEFAULT NULL,
  `telepon_reseller` varchar(12) DEFAULT NULL,
  `alamat_reseller` text,
  `pesan_reseller` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_reseller`
--

INSERT INTO `tbl_reseller` (`id_reseller`, `nama_reseller`, `email_reseller`, `telepon_reseller`, `alamat_reseller`, `pesan_reseller`) VALUES
(1, 'Diffo Elza', 'diffoelza@gmail.com', '081292838383', 'JL KH USMAN DHOMIRI NO:01', 'sadsad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_saran`
--

CREATE TABLE `tbl_saran` (
  `id_saran` int(11) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `noreg` varchar(5) DEFAULT NULL,
  `saran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_saran`
--

INSERT INTO `tbl_saran` (`id_saran`, `nama_lengkap`, `noreg`, `saran`) VALUES
(4, 'Ganteng', '4321', 'sadsadsadasdsadsa'),
(5, 'Ganteng', '4321', 'asdsadsad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_slide`
--

CREATE TABLE `tbl_slide` (
  `id_slide` int(11) NOT NULL,
  `foto_slide` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_slide`
--

INSERT INTO `tbl_slide` (`id_slide`, `foto_slide`) VALUES
(1, 'home3.jpg'),
(2, '11.jpg'),
(3, 'kantor1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tugas_harian`
--

CREATE TABLE `tbl_tugas_harian` (
  `id_tugas_harian` int(11) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `noreg` varchar(5) DEFAULT NULL,
  `tanggal_harian` date DEFAULT NULL,
  `jam_harian` time DEFAULT NULL,
  `kategori_tugas` varchar(30) DEFAULT NULL,
  `uraian_kegiatan` varchar(255) DEFAULT NULL,
  `waktu_selesai` time DEFAULT NULL,
  `tempat_harian` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tugas_harian`
--

INSERT INTO `tbl_tugas_harian` (`id_tugas_harian`, `nama_lengkap`, `noreg`, `tanggal_harian`, `jam_harian`, `kategori_tugas`, `uraian_kegiatan`, `waktu_selesai`, `tempat_harian`) VALUES
(43, 'Muhammad', '4325', '2021-04-26', '05:25:35', 'Tugas Pokok', 'gk tau mw ngapain', '02:10:30', 'Bandung'),
(46, 'Diffo Elza', '4321', '2021-04-26', '10:19:26', 'Tugas Pokok', 'gk tau mw ngapain', '14:00:00', 'Bandung'),
(47, 'Diffo Elza', '4321', '2021-04-26', '11:23:24', 'Tugas Pokok', 'gk tau mw ngapain', '05:25:10', 'Cimahi'),
(48, 'Diffo Elza', '4321', '2021-04-26', '12:42:58', 'Lain - Lain', 'asdsadasd', '00:30:00', 'Padang'),
(49, 'Diffo Elza', '4321', '2021-04-26', '12:43:10', 'Tugas Pokok', 'gk tau mw ngapain', '05:10:00', 'Bandung'),
(50, 'Diffo Elza', '4321', '2021-04-26', '12:43:55', 'Tugas Tambahan', 'lupa ngapain aja', '05:30:00', 'Cimahi'),
(51, 'Diffo Elza', '4321', '2021-04-26', '12:44:17', 'Tugas Tambahan', 'gk tau mw ngapain', '09:57:57', 'Bandung'),
(52, 'Diffo Elza', '4321', '2021-04-26', '12:44:33', 'Tugas Tambahan', 'gk tau mw ngapain', '06:30:35', 'Cimahi'),
(53, 'Diffo Elza', '4321', '2021-04-26', '12:44:45', 'Lain - Lain', 'gk tau mw ngapain', '06:30:35', 'Bandung'),
(54, 'Diffo Elza', '4321', '2021-04-26', '12:45:12', 'Tugas Pokok', 'adasdsadsadsadasd', '02:00:00', 'Padang'),
(55, 'Diffo Elza', '4321', '2021-04-26', '12:45:33', 'Tugas Pokok', 'ushadahdusahd', '05:10:00', 'Cimahi'),
(56, 'Diffo Elza', '4321', '2021-04-26', '12:45:49', 'Tugas Tambahan', 'gk tau mw ngapain', '05:30:10', 'Bandung'),
(57, 'Hibban', '4567', '2021-04-26', '23:37:10', 'Tugas Tambahan', 'gk tau mw ngapain', '06:30:10', 'Cimahi'),
(58, 'Diffo Elza', '4321', '2021-04-27', '15:52:39', 'Tugas Pokok', 'gk tau mw ngapain', '05:30:15', 'Bandung'),
(59, 'Hibban', '4567', '2021-04-28', '12:13:21', 'Tugas Pokok', 'sadsad', '10:10:35', 'Ranca Ekek'),
(60, 'Hibban', '4567', '2021-04-28', '15:00:24', 'Tugas Pokok', 'gk tau mw ngapain', '00:30:00', 'Padang'),
(61, 'Hibban', '4567', '2021-04-28', '15:02:39', 'Tugas Pokok', 'sadsad', '00:30:00', 'Ranca Ekek'),
(62, 'Hibban', '4567', '2021-04-28', '15:06:39', 'Tugas Pokok', 'sadsad', '00:30:00', 'Ranca Ekek'),
(63, 'Hibban', '4567', '2021-04-28', '15:06:54', 'Tugas Pokok', 'gk tau mw ngapain', '00:05:00', 'Bandung'),
(64, 'Hibban', '4567', '2021-04-28', '15:07:54', 'Tugas Pokok', 'gk tau mw ngapain', '00:05:00', 'Cimahi'),
(65, 'Hibban', '4567', '2021-04-28', '15:09:30', 'Tugas Tambahan', 'gk tau mw ngapain', '00:05:00', 'Padang'),
(66, 'Hibban', '4567', '2021-04-28', '17:34:44', 'Tugas Pokok', 'asdsadasd', '00:25:00', 'Cimahi'),
(67, 'Hibban', '4567', '2021-04-28', '17:35:34', 'Tugas Pokok', 'gk tau mw ngapain', '00:25:00', 'Bandung'),
(68, 'Hibban', '4567', '2021-04-28', '17:51:36', 'Tugas Tambahan', 'gk tau mw ngapain', '00:30:00', 'Padang'),
(69, 'Hibban', '4567', '2021-04-28', '17:55:48', 'Tugas Pokok', 'gk tau mw ngapain', '05:00:00', 'Bandung'),
(71, 'Hibban', '4567', '2021-04-28', '18:53:39', 'Tugas Pokok', 'asdsadasd', '01:00:00', 'Bandung'),
(72, 'Hibban', '4567', '2021-04-28', '18:54:39', 'Tugas Pokok', 'gk tau mw ngapain', '05:00:00', 'Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tugas_lapangan`
--

CREATE TABLE `tbl_tugas_lapangan` (
  `id_tugas_lapangan` int(11) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `noreg` varchar(5) DEFAULT NULL,
  `tanggal_lapangan` date DEFAULT NULL,
  `jam_lapangan` time DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `tujuan` varchar(255) DEFAULT NULL,
  `waktu_selesai` time DEFAULT NULL,
  `kepulangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tugas_lapangan`
--

INSERT INTO `tbl_tugas_lapangan` (`id_tugas_lapangan`, `nama_lengkap`, `noreg`, `tanggal_lapangan`, `jam_lapangan`, `keterangan`, `tujuan`, `waktu_selesai`, `kepulangan`) VALUES
(4, 'Diffo Elza', '4321', '2021-04-26', '11:32:16', 'Tugas ke lapangan dari kantor', 'Kerja lah goblok', '05:30:10', 'Langsung pulang rumah'),
(5, 'Diffo Elza', '4321', '2021-04-26', '11:32:32', 'Tugas ke lapangan dari kantor', 'Aku Bingung Harus Bagaimana', '05:30:35', 'Ke kantor lagi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_video`
--

CREATE TABLE `tbl_video` (
  `id_video` int(11) NOT NULL,
  `video_profile` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_video`
--

INSERT INTO `tbl_video` (`id_video`, `video_profile`) VALUES
(1, 'example.mp4');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indeks untuk tabel `tbl_cuti`
--
ALTER TABLE `tbl_cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indeks untuk tabel `tbl_job_des`
--
ALTER TABLE `tbl_job_des`
  ADD PRIMARY KEY (`id_job_des`);

--
-- Indeks untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indeks untuk tabel `tbl_reseller`
--
ALTER TABLE `tbl_reseller`
  ADD PRIMARY KEY (`id_reseller`);

--
-- Indeks untuk tabel `tbl_saran`
--
ALTER TABLE `tbl_saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indeks untuk tabel `tbl_slide`
--
ALTER TABLE `tbl_slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indeks untuk tabel `tbl_tugas_harian`
--
ALTER TABLE `tbl_tugas_harian`
  ADD PRIMARY KEY (`id_tugas_harian`);

--
-- Indeks untuk tabel `tbl_tugas_lapangan`
--
ALTER TABLE `tbl_tugas_lapangan`
  ADD PRIMARY KEY (`id_tugas_lapangan`);

--
-- Indeks untuk tabel `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_cuti`
--
ALTER TABLE `tbl_cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_job_des`
--
ALTER TABLE `tbl_job_des`
  MODIFY `id_job_des` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_reseller`
--
ALTER TABLE `tbl_reseller`
  MODIFY `id_reseller` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_saran`
--
ALTER TABLE `tbl_saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_slide`
--
ALTER TABLE `tbl_slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_tugas_harian`
--
ALTER TABLE `tbl_tugas_harian`
  MODIFY `id_tugas_harian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `tbl_tugas_lapangan`
--
ALTER TABLE `tbl_tugas_lapangan`
  MODIFY `id_tugas_lapangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
