-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Agu 2024 pada 13.00
-- Versi server: 8.0.30
-- Versi PHP: 8.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kosstis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kosts`
--

CREATE TABLE `kosts` (
  `id` int NOT NULL,
  `nama_kos` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `pemilik` varchar(100) NOT NULL,
  `telp_pemilik` varchar(50) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `panjang` int NOT NULL,
  `lebar` int NOT NULL,
  `kamar_kosong` int NOT NULL,
  `harga_min` int NOT NULL,
  `harga_max` int NOT NULL,
  `batasan_agama` varchar(200) NOT NULL,
  `s_ac` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Tidak tersedia',
  `s_kipasangin` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Tidak tersedia',
  `s_ventilasi` varchar(20) NOT NULL DEFAULT 'Tidak tersedia',
  `deskripsi` text NOT NULL,
  `s_wifi` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Tidak tersedia',
  `s_kamar_mandi` varchar(50) NOT NULL,
  `pinpoint` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `batasan_mahasiswa` varchar(50) NOT NULL,
  `tipe_kos` varchar(50) NOT NULL,
  `tipe_bayar` varchar(50) NOT NULL,
  `watt_listrik` int NOT NULL,
  `s_listrik` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Tidak tersedia',
  `s_mejabelajar` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Tidak tersedia',
  `s_kasur` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Tidak tersedia',
  `s_parkir` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Tidak tersedia',
  `s_lemari` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Tidak tersedia',
  `s_kulkas` varchar(20) NOT NULL DEFAULT 'Tidak tersedia',
  `s_jemuran` varchar(20) NOT NULL DEFAULT 'Tidak tersedia',
  `s_rooftop` varchar(20) NOT NULL DEFAULT 'Tidak tersedia',
  `s_mesincuci` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Tidak tersedia',
  `foto` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `s_dapur` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Tidak tersedia',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kosts`
--

INSERT INTO `kosts` (`id`, `nama_kos`, `slug`, `pemilik`, `telp_pemilik`, `lokasi`, `panjang`, `lebar`, `kamar_kosong`, `harga_min`, `harga_max`, `batasan_agama`, `s_ac`, `s_kipasangin`, `s_ventilasi`, `deskripsi`, `s_wifi`, `s_kamar_mandi`, `pinpoint`, `batasan_mahasiswa`, `tipe_kos`, `tipe_bayar`, `watt_listrik`, `s_listrik`, `s_mejabelajar`, `s_kasur`, `s_parkir`, `s_lemari`, `s_kulkas`, `s_jemuran`, `s_rooftop`, `s_mesincuci`, `foto`, `s_dapur`, `created_at`, `updated_at`) VALUES
(21, 'Candice', 'candice', 'Bu Meta', '0192812', 'Jl. Raya Bogor', 5, 4, 12, 12000, 15000, 'Muslim saja', 'Tersedia', 'Tidak tersedia', 'Tidak tersedia', '=-', 'Tidak tersedia', 'Dalam', 'https://www.google.co.id/maps/place/7%C2%B041\'16.3%22S+110%C2%B023\'17.2%22E/@-7.687857,110.3855251,17z/data=!3m1!4b1!4m4!3m3!8m2!3d-7.687857!4d110.3881?entry=ttu', 'umum', 'on', 'Bulanan', 900, 'Sudah termasuk biaya kos', 'Tidak tersedia', 'Tidak tersedia', 'Tidak tersedia', 'Tidak tersedia', 'Tidak tersedia', 'Tidak tersedia', 'Tidak tersedia', 'Tidak tersedia', '1724161545-qris.png', 'Tidak tersedia', '2024-08-21 13:16:43', '2024-08-21 13:16:43'),
(22, 'Candice', 'candice-2', 'Bu Meta', '0192812', 'Jl. Raya Bogor', 5, 4, 12, 12000, 15000, 'Muslim saja', 'Tersedia', 'Tidak tersedia', 'Tidak tersedia', '=-', 'Tidak tersedia', 'Dalam', 'https://www.google.co.id/maps/place/7%C2%B041\'16.3%22S+110%C2%B023\'17.2%22E/@-7.687857,110.3855251,17z/data=!3m1!4b1!4m4!3m3!8m2!3d-7.687857!4d110.3881?entry=ttu', 'umum', 'on', 'Bulanan', 900, 'Sudah termasuk biaya kos', 'Tidak tersedia', 'Tidak tersedia', 'Tidak tersedia', 'Tidak tersedia', 'Tidak tersedia', 'Tidak tersedia', 'Tidak tersedia', 'Tidak tersedia', '1724161545-qris.png', 'Tidak tersedia', '2024-08-21 13:16:56', '2024-08-21 13:16:56'),
(23, 'Candice', 'candice-3', 'Bu Meta', '0192812', 'Jl. Raya Bogor', 3, 4, 100, 12, 15, 'Muslim saja', 'Tidak tersedia', 'Tidak tersedia', 'Tersedia', 'aaaa', 'Tidak tersedia', 'Dalam', 'https://www.google.co.id/maps/place/7%C2%B041\'16.3%22S+110%C2%B023\'17.2%22E/@-7.687857,110.3855251,17z/data=!3m1!4b1!4m4!3m3!8m2!3d-7.687857!4d110.3881?entry=ttu', 'umum', 'on', 'Bulanan', 900, 'Sudah termasuk biaya kos', 'Tidak tersedia', 'Tidak tersedia', 'Tersedia', 'Tersedia', 'Tidak tersedia', 'Tidak tersedia', 'Tidak tersedia', 'Tersedia', '1724161545-qris.png', 'Tersedia', '2024-08-23 09:00:43', '2024-08-23 09:00:43'),
(24, 'A', 'a', 'A', 'A', 'A', 3, 4, 100, 12, 13, 'Muslim saja', 'Tidak tersedia', 'Tersedia', 'Tidak tersedia', 'OK', 'Tidak tersedia', 'Dalam', 'A', 'umum', 'Laki-Laki', 'Bulanan', 900, 'Sudah termasuk biaya kos', 'Tidak tersedia', 'Tersedia', 'Tidak tersedia', 'Tidak tersedia', 'Tidak tersedia', 'Tersedia', 'Tidak tersedia', 'Tersedia', '1724161545-qris.png', 'Tersedia', '2024-08-23 09:22:24', '2024-08-23 09:22:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `author` varchar(100) NOT NULL,
  `slug` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `body` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `title`, `author`, `slug`, `body`, `created_at`, `updated_at`) VALUES
(4, 'Halte Bundaran HI', 'Anton', 'halte-bundaran-hi', 'lorem', '2024-08-19 04:42:13', '2024-08-19 04:42:13'),
(5, 'Et tempore omnis perspiciatis praesentium quia quia est consequatur nesciunt sint non quasi.', 'Marguerite Weimann', 'quae-exercitationem-minima-voluptatem-esse-aut-ut', 'Velit asperiores omnis quod et repellendus qui. Totam quia perferendis quia blanditiis reprehenderit dolores. Qui excepturi error quas illum. Ipsa maiores ipsa aperiam quis.', '2024-08-19 05:19:32', '2024-08-19 05:19:32'),
(6, 'Non ab error omnis nobis ipsa et corrupti dolores error ut.', 'Clyde Hoeger', 'vel-et-aut-tempore-temporibus-sed-minima-dolor', 'Quis molestiae ex voluptatem sit. Voluptatum fuga enim harum sit aut quia. Dignissimos est voluptatem omnis temporibus qui et quam. Reprehenderit perferendis est aut deserunt.', '2024-08-19 05:19:32', '2024-08-19 05:19:32'),
(7, 'Velit est repudiandae libero ipsum sequi eligendi ea voluptates voluptatem.', 'Prof. Gust Waelchi Jr.', 'ut-vitae-mollitia-repellendus-sed-aliquam-exercitationem-reiciendis-earum-enim-iusto', 'Molestiae in voluptates praesentium odio. Nesciunt necessitatibus aliquid quam quia in esse in. Unde pariatur labore quod rerum. Sint nam maxime quam animi voluptatem.', '2024-08-19 05:19:32', '2024-08-19 05:19:32'),
(8, 'Aperiam laborum earum labore qui pariatur dolorem optio.', 'Tod Herzog', 'est-ex-excepturi-rerum-dolor-saepe-beatae-at-sint-laborum-et-nihil', 'Voluptatum esse sunt nisi dolores et repellat. Cupiditate libero voluptas et quam qui. At cumque voluptate quis veniam esse rerum sapiente velit.', '2024-08-19 05:19:32', '2024-08-19 05:19:32'),
(9, 'Eos iusto tenetur accusamus architecto sit eaque aut enim illum.', 'Ms. Dayna West', 'expedita-nulla-expedita-dolor-quia-rerum-eligendi-consequatur-voluptas', 'Tempora velit qui quia voluptates. Exercitationem ad velit quod consequatur necessitatibus ut. Aperiam dicta aut sapiente numquam. Aut ad ut dolores quae consequatur numquam magni.', '2024-08-19 05:19:32', '2024-08-19 05:19:32'),
(10, 'Ipsam aut amet nemo autem velit tempore vitae corrupti sit ut dolorem velit ducimus.', 'Jerrell Von', 'excepturi-ea-doloremque-harum-qui-ex-itaque-facere-eum-accusantium-omnis-eum-dicta-optio', 'Numquam enim dolor nesciunt optio adipisci consectetur quis qui. Nihil repellendus ex deserunt deserunt voluptatem reprehenderit. Mollitia porro sit aut velit suscipit maxime necessitatibus.', '2024-08-19 05:19:32', '2024-08-19 05:19:32'),
(11, 'Repellendus dolor sapiente occaecati molestiae qui esse velit quis quibusdam quis aut.', 'Kane Steuber', 'voluptas-non-et-qui-in-ut-totam-at-molestiae-modi-sapiente-accusantium-debitis-sit', 'Qui quo odit praesentium amet aut quae. Eos enim optio ipsam laborum ut ipsa. Eligendi hic error quo cupiditate autem.', '2024-08-19 05:19:32', '2024-08-19 05:19:32'),
(12, 'Distinctio voluptates dolore sed nesciunt iusto autem.', 'Giovani Kuphal', 'itaque-illo-cupiditate-repudiandae-assumenda-explicabo-distinctio-occaecati-inventore-sit-aliquam-et', 'Qui quas laboriosam minima earum a impedit laudantium. Incidunt qui quos repellendus inventore accusantium eaque alias voluptas. Ducimus voluptas aperiam eaque quia porro voluptatum deleniti.', '2024-08-19 05:19:32', '2024-08-19 05:19:32'),
(13, 'Perspiciatis cum dignissimos eveniet nulla est ex consequatur assumenda molestiae ipsum.', 'Jermey Beatty', 'exercitationem-esse-ex-ducimus-nobis-at-et-consectetur', 'Iusto nobis et corrupti optio qui aut incidunt. Praesentium in suscipit voluptates sit commodi. Placeat magni ab vel tempore praesentium in id. Omnis non unde corporis corrupti dolores qui illo.', '2024-08-19 05:19:32', '2024-08-19 05:19:32'),
(14, 'Impedit quod ut necessitatibus pariatur ipsa tenetur.', 'Easton Hand', 'odio-qui-rerum-quia-quos-voluptate-voluptatem', 'Possimus et autem aliquid veniam voluptatem. Et beatae exercitationem corporis ut. Eos et dolores et.', '2024-08-19 05:19:32', '2024-08-19 05:19:32'),
(15, 'Temporibus ullam rem nemo velit totam dicta et cupiditate laudantium non.', 'Prof. Anissa Harber', 'a-voluptas-beatae-quisquam-ad-inventore-provident-consequuntur-impedit-unde-quam-quas-voluptatibus', 'Corporis molestiae aliquam dolores debitis explicabo. Enim assumenda est nesciunt eos dolorem sit.', '2024-08-19 05:19:32', '2024-08-19 05:19:32'),
(16, 'Dolores non deleniti quia sit dolores enim iusto et perferendis.', 'Mariane McClure', 'omnis-inventore-expedita-neque-est-non-aliquid-libero-quia-nemo-vero', 'Alias consequatur cumque fugit ut quos perspiciatis. Minus ut ipsum dolorum doloremque iste et. Mollitia cumque expedita qui debitis nisi est.', '2024-08-19 05:21:12', '2024-08-19 05:21:12'),
(17, 'Eaque qui est aut omnis quaerat aut libero ratione est aspernatur.', 'Gerhard Lebsack', 'dolorem-quis-ab-laborum-quo-id-voluptatem-vel', 'Quisquam est nisi consequatur atque laboriosam. Magni fugit occaecati hic nisi. Sunt quis aut at animi explicabo dicta reiciendis.', '2024-08-19 05:21:12', '2024-08-19 05:21:12'),
(18, 'Ipsa nostrum est et incidunt tempora dolor vel porro.', 'Tom Bernier', 'quis-id-voluptas-voluptas-nihil-est-eligendi-temporibus-quia', 'Natus ut similique velit qui nihil id. Autem voluptas beatae qui harum modi dolores. Aspernatur consequatur nesciunt veniam quod nihil inventore.', '2024-08-19 05:21:12', '2024-08-19 05:21:12'),
(19, 'Doloribus commodi quo rem ex temporibus quia voluptatem laboriosam explicabo.', 'Kimberly Rodriguez', 'laboriosam-sed-dolores-corrupti-sit-blanditiis-quas-recusandae', 'Dolorem velit voluptatem ut qui placeat. Dicta neque qui voluptatibus. Aut natus sint aliquam eligendi aperiam vero. Nihil natus consequatur dolores necessitatibus laboriosam.', '2024-08-19 05:21:12', '2024-08-19 05:21:12'),
(20, 'Iusto vel quod ducimus reprehenderit quae impedit porro praesentium enim.', 'Karlie Johnson', 'a-incidunt-dolores-aut-quia-doloribus-id-maxime-voluptatem-dolorem-sequi', 'Ducimus delectus aliquid molestiae sed dolores tempore error molestiae. Exercitationem placeat officia iure ipsam fugiat eum. Consequatur et ad necessitatibus dolorem voluptatibus.', '2024-08-19 05:21:12', '2024-08-19 05:21:12'),
(21, 'Voluptas ut magnam ut explicabo odio cumque voluptatem.', 'Dr. Ivory Eichmann MD', 'praesentium-reprehenderit-reiciendis-odio-esse-optio-molestiae-enim-nemo-excepturi-voluptate-veritatis-quae-reprehenderit', 'Alias est sunt et omnis reprehenderit rem qui. Expedita facere ab placeat. Nam doloribus et voluptas vero. Nesciunt quia cumque optio. Ab qui sed ea vel delectus error sunt.', '2024-08-19 05:22:10', '2024-08-19 05:22:10'),
(22, 'Excepturi perspiciatis possimus assumenda dolorem doloribus maiores harum et fuga doloribus ipsa.', 'Sabryna Herman', 'facere-molestiae-qui-quasi-quaerat-corporis-vitae-harum', 'Quam voluptas voluptatum deleniti. Expedita placeat excepturi assumenda aliquam. Velit error ut atque sed. Cupiditate modi deserunt distinctio quisquam voluptate.', '2024-08-19 05:22:10', '2024-08-19 05:22:10'),
(23, 'Ut praesentium autem delectus accusantium odio est aspernatur.', 'Otis Hegmann', 'esse-commodi-et-doloribus-porro-dolores-veritatis-mollitia-exercitationem-reiciendis-assumenda-odit', 'Et quia dolores reiciendis beatae et nostrum fugit. Sit dolores ad ullam ut. Accusamus autem omnis ut.', '2024-08-19 05:22:10', '2024-08-19 05:22:10'),
(24, 'Harum doloremque laudantium id inventore rerum eveniet quod atque dolorem tempora culpa maiores magni.', 'Miss Dora Ferry', 'eos-at-minus-totam-delectus-neque-occaecati-consectetur-expedita-autem-blanditiis-veritatis-accusamus', 'Et recusandae nam ea quam delectus consequatur laborum. Autem est iusto suscipit. Eos enim voluptatem officia sequi non corporis quos. Ut vel dolore assumenda est. Reprehenderit illum sequi labore.', '2024-08-19 05:22:10', '2024-08-19 05:22:10'),
(25, 'Qui nostrum aut rerum rerum id aut iusto est fugit.', 'Mrs. Lilla Bergnaum', 'numquam-minima-itaque-tempora-ea-et-beatae-ut', 'Autem dolore esse quas quis. Et voluptatibus quia ab dolor. Eum sit qui dignissimos alias. Deserunt est eum assumenda assumenda nemo et labore.', '2024-08-19 05:22:10', '2024-08-19 05:22:10'),
(26, 'Inventore doloremque quis harum nemo magni et quia molestiae id vel a.', 'Ms. Linnea Thiel DDS', 'dolor-et-omnis-et-sit-in-rerum-mollitia-voluptas', 'Nulla vel voluptatibus voluptate vitae. Velit amet recusandae et inventore. At necessitatibus suscipit rem ipsum. Sint modi qui sint esse.', '2024-08-19 05:22:10', '2024-08-19 05:22:10'),
(27, 'Amet id vel numquam exercitationem itaque nesciunt itaque quis cumque.', 'Travon Toy', 'praesentium-cum-inventore-quod-temporibus-dicta-iure-reprehenderit-qui-itaque', 'Itaque ex eos officia architecto fugit ratione facere. Quas quo delectus iste ut et doloremque. Voluptatem et reiciendis nesciunt mollitia dolores at labore.', '2024-08-19 05:22:10', '2024-08-19 05:22:10'),
(28, 'Corrupti et omnis et vel aut aliquid et magni cupiditate ipsa.', 'Mr. Dino Cummerata PhD', 'maxime-omnis-odit-ex-sapiente-a-error-explicabo-quo-consequuntur-voluptatibus-dolorem-autem', 'Aut omnis quisquam praesentium dolorem eveniet tempora sapiente. Rerum laborum atque eos et veritatis sapiente porro. Accusantium minus assumenda dolorem accusamus.', '2024-08-19 05:22:10', '2024-08-19 05:22:10'),
(29, 'Blanditiis magni asperiores sed iste minus iure optio laboriosam molestiae enim.', 'Reuben Senger MD', 'fuga-quaerat-ducimus-consequuntur-cumque-officia-voluptas-enim-magnam-illo-voluptatum', 'Rerum eos maiores omnis quis eveniet sapiente adipisci deleniti. Qui illum rerum nisi repellendus.', '2024-08-19 05:22:10', '2024-08-19 05:22:10'),
(30, 'Doloribus aut quibusdam corrupti ad velit voluptatem.', 'Caden Hilpert Sr.', 'voluptatem-facere-iusto-voluptatem-maxime-nam-et-facere-dicta-perspiciatis-ut', 'Laborum quidem in dicta veritatis. Deleniti ipsa dolores enim accusantium minima velit quia nostrum. Odit sed voluptatem eos aut. Possimus amet eveniet non delectus quod maiores voluptatem.', '2024-08-19 05:22:10', '2024-08-19 05:22:10'),
(31, 'Eveniet quis aut sed commodi quos aperiam omnis mollitia.', 'Alexandria Wolf MD', 'ex-quia-eos-ut-dolor-ratione-ad', 'Eum dolore odit mollitia nisi ut natus. Quia excepturi sapiente autem.', '2024-08-19 05:22:10', '2024-08-19 05:22:10'),
(32, 'Praesentium rerum dolore blanditiis quasi cumque rerum aperiam aut est.', 'Kamille Abshire', 'ad-eos-nemo-et-nobis-est-quia-occaecati-numquam-dolorum-animi-nihil-dolor-et', 'Aliquam tempore in aspernatur dolorem dolorem. In at architecto vero eaque illo vitae nemo. Quisquam at veniam eaque molestias omnis sapiente earum.', '2024-08-19 05:22:10', '2024-08-19 05:22:10'),
(33, 'Alias libero vel consectetur sed et mollitia architecto qui quod iusto maiores.', 'Kaden Rolfson', 'et-voluptas-consectetur-aut-dolores-unde-eum-voluptatibus', 'Odio eveniet porro explicabo corporis laboriosam. Pariatur non officia autem qui eligendi fugit voluptate. Dolor nobis aut quam ullam.', '2024-08-19 05:22:10', '2024-08-19 05:22:10'),
(34, 'Ut necessitatibus harum at blanditiis quas repudiandae sunt molestias rerum voluptas accusamus totam.', 'Darby Douglas', 'aut-dignissimos-ipsam-necessitatibus-ex-sunt-nam-suscipit', 'Reiciendis voluptas quas molestiae enim. Voluptatibus odit facilis quisquam illo. Repellendus dolores voluptatibus vitae maxime quo accusantium rerum.', '2024-08-19 05:22:10', '2024-08-19 05:22:10'),
(35, 'Cum quam pariatur enim reiciendis quod nemo sed omnis.', 'Beau Hermann', 'ut-ratione-illo-modi-repellendus-dolor-qui-nihil-sit-omnis', 'Non nulla esse non. Reiciendis aut pariatur aut nemo ipsa atque. Voluptas nisi labore quo quaerat. Laborum maiores autem soluta est.', '2024-08-19 05:22:10', '2024-08-19 05:22:10'),
(36, 'Porro similique eum molestiae blanditiis sed unde labore voluptate aut corrupti dicta perspiciatis.', 'Frederique Braun', 'facilis-iste-molestiae-minus-earum-ea-quae-ea-omnis-et-perspiciatis-consequatur-saepe', 'Unde hic provident suscipit sint. Est sit in itaque id maiores qui. Tempora vitae distinctio incidunt possimus excepturi cumque. Perferendis eligendi culpa quia. Doloremque aspernatur ut repudiandae.', '2024-08-19 05:22:10', '2024-08-19 05:22:10'),
(37, 'Et ex culpa sit illo reiciendis velit.', 'Mrs. Michaela Gorczany', 'et-non-ipsam-ipsam-exercitationem-est-non-eum-quas-dolor-quidem-quam-aut-rerum', 'Voluptatum optio autem sint officia voluptatem a autem. Odit in quas sit id molestiae libero atque.', '2024-08-19 05:22:10', '2024-08-19 05:22:10'),
(38, 'Modi ut libero suscipit ratione voluptate sunt ipsam voluptatem dicta officia possimus.', 'Laurel Zieme MD', 'adipisci-amet-modi-sint-cum-voluptatum-aliquid-aut', 'Quia ut voluptatem doloribus nesciunt explicabo laboriosam ea magnam. Nihil id et vel officiis ex repellendus nam qui. Quasi rerum ipsum aliquam rerum et illo cumque.', '2024-08-19 05:22:10', '2024-08-19 05:22:10'),
(39, 'Accusantium sint tempore tempora iste tenetur culpa porro dolorem officiis ut atque voluptas.', 'Adonis Wisoky', 'voluptatem-incidunt-nihil-ipsum-impedit-enim-illo-molestias-qui', 'Ea omnis sapiente adipisci non non. Sunt quaerat deleniti earum et et. Dolore non eum nemo et non magni aut.', '2024-08-19 05:22:10', '2024-08-19 05:22:10'),
(40, 'Quis temporibus qui velit vitae ullam vero nam.', 'Murl Bogisich DDS', 'consequuntur-laudantium-qui-repellat-et-aliquid-alias-accusamus', 'Quod placeat tempora facere consequatur molestiae veritatis. Aspernatur minus officia soluta dolorum vero. Quae occaecati rerum neque explicabo est. Sed ut ex et in eum in.', '2024-08-19 05:22:10', '2024-08-19 05:22:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('C3YzUDZCvvdda8dzl3QxAMmsEvXhwt4XQtDRLvRd', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUXk2bkRXdmgzMjhHUnJLTTFESDh5V05XOWp6WGZHZm1IbE1PNEVpWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9pbmZvLWtvcy1zdGlzLnRlc3QvZGV0YWlsLWtvcy9jYW5kaWNlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1724417957),
('hVpVmaFpuR5OT28etIu31bC8QnKsgU412eKKCWY5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaG5GalBGQmRBUXVkVmdhR0d6SkZEMzdueXY4VVlScWg4YlpEajFkOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9pbmZvLWtvcy1zdGlzLnRlc3QvZGV0YWlsLWtvcy9jYW5kaWNlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1724407516),
('QUP34EG8tpHrVEV4bY5EjpFagS9tSzKoXVzp27fq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSURXNkp1aDdrUUFhOE1tMUZGZGIxSGlXRWs5eENzdndpbTNHNmhwTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9pbmZvLWtvcy1zdGlzLnRlc3QvZGV0YWlsLWtvcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1724402807);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2024-08-18 20:32:12', '$2y$12$jihCn.0ZsgO8yzmbQqgMs.7VKZ2qkLtyVyZwEsGY8/DgSrozC8xzu', 'TaF8P5H1es', '2024-08-18 20:32:12', '2024-08-18 20:32:12'),
(2, 'Ms. Janie Pollich', 'sarmstrong@example.org', '2024-08-18 22:00:28', '$2y$12$lSKZEKiIKMbWM0/KK2v3qeHSG0/ik.8wZTiODih.k/Q6HMgvk8pQG', 'bCFKUFZi1U', '2024-08-18 22:00:28', '2024-08-18 22:00:28'),
(3, 'Prof. Estrella West', 'tyson43@example.com', '2024-08-18 22:02:56', '$2y$12$lSKZEKiIKMbWM0/KK2v3qeHSG0/ik.8wZTiODih.k/Q6HMgvk8pQG', 'SaKlQ4Ojuk', '2024-08-18 22:02:56', '2024-08-18 22:02:56'),
(4, 'Mr. Jonathon White III', 'lempi.weissnat@example.net', '2024-08-18 22:02:56', '$2y$12$lSKZEKiIKMbWM0/KK2v3qeHSG0/ik.8wZTiODih.k/Q6HMgvk8pQG', 'zXJSyhM2zq', '2024-08-18 22:02:57', '2024-08-18 22:02:57'),
(5, 'Dr. Lelah Feeney PhD', 'green.afton@example.com', '2024-08-18 22:02:56', '$2y$12$lSKZEKiIKMbWM0/KK2v3qeHSG0/ik.8wZTiODih.k/Q6HMgvk8pQG', 'fQAxRbV1S9', '2024-08-18 22:02:57', '2024-08-18 22:02:57'),
(6, 'Jordi Hegmann', 'vaughn.kihn@example.org', '2024-08-18 22:02:56', '$2y$12$lSKZEKiIKMbWM0/KK2v3qeHSG0/ik.8wZTiODih.k/Q6HMgvk8pQG', 'Edy2PRLr3n', '2024-08-18 22:02:57', '2024-08-18 22:02:57'),
(7, 'Mr. Olin Mante III', 'lkoss@example.com', '2024-08-18 22:02:56', '$2y$12$lSKZEKiIKMbWM0/KK2v3qeHSG0/ik.8wZTiODih.k/Q6HMgvk8pQG', 'HgPYVv2HyU', '2024-08-18 22:02:57', '2024-08-18 22:02:57'),
(8, 'Ubaldo Huels', 'dylan.kuvalis@example.org', '2024-08-18 22:02:56', '$2y$12$lSKZEKiIKMbWM0/KK2v3qeHSG0/ik.8wZTiODih.k/Q6HMgvk8pQG', '6rXEJq0W7P', '2024-08-18 22:02:57', '2024-08-18 22:02:57'),
(9, 'Ignacio White', 'haag.jonas@example.com', '2024-08-18 22:02:56', '$2y$12$lSKZEKiIKMbWM0/KK2v3qeHSG0/ik.8wZTiODih.k/Q6HMgvk8pQG', 'ngwgZwlrFT', '2024-08-18 22:02:57', '2024-08-18 22:02:57'),
(10, 'Birdie Hilpert IV', 'rogahn.julia@example.com', '2024-08-18 22:02:56', '$2y$12$lSKZEKiIKMbWM0/KK2v3qeHSG0/ik.8wZTiODih.k/Q6HMgvk8pQG', 'nEOAjckoeu', '2024-08-18 22:02:57', '2024-08-18 22:02:57'),
(11, 'Murphy Crist', 'michaela.veum@example.com', '2024-08-18 22:02:56', '$2y$12$lSKZEKiIKMbWM0/KK2v3qeHSG0/ik.8wZTiODih.k/Q6HMgvk8pQG', 'V4k45wNrTf', '2024-08-18 22:02:57', '2024-08-18 22:02:57'),
(12, 'Jena Schneider', 'gcruickshank@example.org', '2024-08-18 22:02:56', '$2y$12$lSKZEKiIKMbWM0/KK2v3qeHSG0/ik.8wZTiODih.k/Q6HMgvk8pQG', 'tIlrOjKLfl', '2024-08-18 22:02:57', '2024-08-18 22:02:57'),
(13, 'Dr. Brianne Stiedemann', 'cassin.gail@example.org', NULL, '$2y$12$lSKZEKiIKMbWM0/KK2v3qeHSG0/ik.8wZTiODih.k/Q6HMgvk8pQG', 'Z0BjohjTrm', '2024-08-18 22:04:39', '2024-08-18 22:04:39'),
(14, 'Dr. Heber O\'Conner IV', 'mckenzie.meghan@example.org', NULL, '$2y$12$lSKZEKiIKMbWM0/KK2v3qeHSG0/ik.8wZTiODih.k/Q6HMgvk8pQG', 'wWfbyYztzg', '2024-08-18 22:04:39', '2024-08-18 22:04:39'),
(15, 'Malachi Fritsch', 'jmills@example.com', NULL, '$2y$12$lSKZEKiIKMbWM0/KK2v3qeHSG0/ik.8wZTiODih.k/Q6HMgvk8pQG', 'sAddlG74uJ', '2024-08-18 22:04:39', '2024-08-18 22:04:39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kosts`
--
ALTER TABLE `kosts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kosts`
--
ALTER TABLE `kosts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
