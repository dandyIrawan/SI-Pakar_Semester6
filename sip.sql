-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 20, 2021 at 09:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `iduser` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`iduser`, `username`, `password`, `nama`, `email`) VALUES
(1, 'admin', '123', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `basispengetahuan`
--

CREATE TABLE `basispengetahuan` (
  `namapenyakit` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basispengetahuan`
--

INSERT INTO `basispengetahuan` (`namapenyakit`, `gejala`) VALUES
('Polisitemia Vera', 'Sakit kepala, vertigo, serangan stroke, nyeri dada, gangguan penglihatan.'),
('Trombositemia Esensial', 'Sakit kepala, nyeri jari tangan dan kaki, rangsang panas/dingin, migrain dan kejang.'),
('Mielofibrosis', 'Demam, penurunan berat badan dan nyeri tulang.'),
('Leukemia mielositik (granulositik) kronik (LGK)', 'Cepat lelah, berat badan turun, cepat kenyang, demam ringan, anemia.'),
('Leukemia Neutrofil Kronis', 'Demam, Infeksi yang sering/berulang, infeksi yang tidak biasa, sariawan, abses kulit/bisul.'),
('Leukemia Eosinofil Kronis', 'Ruam kulit, gatal, diare, hidung tersumbat.');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `idgejala` varchar(10) NOT NULL,
  `gejala` varchar(1000) NOT NULL,
  `daerah` varchar(10) NOT NULL,
  `jenispenyakit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`idgejala`, `gejala`, `daerah`, `jenispenyakit`) VALUES
('G1', 'Sakit kepala, vertigo, serangan stroke, nyeri dada, gangguan penglihatan.', 'Gejala', 'Mieloproliferatif'),
('G2', 'Sakit kepala, nyeri jari tangan dan kaki, rangsang panas/dingin, migrain dan kejang.', 'Gejala', 'Mieloproliferatif'),
('G3', 'Demam, penurunan berat badan dan nyeri tulang.', 'Gejala', 'Mieloproliferatif'),
('G4', 'Cepat lelah, berat badan turun, cepat kenyang, demam ringan, anemia.', 'Gejala', 'Mieloproliferatif'),
('G5', 'Demam, Infeksi yang sering/berulang, infeksi yang tidak biasa, sariawan, abses kulit/bisul.', 'Gejala', 'Mieloproliferatif'),
('G6', 'Ruam kulit, gatal, diare, hidung tersumbat.', 'Gejala', 'Mieloproliferatif');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `idpenyakit` varchar(20) NOT NULL,
  `namapenyakit` varchar(1000) NOT NULL,
  `jenispenyakit` varchar(20) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`idpenyakit`, `namapenyakit`, `jenispenyakit`, `keterangan`) VALUES
('P1', 'Polisitemia Vera', 'Mieloproliferatif', 'Polycythemia vera. Kadar sel darah merah tinggi, baik pada sumsum tulang maupun darah, sehingga darah menjadi lebih kental.'),
('P2', 'Trombositemia Esensial', 'Mieloproliferatif', 'Trombositemia esensial. Terjadi peningkatan jumlah trombosit atau platelet di dalam darah.'),
('P3', 'Mielofibrosis', 'Mieloproliferatif', 'Mielofibrosis. Kondisi di mana banyak terdapat sel darah merah dan sel darah putih yang tidak sempurna di dalam tubuh.'),
('P4', 'Leukemia mielositik (granulositik) kronik (LGK)', 'Mieloproliferatif', 'Leukemia mielositik (granulositik) kronik (LGK). Kanker indolen (bertumbuh secara lambat) yang disebabkan karena banyaknya sel darah putih yang tidak sempurna di sumsum tulang dan darah.'),
('P5', 'Leukemia Neutrofil Kronis', 'Mieloproliferatif', 'Leukemia Neutrofil Kronis. Darah pasien banyak mengandung sel darah putih yang disebut neutrofil.'),
('P6', 'Leukemia Eosinofil Kronis', 'Mieloproliferatif', 'Leukemia Eosinofil Kronis. Terdapat banyak jenis sel darah putih yang disebut eosinofil pada sumsum tulang, darah, dan jaringan tubuh lain.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `nama`, `password`, `email`) VALUES
(1, 'dandyirawan', 'dandi', '11', 'ahmaddandiirawan@gmail.com'),
(7, 'admin', 'admin', 'admin', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`idgejala`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`idpenyakit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `iduser` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
