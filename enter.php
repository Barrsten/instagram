<?php 
		$connect = mysqli_connect('127.0.0.1', 'root', '', 'barrsten');
		$result = mysqli_query($connect, "SELECT * FROM insta WHERE mail = '" . $_POST['mail'] . "' AND password = '" . $_POST['password'] . "'");
		$r = $result->fetch_assoc();
		if($result->num_rows==0){
		header('Location: http://lyglaevartem/instagram/authorisation.php?error="ошибка"');
	}else{
		header('Location: http://lyglaevartem/instagram/login.php?id=' . $r['id'] . '');
	}
?>