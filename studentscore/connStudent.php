<?php

	$db_host="localhost";
	$db_username="root";
	$db_password="";
	
	$db_link=@mysqli_connect($db_host,$db_username,$db_password);   //連線資料庫
	if(!$db_link){
		die("資料庫連結失敗!");
	}
	
	$seldb=@mysqli_select_db($db_link,"studentscore");          //選擇資料庫
	if(!$seldb){
		die("資料庫選擇失敗!");
	}
	
	mysqli_query($db_link,"SET NAMES 'utf8'");                     //設定字元集與編碼
	
?>