<?php
	include_once '../connect.php';

	$name = $_POST['name'];
	$birthday = $_POST['birthday'];
	$phone = $_POST['phone'];

	mysqli_query($connect, "INSERT INTO `personinfo` (`id`, `name`, `birthday`, `phone`) VALUES (NULL, '$name', '$birthday', '$phone')");

	header('Location: ../enteringPersoninfo/Personinfo.php');
?>