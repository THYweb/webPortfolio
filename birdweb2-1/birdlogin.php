<?php
	
    $host="localhost";
	$user="root";
	$pw="";
	$db="birddb";
	
	$db_link=new mysqli($host,$user,$pw,$db); //mysql物件導向語法
	
	//連線失敗會出現錯誤訊息
	if($db_link->connect_error!=""){
		echo "資料庫連結失敗！";
	}else{
		$db_link->query("SET NAMES 'utf8'");
	}
?>