<?php

	$query_bird="SELECT * FROM bird WHERE id=?";
	$stmt=$db_link->prepare($query_bird);
	$stmt->bind_param("i",$_GET["id"]);
	$stmt->execute();
	$Recbird=$stmt->get_result();
	$row_Recbird=$Recbird->fetch_assoc();

?>