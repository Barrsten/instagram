<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Document</title>
	<style type="text/css">
		.img{
			width: 600px;
			height: 600px;
		}
	</style>
</head>
<body>
	<?php 
		$connect = mysqli_connect('127.0.0.1', 'root', '', 'barrsten');
		$check = mysqli_query($connect, "SELECT * FROM insta WHERE id='" . $_GET['id'] . "'");
		$res2 = $check->fetch_assoc();
	?>
	<div class="container mx-auto">
		<div class="col-4">
			<h2>
				<?php  
					echo $res2['name'];
				?>
			</h2>
			<p>
				<?php 
					echo $res2['nickname'];
				?>
			</p>
			<h4>Опубликовать новый пост:</h4>
			<form method="POST" action="insert.php" enctype="multipart/form-data">
				<input type="file" name="image">
				<input type="" name="text" placeholder="Введите подпись...">
				<?php echo '<input name="user_id" type="hidden" value="' . $res2['id'] . '" >' ; ?>
				<button class="btn btn-prime">Опубликовать</button>
			</form>
			<?php 
				$result = mysqli_query($connect, "SELECT insta.mail, insta.name, insta.nickname, insta.password, insta.avatar, post.image, post.text, post.user_id, post.id AS post_id2 FROM post INNER JOIN insta ON post.user_id = insta.id");
				for($i=0; $i<$result->num_rows;$i++){
				$res = $result->fetch_assoc();
			?>
			<?php
				echo '<div class="col-9 mt-2 ml-auto mr-auto border border-light">';
				echo '<div class="row">';
				echo '<img src="' . $res["avatar"] . '" class="rounded-circle w-25 h-25">';
				echo '<h4>' . $res["nickname"] . '</h4>';
				echo '</div>';
				echo '<img src="' . $res["image"] . '" class="img">';
				echo '<div class="row">';
				echo '<h5>' . $res["nickname"] . '</h5>';
				echo '<p>' . $res["text"] . '</p>';
			?>
			<form method="POST" action="comment.php">
				<?php 
					echo '<h4>' . $res["nickname"] . '</h4>';
					echo '<span>' . $res[''] . '</span>';
					echo '<input name="text_comment" placeholder="Оставьте комментарий...">';
					echo '<input name="post_id" type="hidden" value="' . $res['post_id2'] . '" >';
				?>
			</form>
			<?php 
				echo '</div>';
				echo '</div>';
			?>
		<?php } ?>
		</div>
	</div>
</body>
</html>
