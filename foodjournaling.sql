-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jul 2023 pada 05.29
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodjournaling`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `idartikel` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `waktu` date NOT NULL,
  `penulis` varchar(45) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `user_iduser` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`idartikel`, `judul`, `waktu`, `penulis`, `isi`, `foto`, `user_iduser`) VALUES
(2, 'MANFAAT MENGONSUMSI MAKANAN SEHAT', '2023-07-14', 'admin', 'Konsumsi makanan sehat tiap harinya sangat diperlukan tubuh untuk memenuhi asupan nutrisi tubuh.\r\n\r\n Lalu, apakah yang dimaksud dengan makanan sehat? Makanan sehat diartikan sebagai makanan yang memiliki kombinasi variasi makanan sehingga mengandung berbagai nutrisi. Makanan sehat yang seimbang yaitu terdiri dari karbohidrat, protein, lemak, vitamin dan mineral. Konsumsi makanan yang sehat mampu menjaga tubuh dari berbagai penyakit tidak menular, seperti penyakit jantung diabetes dan kanker.\r\nBeberapa jenis pilihan makanan sehat yaitu: sayur-sayuran seperti brokoli, kale, buah-buahan, daging dan telur, kacang-kacangan dan biji-bijian, susu, ikan dan makanan laut lainnya. Diet yang sehat tentunya disertai dengan mengurangi konsumsi garam, gula serta lemak jenuh dan lemak trans yang diproduksi secara industri.\r\n', 'images_(8)1.jpeg', 1),
(3, 'Benarkah Makanan Bisa Bikin Kita Bahagia????? Ini Penjelasan Ilmiahnya.', '2023-07-08', 'admin', '\r\nPernahkah ketika setelah makan, mood berubah menjadi lebih bahagia? Ternyata hal itu dipengaruhi oleh makanan yang memproduksi nutrisi tertentu, lho. Mengutip BBC, nutrisi yang terkandung dalam makanan dapat meningkatkan produksi bahan kimia untuk perasaan baik tubuh yakni serotonin dan dopamin. Serotonin merupakan yang mengatur suasana hati dan meningkatkan kualitas tidur. Sedangkan dopamin mengatur motivasi, perhatian, dan penghargaan emosional. Kepuasan yang kamu rasakan ketika mencapai suatu tujuan sebagian disebabkan oleh aliran dopamin. ketika dopamin rendah, akan dikaitkan dengan hilangnya minat.\r\nBenarkah Makanan Bisa Mempengaruhi Perasaan?\r\nSelama bertahun-tahun, para peneliti telah memperlakukan apakah makanan yang dimakan berperan dalam emosi. Ilmu pengetahuan telah membuktikan bahwa apa yang dimasukkan ke dalam mulut bisa mempengaruhi apa yang keluar dari kepala kita.\r\nAhli gizi Wesley Delbridge mengatakan, \"Kami menyadari pencernaan (usus) kami berbicara ke otak kami dan itu dapat memiliki efek besar pada suasana hati kami dan emosi yang kami alami,\" katanya dikutip dari USA Today. \"Jika usus Anda bahagia, maka Anda akan lebih bahagia,\" imbuhnya.\r\nMakanan yang Berperan Baik dalam Mengatur Suasana Hati\r\n1. Salmon\r\nSalmon mengandung asam lemak omega 3 yang terbukti meningkatkan mood. Dijelaskan Wesley Delbridge, bahwa Omega 3s, memainkan bagian penting dari produksi sel tubuh bahkan memberikan penampilan kebahagiaan.\r\n2. Cokelat Hitam\r\nCokelat hitam memiliki banyak manfaat kesehatan, termasuk mengurangi stres emosional, menurut penelitian American Chemical Society pada 2009. Ahli gizi Sonya Angelone mengatakan cokelat hitam meningkatkan mood karena meningkatkan kadar endorfin. Angelone menyarankan untuk memilih cokelat hitam dengan setidaknya 70% kakao.\r\n3. Makanan yang mengandung Probiotik\r\nProbiotik adalah bakteri yang hidup di usus kita dan dikenal untuk membantu pencernaan, meningkatkan sistem kekebalan tubuh, dan membersihkan usus kita. Mereka adalah kontributor utama kesehatan sumbu usus-otak dan memiliki efek menenangkan pada tubuh dan secara khusus membantu agresi, kata Delbridge. Misalnya susu fermentasi yang mengandung probiotik seperti kefir, asinan kubis, kimchi, acar, dan yoghurt.\r\nNah, itulah penjelasan tentang bagaimana makanan bisa mempengaruhi perasaan manusia bahkan bisa membuat bahagia. Semoga menambah wawasan detikers, ya!\r\n', 'images_(10)1.jpeg', 1),
(4, 'Penyebab Alergi Makanan', '2023-07-13', 'Admin', 'Alergi makanan adalah kondisi saat sistem kekebalan tubuh secara keliru menganggap suatu zat seperti protein dalam makanan tertentu berbahaya bagi tubuh. Akibatnya, sistem kekebalan tubuh akan bereaksi terhadap zat makanan yang tergolong berbahaya tersebut, atau alergen. Bahkan sejumlah kecil makanan penyebab alergi dapat memicu tanda dan gejala seperti masalah pencernaan, gatal-gatal atau saluran udara bengkak.\r\nPada sebagian orang, alergi ini dapat menyebabkan gejala parah atau bahkan reaksi yang mengancam jiwa yang bernama anafilaksis. Selain itu, kondisi ini dapat bersifat akut atau tiba-tiba, tetapi dapat juga bersifat kronis atau berlangsung dalam waktu yang lama.\r\nAlergi makanan sering kali tertukar dengan kondisi kesehatan lain yaitu intoleransi makanan. Meski begitu, keduanya merupakan kondisi kesehatan yang berbeda. Sebab intoleransi makanan merupakan reaksi dari sistem pencernaan. Tidak ada kaitannya dengan antibodi seperti alergi pada makanan.\r\n\r\nTak sedikit orang yang kesulitan menemukan penyebab alergi yang mereka alami. Namun, kondisi tersebut biasanya terjadi akibat hal berikut:\r\n\r\nAntibodi adalah protein khusus yang diproduksi oleh sistem kekebalan untuk melindungi tubuh. Nah, antibodi bekerja dengan mengidentifikasi potensi berbahaya yang mengancam tubuh, seperti bakteri dan virus. Tugas antibodi memberi sinyal ke sistem kekebalan untuk melepaskan bahan kimia untuk membunuh ancaman dan mencegah penyebaran infeksi.\r\nPada jenis alergi yang paling umum, antibodi yang dikenal sebagai imunoglobulin E (IgE), secara keliru menargetkan protein tertentu yang ada dalam makanan sebagai ancaman. IgE dapat menyebabkan beberapa bahan kimia terlepas, yang paling penting adalah histamin.\r\n', 'foto_artikel_31.jpg', 1),
(5, 'Antibodi adalah protein khusus yang diproduksi oleh sistem kekebalan tubuh.', '2023-07-22', 'Author', '	Tahukah Anda apa manfaat vitamin C bagi kesehatan tubuh? Vitamin C atau yang dikenal dengan asam askorbat membantu tubuh dalam pembentukan jaringan dan sistem pertahanan tubuh. Asupan vitamin C yang cukup juga dapat membantu seseorang terlindungi dari serangan penyakit. Namun, tidak hanya sampai situ saja, masih banyak manfaat vitamin C bagi tubuh yang mungkin belum Anda ketahui. Berikut penjelasan lengkapnya. \r\n	Fungsi vitamin C dalam tubuh cukup penting, tidak hanya bagi tubuh tetapi juga untuk kulit. Nutrisi ini berperan besar mendukung daya tahan tubuh serta kesehatan kulit. Tidak hanya itu, masih ada beberapa khasiat vitamin C bagi tubuh yang bisa Anda dapatkan, berikut di antaranya. \r\n\r\n\r\n1. Membantu Mengelola Tekanan Darah Tinggi\r\n\r\n	Apabila Anda memiliki riwayat hipertensi esensial/primer, cobalah untuk mengonsumsi makanan atau minuman yang kaya akan vitamin C. Dalam berbagai penelitian (yang masih terbatas), ditunjukkan bahwa mengonsumsi vitamin C dapat membantu menurunkan tekanan darah, tak terkecuali pada penderita hipertensi, di mana tekanan sistolik dan diastolik turun signifikan dengan suplementasi vitamin C >= 500 mg/hari. Suplemen vitamin C juga diketahui mampu menurunkan tekanan darah sistolik sebanyak 4,9 mmHg dan diastolik sebesar 1,7 mmHg.\r\n\r\n\r\n2. Meningkatkan Kekebalan Tubuh\r\n	\r\n	Manfaat vitamin C selanjutnya adalah meningkatkan kekebalan tubuh, yaitu dengan cara meningkatkan fungsi sel darah putih (limfosit dan neutrofil). Selain kekebalan pada tubuh, vitamin C juga memperkuat pertahanan sel epitel kulit. Mengingat fungsi kulit cukup krusial, yaitu melindungi tubuh dari udara, lingkungan, hingga bakteri dan mikroba lain. Dan sebagai antioksidan, vitamin C turut melindungi sel kekebalan tubuh dari kerusakan yang disebabkan oleh radikal bebas. \r\n\r\n\r\n3. Mencegah Tubuh Kekurangan Zat Besi\r\n         \r\n	Apabila tubuh kekurangan zat besi, maka akan terjadi anemia defisiensi besi, yaitu kondisi di mana sel darah merah tidak memiliki cukup zat besi. Perlu Anda ketahui bahwa sel darah merah memerlukan zat besi untuk mengikat oksigen dan mengedarkannya ke seluruh tubuh. Jadi, apabila terjadi defisiensi besi, maka peredaran oksigen akan terhambat. Nah, Anda dapat mencegah hal tersebut dengan mencukupi kebutuhan vitamin C, karena proses penyerapan zat besi oleh tubuh meningkat dengan adanya vitamin C pada saluran pencernaan.\r\n\r\n\r\n4. Mengurangi Risiko Penyakit\r\n         \r\n	Salah satu kegunaan vitamin C yang cukup penting adalah sebagai antioksidan alami bagi tubuh. Antioksidan akan melindungi berbagai sel tubuh dari radikal bebas.\r\n		Tanpa adanya antioksidan, maka sel tubuh akan lebih rentan mengalami mutasi atau kerusakan yang dapat memberikan efek bahaya, seperti penyakit jantung hingga kanker. Karena itu, asupan vitamin C yang cukup sebagai antioksidan dapat membantu tubuh mengurangi risiko penyakit.\r\n\r\n\r\n5. Menjaga Kekencangan Kulit\r\n       \r\n	Selain untuk tubuh, khasiat vitamin C juga bisa dirasakan pada kulit. Vitamin ini dapat mendorong produksi kolagen dan melindungi sel kulit dari kerusakan. Kolagen merupakan salah satu protein utama pembentuk struktur kulit, di mana produksinya dapat menurun akibat radikal bebas dari lingkungan dan penuaan. Nah, manfaat vitamin C untuk kulit adalah membantu mempertahankan produksi kolagen sehingga kulit tetap tampak sehat dan kencang.\r\n\r\n\r\n	Nah, itu dia pembahasan mengenai manfaat vitamin C bagi tubuh. Jika dilihat dari penjelasan diatas, peran vitamin C memang cukup penting bagi tubuh. Karena itu, tidak ada salahnya jika Anda mengoptimalkan asupan vitamin C dalam makanan dan minuman. Selain mengoptimalkan asupan vitamin C, dalam menjaga kesehatan tubuh, tidak ada salahnya Anda melakukan pemeriksaan rutin.\r\n', 'foto_artikel_41.jpg', 1),
(12, 'Tips menjaga pola hidup yang sehat', '2023-07-20', 'Admin', '	Pola hidup sehat merupakan suatu kebutuhan yang tidak dapat ditinggalkan oleh seluruh orang. Serta pola hidup ini menjadi tren pada masa sekarang ini. Hal ini dikarenakan pada jaman ini semakin banyak timbul penyakit – penyakit baru.Sehat dalam arti mendasar adalah segala hal yang kita lakukan memberikan hasil/dampak yang baik bagi tubuh kita. Gaya pola hidup sehat merupakan suatu pilihan yang sangat tepat untuk melangsungkan kehidupan kita, sedangkan pola hidup sehat adalah jalan yang harus di jalani untuk memperoleh fisik yang sehat serta jasmani dan rohani. Jadi sesungguhnya hal utama dari kesehatan adalah gaya hidup sehat yang menopang kesehatan kita saat ini, karena dengan gaya hidup sehat maka akan menciptakan pola hidup sehat yang secara otomatis kita lakukan. \r\n\r\n	Maka dari itu, sangatlah penting kita menjaga pola hidup sehat. Contohnya mengatur pola hidup secara jasmani yaitu mengatur pola makan yang baik, yaitu sarapan setiap pagi (dianjurkan jika sarapan tidak boleh memakan makanan instan, berminyak banyak dan mengandung tepung yang berlebihan), karena bisa menyebabkan obesitas. Makan siang dianjurkan dengan tambahan buah-buahan, serta makan malam yang tidak melebihi batas jam makan malam. Yang kedua berolahraga setiap pagi, agar kita bisa menghirup segarnya udara pagi yang masih belum tercemar dengan polusi-polusi yang ada di lingkungan sekitar.Yang ketiga minum air putih yang cukup (8 gelasatau 2 liter) perhari.Yang keempat mengindari penggunaan zat-zat berbahaya seperti merokok, minuman beralkohol, serta jenis-jenis narkoba.Yang ke-lima membersihkan seluruh lingkungan sekitar (seperti sampah yang menumpuk dibuang ditempat pembuangan, bakmandi yang sudah mulai kotor di kuras, dan lain-lain).Dan yang teakhir yaitu istirahat yang cukp (kuranglebih 8 jam perharinya.\r\n\r\n	Pola hidup sehat secara rohani yaitu selalu bersyukur dan bahagia atas nikmat yang diterimanya, merasa cukup, sabar, ikhlas dan tenang, turut bahagia atau tidak iri saat orang lain mendapatkan kebahagiaan, serta berusaha menjadi yang tebaik bagi orang lain. Tidak memiliki penyakit hati atau dendam sudah termasuk orang sehat secara rohani.\r\n\r\n	Manfaat pola hidup sehat yaitu sebagai bentuk dari proses tumbuh dan berkembangnya manusia. Manusia membutuhkan pola hidup sehat untuk meningkatkan kualitas diri agar dapat hidup lebih lama dengan sehat dan mandiri. Kehidupan yang lebih baik juga nantinya akan di dapat jika manusia mampu memenuhi kebutuhan tubuhny adengan sumber makanan yang sehat dan tidak terkontaminasi bahan makanan kimia yang dapat merusak organ – organ tubuh. Contoh manfaat yang mendetail yang dapat diperoleh saat kita melakukan dan menerapkan pola hidup sehat dalam kehidupan sehari – hari :\r\n\r\n- Dapat tidur lebih nyenyak\r\n- Dapat belajar lebih baik\r\n- Merasa damai dan tenang\r\n- Dapat berpikir sehat\r\n- Berkehidupan dan berinteraksi social denganbaik\r\n- Terhindar dari berbagai penyakit\r\n- Tentunya lebih bahagia dan terlihat bugar\r\n\r\nSekian dan Terima Kasih.', 'foto_artikel_1.png', 1),
(10, 'asfafa', '2023-07-13', 'fasf', 'asfafsa', '', 1),
(11, 'geegfdg', '2023-07-13', 'gehrthd', 'trehy5e', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bab`
--

CREATE TABLE `bab` (
  `idbab` int(11) NOT NULL,
  `skala_bristol` varchar(45) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ket` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bab`
--

INSERT INTO `bab` (`idbab`, `skala_bristol`, `foto`, `ket`) VALUES
(1, '1', '1.png', 'berbentuk seperti batu kerikil.'),
(2, '2', '2.png', 'berbentuk seperti sosis kecil dengan benjolan-benjolan.'),
(3, '3', '3.png', 'tekstur cukup padat'),
(4, '4', '4.png', 'tekstur terlihat lembut'),
(5, '5', '5.png', 'potongan-potongan kecil'),
(6, '6', '6.png', 'tekstur agak berair'),
(7, '7', '7.png', 'tekstur cair');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan`
--

CREATE TABLE `bahan` (
  `idbahan` int(11) NOT NULL,
  `nama_bahan` varchar(1000) NOT NULL,
  `id_makanan_minuman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bahan`
--

INSERT INTO `bahan` (`idbahan`, `nama_bahan`, `id_makanan_minuman`) VALUES
(1, 'micin', 1),
(2, 'nasi', 1),
(3, 'daging ayam', 2),
(4, 'penyedap', 2),
(5, 'ketchup', 2),
(8, 'asam jawa', 2),
(9, 'mie', 11),
(10, 'micin', 11),
(11, 'garam', 11),
(12, 'merica', 11),
(13, 'nasi', 12),
(14, 'merica', 12),
(15, 'boncabe', 12),
(16, 'kecap', 12),
(18, 'sayur hijau', 13),
(19, 'micin', 13),
(20, 'kol', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan_harian`
--

CREATE TABLE `catatan_harian` (
  `idcatatan_harian` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `catatan` text DEFAULT NULL,
  `user_iduser` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `catatan_harian`
--

INSERT INTO `catatan_harian` (`idcatatan_harian`, `waktu`, `catatan`, `user_iduser`) VALUES
(5, '2023-06-05 07:58:00', 'Hari ini saya main basket selama 3 jam', 2),
(7, '2023-06-13 14:25:00', 'Mancing di pantai sekitar 3 jam', 2),
(8, '2023-06-21 02:26:00', 'Mencari kodok di sawah', 2),
(9, '2023-06-20 07:43:00', 'hari ini saya mendaki gunung everest', 2),
(10, '2023-07-10 01:44:00', 'hari ini saya tidur seharian', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan_minuman`
--

CREATE TABLE `makanan_minuman` (
  `id_makanan` int(11) NOT NULL,
  `nama_makanan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `makanan_minuman`
--

INSERT INTO `makanan_minuman` (`id_makanan`, `nama_makanan`) VALUES
(2, 'bakso ayam'),
(7, 'bakwan'),
(13, 'cap cay'),
(5, 'french fries'),
(11, 'mie goreng jawa'),
(1, 'nasi goreng'),
(12, 'nasi goreng bogor'),
(3, 'pizza'),
(8, 'rujak'),
(4, 'sayur kelor'),
(6, 'tempe mendoan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan_umum`
--

CREATE TABLE `makanan_umum` (
  `idmakanan_umum` int(11) NOT NULL,
  `nama_makanan` varchar(45) NOT NULL,
  `deskripsi` text NOT NULL,
  `kalori` float NOT NULL,
  `foto` varchar(100) NOT NULL,
  `protein` float NOT NULL,
  `lemak` float NOT NULL,
  `vit_mineral` text NOT NULL,
  `user_iduser` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `makanan_umum`
--

INSERT INTO `makanan_umum` (`idmakanan_umum`, `nama_makanan`, `deskripsi`, `kalori`, `foto`, `protein`, `lemak`, `vit_mineral`, `user_iduser`) VALUES
(1, 'kelor', '', 100, 'foto_artikel_411.jpg', 30, 50, 'vddjhasvhd', 1),
(2, 'Sayur lodeh.', '', 455, 'foto_artikel_211.jpg', 25, 54, 'vit C, zat besi, alumunium', 1),
(4, 'Brokoli', '', 10, 'foto_artikel_54.jpg', 10, 10, 'vitamin c,  magnesium , besi, vitamin b6, cobalamin, vitamin d, kalsium.', 1),
(5, 'wortel', '', 20, 'foto_artikel_31.jpg', 20, 20, 'vitamin b , vitamin z,  vitamin p, kalsium, magnesium, trapesium', 1),
(6, 'daging sapi.', '', 600, 'foto_artikel_12.png', 600, 300, '- vit k\r\n- vit u\r\n- vit q', 1),
(7, 'test', '', 20, 'food_icon.jpg', 20, 20, 'test', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mood`
--

CREATE TABLE `mood` (
  `idmood` int(11) NOT NULL,
  `nama_mood` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ket` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `mood`
--

INSERT INTO `mood` (`idmood`, `nama_mood`, `foto`, `ket`) VALUES
(1, 'gembira', 'bahagia.png', 'gembira cuy'),
(2, 'sedih', 'sedih.png', NULL),
(3, 'biasa', 'biasa.png', NULL),
(4, 'swing', 'swing.png', 'istilah yang digunakan untuk menggambarkan perubahan suasana hati yang terjadi dengan cepat dan intens'),
(5, 'rewel', 'rewel.png', 'dikit dikit nangis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `symptom`
--

CREATE TABLE `symptom` (
  `idsymptom` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `nama_symptom` varchar(45) NOT NULL,
  `ket_tambahan` varchar(100) DEFAULT NULL,
  `user_iduser` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `symptom`
--

INSERT INTO `symptom` (`idsymptom`, `waktu`, `nama_symptom`, `ket_tambahan`, `user_iduser`) VALUES
(8, '2023-06-05 15:46:36', 'bisulan', 'kosong', 2),
(5, '2023-06-17 23:16:00', 'panas demam', 'qwe', 2),
(7, '2023-06-02 11:05:00', 'panas dingin', 'ini keterangan', 2),
(9, '2023-06-09 15:46:36', 'meriang', 'kosong', 2),
(10, '2023-06-13 15:46:36', 'pusing', 'kosong', 2),
(11, '2023-06-17 15:46:36', 'tenggorokan gatal', 'kosong', 2),
(12, '2023-06-21 15:46:36', 'pusing', 'kosong', 2),
(13, '2023-06-25 15:46:36', 'sariawan', 'kosong', 2),
(14, '2023-06-20 14:52:00', 'pusing ', 'pusing banget', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tidur`
--

CREATE TABLE `tidur` (
  `idtidur` int(11) NOT NULL,
  `kualitas_tidur` enum('nyenyak','tidur cukup','terbangun','gelisah','insomnia','mimpi buruk','mimpi indah','sleep walking','sleep talking') NOT NULL,
  `ket` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tidur`
--

INSERT INTO `tidur` (`idtidur`, `kualitas_tidur`, `ket`) VALUES
(1, 'nyenyak', 'saya'),
(2, 'terbangun', 'saya terbangun'),
(3, 'gelisah', 'saya gelisah'),
(4, 'tidur cukup', 'tidur dengan durasi yang cukup'),
(5, 'insomnia', 'sulit tidur'),
(6, 'mimpi buruk', 'mimpi buruk selama tidur'),
(7, 'mimpi indah', NULL),
(8, 'sleep walking', NULL),
(9, 'sleep talking', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(50) NOT NULL,
  `umur` date NOT NULL,
  `gender` enum('laki-laki','perempuan') NOT NULL,
  `role` enum('admin','member') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `name`, `email`, `password`, `umur`, `gender`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2023-06-04', 'laki-laki', 'admin'),
(2, 'saya', 'ad@gmail.com', '523af537946b79c4f8369ed39ba78605', '2023-06-04', 'laki-laki', 'member'),
(4, 'haidar', 'haidar@gmail.com', '1acf7bbc7ac25ef584552fdb1314ebda', '2023-06-05', 'laki-laki', 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_bab`
--

CREATE TABLE `user_bab` (
  `id_user_bab` int(11) NOT NULL,
  `bab_idbab` int(11) NOT NULL,
  `user_iduser` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `warna` varchar(45) NOT NULL,
  `ket_tambahan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_bab`
--

INSERT INTO `user_bab` (`id_user_bab`, `bab_idbab`, `user_iduser`, `waktu`, `warna`, `ket_tambahan`) VALUES
(4, 2, 2, '2023-06-12 23:19:00', 'merah', 'asd'),
(5, 5, 2, '2023-06-12 19:20:00', 'asd', 'asd'),
(7, 3, 2, '2023-06-04 13:12:00', 'coklat', 'belum ada'),
(8, 4, 2, '2023-06-03 13:21:00', 'hijau', 'belum ada'),
(9, 4, 2, '2023-06-05 13:21:00', 'hijau', 'belum ada'),
(10, 7, 2, '2023-06-21 13:46:00', 'jingga', 'ga ada'),
(11, 6, 2, '2023-06-20 13:46:00', 'magenta', 'belum ada'),
(12, 1, 2, '2023-07-05 12:55:00', 'hijau', ''),
(13, 5, 2, '2023-07-05 12:55:00', 'dark chocolate', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_makanan_minuman`
--

CREATE TABLE `user_makanan_minuman` (
  `id_user_makanan` int(11) NOT NULL,
  `user_iduser` int(11) NOT NULL,
  `id_makanan_minuman` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `jumlah` float NOT NULL,
  `satuan` enum('gram','sdt','sdm','ml','gelas','mangkok','piring') NOT NULL,
  `kalori` float DEFAULT NULL,
  `ket_tambahan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_makanan_minuman`
--

INSERT INTO `user_makanan_minuman` (`id_user_makanan`, `user_iduser`, `id_makanan_minuman`, `waktu`, `jumlah`, `satuan`, `kalori`, `ket_tambahan`) VALUES
(90, 2, 4, '2023-06-02 09:35:34', 1, 'piring', 200, 'tdk ada'),
(91, 2, 3, '2023-06-03 09:35:34', 1, 'piring', 200, 'tdk ada'),
(92, 2, 12, '2023-06-04 09:35:34', 1, 'piring', 200, 'tdk ada'),
(93, 2, 3, '2023-06-05 09:35:34', 1, 'piring', 200, 'tdk ada'),
(94, 2, 13, '2023-06-06 09:35:34', 1, 'piring', 200, 'tdk ada'),
(95, 2, 7, '2023-06-07 09:35:34', 1, 'piring', 200, 'tdk ada'),
(96, 2, 8, '2023-06-08 09:35:34', 1, 'piring', 200, 'tdk ada'),
(97, 2, 8, '2023-06-09 09:35:34', 1, 'piring', 200, 'tdk ada'),
(98, 2, 6, '2023-06-10 09:35:34', 1, 'piring', 200, 'tdk ada'),
(99, 2, 6, '2023-06-11 09:35:34', 1, 'piring', 200, 'tdk ada'),
(100, 2, 3, '2023-06-12 09:35:34', 1, 'piring', 200, 'tdk ada'),
(101, 2, 8, '2023-06-13 09:35:34', 1, 'piring', 200, 'tdk ada'),
(102, 2, 8, '2023-06-13 11:35:34', 1, 'piring', 200, 'tdk ada'),
(103, 2, 5, '2023-06-14 09:35:34', 1, 'piring', 200, 'tdk ada'),
(104, 2, 7, '2023-06-15 09:35:34', 1, 'piring', 200, 'tdk ada'),
(105, 2, 8, '2023-06-16 09:35:34', 1, 'piring', 200, 'tdk ada'),
(106, 2, 5, '2023-06-17 09:35:34', 1, 'piring', 200, 'tdk ada'),
(107, 2, 1, '2023-06-18 09:35:34', 1, 'piring', 200, 'tdk ada'),
(108, 2, 3, '2023-06-19 09:35:34', 1, 'piring', 200, 'tdk ada'),
(109, 2, 8, '2023-06-20 09:35:34', 1, 'piring', 200, 'tdk ada'),
(110, 2, 2, '2023-06-21 09:35:34', 1, 'piring', 200, 'tdk ada'),
(111, 2, 7, '2023-06-22 09:35:34', 1, 'piring', 200, 'tdk ada'),
(112, 2, 3, '2023-06-23 09:35:34', 1, 'piring', 200, 'tdk ada'),
(113, 2, 8, '2023-06-24 09:35:34', 1, 'piring', 200, 'tdk ada'),
(114, 2, 13, '2023-06-25 09:35:34', 1, 'piring', 200, 'tdk ada'),
(115, 2, 7, '2023-06-26 09:35:34', 1, 'piring', 200, 'tdk ada'),
(116, 2, 8, '2023-06-27 09:35:34', 1, 'piring', 200, 'tdk ada'),
(117, 2, 5, '2023-06-28 09:35:34', 1, 'piring', 200, 'tdk ada'),
(118, 2, 1, '2023-06-29 09:35:34', 1, 'piring', 200, 'tdk ada'),
(119, 2, 3, '2023-06-30 09:35:34', 1, 'piring', 200, 'tdk ada'),
(120, 2, 11, '2023-06-01 10:35:34', 2, 'piring', 200, 'tdk ada'),
(121, 2, 12, '2023-06-02 15:35:34', 3, 'piring', 200, 'tdk ada'),
(122, 2, 13, '2023-06-03 16:35:34', 2, 'piring', 200, 'tdk ada'),
(123, 2, 7, '2023-06-04 12:35:34', 1, 'piring', 200, 'tdk ada'),
(124, 2, 11, '2023-06-05 08:35:34', 2, 'piring', 200, 'tdk ada'),
(125, 2, 12, '2023-06-28 14:35:34', 3, 'piring', 200, 'tdk ada'),
(126, 2, 13, '2023-06-29 21:35:34', 1, 'piring', 200, 'tdk ada'),
(127, 2, 12, '2023-06-30 22:35:34', 3, 'piring', 200, 'tdk ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_mood`
--

CREATE TABLE `user_mood` (
  `id_user_mood` int(11) NOT NULL,
  `mood_idmood` int(11) NOT NULL,
  `user_iduser` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `ket_tambahan` text DEFAULT NULL,
  `nama_mood` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_mood`
--

INSERT INTO `user_mood` (`id_user_mood`, `mood_idmood`, `user_iduser`, `waktu`, `ket_tambahan`, `nama_mood`) VALUES
(17, 1, 2, '2023-06-04 08:03:00', 'uwu', 'gembira'),
(18, 5, 2, '2023-06-05 08:03:00', 'hari ini aku merasa hciuagbahfvqw', 'rewel'),
(19, 5, 2, '2023-06-03 16:30:00', 'tdk ada', 'rewel'),
(20, 4, 2, '2023-06-20 13:44:00', 'ini keterangan tambahan', 'swing'),
(21, 3, 2, '2023-06-21 14:45:00', 'hambar', 'biasa'),
(22, 4, 2, '2023-06-12 14:10:00', 'kadang gini kadang gitu', 'swing'),
(23, 1, 2, '2023-06-04 17:28:00', 'test mood', 'gembira');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_tidur`
--

CREATE TABLE `user_tidur` (
  `id_user_tidur` int(11) NOT NULL,
  `tidur_idtidur` int(11) NOT NULL,
  `user_iduser` int(11) NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_selesai` datetime NOT NULL,
  `ket_tambahan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_tidur`
--

INSERT INTO `user_tidur` (`id_user_tidur`, `tidur_idtidur`, `user_iduser`, `waktu_mulai`, `waktu_selesai`, `ket_tambahan`) VALUES
(46, 3, 2, '2023-06-09 23:54:00', '2023-06-10 07:54:00', 'terlendang'),
(47, 1, 2, '2023-06-05 13:41:00', '2023-06-05 15:41:00', 'belum ada'),
(48, 2, 2, '2023-06-04 16:42:00', '2023-06-04 16:58:00', 'belum ada'),
(49, 1, 2, '2023-06-13 01:15:00', '2023-06-13 10:15:00', 'nyenyak banget'),
(50, 3, 2, '2023-06-12 14:16:00', '2023-06-12 14:23:00', 'ga bisa tidur'),
(51, 2, 2, '2023-06-20 22:17:00', '2023-06-20 23:17:00', 'kebangun ada suara kucing'),
(52, 3, 2, '2023-06-04 07:05:00', '2023-06-04 09:24:00', 'test tanggal yg sama'),
(53, 1, 2, '2023-06-03 08:25:00', '2023-06-03 10:25:00', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`idartikel`),
  ADD KEY `fk_artikel_user1_idx` (`user_iduser`);
ALTER TABLE `artikel` ADD FULLTEXT KEY `judul_isi` (`judul`,`isi`);

--
-- Indeks untuk tabel `bab`
--
ALTER TABLE `bab`
  ADD PRIMARY KEY (`idbab`);

--
-- Indeks untuk tabel `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`idbahan`),
  ADD KEY `fk_bahan_makanan` (`id_makanan_minuman`);

--
-- Indeks untuk tabel `catatan_harian`
--
ALTER TABLE `catatan_harian`
  ADD PRIMARY KEY (`idcatatan_harian`),
  ADD KEY `fk_catatan_harian_user1_idx` (`user_iduser`);
ALTER TABLE `catatan_harian` ADD FULLTEXT KEY `catatan` (`catatan`);

--
-- Indeks untuk tabel `makanan_minuman`
--
ALTER TABLE `makanan_minuman`
  ADD PRIMARY KEY (`id_makanan`),
  ADD UNIQUE KEY `nama_makanan` (`nama_makanan`);

--
-- Indeks untuk tabel `makanan_umum`
--
ALTER TABLE `makanan_umum`
  ADD PRIMARY KEY (`idmakanan_umum`),
  ADD KEY `fk_makanan_umum_user1_idx` (`user_iduser`);
ALTER TABLE `makanan_umum` ADD FULLTEXT KEY `nama_makanan` (`nama_makanan`);

--
-- Indeks untuk tabel `mood`
--
ALTER TABLE `mood`
  ADD PRIMARY KEY (`idmood`);

--
-- Indeks untuk tabel `symptom`
--
ALTER TABLE `symptom`
  ADD PRIMARY KEY (`idsymptom`),
  ADD KEY `fk_symptom_user1_idx` (`user_iduser`);
ALTER TABLE `symptom` ADD FULLTEXT KEY `nama_symp` (`nama_symptom`);

--
-- Indeks untuk tabel `tidur`
--
ALTER TABLE `tidur`
  ADD PRIMARY KEY (`idtidur`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- Indeks untuk tabel `user_bab`
--
ALTER TABLE `user_bab`
  ADD PRIMARY KEY (`id_user_bab`),
  ADD KEY `fk_bab_has_user_user1_idx` (`user_iduser`),
  ADD KEY `fk_bab_has_user_bab1_idx` (`bab_idbab`);

--
-- Indeks untuk tabel `user_makanan_minuman`
--
ALTER TABLE `user_makanan_minuman`
  ADD PRIMARY KEY (`id_user_makanan`),
  ADD KEY `fk_user_has_makanan_minuman_makanan_minuman1_idx` (`id_makanan_minuman`),
  ADD KEY `fk_user_has_makanan_minuman_user_idx` (`user_iduser`);

--
-- Indeks untuk tabel `user_mood`
--
ALTER TABLE `user_mood`
  ADD PRIMARY KEY (`id_user_mood`),
  ADD KEY `fk_mood_has_user_user1_idx` (`user_iduser`),
  ADD KEY `fk_mood_has_user_mood1_idx` (`mood_idmood`);
ALTER TABLE `user_mood` ADD FULLTEXT KEY `nama_mood` (`nama_mood`);

--
-- Indeks untuk tabel `user_tidur`
--
ALTER TABLE `user_tidur`
  ADD PRIMARY KEY (`id_user_tidur`),
  ADD KEY `fk_tidur_has_user_user1_idx` (`user_iduser`),
  ADD KEY `fk_tidur_has_user_tidur1_idx` (`tidur_idtidur`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `idartikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `bab`
--
ALTER TABLE `bab`
  MODIFY `idbab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `bahan`
--
ALTER TABLE `bahan`
  MODIFY `idbahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `catatan_harian`
--
ALTER TABLE `catatan_harian`
  MODIFY `idcatatan_harian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `makanan_minuman`
--
ALTER TABLE `makanan_minuman`
  MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `makanan_umum`
--
ALTER TABLE `makanan_umum`
  MODIFY `idmakanan_umum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `mood`
--
ALTER TABLE `mood`
  MODIFY `idmood` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `symptom`
--
ALTER TABLE `symptom`
  MODIFY `idsymptom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tidur`
--
ALTER TABLE `tidur`
  MODIFY `idtidur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_bab`
--
ALTER TABLE `user_bab`
  MODIFY `id_user_bab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user_makanan_minuman`
--
ALTER TABLE `user_makanan_minuman`
  MODIFY `id_user_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT untuk tabel `user_mood`
--
ALTER TABLE `user_mood`
  MODIFY `id_user_mood` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `user_tidur`
--
ALTER TABLE `user_tidur`
  MODIFY `id_user_tidur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bahan`
--
ALTER TABLE `bahan`
  ADD CONSTRAINT `fk_bahan_makanan` FOREIGN KEY (`id_makanan_minuman`) REFERENCES `makanan_minuman` (`id_makanan`);

--
-- Ketidakleluasaan untuk tabel `user_bab`
--
ALTER TABLE `user_bab`
  ADD CONSTRAINT `fk_bab_has_user_bab1` FOREIGN KEY (`bab_idbab`) REFERENCES `bab` (`idbab`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_bab_has_user_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `user_makanan_minuman`
--
ALTER TABLE `user_makanan_minuman`
  ADD CONSTRAINT `fk_user_has_makanan_minuman_makanan_minuman1` FOREIGN KEY (`id_makanan_minuman`) REFERENCES `makanan_minuman` (`id_makanan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_has_makanan_minuman_user` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `user_tidur`
--
ALTER TABLE `user_tidur`
  ADD CONSTRAINT `fk_tidur_has_user_tidur1` FOREIGN KEY (`tidur_idtidur`) REFERENCES `tidur` (`idtidur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tidur_has_user_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
