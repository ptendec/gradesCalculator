<?php
	session_start();
	require_once('query_server.php');
	$first_att_cpp_stat = $_POST['first_att_cpp_stat'];
	$second_att_cpp_stat = $_POST['second_att_cpp_stat'];
	$cpp_final_score_stat = $_POST['cpp_final_score_stat'];

	$first_att_ict_stat = $_POST['first_att_ict_stat'];
	$second_att_ict_stat = $_POST['second_att_ict_stat'];
	$ict_final_score_stat = $_POST['ict_final_score_stat'];

	$first_att_calc_stat = $_POST['first_att_calc_stat'];
	$second_att_calc_stat = $_POST['second_att_calc_stat'];
	$calc_final_score_stat = $_POST['calc_final_score_stat'];

	$first_att_cult_stat = $_POST['first_att_cult_stat'];
	$second_att_cult_stat = $_POST['second_att_cult_stat'];
	$cult_final_score_stat = $_POST['cult_final_score_stat'];

	$first_att_eap_stat = $_POST['first_att_eap_stat'];
	$second_att_eap_stat = $_POST['second_att_eap_stat'];
	$eap_final_score_stat = $_POST['eap_final_score_stat'];

	$first_att_phc_stat = $_POST['first_att_phc_stat'];
	$second_att_phc_stat = $_POST['second_att_phc_stat'];

	$practice_final_score_stat = $_POST['practice_final_score_stat'];






	$total_of_cpp = (0.3 * $first_att_cpp_stat) + (0.3 * $second_att_cpp_stat) + (0.4 * $cpp_final_score_stat);
	$total_of_ict = (0.3 * $first_att_ict_stat) + (0.3 * $second_att_ict_stat) + (0.4 * $ict_final_score_stat);
	$total_of_calc = (0.3 * $first_att_calc_stat) + (0.3 * $second_att_calc_stat) + (0.4 * $calc_final_score_stat);
	$total_of_cult = (0.3 * $first_att_cult_stat) + (0.3 * $second_att_cult_stat) + (0.4 * $cult_final_score_stat);
	$total_of_eap = (0.3 * $first_att_eap_stat) + (0.3 * $second_att_eap_stat) + (0.4 * $eap_final_score_stat);
	$total_of_phc = (0.5 * $first_att_phc_stat) + (0.5 * $second_att_phc_stat);
	$total_of_practice = $practice_final_score_stat;
	$gpa_of_cpp;
	$gpa_of_ict;
	$gpa_of_calc;
	$gpa_of_cult;
	$gpa_of_eap;
	$gpa_of_phc;
	$gpa_of_practice;
	if($total_of_cpp >= 95 && $total_of_cpp <= 100){
		$gpa_of_cpp = 4;
	}
	elseif($total_of_cpp >= 90 && $total_of_cpp <= 94){
		$gpa_of_cpp = 3.67;
	}
	elseif($total_of_cpp >= 85 && $total_of_cpp <= 89){
		$gpa_of_cpp = 3.33;
	}
	elseif($total_of_cpp >= 80 && $total_of_cpp <= 84){
		$gpa_of_cpp = 3.00;
	}
	elseif($total_of_cpp >= 75 && $total_of_cpp <= 79){
		$gpa_of_cpp = 2.67;
	}
	elseif($total_of_cpp >= 70 && $total_of_cpp <= 74){
		$gpa_of_cpp = 2.33;
	}
	elseif($total_of_cpp >= 65 && $total_of_cpp <= 69){
		$gpa_of_cpp = 2.00;
	}
	elseif($total_of_cpp >= 60 && $total_of_cpp <= 64){
		$gpa_of_cpp = 1.67;
	}
	elseif($total_of_cpp >= 55 && $total_of_cpp <= 59){
		$gpa_of_cpp = 1.33;
	}
	elseif($total_of_cpp >= 50 && $total_of_cpp <= 54){
		$gpa_of_cpp = 1.00;	
	}
	else{
		$gpa_of_cpp = 0;
	}


	if($total_of_ict >= 95 && $total_of_ict <= 100){
		$gpa_of_ict = 4;
	}
	elseif($total_of_ict >= 90 && $total_of_ict <= 94){
		$gpa_of_ict = 3.67;
	}
	elseif($total_of_ict >= 85 && $total_of_ict <= 89){
		$gpa_of_ict = 3.33;
	}
	elseif($total_of_ict >= 80 && $total_of_ict <= 84){
		$gpa_of_ict = 3.00;
	}
	elseif($total_of_ict >= 75 && $total_of_ict <= 79){
		$gpa_of_ict = 2.67;
	}
	elseif($total_of_ict >= 70 && $total_of_ict <= 74){
		$gpa_of_ict = 2.33;
	}
	elseif($total_of_ict >= 65 && $total_of_ict <= 69){
		$gpa_of_ict = 2.00;
	}
	elseif($total_of_ict >= 60 && $total_of_ict <= 64){
		$gpa_of_ict = 1.67;
	}
	elseif($total_of_ict >= 55 && $total_of_ict <= 59){
		$gpa_of_ict = 1.33;
	}
	elseif($total_of_ict >= 50 && $total_of_ict <= 54){
		$gpa_of_ict = 1.00;	
	}
	else{
		$gpa_of_ict = 0;
	}

	if($total_of_calc >= 95 && $total_of_calc <= 100){
		$gpa_of_calc = 4;
	}
	elseif($total_of_calc >= 90 && $total_of_calc <= 94){
		$gpa_of_calc = 3.67;
	}
	elseif($total_of_calc >= 85 && $total_of_calc <= 89){
		$gpa_of_calc = 3.33;
	}
	elseif($total_of_calc >= 80 && $total_of_calc <= 84){
		$gpa_of_calc = 3.00;
	}
	elseif($total_of_calc >= 75 && $total_of_calc <= 79){
		$gpa_of_calc = 2.67;
	}
	elseif($total_of_calc >= 70 && $total_of_calc <= 74){
		$gpa_of_calc = 2.33;
	}
	elseif($total_of_calc >= 65 && $total_of_calc <= 69){
		$gpa_of_calc = 2.00;
	}
	elseif($total_of_calc >= 60 && $total_of_calc <= 64){
		$gpa_of_calc = 1.67;
	}
	elseif($total_of_calc >= 55 && $total_of_calc <= 59){
		$gpa_of_calc = 1.33;
	}
	elseif($total_of_calc >= 50 && $total_of_calc <= 54){
		$gpa_of_calc = 1.00;	
	}
	else{
		$gpa_of_calc = 0;
	}

	if($total_of_cult >= 95 && $total_of_cult <= 100){
		$gpa_of_cult = 4;
	}
	elseif($total_of_cult >= 90 && $total_of_cult <= 94){
		$gpa_of_cult = 3.67;
	}
	elseif($total_of_cult >= 85 && $total_of_cult <= 89){
		$gpa_of_cult = 3.33;
	}
	elseif($total_of_cult >= 80 && $total_of_cult <= 84){
		$gpa_of_cult = 3.00;
	}
	elseif($total_of_cult >= 75 && $total_of_cult <= 79){
		$gpa_of_cult = 2.67;
	}
	elseif($total_of_cult >= 70 && $total_of_cult <= 74){
		$gpa_of_cult = 2.33;
	}
	elseif($total_of_cult >= 65 && $total_of_cult <= 69){
		$gpa_of_cult = 2.00;
	}
	elseif($total_of_cult >= 60 && $total_of_cult <= 64){
		$gpa_of_cult = 1.67;
	}
	elseif($total_of_cult >= 55 && $total_of_cult <= 59){
		$gpa_of_cult = 1.33;
	}
	elseif($total_of_cult >= 50 && $total_of_cult <= 54){
		$gpa_of_cult = 1.00;	
	}
	else{
		$gpa_of_cult = 0;
	}

	if($total_of_eap >= 95 && $total_of_eap <= 100){
		$gpa_of_eap = 4;
	}
	elseif($total_of_eap >= 90 && $total_of_eap <= 94){
		$gpa_of_eap = 3.67;
	}
	elseif($total_of_eap >= 85 && $total_of_eap <= 89){
		$gpa_of_eap = 3.33;
	}
	elseif($total_of_eap >= 80 && $total_of_eap <= 84){
		$gpa_of_eap = 3.00;
	}
	elseif($total_of_eap >= 75 && $total_of_eap <= 79){
		$gpa_of_eap = 2.67;
	}
	elseif($total_of_eap >= 70 && $total_of_eap <= 74){
		$gpa_of_eap = 2.33;
	}
	elseif($total_of_eap >= 65 && $total_of_eap <= 69){
		$gpa_of_eap = 2.00;
	}
	elseif($total_of_eap >= 60 && $total_of_eap <= 64){
		$gpa_of_eap = 1.67;
	}
	elseif($total_of_eap >= 55 && $total_of_eap <= 59){
		$gpa_of_eap = 1.33;
	}
	elseif($total_of_eap >= 50 && $total_of_eap <= 54){
		$gpa_of_eap = 1.00;	
	}
	else{
		$gpa_of_eap = 0;
	}

	if($total_of_phc >= 95 && $total_of_phc <= 100){
		$gpa_of_phc = 4;
	}
	elseif($total_of_phc >= 90 && $total_of_phc <= 94){
		$gpa_of_phc = 3.67;
	}
	elseif($total_of_phc >= 85 && $total_of_phc <= 89){
		$gpa_of_phc = 3.33;
	}
	elseif($total_of_phc >= 80 && $total_of_phc <= 84){
		$gpa_of_phc = 3.00;
	}
	elseif($total_of_phc >= 75 && $total_of_phc <= 79){
		$gpa_of_phc = 2.67;
	}
	elseif($total_of_phc >= 70 && $total_of_phc <= 74){
		$gpa_of_phc = 2.33;
	}
	elseif($total_of_phc >= 65 && $total_of_phc <= 69){
		$gpa_of_phc = 2.00;
	}
	elseif($total_of_phc >= 60 && $total_of_phc <= 64){
		$gpa_of_phc = 1.67;
	}
	elseif($total_of_phc >= 55 && $total_of_phc <= 59){
		$gpa_of_phc = 1.33;
	}
	elseif($total_of_phc >= 50 && $total_of_phc <= 54){
		$gpa_of_phc = 1.00;	
	}
	else{
		$gpa_of_phc = 0;
	}

	if($total_of_practice >= 95 && $total_of_practice <= 100){
		$gpa_of_practice = 4;
	}
	elseif($total_of_practice >= 90 && $total_of_practice <= 94){
		$gpa_of_practice = 3.67;
	}
	elseif($total_of_practice >= 85 && $total_of_practice <= 89){
		$gpa_of_practice = 3.33;
	}
	elseif($total_of_practice >= 80 && $total_of_practice <= 84){
		$gpa_of_practice = 3.00;
	}
	elseif($total_of_practice >= 75 && $total_of_practice <= 79){
		$gpa_of_practice = 2.67;
	}
	elseif($total_of_practice >= 70 && $total_of_practice <= 74){
		$gpa_of_practice = 2.33;
	}
	elseif($total_of_practice >= 65 && $total_of_practice <= 69){
		$gpa_of_practice = 2.00;
	}
	elseif($total_of_practice >= 60 && $total_of_practice <= 64){
		$gpa_of_practice = 1.67;
	}
	elseif($total_of_practice >= 55 && $total_of_practice <= 59){
		$gpa_of_practice = 1.33;
	}
	elseif($total_of_practice >= 50 && $total_of_practice <= 54){
		$gpa_of_practice = 1.00;	
	}
	else{
		$gpa_of_practice = 0;
	}

	$user_id_current = $_SESSION['user_id'];
	$insert_query = "INSERT INTO cpp_scores(first_att, second_att, final, total, total_gpa, user_id)
	VALUES ('$first_att_cpp_stat', '$second_att_cpp_stat', '$cpp_final_score_stat', '$total_of_cpp', '$gpa_of_cpp', '$user_id_current');";
	$connect->query($insert_query);
	$insert_query = "INSERT INTO ict_scores(first_att, second_att, final, total, total_gpa, user_id)
	VALUES ('$first_att_ict_stat', '$second_att_ict_stat', '$ict_final_score_stat', '$total_of_ict', '$gpa_of_ict', '$user_id_current');";
	$connect->query($insert_query);
	$insert_query = "INSERT INTO calc_scores(first_att, second_att, final, total, total_gpa, user_id)
	VALUES ('$first_att_calc_stat', '$second_att_calc_stat', '$calc_final_score_stat', '$total_of_calc', '$gpa_of_calc', '$user_id_current');";
	$connect->query($insert_query);
	$insert_query = "INSERT INTO culturology_scores(first_att, second_att, final, total, total_gpa, user_id)
	VALUES ('$first_att_cult_stat', '$second_att_cult_stat', '$cult_final_score_stat', '$total_of_cult', '$gpa_of_cult', '$user_id_current');";
	$connect->query($insert_query);
	$insert_query = "INSERT INTO eap_scores(first_att, second_att, final, total, total_gpa, user_id)
	VALUES ('$first_att_eap_stat', '$second_att_eap_stat', '$eap_final_score_stat', '$total_of_eap', '$gpa_of_eap', '$user_id_current');";
	$connect->query($insert_query);
	$insert_query = "INSERT INTO phc_scores(first_att, second_att, total, total_gpa, user_id)
	VALUES ('$first_att_phc_stat', '$second_att_phc_stat', '$total_of_phc', '$gpa_of_phc', '$user_id_current');";
	$connect->query($insert_query);
	$insert_query = "INSERT INTO practice_scores(total, total_gpa, user_id)
	VALUES ('$total_of_practice', '$gpa_of_practice', '$user_id_current');";
	$connect->query($insert_query);

	$previousPage = $_SERVER["HTTP_REFERER"];
	header('Location: '.$previousPage);
	$connect->close();
?>

<div class="container">
	<div class="row">
		<!-- Here I am using creating div with class to use grid system of Bootsrtap -->
		
	</div>
</div>