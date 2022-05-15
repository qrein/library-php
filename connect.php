<?php
	$connect = mysqli_connect('localhost', 'root', 'root', 'school');

	if (!$connect) {
		die('Ошибка подключения к базе данных (' . mysqli_connect_errno() . '): '. mysqli_connect_error());
	}
?>