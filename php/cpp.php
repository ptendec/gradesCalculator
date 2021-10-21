<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>C++ calculate</title>
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
					<p class="week_2">Оценка за 2 неделю:</p>
					<input value="" id="week_2_score" value class="week_2_score" type="text"><hr>
					<p class="week_3">Оценка за 3 неделю:</p>
					<input value="" id="week_3_score" class="week_3_score" type="text"><hr>
					<p class="week_4">Оценка за 4 неделю:</p>
					<input value="" id="week_4_score" class="week_4_score" type="text"><hr>
					<p class="cpp_mid_term">Оценка за MidTerm:</p>
					<input value="" id="cpp_mid_term_score" class="cpp_mid_term_score" type="text"><hr>
				</div>
				<div class="col-xl-6">
					<p class="first_part_of_trimester">Вторая часть триместра:</p>
					<p class="week_5">Оценка за 5 неделю:</p>
					<input value="" id="week_5_score" class="week_5_score" type="text"><hr>
					<p class="week_6">Оценка за 6 неделю:</p>
					<input value="" id="week_6_score" class="week_6_score" type="text"><hr>
					<p class="week_8">Оценка за 8 неделю:</p>
					<input value="" id="week_8_score" class="week_8_score" type="text"><hr>
					<p class="week_9">Оценка за 9 неделю:</p>
					<input value="" id="week_9_score" class="week_9_score" type="text"><hr>
					<p class="week_10">Оценка за 10 неделю:</p>
					<input value="" id="week_10_score" class="week_10_score" type="text"><hr>
					<p class="cpp_end_term">Оценка за EndTerm:</p>
					<input value="" id="cpp_end_term_score" class="cpp_end_term_score" type="text"><hr>
					<p class="cpp_final">Оценка за Final:</p>
					<input value="" id="cpp_final_score" class="cpp_final_score" type="text"><hr>
					<input onclick="calculate_by_cpp_score()" type="button" class="submit_cpp_button" value="Рассчитать">
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
		</div>
	</section>
</body>
</html>
<!-- 
Calculate total:
ICT
C++
Calculus 1
EAP B1
EAP B2
--> 

<!--
Рассчитать тотал по рубежкам и по файналу
Рассчиать детально(ассайнменты, недели, лабки, куизы, )
 -->