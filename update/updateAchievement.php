<?php
	include_once '../connect.php';

	$id = $_POST['id'];
	$math = $_POST['math'];
	$russian = $_POST['russian'];
	$inf = $_POST['inf'];

	mysqli_query($connect, "UPDATE `achievement` SET `mathematics` = '$math', `russian` = '$russian', `informatics` = '$inf' WHERE `achievement`.`id` = '$id'");


	header('Location: ../data/viewAchievement.php');
?>