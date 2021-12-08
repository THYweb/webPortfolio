<?php

    include("connStudent.php");
 
	$sql_query="SELECT student.name,score.stuid,score.chin,score.eng,score.math FROM student JOIN score ON student.stuid=score.stuid";
	$result=mysqli_query($db_link,$sql_query);         //執行資料表查詢
	
	
?>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<title>學生成績管理系統</title>
	
	
</head>

<body>
    

	
	
	<table border="1" align="center">
	
	
	<tr>
		
		<th>學號</th>
		<th>姓名</th>
		<th>國文成績</th>
		<th>英文成績</th>
		<th>數學成績</th>
		<th><a href='add_StudentScore.php'>新增學生成績</a><th>
	</tr>
	<?php while($row_result=mysqli_fetch_assoc($result)){?>
	<tr>
		<td><?php echo $row_result["stuid"]?></td>
		<td><?php echo $row_result["name"]?></td>
		<td><?php echo $row_result["chin"]?></td>
		<td><?php echo $row_result["eng"]?></td>
		<td><?php echo $row_result["math"]?></td>
		<td><a href= "update_StudentScore.php?id=<?php echo $row_result["stuid"];?>">修改學生成績</a></td>
		<td><a href="delete_StudentScore.php?id=<?php echo $row_result["stuid"];?>">刪除學生成績</a></td>
	</tr>
	<?php }?>
		
	
		
	
	<td><input type="button" value="回主畫面" onclick="location.href='index.php'"></td>
	
	
	</table>
	
	
</body>

</html>