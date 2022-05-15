<?php
	include_once '../connect.php';

	$id = $_POST['id'];
	$name = $_POST['name'];
	$birthday = $_POST['birthday'];
	$phone = $_POST['phone'];

	mysqli_query($connect, "UPDATE `personinfo` SET `name` = '$name', `birthday` = '$birthday', `phone` = '$phone' WHERE `personinfo`.`id` = '$id'");

	header('Location: ../data/viewPersoninfo.php');
?>