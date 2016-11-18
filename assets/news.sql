-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2016 at 02:59 
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_at` datetime NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `title`, `image`, `type`, `status`, `created_at`, `created_by`, `modified_at`, `modified_by`) VALUES
(1, 'aaaaaaaaaaaaaaaaaaa', '', '', 'active', '2016-11-01 04:46:06', 26, '0000-00-00 00:00:00', 0),
(2, 'aaaa', '', 'a', 'active', '2016-11-01 04:48:52', 26, '0000-00-00 00:00:00', 0),
(3, 'aaaa', 'uploads/ads/', '', 'active', '2016-11-01 04:49:45', 26, '0000-00-00 00:00:00', 0),
(4, 'aaaaaaaaaaaaaaaaaaa', 'uploads/ads/0ec083e56caac1db47725ce7c00dd38c.png', 'a', 'active', '2016-11-01 04:56:45', 26, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `write_by` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `datetime` datetime NOT NULL,
  `count_comment` int(11) NOT NULL,
  `count_read` int(11) NOT NULL,
  `count_like` int(11) NOT NULL,
  `tags` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `vidio_url` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `featured` varchar(256) NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_at` datetime NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `slug`, `write_by`, `description`, `datetime`, `count_comment`, `count_read`, `count_like`, `tags`, `image`, `vidio_url`, `type`, `featured`, `category_id`, `status`, `created_at`, `created_by`, `modified_at`, `modified_by`) VALUES
(52, 'Manajer Verstappen Bantah Kliennya Hancurkan F1', 'manajer-verstappen-bantah-kliennya-hancurkan-f1-52', 'M Ainul Yakin', '<p>Manajer Max Verstappen, Raymond Vermeulen, membantah jika pembalapnya sengaja mengganggu hasil kejuaraan Formula One (F1). Hal tersebut ia ucapkan di tengah tindakan kontroversial yang ia lakukan kala berlaga di Grand Prix (GP) Meksiko.</p>\r\n\r\n<p>Verstappen yang keluar dari lintasa pada lap 70, sengaja tidak memberikan kesempatan kepada pembalap Ferrari, Sebastian Vettel, untuk mendahuluinya. Padahal dalam peraturan, pembalap yang tidak sengaja keluar dari lintasan/memotong lintasan, harus memberikan jalan pada pembalap di belakangnya untuk mendahulu</p>\r\n\r\n<p>Hal tersebut tentunya membuat Vettel menjadi geram. Pembalap berkebangsaan Jerman tersebut bahkan melemparkan sejumlah kata-kata kasar kepada Verstappen melalui siaran radio.</p>\r\n\r\n<p>&ldquo;Max membalap dengan sangat hebat. Dia dihukum karena memotong tikungan. Namun hal itu tidak berlaku pada Nico Rosberg dan Lewis Hamilton. Itu merupakan hal yang sangat tidak adil,&rdquo; tutur Vermeulen, melansir dari <em>Sportsmole</em>, Kamis (3/11/2016).</p>\r\n\r\n<p>&ldquo;Kami memang berjuang untuk memperoleh posisi yang baik. Namun kami tidak pernah ikut campur dalam kejuaraan dunia,&rdquo; tuntasnya.</p>', '0000-00-00 00:00:00', 0, -1, 0, '        f1        ', 'uploads/blog/386e01be079782ef3ed08c2bffd0d827.jpg', '                ', 'blog', '', 9, 'active', '2016-11-04 03:38:04', 4, '0000-00-00 00:00:00', 0),
(53, 'Esteban Ocon Dikabarkan Sepakat Gabung Force India', 'esteban-ocon-dikabarkan-sepakat-gabung-force-india-53', 'Ainul', '<p>Pembalap Manor Racing, Esteban Ocon, sepakat gabung dengan Force India untuk musim depan. Setidaknya itulah klaim yang diembuskan media Spanyol,<em> Formula Rapida</em>, jelang GP Meksiko akhir pekan lalu.</p>\r\n\r\n<p>Force India sedang mencari pengganti Nico Hulkenberg yang bakal hengkang di akhir musim. Ocon menjadi pengganti ideal karena didukung oleh Mercedes yang merupakan pemasok mesin Force India.</p>\r\n\r\n<p>&ldquo;Ini adalah keputusan Vijay Mallya (bos Force India), dan kami akan mulai berdiskusi pekan depan,&rdquo; ujar deputy dari Mallya, Bob Fernley, pada akhir pekan lalu, seperti dilansir <em>Sportsmole</em>, Kamis (3/11/2016).</p>\r\n\r\n<p><em>Auto Motor und Sport </em>mengatakan Ocon akan membuat Force India menerima diskon sebanyak USD3 juta, meskipun Felipe Nasr dan Jolyon Palmer masing-masing membawa USD16 juta sebagai pay driver.</p>\r\n\r\n<p>&ldquo;Kami harus memilih mana yang bagus untuk kami, bukan yang bagus untuk figur lain,&rdquo; ujar Direktur Olahraga Force India, Otmar Szafnauer.</p>', '0000-00-00 00:00:00', 0, 5, 0, 'f1', 'uploads/blog/2c6b7f8a9b156007adcaa7fa7b2d8bca.jpg', '', 'blog', '', 9, 'active', '2016-11-03 07:51:59', 25, '0000-00-00 00:00:00', 0),
(54, 'Berkata Kasar di Radio, Vettel Minta Maaf kepada FIA dan Verstappen', 'berkata-kasar-di-radio-vettel-minta-maaf-kepada-fia-dan-verstappen-54', 'Ainul', '<p>Pembalap Ferrari, Sebastian Vettel, mengucapkan maaf yang sebesar-besarnya kepada Charlie Whiting dan Federasi Internasional Automotive (FIA). Permintaan maaf tersebut diungkapkan setelah ia berkata kasar usai berlaga di Grand Prix (GP) Meksiko.</p>\r\n\r\n<p>Saat berlaga di Meksiko, Vettel memang melontarkan beberapa kata-kata kasar melalui siaran radio miliknya. Saat itu pembalap berkebangsaan Jerman tersebut sangat kesal ketika pembalap Red Bull, Max Verstappen, yang tidak memberikannya jalan usai menyelonong keluar lintasan.</p>\r\n\r\n<p>Saat ini Presiden FIA, Jean Todt, sedang melakukan investigasi mengenai perilaku Vettel yang berbicara kasar saat balapan. Oleh sebab itu Vettel yang mengaku bersalah, langsung membuat permintaan maaf yang sebesar-besarnya karena telah berlaku tidak sopan.</p>\r\n\r\n<p>&ldquo;Dia mengatakan Maaf. Dia cukup berani untuk mengatakan hal tersebut, mengingat ia telah melakukan kesalahan dan tidak terpaku dengan masalah pribadi. Namun saat ini kami masih menunggu keputusan bos (Todt) mengenai masalah ini,&rdquo; tutur Whiting, menyadur dari <em>Sportsmole</em>, Kamis (3/11/2016).</p>\r\n\r\n<p>Selain itu FIA juga mengungkapkan jika Vettel juga membuat permintaan maaf tertulis sebesar-besarnya karena telah menghina Max Verstappen. Rencananya pembalap berusia 29 tahun tersebut akan menelepon pembalap berkebangsaan Belgia tersebut untuk memintaa maaf secara langsung.</p>', '0000-00-00 00:00:00', 0, 4, 0, 'f1', 'uploads/blog/a09bf225db6837d101cb54a0ccc3fad8.jpg', '', 'blog', '', 9, 'active', '2016-11-03 07:53:51', 25, '0000-00-00 00:00:00', 0),
(55, 'Sebastian Vettel Kirim Surat Permintaan Maaf untuk FIA', 'sebastian-vettel-kirim-surat-permintaan-maaf-untuk-fia-55', 'Ainul', '<p>Balapan Formula One seri Meksiko memang menyisakan ketegangan tinggi meski telah berakhir. Bukan karena pertarungan antara Lewis Hamilton dan Nico Rosberg melainkan karena komentar pembalap Ferrari, Sebastian Vettel yang dinilai kasar pada akhir balapan.</p>\r\n\r\n<p>Vettel memang benar-benar murka kepada pembalap Red Bull Racing, Max Verstappen dan pihak race director yang bertugas. Saat itu Verstappen memotong lintasan namun tak ingin memberikan celah untuk Vettel menyalip.</p>\r\n\r\n<p>Karena kesal, Vettel langsung mengucapkan kata-kata kasar melalui team radio. Menurut laporan beberap media, Vettel tengah dalam investigasi pihak FIA dan terancam mendapat hukuman karena menghina pejabat FIA.</p>\r\n\r\n<p>Demi mengurangi ketegangan, pembalap asal Jerman tersebut menempuh jalan yang bijak. Ia dikabarkan mengirim surat secara pribadi ke FIA maupun race director, Charlie Whiting. Keputusan tersebut juga dilakukan untuk mengurangi kemungkinan mendapat hukuman dari FIA.</p>\r\n\r\n<p>Pada akhir balapan, Vettel yang berada di posisi empat berhasil menaiki podium tiga setelah Verstappen dikenai penalti. Namun akhirnya podium tersebut dibatalkan karena Vettel terbukti melakukan pengereman berbahaya untuk menghalangi Daniel Ricciardo.</p>', '0000-00-00 00:00:00', 0, 1, 0, 'f1', 'uploads/blog/cd91bed22c39b71c000d879f75552729.jpg', '', 'blog', '', 9, 'active', '2016-11-03 07:55:23', 25, '0000-00-00 00:00:00', 0),
(56, 'Sportpedia: Rentetan Podium Terpanjang Milik Valentino Rossi', 'sportpedia-rentetan-podium-terpanjang-milik-valentino-rossi-56', 'Ainul', '<p>gelar tujuh juara dunia di MotoGP, pembalap Tim Movistar Yamaha, Valentino Rossi, tercatat sudah memecahkan berbagai rekor dalam kariernya. Salah satu rekor mengagumkan yang sudah dipecahkan Rossi adalah raihan rentetan podium terpanjang di MotoGP.</p>\r\n\r\n<p>Berdasarkan informasi yang dirangkum <strong>Okezone</strong> dari berbagai sumber, Kamis (3/11/2016), rentetan podium terbanyak yang dipecahkan Rossi adalah sebanyak 23 kali. Pencapaian tersebut didapatkan pembalap berusia 37 tahun itu pada musim 2002 hingga 2004.</p>\r\n\r\n<p>Start rentetan podium terpanjang terjadi di GP Portugal pada MotoGP 2002. Saat itu, Rossi mampu mengakhiri balapan di posisi pertama. Begitu juga pada balapan selanjutnya yakni GP Brasil. Barulah pada seri setelah Brasil, GP Pasific, ia turun ke posisi dua.</p>\r\n\r\n<p>Hingga seri terakhir musim 2002, yakni GP Valencia, Rossi selalu mengakhiri balapan di atas podium. Pencapaian tersebut mampu dibawanya hingga MotoGP 2003 berlangsung. Di seri pertama MotoGP 2003 yakni GP Jepang, <em>The Doctor</em> -julukan Rossi- mampu berada di podium tertinggi.</p>\r\n\r\n<p>MotoGP 2003 bisa dibilang jadi musim yang sempurna untuk Rossi. Bagaimana tidak, di musim itu, Rossi tidak pernah sekali pun menyelesaikan balapan di luar posisi tiga besar. Artinya, dari 16 seri yang ada, capaian terburuk VR46 adalah posisi tiga. Itu pun hanya terjadi dua kali.</p>\r\n\r\n<p>Berlanjut ke MotoGP 2004, Rossi kembali mampu meraih posisi pertama di seri pembuka yakni GP Afrika Selatan. Sayang, catatan rentetan podium pembalap berkebangsaan Italia itu terhenti di seri kedua musim 2004, GP Spanyol. Pada balapan yang berlangsung di Jerez tersebut, ia meraih posisi empat.</p>\r\n\r\n<p>Total dari 23 rentetan podium yang diraih Rossi, 13 di antaranya adalah podium pertama. Sementara untuk podium kedua diraihnya sebanyak delapan kali dan podium ketiga sebanyak dua kali.</p>', '0000-00-00 00:00:00', 0, 4, 0, 'motogp', 'uploads/blog/30d987c1619fc3eddb56296cbd396572.jpg', '', 'blog', '', 13, 'active', '2016-11-03 07:56:52', 25, '0000-00-00 00:00:00', 0),
(57, 'Espargaro Senang Finis 10 Besar di MotoGP 2016', 'espargaro-senang-finis-10-besar-di-motogp-2016-57', 'Ainul', '<p>Pembalap Tim Monster Yamaha Tech 3, Pol Espargaro, sudah pasti finis di antara posisi tujuh atau delapan pada MotoGP 2016. Espargaro pun mengaku sangat senang bisa menyelesaikan kompetisi musim ini di posisi 10 besar.</p>\r\n\r\n<p>Espargaro sejatinya tidak tampil dengan maksimal di seri ke-17 MotoGP 2016 yakni GP Malaysia, akhir pekan lalu. Pembalap berusia 25 tahun tersebut hanya mampu menyelesaikan balapan di Sirkuit Sepang pada posisi kesembilan.</p>\r\n\r\n<p>Meski demikian, posisi sembilan ternyata mampu membuatnya mengamankan tempat delapan besar di klasemen akhir MotoGP 2016. Hal itu dikarenakan raihan poinnya sudah tidak mungkin lagi dikejar oleh para pembalap di bawahnya.</p>\r\n\r\n<p>&ldquo;Hasil (GP Malaysia) ini memastikan posisi kedelapan di klasemen kejuaraan. Saya puas bisa finis di atas dua pembalap pabrikan MotoGP (Andrea Iannone dan Aleix Espargaro),&rdquo; kata Espargaro, seperti dimuat laman resmi MotoGP, Kamis (3/11/2016).</p>\r\n\r\n<p>&ldquo;Jadi, menyenangkan rasanya bisa mengakhiri balapan di luar negeri dalam cara seperti ini. Saya senang bisa berjalan jauh dengan raihan finis di 10 besar dan beberapa poin kejuaraan yang berharga,&rdquo; sambungnya.</p>', '0000-00-00 00:00:00', 0, 2, 0, 'motogp', 'uploads/blog/493681e10ee6f2c179887e9aa97ff4c1.jpg', '', 'blog', '', 13, 'active', '2016-11-03 07:58:01', 25, '0000-00-00 00:00:00', 0),
(58, 'Akui Banyak Lakukan Kesalahan, Lorenzo Ikhlas Gagal Juarai MotoGP 2016', 'akui-banyak-lakukan-kesalahan-lorenzo-ikhlas-gagal-juarai-motogp-2016-58', 'Ainul', '<p>Pembalap Tim Movistar Yamaha, Jorge Lorenzo, harus rela mengakhiri tahun 2016 berada di posisi ketiga klasemen sementara MotoGP 2016. Bahkan pembalap berjuluk X-Fuera tersebut masih berpeluang disalip oleh pembalap Tim Suzuki Ecstar, Maverick Vinales.</p>\r\n\r\n<p>Lorenzo mengakui bahwa dirinya terlalu banyak melakukan kesalahan pada musim ini. Menurutnya, hal tersebut merupakan salah satu penyebab ia tidak mampu bersaing dalam perebutan gelar juara MotoGP 2016.</p>\r\n\r\n<p>Sejujurnya, saya membuat banyak kesalahan pada musim ini. Oleh sebab itu, saya tidak dapat bersaing dalam perebutan gelar juara,&rdquo; tutur Lorenzo, mengutip dari <em>Speedweek</em>, Kamis (3/11/2016).</p>\r\n\r\n<p>Performa Lorenzo pada musim ini memang dinilai tidak konsisiten. Pada awal musim, Lorenzo sempat meraih empat podium beruntun. Namun, memasuki paruh kedua MotoGP 2016, performa X-Fuera merosot.</p>\r\n\r\n<p>Pada musim ini, Lorenzo tercatat tiga kali gagal finis. Catatan tersebut tentu bukanlah hasil yang memuaskan. Sebab, MotoGP 2016 akan menjadi musim terakhirnya di Yamaha sebelum akhirnya, melanjutkan karier di Ducati pada 2017.</p>', '0000-00-00 00:00:00', 0, 1, 0, 'motogp', 'uploads/blog/ed6c7960e3c35b9c8be29a15f4ad81d3.jpg', '', 'blog', '', 13, 'active', '2016-11-03 08:00:39', 25, '0000-00-00 00:00:00', 0),
(59, 'Durant Gemilang, Warriors Beri Thunder Kekalahan Pertama', 'durant-gemilang-warriors-beri-thunder-kekalahan-pertama-59', 'Aan', '<p><strong>Oakland</strong> - Golden State Warriors menghentikan start sempurna Oklahoma City Thunder. Dipimpin oleh Kevin Durant, Warriors mengalahkan Thunder dengan skor 122-96.<br />\r\n<br />\r\nDalam pertandingan di Oracle Arena, Jumat (4/11/2016) siang WIB, Durant membukukan 39 poin melawan bekas timnya itu. Dengan tujuh tembakan tiga angka, Durant menyamai catatan terbaiknya.<br />\r\n<br />\r\nStephen Curry menyusul dengan 21 poin dan tujuh assist. Sementara Klay Thompson membukukan 18 poin.<br />\r\n<br />\r\nDari kubu Thunder, Russell Westbrook --yang membukukan triple double dalam dua dari tiga laga terakhirnya-- hanya mencetak 20 poin. Tapi dia menambahkannya dengan 10 assist.<br />\r\n<br />\r\nSetelah tertinggal tipis 31-32 di kuarter pertama, Warriors melesat dengan membukukan 37 poin di kuarter kedua untuk unggul 68-43 saat half-time. Di dua kuarter akhir, Warriors mampu mempertahankan keunggulan hingga akhirnya menang.<br />\r\n<br />\r\nIni menjadi kemenangan keempat secara beruntu yang dibukukan Warriors setelah kalah dari San Antonio Spurs di laga perdana. Sementara bagi Thunder, ini merupakan kekalahan perdananya usai memulai empat laga sebelumnya dengan kemenangan.<br />\r\n<br />\r\n<strong>Cavaliers Belum Terkalahkan</strong><br />\r\n<br />\r\nSementara itu, Cleveland Cavaliers masih melanjutkan start 100% dengan mengalahkan Boston Celtics 128-122. Dengan tumbangnya Thunder, Cavaliers menjadi satu-satunya tim yang belum terkalahkan musim ini<br />\r\n<br />\r\nLeBron James menjadi motor Cavaliers dengan membukukan 30 poin. James hanya butuh dua poin lagi untuk melewati Hakeem Olajuwon di posisi ke-10 daftar pencetak angka terbanyak sepanjang masa NBA (26.946 poin).<br />\r\n<br />\r\n&quot;Ketika Anda bisa menempatkan diri di kategori dengan mereka yang membuka jalan untuk Anda dan kita semua, itu selalu membuat merasa rendah hati,&quot; ujar James seperti dikutip dari <em>ESPN</em>.<br />\r\n<br />\r\nKevin Love turut menyumbang 26 poin untuk Cavaliers. Sementara Kyrie Irving mencetak 23 poin. Tristan Thompson menorehkan double-double di paruh pertama dan mengakhiri laga dengan 15 poin dan 14 rebound.<br />\r\n<br />\r\nDengan kemenangan atas Celtics, Cavaliers menambah catatan musim ini menjadi 5-0. Ini adalah kali pertama Cavaliers punya catatan menang kalah 5-0sejak 1976-1977 saat mereka memulai musim dengan rekor 8-0.</p>', '0000-00-00 00:00:00', 0, 1, 0, 'Basket', 'uploads/blog/b21d26a5f8a7ce43c4c13b40ece13402.jpg', '  ', 'blog', '', 10, 'active', '2016-11-07 06:20:53', 25, '0000-00-00 00:00:00', 0),
(60, 'Westbrook 35 Poin, Thunder Bekuk Clippers dan Belum Terkalahkan', 'westbrook-35-poin-thunder-bekuk-clippers-dan-belum-terkalahkan-60', 'Ainul', '<p>Oklahoma City Thunder melanjutkan start sempurnanya dengan mengalahkan Los Angeles Clippers. Russell Westbrook tampil gemilang dengan menyumbang 35 poin.<br />\r\n<br />\r\nDalam pertandingan di Staples Center, Los Angeles, California yang tuntas Kamis (3/11/2016) siang WIB, Thunder meraih kemenangan tipis 85-83. Bersama Cleveland Cavaliers, Thunder kini menjadi tim yang belum terkalahkan di empat pertandingan pertamanya.<br />\r\n<br />\r\nSetelah tertinggal tipis 23-24 di kuarter pembuka, Thunder melesat dengan membukukan 26 poin untuk balik memimpin 49-41 saat half-time. Kembali ketinggalan di akhir kuarter ketiga, Thunder bangkit di kuarter terakhir dengan menambah 20 poin untuk menyegel kemenangan.<br />\r\n<br />\r\nWestbrook, yang menorehkan triple-double di dua laga terakhir, menjadi motor kemenangan Thunder dengan membukukan 35 poin. Dia menambahkannya dengan enam rebound dan lima assist.<br />\r\n<br />\r\nSementara dari kubu Clippers, Chris Paul menorehkan double-double lewat sumbangan 15 poin, 11 rebound, dan sembilan assist. Blake Griffin dan Marreese Speights menyusul dengan masing-masing mencatatkan 14 poin.<br />\r\n<br />\r\nDari pertandingan lainnya, Houston Rockets bangkit dari kekalahan dengan menundukkan New York Knicks 118-99. James Harden kembali membukukan double-double dengan mencetak 30 poin dan 15 assist.</p>', '0000-00-00 00:00:00', 0, 1, 0, 'basket', 'uploads/blog/f4042b7327a8bc6132d349855a7fb5e3.jpg', '', 'blog', '', 10, 'active', '2016-11-07 06:23:03', 25, '0000-00-00 00:00:00', 0),
(61, 'Westbrook Triple-Double Lagi, Thunder Lanjutkan Start 100%', 'westbrook-triple-double-lagi-thunder-lanjutkan-start-100-61', 'Ainul', '<p>Oklahoma City Thunder melanjutkan start 100% musim ini usai mengalahkan Los Angeles Lakers. Point guard Thunder Russell Westbrook juga membuat torehan khusus.<br />\r\n<br />\r\nThunder menang 113-96 ketika menjamu Lakers di Chesapeake Energy Arena, Senin (31/10/2016) WIB. Itu menjadi kemenanngan ketiga Thunder dari jumlah pertandingan yang sama di awal musim ini.<br />\r\n<br />\r\nWestbrook membuat 33 poin, 12 rebound, dan 16 assist, sebuah triple-double, untuk membantu Thunder menang. Itu menjadi triple-double keduanya di awal musim ini.<br />\r\n<br />\r\n&quot;Westbrook merupakan pemain pertama semenjak Magic Johnson pada musim 1982-83, yang mengawali musim dengan dua triple-double dari tiga pertandingan awalnya. Westbrook merupakan pemain keempat yang punya dua triple-double di tiga pertandingan awal, bergabung dengan Johnson (dua kali), Jerry Lucas, dan Oscar Robertson (dua kali),&quot; sebut <em>ESPN.com.</em><br />\r\n<br />\r\nSementara di partai lain, Golden State Warriors melanjutkan kebangkitan dengan kemenangan kedua setelah mengawali musim ini dengan kekalahan. Runner-up final NBA musim lalu tersebut menang 106-100 atas Phoenix Suns.</p>', '0000-00-00 00:00:00', 0, 1, 0, 'basket', 'uploads/blog/5e43bd9cc0b4056907a5c884ab901dbb.jpg', '', 'blog', '', 10, 'active', '2016-11-07 06:24:10', 25, '0000-00-00 00:00:00', 0),
(62, 'Roger Federer Masih Simpan Hasrat Menangi Turnamen Grand Slam', 'roger-federer-masih-simpan-hasrat-menangi-turnamen-grand-slam-62', 'Aan', '<p><strong>Jenewa</strong> - Cedera membuat Roger Federer harus absen dari turnamen dan peringkat dunianya pun merosot. Namun keinginannya untuk jadi juara grand slam belum padam.<br />\r\n<br />\r\nTahun 2016 menjadi tahun yang berat bagi Federer. Cedera lutut dan punggung mengganggu penampilannya.<br />\r\n<br />\r\nBerulang kali absen, peringkat dunia Federer pun merosot. Kini dia ada di urutan 16 dunia. Dia melanjutkan tahun tanpa gelar juara grand slam, sebagai tahun keempat beruntunnya tanpa titel grand slam. Gelar terakhir didapatkan di Wimbledon 2012.<br />\r\n<br />\r\nTapi Federer yang kini berusia 35 tahun masih menyimpan mimpi untuk menjadi yang terbaik dalam salah satu turnamen grand slam. Apapaun itu.<br />\r\n<br />\r\n&quot;Mimpi saya adalah untuk memenangi turnamen grand slam lagi dan kembali ke puncak peringkat. Tapi, kalau ada yang bertanya apakah saya akan terus bermain di 2018, saya berharap masih bisa,&quot; kata Federer seperti dikutip <em>Tennis World USA.</em><br />\r\n<br />\r\n&quot;Yang penting saya harus bisa memastikan mampu bermain lebih dari satu turnamen. Jika setelah tiga pertandingan tidak ada peningkatan hasil maka saya akan mengajukan beberapa pertanyaan kepada diri sendiri. Pokoknya Desember nanti, saya harus lebih kuat daripada sebelumnya,&quot; ucap dia.<br />\r\n<br />\r\nKini dia berfokus menjalani pemulihan cedera lutut. Proses penyembuhan cederanya sesuai jadwal.<br />\r\n<br />\r\n&quot;Kondisi lutut saya masih pasang surut, tapi tak mengkhawatirkan kok. Selama lima pekan terakhir ada perbaikan dan saya masih memiliki waktu 70 hari untuk bersiap-siap. Itu cukup panjang karena biasanya seorang atlet cuma punya waktu kurang dari 30 hari untuk pulih.<br />\r\n<br />\r\n&quot;Saya mulai memasuki fase rehabilitasi dengan latihan yang lebih spesifik bersama Pierre Paganini, pelatih kebugaran saya, dan mulai berlatih tenis. Ini adalah fase yang sangat menarik. Saya anggap ini latihan setelah menjalani liburan dan akan masuk awal musim.<br />\r\n<br />\r\n&quot;Mungkin orang mengira saya tak lagi banyak latihan dan lebih sering mengunjungi tempat-tempat wisata untuk treking. Saya memang tidak terlalu banyak pamer foto-foto atau video latihan,&quot; tutur dia.</p>', '0000-00-00 00:00:00', 0, 1, 0, 'Bulu Tangkis', 'uploads/blog/e2c91e610bcad252e5361c2c3eacef6e.jpg', '', 'blog', '', 11, 'active', '2016-11-11 04:20:26', 25, '0000-00-00 00:00:00', 0),
(63, 'Bonus Olimpiade Cair, Tontowi/Liliyana Ucapkan Terima Kasih', 'bonus-olimpiade-cair-tontowi-liliyana-ucapkan-terima-kasih-63', 'Aan', '<p>Ganda campuran bulutangkis Tontowi Ahmad/Liliyana Natsir akhirnya bisa bernapas lega. Bonus yang dijanjikan pemerintah telah cair.<br />\r\n<br />\r\nTontowi dan Liliyana mendapatkan bonus masing-masing sebesar Rp 5 miliar berkat keberhasilan mereka merebut medali emas di Olimpiade Rio de Janeiro 2016. Bonus sebesar itu saat ini telah sampai ke tangan mereka.<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n&quot;Puji Tuhan, bonusnya sudah cair, Pak. Terimakasih untuk Pak Menpora dan Pemerintah atas apresiasinya dan perhatiannya kepada kami, atlet2, pelatih, mudah-mudahan olahraga Indonesia semakin bersinar dan semakin berprestasi di kancah internasional, Bendera Merah Putih dikibarkan dan Lagu Indonesia Raya dikumandangkan,&quot; tulis Liliyana lewat akun Instagram-nya.<br />\r\n<br />\r\nHal serupa diungkapkan oleh Tontowi melalui akun Instagram-nya.<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\nSelain Tontowi dan Liliyana, Eko Yuli Irawan dan Sri Wahyuni juga mendapatkan bonus. Dua atlet angkat besi yang meraih perak di Olimpiade Rio itu diguyur bonus masing-masing Rp 2 miliar.<br />\r\n<br />\r\nNi Nengah Widiasih, atlet angkat berat, mendapat bonus sebesar Rp 1 miliar atas prestasinya meraih medali perunggu di Paralimpiade Rio.<br />\r\n<br />\r\nPemerintah juga memberi apresiasi kepada pelatih yang telah mengantarkan atletnya berprestasi. Richard Mainaky, pelatih Tontowi/Liliyana, mendapat Rp 2 miliar.<br />\r\nSementara pelatih angkat besi Dirdja Wihardja dan Supeni masing-masing mendapatkan Rp 800 juta. Pelatih Ni Nengah, Koni Ruswanto, mendapat bonus sebesar Rp 400 juta.<br />\r\n<strong>(mcy/mfi)</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="" src="http://newopenx.detik.com/delivery/lg.php?bannerid=25001&amp;campaignid=3383&amp;zoneid=314&amp;loc=1&amp;referer=http%3A%2F%2Fsport.detik.com%2Fraket%2Fd-3339744%2Fbonus-olimpiade-cair-tontowililiyana-ucapkan-terima-kasih&amp;cb=5a8a9c7b90" style="height:0px; width:0px" /></p>', '0000-00-00 00:00:00', 0, 1, 0, 'Bulu Tangkis', 'uploads/blog/da3018cf7a653e930a4b1d63f0eded5a.jpg', '', 'blog', '', 11, 'active', '2016-11-11 04:22:42', 25, '0000-00-00 00:00:00', 0),
(64, 'Ujian Murray untuk Pertahankan Peringkat 1 Dunia', 'ujian-murray-untuk-pertahankan-peringkat-1-dunia-64', 'Aan', '<p>Andy Murray bakal mendapat ujian cukup berat di ATP World Tour Finals 2016 dalam usahanya mempertahankan predikat petenis putra terbaik dunia.<br />\r\n<br />\r\nMurray resmi menyandang predikat tersebut seiring dengan dirilisnya peringkat teranyar ATP hari Senin (7/11/2016) kemarin. Tetapi Djokovic yang digesernya ke peringkat dua pun membayangi tidak jauh.<br />\r\n<br />\r\nDengan ATP World Tour Finals tahun ini akan segera berlangsung, tepatnya pada 13-20 November, ada kemungkinan Djokovic merenggut peringkat satu dunia dari tangan Murray dan kembali menempati posisi teratas.<br />\r\n<br />\r\nAda sejumlah skenario buat Djokovic untuk melakukan itu. <em>Eurosport.com</em> menyebut bahwa jika Djokovic meraih titel kelima beruntun, keenamnya secara keseluruhan, di ajang tersebut maka ia dipastikan naik posisi lagi sebelum 2016 berakhir. Juga kalau petenis Serbia itu bisa melaju lebih jauh dari Murray atau mengalahkan si petenis Skotlandia di partai puncak.<br />\r\n<br />\r\nMurray belum pernah menjuarai ATP World Tour Finals dan tahun ini kebagian grup yang menantang bersama Stan Wawrinka, Marin Cilic, dan Kei Nishikori. Petenis 29 tahun itu sendiri mengaku cuma ingin fokus ke turnamen itu, tanpa memikirkan urusan peringkat.<br />\r\n<br />\r\n&quot;Saat saya masuk ke lapangan, saya tidak memikirkan peringkat. Saya akan berhadapan dengan delapan pemain top dunia. Saya menantikan untuk tampil dan bermain di O2. Sekarang saya akan berusaha istirahat, mulai memukul-mukul bola lagi di hari Kamis,&quot; kata Murray.<br />\r\n<br />\r\n&quot;Saya butuh beberapa hari istirahat. (Turnamen) Nanti akan menjadi momen unjuk gigi terakhir (musim) untuk kami semua, yang sudah memainkan banyak tenis dan semoga kami bisa main dengan baik,&quot; tuturnya seperti dilansir <em>Eurosport.com.</em></p>', '0000-00-00 00:00:00', 0, 1, 0, 'Bulu Tangkis', 'uploads/blog/4922a669c5ca07f0c104f3453cc2b85e.jpg', '', 'blog', '', 11, 'active', '2016-11-11 04:23:57', 25, '0000-00-00 00:00:00', 0),
(65, 'Pelatnas PBSI Oke, Kepengurusan Wiranto Diingatkan Wujudkan Desentralisasi', 'pelatnas-pbsi-oke-kepengurusan-wiranto-diingatkan-wujudkan-desentralisasi-65', 'Ainul', '<p>Atmosfer pelatnas Cipayung telah membaik di bawah kepengurusan Gita Wirjawan. Kini saatnya ketua umum PBSI yang baru Wiranto mengembangkan desentralisasi pelatnas.<br />\r\n<br />\r\nUsulan untuk menggelar desentralisasi pelatnas itu memang kencang menjelang Munas PBSI akhir Oktober tahun ini. Poin itu juga yang digunakan pengurus provinsi (pengprov) untuk mengoreksi kerja kepengurusn PP PBSI periode 2012-2016. Dalam prosesnya, usulan untuk menggelar desentralisasi pelatnas itu menjadi pembahasan dalam sidang komisi.<br />\r\n<br />\r\nKetua Dewan Pengawas PP PBSI, Yacob Rusdianto, mengingatkan agar kepengurusan Wiranto tak melupakan usulan tersebut. Mumpung pelatnas PBSi sudah cukup kondusif selama kepengurusan 2012-2016 maka kini dinilai sebagai wkatu yang tepat untuk mewujudkannya.<br />\r\n<br />\r\n&quot;Tidak bisa dimungkiri pengprov menghendaki pemerataan, caranya dengan desentralisasi pelatnas. Semua menyadari kesulitan yang ada untuk mewujudkannya karena memerlukan biaya besar dan perlu pelatih berkualitas yang banyak,&quot; kata Jacob dalam obrolan dengan <strong>detikSport,</strong> Selasa (8/11/2016).<br />\r\n<br />\r\n&quot;Usulan itu sejatinya sudah muncul pada beberapa munas. Nah, karena kemarin masuk dalam sidang komisi lagi maka ini saat yang tepat untuk memulainya.<br />\r\n<br />\r\n&quot;Pengprov yang siap banyak, misalnya Sumatera di Medan dan Batam. Kalimantan Timur dan Sulawesi, juga Bali karena siap ketempatan,&quot; tutur Jacob.<br />\r\n<br />\r\nSelain itu, pelatnas pratama menjadi aspek lain yang muncul dalam Munas di Surabaya. PBSI memang sempat mengenal pelatnas pratama (U-19), namun tidak ada dalam kepengurusan kali ini.<br />\r\n<br />\r\nTim formatur mempunyai waktu 30 hari untuk menyusun kepengurusan sejak mereka terpilih 31 September. Hingga ada Surat Keputusan dari KONI, kepengurusan masih dijalankan oleh kabinet lama.</p>', '0000-00-00 00:00:00', 0, 1, 0, 'Bulu Tangkis', 'uploads/blog/5786f837e2adb6bdcb893685dc283823.jpg', '', 'blog', '', 11, 'active', '2016-11-11 04:25:15', 25, '0000-00-00 00:00:00', 0),
(66, 'Ini Komentar Murray Usai Dipastikan Jadi Petenis Peringkat 1 Dunia', 'ini-komentar-murray-usai-dipastikan-jadi-petenis-peringkat-1-dunia-66', 'Ainul', '<p>Andy Murray memberikan komentar setelah dipastikan jadi petenis peringkat 1 dunia menggeser Novak Djokovic, berkat kiprahnya di Paris Masters 2016. Apa katanya?<br />\r\n<br />\r\nMurray melaju ke final ajang tersebut setelah Milos Raonic, yang harusnya jadi lawan di babak empat besar, memutuskan mundur akibat cedera pada kakinya.<br />\r\n<br />\r\nKenyataan tersebut, ditambah dengan fakta bahwa Djokovic sudah tersingkir di perempatfinal, membuat peringkat ATP teranyar dipastikan berubah; dengan Murray menggeser Djokovic dari pucuk peringkat.<br />\r\n<br />\r\n[Baca juga: <a href="http://sport.detik.com/raket/d-3338418/murray-geser-djokovic-sebagai-petenis-putra-peringkat-1-dunia" target="_blank">Murray Geser Djokovic sebagai Petenis Putra Peringkat 1 Dunia</a>]<br />\r\n<br />\r\n&quot;Ini sudah menjadi sebuah hari yang aneh, saya cukup antusias menghadapi pertandingan kali ini dan juga sedikit gugup,&quot; kata Murray kepada <em>Sky Sports.</em><br />\r\n<br />\r\n&quot;Setelah pemanasan saya dikabari Milos. Rasanya aneh karena Anda ingin melakukannya (meraih peringkat 1 dunia) di atas lapangan. Tapi meraih peringkat satu bukanlah perkara hari ini atau kemarin, melainkan kerja keras dan konsistensi 12 bulan agar bisa sampai ke titik ini dan saya amat bangga sudah bisa melakukannya.<br />\r\n<br />\r\n&quot;Saat ini masih sulit untuk bicara panjang, rasanya aneh mengetahui Milos mundur tapi saya juga amat bangga sudah berhasil melakukannya (jadi petenis peringkat 1),&quot; sebut petenis Skotlandia berusia 29 tahun tersebut.</p>', '0000-00-00 00:00:00', 0, 1, 0, 'Bulu Tangkis', 'uploads/blog/5d0627a44fab82f638f454599a569d25.jpg', '', 'blog', '', 11, 'active', '2016-11-11 04:26:57', 25, '0000-00-00 00:00:00', 0),
(67, 'Rooney Mulai Kembali ke Alur Permainan Terbaiknya', 'rooney-mulai-kembali-ke-alur-permainan-terbaiknya-67', 'Ainul', '<p>Gareth Southgate melihat tanda-tanda Wayne Rooney kembali ke permainan terbaiknya. Itu sebabnya dia tak ragu menunjuk Rooney memimpin Inggris kontra Skotlandia.<br />\r\n<br />\r\nSouthgate sebelumnya telah memastikan Rooney akan memimpin rekan-rekannya di tim nasional memasuki lapangan, kala menghadapi Skotlandia di Wembley, Sabtu (12/11/2016) dinihari WIB. Padahal di laga sebelumnya, manajer interim Inggris itu menepikan Rooney di laga kontra Slovenia.<br />\r\n<br />\r\n&quot;Basis keseluruhan dari pembicaraan kita soal laga lawan Slovenia bukanlah tentang keyakinan saya kepadanya sebagai pemain. Saya membuat keputusan yang saya rasa tepat untuk laga itu,&quot; ujarnya terkait keputusan menepikan Rooney sebelumnya.<br />\r\n<br />\r\nKeputusan Southgate mengembalikan Rooney jadi starter diakuinya setelah melihat sejumlah perkembangan positif. Rooney tampil oke bersama Manchester United di dua partai terakhir.<br />\r\n<br />\r\nDia mencetak satu gol saat MU takluk 1-2 dari Fenerbahce di Liga Europa. Lalu membuat dua <em>assist </em>di partai<em> Premier League </em>kontra Swansea City pada akhir pekan. Southgate menilai Rooney sudah mulai kembali ke alur permainan terbaiknya.<br />\r\n<br />\r\n&quot;Bagian dari menjadi seorang profesional kelas top selama bertahun-tahun adalah Anda harus menghadapi momen-momen sulit. Ada laga-laga dan periode di mana Anda tahu sedang tak dalam kondisi terbaik, dan itu adalah laga-laga di mana Anda perlu bekerja keras dan memainkan peran untuk tim,&quot; ujarnya seperti dikutip<em> Sky Sports.</em><br />\r\n<br />\r\n&quot;Lalu ada momen lain di mana Anda mulai mendapatkan alurnya dan segalanya terjadi lebih natural. Bagi saya, dia tampaknya sedang menuju ke periode itu, yang mana bagus untuk kami.&quot;<br />\r\n<br />\r\n&quot;Dia sebelumnya (sebelum lawan Slovenia) tidak dalam alur bagus untuk permainan, tapi sejak saat itu menjalani lebih banyak laga. Saya tak tahu apakah sesuatu berubah di partai (MU) lawan Swansea. Dia menjalani dua kali 90 menit pekan lalu, mencetak gol dan membuat dua <em>assist</em>,&quot; tandasnya.</p>', '0000-00-00 00:00:00', 0, 1, 0, 'Sepak Bola', 'uploads/blog/b54abeeff2d8cf4d3d701de6d11e356b.jpg', '', 'blog', '', 12, 'active', '2016-11-11 04:28:55', 25, '0000-00-00 00:00:00', 0),
(68, '''Milan Bukan Favorit di Derby della Madonnina''', '-milan-bukan-favorit-di-derby-della-madonnina-68', 'Ainul', '<p>AC Milan tengah unggul jauh dari Inter Milan di klasemen. Tapi itu tak membuat gelandang Milan, Mati Fernandez, menyebut timnya sebagai unggulan di laga <em>derby</em>.<br />\r\n<br />\r\nMilan melaju cukup mengesankan di Serie A sejauh ini. Dari 12 pertandingan yang sudah dimainkan, <em>Rossoneri</em> mengumpulkan 25 poin hasil dari delapan kemenangan, satu hasil imbang, dan tiga kali kalah untuk menempati peringkat ketiga klasemen.<br />\r\n<br />\r\nBerbanding terbalik dengan Milan, Inter justru inkonsisten. Lima kali menang dan lima kali kalah ditambah dua hasil seri, Inter baru mengumpulkan 17 poin dan tertahan di posisi kesembilan.<br />\r\n<br />\r\nSerangkaian hasil kurang memuaskan yang dicatat Inter itu kemudian membuat Frank de Boer dipecat dari jabatannya sebagai pelatih. Posisinya kemudian akan digantikan oleh Stefano Pioli. Era Pioli di Inter akan diawali dengan laga <em>Derby della Madonnina</em> pada 20 November mendatang.<br />\r\n<br />\r\nMeski Milan sedang lebih unggul di klasemen, Fernandez tak beranggapan kalau timnya lebih difavoritkan untuk menang. Dia menilai Inter akan sulit diterka.<br />\r\n<br />\r\n&quot;Apakah kami favorit? Saya pikir tidak demikian,&quot; ujar Fernandez kepada Premium Sport seperti dikutip dari <em>Football Italia</em>.<br />\r\n<br />\r\n&quot;Mereka juga punya ide bagaimana memainkan permainannya, tapi sulit bagi kami untuk mempelajari Inter karena kami tidak tahu bagaimana mereka akan bermain.&quot;<br />\r\n<br />\r\n&quot;Mereka juga punya banyak pemain kuat, ini akan jadi pertandingan yang bagus,&quot; katanya.<br />\r\n&nbsp;</p>', '0000-00-00 00:00:00', 0, 1, 0, 'Sepak Bola', 'uploads/blog/863dcc52fc01e9ab79443bff5b811238.jpg', '', 'blog', '', 12, 'active', '2016-11-11 04:31:30', 25, '0000-00-00 00:00:00', 0),
(69, 'Cedera Hamstring, Umtiti Menepi Tiga Pekan', 'cedera-hamstring-umtiti-menepi-tiga-pekan-69', 'Aan', '<p><strong>Barcelona</strong> - Barcelona tak akan bisa memakai tenaga Samuel Umtiti dalam beberapa waktu ke depan. Cedera hamstring memaksa bek asal Prancis itu menepi selama sekitar tiga pekan.<br />\r\n<br />\r\nUmtiti mendapatkan cedera tersebut dalam sesi latihan timnas Prancis pada Rabu (9/11/2016) kemarin. Akibat cedera itu, posisinya di skuat Prancis telah digantikan oleh Eliaquim Mangala.<br />\r\n<br />\r\nUmtiti, 22 tahun, telah kembali ke Barcelona untuk menjalani serangkaian pemeriksaan medis pada Kamis (10/11). Barca telah mengumumkan hasil pemeriksaan tersebut lewat situs resmi mereka.<br />\r\n<br />\r\n&quot;Kami bisa mengonfirmasi bahwa pemain tim utama Samuel Umtiti mengalami robek hamstring di kaki kirinya dan akan absen selama sekitar tiga pekan,&quot; tulis Barca.<br />\r\n<br />\r\nDengan absen selama tiga pekan, Umtiti akan melewatkan pertandingan melawan Malaga (19/11), Celtic (23/11), Real Sociedad (27/11), dan Hercules (30/1). Namun, dia berpeluang untuk tampil pada laga <em>El Clasico</em> melawan Real Madrid (3/12).<br />\r\n<br />\r\nSelain itu, Umtiti juga tak bisa membela timnas Prancis pada laga melawan Swedia (11/11) dan Pantai Gading (15/11).<br />\r\n<br />\r\nCederanya Umtiti membuat stok pemain belakang Barca makin menipis. Aleix Vidal, Jeremy Mathieu, dan Jordi Alba juga sedang cedera. Untungnya, Gerard Pique diperkirakan akan kembali fit setelah jeda internasional.</p>', '0000-00-00 00:00:00', 0, 1, 0, 'Sepak Bola', 'uploads/blog/5f1a6d02f0ba830cae3d2bc39c390daf.jpg', '', 'blog', '', 12, 'active', '2016-11-11 04:32:51', 25, '0000-00-00 00:00:00', 0),
(70, 'Milik Bisa Main Lagi dalam Waktu 4-5 Bulan', 'milik-bisa-main-lagi-dalam-waktu-4-5-bulan-70', 'Ainul', '<p><strong>Naples</strong> - Arkadiusz Milik sudah memulai proses rehabilitasi cedera lututnya. Striker Napoli itu diperkirakan bisa merumput dalam waktu 4-5 bulan ke depan.<br />\r\n<br />\r\nMilik mendapat cedera ligamen lutut saat membela timnas Polandia bulan Oktober lalu, yang membuatnya harus naik meja operasi. Cedera ini tentu memukul Napoli yang tengah mengandalkan ketajaman Milik.<br />\r\n<br />\r\nMilik sebelum absen sudah bikin tujuh gol dan satu assist sampai awal Oktober lalu. Setelah Milik absen, performa Napoli pun menurun drastis karena mengalami tiga kekalahan dari lima laga terakhir.<br />\r\n<br />\r\nSetelah hampir sebulan menjalani pemulihan pasca-operasi, Milik menunjukkan perkembangan bagus karena telah menjalani proses pemulihan untuk mendapatkan lagi kekuatan otot-otot lututnya.<br />\r\n<br />\r\nAda kabar dari orang dalam Napoli menyebut Milik bisa bermain bola lagi dalam tempo sekitar 100 hari atau kurang dari empat bulan. Tentu saja itu kabar baik untuk Napoli yang membutuhkan tenaganya di lini depan.<br />\r\n<br />\r\nTapi, dokter yang ikut mengoperasi lutut Milik, Pier Paolo Mariani, menyanggah kabar itu, seraya memastikan pemain 22 tahun itu paling cepat bisa bermain empat bulan lagi atau sekitar bulan Maret.<br />\r\n<br />\r\n&quot;Saya bisa membuat Milik bermain lagi untuk Napoli dalam 4-5 bulan ke depan, tapi saya belum bisa memastikan itu saat ini. Saya akan lebih mengetahui kondisinya usai sesi check-up dalam 1-2 bulan ini,&quot; ujar Mariani seperti dilansir <em>Football Italia.</em><br />\r\n<br />\r\n&quot;Tidak perlu diburu-buru dan fans bisa menunggunya. Dari sisi psikologis, dia sangat-sangat baik, dia seorang atlet yang tangguh,&quot; sambungnya.<br />\r\n<br />\r\n&quot;Baik saya dan tim medis Napoli mengagumi usaha kerasnya saat ini,&quot; tutup Mariani.</p>', '0000-00-00 00:00:00', 0, 1, 0, 'Sepak Bola', 'uploads/blog/83dc008ba4ba96bb27d6f198844ccb21.jpg', '', 'blog', '', 12, 'active', '2016-11-11 04:34:29', 25, '0000-00-00 00:00:00', 0),
(71, 'f1', 'f1-71', 'Ainul', '<p>F</p>', '0000-00-00 00:00:00', 0, 1, 0, '', '', '', 'blog', '', 9, 'active', '2016-11-15 00:22:23', 25, '0000-00-00 00:00:00', 0),
(72, 'f1 tes', 'f1-tes-72', '2345678', '<p>dfghjk</p>', '0000-00-00 00:00:00', 0, 1, 0, '', '', '', 'blog', '', 9, 'delated', '2016-11-15 00:25:34', 25, '0000-00-00 00:00:00', 0),
(73, '345678', '345678-73', 'fcgvhbjnk', '<p>fghiwjdiwd</p>', '0000-00-00 00:00:00', 0, 1, 0, ' srdftgyhuj ', '', '  ', 'blog', '', 9, 'delated', '2016-11-16 07:45:44', 25, '0000-00-00 00:00:00', 0),
(74, 'Tanpa Irfan Bachdim, Timnas Indonesia Bisa Tetap Tajam', 'tanpa-irfan-bachdim-timnas-indonesia-bisa-tetap-tajam-74', 'Ainul', '<p><strong>Liputan6.com, Jakarta -</strong> Ketakutan itu akhirnya menjadi kenyataan. Beberapa hari menjelang tampil di ajang <a href="http://www.liputan6.com/tag/piala-aff-2016">Piala AFF 2016,</a> ketajaman<a href="http://www.liputan6.com/tag/timnas-indonesia"> timnas Indonesia </a>justru terancam menumpul. Pasalnya, penyerang andalan<a href="http://bola.liputan6.com/read/2652924/riedl-coret-irfan-bachdim?source=search"> Irfan Bachdim,</a> dipastikan harus absen lantaran cedera.<br />\r\n<br />\r\nPelatih <a href="http://www.liputan6.com/tag/alfred-riedl">Alfred Riedl </a>terpaksa harus mencoret penyerang Irfan lantaran cedera retak tulang fibula yang dialaminya. Cedera itu didapat Irfan usai berbenturan dengan Hansamu Yama dalam latihan timnas di Karawaci, Selasa (15/11/2016).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ama Irfan pun dipastikan tak ada dalam skuat, saat timnas Indonesia terbang ke Filipina, tempat laga-laga fase Grup A digelar. Selain tuan rumah, di Grup A, Indonesia juga bergabung dengan Thailand dan Singapura.<br />\r\n<br />\r\nCederanya Irfan jelas menjadi kehilangan besar untuk timnas. Pasalnya, Riedl memang memproyeksikan sang pemain masuk ke dalam skuat inti timnas di Piala AFF 2016. Irfan diharapkan bisa senjata utama<a href="http://bola.liputan6.com/read/2653299/jelang-piala-aff-2016-pemain-timnas-masih-boleh-makan-onde-onde?source=search"> timnas Indonesia</a> di lini depan bersama <a href="http://bola.liputan6.com/read/2653566/irfan-bachdim-cedera-timnas-kebut-pemulihan-boaz-solossa?source=search">Boaz Solossa.</a><br />\r\n<br />\r\nKiprah Irfan sejauh ini juga bisa dibilang lumayan gemilang. Irfan tampil di tiga dari empat laga uji coba yang digelar Riedl jelang Piala AFF.</p>', '0000-00-00 00:00:00', 0, 5, 0, 'Sepak Bola', 'uploads/blog/881083aca3892748115c29ce982664d3.jpg', '', 'blog', '', 12, 'active', '2016-11-16 07:36:13', 25, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `token_email` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL,
  `id_level` int(11) NOT NULL,
  `fb_id` text NOT NULL,
  `fb_picture` varchar(256) NOT NULL,
  `google_id` text NOT NULL,
  `google_picture` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `name`, `email`, `phone`, `password`, `token_email`, `status`, `id_level`, `fb_id`, `fb_picture`, `google_id`, `google_picture`, `created_at`, `modified_at`, `modified_by`) VALUES
(3, 'Ainulaa', 'AAsaya@gmail.c', '', 'a', '', 'delated', 1, '', '', '', '', '0000-00-00 00:00:00', '2016-10-26 00:10:01', 3),
(25, 'Ainul Yakin', 'muhmmd.aan@gmail.com', '', 'e0fk3i8vaVtNUGfkL5KSmGKhCcWe8ccgRs/Ulb5Ky/w2c7fYFKnAgmE3ic7+FJT/992z0f5sJLZz83GpiS+H+A==', '', 'active', 1, '', '', '', '', '2016-10-26 00:53:51', '2016-10-26 03:39:10', 25),
(26, 'Dika', 'dika@gmail.com', '', 'ZgIc07ZvHUaw2H5BS2aWuUMuMEZqBKOUy3jQVA7h1vEHVw0uBwnSPpIXfiRZUTYrNW5lWD8FtVhS1kO34lr6yg==', '', 'active', 1, '', '', '', '', '2016-10-26 03:40:05', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `auth_user`
--

CREATE TABLE `auth_user` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `token_email` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL,
  `id_level` int(11) NOT NULL,
  `fb_id` text NOT NULL,
  `fb_picture` text NOT NULL,
  `google_id` text NOT NULL,
  `google_picture` text NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_at` datetime NOT NULL,
  `profile` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_user`
--

INSERT INTO `auth_user` (`id`, `name`, `email`, `phone`, `password`, `token_email`, `status`, `id_level`, `fb_id`, `fb_picture`, `google_id`, `google_picture`, `created_at`, `created_by`, `modified_by`, `modified_at`, `profile`) VALUES
(1, 'Ainul', 'muhmmd.aan@gmail.com', '', 'yMRlf6pBmAn3STsrH1mEdVM0L0UwYNhY92koBWT+Q6hnGnyZT07P7mRIJjzDmbXPkfRFJINL+yHzeKMZyuH9hA==', '', 'active', 2, '', '', '', '', '2016-10-31 02:10:42', 0, 0, '2016-10-31 06:20:51', ''),
(3, 'Ainul', 'ainulyakin031@gmail.com', '', 'wHt+RSxW9MQkZneZThICAoAS3JNhtJvhVOp3AX54m9vQ7gTXczZ0itY3DrOjNDoFBpBBJmV83Y4tlK1Zb3AAuQ==', '', 'active', 2, '', '', '', '', '2016-10-31 04:49:06', 0, 0, '2016-10-31 04:54:33', ''),
(12, 'Muhammad', '', '', '', '', '', 2, '1116973718420052', 'https://graph.facebook.com/1116973718420052/picture?type=normal', '', '', '2016-11-03 04:28:40', 0, 0, '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `status`, `created_at`, `created_by`, `modified_at`, `modified_by`) VALUES
(9, 'f1', '', 'active', '2016-11-03 06:41:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(10, 'basket', '', 'active', '2016-11-03 06:41:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(11, 'bulutangkis', '', 'active', '2016-11-03 06:41:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(12, 'sepakbola', '', 'active', '2016-11-03 06:42:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(13, 'motogp', '', 'active', '2016-11-03 06:56:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `type` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_at` datetime NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `modifiet_at` datetime NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `name`, `parent_id`, `created_at`, `created_by`, `modifiet_at`, `modified_by`) VALUES
(1, 'admin', 0, '2016-10-04 00:00:00', 0, '2016-10-05 00:00:00', 0),
(2, 'member', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(13, 'admin a', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(14, 'member a', 2, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(15, 'admin b', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `level_access`
--

CREATE TABLE `level_access` (
  `id` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `hak_akses` text NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_at` datetime NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level_access`
--

INSERT INTO `level_access` (`id`, `id_level`, `hak_akses`, `created_at`, `created_by`, `modified_at`, `modified_by`) VALUES
(1, 1, 'dhasboard,access,article,ads,category,level,admins', '0000-00-00 00:00:00', 0, '2016-11-11 03:34:49', 25),
(3, 2, 'dhasboard', '2016-10-27 11:58:29', 26, '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_user`
--
ALTER TABLE `auth_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `image` (`image`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level_access`
--
ALTER TABLE `level_access`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `auth_user`
--
ALTER TABLE `auth_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `level_access`
--
ALTER TABLE `level_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
