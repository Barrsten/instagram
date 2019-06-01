<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'barrsten');
	mysqli_query($connect, "INSERT INTO comment (text_comment, post_id) VALUES ('" . $_POST['text_comment'] . "', '" . $_POST['post_id'] . "')");
	header('Location: http://lyglaevartem/instagram/login.php?id=' . $_POST['post_id'] . '');	
?>