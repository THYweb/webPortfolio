<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>必帶裝備</title>
	
	

	<!--html meta tag-->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<!-- bootstrap4的CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="device.css">
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
			  <img src="images/birdbg-2.jpg" class="d-block w-100 bgwidth">
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
		
		<div class="tablerwd divmove">
		
			<table class="tablemain" align="center">
				<tr>
					 <th>注意事項</th>
					 <th>水壺</th>
				</tr>
				<tr>
					 <td><img src="images/sign1.jpg" class="imgSize"></td>
					 <td><img src="images/kettle.png" class="imgSize"></td>
				</tr>
				
				<tr>
					 <th>腳架</th>
					 <th>大砲相機</th>
				</tr>
				<tr>
					 <td><img src="images/Tripod.png" class="imgSize"></td>
					 <td><img src="images/camera.png" class="imgSize"></td>
				</tr>
				<tr>
					 <th>深色衣服</th>
					 <th>雨衣或雨鞋</th>
				</tr>
				<tr>
					 <td><img src="images/clothe.png" class="imgSize"></td>
					 <td><img src="images/raincoat.png" class="imgSize"></td>
				</tr>
				<tr>
					 <th>醫療急救箱</th>
					 <th>輕便椅子</th>
				</tr>
				<tr>
					 <td><img src="images/sign2.png" class="imgSize"></td>
					 <td><img src="images/chair.png" class="imgSize"></td>
				</tr>
			</table>
			
		<div>
		
	</main>
	
	<footer>
		<div class="text-center text-white fp">&copy; THY 2019</div>	
    </footer>




</body>

</html>