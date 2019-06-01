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
	<div class="col-4 ">
		<img src="1.png">
	</div>
	<div class="col-3 ml-auto mr-auto border border-light">
		<img src="2.png" class="w-50 mt-2" style="margin-left: 25%">
		<h5 style="text-align: center">Зарегистрируйтесь, чтобы смотреть фото и видео ваших друзей</h5>
		<form method="POST" action="registration.php" enctype="multipart/form-data">
			<input type="text" name="mail" class="form-control" placeholder="Эл. адрес">
			<br>
			<input type="text" name="name" class="form-control" placeholder="Имя и фамилия">
			<br>
			<input type="text" name="nickname" class="form-control" placeholder="Имя пользователя">
			<br>
			<input type="password" name="password" class="form-control" placeholder="Пароль">
			<br>
			<input type="file" name="avatar">
			<br>
			<br>
			<button class="btn btn-primary" style="margin-left: 30%">Регистрация</button>
		</form>
		<br>
		<p class="font-weight-normal text-secondary" style="text-align: center">Регистрируясь, вы принимаете наши Условия, Политику использования данных и Политику в отношении файлов cookie.</p>
		<div style="text-align: center;"> 
		<span>Есть аккаунт? </span><span><a href="authorisation.php" class="text-primary">Вход</a></span>
		</div>
	</div>
	</div>

</body>
</html>