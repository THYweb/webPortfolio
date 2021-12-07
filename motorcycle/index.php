<?php
	
	require_once("connMysql.php");
	
	$pageRow_records=6;
	
	$num_pages=1;
	
	if(isset($_GET['page'])){       //若有翻頁，將頁數更新
		$num_pages=$_GET['page'];
	}
	
	$startRow_records=($num_pages-1)*$pageRow_records;

	if(isset($_GET["cid"]) && ($_GET["cid"]!="")){
		$query_RecProduct="SELECT * FROM product WHERE categoryid=? ORDER BY productid ASC";
		$stmt=$db_link->prepare($query_RecProduct);
		$stmt->bind_param("i",$_GET["cid"]);
	}else if(isset($_GET["keyword"]) && ($_GET["keyword"]!="")){
		$query_RecProduct="SELECT * FROM product WHERE productname LIKE ? OR description LIKE ? ORDER BY productid DESC";
		$stmt=$db_link->prepare($query_RecProduct);
		$keyword="%".$_GET["keyword"]."%";
		$stmt->bind_param("ss",$keyword,$keyword);
	}else if(isset($_GET["price1"]) && isset($_GET["price2"]) && ($_GET["price1"]<=$_GET["price2"])){
		$query_RecProduct="SELECT * FROM product WHERE productprice BETWEEN ? AND ? ORDER BY productid DESC";
		$stmt=$db_link->prepare($query_RecProduct);
		$stmt->bind_param("ii",$_GET["price1"],$_GET["price2"]);
	}else{
		$query_RecProduct="SELECT * FROM product ORDER BY productid ASC";
		$stmt=$db_link->prepare($query_RecProduct);
	}
	
	$stmt->execute();
	
	$all_RecProduct=$stmt->get_result();
	
	
	$total_records=$all_RecProduct->num_rows;
	
	$total_pages=ceil($total_records/$pageRow_records);
	
	$query_RecCategory = "SELECT category.categoryid, category.categoryname, category.categorysort, count(product.productid) as productNum FROM category LEFT JOIN product ON category.categoryid=product.categoryid GROUP BY category.categoryid, category.categoryname, category.categorysort ORDER BY category.categorysort ASC";
	$RecCategory = $db_link->query($query_RecCategory);
	
	$query_RecTotal="SELECT count(productid) as totalNum FROM product";
	$RecTotal=$db_link->query($query_RecTotal);
	$row_RecTotal=$RecTotal->fetch_assoc();
	
	function keepURL(){                //收集URL參數的自訂函式，在點選節時，因為原來的分頁只有設定page參數，再進行翻頁的動作後因為查詢參數會消失頁面就不會依照理想，所以最好的方式就是在分頁的參數中保有;
		
		$keepURL="";
		
		if(isset($_GET["keyword"])){
			$keepURL.="&keyword=".urlencode($_GET["keyword"]);                  //由於我們用的是繁體中文，PHP 在資料傳遞的時候，如果直接傳繁體中文會出問題，所以在傳遞資料時，通常會使用 urlencode 先編碼之後再傳遞，尤其是 URL 字串;
		}																		//urldecode可以將編碼後的百分比符號 % 或數字等重新編譯解碼，至於加號（+）則會解碼為空格
		
		if(isset($_GET["price1"])){
			$keepURL.="&price1=".$_GET["price1"];
		}
		
		if(isset($_GET["price2"])){
			$keepURL.="&price2=".$_GET["price2"];
		}
		
		if(isset($_GET["cid"])){
			$keepURL.="&cid=".$_GET["cid"];
		}
		
		return $keepURL;
	}
	
	
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>湯湯的機車購物網站</title>
<link href="mstyle.css" rel="stylesheet" type="text/css">
<style>
	
</style>
</head>
<body>

	<table width="780" border="0" align="center" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF">
		
		<tr>
			<td height="80" align="center" background="images/logo.png" class="tdbline"></td>
		</tr>
		
		<tr>
			<td>
				<table width="100%" border="0" cellpadding="0" cellspacing="10">
					<tr valign="top">
						<td width="220">
							<div class="categorybox">
								<p class="heading"><img src="images/tool3.png" width="16" height="16" align="absmiddle">產品搜尋 <span class="smalltext">Search</span></p>
								<form name="form1" method="get" action="index.php">
									<p>
										<input name="keyword" type="text" id="keyword" value="請輸入關鍵字" size="12" onClick="this.value='';">
										<input type="submit" value="查詢">
									</p>
								</form>
								<p class="heading"><img src="images/tool3.png" width="16" height="16" align="absmiddle">價格區間<span class="smalltext">Price</span></p>
								<form action="index.php" method="get" name="form2" id="form2">
									<p>
										<input name="price1" type="text" id="price1" value="0" size="3">
										-
										<input name="price2" type="text" id="price2" value="0" size="3">
										<input type="submit" id="button2" value="查詢">
									</p>
								</form>
							</div>
							
							<div class="categorybox">
								<p class="heading"><img src="images/tool4.png" width="16" height="16" align="absmiddle">產品目錄 <span class="smalltext">Category</span></p>
								<ul>
									<li><a href="index.php">所有產品<span class="category">(<?php echo $row_RecTotal["totalNum"]; ?>)</span></a></li>
									<?php while($row_RecCategory=$RecCategory->fetch_assoc()){?>
									<li><a href="index.php?cid=<?php echo $row_RecCategory["categoryid"];?>"><?php echo $row_RecCategory["categoryname"];?><span class="categorycount">(<?php echo $row_RecCategory["productNum"];?>)</span></a></li>
									<?php } ?>
								</ul>
							</div>
						</td>
						<td class="tdline">
							<div class="subjectDiv"> <span class="heading"><img src="images/tool5.png" width="16" height="16" align="absmiddle"></span>產品列表</div>
							<div class="actionDiv"><a href="cart.php">我的購物車</a></div>
							<?php
							
								$query_limit_RecProduct=$query_RecProduct." LIMIT {$startRow_records},{$pageRow_records}";
								
								$stmt=$db_link->prepare($query_limit_RecProduct);
								
								if(isset($_GET["cid"]) && ($_GET["cid"]!="")){
									$stmt->bind_param("i",$_GET["cid"]);
								}else if(isset($_GET["keyword"])&&($_GET["keyword"]!="")){
									$keyword = "%".$_GET["keyword"]."%";
									$stmt->bind_param("ss",$keyword,$keyword);
								}else if(isset($_GET["price1"]) && isset($_GET["price2"]) && ($_GET["price1"]<=$_GET["price2"])){
									$stmt->bind_param("ii",$_GET["price1"],$_GET["price2"]);
								}
								
								$stmt->execute();
								$RecProduct=$stmt->get_result();
								while($row_RecProduct=$RecProduct->fetch_assoc()){
							?>
						
							<div class="albumDiv">
								<div class="picDiv">
									<a href="product.php?id=<?php echo $row_RecProduct["productid"];?>">
										<?php if($row_RecProduct["productimages"]==""){?>
											<img src="images/nopics.png" alt="暫無圖片" width="120" height="120" border="0">
										<?php }else{?>
											<img src="proimg/<?php echo $row_RecProduct["productimages"];?>" alt="<?php echo $row_RecProduct["productname"];?>" width="135" height="135" border="0">
										<?php }?>
									</a>
								</div>
								<div class="albuminfo">
									<a href="product.php?id=<?php echo $row_RecProduct["productid"];?>"><?php echo $row_RecProduct["productname"];?></a><br>
									<span class="smalltext">特價 </span><span class="redword"><?php echo $row_RecProduct["productprice"];?></span><span class="smalltext"> 元</span> 
								</div>
							</div>
							
							<?php }?>
							<div class="navDiv">
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
			
		<tr>
			<td height="30" align="center"  class="trademark">© 2020 THY motorcycle web</td>
		</tr>
		
	</table>

</body>
</html>
