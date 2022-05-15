<?php
	include_once '../connect.php';
	include_once '../index.php';

	$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Оценки студента</title>
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
			$achievements = mysqli_query($connect, "SELECT * FROM `achievement` INNER JOIN `personinfo` ON achievement.id = personinfo.id
				WHERE achievement.id = '$id'");
			if (!mysqli_num_rows($achievements) == 0) {
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
			}
			else
				echo '<td colspan="5">Оценок нет</td>';
		?>
	</table>
</body>
</html>