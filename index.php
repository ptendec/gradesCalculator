<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script src="../js/script.js"></script>
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
	integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
	crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
	integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
	crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" 
	crossorigin="anonymous"></script>

</head>
<body>
<?php
		include ("php/header.php");
?>	
	<section class="content">
		<div class="wrapper">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<p class="content_description">Этот сервис создан в целях рассчитать свои оценки, отталкиваясь от syllabus'а</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="feedback">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<form class="form" action="php/mail.php" method="POST">
						<h2>Feedback Form</h2>
						<input class="input_from" name="user_name" required type="text" placeholder="Введите имя"><br>
						<input class="input_from" name="user_phone" required  type="tel" placeholder="Введите номер"><br>
						<input class="input_from" name="user_email" required  type="email" placeholder="Введите email"><br>
						<textarea class="textarea" name="question" required id="" cols="30" rows="10" placeholder="Вопрос"></textarea>
						<input type="submit" class="submit">
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>