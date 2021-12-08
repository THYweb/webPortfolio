<?php

include("connStudent.php");

if(isset($_POST["action"]) && ($_POST["action"]=="update")){	

	$sql_query = "UPDATE score SET ";
	$sql_query .= "chin='".$_POST["chin"]."',";
	$sql_query .= "eng='".$_POST["eng"]."',";
	$sql_query .= "math='".$_POST["math"]."' ";
	$sql_query .= "WHERE stuid=".$_POST["stuid"];	
	mysqli_query($db_link, $sql_query);
	
}

$sql_db = "SELECT * FROM score WHERE stuid=".$_GET["id"];
$result = mysqli_query($db_link, $sql_db);
$row_result=mysqli_fetch_assoc($result);

?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>學生成績管理系統</title>
</head>
<body>
	<h1 align="center">學生成績管理系統 - 修改學生成績</h1>
	
	<form action="" method="post" name="formupdate" id="formAdd">
	
		<table border="1" align="center" cellpadding="4">
			<tr>
				<th>欄位</th><th>資料</th>
			</tr>
			
			<tr>
				<td>學號</td><td><input type="text" name="stuid" id="stuid" value="<?php echo $row_result["stuid"];?>"></td>
			</tr>
			
			<tr>
				<td>國文成績</td><td><input type="text" name="chin" id="chin" value="<?php echo $row_result["chin"];?>"></td>
			</tr>
			
			<tr>
				<td>英文成績</td><td><input type="text" name="eng" id="eng" value="<?php echo $row_result["eng"];?>"></td>
			</tr>
			
            <tr>
                 <td>數學成績</td><td><input type="text" name="math" id="math" value="<?php echo $row_result["math"];?>"></td>
			</tr>
			
			
			
			<tr>
				<td colspan="2" align="center">
					<input name="stuid" type="hidden" value="<?php echo $row_result["stuid"];?>">
					<input name="action" type="hidden" value="update">
					<input type="submit" name="send"  value="更新資料" onclick="return(confirm('更新資料成功'))">
					<input type="reset" name="send"  value="重新填寫">
					<input type="button" value="回到主畫面" onclick="location.href='select_StudentScore.php'">
				</td>
			</tr>
			
		</table>
  
		</form>
		
</body>

</html>