<?php
	require_once 'connect.php';
	$data = json_decode(file_get_contents("php://input"));
	$station = $data->station;
	$temperature = $data->temperature;
	$humidity = $data->humidity;
	$time1 = $data->time1;
	$conn->query("INSERT INTO `datas` (station, temperature, humidity, time1) VALUES('$station', '$temperature', '$humidity', '$time1')") or die(mysqli_error());
?>