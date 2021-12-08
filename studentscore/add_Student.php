<?php

include("connStudent.php");

if(isset($_POST["action"]) && ($_POST["action"]=="add")){
	
	$sql_query="INSERT INTO student (stuid,name,sex,department) VALUES(";
	$sql_query .="'".$_POST["stuid"]."',";
	$sql_query .="'".$_POST["name"]."',";
	$sql_query .="'".$_POST["sex"]."',";
	$sql_query .="'".$_POST["department"]."')";
	
	mysqli_query($db_link,$sql_query);
	
}

?>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<title>學生成績管理系統</title>
</head>

<body>

	<h1 align="center">學生成績管理系統-新增學生資料</h1>

	<form action="" method="post" name="formAdd" id="formAdd">
	
		<table border="1" align="center" cellpadding="4">
	
		<tr>
			<th>欄位</th><th>資料</th>	
		</tr>
		
		<tr>
			<td>學號</td><td><input type="text" name="stuid" id="stuid"></td>
		</tr>
		
		<tr>
			<td>姓名</td><td><input type="text" name="name" id="name"></td>
		</tr>
		
		<tr>
			<td>性別</td>
			<td>
				<input type="radio" name="sex" id="radio" value="M" checked>男
				<input type="radio" name="sex" id="radio" value="F">女
			</td>
		</tr>
	
		<tr>
			<td>科系分組</td>
			<td>
				<select name="department">
　				<option value="理工組">理工組</option>
　				<option value="社會組">社會組</option>
　				</select>
			</td>
		</tr>
	
		
		<tr>
			<td colspan="2" align="center">
				<input name="action" type="hidden" value="add">
				<input type="submit" name="send"  value="新增資料" onclick="return(confirm('新增資料成功'))">
				<!--<input type="button" value="新增成績" onclick="location.href='add_StudentScore.php'">-->
				<input type="reset"  name="send"  value="重新填寫">
				
				<input type="button" value="回主畫面" onclick="location.href='index.php'">
			</td>
		</tr>
	    
		
		</table>
		
	</form>
	
</body>

</html>