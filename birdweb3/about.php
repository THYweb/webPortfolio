<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>關於網站</title>
	
	<!--html meta tag-->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<!-- bootstrap4的CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="about.css">
	<script src="carousel.js"></script>
	
</head>

<body>
	
		<header>
			
			<!-- bootstrap的預覽列 -->
			<nav class="navbar navbar-expand-lg navbar-light">
			  <a class="navbar-brand" href="index.php"><div class="logo"><img src="images/logo-1.png" alt="logo"></div></a><div class="titletext text-white">汯蒝鳥類攝影之旅</div>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
				  <li class="nav-item active">
					<a class="nav-link text-white navtitletext" href="index.php">首頁</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link text-white navtitletext" href="about.php">關於網站</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link text-white navtitletext" href="bird.php">鳥類介紹</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link text-white navtitletext" href="device.php">必帶裝備</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link text-white navtitletext" href="connection.php">聯絡我喔!</a>
				  </li>
				</ul>
			  </div>
			</nav>
				
				
		</header>
	
		<!-- bootstrap的輪播圖 -->
		
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="images/birdbg-1.jpg" class="d-block w-100 bgwidth">
			</div>
			<div class="carousel-item">
			  <img src="images/birdbg-2.jpg" class="d-block w-100 bgwidth ">
			</div>
			<div class="carousel-item">
			  <img src="images/birdbg-3.jpg" class="d-block w-100 bgwidth">
			</div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
		
		

		<main>
			
			<div class="container moveabout">
				<div class="row col-sm-12 col-12">
					<h1 class="habout">成立網站動機</h1>
				</div>
				<div class="row col-sm-12 col-12">
					<p class="pabout">
						我非常喜歡鳥類，我覺得鳥類是非常特別與美麗的動物，鳥類會讓我認為是奇特與美麗
						的生物關鍵就是鳥類羽毛，鳥類羽毛有不同特徵和顏色，所以我想要成立網站介紹鳥類
						拍攝鳥類設備。
					</p>
				</div>
				<div class="row col-sm-12 col-12">
					<h1 class="habout">介紹網站</h1><br><br>
				</div>
				<div class="row col-sm-12 col-12">
					<p class="pabout">	
						1.首頁:大型輪播圖和三個小分頁，分別為我推薦野鳥圖鑑、野鳥學會、國內濕地
						2.關於網站:成立網站理由、圖片來源 <br>
						3.鳥類介紹:介紹鳥類的特徵、棲息地等<br>
						4.必帶設備:介紹拍鳥需要裝備 <br>
						5.聯絡我們:提供自己的信箱方便回覆 <br>
					</p>
				</div>
				<div class="row col-sm-12 col-12">
					<h2 class="habout">照片來源</h2><br>	
				</div>
				<div class="row col-sm-12 col-12">
					<p class="pabout">
						父親提供的照片
					</p>
				</div>
				<div class="row col-sm-12 col-12">
					<h1 class="habout">資料來源</h1>
				</div>
				<div class="row col-sm-12 col-12">
					<p class="pabout">主要資料來源:台灣野鳥圖鑑 陸鳥篇 作者:廖本興 出版社:晨星<br>其他參考資料來源:1.維基百科 2.鳥類網路圖鑑</p>
					
				</div>
			</div>
			
		</main>

		<footer>
			<div class="text-center text-white fp">&copy; THY 2019</div>
		</footer>

	
</body>

</html>