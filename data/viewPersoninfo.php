<?php
	include_once '../connect.php';
	include_once '../index.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Данные студентов</title>
	<link rel="stylesheet" type="text/css" href="../css/style-view.css">
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>Имя студента</th>
			<th>Дата рождения</th>
			<th>Номер телефона</th>
		</tr>
		<?php
			$students = mysqli_query($connect, "SELECT * FROM `personinfo`");
			$students = mysqli_fetch_all($students);
			foreach ($students as $student) {
				?>
				<tr>
					<td><?= $student[0]?></td>
					<td><?= $student[1]?></td>
					<td><?= date('d.m.Y', strtotime($student[2]))?></td>
					<td><?= $student[3]?></td>
					<td><a href="../update/f-updatePerson.php?id=<?= $student[0]?>" class="update">Обновить</a></td>
					<td><a href="../delete/deletePerson.php?id=<?= $student[0]?>" class="delete">Удалить</a></td>
					<td><a href="../enteringAchievement/appraisal.php?id=<?= $student[0]?>" class="oc">Оценки</a></td>
				</tr>
				<?php
			}
		?>
	</table>
</body>
</html>