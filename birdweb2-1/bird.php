<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>鳥類介紹</title>
	
	<!--html meta tag-->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<!-- bootstrap4的CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="bird.css">
	<script src="carousel.js"></script>
	
</head>

<body>
	
	
	
	
   
	<?php
			
			require_once("birdlogin.php");
			require_once("bird_file.php");
			
	?>
	
	
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
		
		
		
		<!--主題內容-->
		
			<div class="tablerwd divmove">
				<table width="1024" border="0" align="center" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF">
					
					<tr>
						<td>
							<table width="100%" border="0" cellpadding="0" cellspacing="10">
								<tr valign="top">
									<td>
										<?php
										
											$query_limit_Recbird=$query_bird." LIMIT {$startRow_records},{$pageRow_records}";
									
											$stmt=$db_link->prepare($query_limit_Recbird);
											if(isset($_GET["id"]) && ($_GET["id"]!="")){
												$stmt->bind_param("i",$_GET["id"]);
											}
											$stmt->execute();
											$Recbird=$stmt->get_result();
											while($row_Recbird=$Recbird->fetch_assoc()){
										
										?>
									
										<div class="tableDiv">
											<div class="picDiv">
												<a href="birddb.php?id=<?php echo $row_Recbird["id"];?>">
												<?php if($row_Recbird["image"]==""){?>
													<img src="images/nopics.png" alt="暫無圖片" width="120" height="120" border="0">
												<?php }else{?>
													<img src="<?php echo $row_Recbird["image"];?>" alt="<?php echo $row_Recbird["name"];?>" width="200" height="150" border="0">
												<?php }?>
												</a>
												<div class="tableinfo">
													<a href="birddb.php?id=<?php echo $row_Recbird["id"];?>"><?php echo $row_Recbird["name"];?></a><br>
												</div>
											</div>
										</div>
									
										<?php } ?>
									
										<div class="tablenavDiv">
											<?php if($num_pages>1){?>
												<a href="?page=1<?php echo keepURL();?>">|&lt;</a> <a href="?page=<?php $num_pages-1;?><?php echo keepURL();?>">&lt;&lt;</a>
											<?php }else{?>
												|&lt; &lt;&lt;
											<?php }?>
											<?php
												
												for($i=1;$i<=$total_pages;$i++){
													
													if($i==$num_pages){
														echo $i." ";
													}else{
														$urlstr=keepURL();
														echo "<a href=\"?page=$i$urlstr\">$i</a> ";
													}
												}
												
											?>
											<?php if($num_pages<$total_pages){?>
												<a href="?page=<?php echo $num_pages+1;?><?php echo keepURL();?>">&gt;&gt;</a> <a href="?page=<?php echo $total_pages;?><?php echo keepURL();?>">&gt;|</a>
											<?php }else{?>
												&gt;&gt; &gt;|
											<?php }?>
										</div>
									</td>
								</tr>
							</table>
						
						</td>
					</tr>
						
				</table>
			</div>
		

	</main>
	<footer>
		<div class="text-center text-white fp">&copy;THY 2019</div>
	</footer>


</body>

</html>