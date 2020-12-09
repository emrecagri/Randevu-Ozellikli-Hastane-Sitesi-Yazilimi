-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Ara 2020, 22:45:05
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hastane`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kadi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `sifre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `adsoyad` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `ipadresi` varchar(50) DEFAULT NULL,
  `kayittarihi` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kadi`, `sifre`, `adsoyad`, `mail`, `ipadresi`, `kayittarihi`) VALUES
(1, 'admin', 'fd54ssd7', 'Yönetici 1 Ad Soyad', 'yonetici1@mtestail.mail', '127.0.0.1', '16.05.2019'),
(6, 'personel1', 'd5fu9uy3', 'Personel 1 Ad Soyad', 'personel1@testmail.mail', '127.0.0.1', '18.05.2019');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevular`
--

CREATE TABLE `randevular` (
  `id` int(11) NOT NULL,
  `adsoyad` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `telno` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `randevutarih` date NOT NULL,
  `bolum` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `ipadresi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `kayittarihi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `durum` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `randevular`
--

INSERT INTO `randevular` (`id`, `adsoyad`, `telno`, `email`, `randevutarih`, `bolum`, `mesaj`, `ipadresi`, `kayittarihi`, `durum`) VALUES
(1, 'Test Ad Soyad', '5000000000', 'testmail@testmail.mail', '2019-06-22', 'Diyetisyen', 'Ek mesajım yok.', '127.0.0.1', '15.05.2019', 'Aktif'),
(2, 'Test Ad Soyad', '5000000000', 'testmail@testmail.mail', '2019-07-10', 'Genel Cerrahi', 'Penisiline alerjim var.', '127.0.0.1', '15.05.2019', 'Aktif'),
(18, 'Test Ad Soyad', '5000000000', 'testmail@testmail.com', '2020-12-07', 'Genel Cerrahi', 'Bu bir test randevudur.', '::1', '06.12.2020', 'Aktif'),
(5, 'Test Ad Soyad', '5000000000', 'testmail@testmail.mail', '2019-08-26', 'Diyetisyen', 'Randevum sırasında tekerlekli sandalye istiyorum.', '127.0.0.1', '15.05.2019', 'Aktif'),
(6, 'Test Ad Soyad', '5000000000', 'testmail@testmail.mail', '2019-05-19', 'Kardioloji', '', '127.0.0.1', '16.05.2019', 'Iptal Edilmis'),
(16, 'Test Ad Soyad', '5000000000', 'testmail@testmail.mail', '2019-07-07', 'Genel Cerrahi', '', '127.0.0.1', '20.05.2019', 'Aktif'),
(15, 'Test Ad Soyad', '5000000000', 'testmail@testmail.mail', '2019-06-25', 'Genel Cerrahi', 'Yok', '127.0.0.1', '19.05.2019', 'Aktif'),
(14, 'Test Ad Soyad', '5000000000', 'testmail@testmail.mail', '2019-07-13', 'Kardioloji', '', '127.0.0.1', '19.05.2019', 'Aktif');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `randevular`
--
ALTER TABLE `randevular`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `randevular`
--
ALTER TABLE `randevular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
