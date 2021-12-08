<?php

include("connStudent.php");

if(isset($_POST["action"]) && ($_POST["action"]=="add")){
	
	$sql_query="INSERT INTO score (stuid,chin,eng,math) VALUES(";
	$sql_query .="'".$_POST["stuid"]."',";
	$sql_query .="'".$_POST["chin"]."',";
	$sql_query .="'".$_POST["eng"]."',";
	$sql_query .="'".$_POST["math"]."')";
	
	mysqli_query($db_link,$sql_query);
	
}

?>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<title>學生管理成績系統</title>
</head>

<body>

	<h1 align="center">學生管理成績系統-新增學生成績資料</h1>
	

	<form action="" method="post" name="formAdd" id="formAdd">
	
		<table border="1" align="center" cellpadding="4">
	
		<tr>
			<th>欄位</th><th>資料</th>	
		</tr>
		
		<tr>
			<td>學號</td>
			<td><input type="text" name="stuid" id="stuid"></td>
		</tr>
		
		<tr>
			<td>國文成績</td><td><input type="text" name="chin" id="chin"></td>
		</tr>
		
		<tr>
			<td>英文成績</td><td><input type="text" name="eng" id="eng"></td>
		</tr>
		
		<tr>
			<td>數學成績</td><td><input type="text" name="math" id="math"></td>
		</tr>
		
	
		
		<tr>
			<td colspan="2" align="center">
				<input name="action" type="hidden" value="add">
				<input type="submit" name="send"  value="新增成績" onclick="return(confirm('新增資料成功'))">
				<input type="reset"  name="send"  value="重新填寫">
				<input type="button" value="回到主畫面" onclick="location.href='select_StudentScore.php'">
			</td>
		</tr>
	    
		
		</table>
		
	</form>
	
</body>

</html>