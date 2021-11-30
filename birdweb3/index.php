<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<title>首頁</title>
	
	<!--html meta tag-->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<!-- bootstrap4的CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="index.css">
	<script src="carousel.js"></script>
	
</head>
<body>
	
	
	<header>
		<!--選單-->
		
		<nav class="navbar navbar-expand-lg navbar-light navcolor">
		  <a class="navbar-brand" href="index.php"><div class="logo"></div></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
			<ul class="navbar-nav">
			  <li class="nav-item">
				<a class="nav-link text-white" href="index.php">首頁</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link text-white" href="about.php">關於網站</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link text-white" href="bird.php">鳥類介紹</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link text-white" href="device.php">必帶裝備</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link text-white" href="connection.php">聯絡我喔!</a>
			  </li>
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  其他
				</a>
				<div class="dropdown-menu navdropdowncolor" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="https://today.to/tw/index-pc.html" target="_blank">我推薦野鳥圖鑑</a>
				  <a class="dropdown-item" href="index-page1.php">我推薦野鳥學會</a>
				  <a class="dropdown-item" href="index-page2.php">我推薦國內濕地景點</a>
				  <div class="dropdown-divider"></div>
				  <a class="dropdown-item" href="index.php">返回首頁</a>
				</div>
			  </li>
			</ul>
		  </div>
		</nav>
		
		
	</header>
	
	
	
	<main>
		<!--輪播圖-->
		
		
		<div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
		  <ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
		  </ol>
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="images/birdbg-1.jpg" class="d-block w-100 img" alt="...">
			  <div class="carousel-caption d-none d-md-block">
				<h5>棕腹大仙翁</h5>
				<p>拍攝地點:台中都會公園</p>
			  </div>
			</div>
			<div class="carousel-item">
			  <img src="images/birdbg-2.jpg" class="d-block w-100 img" alt="...">
			  <div class="carousel-caption d-none d-md-block">
				<h5>酒紅朱雀</h5>
				<p>拍攝地點:大雪山50k</p>
			  </div>
			</div>
			<div class="carousel-item">
			  <img src="images/birdbg-3.jpg" class="d-block w-100 img" alt="...">
			  <div class="carousel-caption d-none d-md-block">
				<h5>野鴝(紅喉歌鴝)</h5>
				<p>拍攝地點:台中南興公園</p>
			  </div>
			</div>
			<div class="carousel-item">
			  <img src="images/birdbg-4.jpg" class="d-block w-100 img" alt="...">
			  <div class="carousel-caption d-none d-md-block">
				<h5>鴛鴦</h5>
				<p>拍攝地點:高雄順賢宮</p>
			  </div>
			</div>
			<div class="carousel-item">
			  <img src="images/birdbg-5.jpg" class="d-block w-100 img" alt="...">
			  <div class="carousel-caption d-none d-md-block">
				<h5>黑長尾雉</h5>
				<p>拍攝地點:大雪山50k</p>
			  </div>
			</div>
			<div class="carousel-item">
			  <img src="images/birdbg-6.jpg" class="d-block w-100 img" alt="...">
			  <div class="carousel-caption d-none d-md-block">
				<h5>黑面琵鷺</h5>
				<p>拍攝地點:高雄市茄萣區</p>
			  </div>
			</div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
		
		
		
	</main>
	
	<footer>
		<div class="text-center divfooter">&copy;THY鳥類攝影之旅</div>
	</footer>
	
</body>
</html>