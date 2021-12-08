<?php

    include("connStudent.php");
	
	$sql_query="SELECT * from student;";
	$result=mysqli_query($db_link,$sql_query);         //執行資料表查詢
	$total_records=mysqli_num_rows($result);           //取得查詢結果筆數

	
?>

<html>

<head>
	
	<title>學生成績管理系統</title>
	
</head>

<body>
	
	<h1 align="center">學生成績管理系統</h1>
	<p align="center">目前資料筆數:<?php echo $total_records;?>。</p>
	
	
	<table border="1" align="center">

	<!--表格表頭-->

	<tr>
		<th>學號</th>
		<th>姓名</th>
		<th>性別</th>
		<th>科系分組</th>
		<th><a href='add_Student.php'>新增學生資料</a></th>
		
	</tr>
    
	
	
	<!--資料內容-->

	<?php

		while($row_result=mysqli_fetch_assoc($result)){
		
			echo "<tr>";
			echo "<td>".$row_result["stuid"]."</td>";
			echo "<td>".$row_result["name"]."</td>";
			echo "<td>".$row_result["sex"]."</td>";
			echo "<td>".$row_result["department"]."</td>";
			echo "<td><a href='select_StudentScore.php?id=".$row_result["stuid"]."'>查詢學生成績</a></td>";
			echo "<td><a href='update_Student.php?id=".$row_result["stuid"]."'>修改學生資料</a></td>";
			echo "<td><a href='delete_Student.php?id=".$row_result["stuid"]."'>刪除學生資料</a></td>";
			echo "</tr>";
			
		}
	
	?>
	
	
	</table>
	
	


</body>

</html>