-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Mei 2016 pada 15.44
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lokasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_instansi`
--

CREATE TABLE IF NOT EXISTS `tabel_instansi` (
  `id_instansi` varchar(6) NOT NULL,
  `nm_instansi` varchar(50) NOT NULL,
  `alamat_instansi` varchar(50) NOT NULL,
  `kodepos` int(5) NOT NULL,
  `kab_instansi` varchar(50) NOT NULL,
  `prop_instansi` varchar(50) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_instansi`
--

INSERT INTO `tabel_instansi` (`id_instansi`, `nm_instansi`, `alamat_instansi`, `kodepos`, `kab_instansi`, `prop_instansi`, `telpon`, `foto`) VALUES
('INS010', 'Kantor Gubernur', 'Jl. Brooklyn no 27', 931123, 'Kendari', 'Sulawesi Tenggara', '(0401) - 3198822', '770324kangub.jpg'),
('INS009', 'Kantor Walikota', 'Jl. Brooklyn no 27', 931123, 'Kendari', 'Sulawesi Tenggara', '(0401) - 3198822', '844085kanwalkot.jpg'),
('INS008', 'Kejaksaan Tinggi', 'Jl. Brooklyn no 27', 931123, 'Kendari', 'Sulawesi Tenggara', '(0401) - 3198822', '108428kejati.jpg'),
('INS007', 'DPRD Sultra', 'Jl. Brooklyn no 27', 931123, 'Kendari', 'Sulawesi Tenggara', '(0401) - 3198822', '593292Gedung-DPRD-Sultra.jpg'),
('INS006', 'Basarnas Kendari', 'Jl. Brooklyn no 27', 931123, 'Kendari', 'Sulawesi Tenggara', '(0401) - 3198822', '838043basarnas.jpg'),
('INS005', 'Inspektorat Kendari', 'Jl. Brooklyn no 27', 931123, 'Kendari', 'Sulawesi Tenggara', '(0401) - 3198822', '127929inspektorat.jpg'),
('INS004', 'Dinas Kebersihan', 'Jl. Brooklyn no 27', 931123, 'Kendari', 'Sulawesi Tenggara', '(0401) - 3198822', '338134dikeb.jpg'),
('INS003', 'Dinas Pelatihan Kesehatan', 'Jl. Brooklyn no 27', 931123, 'Kendari', 'Sulawesi Tenggara', '(0401) - 3198822', '607543dinkes.jpg'),
('INS001', 'Dinas Pekerjaan Umum', 'Jl. Brooklyn no 27', 931123, 'Kendari', 'Sulawesi Tenggara', '(0401) - 3198822', '19012420141112Ktr-PU1.jpg'),
('INS002', 'Dinas Pendidikan', 'Jl. Brooklyn no 27', 931123, 'Kendari', 'Sulawesi Tenggara', '(0401) - 3198822', '471771Dinas-P-K-kendari.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kordinat`
--

CREATE TABLE IF NOT EXISTS `tabel_kordinat` (
  `id_kordinat` varchar(6) NOT NULL,
  `id_instansi` varchar(6) NOT NULL,
  `kordinat` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_kordinat`
--

INSERT INTO `tabel_kordinat` (`id_kordinat`, `id_instansi`, `kordinat`) VALUES
('KOR001', 'INS001', '-3.969379,122.513964'),
('KOR002', 'INS002', '-3.9669781,122.5642224'),
('KOR003', 'INS003', '-3.996946,122.499242'),
('KOR004', 'INS004', '-3.9750049,122.5072655'),
('KOR005', 'INS005', '-3.9751641,122.5075736'),
('KOR006', 'INS006', '-4.0377252,122.4868029'),
('KOR007', 'INS007', '-3.97129,122.512'),
('KOR008', 'INS008', '-3.976637,122.512599'),
('KOR009', 'INS009', '-3.9729198,122.5117401'),
('KOR010', 'INS010', '-4.023989,122.5359336');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE IF NOT EXISTS `tabel_user` (
  `userid` varchar(50) NOT NULL,
  `passid` varchar(50) NOT NULL,
  `level_user` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_user`
--

INSERT INTO `tabel_user` (`userid`, `passid`, `level_user`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
