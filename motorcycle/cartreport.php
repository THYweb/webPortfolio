<?php

	require_once("connMysql.php");

	if(isset($_POST["customername"]) && ($_POST["customername"])!=""){
		
		require_once("mycart.php");
		
		session_start();
		
		$motorcycle=&$_SESSION['motorcycle'];        //要宣告新的物件變數，防止新和原本購物車按下購物車按鈕顯示雙方資料
		
		if(!is_object($motorcycle)){
			$motorcycle=new myCart();          //要宣告新的物件變數，防止新和原本購物車按下購物車按鈕顯示雙方資料
		}
		
		$sql_query="INSERT INTO orders(total,deliverfee,grandtotal,customername,customeremail,customeraddress,customerphone,paytype) VALUES (?,?,?,?,?,?,?,?)";
		$stmt=$db_link->prepare($sql_query);
		$stmt->bind_param("iiisssss",$motorcycle->total,$motorcycle->deliverfee,$motorcycle->grandtotal,$_POST["customername"],$_POST["customeremail"],$_POST["customeraddress"],$_POST["customerphone"],$_POST["paytype"]);
		$stmt->execute();
		$o_pid=$stmt->insert_id;
		$stmt->close();
		
		if($motorcycle->itemcount>0){
			foreach($motorcycle->get_contents() as $item){
				$sql_query="INSERT INTO orderdetail(orderid,productid,productname,unitprice,quantity) VALUES(?,?,?,?,?);";
				$stmt=$db_link->prepare($sql_query);
				$stmt->bind_param("iisii",$o_pid,$item['id'],$item['info'],$item['price'],$item['qty']);
				$stmt->execute();
				$stmt->close();
			}
		}
		
		$cname=$_POST["customername"];
		$cmail=$_POST["customeremail"];
		$ctel=$_POST["customerphone"];
		$caddress=$_POST["customeraddress"];
		$cpaytype=$_POST["paytype"];
		$total=$motorcycle->grandtotal;
		$mailcontent=<<<msg
		親愛的 $cname 您好：
		感謝你的光臨
		本次消費詳細資料如下:
		--------------------------------------------------
		訂單編號: $o_pid
		客戶姓名: $cname
		電子郵件: $cmail
		電話: $ctel
		住址: $caddress
		付款方式: $cpaytype
		消費金額: $total
		--------------------------------------------------
		希望能再次為您服務 
		
		網路購物公司 敬上
msg;
		
		$mailFrom="?UTF-8?B?".base64_encode("網路購物系統")."?=<service@e-happy.com.tw>";
		$mailto=$_POST["customeremail"];
		$mailSubject="?UTF-8?B?".base64_encode("網路購物系統訂單通知")."?=";
		$mailHeader="From".$mailFrom."\r\n";
		$mailHeader="Content-type:text/html;charset=UTF-8";
		
		//if(!@mail($mailto,$mailSubject,nl2br($mailcontent),$mailHeader)){die("郵寄失敗！");}
		//清空購物車
		$motorcycle->empty_cart();
		
	}

?>
<script>
	alert("感謝您的購買，我們將儘快進行處理。");
	window.location.href="index.php";
</script>