<?php
	include_once '../connect.php';
	include_once '../index.php';

	$id = $_GET['id'];
	$achievement = mysqli_query($connect, "SELECT * FROM `achievement` WHERE `id` = '$id'");
	$achievement = mysqli_fetch_assoc($achievement);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update achievement</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<form action="updateAchievement.php" method="post">
		<label for="id">ID студента</label>
		<input type="number" name="id" value="<?= $achievement['id']?>" readonly>

		<label for="math">Математика</label>
		<input type="number" name="math" placeholder="Введите оценку" min="1" max="5" value="<?= $achievement['mathematics']?>" required><br>

		<label for="russian">Русский</label>
		<input type="number" name="russian" placeholder="Введите оценку" min="1" max="5" value="<?= $achievement['russian']?>" required><br>

		<label for="inf">Информатика</label>
		<input type="number" name="inf" placeholder="Введите оценку" min="1" max="5" value="<?= $achievement['informatics']?>" required><br>

		<button type="sumbit">Обновить</button>
	</form>
</body>
</html>