<?php
	include_once '../connect.php';

	$id = $_POST['id'];
	$math = $_POST['math'];
	$russian = $_POST['russian'];
	$inf = $_POST['inf'];

	$id = preg_replace('/\D+/','', $id);

	mysqli_query($connect, "INSERT INTO `achievement` (`id`, `mathematics`, `russian`, `informatics`) VALUES ('$id', '$math', '$russian', '$inf');");

	header('Location: ../enteringAchievement/Achievement.php');
?>