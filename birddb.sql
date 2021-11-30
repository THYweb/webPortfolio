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
-- 資料庫： `birddb`
--

-- --------------------------------------------------------

--
-- 資料表結構 `bird`
--

CREATE TABLE `bird` (
  `id` int(100) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scname` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enname` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `bird`
--

INSERT INTO `bird` (`id`, `name`, `scname`, `enname`, `feature`, `location`, `pic`, `image`) VALUES
(1, '棕腹大仙鶲 ', 'Niltava davidi ', 'Fujian Niltava ', '(1).體長:18cm。\r\n(2).虹膜黑褐色，嘴黑色，腳灰黑色。\r\n(3).類似棕腹仙鶲。\r\n(4).雄鳥頭上亮藍色範圍較小，羽色較暗淡，下腹至尾下覆蓋羽毛羽色漸淡，尾下覆蓋羽毛接近白色。\r\n(5).雌鳥腹部較白。', '分布於中國南部，越冬於泰國和中南半島。生活於山區濃密樹林，經常在密林下層和林下灌叢中活動，很喜歡跳至地面捕食昆蟲。', '台中市都會公園', 'birdpic/bird1.jpg'),
(2, '野鴝(紅喉歌鴝)', 'Luscina calliope', 'Siberian Rubythroat', '(1).體長:16cm。\r\n(2).虹膜黑褐色、嘴黑褐色、腳粉褐色。\r\n(3).雄鳥背面褐色、眼睛是黑色，眉毛和嘴顎部分是白色，喉嚨部分是紅色偏橘色，胸前灰褐色，喉嚨、胸部交界有黑色細紋，翅膀到腹和尾下褐色。\r\n(4).雌鳥類似雄鳥，但眉毛和嘴顎部分是黃白色，眼睛是黑褐色，喉嚨部分是白色，有些成熟個體喉嚨部分是淡紅色斑，胸部是淡褐色。', '單獨出現於平地至低海拔空曠草地、農耕地、低矮灌木叢，生性害羞，經常植物底部和地面活動，以昆蟲為食，停棲時身體廷直，尾巴經常上下擺動，繁殖位於東北亞、越冬於印度、中國南方和東南亞。', '台中市北屯區南興公園 \r\n', 'birdpic/bird2.jpg'),
(3, '酒紅朱雀', 'Carpodacus formosanus', 'Taiwan Rosefinch', '(1).酒紅朱雀是台灣特有種。\r\n(2).體長:15cm。\r\n(3).虹膜暗褐色，腳紅褐色。\r\n(4).雄鳥除翅膀和尾巴羽毛是黑褐色，全身為亮麗的暗紅色，眉毛和三級飛羽末端是白色。\r\n(5).雌鳥全身暗褐色，背和腹面有黑色縱斑，三級飛羽末端是白色。', '出現於中、高海拔山區有針、闊葉混合林，經常於灌叢、箭竹、草叢附近活動，不怕人，以植物子、果實、昆蟲為食，阿里山、合歡山、大雪山等山區可以看見蹤影。\r\n', '大雪山國家森林遊樂區', 'birdpic/bird3.jpg'),
(4, '鴛鴦', 'Aix galericulata', 'Mandarin duck', '(1).雄性鴛鴦色彩極為艷麗，嘴喙為少見的鮮紅色，嘴喙端部具亮黃色嘴甲。\r\n(2).額部和頭頂中央為帶有金屬光澤的翠綠色，頸部紅銅色的羽毛後頸暗綠按紫色的羽毛都很長\r\n，形成一個很有特色的「頭套」。\r\n(3).腰部是深色和背部褐色並帶有綠色的金屬澤，腹部是淺色，最具有特色的是最後一枚三級飛羽特化，形成面積很大樹立於背部的帆狀結構，為耀眼的桔紅色，這是鴛鴦的一個顯著特徵。\r\n(4).雌性鴛鴦遠不如雄性鴛鴦漂亮，通體顏色為暗啞的灰色，也不具有雄鳥所具有的「帆狀三級羽雌鳥的辨識特徵為鮮明的白色貫眼紋，嘴喙是灰色。', '主要分布於亞洲東部，原居日本，在中國東北繁殖，華南地區越冬，可見於朝鮮半島及中國東部各地。中西歐地區也有引進棲息於溪流、沼澤、湖泊等處，常見於闊葉樹林環繞的沼澤、蘆葦叢生的水面。白天常在水面中心處漂浮遊蕩，夜間常在闊葉樹林中活動，晨昏常在水田和岸邊的沼澤地活動。', '高雄市內門區順賢宮', 'birdpic/bird4.jpg'),
(5, '黑長尾雉', 'Syrmaticus mikado', 'Mikado Pheasant', '(1).珍貴稀有野生動物，黑尾長雉是台灣特有種，雄鳥體長:70cm，雌鳥體長:74cm。\r\n(2).虹膜黃褐色，嘴灰黑色，腳灰色。\r\n(3).雄鳥全身藍黑色具有光澤，羽緣森藍色，臉部是紅色，翼帶白色，胸到腹有黑色斑點，尾羽較長有白色橫紋。\r\n(4).雌鳥體型較小，全身褐色，眼周紅色，背、胸、腹有黑斑和白色軸斑，腹部羽緣白色，尾羽短，紅褐色有黑色橫紋和雜斑。', '棲息於中、高海拔山區坡度陡峭的針、闊葉混合林及針葉林底層，性謹慎、機警，領域性強，常於晨昏、薄霧或細雨中出現於\r\n林道或山區道路邊坡，攝取草籽、漿果、蕨芽、嫩葉、球根及昆蟲等為食，本種由於獵捕及棲地喪失等威脅，名列全球「接近受脅」鳥種。', '大雪山國家森林遊樂區', 'birdpic/bird5.jpg'),
(6, '黑面琵鷺', 'Platalea minor', 'Black-faced Spoonbill', '(1).黑面琵鷺是瀕臨危險物種。\r\n(2).有琵琶形狀的大嘴是琵鷺類鳥類共有的特徵，而黑面琵鷺是六種琵鷺種體型最小者。\r\n(3).黑面琵鷺長的很像可能混群的白琵鷺，但與白琵鷺比較黑面琵鷺的體型稍小一點（也是琵鷺家族中體型最小的），\r\n且面部黑色裸露皮膚延伸至眼睛後方。\r\n(4).腳黑色。\r\n(5).繁殖期時，黑面琵鷺的冠羽和胸前的羽毛有明顯的黃色。\r\n(6).亞成鳥喙部顏色較淺，較小且表面較為平滑，初級飛羽末端外緣及飛羽羽軸皆呈黑色。\r\n(7).雛鳥羽色全白，色澤比亞成鳥淺。', '本性機警，生活於河口、潮池、濕地或潮間帶，具群居性，偶爾會與警戒性較高的水鳥聚在一起\r\n，主要在濕地或魚塭等淺水域覓食，以喙微張並在水裡掃動的方式搜尋魚蝦或甲殼類。\r\n休息時會出現嬉戲的行為，同伴間會互相整理羽毛。\r\n', '台江國家公園', 'birdpic/bird6.jpg'),
(7, '藍腹鷴', 'Lophura Pheasant', 'Swinhoe\'s Pheasant', '(1).台灣特有種，雄鳥體長77公分，雌鳥55公分。\r\n(2).虹膜黃褐色。雄鳥嘴淡灰黃色，雌鳥嘴鉛灰色。腳紅色。\r\n(3).雄鳥全身暗藍色具光澤。頭上冠羽雜有白色羽毛，臉部裸皮及肉垂紅色。上背白色，\r\n肩羽紫紅色，覆羽羽緣亮藍色，翼偏褐。腰至尾上覆羽羽緣亮藍色，尾羽甚至長，中央\r\n2枚白色。\r\n(4).雌鳥體型較小，臉部裸皮紅色。背面黑褐色，有黃褐色三角斑，翼有黃褐色橫帶。\r\n上尾羽黑褐色有黑白相間橫紋，下尾羽栗紅色。腹面黃褐色，密布v型斑。\r\n', '棲息於中、低海拔的原始闊葉林、混生林或竹林底層，喜於略潮濕有枯葉覆蓋的地面活動。性羞怯、機警，常於晨昏、濃霧或光線昏暗暗時沿著熟悉的路徑出現在林道上或林緣開闊處覓食。主食昆蟲、植物嫩芽、漿果、種子等，常以腳爪扒開地面的腐植層啄食昆蟲或蚯蚓。一夫多妻制，由雌鳥負責育雛。由於棲息地開發及獵捕等威脅，名列全球「接近受脅」鳥種。', '大雪山23k', 'birdpic/bird7.jpg'),
(8, '鳳頭蒼鷹', 'Accipiter trivirgatus formosae', 'Crested Goshawk', '(1).台灣特有亞種，體長:40~48公分，翼長:74~90com。\r\n(2).雌雄近似，雌鳥體型大。成鳥虹膜金黃色或橙色，成鳥虹膜金黃或橙色，嘴黑色，臘膜\r\n黃綠色，裸足黃色。\r\n(3).成鳥頭鼠灰色，後頭有冠羽，背部深褐色。腹面白色，喉央線黑褐色，胸有赤褐色縱紋\r\n，胸側赤褐色，腹部密布赤褐色橫紋。尾羽褐色，有4道暗色橫帶，尾下覆羽白而蓬鬆，雄\r\n鳥尤其明顯。翼短尾長，停棲時，翼尖僅達尾羽1/3處。\r\n(4).幼鳥虹膜黃綠色至黃色，頭、背淺褐色，腹面迷黃色，胸有水滴狀縱斑，腹部為心型斑。\r\n(5).飛行時翼短圓，後緣突出，指叉6枚。尾長，尾端圓，張開時呈扇形，腳趾達尾羽第三節\r\n暗色橫帶。蓬鬆的白色尾下覆羽突出於尾下兩側，時有下壓抖翅的行為。\r\n', '棲息地於中、低海拔樹林至海岸林，以低海拔丘陵最常見。對環境適應良好，唯一可於都會公園定居、繁殖的日行性猛禽，性兇猛，不畏懼人，常隱藏於視野良好的枝頭，伺機伏擊鼠、蛙、蜥蜴、大型昆蟲及中、小型鳥類，也會善於偷襲巢中雛鳥。以枯枝築巢於高樹頂端，巢為盤狀，雌鳥負責抱卵及餵雛，雄鳥負責狩獵及警戒。\r\n', '台中都會公園附近九天玄女廟', 'birdpic/bird8.jpg');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `bird`
--
ALTER TABLE `bird`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bird`
--
ALTER TABLE `bird`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
