<?php
	include_once '../connect.php';
	include_once '../index.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ввод данных студента</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<form action="newPersoninfo.php" method="post">
			<label for="name">Имя студента</label>
			<input type="text" name="name" placeholder="Введите имя студента" required><br><br>

			<label for="birthday">Дата рождения</label>
			<input type="date" name="birthday" placeholder="Укажите дату рождения" required><br><br>

			<label for="phone">Номер телефона</label>
			<input type="tel" name="phone" placeholder="Введите номер телефона" required><br><br>

			<button type="sumbit">Добавить</button>
	</form>
</body>
</html>