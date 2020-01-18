<?php
	require_once 'connect.php';
	$data = json_decode(file_get_contents("php://input"));
	$email = $data->email;
	$password = $data->password;
	$role = $data->role;
	$conn->query("INSERT INTO `users` (email, password, role) VALUES('$email', '$password', '$role')") or die(mysqli_error());
?>