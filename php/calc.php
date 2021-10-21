<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="../style/style.css">
	<script src="../js/script.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
	integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
	<?php
		include ("header.php");
	?>
	<section class="calculate_cpp">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<p class="first_part_of_trimester">Первая часть триместра:</p>
					<p class="assignment_1">Оценка за 1-ую аттестацию</p>
					<input class="assignment_1_score" type="text"><hr>
				</div>
				<div class="col-xl-6">
					<p class="first_part_of_trimester">Вторая часть триместра:</p>
					<p class="assignment_4">Оценка за 2-ую аттестацию:</p>
					<input class="assignment_4_score" type="text"><hr>
					<p class="ict_final">Оценка за Final:</p>
					<input class="ict_final_score" type="text"><hr>
					<input type="button" class="submit_cpp_button" value="Рассчитать">
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4">
					<p class="first_att_cpp_p">Ваша оценка за первую аттестацию:</p><p id="first_att_cpp">0</p>
				</div>
				<div class="col-xl-4">
					<p class="second_att_cpp_p">Ваша оценка за вторую аттестацию:</p><p id="second_att_cpp">0</p>
				</div>
				<div class="col-xl-4">
					<p class="total_cpp_p">Ваша оценка за триместр:</p><p id="total_cpp">0</p>
				</div>
		</div>
	</section>
</body>
</html>
