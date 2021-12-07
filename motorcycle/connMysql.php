<?php
	
	//資料庫主機設定
	$db_host="localhost";
	$db_username="root";
	$db_password="";       //要改密碼
	$db_name="motorcycle";  //要改資料庫
	
	//連線資料庫
	$db_link=@new mysqli($db_host,$db_username,$db_password,$db_name);
	
	//錯誤處理
	if($db_link->connect_error!=""){
		echo "資料庫連結失敗！";
	}else{
		$db_link->query("SET NAMES 'utf8'");
	}
	
?>