-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `motorcycle`
--

-- --------------------------------------------------------

--
-- 資料表結構 `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) UNSIGNED NOT NULL,
  `categoryname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `categorysort` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `category`
--

INSERT INTO `category` (`categoryid`, `categoryname`, `categorysort`) VALUES
(1, '光陽機車(KYMCO)', 1),
(2, '三陽機車(SYM)', 2),
(3, '宏佳騰機車(Aeon)', 3);

-- --------------------------------------------------------

--
-- 資料表結構 `orderdetail`
--

CREATE TABLE `orderdetail` (
  `orderdetailid` int(11) UNSIGNED NOT NULL,
  `orderid` int(11) UNSIGNED DEFAULT NULL,
  `productid` int(11) UNSIGNED DEFAULT NULL,
  `productname` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unitprice` int(11) UNSIGNED DEFAULT NULL,
  `quantity` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) UNSIGNED NOT NULL,
  `total` int(11) UNSIGNED DEFAULT NULL,
  `deliverfee` int(11) UNSIGNED DEFAULT NULL,
  `grandtotal` int(11) UNSIGNED DEFAULT NULL,
  `customername` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customeremail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customeraddress` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customerphone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paytype` enum('ATM匯款','線上刷卡','貨到付款') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ATM匯款'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `productid` int(11) UNSIGNED NOT NULL,
  `categoryid` int(11) UNSIGNED NOT NULL,
  `productname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `productprice` int(11) UNSIGNED DEFAULT NULL,
  `productimages` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `product`
--

INSERT INTO `product` (`productid`, `categoryid`, `productname`, `productprice`, `productimages`, `description`, `color`) VALUES
(1, 1, 'LIKE 150', 83500, 'kmo1.png', '1.光陽機車生產\r\n2.226mm煞車碟盤\r\n3.電子式車速感應器\r\n4.時尚液晶儀表板\r\n5.前土除飾徽\r\n6.LED尾燈\r\n7.自動開啟座墊\r\n8.USB充電座\r\n9.旅行置物箱加置物箱LED燈\r\n10.手拉式飛旋踏板', '灰和黑色'),
(2, 1, 'Racing S 150', 101000, 'kmo2.png', '1.光陽機車生產\r\n2.5V車用充電插座\r\n3.前碟煞240mm浮動浪花碟盤\r\n4.HI Power LED前方向燈\r\n5.仿賽重車霸氣頭燈&定位燈\r\n6.雙LED導光條戰隼尾燈\r\n7.Navigation 騎乘導航\r\n8.摩登超跑座墊', '黑和白和紅色'),
(3, 1, 'GP 125 ABS', 48800, 'kmo3.png', '1.光陽機車生產\r\n2.滾針搖臂競速引擎\r\n3.飛利浦H4放射大燈\r\n4.高亮度尾燈\r\n5.220MM浪花碟\r\n6.One-Touch飛旋踏板裝置\r\n7.防滑舒適座墊\r\n8.智慧LCD儀表和個性風指針儀表', '棕和黑色'),
(4, 1, 'NICE 100', 58000, 'kmo4.png', '1.光陽機車生產\r\n2.320mm加長型前踏板\r\n3.620mm舒適平坦長坐墊\r\n4.730mm超低座高\r\n5.優雅版儀表板\r\n6.飛利浦高亮度頭燈\r\n7.雙層立體尾燈\r\n8.加長型USB充電掛勾\r\n9.24L超大容量置物箱\r\n10.雙層式後座腳踏板', '黑和藍色'),
(5, 1, '\r\nKrider 400\r\n', 240000, 'kmo5.png', '1.光陽機車生產\r\n2.前避震器預壓可調整\r\n3.LCD液晶儀表\r\n4.獵鷹式LED大燈\r\n5.USB充電插孔\r\n6.對向四活塞輻射卡鉗\r\n7.LED高便是尾燈\r\n8.7段可調後避震\r\n9.鋼管鷗翼式搖臂\r\n10.水冷雙缸引擎', '黑和紅色'),
(6, 1, 'COZY學生電動自行車', 45000, 'kmo6.png', '1.光陽機車生產\r\n2.電動車\r\n3.抽取式電池(母電池)\r\n4.800輪殼馬達\r\n5.客製化精品車側飾板', '黑和藍色'),
(7, 2, 'FIDDLE  125', 83000, 'smo1.png', '1.三陽機車生產\r\n2.長寬高:1865*700*1115mm\r\n3.排氣量:124.9CC\r\n4.重量:116kg\r\n5.儀表板:LED式\r\n6.坐墊開啟:中控鎖開啟(自動彈起)+按鍵\r\n', '淺棕和黑色'),
(8, 2, 'FNX 125\r\n', 92000, 'smo2.png', '1.三陽機車生產\r\n2.零延遲起動系統ZRSG\r\n3.零後仰懸吊系統\r\n4.長寬高:1890*705*1110mm\r\n5.排氣量:124.9 CC\r\n6.重量:115kg\r\n7.儀錶板:液晶式\r\n8.中控鎖開啟+按鍵', '藍和黑色'),
(9, 2, 'FIDDLE LT', 74800, 'smo3.png', '1.三陽機車生產\r\n2.車型為女生設計\r\n3.水滴型側視線條\r\n4.美型荷葉露珠大燈設計\r\n5.水漾晶瑩LED定位燈\r\n6.初學咬花方向燈\r\n7.繽紛幾何設計貼飾\r\n8.長寬高:1780*690*1065mm\r\n9.排氣量:115.6 CC\r\n10.重量:115kg\r\n11.儀錶板:液晶式\r\n12.坐墊開啟:中控鎖開啟', '白色和黑色'),
(10, 2, 'DRG BT', 105000, 'smo4.png', '1.三陽機車生產\r\n2.重心集中化設計-中心點集中近50:50完美車身配比，將重量集中於底盤\r\n，降低前後晃動不適感，高速過彎不偏移，42度最大傾角\r\n3.零後仰懸吊系統\r\n4.膝部空間優化設計\r\n5.長寬高:1990*735*1130mm\r\n6.排氣量:158 CC\r\n7.重量:135kg', '深黑色'),
(11, 2, 'CRUiSYM', 188000, 'smo5.png', '1.三陽機車生產\r\n2.長寬高:2715*760*1440mm\r\n3.排氣量:278.3 CC\r\n4.重量:198 kg\r\n5.儀錶板:液晶式\r\n6.坐墊開放:中控鎖開啟\r\n', '紅和黑色'),
(12, 2, 'E-WOO', 72000, 'smo6.png', '1.三陽機車生產\r\n2.電動車\r\n3.長寬高:1765*625*1070mm\r\n4.重量:80kg\r\n5.坐墊開啟:中控鎖開啟', '藍色和黑色'),
(13, 3, 'ES150R', 87000, 'amo1.jpg', '1.宏佳騰生產\r\n2.智慧儀表系統 導航介面\r\n3.CROXERA APP 導航介面\r\n4.LED魚眼是頭燈\r\n5.4v 滾針搖臂噴射引擎\r\n6.35mm正叉及前後碟煞\r\n7.光柱式晝行燈\r\n8.輕量化十爪鋁合金輪圈', '藍、白和黑色'),
(14, 3, 'OZS150', 67000, 'amo2.jpg', '1.宏佳騰生產\r\n2.LED前位置燈\r\n3.全景式賽車巡戈尾燈\r\n4.熄火開關\r\n5.12吋鋁合金輪框\r\n6.4v滾針搖臂噴射引擎\r\n7.USB充電座', '黑、紅、白色'),
(15, 3, 'DORY125 ABS', 79880, 'amo3.jpg', '1.宏佳騰生產\r\n2.天使光LED大燈\r\n3.全新ABS防鎖煞車系統\r\n4.西門子噴射系統\r\n5.加長坐墊雙載更舒適和加長坐墊雙載更舒適\r\n6.超大容量車廂空間\r\n7.超省力中柱\r\n8.雙軌道均光LED\r\n9.寬敞前置物空間\r\n10.多功能加大前置物空間\r\n11.隱藏式雙掛勾', '黑和白色'),
(16, 3, 'DORY115', 59800, 'amo4.jpg', '1.宏佳騰生產\r\n2.雙軌道均光LED尾燈\r\n3.次世代4v滾針搖臂和噴射引擎\r\n4.超省力駐車架\r\n5.寬敞前置物腳踏空間\r\n6.超大容量車廂空間\r\n7.隱藏式雙掛勾設計\r\n8.杯架空間加大及隔間巧思設計\r\n9.雙載最佳舒適加長坐墊\r\n10.潮流數位儀表板\r\n11.LED定位燈', '紅、黑色'),
(17, 3, '3D-350R', 288000, 'amo5.jpg', '1.宏家騰生產\r\n2.346cc 水冷4v滾針搖臂引擎\r\n3.跑旅級混合式儀表\r\n4.LED魚眼大燈\r\n5.胎壓偵測器\r\n6.高至動力CBS+連動煞車系統\r\n7.HTS液壓系統駐車拉桿\r\n8.籠型結構高剛性車體\r\n9.輕量化鋁合金輪圈\r\n10.QC3.0快充插座及前置物空間\r\n11.超大置物箱', '紅、黑色'),
(18, 3, 'Ai-1 ABS', 99800, 'amo6.jpg', '1.宏佳騰生產\r\n2.電動車\r\n3.超體感椅墊\r\n4.路格化風鏡\r\n5.雙USB與車廂燈\r\n6.潮鑽輪框\r\n7.獨家CROXERA智慧儀表系統\r\n8.BOSCH 10 ABS 煞車系統\r\n9.鋁合金輪圈輕量化\r\n10.調校跑車化懸吊系統和煞車制動力全面升級\r\n11.超大置物箱', '黑、藍色');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- 資料表索引 `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`orderdetailid`);

--
-- 資料表索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `orderdetailid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
