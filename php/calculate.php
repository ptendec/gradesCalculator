<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script src="../js/script.js"></script>
	<link rel="stylesheet" href="../style/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
	integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
	<?php
		include ("header.php");
	?>

	<section class="subjects">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="calculate_wrapper">
						<a class="calculate_grade_link" href="total.php">Рассчитать тотал оценку по MidTerm, EndTerm и по Final'у</a><br>
						<a class="calculate_grade_link" href="cpp.php">Рассчитать тотал оценку по C++</a><br>
						<a class="calculate_grade_link" href="ict.php">Рассчитать тотал оценку по ICT</a><br>
						<!--<a class="calculate_grade_link" href="eap_b2.php">Рассчитать тотал оценку по EAP B2</a><br>-->
						<!--<a class="calculate_grade_link" href="calc.php">Рассчитать тотал оценку по Calculus 1</a><br>-->
						<!--<a class="calculate_grade_link" href="eap_b1.php">Рассчитать тотал оценку по EAP B1</a><br>-->
					</div>
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