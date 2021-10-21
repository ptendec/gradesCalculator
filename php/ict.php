<?php
session_start();
?>
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
					<p id="assignment_1" class="assignment_1">Оценка за Assignment 1:</p>
					<input value="" id="assignment_1_score" class="assignment_1_score" type="text"><hr>
					<p id="assignment_2" class="assignment_2">Оценка за Assignment 2:</p>
					<input value="" id="assignment_2_score" class="assignment_2_score" type="text"><hr>
					<p id="assignment_3" class="assignment_3">Оценка за Assignment 3:</p>
					<input value="" id="assignment_3_score" class="assignment_3_score" type="text"><hr>
					<p id="ict_quiz" class="ict_quiz">Оценка за Quiz:</p>
					<input value="" id="ict_quiz_score" class="ict_quiz_score" type="text"><hr>
					<p id="ict_mid_term" class="ict_mid_term">Оценка за MidTerm:</p>
					<input value="" id="ict_mid_term_score" class="ict_mid_term_score" type="text"><hr>
				</div>
				<div class="col-xl-6">
					<p class="first_part_of_trimester">Вторая часть триместра:</p>
					<p id="assignment_4" class="assignment_4">Оценка за Assignment 4:</p>
					<input value="" id="assignment_4_score" class="assignment_4_score" type="text"><hr>
					<p id="assignment_5" class="assignment_5">Оценка за Assignment 5:</p>
					<input value="" id="assignment_5_score" class="assignment_5_score" type="text"><hr>
					<p id="assignment_6" class="assignment_6">Оценка за Assignment 6:</p>
					<input value="" id="assignment_6_score" class="assignment_6_score" type="text"><hr>
					<p id="assignment_7" class="assignment_7">Оценка за Assignment 7:</p>
					<input value="" id="assignment_7_score" class="assignment_7_score" type="text"><hr>
					<p id="ict_end_term" class="ict_end_term">Оценка за EndTerm:</p>
					<input value="" id="ict_end_term_score" class="ict_end_term_score" type="text"><hr>
					<p id="ict_final" class="ict_final">Оценка за Final Project:</p>
					<input value="" id="ict_final_score" class="ict_final_score" type="text"><hr>
					<input onclick="calculate_by_ict_score()" type="button" class="submit_ict_button" value="Рассчитать">
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4">
					<p class="first_att_ict_p">Ваша оценка за первую аттестацию:</p><p id="first_att_ict">0</p>
				</div>
				<div class="col-xl-4">
					<p class="second_att_ict_p">Ваша оценка за вторую аттестацию:</p><p id="second_att_ict">0</p>
				</div>
				<div class="col-xl-4">
					<p class="total_ict_p">Ваша оценка за триместр:</p><p id="total_ict">0</p>
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