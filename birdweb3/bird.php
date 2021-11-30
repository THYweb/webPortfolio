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
	
	<link rel="stylesheet" href="bird.css">
	<script src="carousel.js"></script>
	
</head>
<body>
	
	
	
	<?php
			
			
			require_once("birdlogin.php");
			require_once("bird_file.php");
			
			
	?>
	
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
		
		<div class="tablerwd tablemove">
				<table width="1024" border="0" align="center" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF" >
					
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
		
		
		
		
		
	</main>
	
	<footer>
		<div class="text-center divfooter">&copy;THY鳥類攝影之旅</div>
	</footer>
	
</body>
</html>