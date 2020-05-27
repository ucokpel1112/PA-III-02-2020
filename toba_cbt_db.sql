/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.1.35-MariaDB : Database - toba_cbt_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`toba_cbt_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `toba_cbt_db`;

/*Table structure for table `included_not_includeds` */

DROP TABLE IF EXISTS `included_not_includeds`;

CREATE TABLE `included_not_includeds` (
  `id_ini` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `paket_wisata_id` bigint(20) unsigned NOT NULL,
  `jenis_ini` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_ini`),
  KEY `included_not_includeds_paket_wisata_id_foreign` (`paket_wisata_id`),
  CONSTRAINT `included_not_includeds_paket_wisata_id_foreign` FOREIGN KEY (`paket_wisata_id`) REFERENCES `paket_wisatas` (`id_paket`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `included_not_includeds` */

/*Table structure for table `jenis_layanans` */

DROP TABLE IF EXISTS `jenis_layanans`;

CREATE TABLE `jenis_layanans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_jenis_layanan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jenis_layanans` */

insert  into `jenis_layanans`(`id`,`nama_jenis_layanan`,`created_at`,`updated_at`) values 
(1,'Kuliner','2020-05-03 17:00:00',NULL),
(2,'Objek Wisata','2020-05-03 17:00:00',NULL),
(3,'Akomodasi','2020-05-03 17:00:00',NULL),
(4,'Transportasi','2020-05-03 17:00:00',NULL);

/*Table structure for table `kabupatens` */

DROP TABLE IF EXISTS `kabupatens`;

CREATE TABLE `kabupatens` (
  `id_kabupaten` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kabupaten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_kabupaten`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kabupatens` */

insert  into `kabupatens`(`id_kabupaten`,`nama_kabupaten`,`area`,`created_at`,`updated_at`) values 
(1,'Toba','I','2020-05-03 17:00:00',NULL),
(2,'Tapanuli Utara','I','2020-05-03 17:00:00',NULL),
(3,'Tapanuli Tengah','II','2020-05-03 17:00:00',NULL),
(4,'Samosir','I','2020-05-03 17:00:00',NULL),
(5,'Simalungun','II','2020-05-03 17:00:00',NULL);

/*Table structure for table `komunitas` */

DROP TABLE IF EXISTS `komunitas`;

CREATE TABLE `komunitas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_komunitas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kabupaten` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `komunitas` */

insert  into `komunitas`(`id`,`nama_komunitas`,`id_kabupaten`,`created_at`,`updated_at`) values 
(1,'Komunitas A',1,NULL,NULL),
(2,'Komunitas B',1,NULL,NULL),
(3,'Komunitas C',1,NULL,NULL),
(4,'Komunitas D',1,NULL,NULL);

/*Table structure for table `komunitas_members` */

DROP TABLE IF EXISTS `komunitas_members`;

CREATE TABLE `komunitas_members` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `komunitas_id` bigint(20) unsigned NOT NULL,
  `member_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `komunitas_members_komunitas_id_foreign` (`komunitas_id`),
  KEY `komunitas_members_member_id_foreign` (`member_id`),
  CONSTRAINT `komunitas_members_komunitas_id_foreign` FOREIGN KEY (`komunitas_id`) REFERENCES `komunitas` (`id`),
  CONSTRAINT `komunitas_members_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `komunitas_members` */

insert  into `komunitas_members`(`id`,`komunitas_id`,`member_id`,`created_at`,`updated_at`) values 
(2,2,2,'2020-05-23 22:11:38',NULL),
(6,1,6,'2020-05-24 10:15:49','2020-05-24 10:15:49'),
(7,1,7,'2020-05-24 10:33:53','2020-05-24 10:33:53');

/*Table structure for table `layanan_wisatas` */

DROP TABLE IF EXISTS `layanan_wisatas`;

CREATE TABLE `layanan_wisatas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_layanan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenisLayanan_id` bigint(20) unsigned NOT NULL,
  `kabupaten_id` bigint(20) unsigned NOT NULL,
  `member_id` bigint(20) unsigned NOT NULL,
  `deskripsi_layanan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `layanan_wisatas_jenislayanan_id_foreign` (`jenisLayanan_id`),
  KEY `layanan_wisatas_kabupaten_id_foreign` (`kabupaten_id`),
  KEY `layanan_wisatas_member_id_foreign` (`member_id`),
  CONSTRAINT `layanan_wisatas_jenislayanan_id_foreign` FOREIGN KEY (`jenisLayanan_id`) REFERENCES `jenis_layanans` (`id`),
  CONSTRAINT `layanan_wisatas_kabupaten_id_foreign` FOREIGN KEY (`kabupaten_id`) REFERENCES `kabupatens` (`id_kabupaten`),
  CONSTRAINT `layanan_wisatas_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `layanan_wisatas` */

insert  into `layanan_wisatas`(`id`,`nama_layanan`,`jenisLayanan_id`,`kabupaten_id`,`member_id`,`deskripsi_layanan`,`created_at`,`updated_at`) values 
(1,'Hotel Bintang 4 Labersa',3,1,2,'Nikmati layanan hotel terbaik di Toba.','2020-05-03 10:00:00','2020-05-06 01:35:23'),
(2,'\r\nBabi Panggang Karo (BPK) Tambar Lihe',1,1,2,'Wisata Kuliner Khas Batak Karo untuk Toba','2020-05-03 10:00:00',NULL),
(3,'Rumah Makan Robi Minang',1,1,2,'Makanan Khas Minang Untuk Toba','2020-05-03 10:00:00',NULL),
(4,'Hotel dan villa Tiara Bunga Bintang 3 ',3,1,2,'Tempat tinggal yang Nyaman, indah dan tenang untuk...','2020-05-03 10:00:00',NULL);

/*Table structure for table `members` */

DROP TABLE IF EXISTS `members`;

CREATE TABLE `members` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_KTP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `members_user_id_foreign` (`user_id`),
  CONSTRAINT `members_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `members` */

insert  into `members`(`id`,`user_id`,`photo`,`no_KTP`,`created_at`,`updated_at`) values 
(2,27,'helmuth.jpg','11417003','2020-05-24 00:39:13',NULL),
(6,34,'pas_foto.png','11417005','2020-05-24 10:15:49','2020-05-24 10:15:49'),
(7,35,'pas_foto.jpg','123','2020-05-24 10:33:52','2020-05-24 10:33:52');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2020_04_18_135644_create_kabupatens_table',1),
(4,'2020_04_18_141804_create_paket_wisatas_table',1),
(5,'2020_04_21_074944_create_included_not_includeds_table',1),
(6,'2020_04_24_150742_create_jenis_layanans_table',1),
(7,'2020_04_27_174743_create_rekenings_table',1),
(8,'2020_05_11_171751_create_sesis_table',1),
(9,'2020_05_11_183155_create_pemesanans_table',1),
(10,'2020_05_11_183211_create_transaksis_table',1),
(11,'2020_05_22_122611_create_members_table',1),
(12,'2020_05_23_122314_create_komunitas_table',1),
(13,'2020_05_23_123232_create_komunitas_members_table',1),
(14,'2020_05_23_124936_create_layanan_wisatas_table',1),
(15,'2020_05_23_125602_create_paket_layanans_table',1);

/*Table structure for table `paket_layanans` */

DROP TABLE IF EXISTS `paket_layanans`;

CREATE TABLE `paket_layanans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `paket_wisata_id` bigint(20) unsigned NOT NULL,
  `layanan_wisata_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `paket_layanans_paket_wisata_id_foreign` (`paket_wisata_id`),
  KEY `paket_layanans_layanan_wisata_id_foreign` (`layanan_wisata_id`),
  CONSTRAINT `paket_layanans_layanan_wisata_id_foreign` FOREIGN KEY (`layanan_wisata_id`) REFERENCES `layanan_wisatas` (`id`),
  CONSTRAINT `paket_layanans_paket_wisata_id_foreign` FOREIGN KEY (`paket_wisata_id`) REFERENCES `paket_wisatas` (`id_paket`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `paket_layanans` */

/*Table structure for table `paket_wisatas` */

DROP TABLE IF EXISTS `paket_wisatas`;

CREATE TABLE `paket_wisatas` (
  `id_paket` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_paket` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_paket` bigint(20) NOT NULL,
  `availability` int(11) NOT NULL,
  `durasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `jenis_paket` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_paket` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rencana_perjalanan` text COLLATE utf8mb4_unicode_ci,
  `tambahan` text COLLATE utf8mb4_unicode_ci,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_paket`),
  KEY `paket_wisatas_kabupaten_id_foreign` (`kabupaten_id`),
  CONSTRAINT `paket_wisatas_kabupaten_id_foreign` FOREIGN KEY (`kabupaten_id`) REFERENCES `kabupatens` (`id_kabupaten`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `paket_wisatas` */

insert  into `paket_wisatas`(`id_paket`,`nama_paket`,`harga_paket`,`availability`,`durasi`,`status`,`jenis_paket`,`deskripsi_paket`,`rencana_perjalanan`,`tambahan`,`gambar`,`kabupaten_id`,`created_at`,`updated_at`) values 
(3,'Wisata Danau Toba',2200000,1,'3 Hari 2 Malam',1,'Backpacker Regular','<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Oxygen; font-size: 15px; text-align: justify;\">Nikmati Paket Wisata&nbsp;<a href=\"https://id.wikipedia.org/wiki/Danau_Toba\" style=\"color: rgb(64, 144, 229); transition: all 0.2s ease-in-out 0s; border-bottom: 1px dashed transparent;\">Danau Toba</a>&nbsp;bersama&nbsp;<a href=\"https://www.pesonaindonesia.com/\" style=\"color: rgb(64, 144, 229); transition: all 0.2s ease-in-out 0s; border-bottom: 1px dashed transparent;\">Pesona Indonesia</a>&nbsp;Tour &amp; Travel. Temukan indahnya pesona Danau Toba di pulau Sumatera, menikmati suasana sejuk menyegarkan, hamparan air jernih membiru, dan pemandangan memesona pegunungan hijau. Temukan pengalaman serta teman yang baru, nikmati indah dan eksonisnya wisata di Danau Toba dengan berbagai pesona wisata yang ada di wilayah Danau Toba Sumatera Utara Indonesia.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Oxygen; font-size: 15px; text-align: justify;\">Jika berkunjung ke Sumatera maka Anda wajib untuk menjelajahi Danau Toba, sebuah danau tekto-vulkanik dengan ukuran panjang 100 kilometer dan lebar 30 kilometer yang terletak di Provinsi Sumatera Utara, Indonesia. Danau ini merupakan danau terbesar di Indonesia dan Asia Tenggara. Di tengah danau terdapat sebuah pulau vulkanik bernama Pulau Samosir. Danau Toba akan memberikan pesona wisata yang tak akan terlupakan oleh Anda. Bagaimana, Anda tertarik mengikuti Paket Wisata Danau Toba? Bagi Anda yang tertarik dengan Paket Wisata Danau Toba, kami membuka Open Trip khusus untuk Anda. Berikut rangkaian perjalanan yang kami tawarkan</p><h2 style=\"font-family: Oxygen; font-weight: 700; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; font-size: 1.467em; color: rgb(51, 51, 51); text-align: justify;\"><strong style=\"font-weight: bold;\">Paket Wisata Danau Toba<br></strong></h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Oxygen; font-size: 15px; text-align: justify;\">Danau Toba merupakan keajaiban alam menakjubkan di Pulau Sumatera. Sulit membayangkan ada tempat yang lebih indah untuk dikunjungi di Sumatera Utara selain danau ini. Suasana sejuk menyegarkan, hamparan air jernih membiru, dan pemandangan memesona pegunungan hijau adalah sebagian kecil saja dari imaji danau raksasa yang berada 900 meter di atas permukaan laut itu.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Oxygen; font-size: 15px; text-align: justify;\">Danau Toba adalah danau berkawah seluas 1.145 kilometer persegi. Di tengahnya berdiam sebuah pulau dengan luas yang hampir sebanding dengan luas negara Singapura. Danau Toba sebenarnya lebih menyerupai lautan daripada danau mengingat ukurannya. Oleh karena itu, Danau Toba ditempatkan sebagai danau terluas di Asia Tenggara dan terbesar kedua di dunia sesudah Danau Victoria di Afrika. Danau Toba juga termasuk danau terdalam di dunia yaitu sekira 450 meter.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Oxygen; font-size: 15px; text-align: justify;\">Danau Toba diperkirakan para ahli terbentuk setelah letusan gunung api super sekira 73.000-75.000 tahun lalu. Saat itu 2.800 km kubik bahan vulkanik dimuntahkan Gunung Toba yang meletus hingga debu vulkanik yang ditiup angin menyebar ke separuh wilayah Bumi. Letusannya terjadi selama 1 minggu dan lontaran debunya mencapai 10 kilometer di atas permukaan laut.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Oxygen; font-size: 15px; text-align: justify;\">Akibat letusan gunung api super (Gunung Toba) diperkirakan telah menyebabkan kematian massal dan kepunahan beberapa spesies mahluk hidup. Letusan Gunung Toba telah menyebabkan terjadinya perubahan cuaca bumi dan mulainya masuk ke zaman es sehingga mempengaruhi peradaban dunia.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Oxygen; font-size: 15px; text-align: justify;\">Bagi masyarakat sekitar Danau Toba memiliki sejarah magis yang dipercayai sebagai tempat tinggal Namborru (tujuh dewi nenek moyang Suku Batak). Apabila suku Batak akan melakukan upacara di sekitar danau mak mereka harus berdoa dan meminta izin Namborru terlebih dahulu.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Oxygen; font-size: 15px; text-align: justify;\">Pulau Samosir adalah pulau yang unik karena merupakan pulau vulkanik di tengah Danau Toba. Ketinggiannya 1.000 meter di atas permukaan laut. Meskipun telah menjadi tempat tujuan wisata sejak lama, Samosir merupakan keindahan alam yang belum terjamah. Di tengah Pulau Samosir ini masih ada lagi dua danau indah yang diberi nama Danau Sidihoni dan Danau Aek Natonang. Daerah sekitar Danau Toba memiliki hutan-hutan pinus yang tertata asri. Di pinggiran Danau Toba terdapat beberapa air terjun yang sangat mempesona. Di sekitar Danau Toba juga akan Anda dapati tempat pemandian air belarang.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Oxygen; font-size: 15px; text-align: justify;\">Di Pulau Samosir Anda juga dapat menemukan pegunungan berkabut, air terjun yang jernih untuk berenang, dan masyarakat peladang. Keramahan masyarakat Batak pun akan memikat Anda karena kemanapun Anda pergi maka dengan segera dapat menemukan teman baru.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Oxygen; font-size: 15px; text-align: justify;\">Di Kota Parapat yang merupakan semenanjung yang menonjol ke danau Anda dapat Anda nikmati pemandangan spektakuler Danau Toba. Parapat dihuni masyarakat Batak Toba dan Batak Simalungan yang dikenal memiliki sifat ceria dan mudah bergaul, terkenal pula senang mendendangkan lagu bertema cinta yang riang namun penuh perasaan.</p>','<h3 style=\"font-family: Oxygen; font-weight: 700; color: rgb(51, 51, 51);\">Hari&nbsp;1:&nbsp;Medan-Parapat-Samosir</h3><h4 class=\"gdlr-core-toggle-box-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content\" style=\"box-sizing: inherit; border: 0px rgb(225, 225, 225); outline: 0px; vertical-align: baseline; background: rgb(243, 243, 243); margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 23px 25px 22px; font-weight: 600; font-family: Poppins, sans-serif; font-size: 13px; color: rgb(38, 38, 38); cursor: pointer; border-radius: 3px; transition: background 300ms ease 0s;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Oxygen; font-size: 15px; font-weight: 400; background-color: rgb(255, 255, 255);\">Pagi hari tiba di Bandara Kuala Namu Medan, kemudian berangkat menuju Parapat via Pematang Siantar melewati jalan lintas Trans Sumatera selama enam jam perjalanan. Horas! Tiba di Parapat lalu menyeberang ke Pulau Samosir dan mendarat di kawasan Tuktuk.&nbsp;<em>Check-in</em>&nbsp;di hotel (Toledo atau Carolina Hotel), makan malam dan istirahat.</p></h4><h3 style=\"font-family: Oxygen; font-weight: 700; color: rgb(51, 51, 51);\">Hari&nbsp;2:&nbsp;Samosir</h3><h4 class=\"gdlr-core-toggle-box-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content\" style=\"box-sizing: inherit; border: 0px rgb(225, 225, 225); outline: 0px; vertical-align: baseline; background: rgb(243, 243, 243); margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 23px 25px 22px; font-weight: 600; font-family: Poppins, sans-serif; font-size: 13px; color: rgb(38, 38, 38); cursor: pointer; border-radius: 3px; transition: background 300ms ease 0s;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Oxygen; font-size: 15px; font-weight: 400; background-color: rgb(255, 255, 255);\"><strong style=\"font-weight: bold;\">Ambarita, Huta Siallagan.</strong><br>Sarapan pagi di hotel, dilanjutkan kunjungan ke Desa Ambarita untuk melihat rumah adat Batak di Huta Siallagan. Di sana, terdapat meja batu yang dahulu digunakan oleh raja untuk persidangan, tempat pemasungan dan tempat eksekusi mati bagi pelanggar hukum adat atau musuh raja. Tempat ini juga merupakan asal dari legenda kanibalisme orang Batak.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Oxygen; font-size: 15px; font-weight: 400; background-color: rgb(255, 255, 255);\"><strong style=\"font-weight: bold;\">Desa Tomok</strong><br>Kunjungan dilanjutkan ke dengan wisata sejarah di Desa Tomok. Terdapat makam batu Raja Sidabutar yang konon merupakan orang pertama yang datang ke Pulau Samosir. Di Desa Tomok, peserta dapat melihat Tarian Sigale-Gale, yakni boneka berbentuk manusia yang dapat menari Tortor (tarian khas Batak Toba). Selain itu, di Tomok anda juga bisa berbelanja beraneka ragam souvenir. Sore hari kembali ke Tutuk untuk beristirahat.</p></h4><h3 style=\"font-family: Oxygen; font-weight: 700; color: rgb(51, 51, 51);\">Hari&nbsp;3:&nbsp;Pangururan-Tongging-Medan</h3><h4 class=\"gdlr-core-toggle-box-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content\" style=\"box-sizing: inherit; border: 0px rgb(225, 225, 225); outline: 0px; vertical-align: baseline; background: rgb(243, 243, 243); margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 23px 25px 22px; font-weight: 600; font-family: Poppins, sans-serif; font-size: 13px; color: rgb(38, 38, 38); cursor: pointer; border-radius: 3px; transition: background 300ms ease 0s;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Oxygen; font-size: 15px; font-weight: 400; background-color: rgb(255, 255, 255);\"><strong style=\"font-weight: bold;\">Pangururan</strong><br>Setelah sarapan dan check-out hotel, peserta berangkat menuju Pangururan.<br>Pangururan adalah lokasi yang menyatukan daratan Pulau Samosir dengan Pulau Sumatera. Disini ada lokasi yang dinamakan puncak Tele, tempat melihat danau Toba dari puncak tertinggi.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Oxygen; font-size: 15px; font-weight: 400; background-color: rgb(255, 255, 255);\"><strong style=\"font-weight: bold;\">Tongging dan Sipiso-Piso</strong><br>Tongging adalah dataran tinggi tanah Karo, dimana kita juga bisa melihat panorama danau Toba dengan sisi yang berbeda. Selain itu disini juga terdapat air terjun sipiso-piso yang tersohor itu. Dari sini kita kembali ke Bandara Kualanamu dan pulang ke tempat masing-masing.</p></h4>\r\n<p><b>Things to Bring:</b><br><span style=\"color: rgb(51, 51, 51); font-family: Oxygen; font-size: 13.995px;\">Topi, sepatu, sandal, kacamata, sunblock, obat-obatan pribadi, kamera dan perlengkapannya, power bank, kaos, Tas (Bodypack/daypack/backpack)</span><br></p>\r\n',NULL,'1587832490.jpg',1,'2020-05-03 17:00:00',NULL),
(4,'Amazing Tour Package Padang Bukittinggi 3D2N',1200000,3,'3 Hari 2 Malam',0,'Wisata Budaya','<p><font color=\"#467fe7\" face=\"Poppins, sans-serif\"><span style=\"box-sizing: inherit; border-style: initial; border-color: rgb(225, 225, 225); border-image: initial; outline-color: initial; outline-style: initial; background: rgb(255, 255, 255); transition: background 300ms ease 0s, color 300ms ease 0s, border-color 300ms ease 0s; font-size: 14px;\">Amazing Tour Package Padang Bukittinggi 3D2N</span></font><span style=\"color: rgb(51, 51, 51); font-family: Poppins, sans-serif; font-size: 14px;\">&nbsp;merupakan sebuah paket wisata dengan mengunjungi di kota di&nbsp;</span><font color=\"#467fe7\" face=\"Poppins, sans-serif\"><span style=\"box-sizing: inherit; border-style: initial; border-color: rgb(225, 225, 225); border-image: initial; outline-color: initial; outline-style: initial; background: rgb(255, 255, 255); transition: background 300ms ease 0s, color 300ms ease 0s, border-color 300ms ease 0s; font-size: 14px;\">Sumatera Barat</span></font><span style=\"color: rgb(51, 51, 51); font-family: Poppins, sans-serif; font-size: 14px;\">&nbsp;yang terkenal dengan wisata kuliner dan alamnya.</span><br></p>','<h4 class=\"gdlr-core-toggle-box-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content\" style=\"box-sizing: inherit; border: 0px rgb(225, 225, 225); outline: 0px; vertical-align: baseline; background: rgb(243, 243, 243); margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 23px 25px 22px; font-weight: 600; font-family: Poppins, sans-serif; font-size: 13px; color: rgb(38, 38, 38); cursor: pointer; border-radius: 3px; transition: background 300ms ease 0s;\"><span class=\"gdlr-core-head\" style=\"box-sizing: inherit; border: 0px rgb(225, 225, 225); outline: 0px; vertical-align: baseline; background: transparent; margin: 0px 13px 0px 0px; padding: 0px; color: rgb(25, 25, 25);\">DAY 1</span>AIRPORT – BUKITTINGGI TOUR (L / D)</h4><p style=\"box-sizing: inherit; border: 0px rgb(225, 225, 225); outline: 0px; vertical-align: baseline; background: rgb(243, 243, 243); margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 23px 25px 22px; font-weight: 600; font-family: Poppins, sans-serif; font-size: 13px; color: rgb(38, 38, 38); cursor: pointer; border-radius: 3px; transition: background 300ms ease 0s;\"><span style=\"color: rgb(51, 51, 51); font-size: 14px; font-weight: 400; background-color: rgb(255, 255, 255);\">Setibanya di Bandara Internasional Minangkabau, selamat datang di kota kuliner. Pemandu wisata kami yang berpengalaman akan menyambut Anda. Setelah persiapan bagasi selesai kemudian menuju lokal restoran. Setelah makan siang,tTransfer menuju Bukittinggi melalui Lembah Anai. Diperjalanan berhenti di Air Terjun Batang Anai dan Pusat Informasi Budaya Minangkabau. Kunjungan diteruskan ke Desa Pandai Sikek untuk membeli Kerajinan Tenun “KainSongket”, yang ditenun secara manual (sulam, telekung, dan ukiran kayu). Jalan-jalan sore dan belanja di Pasar Atas diseputaran Jam Gadang. Proses check-in hotel *** BukitTinggi , kemudian makan malam disiapkan di hotel. Tour malam untuk melihat tarian tradisional Minangkabau (opsional tour).</span><br></p><h4 class=\"gdlr-core-toggle-box-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content\" style=\"box-sizing: inherit; border: 0px rgb(225, 225, 225); outline: 0px; vertical-align: baseline; background: rgb(243, 243, 243); margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 23px 25px 22px; font-weight: 600; font-family: Poppins, sans-serif; font-size: 13px; color: rgb(38, 38, 38); cursor: pointer; border-radius: 3px; transition: background 300ms ease 0s;\"><span class=\"gdlr-core-head\" style=\"box-sizing: inherit; border: 0px rgb(225, 225, 225); outline: 0px; vertical-align: baseline; background: transparent; margin: 0px 13px 0px 0px; padding: 0px; color: rgb(25, 25, 25);\">DAY 2</span>BUKITTINGGI TOUR - PADANG (L / D)</h4><p style=\"box-sizing: inherit; border: 0px rgb(225, 225, 225); outline: 0px; vertical-align: baseline; background: rgb(243, 243, 243); margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 23px 25px 22px; font-weight: 600; font-family: Poppins, sans-serif; font-size: 13px; color: rgb(38, 38, 38); cursor: pointer; border-radius: 3px; transition: background 300ms ease 0s;\"><span style=\"color: rgb(51, 51, 51); font-size: 14px; font-weight: 400; background-color: rgb(255, 255, 255);\">Setelah sarapan di hotel, tour ke Ngarai Sianok (Grand Canyon) dan Japanese Tunnel, Benteng Fort De Kock dan Kebun Binatang. Makan siang di restoran Pondok Flora, lalu lanjutkan ke King’s Palace (Istana Lindung Bulan di Batu Sangkar). Kemudian tour diteruskan menuju Padang. City tour mengunjungi Pantai Padang, Siti Nurbaya Brigde, Check in hotel *** Padang. Makan malam disiapkan dilokal restoran.</span><br></p><h4 class=\"gdlr-core-toggle-box-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content\" style=\"box-sizing: inherit; border: 0px rgb(225, 225, 225); outline: 0px; vertical-align: baseline; background: rgb(243, 243, 243); margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 23px 25px 22px; font-weight: 600; font-family: Poppins, sans-serif; font-size: 13px; color: rgb(38, 38, 38); cursor: pointer; border-radius: 3px; transition: background 300ms ease 0s;\"><span class=\"gdlr-core-head\" style=\"box-sizing: inherit; border: 0px rgb(225, 225, 225); outline: 0px; vertical-align: baseline; background: transparent; margin: 0px 13px 0px 0px; padding: 0px; color: rgb(25, 25, 25);\">DAY 3&nbsp; PADANG - AIRPORT</span>(L / D)</h4><p style=\"box-sizing: inherit; border: 0px rgb(225, 225, 225); outline: 0px; vertical-align: baseline; background: rgb(243, 243, 243); margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 23px 25px 22px; font-weight: 600; font-family: Poppins, sans-serif; font-size: 13px; color: rgb(38, 38, 38); cursor: pointer; border-radius: 3px; transition: background 300ms ease 0s;\"><span style=\"color: rgb(51, 51, 51); font-size: 14px; font-weight: 400; background-color: rgb(255, 255, 255);\">Setelah makan pagi di hotel,proses check out dan tour ke China Town dan Pasar Raya hingga diantar ke bandara Minangkabau. Tour selesai dan sampai jumpa pada tour kami berikutnya</span><br></p>','Things to Bring:\r\nTopi, sepatu, sandal, kacamata, sunblock, obat-obatan pribadi, kamera dan perlengkapannya, power bank, kaos, Tas (Bodypack/daypack/backpack)\r\n','1587832096.jpg',1,'2020-05-29 17:00:00','2020-05-14 10:17:11');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `pemesanans` */

DROP TABLE IF EXISTS `pemesanans`;

CREATE TABLE `pemesanans` (
  `id_pemesanan` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `sesi_id` bigint(20) unsigned NOT NULL,
  `status` int(11) NOT NULL,
  `pesan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_peserta` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pemesanan`),
  KEY `pemesanans_user_id_foreign` (`user_id`),
  KEY `pemesanans_sesi_id_foreign` (`sesi_id`),
  CONSTRAINT `pemesanans_sesi_id_foreign` FOREIGN KEY (`sesi_id`) REFERENCES `sesis` (`id_sesi`),
  CONSTRAINT `pemesanans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pemesanans` */

/*Table structure for table `rekenings` */

DROP TABLE IF EXISTS `rekenings`;

CREATE TABLE `rekenings` (
  `id_rekening` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_bank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_rekening` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_rekening`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `rekenings` */

insert  into `rekenings`(`id_rekening`,`nama_bank`,`nomor_rekening`,`gambar`,`created_at`,`updated_at`) values 
(1,'Bank BNI','123123123123123','logo_bni.png','2020-05-04 17:00:00',NULL),
(2,'Bank BRI','234234234234234','logo_bri.png','2020-05-04 17:00:00',NULL),
(3,'Bank Mandiri','345345345345345','logo_mandiri.jpg','2020-05-04 17:00:00',NULL);

/*Table structure for table `sesis` */

DROP TABLE IF EXISTS `sesis`;

CREATE TABLE `sesis` (
  `id_sesi` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `paket_id` bigint(20) unsigned NOT NULL,
  `kuota_peserta` int(11) NOT NULL,
  `jadwal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_sesi`),
  KEY `sesis_paket_id_foreign` (`paket_id`),
  CONSTRAINT `sesis_paket_id_foreign` FOREIGN KEY (`paket_id`) REFERENCES `paket_wisatas` (`id_paket`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sesis` */

insert  into `sesis`(`id_sesi`,`paket_id`,`kuota_peserta`,`jadwal`,`status`,`created_at`,`updated_at`) values 
(1,3,30,'2020-05-23 20:19:39',1,'2020-05-23 20:19:39',NULL),
(2,4,30,'2020-05-23 20:19:39',1,'2020-05-23 20:20:13',NULL);

/*Table structure for table `transaksis` */

DROP TABLE IF EXISTS `transaksis`;

CREATE TABLE `transaksis` (
  `id_transaksi` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pemesanan_id` bigint(20) unsigned NOT NULL,
  `rekening_id` bigint(20) unsigned NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `transaksis_pemesanan_id_foreign` (`pemesanan_id`),
  KEY `transaksis_rekening_id_foreign` (`rekening_id`),
  CONSTRAINT `transaksis_pemesanan_id_foreign` FOREIGN KEY (`pemesanan_id`) REFERENCES `pemesanans` (`id_pemesanan`),
  CONSTRAINT `transaksis_rekening_id_foreign` FOREIGN KEY (`rekening_id`) REFERENCES `rekenings` (`id_rekening`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `transaksis` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_WA` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_HP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `register_status` tinyint(1) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`no_WA`,`no_HP`,`email`,`email_verified_at`,`password`,`token`,`register_status`,`status`,`created_at`,`updated_at`) values 
(1,'Helmuth Simon Tampubolon','082160085708','082160085708','helmutsimon123@gmail.com','2020-05-22 11:15:56','$2y$10$I/m8qhdimty0VurRg4MgPezCBIk3.b7XBFklxYKzHgemhIqUdhIl2',NULL,0,2,'2020-05-04 07:54:42','2020-05-04 07:54:42'),
(2,'admin','','','admin@gmail.com',NULL,'$2y$10$8H/YLsCDnqY9jHCvE/ev3uknTWdj4tVagMkv37NQsaWCDABgNie8u',NULL,1,2,'2020-05-04 20:26:43','2020-05-04 20:26:43'),
(3,'anggotacbt','','','anggotacbt@gmail.com',NULL,'$2y$10$QDabKDiT8AY0dqoeC.lonOf5nsmBSYbZKGidSO2T8e.AXa6FJ2oTW',NULL,1,1,'2020-05-04 20:46:15','2020-05-04 20:46:15'),
(27,'Kristopel','082166478847','082166478847','forotherbussines@gmail.com','2020-05-25 09:12:14','$2y$10$3FuAQR823wao1fn.veqiLetPAlFEiOf58YLEA76kwh2RN9bVV6/Bq',NULL,4,1,'2020-05-20 10:08:52','2020-05-25 09:12:14'),
(34,'Indah Tampubolon','082166478847','082166478847','forcollageitdel@gmail.com','2020-05-25 09:12:43','$2y$10$qjrpDvY2NZldhlpnMgybT.716jTj4v9T3pEfYJ2vHm2sYPNQ055/i',NULL,1,1,'2020-05-24 10:15:49','2020-05-25 09:12:43'),
(35,'asd','123','123','helmuthsimontampubolon@gmail.com','2020-05-25 09:14:16','$2y$10$0pPxZukDnBVPpXPi66HG0.REs2xKWLNdMqDjqNGI2TxX1F5JNGC7O',NULL,4,1,'2020-05-24 10:33:52','2020-05-25 09:14:16');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
