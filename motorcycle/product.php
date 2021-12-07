<?php

	require_once("connMysql.php");
	
	require_once("mycart.php");
	
	session_start();
	
	$motorcycle=&$_SESSION['motorcycle'];
	
	if(!is_object($motorcycle)){
		$motorcycle=new myCart();
	}
	
	if(isset($_POST["cartaction"]) && ($_POST["cartaction"]=="add")){
		$motorcycle->add_item($_POST["id"],$_POST["qty"],$_POST["price"],$_POST["name"]);
		header("Location:cart.php");
	}
	
	$query_RecProduct="SELECT * FROM product WHERE productid=?";
	$stmt=$db_link->prepare($query_RecProduct);
	$stmt->bind_param("i",$_GET["id"]);
	$stmt->execute();
	$RecProduct=$stmt->get_result();
	$row_RecProduct=$RecProduct->fetch_assoc();
	
	$query_RecProduct="SELECT category.categoryid,category.categoryname,category.categorysort,count(product.productid) as productNum FROM category LEFT JOIN product ON category.categoryid=product.categoryid GROUP By category.categoryid,category.categoryname,category.categorysort ORDER BY category.categorysort ASC";
	$RecCategory=$db_link->query($query_RecProduct);
	
	$query_RecTotal="SELECT count(productid) as totalNum FROM product";
	$RecTotal=$db_link->query($query_RecTotal);
	$row_RecTotal=$RecTotal->fetch_assoc();
	
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
				<table width="100%" border="0" cellspacing="0" cellpadding="10">
					<tr valign="top">
						<td width="220">
							
							<div class="categorybox">
								<p class="heading"><img src="images/tool3.png" width="16" height="16" align="absmiddle">產品搜尋<span class="smalltext">Search</span></p>
								<form name="form1" method="get" action="index.php">
									<p>
										<input name="keyword" type="text" id="keyword" value="請輸入關鍵字" size="12" onClick="this.value='';">
										<input type="submit" id="button" value="查詢">
									</p>
								</form>
								<p class="heading"><img src="images/tool3.png" width="16" height="16" align="absmiddle">價格區間<span class="smalltext">Price</span></p>
								<form action="index.php" method="get" name="form2" id="form2">
									<input name="price1" type="text" id="price1" value="0" size="3">
									-
									<input name="price2" type="text" id="price2" value="0" size="3">
									<input type="submit" id="button2" value="查詢">
								</form>
							</div>
							<div class="categorybox">
								<p class="heading"><img src="images/tool4.png" width="16" height="16" align="absmiddle">產品目錄<span class="smalltext">Category</span></p>
								<ul>
									<li><a href="index.php">所有產品<span class="categorycount">(<?php echo $row_RecTotal["totalNum"];?>)</span></a></li>
										<?php while($row_RecCategory=$RecCategory->fetch_assoc()){?>
									<li><a href="index.php?cid=<?php echo $row_RecCategory["categoryid"];?>"><?php echo $row_RecCategory["categoryname"];?><span class="categorycount">(<?php echo $row_RecCategory["productNum"]?>)</span></a></li>
										<?php } ?>
								</ul>
							</div>
						</td>
						<td class="tdline">
							<div class="subjectDiv"><span class="heading"><img src="images/tool5.png" width="16" height="16" align="absmiddle"></span>產品詳細資料</div>
						    <div class="actionDiv"><a href="cart.php">我的購物車</a></div>
							<div class="albumDiv">
								<div>
									<?php if($row_RecProduct["productimages"]==""){?>
										<img src="images/nopics.png" alt="暫無圖片" width="120" height="120" border="0">
									<?php }else{?>
										<img src="proimg/<?php echo $row_RecProduct["productimages"];?>" alt="<?php  echo $row_RecProduct["productname"];?>" width="135" height="135" border="0">
									<?php }?>
								</div>
								<div class="albuminfo"><span class="smalltext">特價</span><span class="redword"><?php echo $row_RecProduct["productprice"];?></span><span class="smalltext">元</span></div>
							</div>
							<div class="titleDiv">
								<?php echo $row_RecProduct["productname"];?>
							</div>
							<div class="titleColor">
								<?php echo "機車車身顏色:".$row_RecProduct["color"];?>
							</div>
							<div class="dataDiv">
								<p><?php echo nl2br($row_RecProduct["description"]);?></p>
								<hr width="100%" size="1">
								<form name="form3" method="post" action="">
								  <input name="id" type="hidden" id="id" value="<?php echo $row_RecProduct["productid"];?>">
								  <input name="name" type="hidden" id="name" value="<?php echo $row_RecProduct["productname"];?>">
								  <input name="price" type="hidden" id="price" value="<?php echo $row_RecProduct["productprice"];?>">
								  <input name="qty" type="hidden" id="qty" value="1">
								  <input name="cartaction" type="hidden" id="cartaction" value="add">
								  <input type="submit" name="button3" id="button3" value="加入購物車">
								  <input type="button" name="button4" id="button4" value="回上一頁" onClick="window.history.back();">
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