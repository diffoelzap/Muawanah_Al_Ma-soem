-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Apr 2021 pada 01.40
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
(5, 'Diffo Elza', '4321', 'Melahirkan', '2021-04-27', '2021-05-31', 34, 0, 'Aku sudah Tidak Kuat'),
(6, 'Diffo Elza', '4321', 'Menikah', '2021-04-30', '2021-05-20', 20, 0, 'Jika Upload bukti pembayaran tidak valid'),
(7, 'Diffo Elza', '4321', 'Menikah', '2021-05-12', '2021-05-12', 0, 0, 'Jika Upload bukti pembayaran tidak valid');

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
(10, 'diffoelzap', '123456', '3277030212980005', '4321', 'Ganteng', 'Diffo', 'Cimahi', '1998-12-02', 'Laki - Laki', 'Islam', 'WNI', 'Belum Menikah', 'Sementara', '2021-04-26', 'Pt Al-Masoem', 'AM3', 'AM3', '', 'Manager', '1.4', 'JL KH USMAN DHOMIRI NO:01', 'JL KH USMAN DHOMIRI NO:01', 'logo_jadi.png'),
(11, 'muhammad', '123456', '3277030212980006', '4325', 'Muhammad', 'Lutfi', 'Bandung', '2000-08-30', 'Laki - Laki', 'Kristen', 'WNI', 'Menikah', 'Tetap', '2021-04-26', 'Pt Al-Masoem', 'AM3', 'AM3', '', 'CEO AQUA', '1.5', 'JL. BOJONGSOANG', 'JL TAMAN SARI', 'test1.jpg'),
(12, 'hibbanm', '123456', '3277030212980045', '4567', 'Hibban', 'hihi', 'Ranca Ekek', '2021-04-27', 'Laki - Laki', 'Kristen', 'WNI', 'Belum Menikah', 'Tetap', '2021-04-26', 'Pt Al-Masoem', 'AM3', 'AM3', '', 'Manager', '1.4', 'JL KH USMAN DHOMIRI NO:01', 'JL KH USMAN DHOMIRI NO:01', 'Moon.jpg'),
(13, 'zahnil', '123456', '327703021298075', '4323', 'Zahnil', 'Buyung', 'Padang', '1998-12-02', 'Laki - Laki', 'Islam', 'WNI', 'Menikah', 'Sementara', '2021-04-26', 'Pt Al-Masoem', 'AM3', 'AM3', '', 'Manager', '1.4', 'JL KH USMAN DHOMIRI NO:01', 'JL KH USMAN DHOMIRI NO:01', 'logo_jadi1.png');

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
(2, 'Diffo Elza', '4321', '2021-04-28', '05:20:25', 'Inova', '06.00 - 18.00', 0, 'valid', 'Jupena Solihin');

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
(58, 'Diffo Elza', '4321', '2021-04-27', '15:52:39', 'Tugas Pokok', 'gk tau mw ngapain', '05:30:15', 'Bandung');

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

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_cuti`
--
ALTER TABLE `tbl_cuti`
  ADD PRIMARY KEY (`id_cuti`);

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
-- Indeks untuk tabel `tbl_saran`
--
ALTER TABLE `tbl_saran`
  ADD PRIMARY KEY (`id_saran`);

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
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_cuti`
--
ALTER TABLE `tbl_cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_saran`
--
ALTER TABLE `tbl_saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_tugas_harian`
--
ALTER TABLE `tbl_tugas_harian`
  MODIFY `id_tugas_harian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `tbl_tugas_lapangan`
--
ALTER TABLE `tbl_tugas_lapangan`
  MODIFY `id_tugas_lapangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
