<?php
	
	/*保存頁數*/
	$pageRow_records=6;
	$num_pages=1;
			
	if(isset($_GET['page'])){
		$num_pages=$_GET['page'];
	}
			
	$startRow_records=($num_pages-1)*$pageRow_records;
			
	$query_bird="SELECT * FROM bird ORDER BY id ASC";
	$stmt=$db_link->prepare($query_bird);
	$stmt->execute();
	
	$all_RecProduct=$stmt->get_result();
	
	$total_records=$all_RecProduct->num_rows;
	$total_pages=ceil($total_records/$pageRow_records);
			
	function keepURL(){
				
		$keepURL="";
		if(isset($_GET["id"])){
			$keepURL.="&id=".$_GET["id"];
		}
		
		return $keepURL;
				
    }
			
?>