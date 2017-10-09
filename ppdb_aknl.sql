-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2016 at 03:30 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_aknl`
--

-- --------------------------------------------------------

--
-- Table structure for table `catatan_dinamis`
--

CREATE TABLE `catatan_dinamis` (
  `id_catatan` int(11) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catatan_dinamis`
--

INSERT INTO `catatan_dinamis` (`id_catatan`, `isi`) VALUES
(1, 'Catatan\r\n1. Bukti Pendaftaran Disimpan, Jangan Hilang\r\n2. Bukti Pendaftaran Harap Dibawa pada saat Tes\r\n3. Tes Pendaftar Gelombang 2 dilaksanakan pada\r\n&nbsp;&nbsp;&nbsp;&nbsp;20 Agustus 2016 pukul 15.00 WIB (3 sore)');

-- --------------------------------------------------------

--
-- Table structure for table `detail_mahasiswa`
--

CREATE TABLE `detail_mahasiswa` (
  `no_pendaftaran` varchar(50) NOT NULL,
  `alamat_rumah` varchar(50) NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL,
  `desa_kelurahan` varchar(50) NOT NULL,
  `kode_pos` int(8) NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `kabupaten_kota` varchar(25) NOT NULL,
  `telp_rumah` int(12) NOT NULL,
  `nomor_hp` int(12) NOT NULL,
  `tahun_lulus` year(4) NOT NULL,
  `nama_wali` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `pekerjaan_ortu` varchar(30) NOT NULL,
  `alamat_rumah_ortu` varchar(50) NOT NULL,
  `rt_ortu` tinyint(2) NOT NULL,
  `rw_ortu` tinyint(2) NOT NULL,
  `desa_kelurahan_ortu` varchar(50) NOT NULL,
  `kode_pos_ortu` int(8) NOT NULL,
  `kecamatan_ortu` varchar(30) NOT NULL,
  `kabupaten_kota_ortu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_mahasiswa`
--

INSERT INTO `detail_mahasiswa` (`no_pendaftaran`, `alamat_rumah`, `rt`, `rw`, `desa_kelurahan`, `kode_pos`, `kecamatan`, `kabupaten_kota`, `telp_rumah`, `nomor_hp`, `tahun_lulus`, `nama_wali`, `nama_ibu`, `pekerjaan_ortu`, `alamat_rumah_ortu`, `rt_ortu`, `rw_ortu`, `desa_kelurahan_ortu`, `kode_pos_ortu`, `kecamatan_ortu`, `kabupaten_kota_ortu`) VALUES
('KP0001', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0002', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0003', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0004', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0005', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0006', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0007', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0008', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0009', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0010', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0011', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0012', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0013', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0014', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0015', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0016', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0017', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0018', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0019', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0020', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0021', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0022', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0023', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0024', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0025', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0026', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0027', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0028', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0029', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0030', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', ''),
('KP0031', '', 0, 0, '', 0, '', '', 0, 0, 0000, '', '', '', '', 0, 0, '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `no_pendaftaran` varchar(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` int(11) NOT NULL,
  `agama` int(11) NOT NULL,
  `sekolah_asal` varchar(50) NOT NULL,
  `nomor_hp` bigint(13) NOT NULL,
  `program_studi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`no_pendaftaran`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `sekolah_asal`, `nomor_hp`, `program_studi`) VALUES
('KP0001', 'DEVIA NURWASILA', 'LUMAJANG', '1997-03-03', 2, 1, 'MA PUTRI NURULMASYITHOH', 85815631878, 1),
('KP0002', 'DIAN RESTI YARANTINA', 'JEMBER', '1998-05-26', 2, 1, 'SMKN 1 LUMAJANG', 82231202119, 1),
('KP0003', 'FIKRI RAHMAN FAHREZA', 'MALANG', '1998-03-17', 1, 1, 'SMA PGRI 1 LUMAJANG', 82214388119, 1),
('KP0004', 'ANDRIAN DWI KURNIANTO', 'LUMAJANG', '1995-11-01', 1, 1, 'SMKN KLAKAH', 89696606461, 2),
('KP0005', 'ABU SUFYAN', 'LUMAJANG', '1998-04-30', 1, 1, 'SMKN KLAKAH', 85745735964, 2),
('KP0006', 'HAIDAR ALI ASSA DULLOH', 'LUMAJANG', '1996-05-25', 1, 1, 'SMKN KLAKAH', 85204571567, 2),
('KP0007', 'ROLANDO PABELA', 'SAMARINDA', '1998-09-13', 1, 1, 'SMA SETIA MARGA', 85821103757, 1),
('KP0008', 'CAHYO NUGROHO', 'LUMAJANG', '1998-03-23', 1, 1, 'SMA PGRI 1 LUMAJANG', 8, 1),
('KP0009', 'AGUNG SOFIRULLAH ANNAS', 'LUMAJANG', '1998-03-02', 1, 1, 'SMK SUNAN KALIJOGO', 0, 1),
('KP0010', 'MUHAMMAD FAHFARULLOH ZADID', 'LUMAJANG', '1992-06-09', 1, 1, 'SMKN 2 PROBOLINGGO', 81232233737, 2),
('KP0011', 'ROFIQ ANWAR SADAT', 'LUMAJANG', '1993-03-23', 1, 1, 'SMA ISLAM LUMAJANG', 85230709225, 1),
('KP0012', 'LUKMAN DEBIYANTORO', 'LUMAJANG', '1996-06-05', 1, 1, 'SMKN KLAKAH', 85320075966, 2),
('KP0013', 'NOVI KURNIAWATI', 'LUMAJANG', '1997-11-05', 2, 1, 'SMAN 3 LUMAJANG', 8980446465, 1),
('KP0014', 'DANNY DWI ANGGRAINI', 'LUMAJANG', '1997-08-22', 2, 1, 'SMA PGRI 1 LUMAJANG', 82214388117, 1),
('KP0015', 'SONI DWI RESTU WIBOWO', 'LUMAJANG', '1997-05-04', 1, 1, 'SMKN PASIRIAN', 85708346417, 1),
('KP0016', 'AMANATUS SOLIHIN', 'KUDUS', '1997-08-07', 1, 1, 'SMAN PASIRIAN', 85790732099, 1),
('KP0017', 'AGUS SAMUDRA', 'LUMAJANG', '1997-07-19', 1, 1, 'SMK PEMBANGUNAN CANDIPURO', 85258051553, 2),
('KP0018', 'KAUTSAR KARIM KHAMAINI', 'LUMAJANG', '1995-11-19', 1, 1, 'SMAN 1 LUMAJANG', 85676178227, 1),
('KP0019', 'FAUZAN MUTTAQIN', 'LUMAJANG', '1995-03-05', 1, 1, 'SMA COKROAMINOTO MALANG', 81937482420, 2),
('KP0020', 'JAMILATUS ZAHRO', 'LUMAJANG', '1998-01-19', 2, 1, 'SMA PGRI TEMPEH', 87752414903, 1),
('KP0021', 'ABDUL KARIM', 'LUMAJANG', '1997-10-05', 1, 1, 'SMK AL MALIKI SUKODONO', 85799662829, 1),
('KP0022', 'MUHAMAD WAHYUDI', 'LUMAJANG', '1999-06-12', 1, 1, 'SMK AL MALIKI SUKODONO', 85646893614, 2),
('KP0023', 'BAKHARRUDIN KHUSNI HIDAYATULLAH', 'LUMAJANG', '1998-05-02', 1, 1, 'SMK AL MALIKI SUKODONO', 85728256467, 2),
('KP0024', 'NOVIA ANGGRAINI', 'LUMAJANG', '1997-11-10', 2, 1, 'SMAN 3 LUMAJANG', 82234791505, 1),
('KP0025', 'GILANG KINANTI PUTRA KARSANING GUSTI', 'LUMAJANG', '1993-01-06', 1, 1, 'SMKN 1 LUMAJANG ', 85745484747, 1),
('KP0026', 'MOCHAMMAD AMINULLAH', 'LUMAJANG', '1997-05-12', 1, 1, 'SMKN KLAKAH', 85732499409, 2),
('KP0027', 'NIMAS AZIZA YUSUF', 'LUMAJANG', '1997-02-26', 2, 1, 'SMAN YOSOWILANGUN', 81367186472, 1),
('KP0028', 'NICKO FEBRIAN', 'LUMAJANG', '1998-02-27', 1, 1, 'SMK PEMBANGUNAN CANDIPURO', 85608426996, 2),
('KP0029', 'DEDI KUSMANTO', 'LUMAJANG', '1997-07-10', 1, 1, 'SMKN KLAKAH', 85792109196, 2),
('KP0030', 'MOCHAMMAD FAQIH', 'LUMAJANG', '1999-03-28', 1, 1, 'SMKN KLAKAH', 85310424440, 2),
('KP0031', 'MISLI FARMAHAMSATI', 'LUMAJANG', '1997-03-08', 2, 1, 'SMAN KLAKAH', 85655998955, 1),
('KP0032', 'ADI YULIYANTO', 'LUMAJANG', '1991-07-07', 1, 1, 'SMKN TEMPEH', 85749120521, 2),
('KP0033', 'YUSRIL DWI IHZA MAHENDRA', 'LUMAJANG', '1997-08-07', 1, 1, 'SMKN 1 LUMAJANG', 82240443796, 1),
('KP0034', 'LIA OCTAVIA DWI SUSANTO', 'LUMAJANG', '1996-10-22', 2, 1, 'SMKN 1 LUMAJANG', 85210422495, 1),
('KP0035', 'CAHYANI DWI MERDEKA WATI', 'LUMAJANG', '1998-09-14', 2, 1, 'SMAN YOSOWILANGUN', 85785928403, 1),
('KP0036', 'FANDI KURNIAWAN', 'JEMBER', '1998-02-24', 1, 1, 'SMKN 8 JEMBER', 85655775994, 2),
('KP0037', 'AHMAD FARID SANTOSO', 'JEMBER', '1998-09-26', 1, 1, 'SMKN 8 JEMBER', 85755935410, 2),
('KP0038', 'HERI SANTOSO', 'JAYAPURA', '1996-10-03', 1, 1, 'SMKN 1 Mempura - Riau', 85272375805, 2),
('KP0039', 'PANDU WIDIANTORO', 'PROBOLINGGO', '1997-03-19', 1, 1, 'SMAN 1 KRAKSAAN', 81235247494, 1),
('KP0040', 'YUDHA AGUS PRADANA', 'LUMAJANG', '1997-08-22', 1, 1, 'SMKN KLAKAH', 895343708925, 2),
('KP0041', 'SEPTIAN CAHYO MARTONO', 'LUMAJANG', '1997-09-28', 1, 1, 'SMKN 2 PROBOLINGGO', 89661481440, 2),
('KP0042', 'RILO ANDRIANTO', 'LUMAJANG', '1997-07-08', 1, 1, 'SMAN PASIRIAN', 87757261301, 1),
('KP0043', 'MUHAMAD RIZKY ARISSAHPUTRA', 'LUMAJANG', '1998-02-17', 1, 1, 'SMA MUHAMMADIYAH OBI', 85342547187, 1),
('KP0044', 'ABDUR ROKHMAN AGUS PURWADI', 'LUMAJANG', '1997-08-02', 1, 1, 'SMA N KUNIR', 81333899138, 1),
('KP0045', 'VIRGIN ALFRISTA HERONIKA', 'LUMAJANG', '1998-01-01', 2, 1, 'SMKN 2 LUMAJANG', 82231595002, 1),
('KP0046', 'MUKHAMAD FAUZI', 'LUMAJANG', '1997-05-29', 1, 1, 'SMK MUHAMMADIYAH LUMAJANG', 85708941870, 2),
('KP0047', 'MOHAMAD FARIS', 'LUMAJANG', '1996-01-14', 1, 1, 'SMA PGRI 1 LUMAJANG', 85607682894, 1),
('KP0048', 'GHOZWAN LABIEB MUBARAK', 'LUMAJANG', '1998-06-21', 1, 1, 'MAN LUMAJANG', 89501073786, 1),
('KP0049', 'ACHMAD KAHARRUDINSYAH', 'LUMAJANG', '1997-07-01', 1, 1, 'MAN LUMAJANG', 85815224173, 1),
('KP0050', 'EKO NUGIAN SURYANTO', 'LUMAJANG', '1996-11-23', 1, 1, 'SMK N PASIRIAN', 85707565863, 1),
('KP0051', 'MUHAMAD RIZAL', 'LUMAJANG', '1998-07-17', 1, 1, 'SMAN CANDIPURO LUMAJANG', 85604103, 1),
('KP0052', 'MUHAMMAD BADRILIHYA ULUMMUDHIN', 'LUMAJANG', '1997-11-10', 1, 1, 'SMAN CANDIPURO LUMAJANG', 85850604465, 1),
('KP0053', 'NAZILAH AMANIYAH', 'LUMAJANG', '1997-01-29', 2, 1, 'SMAN 1 LUMAJANG', 85336596204, 1),
('KP0054', 'M. BIKHOS OKVIN BRILIANSYAH', 'LUMAJANG', '1997-10-17', 1, 1, 'SMA PGRI 1 LUMAJANG', 81336510401, 1),
('KP0055', 'ERWIN HIDAYAT', 'LUMAJANG', '1997-12-23', 1, 1, 'SMAN 3 LUMAJANG', 82318333021, 2),
('KP0056', 'MUHAMMAD SHOFIYUDDIN', 'LUMAJANG', '1997-12-09', 1, 1, 'SMKN PASIRIAN', 85895552213, 1),
('KP0057', 'HANDAL ABDI MUHAMMAD', 'LUMAJANG', '1997-11-19', 1, 1, 'SMK MUHAMMADIYAH LUMAJANG', 81559781651, 1),
('KP0058', 'ARDI SEPTYANTO BAHRI', 'LUMAJANG', '1996-09-08', 1, 1, 'MAN LUMAJANG', 81336604087, 2),
('KP0059', 'MUHAMMAD MAHSUN', 'LUMAJANG', '1998-04-08', 1, 1, 'MAN LUMAJANG', 82338161484, 2),
('KP0060', ' KHARISMA FITRIA NINGRUM', 'LUMAJANG', '1998-10-05', 2, 1, 'SMKN 1 LUMAJANG', 82333929134, 1),
('KP0061', 'RISKA SAFITA DEWI', 'LUMAJANG', '1997-05-05', 2, 1, 'SMKN 1 LUMAJANG', 82247770449, 1),
('KP0062', 'IMAM RUSHADI', 'LUMAJANG', '1994-07-25', 1, 1, 'SMK 01 YP 17 LUMAJANG', 85607994811, 2),
('KP0063', 'ABDUL KHAKIM', 'LUMAJANG', '1994-04-13', 1, 1, 'SMK 01 YP 17 LUMAJANG', 85258825149, 1),
('KP0064', 'WIDIANTORO', 'PROBOLINGGO', '1997-10-27', 1, 1, 'SMK N 2 PROBOLINGGO', 89503937015, 2),
('KP0065', 'RENDI SETIAWAN ', 'LUMAJANG', '1997-10-15', 1, 1, 'SMK DARUN NAJAH', 85895222954, 1),
('KP0066', 'MUHAMMAD SUHARTONO', 'LUMAJANG', '1997-03-22', 1, 1, 'SMK NEGERI TEMPEH', 82386718078, 1),
('KP0067', 'ANTON ALIFANDI', 'LUMAJANG', '1997-11-20', 1, 1, 'SMKN KLAKAH', 82234927001, 2),
('KP0068', 'MAIDA MAYA ARIANTI', 'LUMAJANG', '1997-05-07', 2, 1, 'SMA N 2 LUMAJANG', 895340930065, 1),
('KP0069', 'EKO SARDIANTO', 'LUMAJANG', '1998-05-03', 1, 1, 'SMK N 1 TEKUNG', 8563666368, 1),
('KP0070', 'AHMAD NOVAL IGBAL FAUZI', 'LUMAJANG', '1997-11-12', 1, 1, 'SMA N YOSOWILANGUN', 82234782634, 1),
('KP0071', 'DANIAL RIZZA HALIIMI', 'LUMAJANG', '1998-05-20', 1, 1, 'SMA N 3 LUMAJANG', 89687815996, 1),
('KP0072', 'HERMANTO', 'LUMAJANG', '1997-08-23', 1, 1, 'SMA PGRI 1 LUMAJANG', 85607385615, 2),
('KP0073', 'ANA MARIYAM MAWARTI', 'LUMAJANG', '1998-01-20', 2, 1, 'SMA PGRI 1 LUMAJANG', 85607319954, 1),
('KP0074', 'DALILA SAFITRI', 'LUMAJANG', '1997-06-09', 2, 1, 'SMA N PASIRIAN', 85604476794, 1),
('KP0075', 'BAGUS OKTA TRIYANTONO', 'TANGERANG', '1996-10-08', 1, 1, 'SMK N PASIRIAN', 87757064901, 2),
('KP0076', 'AHMAD FALASIF ILMI RIDHO', 'LUMAJANG', '1998-04-29', 1, 1, 'SMK I BUSTANUL ULUM', 85850608741, 2),
('KP0077', 'AGUS YULIANTO', 'LUMAJANG', '1998-08-02', 1, 1, 'SMK N PASIRIAN', 85606141009, 2),
('KP0078', 'FAHIMATUS SHOLIHA', 'LUMAJANG', '1998-02-19', 2, 1, 'SMA N 1 LUMAJANG', 85203474422, 1),
('KP0079', 'NINDYA ARIMURTY WARDHANA', 'PURWOKERTO', '1998-01-12', 2, 1, 'SMA N YOSOWILANGUN', 85852731348, 1),
('KP0080', 'ARDHITAMA PRIMADI JAYA', 'LUMAJANG', '1997-10-02', 1, 1, 'SMK N 7 JEMBER', 85224885563, 2),
('KP0081', 'MAULINA FINA ANJASSARI', 'LUMAJANG', '1997-07-19', 2, 1, 'SMA N CANDIPURO', 85745301927, 1),
('KP0082', 'IBNU ATHO ILLAH SYAH', 'JEMBER', '1998-04-07', 1, 1, 'SMKN KLAKAH', 85335671777, 2),
('KP0083', 'DINDA EKA WULANDARI', 'LUMAJANG', '1998-11-29', 2, 1, 'SMA N TEMPEH', 82141534151, 1),
('KP0084', 'MUHAMAD RIZAL IRFAN', 'LUMAJANG', '1999-05-16', 1, 1, 'SMAN 3 LUMAJANG', 0, 1),
('KP0085', 'SOFIATUN NIKMAH', 'LUMAJANG', '2000-07-01', 2, 1, 'SMA N KLAKAH', 81231891112, 1),
('KP0086', 'PUTRI FATIMAHTUZ ZAHRA', 'LUMAJANG', '1997-06-19', 2, 1, 'SMAN 3 LUMAJANG', 89661947482, 1),
('KP0087', 'ACHMAD SHOLEH HAFIDZUL AHKAM', 'LUMAJANG', '1997-02-28', 1, 1, 'SMK ZAINUL HASAN', 85810686459, 1),
('KP0088', 'MUHAMMAD RYAN JAA AL HAQ', 'LUMAJANG', '1998-09-22', 1, 1, 'PKBM TAMBO PASIRIAN', 85746524655, 2),
('KP0089', 'MUHAMMAD FURQON AKASA', 'LUMAJANG', '1997-06-15', 1, 1, 'SMK ZAINUL HASAN', 85755931972, 1),
('KP0090', 'AGUSTY NUKU DWI PUTRA', 'TIDORE', '1997-08-17', 1, 1, 'SMK N 1 LUMAJANG', 85790402831, 1),
('KP0091', 'PEBRIZA YOGA AHADIANTAMA', 'LUMAJANG', '1998-02-01', 1, 1, 'SMA N 3 LUMAJANG', 81231854330, 1),
('KP0092', 'ANDIK ANDHIKA', 'DUKU', '1995-05-17', 1, 1, 'SMKN ROWOKANGKUNG', 852257460980, 2),
('KP0093', 'META ANDRYAN YULIANTA', 'PALAPA', '1997-07-09', 1, 1, 'SMKN ROWOKANGKUNG', 852257460980, 2),
('KP0094', 'SAID AHMAD', 'LUMAJANG', '1994-01-28', 1, 1, 'SMKN KLAKAH', 0, 2),
('KP0095', 'ANDI LIYANI', 'LUMAJANG', '1997-11-07', 1, 1, 'SMK AL MALIKI SUKODONO', 85736011269, 2),
('KP0096', 'RANGGA EKO APRILIANTO', 'LUMAJANG', '1998-04-28', 1, 1, 'SMK N 01 LUMAJANG ', 81336851823, 1),
('KP0097', 'ZAINUR ROHMAN ', 'LUMAJANG', '1998-08-26', 1, 1, 'MAN LUMAJANG', 85257789452, 2),
('KP0098', 'NAUFAL AFIF KAMALUDDIN', 'LUMAJANG', '1997-05-10', 1, 1, 'SMKN 1 TEKUNG', 85736013701, 2),
('KP0099', 'YULIANI ISMAWATI', 'LUMAJANG', '1996-07-19', 2, 1, 'MA DARUN NAJAH', 85649366134, 1),
('KP0100', 'JACKY SROF FAISOL', 'LUMAJANG', '1998-08-20', 1, 1, 'SMK N 1 LUMAJANG', 82214518314, 1),
('KP0101', 'NANO EKA PRAYOGA', 'LUMAJANG', '1997-10-21', 1, 1, 'SMAN 3 LUMAJANG', 81553757906, 1),
('KP0102', 'MUHAMMAD WIAMUL HAKAM ASHIH', 'LUMAJANG', '1998-02-11', 1, 1, 'MA PESANTREN TERPADU AL FAUZAN', 85735357618, 2),
('KP0103', 'IIS USWATUN KHASANAH', 'LUMAJANG', '1998-08-20', 2, 1, 'SMAN 3 LUMAJANG', 85236637105, 1),
('KP0104', 'ATOK YUDAFIQI', 'JEMBER', '1996-03-07', 1, 1, 'SMA N 1 KENCONG', 85851146713, 1),
('KP0105', 'MOHAMMAD ARIF INDIARTO', 'LUMAJANG', '1998-02-11', 1, 1, 'SMKN 1 TEKUNG', 85606465270, 1),
('KP0106', 'EDWIN MAULANA', 'LUMAJANG', '1996-08-01', 1, 1, 'SMKN 1 TEKUNG', 82132443211, 1),
('KP0107', 'MUHAMMAD JUNAIDI', 'LUMAJANG', '1997-06-15', 1, 1, 'SMA N KUNIR', 85749979427, 1),
('KP0108', 'FIKI ANDRIANTO', 'LUMAJANG', '1997-05-05', 1, 1, 'SMA N KUNIR', 85708351028, 1),
('KP0109', 'WAHYU INDES SAPUTRI', 'LUMAJANG', '1996-12-20', 2, 1, 'SMA N CANDIPURO', 85749499288, 1),
('KP0110', 'ILGIE ALAM HIDAYATULLAH', 'MANOKWARI', '1997-11-16', 1, 1, 'SMKN 1 TEKUNG', 89692831462, 1),
('KP0111', 'ANDRI WIJAYA', 'LUMAJANG', '1997-10-09', 1, 1, 'MA PESANTREN TERPADU AL FAUZAN LUMAJANG', 85707173362, 2),
('KP0112', 'ABU RIZAL ABIDIN ', 'LUMAJANG', '1998-05-29', 1, 1, 'MA PESANTREN TERPADU AL FAUZAN LUMAJANG', 85746340278, 1),
('KP0113', 'FARIDAH HANIM', 'BULUNGAN', '1998-05-02', 2, 1, 'SMA N PASIRIAN', 81554232908, 1),
('KP0114', 'JUARTAF JAMANI ABDUL KHODIR', 'LUMAJANG', '1997-04-04', 1, 1, 'SMA N KUNIR ', 85852222479, 1),
('KP0115', 'ZAIN ILHAM DAROJAT', 'LUMAJANG', '1997-09-10', 1, 1, 'SMK N 1 LUMAJANG', 87752453491, 1),
('KP0116', 'DIKA MEKTI KUSUMO SUGENG', 'LUMAJANG', '1996-12-20', 1, 1, 'SMA N BALUNG', 85655575801, 1),
('KP0117', 'MUHAMMAD WAHYU ANGGA WINATA', 'LUMAJANG', '1997-06-17', 1, 1, 'SMK ASY-SYARIFIY', 85608401329, 2),
('KP0118', 'IMAM SYAFII', 'LUMAJANG', '0000-00-00', 1, 1, 'SMK ASY-SYARIFIY', 81554272334, 2),
('KP0119', 'ESSA KARTIKA SUNTARI', 'PROBOLINGGO', '1998-06-10', 2, 1, 'SMA TARUNA Dra ZULAEHA', 0, 1),
('KP0120', 'MUHAMMAD ANDIKA', 'LUMAJANG', '1997-07-21', 1, 1, 'SMK N PASIRIAN', 85735615211, 1),
('KP0121', 'MUHAMAD RIO RAMADHANI', 'LUMAJANG', '1998-05-14', 1, 1, 'SMK N 1 LUMAJANG', 85607096198, 1),
('KP0122', 'MUHAMMAD SYAHRUL RAMADHAN', 'LUMAJANG', '1998-01-23', 1, 1, 'SMK N 1 LUMAJANG', 89627667164, 1),
('KP0123', 'DECKY PRATAMA EDI SAPUTRA', 'JAYAPURA', '1998-10-22', 1, 1, 'SMK N 1 LUMAJANG', 89669444060, 1),
('KP0124', 'MOCHAMAD ABDUL WASI', 'LUMAJANG', '1996-11-20', 1, 1, 'SMK N CANDIPURO', 85790400346, 2),
('KP0125', 'ERLINA APRILIA', 'LUMAJANG', '1998-04-05', 2, 1, 'SMA N KUNIR', 85204869647, 1),
('KP0126', 'MEGAWATI', 'JEMBER', '1997-11-03', 2, 1, 'SMA PLUS BUSTANUL ULUM PUGER', 85257762049, 1),
('KP0127', 'TAZKIYYATUL HARIROH', 'LUMAJANG', '1998-05-02', 2, 1, 'SMA PLUS BUSTANUL ULUM PUGER', 82330687388, 1),
('KP0128', 'MAHFUDIANTO', 'LUMAJANG', '1996-06-22', 1, 1, 'SMK ASY SYARIFIY', 85733555469, 2),
('KP0129', 'ALIF FAJAR FIRDAUSI', 'LUMAJANG', '1998-02-01', 1, 1, 'MAN LUMAJANG', 85704278131, 2),
('KP0130', 'IMAM MALIK HAKIM', 'LUMAJANG', '1998-05-29', 1, 1, 'SMA N 3 LUMAJANG', 85135150851, 1),
('KP0131', 'DEWI SHINTA', 'LUMAJANG', '1998-06-05', 2, 1, 'SMA N JATIROTO', 85234140695, 1),
('KP0132', 'MUHAMMAD AFFANDI YAHYA', 'LUMAJANG', '1997-05-30', 1, 1, 'SMK N KLAKAH', 85746655692, 2),
('KP0133', 'FERY ANDRIAN', 'LUMAJANG', '1997-06-17', 1, 1, 'SMK N KLAKAH', 8, 2),
('KP0134', 'SAFRIDA FIRDAUSUL MA RIFAH', 'LUMAJANG', '1997-06-14', 2, 1, 'SMKN SENDURO', 85854655717, 1),
('KP0135', 'MUHAMMAD FIQIH NUR JULIANTO', 'LUMAJANG', '1997-07-13', 1, 1, 'SMA ISLAM LUMAJANG', 85358038445, 1),
('KP0136', 'UFATUN MUNAWAROH', 'LUMAJANG', '1998-09-07', 2, 1, 'SMAN JATIROTO', 8815564992, 1),
('KP0137', 'SITI HUSNUL HOLBU DEN HARUM', 'LUMAJANG', '1998-10-22', 2, 1, 'SMAN JATIROTO', 81559785637, 1),
('KP0138', 'ARINAL MILLAH', 'LUMAJANG', '1997-11-26', 2, 1, 'SMA UNGGULAN HAFSA ZAINUL HASAN', 85711370883, 1),
('KP0139', 'IMAM SYAFI I', 'LUMAJANG', '1998-04-04', 1, 1, 'MAN LUMAJANG', 85704853289, 1),
('KP0140', 'IMAM ARIEF BUSTOMI', 'LUMAJANG', '1998-02-20', 1, 1, 'SMKN TEMPEH', 85749040798, 1),
('KP0141', 'ARI RAMADHAN WAHYU SAPUTRA', 'LUMAJANG', '1998-01-16', 1, 1, 'SMA PGRI 1 LUMAJANG', 85604559913, 1),
('KP0142', 'DICKY BERTY FAUZI', 'LUMAJANG', '1997-12-06', 1, 1, 'SMKN 2 PROBOLINGGO', 85787382575, 1),
('KP0143', 'FEBBI SEPTIAN DWI KURNIAWAN', 'LUMAJANG', '1997-09-21', 1, 1, 'SMK N 1 LUMAJANG', 82334514746, 1),
('KP0144', 'MUHAMAD SUMARIYADI KURNIAWAN', 'LUMAJANG', '1998-03-20', 1, 1, 'SMK N 1 LUMAJANG', 87757493953, 1),
('KP0145', 'AXEL RAFIRDAUS', 'JEMBER', '1998-06-07', 1, 1, 'SMAK MGR. SOEGIJAPRANATA LUMAJANG', 82234696233, 1),
('KP0146', 'FARUK SYAFARUDIN SYAH', 'LUMAJANG', '1998-06-17', 1, 1, 'SMK N 1 LUMAJANG', 863665181, 1),
('KP0147', 'MISRATUN SAKILA', 'LUMAJANG', '1996-12-25', 2, 1, 'SMA N TEMPEH', 85607920875, 1),
('KP0148', 'M. ABDUL BASIR', 'LUMAJANG', '1996-06-11', 1, 1, 'MA MIFTAHUL MIDAD SUMBEREJO', 85338130637, 1),
('KP0149', 'FARIQ IGUSMAN', 'LUMAJANG', '1998-08-18', 1, 1, 'SMKN KLAKAH', 85604134508, 2),
('KP0150', 'FAUZAN MUTTAQIN', 'LUMAJANG', '1995-03-05', 1, 1, 'SMA COKROAMINOTO', 81937482420, 2),
('KP0151', 'AINUL YAQIN', 'LUMAJANG', '1998-01-08', 1, 1, 'SMKN KLAKAH', 8993464855, 2),
('KP0152', 'ZAENAL ARIFIN', 'LUMAJANG', '1996-12-23', 1, 1, 'SMA N PASIRIAN', 85854492620, 1),
('KP0153', 'MOCHAMAD ARIFIN', 'LUMAJANG', '1994-10-05', 1, 1, 'SMKN 1 LUMAJANG', 82333216537, 1),
('KP0154', 'MOHAMMAD HAFID NURHIDAYAH', 'LUMAJANG', '1998-02-18', 1, 1, 'SMKN TEKUNG', 85785468434, 1),
('KP0155', 'MOCHAMMAD  RIZAL ABDULLOH', 'LUMAJANG', '1991-12-18', 1, 1, 'SMA JENDERAL SUDIRMAN LUMAJANG', 8212093320, 1),
('KP0156', 'APRILLIA RISMANDA', 'LUMAJANG', '1997-04-18', 2, 1, 'SMKN 1 LUMAJANG', 82230093489, 1),
('KP0157', 'FEBRI KURNIAWAN', 'LUMAJANG', '1997-02-27', 1, 1, 'SMKN 1 LUMAJANG', 89609612225, 2),
('KP0158', 'DWI APRIAS HIDAYATURROHMAN', 'LUMAJANG', '1995-04-15', 1, 1, 'MA AL QODIRI', 8563830753, 1),
('KP0159', 'AKBAR TANZA ADIGUNA', 'LUMAJANG', '1998-01-31', 1, 1, 'SMK MUHAMMADIYAH JATIROTO', 81249586277, 2),
('KP0160', 'JEFRI DWI DERMAWAN', 'LUMAJANG', '1992-01-02', 1, 1, 'SMA N TEMPEH', 85785929559, 1),
('KP0161', 'EKA SARI REJALIA PUTRI', 'LUMAJANG', '1994-07-12', 2, 1, 'SMA N 1 LUMAJANG', 0, 1),
('KP0162', 'FRENGKI RUNGKAT', 'LUMAJANG', '1991-12-15', 1, 1, 'SMA N SENDURO', 0, 2),
('KP0163', 'AHMAD NABIL MAHDA', 'JEMBER', '1998-03-26', 1, 1, 'SMA N BALUNG', 85733937786, 1),
('KP0164', 'ADE RIZKY SOFYANTO', 'JOMBANG', '1998-01-09', 1, 1, 'SMKN PASIRIAN', 81336832672, 2),
('KP0165', 'AISYA EKA DEWANTI', 'LUMAJANG', '1998-04-18', 2, 1, 'SMA N TEMPEH', 85608813915, 1),
('KP0166', 'AHMAD IRFAK', 'LUMAJANG', '1997-02-06', 1, 1, 'SMK ASY SYARIFIY', 85746821829, 2),
('KP0167', 'SALAM DWI ARIYANTO', 'LUMAJANG', '1997-11-08', 1, 1, 'SMK ASY SYARIFIY', 85608401329, 2),
('KP0168', 'JEFRIE MAULANA SYAFI I', 'LUMAJANG', '1998-05-09', 1, 1, 'SMAN 3 LUMAJANG', 89619447624, 1),
('KP0169', 'ABYYU FAWWAS ABDUL KHALID', 'LUMAJANG', '1997-05-20', 1, 1, 'MA ZAINAL HASAN 1 GENGGONG', 82245516764, 1),
('KP0170', 'RATIH DWI WIDYAWATI', 'LUMAJANG', '1994-09-13', 2, 1, 'SMKN 1 LUMAJANG', 89631903332, 1),
('KP0171', 'ALWI AL JUFRI', 'LUMAJANG', '1996-07-18', 1, 1, 'SMK AL MALIKI SUKODONO', 85235583005, 1),
('KP0172', 'AHMAD FIHRI', 'LUMAJANG', '1997-09-08', 1, 1, 'SMK AL MALIKI SUKODONO', 85204228061, 2),
('KP0173', 'ANDIK ANDHIKA', 'DUKU', '1995-05-17', 1, 1, 'SMKN ROWOKANGKUNG', 85257460980, 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_mahasiswa`
--

CREATE TABLE `nilai_mahasiswa` (
  `no_pendaftaran` varchar(11) NOT NULL,
  `b_indo` varchar(5) NOT NULL,
  `b_inggris` varchar(5) NOT NULL,
  `mtk` varchar(5) NOT NULL,
  `geografi` varchar(5) NOT NULL,
  `sosiologi` varchar(5) NOT NULL,
  `ekonomi` varchar(5) NOT NULL,
  `fisika` varchar(5) NOT NULL,
  `biologi` varchar(5) NOT NULL,
  `kimia` varchar(5) NOT NULL,
  `produktif` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_mahasiswa`
--

INSERT INTO `nilai_mahasiswa` (`no_pendaftaran`, `b_indo`, `b_inggris`, `mtk`, `geografi`, `sosiologi`, `ekonomi`, `fisika`, `biologi`, `kimia`, `produktif`) VALUES
('KP0001', '', '', '', '', '', '', '', '', '', ''),
('KP0002', '', '', '', '', '', '', '', '', '', ''),
('KP0003', '', '', '', '', '', '', '', '', '', ''),
('KP0004', '', '', '', '', '', '', '', '', '', ''),
('KP0005', '', '', '', '', '', '', '', '', '', ''),
('KP0006', '', '', '', '', '', '', '', '', '', ''),
('KP0007', '', '', '', '', '', '', '', '', '', ''),
('KP0008', '', '', '', '', '', '', '', '', '', ''),
('KP0009', '', '', '', '', '', '', '', '', '', ''),
('KP0010', '', '', '', '', '', '', '', '', '', ''),
('KP0011', '', '', '', '', '', '', '', '', '', ''),
('KP0012', '', '', '', '', '', '', '', '', '', ''),
('KP0013', '', '', '', '', '', '', '', '', '', ''),
('KP0014', '', '', '', '', '', '', '', '', '', ''),
('KP0015', '', '', '', '', '', '', '', '', '', ''),
('KP0016', '', '', '', '', '', '', '', '', '', ''),
('KP0017', '', '', '', '', '', '', '', '', '', ''),
('KP0018', '', '', '', '', '', '', '', '', '', ''),
('KP0019', '', '', '', '', '', '', '', '', '', ''),
('KP0020', '', '', '', '', '', '', '', '', '', ''),
('KP0021', '', '', '', '', '', '', '', '', '', ''),
('KP0022', '', '', '', '', '', '', '', '', '', ''),
('KP0023', '', '', '', '', '', '', '', '', '', ''),
('KP0024', '', '', '', '', '', '', '', '', '', ''),
('KP0025', '', '', '', '', '', '', '', '', '', ''),
('KP0026', '', '', '', '', '', '', '', '', '', ''),
('KP0027', '', '', '', '', '', '', '', '', '', ''),
('KP0028', '', '', '', '', '', '', '', '', '', ''),
('KP0029', '', '', '', '', '', '', '', '', '', ''),
('KP0030', '', '', '', '', '', '', '', '', '', ''),
('KP0031', '', '', '', '', '', '', '', '', '', ''),
('KP0039', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `support_agama`
--

CREATE TABLE `support_agama` (
  `id` int(11) NOT NULL,
  `agama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `support_agama`
--

INSERT INTO `support_agama` (`id`, `agama`) VALUES
(1, 'Islam'),
(2, 'Katholik'),
(3, 'Kristen Protestan'),
(4, 'Hindu'),
(5, 'Budha'),
(6, 'Konghucu');

-- --------------------------------------------------------

--
-- Table structure for table `support_jk`
--

CREATE TABLE `support_jk` (
  `id` int(11) NOT NULL,
  `jenis_kelamin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `support_jk`
--

INSERT INTO `support_jk` (`id`, `jenis_kelamin`) VALUES
(1, 'Laki - Laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `support_program_studi`
--

CREATE TABLE `support_program_studi` (
  `id` int(11) NOT NULL,
  `program_studi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `support_program_studi`
--

INSERT INTO `support_program_studi` (`id`, `program_studi`) VALUES
(1, 'Teknik Sipil Kons. Geodesi'),
(2, 'Teknik Otomotif Elektronika');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'adminarema', 'Admin'),
(2, 'Surya Ilhamsyah', 'surya', 'Operator'),
(3, 'Mochamad Rahmadani', 'doni', 'Operator'),
(4, 'Mutrofin Rozaq, M.Pd', 'mutrofin', 'Operator'),
(5, 'Anis Siswanto, S.ST', 'pakanis', 'Operator'),
(6, 'Agus Hadichotmarno, MM', 'agus', 'Operator'),
(7, 'Ase Sarniati, S.Pd', 'ase', 'Operator'),
(8, 'Drs. M. Jamil', 'jamil', 'Operator'),
(9, 'Akhmad Maman Nafik, S.Pd', 'maman', 'Operator'),
(10, 'Sutran Mariyanto, S.T', 'sutran', 'Operator'),
(11, 'Rida Hifza Rosida, S.Pd', 'rida', 'Operator'),
(12, 'Endry Meydianto, S.Pd', 'endry', 'Operator'),
(13, 'Tofan Tri Oktora, S.Pd., M.Si', 'tofan', 'Operator'),
(14, 'Sumarin, M.Pd', 'sumarin', 'Operator'),
(15, 'Siswanto, S.Pd., M.Si', 'siswanto', 'Operator'),
(16, 'Irma Wahyuningsih, S.Pd', 'irma', 'Operator'),
(17, 'Ahmad Rosyid H', 'rosyid', 'Operator'),
(18, 'Widya Puspaningtari, S.Pd', 'tari', 'Operator'),
(19, 'Ula Saiful Rosid', 'ULA', 'Operator'),
(20, 'Drs. Purwadi Ikhtiarto', 'purwadi', 'Operator'),
(21, 'Didik Akhmad M., S.Pd', 'didik', 'Operator'),
(22, 'Abdi Sampurno, S.T', 'abdi', 'Operator'),
(23, 'M. Agung Pribadi, S.Pd', 'agung', 'Operator'),
(24, 'Drs. Dwi Nirwana, M.Pd', 'dwi', 'Operator'),
(25, 'Firdha Rizqi Yogithasari, S.T', 'firdha', 'Operator'),
(26, 'Zainul Ma arif, S.Pd.i', 'zainul', 'Operator'),
(27, 'Drs. Agus Sugiyono', 'agus', 'Operator'),
(28, 'David Premana Hadi, S.S', 'david', 'Operator'),
(29, 'Lukito Kurniawan, S.T', 'lukito', 'Operator'),
(30, 'Samsul Anwar, A.Md', 'samsul', 'Operator'),
(31, 'Feri Dwi Hermawa, S.Pd', 'feri', 'Operator'),
(32, 'Dra. Jumalah, M.Pd', 'jumalah', 'Operator'),
(33, 'Drs. Hendro Supratikno, M.M.Pd', 'hendro', 'Operator'),
(34, 'Agus Siswanto, S.ST., M.Si', 'agus', 'Operator'),
(35, 'Didik Dino Asmoro, S.ST', 'didik', 'Operator'),
(36, 'Shinta Aulia Rahmawati, S.Pd', 'shinta', 'Operator'),
(37, 'Kanti Setyo Rahajoe, S.Pd., MM', 'kanti', 'Operator'),
(38, 'Dra. Oetik Retno Oetari', 'oetik', 'Operator'),
(39, 'Khurrotul A yun, S.Pd', 'ayun', 'Operator'),
(40, 'Sumartini, S.Pd', 'sumartini', 'Operator');

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewmahasiswa`
--
CREATE TABLE `viewmahasiswa` (
`no_pendaftaran` varchar(6)
,`nama` varchar(50)
,`tempat_lahir` varchar(50)
,`tgl_lahir` date
,`jenis_kelamin` text
,`agama` text
,`sekolah_asal` varchar(50)
,`nomor_hp` bigint(13)
,`program_studi` text
,`alamat_rumah` varchar(50)
,`rt` int(11)
,`rw` int(11)
,`desa_kelurahan` varchar(50)
,`kode_pos` int(8)
,`kecamatan` varchar(25)
,`kabupaten_kota` varchar(25)
,`telp_rumah` int(12)
,`tahun_lulus` year(4)
,`nama_wali` varchar(30)
,`nama_ibu` varchar(30)
,`pekerjaan_ortu` varchar(30)
,`alamat_rumah_ortu` varchar(50)
,`rt_ortu` tinyint(2)
,`rw_ortu` tinyint(2)
,`desa_kelurahan_ortu` varchar(50)
,`kode_pos_ortu` int(8)
,`kecamatan_ortu` varchar(30)
,`kabupaten_kota_ortu` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewpendaftar`
--
CREATE TABLE `viewpendaftar` (
`no_pendaftaran` varchar(6)
,`nama` varchar(50)
,`tempat_lahir` varchar(50)
,`tgl_lahir` date
,`jenis_kelamin` text
,`agama` text
,`sekolah_asal` varchar(50)
,`nomor_hp` bigint(13)
,`program_studi` text
);

-- --------------------------------------------------------

--
-- Structure for view `viewmahasiswa`
--
DROP TABLE IF EXISTS `viewmahasiswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewmahasiswa`  AS  select `mahasiswa`.`no_pendaftaran` AS `no_pendaftaran`,`mahasiswa`.`nama` AS `nama`,`mahasiswa`.`tempat_lahir` AS `tempat_lahir`,`mahasiswa`.`tgl_lahir` AS `tgl_lahir`,`support_jk`.`jenis_kelamin` AS `jenis_kelamin`,`support_agama`.`agama` AS `agama`,`mahasiswa`.`sekolah_asal` AS `sekolah_asal`,`mahasiswa`.`nomor_hp` AS `nomor_hp`,`support_program_studi`.`program_studi` AS `program_studi`,`detail_mahasiswa`.`alamat_rumah` AS `alamat_rumah`,`detail_mahasiswa`.`rt` AS `rt`,`detail_mahasiswa`.`rw` AS `rw`,`detail_mahasiswa`.`desa_kelurahan` AS `desa_kelurahan`,`detail_mahasiswa`.`kode_pos` AS `kode_pos`,`detail_mahasiswa`.`kecamatan` AS `kecamatan`,`detail_mahasiswa`.`kabupaten_kota` AS `kabupaten_kota`,`detail_mahasiswa`.`telp_rumah` AS `telp_rumah`,`detail_mahasiswa`.`tahun_lulus` AS `tahun_lulus`,`detail_mahasiswa`.`nama_wali` AS `nama_wali`,`detail_mahasiswa`.`nama_ibu` AS `nama_ibu`,`detail_mahasiswa`.`pekerjaan_ortu` AS `pekerjaan_ortu`,`detail_mahasiswa`.`alamat_rumah_ortu` AS `alamat_rumah_ortu`,`detail_mahasiswa`.`rt_ortu` AS `rt_ortu`,`detail_mahasiswa`.`rw_ortu` AS `rw_ortu`,`detail_mahasiswa`.`desa_kelurahan_ortu` AS `desa_kelurahan_ortu`,`detail_mahasiswa`.`kode_pos_ortu` AS `kode_pos_ortu`,`detail_mahasiswa`.`kecamatan_ortu` AS `kecamatan_ortu`,`detail_mahasiswa`.`kabupaten_kota_ortu` AS `kabupaten_kota_ortu` from ((((`mahasiswa` join `detail_mahasiswa` on((`mahasiswa`.`no_pendaftaran` = `detail_mahasiswa`.`no_pendaftaran`))) join `support_agama` on((`mahasiswa`.`agama` = `support_agama`.`id`))) join `support_jk` on((`mahasiswa`.`jenis_kelamin` = `support_jk`.`id`))) join `support_program_studi` on((`mahasiswa`.`program_studi` = `support_program_studi`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `viewpendaftar`
--
DROP TABLE IF EXISTS `viewpendaftar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewpendaftar`  AS  select `mahasiswa`.`no_pendaftaran` AS `no_pendaftaran`,`mahasiswa`.`nama` AS `nama`,`mahasiswa`.`tempat_lahir` AS `tempat_lahir`,`mahasiswa`.`tgl_lahir` AS `tgl_lahir`,`support_jk`.`jenis_kelamin` AS `jenis_kelamin`,`support_agama`.`agama` AS `agama`,`mahasiswa`.`sekolah_asal` AS `sekolah_asal`,`mahasiswa`.`nomor_hp` AS `nomor_hp`,`support_program_studi`.`program_studi` AS `program_studi` from (((`mahasiswa` join `support_agama` on((`mahasiswa`.`agama` = `support_agama`.`id`))) join `support_jk` on((`mahasiswa`.`jenis_kelamin` = `support_jk`.`id`))) join `support_program_studi` on((`mahasiswa`.`program_studi` = `support_program_studi`.`id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catatan_dinamis`
--
ALTER TABLE `catatan_dinamis`
  ADD PRIMARY KEY (`id_catatan`);

--
-- Indexes for table `detail_mahasiswa`
--
ALTER TABLE `detail_mahasiswa`
  ADD PRIMARY KEY (`no_pendaftaran`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`no_pendaftaran`);

--
-- Indexes for table `nilai_mahasiswa`
--
ALTER TABLE `nilai_mahasiswa`
  ADD PRIMARY KEY (`no_pendaftaran`);

--
-- Indexes for table `support_agama`
--
ALTER TABLE `support_agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catatan_dinamis`
--
ALTER TABLE `catatan_dinamis`
  MODIFY `id_catatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
