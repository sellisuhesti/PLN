-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jul 2020 pada 05.34
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pln`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bagian`
--

CREATE TABLE `bagian` (
  `kode` varchar(15) NOT NULL,
  `bagian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bagian`
--

INSERT INTO `bagian` (`kode`, `bagian`) VALUES
('pm', 'Pemasaran'),
('ni', 'Niaga'),
('te', 'Transaksi Energi'),
('jar', 'Jaringan'),
('kon', 'Konstruksi'),
('ksa', 'KSA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapengusaha`
--

CREATE TABLE `datapengusaha` (
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `bulan` varchar(128) NOT NULL,
  `nama_file` varchar(128) NOT NULL,
  `file` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datapengusaha`
--

INSERT INTO `datapengusaha` (`id`, `tahun`, `bulan`, `nama_file`, `file`) VALUES
(5, 2016, 'januari', 'ok', ''),
(6, 2019, 'desember', 'lpjgbn', ''),
(9, 2019, 'januari', 'kjjkljk', 'TLKM.JK.csv'),
(10, 2019, 'maret', 'lkklk', '271-596-1-PB.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kbt`
--

CREATE TABLE `kbt` (
  `id` int(11) NOT NULL,
  `periode` varchar(125) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kbt`
--

INSERT INTO `kbt` (`id`, `periode`, `tahun`) VALUES
(86, 'Triwulan I', 2017);

-- --------------------------------------------------------

--
-- Struktur dari tabel `km`
--

CREATE TABLE `km` (
  `id` int(11) NOT NULL,
  `tahun` int(128) NOT NULL,
  `nama_file` varchar(128) NOT NULL,
  `file` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `km`
--

INSERT INTO `km` (`id`, `tahun`, `nama_file`, `file`) VALUES
(53, 2020, 'igt', 'IGT.pdf'),
(54, 2019, 'ponnkl', 'garuda947438.pdf'),
(55, 2018, 'jjkkkl', '09.latihan_8_virtual_soal.pdf'),
(56, 2018, 'plkmm', 'Profile.pdf'),
(57, 2017, 'jjkkkk', 'laporan kp validasi data (1301164311, 1301164323).pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasaran`
--

CREATE TABLE `pemasaran` (
  `bagian` varchar(50) NOT NULL,
  `penjualan` varchar(255) NOT NULL,
  `penjualan_layanan` varchar(255) NOT NULL,
  `jumlah_plg` int(25) NOT NULL,
  `rupiah_pendapatan` int(115) NOT NULL,
  `penambahan_plg_premium` int(115) NOT NULL,
  `implementasi` int(50) NOT NULL,
  `jml_komplain` int(50) NOT NULL,
  `aging_komplain` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profilrisiko`
--

CREATE TABLE `profilrisiko` (
  `id` int(11) NOT NULL,
  `tahun` int(128) NOT NULL,
  `bulan` varchar(128) NOT NULL,
  `nama_file` varchar(128) NOT NULL,
  `file` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profilrisiko`
--

INSERT INTO `profilrisiko` (`id`, `tahun`, `bulan`, `nama_file`, `file`) VALUES
(1, 2020, 'maret', 'njjkkk', 'kkk'),
(2, 2019, 'september', 'njhgvxssd', ''),
(3, 2019, 'september', 'njhgvxssd', ''),
(7, 2019, 'april', 'polkjnhyujnnn', ''),
(8, 2017, 'april', 'poinbhh', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rasio`
--

CREATE TABLE `rasio` (
  `pencapaian` int(11) NOT NULL,
  `angka` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rasio`
--

INSERT INTO `rasio` (`pencapaian`, `angka`) VALUES
(0, 1),
(20, 2),
(30, 3),
(40, 4),
(50, 5),
(60, 6),
(70, 7),
(80, 8),
(90, 9),
(100, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `realisasi`
--

CREATE TABLE `realisasi` (
  `id` int(50) NOT NULL,
  `tahun` int(128) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `bagian` varchar(50) NOT NULL,
  `penjualan` int(50) NOT NULL,
  `penjualan_lk` int(50) NOT NULL,
  `jml_plg` int(50) NOT NULL,
  `rupiah_pendapatan` int(50) NOT NULL,
  `penambahan_plg_premium` int(50) NOT NULL,
  `ice` int(50) NOT NULL,
  `jml_komplain` int(50) NOT NULL,
  `aging_komplain` int(50) NOT NULL,
  `saldo_pal` int(50) NOT NULL,
  `saldo_ts` int(50) NOT NULL,
  `susut` int(50) NOT NULL,
  `p2tl` int(50) NOT NULL,
  `jml_durasi_padam` int(50) NOT NULL,
  `kali_padam` int(50) NOT NULL,
  `penurunan_ens` int(50) NOT NULL,
  `progres_fisik` int(50) NOT NULL,
  `hcr` int(50) NOT NULL,
  `ocr` int(50) NOT NULL,
  `jml_pegawai` int(50) NOT NULL,
  `mle` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `realisasi`
--

INSERT INTO `realisasi` (`id`, `tahun`, `bulan`, `bagian`, `penjualan`, `penjualan_lk`, `jml_plg`, `rupiah_pendapatan`, `penambahan_plg_premium`, `ice`, `jml_komplain`, `aging_komplain`, `saldo_pal`, `saldo_ts`, `susut`, `p2tl`, `jml_durasi_padam`, `kali_padam`, `penurunan_ens`, `progres_fisik`, `hcr`, `ocr`, `jml_pegawai`, `mle`) VALUES
(1, 2020, 'Januari', 'PEMASARAN', 5, 2, 3, 4, 10, 9, 9, 19, 9, 10, 11, 78, 45, 14, 9, 16, 17, 2, 5, 6),
(2, 2020, 'februari', 'NIAGA', 5, 5, 3, 5, 10, 6, 7, 19, 9, 21, 45, 12, 6, 8, 15, 9, 9, 2, 100, 8),
(3, 2019, 'januari', 'TRANSAKSI ENERGI', 5, 2, 5, 15, 9, 6, 7, 19, 9, 10, 11, 12, 45, 9, 15, 16, 5, 2, 100, 80),
(4, 2018, 'juni', 'JARINGAN', 1, 5, 3, 9, 9, 6, 7, 19, 9, 9, 11, 12, 9, 9, 15, 16, 9, 2, 32, 6),
(5, 2018, 'mei', 'KONSTRUKSI', 5, 2, 3, 15, 9, 5, 9, 19, 9, 21, 5, 78, 13, 14, 15, 16, 17, 5, 32, 9),
(6, 2020, 'Juli', 'KSA', 5, 2, 3, 5, 16, 17, 9, 19, 9, 10, 11, 5, 13, 14, 9, 16, 4, 2, 32, 6),
(7, 2020, 'Agustus', 'PERENCANAAN', 5, 2, 3, 4, 16, 6, 7, 19, 87, 10, 11, 78, 13, 14, 9, 16, 6, 5, 100, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `realisasi_kinerja`
--

CREATE TABLE `realisasi_kinerja` (
  `id` int(50) NOT NULL,
  `tahun` int(128) NOT NULL,
  `bulan` varchar(128) NOT NULL,
  `nama_file` varchar(256) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `realisasi_kinerja`
--

INSERT INTO `realisasi_kinerja` (`id`, `tahun`, `bulan`, `nama_file`, `file`) VALUES
(43, 2017, 'Januari', 'rekap kinerja', 'Rekap_kinerja.xlsx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `date_created`) VALUES
(7, 'selli suhesti', 'sellisuhesti29@gmail.com', '$2y$10$l6ZYHXwYEyY40Au7qegzxekj3taIvH2kRRW2GkR755MtMvxNyqfou', 1592268169),
(9, 'satria amien', 'satriaamien0@gmail.com', '$2y$10$0gs2/L/N/nArXoQBeyLvmuoXiPtVt42OpyXYFVZ84exr10ooSgczq', 1592287736);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datapengusaha`
--
ALTER TABLE `datapengusaha`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kbt`
--
ALTER TABLE `kbt`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `km`
--
ALTER TABLE `km`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profilrisiko`
--
ALTER TABLE `profilrisiko`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `realisasi`
--
ALTER TABLE `realisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `realisasi_kinerja`
--
ALTER TABLE `realisasi_kinerja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datapengusaha`
--
ALTER TABLE `datapengusaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kbt`
--
ALTER TABLE `kbt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT untuk tabel `km`
--
ALTER TABLE `km`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `profilrisiko`
--
ALTER TABLE `profilrisiko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `realisasi`
--
ALTER TABLE `realisasi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `realisasi_kinerja`
--
ALTER TABLE `realisasi_kinerja`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
