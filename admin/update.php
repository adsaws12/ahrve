<?php
	require_once 'connect.php';
	$data = json_decode(file_get_contents("php://input"));
	$mem_id = $data->mem_id;
	$station = $data->station;
	$temperature = $data->temperature;
	$humidity = $data->humidity;
	$time1 = $data->time1;
	$conn->query("UPDATE `datas` SET `station` = '$station', `temperature` = '$temperature', `humidity` = '$humidity', `time1` = '$time1' WHERE `mem_id` = $mem_id") or die(mysqli_error());
?>