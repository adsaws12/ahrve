<?php
	require_once 'connect.php';
	$data = json_decode(file_get_contents("php://input"));
	$mem_id_acc = $data->mem_id_acc;
	$query = $conn->query("DELETE FROM `users` WHERE `mem_id_acc` = $mem_id_acc") or die(mysqli_error());
?>