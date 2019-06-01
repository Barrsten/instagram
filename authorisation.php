<!DOCTYPE html>
<html lang="en">
<head>
	<title>Instagram</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="UTF-8">
	<style>
		.top{
			margin-top: 100px;
		}
	</style>
</head>
<body>
	<?php 
		$connect = mysqli_connect('127.0.0.1', 'root', '', 'barrsten');
	?>
	<div class="container mx-auto row top">
	<div class="col-3 ml-auto mr-auto border border-light">
		<img src="2.png" class="w-50 mt-2" style="margin-left: 25%">
		<br>
		<br>
		<form method="POST" action="enter.php">
			<input type="text" name="mail" class="form-control" placeholder="Эл. адрес">
			<br>
			<input type="password" name="password" class="form-control" placeholder="Пароль">
			<br>
			<button class="btn btn-primary" style="margin-left: 30%">Войти</button>
		</form>
		<?php 
			echo $_GET['error']
		?>
	</div>
	</div>
</body>
</html>