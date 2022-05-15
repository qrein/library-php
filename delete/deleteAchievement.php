<?php
	include_once '../connect.php';

	$id = $_GET['id'];

	mysqli_query($connect, "DELETE FROM `achievement` WHERE `achievement`.`id` = '$id'");

	header('Location: ../data/viewAchievement.php');
?>