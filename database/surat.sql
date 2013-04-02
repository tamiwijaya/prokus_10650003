-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2013 at 02:44 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `surat`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `jumlahSurat`(out param1 int)
begin
select count(*) into param1 from surat_masuk;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `jumlahSuratKeluar`(out param1 int)
begin
select count(*) into param1 from surat_keluar;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'tami', 'tami');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `tanggal_artikel` date NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(40) NOT NULL,
  `contents` text NOT NULL,
  `category` varchar(20) NOT NULL,
  PRIMARY KEY (`id`,`title`,`category`),
  KEY `category` (`category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `tanggal_artikel`, `title`, `image`, `contents`, `category`) VALUES
(1, '2013-04-04', 'Visi-Misi Departemen Agama', '', '<p>Visi dan Misi serta sejarah Kementerian Agama sebagai berikut:</p>\r\n<p>VISI</p>\r\n<p>“Terwujudnya masyarakat Indonesia yang TAAT BERAGAMA, RUKUN, CERDAS, MANDIRI DAN SEJAHTERA LAHIR BATIN.”\r\n(Keputusan Menteri Agama Nomor 2 Tahun 2010)</p>\r\n<p>MISI</p>\r\n<p>1.Meningkatkan kualitas kehidupan beragama.</p>\r\n<p>2. Meningkatkan kualitas kerukunan umat beragama.</p>\r\n<p> 3. Meningkatkan kualitas raudhatul athfal, madrasah, perguruan tinggi agama, pendidikan agama, dan pendidikan keagamaan.</p>\r\n<p>4. Meningkatkan kualitas penyelenggaraan ibadah haji.</p>\r\n<p>5. Mewujudkan tata kelola kepemerintahan yang bersih dan berwibawa.</p>', 'Berita'),
(3, '0000-00-00', 'Sejarah Koperasi Indonesia', '', '<p style="text-align: justify;">Sejarah singkat gerakan koperasi bermula pada abad ke-20 yang pada umumnya merupakan hasil dari usaha yang tidak spontan dan tidak dilakukan oleh orang-orang yang sangat kaya. Koperasi tumbuh dari kalangan rakyat, ketika penderitaan dalam lapangan ekonomi dan sosial yang ditimbulkan oleh sistem kapitalisme semakin memuncak. Beberapa orang yang penghidupannya sederhana dengan kemampuan ekonomi terbatas, terdorong oleh penderitaan dan beban ekonomi yang sama, secara spontan mempersatukan diri untuk menolong dirinya sendiri dan manusia sesamanya.<br /><br />Pada tahun 1896 seorang Pamong Praja Patih R.Aria Wiria Atmaja di Purwokerto mendirikan sebuah Bank untuk para pegawai negeri (priyayi). Ia terdorong oleh keinginannya untuk menolong para pegawai yang makin menderita karena terjerat oleh lintah darat yang memberikan pinjaman dengan bunga yang tinggi. Maksud Patih tersebut untuk mendirikan koperasi kredit model seperti di Jerman. Cita-cita semangat tersebut selanjutnya diteruskan oleh De Wolffvan Westerrode, seorang asisten residen Belanda. De Wolffvan Westerrode sewaktu cuti berhasil mengunjungi Jerman dan menganjurkan akan mengubah Bank Pertolongan Tabungan yang sudah ada menjadi Bank Pertolongan, Tabungan dan Pertanian. Selain pegawai negeri juga para petani perlu dibantu karena mereka makin menderita karena tekanan para pengijon. Ia juga menganjurkan mengubah Bank tersebut menjadi koperasi. Di samping itu ia pun mendirikan lumbung-lumbung desa yang menganjurkan para petani menyimpan pada pada musim panen dan memberikan pertolongan pinjaman padi pada musim paceklik. Ia pun berusaha menjadikan lumbung-lumbung itu menjadi Koperasi Kredit Padi. Tetapi Pemerintah Belanda pada waktu itu berpendirian lain. Bank Pertolongan, Tabungan dan Pertanian dan Lumbung Desa tidak dijadikan Koperasi tetapi Pemerintah Belanda membentuk lumbung-lumbung desa baru, bank&ndash;bank Desa, rumah gadai dan Centrale Kas yang kemudian menjadi Bank Rakyak Indonesia (BRI). Semua itu adalah badan usaha Pemerntah dan dipimpin oleh orang-orang Pemerintah.<br /><br />Pada zaman Belanda pembentuk koperasi belum dapat terlaksana karena:<br /><br />1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Belum ada instansi pemerintah ataupun badan non pemerintah yang memberikan penerangan dan penyuluhan tentang koperasi.<br /><br />2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Belum ada Undang-Undang yang mengatur kehidupan koperasi.<br /><br />3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pemerintah jajahan sendiri masih ragu-ragu menganjurkan koperasi karena pertimbangan politik, khawatir koperasi itu akan digunakan oleh kaum politik untuk tujuan yang membahayakan pemerintah jajahan itu.<br /><br />Pada tahun 1908, Budi Utomo yang didirikan oleh Dr. Sutomo memberikan peranan bagi gerakan koperasi untuk memperbaiki kehidupan rakyat. Pada tahun 1915 dibuat peraturan Verordening op de Cooperatieve Vereeniging, dan pada tahun 1927 Regeling Inlandschhe Cooperatieve. <br /><br />Pada tahun 1927 dibentuk Serikat Dagang Islam, yang bertujuan untuk memperjuangkan kedudukan ekonomi pengusah-pengusaha pribumi. Kemudian pada tahun 1929, berdiri Partai Nasional Indonesia yang memperjuangkan penyebarluasan semangat koperasi.<br /><br />Namun, pada tahun 1933 keluar UU yang mirip UU no. 431 sehingga mematikan usaha koperasi untuk yang kedua kalinya. Pada tahun 1942 Jepang menduduki Indonesia. Jepang lalu mendirikan koperasi kumiyai. Awalnya koperasi ini berjalan mulus. Namun fungsinya berubah drastis dan menjadi alat Jepang untuk mengeruk keuntungan, dan menyengsarakan rakyat Indonesia.<br /><br />Setelah Indonesia merdeka, pada tanggal 12 Juli 1947, pergerakan koperasi di Indonesia mengadakan Kongres Koperasi yang pertama di Tasikmalaya.&nbsp; Hari ini kemudian ditetapkan sebagai Hari Koperasi Indonesia. Sumber: http://id.wikipedia.org/wiki/Koperasi</p>', 'Berita'),
(4, '2013-04-06', 'Sejarah Kementerian Agama Indonesia', '', '<p style="text-align: justify;"><p>Masa Penjajahan Belanda</p>\r\nPada masa penjajahan Belanda, beberapa masalah yang berhubungan dengan urusan keagamaan terpencar-pencar ke beberapa kantor. Masalah haji, perkawinan, dan pendidikan agama berada di bawah naungan Departement van Binnenlands Bestuur (dipimpin oleh seorang Kepala Urusan Pemerintahan Umum atau Directeur van Binnenlandsch Bestuur, dan kantor untuk urusan bumiputera (Het Kantoor voor Inlandsche Zaken). Adapun hal-hal yang berhubungan dengan hukum agama ditangani oleh peradilan agama (raad agama) dan peradilan umum (raad van justitie).<br /><br />Masa Pendudukan Jepang:<br /><br />&nbsp;&nbsp;&nbsp; Selanjutnya, pada masa pendudukan Jepang Departement van Binnenland Bestuur diubah menjadi Badan Urusan Internal yang serupa di pemerintah daerah setingkat prefektur di Jepang. Naimubu berada di bawah naungan militer Jepang yang dipimpin oleh seorang Panglima Tentara Keenambelas, dalam hal ini oleh Kepala Pemerintahan Militer (gunseikan) (jabatan fungsional kepala staf)yang terdiri atas beberapa penasihat ..<br /><br /><br />.<br /><br /><br /><br /><br /></p>', 'Berita');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE IF NOT EXISTS `surat_keluar` (
  `id_surat` int(5) NOT NULL,
  `no_surat` varchar(25) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tujuan_surat` varchar(50) NOT NULL,
  `pengirim_surat` varchar(50) NOT NULL,
  `prihal_surat` varchar(200) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `file_surat` varchar(30) NOT NULL,
  PRIMARY KEY (`id_surat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_surat`, `no_surat`, `tgl_surat`, `tujuan_surat`, `pengirim_surat`, `prihal_surat`, `tahun`, `file_surat`) VALUES
(0, '19/april/2013', '2014-04-19', 'Tami', 'Depag', 'Penerimaan Tawaran', '2013', ''),
(1, '12/maret/2013', '2013-03-04', 'depag jogja', 'depag purwokerto', 'panggilan', '2013', 'E:acaan101-291-1-SM.pdf'),
(2, '23/maret/2014', '2014-03-23', 'Depag Banyumas', 'Kabag Depag Banyumas', 'Tawaran', '2014', 'E:HPsimbahimg016,.jpg'),
(3, '23/maret/2014', '2014-03-23', 'Depag Banyumas', 'Kabag Depag Banyumas', 'Tawaran', '2014', 'E:HPsimbahimg016,.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE IF NOT EXISTS `surat_masuk` (
  `id_surat` int(5) NOT NULL,
  `no_surat` varchar(25) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_surat_diterima` date NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `prihal_surat` varchar(200) NOT NULL,
  `disposisi` varchar(100) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `file_surat` varchar(50) NOT NULL,
  PRIMARY KEY (`id_surat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat`, `no_surat`, `tgl_surat`, `tgl_surat_diterima`, `pengirim`, `prihal_surat`, `disposisi`, `tahun`, `file_surat`) VALUES
(0, '12/April/2012', '2013-04-12', '2013-04-17', 'Tami', 'Tawaran', 'Kabag Depag', '2013', ''),
(1, '12/maret/2013', '2013-03-04', '2013-03-07', 'depag jogja', 'panggilan', 'kabag depag purwokerto', '2013', 'E:acaan9-Routing.pdf'),
(2, '22/maret/2014', '2014-03-22', '2014-03-26', 'Depag Purworejo', 'Kerja Sama', 'Kabag Depag Purworejo', '2014', 'E:kerjaanA&A yellow bloom.JPG'),
(3, '22/maret/2014', '2014-03-22', '2014-03-26', 'Depag Purworejo', 'ehem', 'Kabag Depag Purworejo', '2014', 'C:UserscompaqDocumentsNitip.docx'),
(4, '12/maret/2013', '2013-03-04', '2013-03-07', 'depag jogja', 'panggilan', 'kabag depag purwokerto', '2013', 'E:acaan9-Routing.pdf'),
(5, '12/maret/2013', '2013-03-04', '2013-03-07', 'depag jogja', 'panggilan', 'kabag depag purwokerto', '2013', 'E:acaan9-Routing.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nomor` int(5) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`nomor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nomor`, `nip`, `nama`, `jabatan`, `alamat`, `telepon`, `password`) VALUES
(1, '1988010389809', 'heri iswanto', 'kabag', 'jln diponegoro', '085664268751', '1988010389809');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
