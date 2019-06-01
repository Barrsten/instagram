<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'barrsten');
	$file_tmp = $_FILES['image']['tmp_name'];
	$file_name = $_FILES['image']['name'];
	move_uploaded_file($file_tmp, $file_name);
	mysqli_query($connect, "INSERT INTO insta (mail, name, nickname, password, avatar) VALUES ('" . $_POST['mail'] . "','" . $_POST['name'] . "', '" . $_POST['nickname'] . "', '" . $_POST['password'] . "', '" . $file_name . "')");
	mail($_POST['mail'], 'Регистрация на сайте instagram.com', 'Вы успешно зарегистрировались на сайте instagram.com. Ваш login:' . $_POST['nickname'] . ' и пароль ' . $_POST['password'] . '');
	header('Location: http://lyglaevartem/instagram/authorisation.php');
?>