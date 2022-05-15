<?php
	include_once '../connect.php';

	$id = $_GET['id'];

	mysqli_query($connect, "DELETE FROM `personinfo` WHERE `personinfo`.`id` = '$id'");

	header('Location: ../data/viewPersoninfo.php');
?>