<?php

include("connStudent.php");

if(isset($_POST["action"]) && ($_POST["action"]=="delete")){
	
	$sql_query="DELETE FROM student WHERE stuid=".$_POST["stuid"];
	mysqli_query($db_link,$sql_query);
	
}

$sql_db="SELECT * FROM student WHERE stuid=".$_GET["id"];
$result=mysqli_query($db_link,$sql_db);
$row_result=mysqli_fetch_assoc($result);


?>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<title>學生成績管理系統</title>
</head>

<body>

	<h1 align="center">學生成績管理系統-刪除學生資料</h1>
	
	<form action="" method="post" name="formDel" id="formDel">
	
		<table border="1" align="center" cellpadding="4">
	
		<tr>
			<th>欄位</th><th>資料</th>	
		</tr>
	    
		<tr>
			
			<td>學號</td><td><?php echo $row_result["stuid"]; ?></td>
			
		</tr>
		
		<tr>
			<td>姓名</td><td><?php  echo $row_result["name"]; ?></td>
		</tr>
		
		<tr>
			<td>性別</td>
			<td>
				<?php
					if($row_result["sex"]=="M"){
						echo "男";
					}else{
						echo "女";
					}
				?>
			</td>
		</tr>
	
		<tr>
			<td>科系分組</td><td><?php echo $row_result["department"]; ?></td>
		</tr>
	
	
		
	
		<tr>
			<td colspan="2" align="center">
				<input name="stuid" type="hidden" value="<?php echo $row_result["stuid"]; ?>">
				<input name="action" type="hidden" value="delete">
				<input type="submit" name="send" value="刪除資料" onclick="return(confirm('確定刪除資料嗎?'))">
				<input type="button" value="回主畫面" onclick="location.href='index.php'">
 			</td>
		</tr>
	
		</table>
		
	</form>
	
</body>

</html>