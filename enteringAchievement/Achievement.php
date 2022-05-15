<?php
	include_once '../connect.php';
	include_once '../index.php';

	$query = "SELECT * FROM `personinfo`";
	$rez = mysqli_query($connect, $query);
	if (mysqli_num_rows($rez) == 0) {
		alert('Студенты не найдены, ввод невозможен');
	}

	function alert($msg) {
    	echo '<script type="text/javascript">alert("' . $msg . '")</script>';
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ввод оценок</title>
	<link rel="stylesheet" href="../css/styleAchievement.css">
</head>
<body>
	<form action="newAchievement.php" method="post">
			<label for="id">ID студента</label>
			<select name="id" id="id">
				<?php while ($row = mysqli_fetch_array($rez)):; ?> 
				<option><?= $row[0]. ' - ' . $row[1]?></option>
				<?php endwhile; ?>
			</select>
			<br>
			<label for="math">Математика </label>
			<input type="number" name="math" placeholder="Введите оценку" min="1" max="5" required><br>

			<label for="russian">Русский </label>
			<input type="number" name="russian" placeholder="Введите оценку" min="1" max="5" required><br>

			<label for="inf">Информатика </label>
			<input type="number" name="inf" placeholder="Введите оценку" min="1" max="5" required><br>

			<button type="sumbit">Добавить</button>
	</form>
</body>
</html>