<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="../style/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
	integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>

	<div id="wrapper_of_form_reg" class="wrapper_of_form_reg">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 align-self-center">
					<div class="form_of_registration">
						<button class="close_button" value="X" onclick="close_reg_form()">
								<img src="../img/close.png" width="16px" alt="">
							</button>
						<form class="" action="../php/registration.php" method="post">
							<p class="title_reg">Регистрация</p>
							<p class="reg_p">Введите ваше имя:</p>
							<input type="text" class="first_name" placeholder="Имя" name="first_name" id="first_name"> 
							<p class="reg_p">Введите вашу фамилию:</p>
							<input type="text" class="last_name" placeholder="Фамилия" name="last_name" id="last_name"> 
							<p class="reg_p">Введите ваш email</p>
							<input type="text" class="email" placeholder="Email" name="email" id="email">
							<p class="reg_p">Введите ваш пароль</p>
							<input type="text" class="password" placeholder="Пароль" name="password" id="password">
							<select name="educational_program" class="educational_program" id="educational_program">
								<option value="Media">Media Technologies</option>
								<option value="Software">Software Enginering</option>
								<option value="Cyber">Cyber Security</option>
								<option value="BD">Big Data Analysis</option>
							</select> 
							<input type="submit" class="reg_button" name="reg_button" value="Зарегистрироваться">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="wrapper_of_form_auth" class="wrapper_of_form_auth">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 align-self-center">
					<div class="form_of_authorization">
						<button class="close_button" value="X" onclick="close_auth_form()">
							<img src="../img/close.png" width="16px" alt="">
						</button>
						<form class="" action="../php/authorization.php" method="post">
						<p class="title_reg">Авторизация</p>
						<input type="text" class="email" placeholder="Введите ваш email" name="email" id="email"> <br>
						<input type="text" class="password" placeholder="Введите вашу пароль" name="password" id="password"> <br>
						<input type="submit" class="auth_button" name="auth_button" value="Авторизироваться">
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
 	
</body>
</html>