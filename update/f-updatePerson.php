<?php
	include_once '../connect.php';
	include_once '../index.php';

	$id = $_GET['id'];
	$students = mysqli_query($connect, "SELECT * FROM `personinfo` WHERE `id` = '$id'");
	$students = mysqli_fetch_assoc($students);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update student</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<form action="updatePerson.php" method="post">
		<input type="hidden" name="id" value="<?= $students['id']?>">
		<label for="name">Имя студента</label>
		<input type="text" name="name" value="<?= $students['name']?>" required><br><br>

		<label for="birthday">Дата рождения</label>
		<input type="date" name="birthday" value="<?= $students['birthday']?>" required><br><br>

		<label for="phone">Номер телефона</label>
		<input type="text" name="phone" value="<?= $students['phone']?>" required><br><br>

		<button type="sumbit">Обновить</button>
	</form>
</body>
</html>