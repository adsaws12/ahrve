<?php
	require_once 'connect.php';
	$data = json_decode(file_get_contents("php://input"));
	$mem_id_acc = $data->mem_id_acc;
	$email = $data->email;
	$password = $data->password;
	$role = $data->role;
	$conn->query("UPDATE `users` SET `email` = '$email', `password` = '$password', `role` = '$role' WHERE `mem_id_acc` = $mem_id_acc") or die(mysqli_error());
?>