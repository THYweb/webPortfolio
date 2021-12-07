<?php

include("connStudent.php");

if(isset($_POST["action"]) && ($_POST["action"]=="update")){	

	$sql_query = "UPDATE student SET ";
	$sql_query .= "name='".$_POST["name"]."',";
	$sql_query .= "sex='".$_POST["sex"]."',";
	$sql_query .= "department='".$_POST["department"]."' ";
	$sql_query .= "WHERE stuid=".$_POST["stuid"];	
	mysqli_query($db_link, $sql_query);

}

$sql_db = "SELECT * FROM student WHERE stuid=".$_GET["id"];
$result = mysqli_query($db_link, $sql_db);
$row_result=mysqli_fetch_assoc($result);

?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>學生成績管理系統</title>
</head>
<body>
	<h1 align="center">學生管理成績系統 - 修改學生資料</h1>
	
	<form action="" method="post" name="formUpdate" id="formUpdate">
	
		<table border="1" align="center" cellpadding="4">
			<tr>
				<th>欄位</th><th>資料</th>
			</tr>
			
			<tr>
				<td>學號</td><td><input type="text" name="stuid" id="stuid" value="<?php echo $row_result["stuid"];?>"></td>
			</tr>
			
			<tr>
				<td>姓名</td><td><input type="text" name="name" id="name" value="<?php echo $row_result["name"];?>"></td>
			</tr>
			
			<tr>
				<td>性別</td><td>
					<input type="radio" name="sex" id="radio" value="M" <?php if($row_result["sex"]=="M") echo "checked";?>>男
					<input type="radio" name="sex" id="radio" value="F" <?php if($row_result["sex"]=="F") echo "checked";?>>女
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
					<input name="stuid" type="hidden" value="<?php echo $row_result["stuid"];?>">
					<input name="action" type="hidden" value="update">
					<input type="submit" name="send"  value="更新資料" onclick="return(confirm('更新資料成功'))">
					<input type="reset" name="send"  value="重新填寫">
					<input type="button" value="回主畫面" onclick="location.href='index.php'">
				</td>
			</tr>
			
		</table>
  
		</form>
		
</body>

</html>