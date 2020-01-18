<?php
	require_once 'connect.php';
	$query = $conn->query("SELECT * FROM `datas` ORDER BY mem_id DESC") or die(mysqli_error());
	$data = array();
	
	while($row = $query->fetch_array()){
		$data[] = $row;
	}
	
	echo json_encode($data);
?>