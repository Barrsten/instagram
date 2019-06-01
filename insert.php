<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'barrsten');
	$file_tmp = $_FILES['image']['tmp_name'];
	$file_name = $_FILES['image']['name'];
	move_uploaded_file($file_tmp, $file_name);
	mysqli_query($connect, "INSERT INTO post (image, text, user_id) VALUES ('" . $file_name . "','" . $_POST['text'] . "', '" . $_POST['user_id'] . "')");
	header('Location: http://lyglaevartem/instagram/login.php?id=' . $_POST['user_id'] . '');
?>