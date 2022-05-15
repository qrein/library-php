<?php
	include_once '../connect.php';
	include_once '../index.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Оценки студентов</title>
	<link rel="stylesheet" type="text/css" href="../css/style-view.css">
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>Имя студента</th>
			<th>Математика</th>
			<th>Русский язык</th>
			<th>Информатика</th>
		</tr>

		<?php
			$achievements = mysqli_query($connect, "SELECT * FROM `achievement` INNER JOIN `personinfo` ON achievement.id = personinfo.id");
			$achievements = mysqli_fetch_all($achievements);
			foreach ($achievements as $achievement) {
				?>
				<tr>
					<td><?= $achievement[0]?></td>
					<td><?= $achievement[5]?></td>
					<td><?= $achievement[1]?></td>
					<td><?= $achievement[2]?></td>
					<td><?= $achievement[3]?></td>
					<td><a href="../update/f-updateAchievement.php?id=<?= $achievement[0]?>" class="update">Обновить</a></td>
					<td><a href="../delete/deleteAchievement.php?id=<?= $achievement[0]?>" class="delete">Удалить</a></td>
				</tr>
				<?php
			}
		?>
	</table>
	<br><br><br><br><br>
	<table align="right">
		<td colspan="5">Неуспевающие</td>
		<tr>
			<th>ID</th>
			<th>Имя студента</th>
			<th>Математика</th>
			<th>Русский язык</th>
			<th>Информатика</th>
		</tr>
		<?php
			$underperformings = mysqli_query($connect, "SELECT * FROM `achievement` INNER JOIN `personinfo` ON achievement.id = personinfo.id 
				WHERE `mathematics` = 2 OR `russian` = 2  OR `informatics` = 2");
			$underperformings = mysqli_fetch_all($underperformings);
			foreach ($underperformings as $underperforming) {
				?>
				<tr>
					<td><?= $underperforming[0]?></td>
					<td><?= $underperforming[5]?></td>
					<td><?= $underperforming[1]?></td>
					<td><?= $underperforming[2]?></td>
					<td><?= $underperforming[3]?></td>
				</tr>
				<?php
			}
		?>
	</table>
	<table align="right">
		<td colspan="5">Отличники</td>
		<tr>
			<th>ID</th>
			<th>Имя студента</th>
			<th>Математика</th>
			<th>Русский язык</th>
			<th>Информатика</th>
		</tr>
		<?php
			$excellent_students = mysqli_query($connect, "SELECT * FROM `achievement` INNER JOIN `personinfo` ON achievement.id = personinfo.id 
				WHERE `mathematics` = 5 AND `russian` = 5 AND `informatics` = 5");
			$excellent_students = mysqli_fetch_all($excellent_students);
			foreach ($excellent_students as $excellent_student) {
				?>
				<tr>
					<td><?= $excellent_student[0]?></td>
					<td><?= $excellent_student[5]?></td>
					<td><?= $excellent_student[1]?></td>
					<td><?= $excellent_student[2]?></td>
					<td><?= $excellent_student[3]?></td>
				</tr>
				<?php
			}
		?>
	</table>
</body>
</html>